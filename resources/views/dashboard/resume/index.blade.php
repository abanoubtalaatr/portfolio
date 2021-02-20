@extends('layouts.app')
@section('style')
    <link rel="stylesheet" href="{{ asset('js/dashboard/resume/experience.css') }}">
@endsection
@section('content')
    <div class="col-12 pb-4  ">
        <h2 class="text-center">Resume</h2>
        {{-- container divs experience --}}
        <div class="col-12 pt-2 pb-2">
            <h3>Expereince</h3>
            <hr>
            <div class="experience">
                <div class="col-md-12 pt-4">
                    <div class="col-md-3 float-left">
                        <button class="btn btn-info" onclick="window.location='/dashboard/resume/experience/view'"><i
                                class="fas fa-eye mr-2"></i>Show </button>
                    </div>
                    <div class="col-md-3 float-left">
                        <button class="btn btn-primary" onclick="window.location='/dashboard/resume/experience/add'"> <i
                                class="fas fa-plus mr-2"></i> Add</button>
                    </div>
                    <div class="col-md-3 float-left">
                        <button class="btn btn-warning" onclick="window.location='/dashboard/resume/experience/edit'"> <i
                                class="fas fa-edit mr-2"></i> Edit </button>
                    </div>
                    <div class="col-md-3 float-left">
                        <button class="btn btn-danger" onclick="window.location='/dashboard/resume/experience/delete'"> <i
                                class="fas fa-trash mr-2"></i> Delete </button>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            {{-- experience --}}
        </div>
        {{-- container divs experience --}}
        <hr>
        <div class="col-12 pt-2 pb-2">
            <h3>Education</h3>

            <div class="education">
                <div class="col-md-12 pt-4">
                    <div class="col-md-3 float-left">
                        <button class="btn btn-info" onclick="window.location='/dashboard/resume/education/view'"><i
                                class="fas fa-eye mr-2"></i>Show </button>
                    </div>
                    <div class="col-md-3 float-left">
                        <button class="btn btn-primary" onclick="window.location='/dashboard/resume/education/add'"> <i
                                class="fas fa-plus mr-2"></i> Add</button>
                    </div>
                    <div class="col-md-3 float-left">
                        <button class="btn btn-warning" onclick="window.location='/dashboard/resume/education/edit'"> <i
                                class="fas fa-edit mr-2"></i> Edit </button>
                    </div>
                    <div class="col-md-3 float-left">
                        <button class="btn btn-danger" onclick="window.location='/dashboard/resume/education/delete'"> <i
                                class="fas fa-trash mr-2"></i> Delete </button>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <hr>
        <div class="col-12 pt-2 pb-2">
            <h3>Skills</h3>
            <div class="skills">
                <div class="col-md-12 pt-4">
                    <div class="col-md-3 float-left">
                        <button class="btn btn-info" onclick="window.location='/dashboard/resume/skill/view'"><i
                                class="fas fa-eye mr-2"></i>Show </button>
                    </div>
                    <div class="col-md-3 float-left">
                        <button class="btn btn-primary" onclick="window.location='/dashboard/resume/skill/add'"> <i
                                class="fas fa-plus mr-2"></i> Add</button>
                    </div>
                    <div class="col-md-3 float-left">
                        <button class="btn btn-warning" onclick="window.location='/dashboard/resume/skill/edit'"> <i
                                class="fas fa-edit mr-2"></i> Edit </button>
                    </div>
                    <div class="col-md-3 float-left">
                        <button class="btn btn-danger" onclick="window.location='/dashboard/resume/skill/delete'"> <i
                                class="fas fa-trash mr-2"></i> Delete </button>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            {{-- Skills --}}
        </div>
        <hr>
        <div class="col-12 pt-2 pb-2">
            <h3>Languages</h3>
            <hr>
            <div class="language">
                <div class="col-md-12 pt-4">
                    <div class="col-md-3 float-left">
                        <button class="btn btn-info" onclick="window.location='/dashboard/resume/language/view'"><i
                                class="fas fa-eye mr-2"></i>Show </button>
                    </div>
                    <div class="col-md-3 float-left">
                        <button class="btn btn-primary" onclick="window.location='/dashboard/resume/language/add'"> <i
                                class="fas fa-plus mr-2"></i> Add</button>
                    </div>
                    <div class="col-md-3 float-left">
                        <button class="btn btn-warning" onclick="window.location='/dashboard/resume/language/edit'"> <i
                                class="fas fa-edit mr-2"></i> Edit </button>
                    </div>
                    <div class="col-md-3 float-left">
                        <button class="btn btn-danger" onclick="window.location='/dashboard/resume/language/delete'"> <i
                                class="fas fa-trash mr-2"></i> Delete </button>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            {{-- Languages --}}
        </div>
        <hr>
        <div class="col-12 pt-2 pb-2">
            <h3>Knowledage</h3>
            <div class="knowledage">
                <div class="col-md-12 pt-4">
                    <div class="col-md-3 float-left">
                        <button class="btn btn-info" onclick="window.location='/dashboard/resume/knowledge/view'"><i
                                class="fas fa-eye mr-2"></i>Show </button>
                    </div>
                    <div class="col-md-3 float-left">
                        <button class="btn btn-primary" onclick="window.location='/dashboard/resume/knowledge/add'"> <i
                                class="fas fa-plus mr-2"></i> Add</button>
                    </div>
                    <div class="col-md-3 float-left">
                        <button class="btn btn-warning" onclick="window.location='/dashboard/resume/knowledge/edit'"> <i
                                class="fas fa-edit mr-2"></i> Edit </button>
                    </div>
                    <div class="col-md-3 float-left">
                        <button class="btn btn-danger" onclick="window.location='/dashboard/resume/knowledge/delete'"> <i
                                class="fas fa-trash mr-2"></i> Delete </button>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            {{-- Knowledage --}}
        </div>
    @endsection
    @section('javascript')
        <!-- jQuery -->
        <script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
    @endsection
