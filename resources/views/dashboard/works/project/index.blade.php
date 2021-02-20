@extends('layouts.app')
@section('style')
    <link rel="stylesheet" href="{{ asset('css/dashboard/works/works.css') }}">
@endsection
@extends('dashboard.works.project.action')
@section('content')
    <div class="col-12 pt-2 pb-2 text-center">
        <hr>
        <h3>Project</h3>
        <hr>
        <div class="Project">


            <table class="table table-dark text-center">
                <thead>
                    <tr>
                        <th scope="col">Project Name </th>
                        <th scope="col" class="text-center">Images</th>
                        <th scope="col" class="text-center">Link</th>
                        <th scope="col" class="text-center">Description</th>
                        <th scope="col" class="text-center">Category</th>
                        <th scope="col" class="text-center">Client</th>
                        <th scope="col" class="text-center">Created</th>
                        <th scope="col" class="text-center">Control</th>
                    </tr>
                </thead>
                <tbody>
                    @if (isset($projects))
                        @foreach ($projects as $key => $value)
                            <tr>
                                <td>{{ $value['name'] }}</td>
                                <td><button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#exampleModalImage{{ $value['id'] }}">
                                        <i class='fas fa-eye'></i>
                                    </button></td>
                                <td>{{ $value['link'] }}</td>
                                <td><button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#exampleModalDescription{{ $value['id'] }}">
                                        <i class='fas fa-eye'></i>
                                    </button></td>
                                <td>{{ $value['category'] }}</td>
                                <td>{{ $value['client'] }}</td>
                                <td>{{ $value['created'] }}</td>

                                <td class="text-center">
                                    <button class="btn btn-warning"
                                        onclick="window.location='/dashboard/works/project/edit/{{ $value['id'] }}'"> <i
                                            class="fas fa-edit"> </i></button>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-danger" data-toggle="modal"
                                        data-target="#exampleModal{{ $value['id'] }}">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal{{ $value['id'] }}" tabindex="-1"
                                        role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title  text-danger" id="exampleModalLabel">Delete one
                                                        Project</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body text-danger">
                                                    Are you sure to delete {{ $value['nameProject'] }}
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                    <form method='post' action={{ route('project.delete') }}>
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{ $value['id'] }}">
                                                        <button class="btn btn-primary">Save</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <div class="contain-modal">
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModalImage{{ $value['id'] }}" tabindex="-1"
                                        role="dialog" aria-labelledby="exampleModalLabelImage{{ $value['id'] }}"
                                        aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Image
                                                        </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    @php
                                                        $images = explode(',', $value['images']);
                                                        array_pop($images);
                                                        $userId = Auth::id();
                                                    @endphp
                                                    <div class="col-md-12">
                                                        @foreach ($images as $key => $image)
                                                            <div class="col-md-12 float-left">
                                                                <div class="{{ $value['id'] }}{{ $key }}" id='{{ $value['id'] }}'>
                                                                    <i class="fas fa-trash remove"></i>
                                                                    <input type="hidden" id='image{{ $value['id'] }}{{ $key }}' value="{{ $image }}">
                                                                    <img class="rounded"
                                                                        src="{{ asset('works/project/user/') }}/{{ $userId }}/{{ $value['id'] }}/{{ $image }}">
                                                                    <hr>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="exampleModalDescription{{ $value['id'] }}" tabindex="-1"
                                        role="dialog" aria-labelledby="exampleModalLabelDescription{{ $value['id'] }}"
                                        aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Description
                                                        </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                   {{ $value['description'] }}
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </tr>
                            @php $counter = $key @endphp
                        @endforeach

                    @endif
                </tbody>
            </table>
        </div>
        {{-- Project --}}

    </div>
@endsection
@section('javascript')
    <script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('js/dashboard/works/project/project.js') }}"></script>
@endsection
