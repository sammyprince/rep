@extends('super_admins.layouts.master')

@section('title')
Courses
@endsection

@section('css')
@include('super_admins.includes.datatable_css')
@endsection

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row align-items-center mb-4 pt-4 pt-lg-0">

            <div class="col-md-7 mb-3 mb-lg-0">
                <h2 class="main-content-title fw-bold mb-0">Courses</h2>
                <ol class="breadcrumb float-sm-left">
                    <li class="breadcrumb-item"><a href="{{ route('super_admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">
                            Courses
                        </li>
                </ol>
            </div>
            <div class="col-md-5">
                <div class="d-flex justify-content-start justify-content-md-end">
                    @if (auth()->user()->hasPermission('cource.add'))
                    <a href="{{ route('super_admin.archives.create') }}" class="btn btn-primary  ml-2">
                    <i class="fa fa-plus-circle" aria-hidden="true"></i><span class="ml-2">Add Courses</span>
                    </a>
                    @endif
                </div>
            </div>
        </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <div class="card">

                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                        <table id="example1" class="table table-bordered table-striped admin-table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Course Category</th>
                                    <th>Created at</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($archives as $archive)
                                <tr>
                                    <td>{{ $archive->name }}</td>
                                    <td>
                                        @if ($archive->image)
                                        <img src="{{ url($archive->image) }}" width="75px" height="75px" alt="{{ $archive->slug }}">
                                        &nbsp &nbsp
                                        @else
                                        -
                                        @endif
                                    </td>
                                    <td>
                                        {{ $archive->archive_category->name ?? "-" }}
                                    </td>
                                    <td>{{ date_format($archive->created_at, 'd-m-Y') }}</td>

                                    <td>{{ $archive->is_active ? 'Active' : 'Inactive' }} </td>
                                    <td>
                                        @if (!$archive->trashed())
                                        <div class="d-flex">
                                            @if (auth()->user()->hasPermission('cource.show'))
                                            <a class="btn btn-primary" href="{{ route('super_admin.archives.show', ['archive' => $archive->id]) }}" data-toggle="tooltip" data-placement="bottom" title="View Detail"><i class="fa fa-eye"></i></a>
                                            @endif
                                            @if (auth()->user()->hasPermission('cource.edit'))
                                            <a class="ml-2 btn btn-secondary" href="{{ route('super_admin.archives.edit', ['archive' => $archive->id]) }}" data-toggle="tooltip" data-placement="bottom" title="Edit Detail"><i class="fa fa-edit"></i></a>
                                            {{-- edit --}}
                                            @endif
                                            @if (auth()->user()->hasPermission('cource.delete'))
                                            <button type="button" class="btn btn-danger ml-2" data-toggle="modal" data-target="#deleteModal{{ $archive->id }}" data-toggle="tooltip" data-placement="bottom" title="Delete">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                            @endif
                                            {{-- delete --}}
                                        </div>
                                        <div class="modal fade" id="deleteModal{{ $archive->id }}" style="display: none;" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Warning</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>This action is irreversible. Are You Sure , You want
                                                            to
                                                            delete this Post ?</p>
                                                    </div>
                                                    <form action="{{ route('super_admin.archives.destroy', ['archive' => $archive->id]) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <div class="modal-footer justify-content-between">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-danger">Delete</button>
                                                        </div>
                                                    </form>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                        @else
                                        <div class="d-flex">
                                            {{-- restore --}}
                                            <button type="button" class="btn btn-primary ml-2" data-toggle="modal" data-target="#restoreModal{{ $archive->id }}">
                                                <i class="fa fa-trash-restore"></i>
                                            </button>
                                            {{-- delete permanently --}}
                                            <button type="button" class="btn btn-danger ml-2" data-toggle="modal" data-target="#deleteModal{{ $archive->id }}">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </div>
                                        <div class="modal fade" id="deleteModal{{ $archive->id }}" style="display: none;" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Warning</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>This action is irreversible. Are You Sure , You want
                                                            to
                                                            delete this Post permanently ?</p>
                                                    </div>
                                                    <form action="{{ route('super_admin.archives.destroy_permanently', ['archive' => $archive->id]) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <div class="modal-footer justify-content-between">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-danger">Delete</button>
                                                        </div>
                                                    </form>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                        <div class="modal fade" id="restoreModal{{ $archive->id }}" style="display: none;" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Warning</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Are You Sure , You want
                                                            to
                                                            restore this Post ?</p>
                                                    </div>
                                                    <form action="{{ route('super_admin.archives.restore', ['archive' => $archive->id]) }}" method="POST">
                                                        @csrf
                                                        <div class="modal-footer justify-content-between">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Restore</button>
                                                        </div>
                                                    </form>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                        @endif

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection

@section('scripts')
@include('super_admins.includes.datatable_scripts')
@endsection
