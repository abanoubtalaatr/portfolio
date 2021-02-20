@extends('layouts.app')
@section('style')
    <link rel="stylesheet" href="{{ asset('js/dashboard/resume/knowledge.css') }}">
@endsection
@extends('dashboard.resume.knowledge.action')
@section('content')
    <div class="col-12 pt-2 pb-2">
        <h3>knowledge</h3>
        <hr>
        <div class="knowledge text-center">
            <table class="table  table-dark">
                <thead>
                    <tr>
                        <th scope="col" >Knowledage</th>
                        <th scope="col" >Control</th>
                    </tr>
                </thead>
                <tbody>
                    @if (isset($knowledge))
                        @foreach ($knowledge as $key => $value)
                            <tr>
                                <td>{{ $value['name'] }}</td>
                                <td class="text-center">
                                    <button class="btn btn-warning"
                                        onclick="window.location='/dashboard/resume/knowledge/edit/{{ $value['id'] }}'"> <i
                                            class="fas fa-edit"> </i></button>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
        {{-- knowledge --}}

    </div>
@endsection
@section('javascript')
    <!-- jQuery -->
    <script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
@endsection