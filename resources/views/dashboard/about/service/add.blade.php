@extends('layouts.app')
@extends('dashboard.about.service.action')
@section('content')
<hr>
<h4 class="text-center">About Service</h4>
<hr>    
    <div class="col-12 pb-4">
        <form method="POST" id="aboutForm" action="{{ route('service.insertOrUpdate') }}">
            @csrf
            <input type="hidden" name="service[id]" value="20000">
            <div class="col-md-3 float-left">
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Service</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                        name='service[service]'></textarea>
                    @error('service')
                        <div class="alert alert-danger mt-1">{{ $message }} </div>
                    @enderror
                </div>
            </div>
            <div class="col-md-9 float-left ">
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">About servcie</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                        name='service[value]'></textarea>
                    @error('service')
                        <div class="alert alert-danger mt-1">{{ $message }} </div>
                    @enderror
                </div>
            </div>
            <div class="clearfix"></div>


    </div>
    <hr>
    <div class="col-md-12 text-center">
        <button class="btn btn-info"><i class="fas fa-save"></i> Save() </button>
    </div>

    </form>

    </div>
@endsection
@section('javascript')
    <script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
@endsection
