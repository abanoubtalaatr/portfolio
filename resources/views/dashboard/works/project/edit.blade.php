@extends('layouts.app')
@section('style')
<link rel="stylesheet" href="{{asset('css/dashboard/works/works.css') }}">
@endsection
@extends('dashboard.works.project.action')
@section('content')
    <div class="col-12 pt-2 pb-2 text-center">
        <hr>
        <h3>Project</h3>
        <hr>
        <div class="project">


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
                                <td><button class="btn btn-primary"><i class="fas fa-eye"></i> </button></td>
                                <td>{{ $value['link'] }}</td>
                                <td><button class="btn btn-primary"><i class="fas fa-eye"></i> </button></td>
                                <td>{{ $value['category'] }}</td>
                                <td>{{ $value['client'] }}</td>
                                <td>{{ $value['created'] }}</td>
                                @php 
                                    $images = explode(',',$value['images']);
                                     array_pop($images);
                                @endphp
                                <td class="text-center">
                                    <button class="btn btn-warning" onclick="window.location='/dashboard/works/project/edit/{{ $value['id'] }}'"> <i class="fas fa-edit"> </i></button>
                                </td>
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
@section( 'javascript')
<script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
@endsection
