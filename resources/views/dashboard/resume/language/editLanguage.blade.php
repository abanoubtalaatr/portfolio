@extends('layouts.app')
@section('style')
    <link rel="stylesheet" href="{{ asset('js/dashboard/resume/language.css') }}">
@endsection
@extends('dashboard.resume.language.action')
@section('content')
    <div class="col-12 pb-4  ">
        <hr>
        <h3>language</h3>
        <hr>
        <form method="POST" id="aboutForm" action="{{ route('language.insertOrUpdate') }}">
            @csrf
            {{-- container divs language --}}
            <div class="col-12 pt-2 pb-2 text-center">
                <div class="language">
                    <div class='old'>
                        <hr>
                       <input type="hidden" name="language[0][id]" value="{{ $language['id'] }}">
                       <div class="col-md-6 float-left">
                           <div class="form-group">
                               <label for="exampleFormControlTextarea1">Language <strong class='text-danger'>*</strong></label>
                               <input class="form-control" type="text" name="language[0][name]" placeholder="Language" required value="{{ $language['name'] }}">
                           </div>
                       </div>
                       <div class="col-md-6 float-left " style="overflow: hidden">
                           <div class="form-group">
                               <label for="exampleFormControlTextarea1">Level of Language<strong class='text-danger'>*</strong></label>
                               <input class="form-control" type="text" name="language[0][level]" placeholder="level" required value="{{ $language['level'] }}">
                           </div>
                       </div>
                   </div>
                    <div class='clearfix'></div>

                </div>
                {{-- language --}}

            </div>
            {{-- container divs language --}}
            <div class="main-control text-center">
                <button class="btn btn-warning"> <i class="fas fa-plus mr-2"></i> Save()</button>
            </div>
        </form>
    @endsection
    @section('javascript')
        <!-- jQuery -->
        <script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
    @endsection
