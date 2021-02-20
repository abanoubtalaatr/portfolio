@extends('layouts.app')
@section('style')
@endsection
@extends('dashboard.resume.knowledge.action')
@section('content')
    <div class="col-12 pb-4  ">
        <hr>
        <h2 class="text-center">Resume</h2>
        <hr>
        <form method="POST" id="aboutForm" action="{{ route('knowledge.insertOrUpdate') }}">
            @csrf
            {{-- container divs knowledge --}}
            <div class="col-12 pt-2 pb-2">
                <h3>knowledge</h3>

                <hr>
                <div class="knowledge">

                    <div class='old'>
                        <div class="col-md-6 mx-auto">
                            <input type="hidden" name="knowledge[0][id]" value="200000">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Knowledage <strong
                                        class='text-danger'>*</strong></label>
                                <input class="form-control" type="text" name="knowledge[0][name]"
                                    placeholder="example Website hosting and Search engine marketing" required>
                            </div>
                        </div>
                    </div>
                    <div class='clearfix'></div>

                </div>
                {{-- knowledge --}}
                
            </div>
            {{-- container divs knowledge --}}
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
