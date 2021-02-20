@extends('welcome')
@php 
    use App\Models\Bio;
    $bio = Bio::where('user_id', config('app.owner'))
    ->get()
    ->first();
@endphp
@section('content')
<div class="card-inner animated fadeInLeft active current-menu-item" id="card-contacts-e">
    <div class="card-wrap">
        <div id="post-53" class="post-53 page type-page status-publish hentry">
            <div data-elementor-type="wp-page" data-elementor-id="53" class="elementor elementor-53" data-elementor-settings="[]">
                <div class="elementor-inner">
                    <div class="elementor-section-wrap">
                        <section class="elementor-section elementor-top-section elementor-element elementor-element-22b6cc0 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="22b6cc0" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7400cb2" data-id="7400cb2" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-bc6e79d elementor-widget elementor-widget-ryancv-custom-text" data-id="bc6e79d" data-element_type="widget" data-widget_type="ryancv-custom-text.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="content custom-text">
                                                            <div class="title"><span class="first-word"></span> <span>Get in
                                                                    Touch</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section class="elementor-section elementor-top-section elementor-element elementor-element-b1f83ef elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="b1f83ef" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-e9080bc" data-id="e9080bc" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-5fa6e40 elementor-widget elementor-widget-google_maps" data-id="5fa6e40" data-element_type="widget" data-widget_type="google_maps.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-custom-embed">
                                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3453.6840951096715!2d31.222101114593585!3d30.04591962545896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458409aa81d58a5%3A0x6ce6bf7cd258d6fe!2sCairo%20Tower!5e0!3m2!1sen!2seg!4v1613208022838!5m2!1sen!2seg" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section class="elementor-section elementor-top-section elementor-element elementor-element-2f63e83 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="2f63e83" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-fb174a3" data-id="fb174a3" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-d76ea60 elementor-widget elementor-widget-ryancv-info-list" data-id="d76ea60" data-element_type="widget" data-widget_type="ryancv-info-list.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="row">
                                                            <div class="col col-d-12 col-t-12 col-m-12 col-list-2 border-line-v">
                                                                <div class="info-list">
                                                                    <ul>
                                                                        <li> <strong> <span> Address:
                                                                                </span> </strong> <span>
                                                                                {{ $bio->address }}</span></li>
                                                                        <li> <strong> <span> Email: </span>
                                                                            </strong> <span>
                                                                                k.e.ebahi@gmail.com </span>
                                                                        </li>
                                                                        <li> <strong> <span> Phone: </span>
                                                                            </strong> <span>
                                                                                (+2) 01148204886 </span>
                                                                        </li>
                                                                        <li> <strong> <span> Android
                                                                                    Developer:
                                                                                </span> </strong> <span>
                                                                                Available </span></li>
                                                                    </ul>
                                                                </div>
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
                        </section>

                        <section class="elementor-section elementor-top-section elementor-element elementor-element-3fc0411 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="3fc0411" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7d1ea59" data-id="7d1ea59" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-30bf3ee elementor-widget elementor-widget-spacer" data-id="30bf3ee" data-element_type="widget" data-widget_type="spacer.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-spacer">
                                                            <div class="elementor-spacer-inner"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section class="elementor-section elementor-top-section elementor-element elementor-element-d642373 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="d642373" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1b1aebf" data-id="1b1aebf" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-6e2ae54 elementor-widget elementor-widget-ryancv-cf7-form" data-id="6e2ae54" data-element_type="widget" data-widget_type="ryancv-cf7-form.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="content contacts">
                                                            <div class="title"><span class="first-word"></span> <span>Contact
                                                                    Form</span></div>
                                                            <div class="row">
                                                                <div class="col col-d-12 col-t-12 col-m-12 border-line-v">
                                                                    <div class="contact_form">
                                                                        <div role="form" class="wpcf7" id="wpcf7-f62-o1" lang="en-US" dir="ltr">
                                                                            <div class="screen-reader-response">
                                                                                <p role="status" aria-live="polite" aria-atomic="true"></p>
                                                                                <ul></ul>
                                                                            </div>
                                                                            <form action="{{ route('contact.insert') }}" method="post" class="wpcf7-form init" novalidate="novalidate" data-status="init">
                                                                                @csrf
                                                                                <div class="row">
                                                                                    <input type="hidden" name="to" value="{{ config('app.owner') }}">
                                                                                    <div class="col col-d-6 col-t-6 col-m-12">
                                                                                        <div class="group-val">
                                                                                            <span class="wpcf7-form-control-wrap your-name"><input type="text" name="fullName" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Full Name"></span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col col-d-6 col-t-6 col-m-12">
                                                                                        <div class="group-val">
                                                                                            <span class="wpcf7-form-control-wrap your-email"><input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Email Address"></span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col col-d-12 col-t-12 col-m-12">
                                                                                        <div class="group-val">
                                                                                            <span class="wpcf7-form-control-wrap your-message"><textarea name="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Your Message"></textarea></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="align-left">
                                                                                    <button type="submit" class="button">
                                                                                        <span class="text"> Send Message</span><span class="arrow"></span>
                                                                                    </button>
                                                                                </div>
                                                                                
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
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