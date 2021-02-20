@extends('layouts.app')
@section('style')
    {{-- <link rel="stylesheet" href="{{ asset('css/dashboard/works/Image/Image.css') }}"> --}}
@endsection

@section('content')
    <div class="col-12 pb-4  ">

        <h2 class="text-center">Image</h2>
        <hr>
        <form method="POST" action="{{ route('image.insert') }}" enctype="multipart/form-data">
            @csrf
            {{-- container divs Image --}}
            <div class="col-12 pt-2 pb-2">

                <div class="Image">
                    <div class="row mt-3">
                        <div class="col-md-12 col-sm-12 text-center">
                            <div class="form-group">
                                <label class="block">upload Image <strong class='text-danger'>*</strong></label>
                                <button class="btn btn-info overflow-hidden" type="button"><input type="file" name="image"
                                        id="gallery-photo-add"></button>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="col-md-12 text-center " style="overflow: hidden">
                        <h3>Previe Image</h3>

                        <div class="preview">
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <hr class="mb-5" style="border-width:4px;background:yellow;">
                </div>
            </div>
    </div>
    {{-- container divs education --}}
    <hr>
    <div class="main-control text-center">
        <button class="btn btn-warning mb-3 pb-3"> <i class="fas fa-plus mr-2"></i> Save()</button>
    </div>
    </form>
@endsection
@section('javascript')
    <!-- jQuery -->
    <script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
    {{-- add and remove features --}}
    <script src="{{ asset('js/dashboard/works/project/project.js') }}"></script>
@endsection
