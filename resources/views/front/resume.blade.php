@extends('welcome')
@php
use App\Models\Experience;
use App\Models\Education;
use App\Models\Skill;
use App\Models\Language;
use App\Models\Knowledge;

$experiences = Experience::where('user_id', config('app.owner'))->get();
$educations  = Education::where('user_id', config('app.owner'))->get();
$languages   = Language::where('user_id', config('app.owner'))->get();
$knowledges  = Knowledge::where('user_id', config('app.owner'))->get();

@endphp

@section('content')

    <div class="card-inner animated fadeInLeft active current-menu-item" id="card-resume-e">
        <div class="card-wrap">
            <div id="post-41" class="post-41 page type-page status-publish hentry">
                <div data-elementor-type="wp-page" data-elementor-id="41" class="elementor elementor-41"
                    data-elementor-settings="[]">
                    <div class="elementor-inner">
                        <div class="elementor-section-wrap">
                            <section
                                class="elementor-section elementor-top-section elementor-element elementor-element-59895bb elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                                data-id="59895bb" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="elementor-row">
                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-be20ba8"
                                            data-id="be20ba8" data-element_type="column">
                                            <div class="elementor-column-wrap elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div class="elementor-element elementor-element-26b97d8 elementor-widget elementor-widget-ryancv-custom-text"
                                                        data-id="26b97d8" data-element_type="widget"
                                                        data-widget_type="ryancv-custom-text.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="content custom-text">
                                                                <div class="title"><span class="first-word"></span>
                                                                    <span>Resume</span>
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
                            <section
                                class="elementor-section elementor-top-section elementor-element elementor-element-2926877 elementor-section-full_width row elementor-section-height-default elementor-section-height-default"
                                data-id="2926877" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="elementor-row">
                                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-24104fa col"
                                            data-id="24104fa" data-element_type="column">
                                            <div class="elementor-column-wrap elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div class="elementor-element elementor-element-a38a935 elementor-widget elementor-widget-ryancv-resume"
                                                        data-id="a38a935" data-element_type="widget"
                                                        data-widget_type="ryancv-resume.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="resume-item">
                                                                <div class="resume-title border-line-h">
                                                                    <div class="icon"><i class="fa fa-briefcase"></i></div>
                                                                    <div class="name"> <span> Experince</span></div>
                                                                </div>
                                                                <div class="resume-items">
                                                                    @foreach ($experiences as $key => $experience)
                                                                        <div class="resume-item border-line-h active">
                                                                            <div class="date">
                                                                                <span> {{ $experience->from }} -</span>
                                                                                <span> {{ $experience->to }}</span>
                                                                            </div>
                                                                            <div class="name"> <span>
                                                                                    {{ $experience->jobTitle }}. </span>
                                                                            </div>
                                                                            <div class="company"> <span>
                                                                                    {{ $experience->company }}. </span>
                                                                            </div>
                                                                            <div class="single-post-text">
                                                                                <div>
                                                                                    <p>{{ $experience->description }}.</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-845c1d0 col border-line-v"
                                            data-id="845c1d0" data-element_type="column">
                                            <div class="elementor-column-wrap elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div class="elementor-element elementor-element-a64937a elementor-widget elementor-widget-ryancv-resume"
                                                        data-id="a64937a" data-element_type="widget"
                                                        data-widget_type="ryancv-resume.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="resume-item">
                                                                <div class="resume-title border-line-h">
                                                                    <div class="icon"><i class="fa fa-university"></i></div>
                                                                    <div class="name"> <span>Education</span></div>
                                                                </div>
                                                                <div class="resume-items">
                                                                    <div class="resume-item border-line-h pt-3 ">
                                                                        @foreach ($educations as $key => $education)
                                                                            <div class="date pt-3"> <span>
                                                                                    {{ $education->from }}</span> -
                                                                                {{ $education->to }}</span></div>
                                                                            <div class="name"> <span>
                                                                                    {{ $education->title }} </span>
                                                                            </div>
                                                                            <div class="company"> <span>
                                                                                    {{ $education->place }} </span></div>
                                                                            <div class="single-post-text">
                                                                                <div>
                                                                                    <p>
                                                                                        {{ $education->description }}
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                    </div>
                                                                    @endforeach
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
                            <section
                                class="elementor-section elementor-top-section elementor-element elementor-element-0631c8a elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                                data-id="0631c8a" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="elementor-row">
                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-573fdc8"
                                            data-id="573fdc8" data-element_type="column">
                                            <div class="elementor-column-wrap elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div class="elementor-element elementor-element-3952aad elementor-widget elementor-widget-spacer"
                                                        data-id="3952aad" data-element_type="widget"
                                                        data-widget_type="spacer.default">
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
                            <section
                                class="elementor-section elementor-top-section elementor-element elementor-element-deefe3f elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                                data-id="deefe3f" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="elementor-row">
                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8ec419d"
                                            data-id="8ec419d" data-element_type="column">
                                            <div class="elementor-column-wrap elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div class="elementor-element elementor-element-cae1473 elementor-widget elementor-widget-ryancv-custom-text"
                                                        data-id="cae1473" data-element_type="widget"
                                                        data-widget_type="ryancv-custom-text.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="content custom-text">
                                                                <div class="title"><span class="first-word"></span>
                                                                    <span>Skills</span>
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
                            <section
                                class="elementor-section elementor-top-section elementor-element elementor-element-77e9f37 elementor-section-full_width row elementor-section-height-default elementor-section-height-default"
                                data-id="77e9f37" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="elementor-row">
                                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-552e9ac col"
                                            data-id="552e9ac" data-element_type="column">
                                            <div class="elementor-column-wrap elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    {{-- <div class="elementor-element elementor-element-2808be1 elementor-widget elementor-widget-ryancv-skills"
                                                        data-id="2808be1" data-element_type="widget"
                                                        data-widget_type="ryancv-skills.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="skills-item">
                                                                <div class="skills-list percent">
                                                                    <div class="skill-title border-line-h">
                                                                        <div class="icon"><i class="fa fa-paint-brush"></i>
                                                                        </div>
                                                                        <div class="name"> <span>Knowledge</span></div>
                                                                    </div>
                                                                    <ul>
                                                                        <li class="border-line-h">
                                                                            <div class="name"> <span> Web Design </span>
                                                                            </div>
                                                                            <div class=" ">
                                                                                fjldksajflks
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> --}}
                                                   
                                                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-9170935 col border-line-v"
                                                        data-id="9170935" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-7b18142 elementor-widget elementor-widget-ryancv-skills"
                                                                    data-id="7b18142" data-element_type="widget"
                                                                    data-widget_type="ryancv-skills.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="skills-item">
                                                                            <div class="skills-list list">
                                                                                <div class="skill-title border-line-h">
                                                                                    <div class="icon"><i
                                                                                            class="fa fa-list"></i></div>
                                                                                    <div class="name">
                                                                                        <span>Knowledge</span></div>
                                                                                </div>
                                                                                <ul>
                                                                                    @foreach ($knowledges as $key => $knowledge)
                                                                                        <li class="border-line-h">
                                                                                            <div class="name">
                                                                                                <span>{{ $knowledge->name }}
                                                                                                </span>
                                                                                            </div>
                                                                                            <div class="progress ">
                                                                                                <div class="percentage"
                                                                                                    style="width:%;">

                                                                                                </div>
                                                                                            </div>
                                                                                        </li>
                                                                                    @endforeach
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                  
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-3238565 col border-line-v"
                                            data-id="3238565" data-element_type="column">
                                            <div class="elementor-column-wrap elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div class="elementor-element elementor-element-af7804b elementor-widget elementor-widget-ryancv-skills"
                                                        data-id="af7804b" data-element_type="widget"
                                                        data-widget_type="ryancv-skills.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="skills-item">
                                                                <div class="skills-list dotted">
                                                                    <div class="skill-title border-line-h">
                                                                        <div class="icon"><i class="fa fa-flag"></i></div>
                                                                        <div class="name"> <span>Languages</span></div>
                                                                    </div>
                                                                    <ul>
                                                                        @foreach ($languages as $key => $language)
                                                                            <li class="border-line-h">
                                                                                <div class="name"> <span>
                                                                                        {{ $language->name }} :
                                                                                        <strong>{{ $language->level }}</strong>
                                                                                    </span></div>
                                                                            </li>
                                                                        @endforeach
                                                                    </ul>
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
                            {{-- <section
                                class="elementor-section elementor-top-section elementor-element elementor-element-f74ec84 elementor-section-full_width row elementor-section-height-default elementor-section-height-default"
                                data-id="f74ec84" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="elementor-row">
                                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-c60c53c col"
                                            data-id="c60c53c" data-element_type="column">
                                            <div class="elementor-column-wrap elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div class="elementor-element elementor-element-fd65c59 elementor-widget elementor-widget-ryancv-skills"
                                                        data-id="fd65c59" data-element_type="widget"
                                                        data-widget_type="ryancv-skills.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="skills-item">
                                                                <div class="skills-list circles">
                                                                    <div class="skill-title border-line-h">
                                                                        <div class="icon"><i class="fa fa-code"></i></div>
                                                                        <div class="name"> <span>Coding</span></div>
                                                                    </div>
                                                                    <ul>
                                                                        <li class="border-line-h">
                                                                            <div class="name"> <span> WordPress </span>
                                                                            </div>
                                                                            <div class="progress p90">
                                                                                <div class="percentage" style="width:90%;">
                                                                                </div> <span>90%</span>
                                                                                <div class="slice">
                                                                                    <div class="bar"></div>
                                                                                    <div class="fill"></div>
                                                                                </div>
                                                                                <div class="slice">
                                                                                    <div class="bar"></div>
                                                                                    <div class="fill"></div>
                                                                                </div>
                                                                                <div class="slice">
                                                                                    <div class="bar"></div>
                                                                                    <div class="fill"></div>
                                                                                </div>
                                                                                <div class="slice">
                                                                                    <div class="bar"></div>
                                                                                    <div class="fill"></div>
                                                                                </div>
                                                                                <div class="slice">
                                                                                    <div class="bar"></div>
                                                                                    <div class="fill"></div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="border-line-h">
                                                                            <div class="name"> <span> PHP / MYSQL </span>
                                                                            </div>
                                                                            <div class="progress p75">
                                                                                <div class="percentage" style="width:75%;">
                                                                                </div> <span>75%</span>
                                                                                <div class="slice">
                                                                                    <div class="bar"></div>
                                                                                    <div class="fill"></div>
                                                                                </div>
                                                                                <div class="slice">
                                                                                    <div class="bar"></div>
                                                                                    <div class="fill"></div>
                                                                                </div>
                                                                                <div class="slice">
                                                                                    <div class="bar"></div>
                                                                                    <div class="fill"></div>
                                                                                </div>
                                                                                <div class="slice">
                                                                                    <div class="bar"></div>
                                                                                    <div class="fill"></div>
                                                                                </div>
                                                                                <div class="slice">
                                                                                    <div class="bar"></div>
                                                                                    <div class="fill"></div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="border-line-h">
                                                                            <div class="name"> <span> Angular / JavaScript
                                                                                </span></div>
                                                                            <div class="progress p85">
                                                                                <div class="percentage" style="width:85%;">
                                                                                </div> <span>85%</span>
                                                                                <div class="slice">
                                                                                    <div class="bar"></div>
                                                                                    <div class="fill"></div>
                                                                                </div>
                                                                                <div class="slice">
                                                                                    <div class="bar"></div>
                                                                                    <div class="fill"></div>
                                                                                </div>
                                                                                <div class="slice">
                                                                                    <div class="bar"></div>
                                                                                    <div class="fill"></div>
                                                                                </div>
                                                                                <div class="slice">
                                                                                    <div class="bar"></div>
                                                                                    <div class="fill"></div>
                                                                                </div>
                                                                                <div class="slice">
                                                                                    <div class="bar"></div>
                                                                                    <div class="fill"></div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="border-line-h">
                                                                            <div class="name"> <span> HTML / CSS </span>
                                                                            </div>
                                                                            <div class="progress p95">
                                                                                <div class="percentage" style="width:95%;">
                                                                                </div> <span>95%</span>
                                                                                <div class="slice">
                                                                                    <div class="bar"></div>
                                                                                    <div class="fill"></div>
                                                                                </div>
                                                                                <div class="slice">
                                                                                    <div class="bar"></div>
                                                                                    <div class="fill"></div>
                                                                                </div>
                                                                                <div class="slice">
                                                                                    <div class="bar"></div>
                                                                                    <div class="fill"></div>
                                                                                </div>
                                                                                <div class="slice">
                                                                                    <div class="bar"></div>
                                                                                    <div class="fill"></div>
                                                                                </div>
                                                                                <div class="slice">
                                                                                    <div class="bar"></div>
                                                                                    <div class="fill"></div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-9170935 col border-line-v"
                                            data-id="9170935" data-element_type="column">
                                            <div class="elementor-column-wrap elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div class="elementor-element elementor-element-7b18142 elementor-widget elementor-widget-ryancv-skills"
                                                        data-id="7b18142" data-element_type="widget"
                                                        data-widget_type="ryancv-skills.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="skills-item">
                                                                <div class="skills-list list">
                                                                    <div class="skill-title border-line-h">
                                                                        <div class="icon"><i class="fa fa-list"></i></div>
                                                                        <div class="name"> <span>Knowledge</span></div>
                                                                    </div>
                                                                    <ul>
                                                                        <li class="border-line-h">
                                                                            <div class="name"> <span> Website hosting
                                                                                </span></div>
                                                                            <div class="progress ">
                                                                                <div class="percentage" style="width:%;">
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="border-line-h">
                                                                            <div class="name"> <span> iOS and android apps
                                                                                </span></div>
                                                                            <div class="progress ">
                                                                                <div class="percentage" style="width:%;">
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="border-line-h">
                                                                            <div class="name"> <span> Create logo design
                                                                                </span></div>
                                                                            <div class="progress ">
                                                                                <div class="percentage" style="width:%;">
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="border-line-h">
                                                                            <div class="name"> <span> Design for print
                                                                                </span></div>
                                                                            <div class="progress ">
                                                                                <div class="percentage" style="width:%;">
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="border-line-h">
                                                                            <div class="name"> <span> Modern and
                                                                                    mobile-ready </span></div>
                                                                            <div class="progress ">
                                                                                <div class="percentage" style="width:%;">
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="border-line-h">
                                                                            <div class="name"> <span> Advertising services
                                                                                    include </span></div>
                                                                            <div class="progress ">
                                                                                <div class="percentage" style="width:%;">
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="border-line-h">
                                                                            <div class="name"> <span> Graphics and
                                                                                    animations </span></div>
                                                                            <div class="progress ">
                                                                                <div class="percentage" style="width:%;">
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="border-line-h">
                                                                            <div class="name"> <span> Search engine
                                                                                    marketing </span></div>
                                                                            <div class="progress ">
                                                                                <div class="percentage" style="width:%;">
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section> --}}
                            {{-- <section
                                class="elementor-section elementor-top-section elementor-element elementor-element-4dd8d99 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                                data-id="4dd8d99" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="elementor-row">
                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2a0329b"
                                            data-id="2a0329b" data-element_type="column">
                                            <div class="elementor-column-wrap elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div class="elementor-element elementor-element-a9262f9 elementor-widget elementor-widget-spacer"
                                                        data-id="a9262f9" data-element_type="widget"
                                                        data-widget_type="spacer.default">
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
                            <section
                                class="elementor-section elementor-top-section elementor-element elementor-element-af3cd27 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                                data-id="af3cd27" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="elementor-row">
                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-12a611e"
                                            data-id="12a611e" data-element_type="column">
                                            <div class="elementor-column-wrap elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div class="elementor-element elementor-element-484e8be elementor-widget elementor-widget-ryancv-testimonials"
                                                        data-id="484e8be" data-element_type="widget"
                                                        data-widget_type="ryancv-testimonials.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="content testimonials">
                                                                <div class="title"><span class="first-word"></span>
                                                                    <span>Testimonials</span></div>
                                                                <div class="row testimonial-items">
                                                                    <div
                                                                        class="col col-d-12 col-t-12 col-m-12 border-line-v">
                                                                        <div class="revs-carousel ">
                                                                            <div class="swiper-container swiper-container-initialized swiper-container-horizontal"
                                                                                data-swiper-autoplay="0"
                                                                                data-swiper-delay="5000"
                                                                                data-swiper-loop="0">
                                                                                <div class="swiper-wrapper"
                                                                                    style="transform: translate3d(0px, 0px, 0px);">
                                                                                    <div class="swiper-slide swiper-slide-active"
                                                                                        style="width: 576px;">
                                                                                        <div class="revs-item">
                                                                                            <div class="text">
                                                                                                <div> Lorem ipsum dolor sit
                                                                                                    amet, consectetur
                                                                                                    adipiscing elit. Lorem
                                                                                                    ipsum dolor sit amet,
                                                                                                    consectetur adipiscing
                                                                                                    elit.</div>
                                                                                            </div>
                                                                                            <div class="user">
                                                                                                <div class="img">
                                                                                                    <noscript><img
                                                                                                            src="https://ryancv.bslthemes.com/ve1/wp-content/uploads/2020/04/rev2-92x92.jpg"
                                                                                                            alt="Helen Floyd" /></noscript><img
                                                                                                        class="lazyload"
                                                                                                        src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E"
                                                                                                        data-src="https://ryancv.bslthemes.com/ve1/wp-content/uploads/2020/04/rev2-92x92.jpg"
                                                                                                        alt="Helen Floyd">
                                                                                                </div>
                                                                                                <div class="info">
                                                                                                    <div class="name">
                                                                                                        <span> Helen Floyd
                                                                                                        </span></div>
                                                                                                    <div class="company">
                                                                                                        <span> Art Director
                                                                                                        </span></div>
                                                                                                </div>
                                                                                                <div class="clear"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="swiper-slide swiper-slide-next"
                                                                                        style="width: 576px;">
                                                                                        <div class="revs-item">
                                                                                            <div class="text">
                                                                                                <div> Lorem ipsum dolor sit
                                                                                                    amet, consectetur
                                                                                                    adipiscing elit. Lorem
                                                                                                    ipsum dolor sit amet,
                                                                                                    consectetur adipiscing
                                                                                                    elit.</div>
                                                                                            </div>
                                                                                            <div class="user">
                                                                                                <div class="img">
                                                                                                    <noscript><img
                                                                                                            src="https://ryancv.bslthemes.com/ve1/wp-content/uploads/2020/04/rev1-92x92.jpg"
                                                                                                            alt="Robert Chase" /></noscript><img
                                                                                                        class="lazyload"
                                                                                                        src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E"
                                                                                                        data-src="https://ryancv.bslthemes.com/ve1/wp-content/uploads/2020/04/rev1-92x92.jpg"
                                                                                                        alt="Robert Chase">
                                                                                                </div>
                                                                                                <div class="info">
                                                                                                    <div class="name">
                                                                                                        <span> Robert Chase
                                                                                                        </span></div>
                                                                                                    <div class="company">
                                                                                                        <span> CEO </span>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="clear"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="swiper-slide"
                                                                                        style="width: 576px;">
                                                                                        <div class="revs-item">
                                                                                            <div class="text">
                                                                                                <div> Lorem ipsum dolor sit
                                                                                                    amet, consectetur
                                                                                                    adipiscing elit. Lorem
                                                                                                    ipsum dolor sit amet,
                                                                                                    consectetur adipiscing
                                                                                                    elit.</div>
                                                                                            </div>
                                                                                            <div class="user">
                                                                                                <div class="img">
                                                                                                    <noscript><img
                                                                                                            src="https://ryancv.bslthemes.com/ve1/wp-content/uploads/2020/04/profile-92x92.png"
                                                                                                            alt="John Doe" /></noscript><img
                                                                                                        class="lazyload"
                                                                                                        src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E"
                                                                                                        data-src="https://ryancv.bslthemes.com/ve1/wp-content/uploads/2020/04/profile-92x92.png"
                                                                                                        alt="John Doe">
                                                                                                </div>
                                                                                                <div class="info">
                                                                                                    <div class="name">
                                                                                                        <span> John Doe
                                                                                                        </span></div>
                                                                                                    <div class="company">
                                                                                                        <span> Art Director
                                                                                                        </span></div>
                                                                                                </div>
                                                                                                <div class="clear"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div><span class="swiper-notification"
                                                                                    aria-live="assertive"
                                                                                    aria-atomic="true"></span>
                                                                            </div>
                                                                            <div
                                                                                class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets">
                                                                                <span
                                                                                    class="swiper-pagination-bullet swiper-pagination-bullet-active"
                                                                                    tabindex="0" role="button"
                                                                                    aria-label="Go to slide 1"></span><span
                                                                                    class="swiper-pagination-bullet"
                                                                                    tabindex="0" role="button"
                                                                                    aria-label="Go to slide 2"></span><span
                                                                                    class="swiper-pagination-bullet"
                                                                                    tabindex="0" role="button"
                                                                                    aria-label="Go to slide 3"></span></div>
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
                            </section> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
