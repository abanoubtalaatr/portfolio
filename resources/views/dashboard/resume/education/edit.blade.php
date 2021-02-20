@extends('layouts.app')
@section('style')
    <link rel="stylesheet" href="{{ asset('js/dashboard/resume/education.css') }}">
@endsection
@extends('dashboard.resume.education.action')
@section( 'content')
<div class="col-12 pt-2 pb-2">
    <h3>Education</h3>

    <hr>
    <div class="education">

       
        <table class="table  table-dark">
            <thead>
                <tr>
                    <th scope="col">University</th>
                    <th scope="col">Place</th>
                    <th scope="col">From </th>
                    <th scope="col">To</th>
                    <th scope="col">Description</th>
                    <th scope="col" class="text-center">Control</th>
                </tr>
            </thead>
            <tbody>
                @if (isset($education))
                    @foreach ($education as $key => $value)
                        <tr>
                            <td>{{ $value['title'] }}</td>
                            <td>{{ $value['place'] }}</td>
                            <td>{{ $value['from'] }}</td>
                            <td>{{ $value['to'] }}</td>
                            <td>@php echo substr($value['description'], 0, 45)."..>..."; @endphp</td>
                            <td class="text-center"> 
                                <button class="btn btn-warning" onclick="window.location='/dashboard/resume/education/edit/{{ $value['id'] }}'"> <i class="fas fa-edit"> </i></button>
                             </td>
                        </tr>
                        @php $counter = $key @endphp
                    @endforeach

                @endif
            </tbody>
        </table>
    </div>
    {{-- education --}}
   
</div>
@endsection
@section('javascript')
    <!-- jQuery -->
    <script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
@endsection