@extends('layouts.app')
@section('style')
    <link rel="stylesheet" href="{{ asset('js/dashboard/resume/skill.css') }}">
@endsection
@extends('dashboard.resume.skill.action')
@section( 'content')
<div class="col-12 pt-2 pb-2">
    <h3>skill</h3>

    <hr>
    <div class="skill">

       
        <table class="table  table-dark">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Features</th>
                    <th scope="col" class="text-center">Control</th>
                </tr>
            </thead>
            <tbody>
                @if (isset($skill))
                    @foreach ($skill as $key => $value)
                        <tr>
                            <td>{{ $value['name'] }}</td>
                            <td>{{ $value['features'] }}</td>
                            <td class="text-center">
                                <button class="btn btn-warning" onclick="window.location='/dashboard/resume/skill/edit/{{ $value['id'] }}'"> <i class="fas fa-edit"> </i></button>
                             </td>
                        </tr>
                    @endforeach

                @endif
            </tbody>
        </table>
    </div>
    {{-- skill --}}
   
</div>
@endsection
@section('javascript')
    <!-- jQuery -->
    <script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
@endsection