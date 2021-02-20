
@extends('layouts.app')
@section('style')
@extends('dashboard.about.service.action')
@endsection
@section('content')
    <div class="col-12 pt-2 pb-2 text-center">
        <hr>
        <h3>About</h3>
        <hr>
        <div class="contact">


            <table class="table table-dark text-center">
                <thead>
                    <tr>
                        <th scope="col">Service </th>
                        <th scope="col" class="text-center">About</th>
                        <th scope="col" class="text-center">Control</th>
                    </tr>
                </thead>
                <tbody>
                    @if (isset($services))
                        @foreach ($services as $key => $value)
                            <tr>
                                <td>{{ $value['service'] }}</td>
                                <td class="text-center">{{ $value['value'] }}</td>
                                <td class="text-center">
                                    <button class="btn btn-warning" onclick="window.location='/dashboard/about/service/edit/{{ $value['id'] }}'"> <i class="fas fa-edit"> </i></button>
                                </td>
                            </tr>
                            @php $counter = $key @endphp
                        @endforeach

                    @endif
                </tbody>
            </table>
        </div>
        {{-- contact --}}

    </div>
@endsection
@section( 'javascript')
<script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
@endsection
