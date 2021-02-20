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

                        <div class="col-md-3 float-left">
                            <div class="form-group">
                                <input type="hidden" name="experience[0][id]" value="200000">
                                <label>Company <strong class='text-danger'>*</strong></label>
                                <input class="form-control" type="text" name="experience[0][company]" placeholder="Company"
                                    onchange="validatedInput(this.value)">
                                @error('experience[0][company]')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3 float-left">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Postion <strong
                                        class='text-danger'>*</strong></label>
                                <input class="form-control" type="text" name="experience[0][jobTitle]" placeholder="Postion"
                                    onchange="validatedInput()">
                                @error('experience[0][jobTitle]')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-3 float-left">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">From <strong class='text-danger'>*</strong></label>
                                <input class="form-control" type="date" name="experience[0][from]" placeholder="from"
                                    onchange="validatedInput()">
                                @error('experience[0][from]')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3 float-left">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">To <strong class='text-danger'>*</strong></label>
                                <input class="form-control experience-to" type="date" name="experience[0][to]"
                                    placeholder="To" onchange="validatedInput()">
                                @error('experience[0][to]')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12 " style="overflow: hidden">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Description OR breif <strong
                                        class='text-danger'>*</strong></label>
                                <textarea name="experience[0][description]" onkeypress="validatedInput()" cols="30"
                                    class="form-control experience-description" rows="5"
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
                {{-- experience --}}
            </div>
            {{-- container divs experience --}}
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
