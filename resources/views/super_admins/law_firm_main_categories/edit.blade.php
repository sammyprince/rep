@extends('super_admins.layouts.master')

@section('title')
    Edit LawFirm Category
@endsection

@section('css')
    <!-- daterange picker -->
    <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
@endsection

@section('content')
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            {{-- {{ $error }} --}}
        @endforeach
    @endif
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-4 pt-4 pt-lg-0">

                <div class="col-sm-6">
                    <h2 class="main-content-title fw-bold mb-0">LawFirm Main Category</h2>
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{ route('super_admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('super_admin.law_firm_main_categories.index') }}">LawFirm Main
                                Categories</a></li>
                        <li class="breadcrumb-item active">
                            Edit LawFirm Main Category
                        </li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- jquery validation -->
                    <div class="card card-secondary">
                        
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form id="quickForm" method="POST"
                            action="{{ route('super_admin.law_firm_main_categories.update', ['law_firm_main_category' => $law_firm_main_category->id]) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">

                        <div class="row">
                            <div class="w-100">
                                <h5>Multi Language</h5>
                                <div>
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        @foreach ($active_languages as $key => $language)
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link {{$key == 0 ? 'active':''}} mr-1" id="nav-{{$language->code}}-tab" data-toggle="tab" data-target="#nav-{{$language->code}}" type="button" role="tab" aria-controls="nav-{{$language->code}}" aria-selected="true">{{ $language->name }}</button>
                                        </li>
                                        @endforeach
                                    </ul>
                                    <div class="tab-content mt-2 p-2" id="myTabContent">
                                        @foreach ($active_languages as $key => $language)
                                        <div class="tab-pane fade mb-2 {{$key == 0 ? 'show active':''}}" id="nav-{{$language->code}}" role="tabpanel" aria-labelledby="nav-{{$language->code}}-tab">
                                            <div class="form-group">
                                                <label for="InputName-{{$language->code}}">Name ({{$language->code}})</label>
                                                <input type="text" name="name[{{$language->code}}]" value="{{ $law_firm_main_category->getTranslation('name', $language->code) }}" class="form-control @if ($errors->has('name.'.$language->code)) is-invalid @endif" id="InputName-{{$language->code}}" placeholder="Please Enter" aria-describedby="NameError-{{$language->code}}" aria-invalid="true">
                                                <span id="NameError-{{$language->code}}" class="error invalid-feedback">
                                                    @if ($errors->has('name.'.$language->code))
                                                    {{ $errors->first('name.'.$language->code) }}
                                                    @endif
                                                </span>
                                            </div>
                                            <div class="form-group">
                                                <label for="InputDescription">Description ({{$language->code}})</label>
                                                <textarea name="description[{{$language->code}}]" id="discription_editor_{{$language->code}}" class="form-control @if ($errors->has('description.'.$language->code)) is-invalid @endif" rows="3" placeholder="Please Enter" aria-describedby="DescriptionError-{{$language->code}}" aria-invalid="true">{{ $law_firm_main_category->getTranslation('description', $language->code) }}</textarea>
                                                <span id="DescriptionError-{{$language->code}}" class="error invalid-feedback">
                                                    @if ($errors->has('description.'.$language->code))
                                                    {{ $errors->first('description.'.$language->code) }}
                                                    @endif
                                                </span>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                                <div class="col-md-12 col-lg-4">
                                    <div class="form-group">
                                        <label for="InputImage">Choose Picture</label>
                                        <input type="hidden" name="image" class="image" value="">
                                        <input type="file" name="imageFile"
                                            class="custom-file-input imageFile @if ($errors->has('image')) is-invalid @endif"
                                            id="InputImage" placeholder="Select image" aria-describedby="ImageError"
                                            aria-invalid="true">
                                        <span id="ImageError" class="error invalid-feedback">
                                            @if ($errors->has('image'))
                                                {{ $errors->first('image') }}
                                            @endif
                                        </span>
                                        @if ($law_firm_main_category->image)
                                        <div class="custom-file-preview">
                                            <img src="{{ url($law_firm_main_category->image) }}" width="75px" height="75px"
                                                alt="{{ $law_firm_main_category->name }}">
                                        </div>
                                        @else
                                        <div class="custom-file-preview">
                                                -- No Image Selected
                                            </div>
                                        @endif
                                        
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-4">
                                    <div class="form-group">
                                        <label for="InputImage">Choose Icon</label>
                                        <input type="hidden" name="icon" class="image" value="">
                                        <input type="file" name="iconFile"
                                            class="custom-file-input imageFile @if ($errors->has('icon')) is-invalid @endif"
                                            id="InputIcon" placeholder="Select image" aria-describedby="IconError"
                                            aria-invalid="true">
                                        <span id="ImageError" class="error invalid-feedback">
                                            @if ($errors->has('icon'))
                                                {{ $errors->first('icon') }}
                                            @endif
                                        </span>
                                        @if ($law_firm_main_category->icon)
                                        <div class="custom-file-preview">
                                            <img src="{{ url($law_firm_main_category->icon) }}" width="75px" height="75px"
                                                alt="{{ $law_firm_main_category->icon }}">
                                        </div>
                                        @else
                                        <div class="custom-file-preview">
                                                -- No Image Selected
                                            </div>
                                        @endif
                                        
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-4">
                                    <div class="form-group">
                                        <label for="customSwitch1">Status</label>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" name="is_active" value="1"
                                                @if ($law_firm_main_category->is_active) checked @endif class="custom-control-input"
                                                id="customSwitch1" aria-describedby="IsActiveError" aria-invalid="true">
                                            <label class="custom-control-label" for="customSwitch1">Select Category To Be
                                                Active
                                                Or Not</label>
                                        </div>
                                        <span id="IsActiveError" class="error invalid-feedback">
                                            {{-- @if ($errors->has('is_active'))
                                                {{ $errors->first('is_active') }}
                                            @endif --}}
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-4">
                                    <div class="form-group">
                                        <label for="customSwitch1">Feature</label>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" name="is_featured" value="1"
                                                @if ($law_firm_main_category->is_featured) checked @endif class="custom-control-input"
                                                id="customSwitch2" aria-describedby="IsActiveError" aria-invalid="true">
                                            <label class="custom-control-label" for="customSwitch2">Select Category To Be
                                                Featured
                                                Or Not</label>
                                        </div>
                                        <span id="IsActiveError" class="error invalid-feedback">
                                            {{-- @if ($errors->has('is_featured'))
                                                {{ $errors->first('is_featured') }}
                                            @endif --}}
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary px-3 py-1">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
                <!-- right column -->
                <div class="col-md-6">

                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    @include('super_admins.includes.image_cropper_modal')
@endsection

@section('scripts')
    <script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
    <!-- date-range-picker -->
    <script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            CKEDITOR.replace('discription_editor');
        });
    </script>
      @include('super_admins.includes.image_cropper_scripts')
@endsection
