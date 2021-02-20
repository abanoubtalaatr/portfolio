@extends('layouts.app')
@section('style')

@endsection
@section('content')

    <div class="col-12 pb-4  ">
        <h2 class="text-center">Works</h2>
        {{-- container divs project --}}
        <div class="col-12 pt-2 pb-2">
            <h3>projects <span class="h5">(have gallay of images , video and links )</span></h3>
            <hr>
            <div class="experience">
                <div class="col-md-12 pt-4">
                    <div class="col-md-3 float-left">
                        <button class="btn btn-info" onclick="window.location='/dashboard/works/project/view'"><i
                                class="fas fa-eye mr-2"></i>Show </button>
                    </div>
                    <div class="col-md-3 float-left">
                        <button class="btn btn-primary" onclick="window.location='/dashboard/works/project/add'"> <i
                                class="fas fa-plus mr-2"></i> Add</button>
                    </div>
                    <div class="col-md-3 float-left">
                        <button class="btn btn-warning" onclick="window.location='/dashboard/works/project/edit'"> <i
                                class="fas fa-edit mr-2"></i> Edit </button>
                    </div>
                    <div class="col-md-3 float-left">
                        <button class="btn btn-danger" onclick="window.location='/dashboard/works/project/delete'"> <i
                                class="fas fa-trash mr-2"></i> Delete </button>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            {{-- Works --}}
        </div>
        <hr>
    </div>

@endsection
@section('javascript')
    <!-- jQuery -->
    <script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
@endsection
