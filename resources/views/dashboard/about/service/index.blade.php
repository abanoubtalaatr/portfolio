
@extends('layouts.app')
@section('style')
@extends('dashboard.about.service.action')
@endsection
@section('content')
    <div class="col-12 pt-2 pb-2 text-center">
        <hr>
        <h3>About</h3>
        <hr>
        <div class="service">


            <table class="table table-dark text-center">
                <thead>
                    <tr>
                        <th scope="col">Service </th>
                        <th scope="col" class="text-center">About</th>
                        <th scope="col" class="text-center">Control</th>
                    </tr>
                </thead>
                <tbody>
                    @if (isset($services))
                        @foreach ($services as $key => $value)
                            <tr>
                                <td>{{ $value['service'] }}</td>
                                <td class="text-center">{{ $value['value'] }}</td>
                                <td class="text-center">
                                    <button class="btn btn-warning" onclick="window.location='/dashboard/about/service/edit/{{ $value['id'] }}'"> <i class="fas fa-edit"> </i></button>
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
                                                    <h5 class="modal-title  text-danger" id="exampleModalLabel">Delete one service</h5>
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
                                                        <form  method='post'action={{ route('service.delete') }}>
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
        {{-- service --}}

    </div>
@endsection
@section( 'javascript')
<script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
@endsection
