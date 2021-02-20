@extends('layouts.app')
@section('style')
    <link rel="stylesheet" href="{{ asset('js/dashboard/resume/experience.css') }}">
@endsection
@extends('dashboard.resume.experience.action')
@section( 'content')
<div class="col-12 pt-2 pb-2">
    <h3>Expereince</h3>

    <hr>
    <div class="experience">

       
        <table class="table  table-dark">
            <thead>
                <tr>
                    <th scope="col">Company</th>
                    <th scope="col">Job Title</th>
                    <th scope="col">From </th>
                    <th scope="col">To</th>
                    <th scope="col">Description</th>
                    <th scope="col" class="text-center">Control</th>
                </tr>
            </thead>
            <tbody>
                @if (isset($experience))
                    @foreach ($experience as $key => $value)
                        <tr>
                            <td>{{ $value['company'] }}</td>
                            <td>{{ $value['jobTitle'] }}</td>
                            <td>{{ $value['from'] }}</td>
                            <td>{{ $value['to'] }}</td>
                            <td>@php echo substr($value['description'], 0, 45)."..>..."; @endphp</td>
                            <td class="text-center"> 
                                <button class="btn btn-warning" onclick="window.location='/dashboard/resume/experience/edit/{{ $value['id'] }}'"> <i class="fas fa-edit"> </i></button>
                             </td>
                        </tr>
                        @php $counter = $key @endphp
                    @endforeach

                @endif
            </tbody>
        </table>
    </div>
    {{-- experience --}}
   
</div>
@endsection
@section('javascript')
    <!-- jQuery -->
    <script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
@endsection