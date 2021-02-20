@extends('welcome')
@php
use App\Models\Bio;
use App\Models\Service;
$bio = Bio::where('user_id', config('app.owner'))
    ->get()
    ->first();
$services = Service::where('user_id', config('app.owner'))->get();

@endphp
@section('content')
    <div class="card-inner animated fadeInLeft active current-menu-item " id="card-home-e">
        <div class="card-wrap">
            <div id="post-30" class="post-30 page type-page status-publish hentry">
                <div data-elementor-type="wp-page" data-elementor-id="30" class="elementor elementor-30"
                    data-elementor-settings="[]">
                    <div class="elementor-inner">
                        <div class="elementor-section-wrap">
                            <section
                                class="elementor-section elementor-top-section elementor-element elementor-element-1368f2f elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                                data-id="1368f2f" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="elementor-row">
                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8d69b8b"
                                            data-id="8d69b8b" data-element_type="column">
                                            <div class="elementor-column-wrap elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div class="elementor-element elementor-element-b939dc4 elementor-widget elementor-widget-ryancv-about-me"
                                                        data-id="b939dc4" data-element_type="widget"
                                                        data-widget_type="ryancv-about-me.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="content about">
                                                                <div class="title">
                                                                    <span class="first-word"></span>
                                                                    <span>About Me</span>
                                                                </div>
                                                                <div class="row">
                                                                    <div
                                                                        class="col col-d-6 col-t-12 col-m-12 border-line-v">
                                                                        <div class="text-box">
                                                                            <div>
                                                                                <strong class='text-capitalize'>Hello!
                                                                                    {{ config('app.owner_name') }}
                                                                                </strong><br />
                                                                                {{ $bio->bio }}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="col col-d-6 col-t-12 col-m-12 border-line-v">
                                                                        <div class="info-list">
                                                                            <ul>
                                                                                <li>
                                                                                    <strong> <span> Age: </span>
                                                                                    </strong>
                                                                                    <span> {{ $bio->age }} </span>
                                                                                </li>
                                                                                <li>
                                                                                    <strong>
                                                                                        <span> Residence: </span>
                                                                                    </strong>
                                                                                    <span> {{ $bio->residence }} </span>
                                                                                </li>
                                                                                <li>
                                                                                    <strong>
                                                                                        <span> Freelance: </span>
                                                                                    </strong>
                                                                                    <span> {{ $bio->freelancer }} </span>
                                                                                </li>
                                                                                <li>
                                                                                    <strong>
                                                                                        <span> Address: </span>
                                                                                    </strong>
                                                                                    <span> {{ $bio->address }}</span>
                                                                                </li>
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
                                </div>
                            </section>
                            <section
                                class="elementor-section elementor-top-section elementor-element elementor-element-ac2a78f elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                                data-id="ac2a78f" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="elementor-row">
                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-15d3f26"
                                            data-id="15d3f26" data-element_type="column">
                                            <div class="elementor-column-wrap elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div class="elementor-element elementor-element-7412363 elementor-widget elementor-widget-ryancv-services"
                                                        data-id="7412363" data-element_type="widget"
                                                        data-widget_type="ryancv-services.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="content services">
                                                                <div class="title">
                                                                    <span class="first-word"></span>
                                                                    <span>My Services</span>
                                                                </div>
                                                                <div class="row service-items border-line-v">

                                                                    @foreach ($services as $key => $service)
                                                                        <div
                                                                            class="col col-d-6 col-t-6 col-m-12 border-line-h">
                                                                            <div class="service-item">
                                                                                <div class="icon">
                                                                                    <span class=""></span>
                                                                                </div>
                                                                                <div class="name">
                                                                                    <span> {{ $service->service }} </span>
                                                                                </div>
                                                                                <div class="desc">
                                                                                    <div>
                                                                                        <p>
                                                                                            {{ $service->value }}
                                                                                        </p>
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
                            </section>

                            {{-- <section
                                class="elementor-section elementor-top-section elementor-element elementor-element-4ab94b5 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                                data-id="4ab94b5"
                                data-element_type="section"
                              >
                                         <div class="elementor-container elementor-column-gap-no">
                                           <div class="elementor-row">
                                             <div
                                               class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7bb6851"
                                               data-id="7bb6851"
                                               data-element_type="column"
                                             >
                                               <div
                                                 class="elementor-column-wrap elementor-element-populated"
                                               >
                                                 <div class="elementor-widget-wrap">
                                                   <div
                                                     class="elementor-element elementor-element-cd90f3f elementor-widget elementor-widget-ryancv-pricing"
                                                     data-id="cd90f3f"
                                                     data-element_type="widget"
                                                     data-widget_type="ryancv-pricing.default"
                                                   >
                                                     <div class="elementor-widget-container">
                                                       <div class="content pricing">
                                                         <div class="title">
                                                           <span class="first-word"></span>
                                                           <span>Pricing</span>
                                                         </div>
                                                         <div class="row pricing-items">
                                                           <div
                                                             class="col col-d-6 col-t-6 col-m-12 border-line-v"
                                                           >
                                                             <div class="pricing-item">
                                                               <div class="icon">
                                                                 <i class="fa fa-battery-half"></i>
                                                               </div>
                                                               <div class="name">
                                                                 <span> Basic </span>
                                                               </div>
                                                               <div class="amount">
                                                                 <span class="dollar">
                                                                   <span> $ </span>
                                                                 </span>
                                                                 <span class="number">
                                                                   <span> 22 </span>
                                                                 </span>
                                                                 <span class="period">
                                                                   <span> hour </span>
                                                                 </span>
                                                               </div>
                                                               <div class="feature-list">
                                                                 <div>
                                                                   <ul>
                                                                     <li>Web Development</li>
                                                                     <li>Advetising</li>
                                                                     <li>Game Development</li>
                                                                     <li>Music Writing</li>
                                                                     <li>Photography</li>
                                                                   </ul>
                                                                 </div>
                                                               </div>
                                                               <div class="lnks">
                                                                 <a href="#" class="lnk">
                                                                   <span class="text">
                                                                     <span> Buy Basic </span>
                                                                   </span>
                                                                   <i class=""></i>
                                                                 </a>
                                                               </div>
                                                             </div>
                                                           </div>
                                                           <div
                                                             class="col col-d-6 col-t-6 col-m-12 border-line-v"
                                                           >
                                                             <div class="pricing-item">
                                                               <div class="icon">
                                                                 <i class="fa fa-battery-full"></i>
                                                               </div>
                                                               <div class="name"><span> Pro </span></div>
                                                               <div class="amount">
                                                                 <span class="dollar">
                                                                   <span> $ </span>
                                                                 </span>
                                                                 <span class="number">
                                                                   <span> 48 </span>
                                                                 </span>
                                                                 <span class="period">
                                                                   <span> hour </span>
                                                                 </span>
                                                               </div>
                                                               <div class="feature-list">
                                                                 <div>
                                                                   <ul>
                                                                     <li>Web Development</li>
                                                                     <li>Advetising</li>
                                                                     <li>Game Development</li>
                                                                     <li>
                                                                       Music Writing <strong>new</strong>
                                                                     </li>
                                                                     <li>
                                                                       Photography <strong>new</strong>
                                                                     </li>
                                                                   </ul>
                                                                 </div>
                                                               </div>
                                                               <div class="lnks">
                                                                 <a href="#" class="lnk">
                                                                   <span class="text">
                                                                     <span> Buy Pro </span>
                                                                   </span>
                                                                   <i class=""></i>
                                                                 </a>
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
                            </section> --}}
                            {{-- <section
                                class="elementor-section elementor-top-section elementor-element elementor-element-18b4760 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                                data-id="18b4760"
                                data-element_type="section"
                              >
                                         <div class="elementor-container elementor-column-gap-no">
                                           <div class="elementor-row">
                                             <div
                                               class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-094a289"
                                               data-id="094a289"
                                               data-element_type="column"
                                             >
                                               <div
                                                 class="elementor-column-wrap elementor-element-populated"
                                               >
                                                 <div class="elementor-widget-wrap">
                                                   <div
                                                     class="elementor-element elementor-element-35e1624 elementor-widget elementor-widget-ryancv-fun-facts"
                                                     data-id="35e1624"
                                                     data-element_type="widget"
                                                     data-widget_type="ryancv-fun-facts.default"
                                                   >
                                                     <div class="elementor-widget-container">
                                                       <div class="content fuct">
                                                         <div class="title">
                                                           <span class="first-word"></span>
                                                           <span>Fun Facts</span>
                                                         </div>
                                                         <div class="row fuct-items">
                                                           <div
                                                             class="col col-d-3 col-t-3 col-m-6 border-line-v"
                                                           >
                                                             <div class="fuct-item">
                                                               <div class="icon">
                                                                 <span class="fa fa-music"></span>
                                                               </div>
                                                               <div class="name">
                                                                 <span> 80 Albumes Listened </span>
                                                               </div>
                                                             </div>
                                                           </div>
                                                           <div
                                                             class="col col-d-3 col-t-3 col-m-6 border-line-v"
                                                           >
                                                             <div class="fuct-item">
                                                               <div class="icon">
                                                                 <span class="fa fa-trophy"></span>
                                                               </div>
                                                               <div class="name">
                                                                 <span> 15 Awards Won </span>
                                                               </div>
                                                             </div>
                                                           </div>
                                                           <div
                                                             class="col col-d-3 col-t-3 col-m-6 border-line-v"
                                                           >
                                                             <div class="fuct-item">
                                                               <div class="icon">
                                                                 <span class="fa fa-coffee"></span>
                                                               </div>
                                                               <div class="name">
                                                                 <span> 1 000 Cups Of Coffee </span>
                                                               </div>
                                                             </div>
                                                           </div>
                                                           <div
                                                             class="col col-d-3 col-t-3 col-m-6 border-line-v"
                                                           >
                                                             <div class="fuct-item">
                                                               <div class="icon">
                                                                 <span class="fa fa-flag"></span>
                                                               </div>
                                                               <div class="name">
                                                                 <span> 10 Countries Visited </span>
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
                            </section> --}}

                            {{-- <section
                                class="elementor-section elementor-top-section elementor-element elementor-element-b6c68ba elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                                data-id="b6c68ba"
                                data-element_type="section"
                              >
                                <div class="elementor-container elementor-column-gap-no">
                                  <div class="elementor-row">
                                    <div
                                      class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-96793b8"
                                      data-id="96793b8"
                                      data-element_type="column"
                                    >
                                      <div
                                        class="elementor-column-wrap elementor-element-populated"
                                      >
                                        <div class="elementor-widget-wrap">
                                          <div
                                            class="elementor-element elementor-element-bdab611 elementor-widget elementor-widget-ryancv-quote"
                                            data-id="bdab611"
                                            data-element_type="widget"
                                            data-widget_type="ryancv-quote.default"
                                          >
                                            <div class="elementor-widget-container">
                                              <div class="content quote">
                                                <div class="title">
                                                  <span class="first-word"></span>
                                                  <span>Quote</span>
                                                </div>
                                                <div class="row">
                                                  <div
                                                    class="col col-d-12 col-t-12 col-m-12 border-line-v"
                                                  >
                                                    <div class="revs-item">
                                                      <div class="text">
                                                        <div>
                                                          Lorem ipsum dolor sit amet,
                                                          consectetur adipiscing elit. Lorem
                                                          ipsum dolor sit amet, consectetur
                                                          adipiscing elit.
                                                        </div>
                                                      </div>
                                                      <div class="user">
                                                        <div class="img">
                                                          <noscript
                                                            ><img
                                                              src="https://ryancv.bslthemes.com/ve1/wp-content/uploads/2020/04/profile-92x92.png"
                                                              alt="Ryan Adlard"/></noscript
                                                          ><img
                                                            class="lazyload"
                                                            src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E"
                                                            data-src="https://ryancv.bslthemes.com/ve1/wp-content/uploads/2020/04/profile-92x92.png"
                                                            alt="Ryan Adlard"
                                                          />
                                                        </div>
                                                        <div class="info">
                                                          <div class="name">Ryan Adlard</div>
                                                          <div class="company">
                                                            Web Designer
                                                          </div>
                                                        </div>
                                                        <div class="clear"></div>
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
                            </section> --}}
                            {{-- <section
                                         class="elementor-section elementor-top-section elementor-element elementor-element-0452329 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                                         data-id="0452329"
                                         data-element_type="section"
                                       >
                                         <div class="elementor-container elementor-column-gap-no">
                                           <div class="elementor-row">
                                             <div
                                               class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-07fff22"
                                               data-id="07fff22"
                                               data-element_type="column"
                                             >
                                               <div
                                                 class="elementor-column-wrap elementor-element-populated"
                                               >
                                                 <div class="elementor-widget-wrap">
                                                   <div
                                                     class="elementor-element elementor-element-24493e4 elementor-widget elementor-widget-ryancv-clients"
                                                     data-id="24493e4"
                                                     data-element_type="widget"
                                                     data-widget_type="ryancv-clients.default"
                                                   >
                                                     <div class="elementor-widget-container">
                                                       <div class="content clients">
                                                         <div class="title">
                                                           <span class="first-word"></span>
                                                           <span>Clients</span>
                                                         </div>
                                                         <div class="row client-items">
                                                           <div
                                                             class="col col-d-3 col-t-3 col-m-6 border-line-v"
                                                           >
                                                             <div class="client-item">
                                                               <div class="image">
                                                                 <a href="#">
                                                                   <noscript
                                                                     ><img
                                                                       src="https://ryancv.bslthemes.com/ve1/wp-content/uploads/2020/04/client_2-92x92.png"
                                                                       alt="Client 1"/></noscript
                                                                   ><img
                                                                     class="lazyload"
                                                                     src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E"
                                                                     data-src="https://ryancv.bslthemes.com/ve1/wp-content/uploads/2020/04/client_2-92x92.png"
                                                                     alt="Client 1"
                                                                   />
                                                                 </a>
                                                               </div>
                                                             </div>
                                                           </div>
                                                           <div
                                                             class="col col-d-3 col-t-3 col-m-6 border-line-v"
                                                           >
                                                             <div class="client-item">
                                                               <div class="image">
                                                                 <a href="#">
                                                                   <noscript
                                                                     ><img
                                                                       src="https://ryancv.bslthemes.com/ve1/wp-content/uploads/2020/04/client_1-92x92.png"
                                                                       alt="Client 2"/></noscript
                                                                   ><img
                                                                     class="lazyload"
                                                                     src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E"
                                                                     data-src="https://ryancv.bslthemes.com/ve1/wp-content/uploads/2020/04/client_1-92x92.png"
                                                                     alt="Client 2"
                                                                   />
                                                                 </a>
                                                               </div>
                                                             </div>
                                                           </div>
                                                           <div
                                                             class="col col-d-3 col-t-3 col-m-6 border-line-v"
                                                           >
                                                             <div class="client-item">
                                                               <div class="image">
                                                                 <a href="#">
                                                                   <noscript
                                                                     ><img
                                                                       src="https://ryancv.bslthemes.com/ve1/wp-content/uploads/2020/04/client_4-92x92.png"
                                                                       alt="Client 3"/></noscript
                                                                   ><img
                                                                     class="lazyload"
                                                                     src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E"
                                                                     data-src="https://ryancv.bslthemes.com/ve1/wp-content/uploads/2020/04/client_4-92x92.png"
                                                                     alt="Client 3"
                                                                   />
                                                                 </a>
                                                               </div>
                                                             </div>
                                                           </div>
                                                           <div
                                                             class="col col-d-3 col-t-3 col-m-6 border-line-v"
                                                           >
                                                             <div class="client-item">
                                                               <div class="image">
                                                                 <a href="#">
                                                                   <noscript
                                                                     ><img
                                                                       src="https://ryancv.bslthemes.com/ve1/wp-content/uploads/2020/04/client_1-92x92.png"
                                                                       alt="Client 4"/></noscript
                                                                   ><img
                                                                     class="lazyload"
                                                                     src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E"
                                                                     data-src="https://ryancv.bslthemes.com/ve1/wp-content/uploads/2020/04/client_1-92x92.png"
                                                                     alt="Client 4"
                                                                   />
                                                                 </a>
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
                              </section> --}}
                            {{-- <section
                                  class="elementor-section elementor-top-section elementor-element elementor-element-c6239ff elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                                  data-id="c6239ff"
                                  data-element_type="section"
                                >
                                  <div class="elementor-container elementor-column-gap-no">
                                    <div class="elementor-row">
                                      <div
                                        class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-73fe5b3"
                                        data-id="73fe5b3"
                                        data-element_type="column"
                                      >
                                        <div
                                          class="elementor-column-wrap elementor-element-populated"
                                        >
                                          <div class="elementor-widget-wrap">
                                            <div
                                              class="elementor-element elementor-element-ff09fc9 elementor-widget elementor-widget-ryancv-custom-text"
                                              data-id="ff09fc9"
                                              data-element_type="widget"
                                              data-widget_type="ryancv-custom-text.default"
                                            >
                                              <div class="elementor-widget-container">
                                                <div class="content custom-text">
                                                  <div class="title">
                                                    <span class="first-word"></span>
                                                    <span>Custom Text</span>
                                                  </div>
                                                  <div class="row border-line-v">
                                                    <div class="col col-m-12 col-t-12 col-d-12">
                                                      <div class="post-box single-post-text">
                                                        <div class="blog-content">
                                                          <div>
                                                            <p>
                                                              Lorem ipsum dolor sit amet,
                                                              consectetur adipiscing elit. Aliquam
                                                              sit amet purus urna. Proin dictum
                                                              fringilla enim, sit amet suscipit
                                                              dolor dictum in. Maecenas porttitor,
                                                              est et malesuada congue, ligula elit
                                                              fermentum massa, sit amet porta odio
                                                              est at velit. Sed nec turpis neque.
                                                              Fusce at mi felis, sed interdum
                                                              tortor.
                                                            </p>
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
