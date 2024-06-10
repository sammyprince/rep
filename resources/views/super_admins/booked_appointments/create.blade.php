@extends('super_admins.layouts.master')

@section('title')
    Add Booked Appointments Pages
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
                    <h2 class="main-content-title fw-bold mb-0">Booked Appointments Page</h2>
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{ route('super_admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('super_admin.booked_appointments.index') }}">Booked Appointments
                                Pages</a></li>
                        <li class="breadcrumb-item active">
                            Add Booked Appointments Page
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
                       
                        <!-- form start -->
                        <form id="quickForm" method="POST" action="{{ route('super_admin.booked_appointments.store') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="InputDate">Date</label>
                                            <input type="date" name="date" value="{{ old('date') }}"
                                                class="form-control @if ($errors->has('date')) is-invalid @endif"
                                                id="InputDate" placeholder="Enter Date" aria-describedby="DateError"
                                                aria-invalid="true">
                                            <span id="DateError" class="error invalid-feedback">
                                                @if ($errors->has('date'))
                                                    {{ $errors->first('date') }}
                                                @endif
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="Inputstart_time">Start Time</label>
                                            <input type="time" name="start_time" value="{{ old('start_time') }}"
                                                class="form-control @if ($errors->has('start_time')) is-invalid @endif"
                                                id="Inputstart_time" placeholder="Start Time" aria-describedby="start_timeError"
                                                aria-invalid="true">
                                            <span id="start_timeError" class="error invalid-feedback">
                                                @if ($errors->has('start_time'))
                                                    {{ $errors->first('start_time') }}
                                                @endif
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="Inputend_time">End Time</label>
                                            <input type="time" name="end_time" value="{{ old('end_time') }}"
                                                class="form-control @if ($errors->has('end_time')) is-invalid @endif"
                                                id="Inputend_time" placeholder="End Time" aria-describedby="end_timeError"
                                                aria-invalid="true">
                                            <span id="end_timeError" class="error invalid-feedback">
                                                @if ($errors->has('end_time'))
                                                    {{ $errors->first('end_time') }}
                                                @endif
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="Inputfee">Fee</label>
                                            <input type="number" name="fee" value="{{ old('fee') }}"
                                                class="form-control @if ($errors->has('fee')) is-invalid @endif"
                                                id="Inputfee" placeholder="Fee" aria-describedby="feeError"
                                                aria-invalid="true">
                                            <span id="feeError" class="error invalid-feedback">
                                                @if ($errors->has('fee'))
                                                    {{ $errors->first('fee') }}
                                                @endif
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="InputQuestion">Question</label>
                                            <textarea name="question"
                                                class="form-control @if ($errors->has('question')) is-invalid @endif" rows="3" cols="4"
                                                placeholder="Enter Question" aria-describedby="questionError" aria-invalid="true">{{ old('question') }}</textarea>
                                            <span id="questionError" class="error invalid-feedback">
                                                @if ($errors->has('question'))
                                                    {{ $errors->first('question') }}
                                                @endif
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group">
                                            <label for="InputImage">Choose Attachement Picture</label>
                                            <input type="hidden" name="attachement_url" class="image" value="">
                                            <input type="file" name="attachement_urlFile"
                                                class="custom-file-input imageFile @if ($errors->has('attachement_url')) is-invalid @endif"
                                                id="InputImage" placeholder="Select image" aria-describedby="ImageError"
                                                aria-invalid="true">
                                            <span id="ImageError" class="error invalid-feedback">
                                                @if ($errors->has('attachement_url'))
                                                    {{ $errors->first('attachement_url') }}
                                                @endif
                                            </span>
                                        </div>
                                        
                                    </div>
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group">
                                            <label for="customSwitch1">Status</label>
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" name="is_paid" value="1"
                                                    @if (old('is_active')) checked @endif
                                                    class="custom-control-input" id="customSwitch1"
                                                    aria-describedby="IsActiveError" aria-invalid="true">
                                                <label class="custom-control-label" for="customSwitch1">Is Paid</label>
                                            </div>
                                            <span id="IsActiveError" class="error invalid-feedback">
                                                {{-- @if ($errors->has('is_active'))
                                                {{ $errors->first('is_active') }}
                                            @endif --}}
                                            </span>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    
                                    <div class="col-md-12">
                                        <button type="submit"
                                            class="btn btn-primary px-3 py-1">Submit</button>
                                    </div>
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
