@extends('layouts.app')
@section('style')
<link rel="stylesheet" href="{{asset('css/dashboard/works/video/video.css') }}">
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
                                    <button class="btn btn-warning" onclick="window.location='/dashboard/works/video/edit/{{ $value['id'] }}'"> <i class="fas fa-edit"> </i></button>
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
