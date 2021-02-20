@extends('layouts.app')
@section('style')
    <link rel="stylesheet" href="{{ asset('css/dashboard/works/video/video.css') }}">
@endsection
@extends('dashboard.works.video.action')
@section('content')
    <div class="col-12 pb-4  ">
        <hr>
        <h2 class="text-center">Video</h2>
        <hr>
        <form method="POST" action="{{ route('video.insertOrUpdate') }}" enctype="multipart/form-data">
            @csrf
            {{-- container divs video --}}
            <div class="col-12 pt-2 pb-2">
                <h3>Video</h3>

                <hr>
                <div class="video">
                    <div class="old">
                        <div>
                            <div class="col-md-6 float-left">
                                <div class="form-group">
                                    <input type="hidden" name="video[id]" value="200000">
                                    <label>Name of project <strong class='text-danger'>*</strong></label>
                                    <input class="form-control" type="text" name="video[name]"
                                        placeholder="name of project">
                                    @error('video[name]')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 float-left">
                                <div class="form-group">
                                    <label>Path <strong class='text-danger'>*</strong></label>
                                    <input class="form-control" type="text" name="video[path]" placeholder="Path of video ">
                                    @error('video[0][path]')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <hr>
                        <div class="col-md-12 text-center " style="overflow: hidden">
                            <div class="col-md-6 mx-auto">
                                <button class="btn btn-info overflow-hidden" type="button"><input type="file"
                                        name="video[image]"></button>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <hr class="mb-5" style="border-width:4px;background:yellow;">
                    </div>
                </div>
            </div>
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
