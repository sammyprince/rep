@extends('super_admins.layouts.master')

@section('title')
    View Certification
@endsection

@section('css')
    <!-- daterange picker -->
    <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
@endsection

@section('content')
    @if ($errors->any())
    @endif
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-4 pt-4 pt-lg-0">

                <div class="col-sm-6">
                    <h2 class="main-content-title fw-bold mb-0">Certification</h2>
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{ route('super_admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('super_admin.lawyers.show' , $lawyer->id) }}">Lawyer Profile</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('super_admin.lawyer_certifications.index' , $lawyer->id) }}">Certifications
                                </a></li>
                        <li class="breadcrumb-item active">
                            View Certification
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
                    <div class="card-body">
                            <div class="row">
                                <div class="col-md-3 mb-3">
                                    <div class="border h-100  rounded p-3 border-light">
                                        <h6 class="fw-bold text-uppercase mb-0">Name</h6>
                                        <p class="mb-0 text-muted">{{ $lawyer_certification->name ? $lawyer_certification->name : '--' }}</p>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <div class="border h-100  rounded p-3 border-light">
                                        <h6 class="fw-bold text-uppercase mb-0">File</h6>
                                        <p class="mb-0 text-muted"> 
                                            @if ($lawyer_certification->file)
                                                <img class="mt-3" src="{{ url($lawyer_certification->file) }}" width="75px" height="75px"
                                                    alt="{{ $lawyer_certification->slug }}">
                                                
                                            @else
                                                --
                                            @endif
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <div class="border h-100  rounded p-3 border-light">
                                        <h6 class="fw-bold text-uppercase mb-0">Status</h6>
                                        <p class="mb-0 text-muted">{{ $lawyer_certification->is_active ? 'Active' : 'Inactive' }}</p>
                                    </div>
                                </div> 
                                <div class="col-md-3 mb-3">
                                    <div class="border h-100  rounded p-3 border-light">
                                        <h6 class="fw-bold text-uppercase mb-0">Created At</h6>
                                        <p class="mb-0 text-muted">{{ date_format($lawyer_certification->created_at, 'd-m-Y') }}</p>
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <div class="border h-100  rounded p-3 border-light">
                                        <h6 class="fw-bold text-uppercase mb-0">Description</h6>
                                        <p class="mb-0 text-muted">{!! $lawyer_certification->description !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
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
@endsection

@section('scripts')
    <!-- date-range-picker -->
    <script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
@endsection
