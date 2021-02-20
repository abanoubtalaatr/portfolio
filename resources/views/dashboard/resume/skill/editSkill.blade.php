@extends('layouts.app')
@section('style')
    <link rel="stylesheet" href="{{ asset('js/dashboard/resume/skill.css') }}">
@endsection
@extends('dashboard.resume.skill.action')
@section('content')
    <div class="col-12 pb-4  ">
        <hr>
        <h2 class="text-center">Resume</h2>
        <hr>
        <form method="POST" id="aboutForm" action="{{ route('skill.insertOrUpdate') }}">
            @csrf
            {{-- container divs skill --}}
            <div class="col-12 pt-2 pb-2">
                <h3>Expereince</h3>

                <hr>
                <div class="skill">

                    <div class='old'>
                        <input type="hidden" name="skill[0][id]" value="{{ $skill['id'] }}">
                        <div class="col-md-3 float-left">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Skill <strong class='text-danger'>*</strong></label>
                                <input class="form-control" type="text" name="skill[0][name]" placeholder="Skill" required value="{{ $skill['name'] }}">
                            </div>
                        </div>
                        <div class="col-md-9 float-left " style="overflow: hidden">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Features of skill <strong class='text-danger'>*</strong></label>
                                <textarea name="skill[0][features]" cols="30" class="form-control skill" rows="5"
                                    placeholder="like php,android seleprate with comma" required>{{ $skill['features'] }} </textarea>
                            </div>
                        </div>
                    </div>

                </div>
                {{-- skill --}}

            </div>
            {{-- container divs skill --}}
            <div class="main-control text-center">
                <button class="btn btn-warning"> <i class="fas fa-plus mr-2"></i> Save()</button>
            </div>
        </form>
    @endsection
    @section('javascript')
        <!-- jQuery -->
        <script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
    @endsection
