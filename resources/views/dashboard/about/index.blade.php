@extends('layouts.app')
@section('style')
    <link rel="stylesheet" href="{{ asset('js/dashboard/resume/experience.css') }}">
@endsection
@section('content')
    <div class="col-12 pb-4  ">
        <hr>
        <h2 class="text-center">About</h2>
        {{-- container divs experience --}}
        <div class="col-12 pt-2 pb-2">
            <h3>Service</h3>
            <hr>
            <div class="experience">
                <div class="col-md-12 pt-4">
                    <div class="col-md-3 float-left">
                        <button class="btn btn-info" onclick="window.location='/dashboard/about/service/view'"><i
                                class="fas fa-eye mr-2"></i>Show </button>
                    </div>
                    <div class="col-md-3 float-left">
                        <button class="btn btn-primary" onclick="window.location='/dashboard/about/service/add'"> <i
                                class="fas fa-plus mr-2"></i> Add</button>
                    </div>
                    <div class="col-md-3 float-left">
                        <button class="btn btn-warning" onclick="window.location='/dashboard/about/service/edit'"> <i
                                class="fas fa-edit mr-2"></i> Edit </button>
                    </div>
                    <div class="col-md-3 float-left">
                        <button class="btn btn-danger" onclick="window.location='/dashboard/about/service/delete'"> <i
                                class="fas fa-trash mr-2"></i> Delete </button>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            {{-- experience --}}
        </div>
        <hr>
        <div class="col-12 pt-2 pb-2">
            <h3>Bio</h3>
            <hr>
            <div class="experience">
                <div class="col-md-12 pt-4">
                    <div class="col-md-3 float-left">
                        <button class="btn btn-info" onclick="window.location='/dashboard/about/bio/view'"><i
                                class="fas fa-eye mr-2"></i>Show </button>
                    </div>
                    <div class="col-md-3 float-left">
                        <button class="btn btn-primary" onclick="window.location='/dashboard/about/bio/add'"> <i
                                class="fas fa-plus mr-2"></i> Add</button>
                    </div>
                    <div class="col-md-3 float-left">
                        <button class="btn btn-warning" onclick="window.location='/dashboard/about/bio/edit'"> <i
                                class="fas fa-edit mr-2"></i> Edit </button>
                    </div>
                    <div class="col-md-3 float-left">
                        <button class="btn btn-danger" onclick="window.location='/dashboard/about/bio/delete'"> <i
                                class="fas fa-trash mr-2"></i> Delete </button>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            {{-- experience --}}
        </div>
    @endsection
    @section('javascript')
        <!-- jQuery -->
        <script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
    @endsection
