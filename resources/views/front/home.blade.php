<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PortFolio</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        < link rel = "stylesheet"
        href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity = "sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin = "anonymous" / >

    </script>
    <link rel="stylesheet" href="{{ asset('project.css') }}">
</head>

<body>
    <header class="header_area" style="position: fixed;background: darkturquoise;">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container box_1620">

                    <a class="navbar-brand logo_h" href="index.html"><img src="img/logo.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item active"><a class="nav-link text-white" href="#home">Home</a></li>
                            <li class="nav-item"><a class="nav-link text-white" href="#">About</a></li>
                            <li class="nav-item"><a class="nav-link text-white" href="#service">Services</a> </li>
                            <li class="nav-item"><a class="nav-link text-white" href="#gallery">Portfolio</a></li>
                            <li class="nav-item"><a class="nav-link text-white" href="#education">Education</a> </li>
                            <li class="nav-item"><a class="nav-link text-white" href="#contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <section class="home_banner_area" id='home'>
        <div class="container box_1620">
            <div class="banner_inner d-flex align-items-center">
                <div class="banner_content">
                    <div class="media">
                        <div class="d-flex" style="width: 70%">
                            @php
                                use App\Models\image;
                                $image = image::where('user_id', config('app.owner'))
                                    ->get()
                                    ->first();
                                
                            @endphp
                            <img class="w-100 rounded" style="height: 600px;"
                                src="{{ asset('image/user/') }}/{{ config('app.owner') }}/{{ $image['image'] }}"
                                alt="">
                        </div>
                        <div class="media-body">
                            <div class="personal_text">
                                <h6>Hello Everybody, i am</h6>
                                @php
                                    use App\Models\Bio;
                                    use App\Models\Service;
                                    $bio = Bio::where('user_id', config('app.owner'))
                                        ->get()
                                        ->first();
                                    $services = Service::where('user_id', config('app.owner'))->get();
                                    
                                @endphp
                                <h3></h3>
                                <h4> {{ config('app.owner_name') }}</h4>
                                <p>{{ $bio['bio'] }}</p>
                                <ul class="list basic_info">
                                    <li class="overflow-hidden parent-span"> <span class="child1"> Age : </span> <span
                                            class="child2">{{ $bio['age'] }}</span> </li>
                                    <div class="clearfix"></div>
                                    <hr>
                                    <li class="overflow-hidden parent-span"> <span class="child1">Phone : </span> <span
                                            class="child2">
                                            {{ $bio['phone'] }}</span></li>
                                    <div class="clearfix"></div>
                                    <hr>
                                    <li class="overflow-hidden parent-span"> <span class="child1">Email : </span> <span
                                            class="child2">{{ $bio['email'] }}</span> </li>
                                    <div class="clearfix"></div>
                                    <hr>
                                    <li class="overflow-hidden parent-span"> <span class="child1">Address : </span>
                                        <span class="child2">

                                            {{ $bio['address'] }}</span>
                                    </li>
                                    <div class="clearfix"></div>
                                </ul>
                                <ul class="list personal_social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mytabs_area p_120" id='education'>
        <div class="container">
            @php
                use App\Models\Experience;
                use App\Models\Education;
                use App\Models\Projects;
                $experiences = Experience::where('user_id', config('app.owner'))->get();
                $educations = Education::where('user_id', config('app.owner'))->get();
                $projects = Projects::where('user_id', config('app.owner'))->get();
            @endphp
            <div class="tabs_inner">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#experience" role="tab"
                            aria-controls="experience" aria-selected="true">My Experiences</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                            aria-controls="profile" aria-selected="false">My Education</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="experience" role="tabpanel"
                        aria-labelledby="experience-tab">
                        <ul class="list">
                            @foreach ($experiences as $exerience)
                                <li>
                                    <span></span>
                                    <div class="media" style="width: 150%">
                                        <div class="d-flex">
                                            <p>{{ $exerience['from'] }} - {{ $exerience['to'] }}</p>
                                        </div>
                                        <div class="media-body">
                                            <h4>{{ $exerience['company'] }}</h4>
                                            <p style="text-transform: capitalize; font-family: auto; color: black;">
                                                {{ $exerience['jobTitle'] }} </p>
                                            <p>{{ $exerience['description'] }}</p>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <ul class="list">
                            @foreach ($educations as $education)
                                <li>
                                    <span></span>
                                    <div class="media" style="width: 150%">
                                        <div class="d-flex">
                                            <p>{{ $education['from'] }} - {{ $education['to'] }}</p>
                                        </div>
                                        <div class="media-body">
                                            <h4>{{ $education['place'] }}</h4>
                                            <p style="text-transform: capitalize; font-family: auto; color: black;">
                                                {{ $education['title'] }} </p>
                                            <p>{{ $education['description'] }}</p>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="feature_area p_120" id='service'>
        <div class="container">
            <div class="main_title">
                <h2>offerings to my clients</h2>
            </div>
            <div class="feature_inner row ">
                @foreach ($services as $service)
                    <div class="col-lg-4 col-md-6">
                        <div class="feature_item">
                            <i class="flaticon-city"></i>
                            <h4>{{ $service['service'] }}</h4>
                            <p>{{ $service['value'] }}</p>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <section class="home_gallery_area p_120" id='gallery'>
        <div class="container">
            <div class="main_title">
                <h2>Our Latest Featured Projects</h2>
                <p>Who are in extremely love with eco friendly system.</p>
            </div>
            <div class="isotope_fillter">
                <ul class="gallery_filter list">
                    {{-- <li class="active" data-filter="*"><a href="#">All</a></li> --}}
                    {{-- <li data-filter=".brand"><a href="#">Vector</a></li>
                    <li data-filter=".manipul"><a href="#">Raster</a></li>
                    <li data-filter=".creative"><a href="#">UI/UX</a></li>
                    <li data-filter=".design"><a href="#">Printing</a></li> --}}
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="gallery_f_inner row imageGallery1" style="position: relative; height: 400px;">
                @foreach ($projects as $key => $project)
                    <div class="col-lg-4 col-md-4 col-sm-6 brand manipul design print">
                        @php
                            $images = explode(',', $project['images']);
                            array_pop($images);
                        @endphp
                        <div class="h_gallery_item">
                            <div class="g_img_item" data-toggle="modal"
                                data-target="#exampleModalImage{{ $project['id'] }}">
                                <img class="img-fluid " style="height: 300px"
                                    src="works/project/user/{{ config('app.owner') }}/{{ $project['id'] }}/{{ $images[0] }}"
                                    alt="">
                            </div>
                            <div class="g_item_text text-center">
                                <h4 class="text-capitalize overflow-hidden parent-span"><span class="child1 h6 pt-1">
                                        project</span> <span class="child2 pt-1">{{ $project['name'] }}</span></h4>
                                <h4 class="text-capitalize overflow-hidden parent-span"><span class="child1 h6 pt-1">
                                        category</span> <span class="child2 pt-1">{{ $project['category'] }}</span>
                                </h4>
                                <hr>
                                <button data-toggle="modal" data-target="#exampleModalMore{{ $project['id'] }}"
                                    class=" btn btn-info text-capitalize overflow-hidden border-top p-2"> More (video
                                    ,content)</button>
                                <hr>
                            </div>
                        </div>
                    </div>
                    <div class="modals">

                        <div class="modal fade" id="exampleModalImage{{ $project['id'] }}" tabindex="-1"
                            role="dialog" aria-labelledby="exampleModalLabelImage{{ $project['id'] }}"
                            aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">{{ $project['name'] }}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        @foreach ($images as $key => $image)
                                            @if (!$key == 0)
                                                <div class="col-md-12">
                                                    <img class="rounded w-100" style=""
                                                        src="{{ asset('works/project/user/') }}/{{ config('app.owner') . '/' . $project['id'] . '/' . $image }}">
                                                    <hr>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="exampleModalMore{{ $project['id'] }}" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabelMore{{ $project['id'] }}" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">{{ $project['name'] }}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="col-md-12 text-left text-capitalize">
                                            <div class="name  block parent-span overflow-hidden">
                                                <span class="child1">Project Name
                                                    :</span>
                                                <span class="child2"><strong>{{ $project['name'] }}</strong></span>
                                            </div>
                                            <hr>
                                            <div class="category  block parent-span overflow-hidden">
                                                <span class="child1">Category :</span>
                                                <span
                                                    class="child2"><strong>{{ $project['category'] }}</strong></span>
                                            </div>
                                            <hr>
                                            <div class="client   block parent-span overflow-hidden">
                                                <span class="child1"> Client :</span>
                                                <span class="child2">
                                                    <strong>{{ $project['client'] }}</strong></span>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="col-md-12">
                                            {{ $project['description'] }}
                                        </div>
                                        <hr>
                                        <div class="col-md-12">
                                            <div class="h-100 w-100">

                                                {!! $project['link'] !!}
                                            </div>
                                            <hr>
                                            <div class="col-md-12">
                                                <div class="h-100 w-100" style="text-align: center; background: black;border-radius: 8px;padding: 30px;">
                                                    <a href="{{ $project['live'] }}" target="_black">Your Can See
                                                        Project</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="more_btn">
                {{-- <a class="main_btn" href="#">Load More Items</a> --}}
            </div>
        </div>
    </section>
    <section class="contact_area  pb-4" id='contact'>
        <div class="container">
            <div class="col-md-12 p_120">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55251.37709964616!2d31.223444832512136!3d30.05948381032293!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583fa60b21beeb%3A0x79dfb296e8423bba!2sCairo%2C%20Cairo%20Governorate!5e0!3m2!1sen!2seg!4v1613834826968!5m2!1sen!2seg"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>

            <div class="row">
                <div class="col-lg-3">
                    <div class="contact_info">
                        <div class="info_item">
                            <i class="fas fa-map-marker"></i>
                            <h6>{{ $bio['address'] }}</h6>

                        </div>
                        <hr>
                        <div class="info_item">
                            <i class="fas fa-phone"></i>
                            <h6><a href="#">{{ $bio['phone'] }}</a></h6>
                            <p>Sat to Thur 9am to 8 pm</p>
                        </div>
                        <hr>
                        <div class="info_item">
                            <i class="fas fa-envelope"></i>
                            <h6><a href="#">{{ $bio['email'] }}</a></h6>
                            <p>Send us your query anytime!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <form class="row contact_form" action="{{ route('contact.insert') }}" method="post"
                        id="contactForm" novalidate="novalidate">
                        @csrf

                        <div class="col-md-12" id='error'>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="hidden" name="to" value="{{ config('app.owner') }}">
                                <input type="text" class="form-control ui-autocomplete-input" id="name" name="fullName"
                                    placeholder="Enter your name" autocomplete="off" required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control ui-autocomplete-input" id="email" name="email"
                                    placeholder="Enter email address you should write email" autocomplete="off" required>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" name="message" id="message" rows="1"
                                    placeholder="Enter Message" required></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 text-right">
                            <button type="submit" value="submit" class="btn submit_btn">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer_area p_120">
        <div class="container">
            <div class="row footer_inner">
                <div class="col-lg-5 col-sm-6">
                    <aside class="f_widget ab_widget">
                        <div class="f_title">
                            <h3>About Me</h3>
                        </div>
                        <p>Do you want to be even more successful? Learn to love learning and growth. The more effort
                            you put into improving your skills,</p>
                        <p>
                            Copyright ©<script type="text/javascript" async=""
                                src="https://www.google-analytics.com/analytics.js"></script>
                            <script>
                                document.write(new Date().getFullYear());

                            </script>2021 All rights reserved | This template is made with  by <a href="https://abanoub" target="_blank">Abanoub Talaat</a>
                        </p>
                    </aside>
                </div>
                <div class="col-lg-5 col-sm-6">
                    <aside class="f_widget news_widget">
                        <div class="f_title">
                            <h3>Newsletter</h3>
                        </div>
                        <p>Stay updated with our latest trends</p>
                        <div id="mc_embed_signup">
                            <form target="_blank"
                                action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                method="get" class="subscribe_form relative" novalidate="true">
                                <div class="input-group d-flex flex-row">
                                    <input name="EMAIL" placeholder="Enter email address"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '"
                                        required="" type="email" autocomplete="on" class="ui-autocomplete-input">
                                    <button class="btn sub-btn"><span class="lnr lnr-arrow-right"></span></button>
                                </div>
                                <div class="mt-10 info"></div>
                            </form>
                        </div>
                    </aside>
                </div>
                <div class="col-lg-2">
                    <aside class="f_widget social_widget">
                        <div class="f_title">
                            <h3>Follow Me</h3>
                        </div>
                        <p>Let us be social</p>
                        <ul class="list">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </aside>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
