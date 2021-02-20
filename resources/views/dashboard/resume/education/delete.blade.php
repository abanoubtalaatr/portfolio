@extends('layouts.app')
@section('style')
    <link rel="stylesheet" href="{{ asset('js/dashboard/resume/education.css') }}">
@endsection
@extends('dashboard.resume.education.action')
@section('content')
    <div class="col-12 pt-2 pb-2">
        <h3>Education</h3>

        <hr>
        <div class="education">


            <table class="table  table-dark">
                <thead>
                    <tr>
                        <th scope="col">Unveisty or Course</th>
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
                                                    <h5 class="modal-title  text-danger" id="exampleModalLabel{{ $value['id'] }}">Delete one education</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body text-danger">
                                                   
                                                   Are you sure to delete {{ $value['title'] }} study in {{ $value['place'] }}
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                        <form  method='post'action={{ route('education.deleteEducation') }}>
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
        {{-- education --}}

    </div>
@endsection
@section( 'javascript')
<script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
@endsection
