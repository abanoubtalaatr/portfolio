
@extends('layouts.app')
@section('style')

@endsection
@section('content')
    <div class="col-12 pt-2 pb-2 text-center">
        <hr>
        <h3>contact</h3>
        <hr>
        <div class="contact">


            <table class="table table-dark text-center">
                <thead>
                    <tr>
                        <th scope="col">Full Name </th>
                        <th scope="col" class="text-center">Email</th>
                        <th scope="col">Message </th>
                        <th scope="col" class="text-center">Control</th>
                    </tr>
                </thead>
                <tbody>
                    @if (isset($contacts))
                        @foreach ($contacts as $key => $value)
                            <tr>
                                <td>{{ $value['fullName'] }}</td>
                                <td class="text-center">{{ $value['email'] }}</td>
                                <td>{{ $value['message'] }}</td>
                                <td class="text-center">
                                   
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-danger" data-toggle="modal"
                                        data-target="#exampleModal{{ $value['id'] }}">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal{{ $value['id'] }}" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title  text-danger" id="exampleModalLabel">Delete one contact</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body text-danger">
                                                   Are you sure to delete
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                        <form  method='post'action={{ route('contact.delete') }}>
                                                           @csrf
                                                            <input type="hidden" name="id" value="{{ $value['id'] }}">
                                                            <button class="btn btn-primary">Save</button>
                                                        </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @php $counter = $key @endphp
                        @endforeach

                    @endif
                </tbody>
            </table>
        </div>
        {{-- contact --}}

    </div>
@endsection
@section( 'javascript')
<script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
@endsection
