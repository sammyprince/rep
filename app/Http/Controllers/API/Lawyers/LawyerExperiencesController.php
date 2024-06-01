<?php

namespace App\Http\Controllers\API\Lawyers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LawyerExperience;
use App\Http\Requests\API\Lawyers\LawyerExperiences\CreateRequest;
use App\Http\Resources\API\LawyerExperiencesResource;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class LawyerExperiencesController extends Controller
{
    /********* Initialize Permission based Middlewares  ***********/
  public function __construct()
  {
        $this->middleware(['api','auth:api','verified','api_setting']);
        $this->middleware('lawyer.api');
      // $this->middleware('permission:lawyer_experiences.index');
      // $this->middleware('permission:lawyer_experiences.create',['only' => ['store']]);
      // $this->middleware('permission:lawyer_experiences.update',['only' => ['update']]);
      // $this->middleware('permission:lawyer_experiences.delete',['only' => ['destroy']]);
      // $this->middleware('permission:lawyer_experiences.export',['only' => ['export']]);
      // $this->middleware('permission:lawyer_experiences.import',['only' => ['import']])
      // $this->middleware('permission:lawyer_experiences.update|lawyer_experiences.is_active',['only' => ['updateStatus']]);
  }

  /********* Getter For Pagination, Searching And Sorting  ***********/
  public function getter($req = null,$export = null)
  {
    $lawyer = auth()->user()->lawyer;
    if($req != null){
      $lawyer_experiences =  $lawyer->lawyer_experiences()->withAll();
      if($req->trash && $req->trash == 'with'){
        $lawyer_experiences =  $lawyer_experiences->withTrashed();
      }
      if($req->trash && $req->trash == 'only'){
        $lawyer_experiences =  $lawyer_experiences->onlyTrashed();
      }
      if($req->column && $req->column != null && $req->search != null){
          $lawyer_experiences = $lawyer_experiences->whereLike($req->column,$req->search);
        }
       else if($req->search && $req->search != null){

            $lawyer_experiences = $lawyer_experiences->whereLike(['name','description'],$req->search);
        }
      if($req->sort && $req->sort['field'] != null && $req->sort['type'] != null){
          $lawyer_experiences = $lawyer_experiences->OrderBy($req->sort['field'],$req->sort['type']);
      }
      else
      {
        $lawyer_experiences = $lawyer_experiences->OrderBy('id','desc');
      }
      if($export != null){ // for export do not paginate
        $lawyer_experiences = $lawyer_experiences->get();
        return $lawyer_experiences;
      }
      $totalLawyerCertifications = $lawyer_experiences->count();
      $lawyer_experiences = $lawyer_experiences->paginate($req->perPage);
      $lawyer_experiences = LawyerExperiencesResource::collection($lawyer_experiences)->response()->getData(true);

      return $lawyer_experiences;
    }
    $lawyer_experiences = LawyerExperiencesResource::collection($lawyer->lawyer_experiences()->withAll()->orderBy('id','desc')->paginate(10))->response()->getData(true);
    return $lawyer_experiences;
  }

  /********* FETCH ALL Lawyer Experiences ***********/
    public function index()
    {
        $lawyer_experiences =  $this->getter();
        $response = generateResponse($lawyer_experiences,count($lawyer_experiences['data']) > 0 ? true:false,'Lawyer Experiences Fetched Successfully',null,'collection');
        return response()->json($response, 200);
    }

  /********* FILTER Lawyer Experiences FOR Search ***********/
   public function filter(Request $request){
     $lawyer_experiences = $this->getter($request);
     $response = generateResponse($lawyer_experiences,count($lawyer_experiences['data']) > 0 ? true:false,'Filter Lawyer Experiences Successfully',null,'collection');
     return response()->json($response, 200);
   }

    /********* ADD NEW Lawyer Experience ***********/
    public function store(CreateRequest $request)
    {
      $lawyer = auth()->user()->lawyer;
      try{
        DB::beginTransaction();
        $request->merge(['lawyer_id'=>auth()->user()->id]);
        $data = $request->all();
        $data['image'] = uploadFile($request,'file','lawyer_experiences');
        $lawyer_experience = $lawyer->lawyer_experiences()->create($data);
        DB::commit();
        $lawyer_experience = $lawyer->lawyer_experiences()->withAll()->find($lawyer_experience->id);
        $lawyer_experience = new LawyerExperiencesResource($lawyer_experience);
      $response = generateResponse($lawyer_experience,true ,'Lawyer Experiences Created Successfully',null,'collection');
      return response()->json($response, 200);
    }
      catch (\Exception $e) {
        DB::rollBack();
        $response = generateResponse(null,false ,$e->getMessage(),null,'collection');
        return response()->json($response, 200);
     }
    }

    /********* View RECORD TO EDIT Or Display ***********/
    public function show(LawyerExperience $lawyer_experience)
    {
        $lawyer = auth()->user()->lawyer;
        if($lawyer_experience->lawyer_id != $lawyer->id){
          $response = generateResponse(null,false ,'Not Found',null,'collection');
          return response()->json($response, 404);
        }
        $lawyer_experience = $lawyer->lawyer_experiences()->withAll()->find($lawyer_experience->id);
        if($lawyer_experience){
          $lawyer_experience = new LawyerExperiencesResource($lawyer_experience);
          $response = generateResponse($lawyer_experience,true,'Lawyer Experience Fetched Successfully',null,'object');
        }
        else{
          $response = generateResponse(null,false,'Lawyer Experience Not Found',null,'object');
        }
        return response()->json($response, 200);
    }

    /********* UPDATE Lawyer Experience ***********/
    public function update(CreateRequest $request, LawyerExperience $lawyer_experience)
    {
        // dd($request->all());
        $lawyer = auth()->user()->lawyer;
        if($lawyer_experience->lawyer_id != $lawyer->id){
          $response = generateResponse(null,false ,'Not Found',null,'collection');
          return response()->json($response, 404);
        }
      try{
        DB::beginTransaction();
        $request->merge(['last_updated_by_user_id'=>auth()->user()->id]);
        $data = $request->all();
        if ($request->file) {
            $data['image'] = uploadFile($request,'file','lawyer_experiences',$lawyer_experience->image);
        } else {
            $data['image'] = $lawyer_experience->image;
        }
        $lawyer_experience->update($data);
        DB::commit();
        $lawyer_experience = $lawyer->lawyer_experiences()->withAll()->find($lawyer_experience->id);
        $lawyer_experience = new LawyerExperiencesResource($lawyer_experience);
        $response = generateResponse($lawyer_experience,true,'Lawyer Experience Updated Successfully',null,'object');
        return response()->json($response, 200);
      }
        catch (\Exception $e) {
          DB::rollBack();
          $response = generateResponse(null,false ,$e->getMessage(),null,'collection');
          return response()->json($response, 200);
       }
    }

    /********* UPDATE Lawyer Experience Status***********/
    public function updateStatus(Request $request,LawyerExperience $lawyer_experience){
      try{
        $lawyer = auth()->user()->lawyer;
        if($lawyer_experience->lawyer_id != $lawyer->id){
          $response = generateResponse(null,false ,'Not Found',null,'collection');
          return response()->json($response, 404);
        }
        $lawyer_experience->update([
          'is_active' => $lawyer_experience->is_active == 1 ? 0:1
        ]);
        $response = generateResponse(null,true,'Lawyer Experience Status Updated Successfully',null,'object');
        return response()->json($response, 200);
      }
      catch (\Exception $e) {
        DB::rollBack();
        $response = generateResponse(null,false ,$e->getMessage(),null,'collection');
        return response()->json($response, 200);
     }
    }


    /********* DELETE Lawyer Experience ***********/
    public function destroy(Request $request,LawyerExperience $lawyer_experience)
    {
      try{
        $lawyer = auth()->user()->lawyer;
        if($lawyer_experience->lawyer_id != $lawyer->id){
          $response = generateResponse(null,false ,'Not Found',null,'collection');
          return response()->json($response, 404);
        }
          if($lawyer_experience->trashed()) {
            $response = generateResponse(null,false ,'Already in Trash',null,'collection');
            return response()->json($response, 404);
          }
          else{
            $lawyer_experience->delete();
          }
          $response = generateResponse(null,true,'Lawyer Experience Deleted Successfully',null,'object');
          return response()->json($response, 200);

        } catch (\Exception $e) {
          DB::rollBack();
          $response = generateResponse(null,false ,$e->getMessage(),null,'collection');
          return response()->json($response, 200);
       }
    }
    /*********Permanently DELETE Lawyer Experience ***********/
    public function destroyPermanently(Request $request,$lawyer_experience)
    {
      try{
        $lawyer= auth()->user()->lawyer;
        $lawyer_experience = $lawyer->lawyer_experiences()->withTrashed()->find($lawyer_experience);
        if($lawyer_experience){
            if($lawyer_experience->lawyer_id != $lawyer->id){
              $response = generateResponse(null,false ,'Not Found',null,'collection');
              return response()->json($response, 404);
            }
          if ($lawyer_experience->trashed()) {
            $lawyer_experience->forceDelete();
            $response = generateResponse(null,true,'Lawyer Experience Deleted Successfully',null,'object');
          }
          else{
            $response = generateResponse(null,false,'Lawyer Experience is not in trash to delete permanently',null,'object');
          }
        }
        else{
          $response = generateResponse(null,false,'Lawyer Experience not found',null,'object');
        }
          return response()->json($response, 200);

        } catch (\Exception $e) {
          DB::rollBack();
          $response = generateResponse(null,false ,$e->getMessage(),null,'collection');
          return response()->json($response, 200);
       }
    }
    /********* Restore Lawyer Experience ***********/
    public function restore(Request $request,$lawyer_experience)
    {
      $lawyer= auth()->user()->lawyer;
      $lawyer_experience = $lawyer->lawyer_experiences()->withTrashed()->find($lawyer_experience);
          if ($lawyer_experience->trashed()) {
            $lawyer_experience->restore();
            $response = generateResponse(null,true,'Lawyer Experience Restored Successfully',null,'object');
          }
          else{
            $response = generateResponse(null,false,'Lawyer Experience is not trashed',null,'object');
          }
          return response()->json($response, 200);
    }
}