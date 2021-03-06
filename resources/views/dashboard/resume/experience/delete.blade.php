@extends('layouts.app')
@section('style')
    <link rel="stylesheet" href="{{ asset('js/dashboard/resume/experience.css') }}">
@endsection
@extends('dashboard.resume.experience.action')
@section('content')
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
                                                    <h5 class="modal-title  text-danger" id="exampleModalLabel">Delete one Experience</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body text-danger">
                                                   Are you sure to delete {{ $value['jobTitle']}} work in {{ $value['company'] }}
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                        <form  method='post'action={{ route('experience.deleteExpeience') }}>
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
        {{-- experience --}}

    </div>
@endsection
@section( 'javascript')
<script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
@endsection
