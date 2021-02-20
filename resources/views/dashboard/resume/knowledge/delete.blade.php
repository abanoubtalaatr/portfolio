@extends('layouts.app')
@section('style')
    <link rel="stylesheet" href="{{ asset('js/dashboard/resume/knowledge.css') }}">
@endsection
@extends('dashboard.resume.knowledge.action')
@section( 'content')
<div class="col-12 pt-2 pb-2">
    <h3>knowledge</h3>

    <hr>
    <div class="knowledge">

       
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col" class="text-center">Name</th>
                    <th scope="col" class="text-center">Control</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @if (isset($knowledge))
                    @foreach ($knowledge as $key => $value)
                        <tr>
                            
                            <td>{{ $value['name'] }}</td>
                            <td class="text-center">
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
                                            <h5 class="modal-title  text-danger" id="exampleModalLabel{{ $value['id'] }}">Delete one knowledge</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body text-danger">
                                           Are you sure to delete {{ $value['name']}}
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                                <form  method='post'action={{ route('knowledge.deleteKnowledge') }}>
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
                    @endforeach

                @endif
            </tbody>
        </table>
    </div>
    {{-- knowledge --}}
   
</div>
@endsection
@section( 'javascript')
<script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
@endsection