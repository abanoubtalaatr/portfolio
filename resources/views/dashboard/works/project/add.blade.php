@extends('layouts.app')
@section('style')
    {{-- <link rel="stylesheet" href="{{ asset('css/dashboard/works/project/project.css') }}"> --}}
@endsection
@extends('dashboard.works.project.action')
@section('content')
    <div class="col-12 pb-4  ">
        <hr>
        <h2 class="text-center">Project</h2>
        <hr>
        <form method="POST" action="{{ route('project.insert') }}" enctype="multipart/form-data">
            @csrf
            {{-- container divs project --}}
            <div class="col-12 pt-2 pb-2">
                <h3>Project</h3>

                <hr>
                <div class="project">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-3 col-sm-6 float-left">
                                        <div class="form-group">
                                            
                                            <label>Name of Project <strong class='text-danger'>*</strong></label>
                                            <input class="form-control" type="text" name="name"
                                                placeholder="name of project">
                                            @error('name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3  col-sm-6 float-left">
                                        <div class="form-group">
                                            <label>Client <strong class='text-danger'>*</strong></label>
                                            <input class="form-control" type="text" name="client"
                                                placeholder="Client">
                                            @error('client')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 float-left">
                                        <div class="form-group">
                                            <label>Category <strong class='text-danger'>*</strong></label>
                                            <input class="form-control" type="text" name="category"
                                                placeholder="Category">
                                            @error('category')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3  col-sm-6 float-left">
                                        <div class="form-group">
                                            <label>Developed At <strong class='text-danger'>*</strong></label>
                                            <input class="form-control" type="date" name="created"
                                                placeholder="Developed At">
                                            @error('created')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <div class="col-md-6 col-sm-3 float-left">
                                        <div class="form-group">
                                            <label>Link Video<strong class='text-danger'>*</strong></label>
                                            <textarea class="form-control" type="text" name="link"
                                                placeholder="Link of project"></textarea>
                                            @error('link')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 float-left">
                                        <div class="form-group">
                                            <label>Link live project<strong class='text-danger'>*</strong></label>
                                            <textarea class="form-control" type="text" name="live"
                                                placeholder="Link of live  project"></textarea>
                                            @error('link')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12 col-sm-9 float-left">
                                    <div class="form-group">
                                        <label>Description <strong class='text-danger'>*</strong></label>
                                        <textarea class="form-control" type="text" name="description"
                                            placeholder="Deiscription Project"></textarea>
                                        @error('description')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12 col-sm-12 text-center">
                                    <div class="form-group">
                                        <label class="block">Images <strong class='text-danger'>*</strong></label>
                                        <button class="btn btn-info overflow-hidden" type="button"><input type="file"
                                            name="images[]" multiple id="gallery-photo-add"></button>
                                    </div>
                                </div>
                            </div>
                            
                        <hr>
                        <div class="col-md-12 text-center " style="overflow: hidden">
                            <h3>Previe Images</h3>
                            <hr>
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

