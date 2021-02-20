@extends('layouts.app')
@section('style')
    <link rel="stylesheet" href="{{ asset('js/dashboard/resume/education.css') }}">
@endsection
@extends('dashboard.resume.education.action')
@section('content')
    <div class="col-12 pb-4  ">
        <hr>
        <h2 class="text-center">Resume</h2>
        <hr>
        <form method="POST" id="aboutForm" action="{{ route('education.insertOrUpdate') }}">
            @csrf
            {{-- container divs education --}}
            <div class="col-12 pt-2 pb-2">
                <h3>Education</h3>

                <hr>
                <div class="education">

                    <div class='old'>

                        <div class="col-md-3 float-left">
                            <div class="form-group">
                                <input type="hidden" name="education[0][id]" value="200000">
                                <label>University or Course <strong class='text-danger'>*</strong></label>
                                <input class="form-control" type="text" name="education[0][title]" placeholder="University or course"
                                 >
                                @error('education[0][title]')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3 float-left">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Place  <strong
                                        class='text-danger'>*</strong></label>
                                <input class="form-control" type="text" name="education[0][place]" placeholder="Place"
                                 >
                                @error('education[0][place]')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-3 float-left">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">From <strong class='text-danger'>*</strong></label>
                                <input class="form-control" type="date" name="education[0][from]" placeholder="from"
                                    >
                                @error('education[0][from]')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3 float-left">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">To <strong class='text-danger'>*</strong></label>
                                <input class="form-control education-to" type="date" name="education[0][to]"
                                    placeholder="To">
                                @error('education[0][to]')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12 " style="overflow: hidden">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Description OR breif <strong
                                        class='text-danger'>*</strong></label>
                                <textarea name="education[0][description]"
                                    class="form-control education-description" rows="5"
                                    placeholder="Description"></textarea>
                                @error('description')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <hr class="mb-5" style="border-width:4px;background:yellow;">
                    </div>

                </div>
                {{-- education --}}
            </div>
            {{-- container divs education --}}
            <hr>
            <div class="main-control text-center">
                <button class="btn btn-warning"> <i class="fas fa-plus mr-2"></i> Save()</button>
            </div>
        </form>
    @endsection
    @section('javascript')
        <!-- jQuery -->
        <script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
    @endsection
