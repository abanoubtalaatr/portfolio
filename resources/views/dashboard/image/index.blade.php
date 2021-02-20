@extends('layouts.app')
@section('style')

@endsection
@section('content')
    <div class="col-12 pt-2 pb-2 text-center">
        <hr>
        <button class="btn btn-primary" onclick="window.location='/dashboard/image/add'"><i class="fas fa-plus"></i> Add new
            image</button>
        <hr>
        <h3>contact</h3>
        <hr>
        <div class="contact">


            <table class="table table-dark text-center">
                <thead>
                    <tr>
                        <th scope="col">Image</th>
                        <th scope="col" class="text-center">Control</th>
                    </tr>
                </thead>
                <tbody>

                    @if (isset($image))
                        <tr>

                            <td>
                                <div class="col-md-6 mx-auto">
                                    <img src="{{ asset('image/user/') . '/' . Auth::id() . '/' . $image['image'] }}"
                                        alt="" style='height:300px;width:400px' class="mr-atuo">
                                </div>
                            </td>
                            <td class="text-center">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                    data-target="#exampleModal{{ $image['id'] }}">
                                    <i class="fas fa-trash"></i>
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal{{ $image['id'] }}" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title  text-danger" id="exampleModalLabel">Delete one
                                                    contact</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body text-danger">
                                                Are you sure to delete
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <form method='post' action={{ route('image.deleteImage') }}>
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $image['id'] }}">
                                                    <input type="hidden" name="image" value="{{ $image['image'] }}">
                                                    <button class="btn btn-primary">Save</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>


                    @endif
                </tbody>
            </table>
        </div>
        {{-- contact --}}

    </div>
@endsection
@section('javascript')
    <script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
@endsection
