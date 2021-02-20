@extends('layouts.app')

@section('content')
    <div class="col-12 pb-4">
        <form method="POST" id="aboutForm" action="{{ route('bio.insertOrUpdate') }}">
            @csrf
            <div class="col-12">
                <input type="hidden" name="bio[id]" value="20000">
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">About Your self</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="bio[bio]" rows="3"> </textarea>
                    @error('about')
                        <div class="alert alert-danger mt-1">{{ $message }} </div>
                    @enderror
                </div>
            </div>
            <hr style="border-width: 5px;background: brown;border-radius: 8px;">
            <div class="col-12 pt-2 pb-2 information" style="overflow: hidden">
                <div class="col-md-3 float-left">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Your Age</label>
                        <input class="form-control" type="text" name="bio[age]" placeholder="Age"
                        >
                        @error('age')
                            <div class="alert alert-danger mt-1">{{ $message }} </div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-3 float-left">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Residence</label>
                        <input class="form-control" type="text" name="bio[residence]"  placeholder="Residence"
                            value="">
                        @error('residence')
                            <div class="alert alert-danger mt-1">{{ $message }} </div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-3 float-left">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Freelance</label>
                        <input class="form-control" type="text" name="bio[freelancer]" placeholder="Freelance"
                            value="">
                                    @error('freelance')
                                                    <div class=" alert alert-danger mt-1">{{ $message }}
                        </div>
                    @enderror
                </div>
                </div>
                <div class="col-md-3 float-left">
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Address</label>
                    <input class="form-control" type="text" name="bio[address]"  placeholder="Address"
                        value="">
                    @error('address')
                        <div class="alert alert-danger mt-1">{{ $message }} </div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-6 float-left">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Your Email</label>
                            <input class="form-control" type="text" name="bio[email]" placeholder="Your Email"
                            >
                            @error('age')
                                <div class="alert alert-danger mt-1">{{ $message }} </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 float-left">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Your Phone number</label>
                            <input class="form-control" type="text" name="bio[phone]" placeholder="Phone"
                            >
                            @error('age')
                                <div class="alert alert-danger mt-1">{{ $message }} </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <hr>
    <div class="col-md-12 text-center">
        <button class="btn btn-info"><i class="fas fa-save"></i> Save() </button>
    </div>

    </form>

    </div>
@endsection
@section( 'javascript')
<script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
@endsection