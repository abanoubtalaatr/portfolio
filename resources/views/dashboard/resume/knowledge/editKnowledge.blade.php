@extends('layouts.app')
@section('style')
    <link rel="stylesheet" href="{{ asset('js/dashboard/resume/knowledge.css') }}">
@endsection
@extends('dashboard.resume.knowledge.action')
@section('content')
    <div class="col-12 pb-4  ">
        <hr>
        <h3>Knowledge</h3>
        <hr>
        <form method="POST" id="aboutForm" action="{{ route('knowledge.insertOrUpdate') }}">
            @csrf
            {{-- container divs knowledge --}}
            <div class="col-12 pt-2 pb-2 text-center">
                <div class="knowledge">

                    <div class='old'>
                        <div class="col-md-6 mx-auto">
                            <input type="hidden" name="knowledge[0][id]" value="{{ $knowledge['id'] }}">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Knowledage <strong
                                        class='text-danger'>*</strong></label>
                                <input class="form-control" type="text" name="knowledge[0][name]"
                                    placeholder="example Website hosting and Search engine marketing" required value="{{ $knowledge['name'] }}">
                            </div>
                        </div>
                    </div>
                    <div class='clearfix'></div>

                </div>
                {{-- knowledge --}}

            </div>
            {{-- container divs knowledge --}}
            <div class="main-control text-center">
                <button class="btn btn-warning"> <i class="fas fa-plus mr-2"></i> Save()</button>
            </div>
        </form>
    @endsection
    @section('javascript')
        <!-- jQuery -->
        <script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
    @endsection
