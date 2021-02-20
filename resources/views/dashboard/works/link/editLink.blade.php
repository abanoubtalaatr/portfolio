@extends('layouts.app')
@section('style')
    <link rel="stylesheet" href="{{ asset('css/dashboard/works/link/link.css') }}">
@endsection
@extends('dashboard.works.link.action')
@section('content')
    <div class="col-12 pb-4  ">
        <hr>
        <h2 class="text-center">Works</h2>
        <hr>
        <form method="POST" action="{{ route('link.insertOrUpdate') }}" enctype="multipart/form-data">
            @csrf
            {{-- container divs link --}}
            <div class="col-12 pt-2 pb-2">
                <h3>link</h3>

                <hr>
                <div class="link">
                    <div class="old">
                        <div>
                            <div class="col-md-6 float-left">
                                <div class="form-group">
                                    <input type="hidden" name="link[id]" value="{{ $link['id'] }}">
                                    <label>Name of project <strong class='text-danger'>*</strong></label>
                                    <input class="form-control" type="text" name="link[name]"
                                        placeholder="name of project" value="{{ $link['name'] }}">
                                    @error('link[name]')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 float-left">
                                <div class="form-group">
                                    <label>Link <strong class='text-danger'>*</strong></label>
                                    <input class="form-control" type="text" name="link[link]" placeholder="Path of link " value="{{ $link['link'] }}">
                                    @error('link[link]')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <hr>
                        <div class="col-md-12 text-center " style="overflow: hidden">
                            <div class="col-md-6 mx-auto">
                                <button class="btn btn-info overflow-hidden" type="button">
                                    <input type="file" name="link[image]">
                                    <hr>
                                    <div class="image-size">
                                        <img class=" w-100 h-100 mx-auto" src="{{ asset('works/link/') }}/{{ $link['image'] }}" alt="">
                                    </div>
                                </button>
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
    <div class="main-control text-center mb-3 pb-3">
        <button class="btn btn-warning"> <i class="fas fa-plus mr-2"></i> Save()</button>
    </div>
    </form>
@endsection
@section('javascript')
    <!-- jQuery -->
    <script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
@endsection
