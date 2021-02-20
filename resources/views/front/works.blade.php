@extends('welcome')
@section('content')

    <div class="card-inner animated fadeInLeft active current-menu-item" id="card-works-e">
        <div class="card-wrap">
            <div id="post-46" class="post-46 page type-page status-publish hentry">
                <div data-elementor-type="wp-page" data-elementor-id="46" class="elementor elementor-46"
                    data-elementor-settings="[]">
                    <div class="elementor-inner">
                        <div class="elementor-section-wrap">
                            <section
                                class="elementor-section elementor-top-section elementor-element elementor-element-484379f elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                                data-id="484379f" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="elementor-row">
                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f31adcd"
                                            data-id="f31adcd" data-element_type="column">
                                            <div class="elementor-column-wrap elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div class="elementor-element elementor-element-91b90f8 elementor-widget elementor-widget-ryancv-portfolio"
                                                        data-id="91b90f8" data-element_type="widget"
                                                        data-widget_type="ryancv-portfolio.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="content works">
                                                                <div class="title"><span class="first-word"></span>
                                                                    <span>Works</span>
                                                                </div>
                                                                <div class="filter-menu filter-button-group">
                                                                    <div class="f_btn active"> <label><input type="radio"
                                                                                name="fl_radio"
                                                                                value=".grid-item">All</label>
                                                                    </div>
                                                                </div>
                                                                <div class="row grid-items" style=" background-image: url(
                                                                    'asset('background/a.gif')');">

                                                                    <div class="col col-d-12 col-t-6 col-m-12  ">
                                                                        @php
                                                                            use App\Models\Projects;
                                                                            $projects = Projects::where('user_id', config('app.owner'))->get();
                                                                        @endphp
                                                                        @foreach ($projects as $key => $project)
                                                                            <div class="col-md-6 float-right text-center border-left border-top mb-3 ">
                                                                                    <div class="col-md-12 rounded pt-2  "
                                                                                        style="cursor: pointer;overflow:hidden">
                                                                                        <h3 class="text-capitalize">
                                                                                            {{ $project['name'] }}</h3>
                                                                                        @php
                                                                                            $images = explode(',', $project['images']);
                                                                                            array_pop($images);
                                                                                        @endphp

                                                                                        <div class="col-md-12 mb-3">
                                                                                            <img class="rounded w-100"
                                                                                                data-toggle="modal"
                                                                                                data-target="#exampleModalImage{{ $project['id'] }}"
                                                                                                src="{{ asset('works/project/user/') . '/' . config('app.owner') . '/' . $project['id'] . '/' . $images[0] }}">

                                                                                        </div>
                                                                                        
                                                                                        <div class="col-md-12 pb-3">
                                                                                            <div
                                                                                                class="col-md-4 float-left">
                                                                                                <button type="button"
                                                                                                    class="btn btn-dark"
                                                                                                    style="outline: none;width:100%;height:auto"
                                                                                                    data-toggle="modal"
                                                                                                    data-target="#exampleModalDes{{ $project['id'] }}">
                                                                                                    Content
                                                                                                </button>
                                                                                            </div>
                                                                                            <div
                                                                                                class="col-md-4 float-left">
                                                                                                <button type="button"
                                                                                                    class="btn btn-dark"
                                                                                                    style="outline: none;width:100%;height:auto"
                                                                                                    data-toggle="modal"
                                                                                                    data-target="#exampleModalVedio{{ $project['id'] }}">
                                                                                                    Video
                                                                                                </button>
                                                                                            </div>
                                                                                            <div
                                                                                                class="col-md-4 float-left">
                                                                                                <button type="button"
                                                                                                    class="btn btn-dark"
                                                                                                    style="outline: none;width:100%;height:auto">
                                                                                                    <a class="text-white" href="{{ $project['live'] }}"
                                                                                                         target="_blank">
                                                                                                        link project</a>
                                                                                                </button>
                                                                                            </div>

                                                                                        </div>

                                                                                        <div class="modal fade"
                                                                                            id="exampleModalImage{{ $project['id'] }}"
                                                                                            tabindex="-1" role="dialog"
                                                                                            aria-labelledby="exampleModalLabel{{ $project['id'] }}"
                                                                                            aria-hidden="true">
                                                                                            <div class="modal-dialog"
                                                                                                role="document">
                                                                                                <div class="modal-content">
                                                                                                    <div
                                                                                                        class="modal-header">
                                                                                                        <h5 class="modal-title"
                                                                                                            id="exampleModalLabel">
                                                                                                            More images</h5>
                                                                                                        <button
                                                                                                            type="button"
                                                                                                            class="close"
                                                                                                            data-dismiss="modal"
                                                                                                            aria-label="Close">
                                                                                                            <span
                                                                                                                aria-hidden="true">&times;</span>
                                                                                                        </button>
                                                                                                    </div>
                                                                                                    <div class="modal-body">

                                                                                                        @foreach ($images as $key => $image)
                                                                                                            @if (!$key == 0)
                                                                                                                <div
                                                                                                                    class="col-md-12">
                                                                                                                    <img class="rounded w-100"
                                                                                                                        style=""
                                                                                                                        src="{{ asset('works/project/user/') }}/{{ config('app.owner') . '/' . $project['id'] . '/' . $image }}">
                                                                                                                    <hr>
                                                                                                                </div>
                                                                                                            @endif
                                                                                                        @endforeach
                                                                                                    </div>

                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        {{-- =================================== --}}
                                                                                        <!-- Modal descriptin -->
                                                                                        <div class="modal fade"
                                                                                            id="exampleModalDes{{ $project['id'] }}"
                                                                                            tabindex="-1" role="dialog"
                                                                                            aria-labelledby="exampleModalLabel{{ $project['id'] }}"
                                                                                            aria-hidden="true">
                                                                                            <div class="modal-dialog"
                                                                                                role="document">
                                                                                                <div class="modal-content">
                                                                                                    <div
                                                                                                        class="modal-header">
                                                                                                        <h5 class="modal-title"
                                                                                                            id="exampleModalLabel">
                                                                                                            More images</h5>
                                                                                                        <button
                                                                                                            type="button"
                                                                                                            class="close"
                                                                                                            data-dismiss="modal"
                                                                                                            aria-label="Close">
                                                                                                            <span
                                                                                                                aria-hidden="true">&times;</span>
                                                                                                        </button>
                                                                                                    </div>
                                                                                                    <div class="modal-body">
                                                                                                        <div
                                                                                                            class="col-md-12 img">
                                                                                                            <img class="rounded w-100"
                                                                                                                src="{{ asset('works/project/user/') . '/' . config('app.owner') . '/' . $project['id'] . '/' . $images[0] }}">

                                                                                                        </div>
                                                                                                        <hr>
                                                                                                        <div
                                                                                                            class="col-md-12 text-left text-capitalize">

                                                                                                            <div
                                                                                                                class="name  text-success block">
                                                                                                                Project Name
                                                                                                                :
                                                                                                                <strong>{{ $project['name'] }}</strong>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="category text-success block">
                                                                                                                Categry :
                                                                                                                <strong>{{ $project['category'] }}</strong>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="client text-success  block">
                                                                                                                Client :
                                                                                                                <strong>{{ $project['client'] }}</strong>
                                                                                                            </div>

                                                                                                        </div>
                                                                                                        <hr>
                                                                                                        <div
                                                                                                            class="col-md-12">
                                                                                                            {{ $project['description'] }}
                                                                                                        </div>
                                                                                                    </div>

                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        {{-- =================================== --}}
                                                                                        <!-- Modal video -->
                                                                                        <div class="modal fade"
                                                                                            id="exampleModalVedio{{ $project['id'] }}"
                                                                                            tabindex="-1" role="dialog"
                                                                                            aria-labelledby="exampleModalLabel{{ $project['id'] }}"
                                                                                            aria-hidden="true">
                                                                                            <div class="modal-dialog"
                                                                                                role="document">
                                                                                                <div class="modal-content">
                                                                                                    <div
                                                                                                        class="modal-header">
                                                                                                        <h5 class="modal-title"
                                                                                                            id="exampleModalLabel">
                                                                                                            More images</h5>
                                                                                                        <button
                                                                                                            type="button"
                                                                                                            class="close"
                                                                                                            data-dismiss="modal"
                                                                                                            aria-label="Close">
                                                                                                            <span
                                                                                                                aria-hidden="true">&times;</span>
                                                                                                        </button>
                                                                                                    </div>
                                                                                                    <div class="modal-body">
                                                                                                        <div
                                                                                                            class="col-md-12">
                                                                                                            {!!
                                                                                                            $project['link']
                                                                                                            !!}
                                                                                                        </div>

                                                                                                    </div>

                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                            </div>                                                                                                                                                    
                                                                        @endforeach

                                                                    </div>

                                                                    <div class="clear"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
