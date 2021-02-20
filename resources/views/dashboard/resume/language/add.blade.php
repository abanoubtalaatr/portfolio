@extends('layouts.app')
@section('style')
@endsection
@extends('dashboard.resume.language.action')
@section('content')
    <div class="col-12 pb-4  ">
        <form method="POST" id="aboutForm" action="{{ route('language.insertOrUpdate') }}">
            @csrf
            {{-- container divs language --}}
            <div class="col-12 pt-2 pb-2">
                <h3>language</h3>

                <hr>
                <div class="language">
                    <div class='old'>
                        <hr>
                       <input type="hidden" name="language[0][id]" value="200000">
                       <div class="col-md-6 float-left">
                           <div class="form-group">
                               <label for="exampleFormControlTextarea1">Language <strong class='text-danger'>*</strong></label>
                               <input class="form-control" type="text" name="language[0][name]" placeholder="Language" required>
                           </div>
                       </div>
                       <div class="col-md-6 float-left " style="overflow: hidden">
                           <div class="form-group">
                               <label for="exampleFormControlTextarea1">Level of Language<strong class='text-danger'>*</strong></label>
                               <input class="form-control" type="text" name="language[0][level]" placeholder="level" required>
                           </div>
                       </div>
                   </div>
                   <div class='clearfix'></div>
                </div>
                {{-- language --}}
            </div>
            {{-- container divs language --}}
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
