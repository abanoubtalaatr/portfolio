@extends('layouts.app')
@section('style')
<link rel="stylesheet" href="{{asset('css/dashboard/works/works.css') }}">
@endsection
@extends('dashboard.works.link.action')
@section('content')
    <div class="col-12 pt-2 pb-2 text-center">
        <hr>
        <h3>link</h3>
        <hr>
        <div class="link">


            <table class="table table-dark text-center">
                <thead>
                    <tr>
                        <th scope="col">Project Name </th>
                        <th scope="col" class="text-center">Image</th>
                        <th scope="col">Link </th>
                        <th scope="col" class="text-center">Control</th>
                    </tr>
                </thead>
                <tbody>
                    @if (isset($link))
                        @foreach ($link as $key => $value)
                            <tr>
                                <td>{{ $value['name'] }}</td>
                                <td class="text-center"><img  class="image-size mx-auto rounded" src="/works/link/{{ $value['image'] }}" alt="contain image"></td>
                                <td>{{ $value['link'] }}</td>
                                <td class="text-center">
                                    <button class="btn btn-warning" onclick="window.location='/dashboard/works/link/edit/{{ $value['id'] }}'"> <i class="fas fa-edit"> </i></button>
                                </td>
                            </tr>
                            @php $counter = $key @endphp
                        @endforeach

                    @endif
                </tbody>
            </table>
        </div>
        {{-- link --}}

    </div>
@endsection
@section( 'javascript')
<script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
@endsection
