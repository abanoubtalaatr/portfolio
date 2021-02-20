@extends('layouts.app')
@section('style')
    <link rel="stylesheet" href="{{ asset('js/dashboard/resume/experience.css') }}">
@endsection
@extends('dashboard.resume.experience.action')
@section('content')
    <div class="col-12 pb-4  ">
        <hr>
        <h2 class="text-center">Resume</h2>
        <hr>
        <form method="POST" id="aboutForm" action="{{ route('experience.insertOrUpdate') }}">
            @csrf
            {{-- container divs experience --}}
            <div class="col-12 pt-2 pb-2">
                <h3>Expereince</h3>

                <hr>
                <div class="experience">

                    <div class='old'>
                        <input type="hidden" name="experience[{{ $experience['id'] }}][id]" value="{{ $experience['id'] }}">
                        <div class="col-md-3 float-left">
                            <div class="form-group">
                                <label>Company <strong class='text-danger'>*</strong></label>
                                <input class="form-control" type="text" name="experience[{{ $experience['id'] }}][company]" placeholder="Company" required value="{{ $experience['company'] }}">
                                @error('company')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3 float-left">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Postion <strong
                                        class='text-danger'>*</strong></label>
                                <input class="form-control" type="text" name="experience[{{ $experience['id'] }}][jobTitle]" placeholder="Position" required value="{{ $experience['jobTitle'] }}">
                                @error('jobTitle')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-3 float-left">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">From <strong class='text-danger'>*</strong></label>
                                <input class="form-control" type="date" name="experience[{{ $experience['id'] }}][from]" placeholder="from" required value="{{ $experience['from'] }}">
                                @error('from')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3 float-left">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">To <strong class='text-danger'>*</strong></label>
                                <input class="form-control experience-to" type="date" name="experience[{{ $experience['id'] }}][to]" placeholder="To" required value="{{ $experience['to'] }}">
                                @error('to')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12 " style="overflow: hidden">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Description OR breif <strong
                                        class='text-danger'>*</strong></label>
                                <textarea  cols="30" class="form-control experience-description" rows="3" name="experience[{{ $experience['id'] }}][description]"
                                    placeholder="Description" required>{{  $experience['description']  }}</textarea>
                                @error('description')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="clearfix"></div>
                       <hr>
                    </div>

                </div>
                {{-- experience --}}

            </div>
            {{-- container divs experience --}}
            <div class="main-control text-center">
                <button class="btn btn-warning"> <i class="fas fa-plus mr-2"></i> Save()</button>
            </div>
        </form>
    @endsection
    @section('javascript')
        <!-- jQuery -->
        <script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
    @endsection
