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
                <h3>Expereince</h3>

                <hr>
                <div class="education">

                    <div class='old'>
                        <input type="hidden" name="education[{{ $education['id'] }}][id]" value="{{ $education['id'] }}">
                        <div class="col-md-3 float-left">
                            <div class="form-group">
                                <label>Unsveisty <strong class='text-danger'>*</strong></label>
                                <input class="form-control" type="text" name="education[{{ $education['id'] }}][title]" placeholder="Unveisty" required value="{{ $education['title'] }}">
                                @error('title')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3 float-left">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Place <strong
                                        class='text-danger'>*</strong></label>
                                <input class="form-control" type="text" name="education[{{ $education['id'] }}][place]" placeholder="place" required value="{{ $education['place'] }}">
                                @error('place')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-3 float-left">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">From <strong class='text-danger'>*</strong></label>
                                <input class="form-control" type="date" name="education[{{ $education['id'] }}][from]" placeholder="from" required value="{{ $education['from'] }}">
                                @error('from')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3 float-left">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">To <strong class='text-danger'>*</strong></label>
                                <input class="form-control education-to" type="date" name="education[{{ $education['id'] }}][to]" placeholder="To" required value="{{ $education['to'] }}">
                                @error('to')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12 " style="overflow: hidden">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Description OR breif <strong
                                        class='text-danger'>*</strong></label>
                                <textarea  cols="30" class="form-control education-description" rows="3" name="education[{{ $education['id'] }}][description]"
                                    placeholder="Description" required>{{  $education['description']  }}</textarea>
                                @error('description')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="clearfix"></div>
                       <hr>
                    </div>

                </div>
                {{-- education --}}

            </div>
            {{-- container divs education --}}
            <div class="main-control text-center">
                <button class="btn btn-warning"> <i class="fas fa-plus mr-2"></i> Save()</button>
            </div>
        </form>
    @endsection
    @section('javascript')
        <!-- jQuery -->
        <script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
    @endsection
