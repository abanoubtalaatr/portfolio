@extends('layouts.app')
@section('style')
<link rel="stylesheet" href="{{asset('css/dashboard/works/works.css') }}">
@endsection
@extends('dashboard.works.video.action')
@section('content')
    <div class="col-12 pt-2 pb-2 text-center">
        <hr>
        <h3>video</h3>
        <hr>
        <div class="video">


            <table class="table table-dark text-center">
                <thead>
                    <tr>
                        <th scope="col">Project Name </th>
                        <th scope="col" class="text-center">Image</th>
                        <th scope="col">Path </th>
                        <th scope="col" class="text-center">Control</th>
                    </tr>
                </thead>
                <tbody>
                    @if (isset($videos))
                        @foreach ($videos as $key => $value)
                            <tr>
                                <td>{{ $value['nameProject'] }}</td>
                                <td class="text-center"><img  class="image-size mx-auto rounded" src="/works/video/{{ $value['image'] }}" alt="contain image"></td>
                                <td>{{ $value['path'] }}</td>
                                <td class="text-center">
                                    <button class="btn btn-warning" onclick="window.location='/dashboard/video/video/edit/{{ $value['id'] }}'"> <i class="fas fa-edit"> </i></button>
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
                                                    <h5 class="modal-title  text-danger" id="exampleModalLabel">Delete one video</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body text-danger">
                                                   Are you sure to delete {{ $value['nameProject']}}
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                        <form  method='post'action={{ route('video.deleteVideo') }}>
                                                           @csrf
                                                            <input type="hidden" name="id" value="{{ $value['id'] }}">
                                                            <input type="hidden" name="image" value="{{ $value['image'] }}">
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
        {{-- video --}}

    </div>
@endsection
@section( 'javascript')
<script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
@endsection
