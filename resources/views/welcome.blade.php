<!DOCTYPE html>

<head>
    <!--
    Robotic Template
    http://www.templatemo.com/preview/vujade_430_robotic
    -->
    <title>VUJADE</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700,800'
        rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/templatemo_misc.css') }}">
    <link rel="stylesheet" href="{{ asset('css/templatemo_style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/alerts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/partners.css') }}">

    <!-- JavaScripts -->
    <script src="{{ asset('js/jquery-1.11.1.min.js') }}"></script> <!-- lightbox -->
    <script src="{{ asset('js/templatemo_custom.js') }}"></script> <!-- lightbox -->
    <script src="{{ asset('js/jquery.lightbox.js') }}"></script>
    <script src="{{ asset('js/bootstrap-collapse.js') }}"></script>
    <script src="{{ asset('js/partners.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

    <!-- JavaScripts -->
</head>

<body>
    {{-- <div id="vujade_home" class="vujade_headerimg"><img src="{{ asset('images/xo.jpg') }}" alt=" header"> --}}
    </div>
    {{-- <div class="sr-only"><img src="{{ asset('images/xo.jpg') }}" style="width: 500px;height: 400px" alt="header" ></div> --}}
    <div class="vujade_headerwrapper">
        <div class="vujade_menu">
            <nav class="navbar navbar-default" role="navigation">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1"><span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span> <span class="icon-bar"></span> <span
                                class="icon-bar"></span></button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div id="top-menu">
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li><a class="menu first" href="#vujade_home"><span>HOME</span></a></li>
                                <li><a class="menu" href="#vujade_service"><span>ABOUT US</span></a></li>
                                <li><a class="menu" href="#vujade_services"><span>SERVICES</span></a></li>
                                <li><a class="menu" href="#vujade_products"><span>PRODUCTS</span></a></li>
                                <li><a class="menu" href="#vujade_contact"><span>CONTACT</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav>
            {{-- <div class="vujade_socialmedia">
                <div class="vujade_social"><a href="#"><img src="images/facebook.png"
                            alt="templatemo facebook"></a></div>
                <div class="vujade_social"><a href="#"><img src="images/twitter.png" alt="templatemo twitter"></a>
                </div>
                <div class="vujade_social"><a href="#"><img src="images/googleplus.png"
                            alt="templatemo googleplus"></a></div>
            </div> --}}
        </div>
        <div class="clear"></div>
        <div class="container vujade_wrapper" id="vujade_home">
            <!-- home start -->
            <div class="row">
                <div class="col-sm-6">
                    {{-- <div class="vujade_title"><span>RO</span>BOTIC</div>
                    <div class="vujade_subtitle">New Urban City</div> --}}

                    <img src="{{ asset('images/vuja_x.png') }}" style="height: 20;width:20;" alt="" />
                    <div class="vujade_title">
                    </div>
                    {{-- <div class="vujade_subtitle">New Urban City</div> --}}

                </div>
                <div class="col-sm-6 vujade_home">
                    <div class="vujade_headertitle">{{ __('vision')['l'] }}</div>
                    <div class="clear"></div>
                    <div class="templatemmo_subheader">{{ __('vision')['l1'] }} {{ __('vision')['l2'] }}</div>
                    <div class="clear"></div>
                    <div class="vujade_hometext">
                        <p style="color: white">
                            {{ __('vision')['l3'] }}
                        </p>
                    </div>
                    <div class="clear"></div>
                    {{-- <div class="vujade_homebuton"><a href="#">LOREM IPSUMS</a></div> --}}
                </div>
            </div>
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6">
                    <div class="vujade_separater">
                        <span class="page">1</span>
                    </div>
                    {{-- <br><br> --}}
                </div>
            </div>
            <!-- home end -->
        </div>
        <!-- service start -->
        <div id="vujade_service" class="container">
            <div class="row">
                <div class="col-md-6 vujade_service">
                    <div class="gallery-item">
                        <img src="{{ asset('images/xo.jpg') }}" alt="gallery 1">
                        {{-- <div class="vujade_service_frame">
                            <img src="images/templatemo_serviceimg.png" alt="vujade_frame">
                        </div> --}}
                        {{-- <div class="overlay">
                            <div class="vujade_service_frame"><img src="images/vujade_serviceimg1.png"
                                    alt="vujade_frame"></div>
                            <a href="images/service/1.jpg" data-rel="lightbox" class="fa fa-search-plus"></a>
                        </div> --}}
                    </div>
                </div>
                <div class="col-md-6 vujade_service">
                    <div class="vujade_service_title"></div>
                    <div class="vujade_service_subtitle">{{ __('mission')['l'] }}</div>
                    <div class="vujade_service_text">
                        <p>{{ __('mission')['l3'] }}</p>
                        <div class="clear"></div>
                    </div>
                    {{-- <div class="vujade_morebutton"><a href="#">READ MORE</a></div> --}}
                </div>
            </div>
            <div class="row vujade_ordering">
                <div class="col-md-6 vujade_service one">
                    <div class="vujade_service_title"> {{ __('fablab')['l'] }}</div>
                    <div class="vujade_service_subtitle">{{ __('fablab')['l1'] }}</div>
                    <div class="vujade_service_text">
                        <p> {{ __('fablab')['l2'] }} </p>
                        <div class="clear"></div>
                    </div>
                    {{-- <div class="vujade_morebutton"><a href="#">READ MORE</a></div> --}}
                </div>
                <div class="col-md-6 vujade_service two">
                    <div class="gallery-item">
                        <img src="{{ asset('images/fab_academy.png') }}" {{-- style="width: 400px ; height: 400px" --}} alt="gallery 2">
                        {{-- <div class="vujade_service_frame"><img src="images/templatemo_serviceimg.png"
                                alt="vujade_frame"></div> --}}
                        {{-- <div class="overlay">
                            <div class="vujade_service_frame"><img src="images/templatemo_serviceimg1.png"
                                    alt="vujade_frame"></div>
                            <a href="images/service/2.jpg" data-rel="lightbox" class="fa fa-search-plus"></a>
                        </div> --}}
                    </div>
                </div>
            </div>
            {{-- <div class="row">
                <div class="col-md-6 vujade_service">
                    <div class="gallery-item">
                        <img src="images/service/3.jpg" alt="gallery 3">
                        <div class="vujade_service_frame"><img src="images/templatemo_serviceimg.png"
                                alt="vujade_frame"></div>
                        <div class="overlay">
                            <div class="vujade_service_frame"><img src="images/templatemo_serviceimg1.png"
                                    alt="vujade_frame"></div>
                            <a href="images/service/3.jpg" data-rel="lightbox" class="fa fa-search-plus"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 vujade_service">
                    <div class="vujade_service_title">VULPUTATE CURSUS A SIT</div>
                    <div class="vujade_service_subtitle">AMET NIBH VUL UTATE CURSUS DOLOR AMEIS</div>
                    <div class="vujade_service_text">
                        <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem
                            nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan
                            ipsum velit.</p>
                        <div class="clear"></div>
                    </div>
                    <div class="vujade_morebutton"><a href="#">READ MORE</a></div>
                </div>
            </div> --}}
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6">
                    <div class="vujade_separater">
                        <span class="page">2</span>
                    </div>
                </div>
            </div>
            <!-- service end -->
            <!-- promotion start -->
            <div id="vujade_services" class="row">
                <div class="col-md-12">
                    <div class="vujade_pricing_title">{{ __('OUR SERVICES') }}</div>
                    {{-- <div class="vujade_pricing_subtitle">AMET NIBH VUL UTATE DUIC URSUS VALUPATE URSUS ASIT</div> --}}
                </div>
                <div class="col-sm-3">
                    <div class="vujade_pricing_table">
                        <div class="vujade_pricingbg">
                            <img src="images/templatemo_pricing_bg.png" alt="templatemo price img">
                        </div>
                        <div class="vujade_pricing_box">
                            <span class="price_title">Product Design& <br> Modeling</span>
                            {{-- <span class="sign">$</span><span class="price">150</span> <span class="month">/ month
                            </span> --}}
                        </div>
                        <div class="vujade_pricing_list">
                            <ul>
                                <li>
                                    Design of initial product prototypes
                                </li>
                                <li>
                                    Three-dimensional modeling
                                </li>
                                <li>
                                    Modeling of products
                                    & electronic circuits
                                </li>
                                {{-- <li>Octa Core 2.4 GHz</li> --}}
                                {{-- <li>750 GB Storage</li> --}}
                                {{-- <li>64 GB Memory</li>
                                <li>30,000 GB Bandwidth</li>
                                <li>10 Email Addresses</li>
                                <li>24/7 Level 1 Support</li> --}}
                            </ul>
                        </div>
                        {{-- <a href="#" class="vujade_signup">SIGN UP NOW</a> --}}
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="vujade_pricing_table">
                        <div class="vujade_pricingbg">
                            <img src="images/templatemo_pricing_bg.png" alt="templatemo price img">
                        </div>
                        <div class="vujade_pricing_box">
                            <span class="price_title">Training <br>Services</span>
                            {{-- <span class="sign">$</span><span class="price">350 </span> <span class="month">/
                                month </span> --}}
                        </div>
                        <div class="vujade_pricing_list">
                            <ul>
                                <li>
                                    World Robot Olympiad (WRO)
                                </li>
                                <li>
                                    First Tech Challenge (FTC)
                                </li>
                                <li>
                                    FIRST LEGO League (FLL)
                                </li>
                            </ul>
                        </div>
                        {{-- <a href="#" class="vujade_signup">SIGN UP NOW</a> --}}
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="vujade_pricing_table">
                        <div class="vujade_pricingbg">
                            <img src="images/templatemo_pricing_bg.png" alt="templatemo price img">
                        </div>
                        <div class="vujade_pricing_box">
                            <span class="price_title">Educational <br> Services</span>
                            {{-- <span class="sign">$</span><span class="price">250 </span> <span class="month">/
                                month </span> --}}
                        </div>
                        <div class="vujade_pricing_list">
                            <ul>
                                <li>Professional Diploma in Digital
                                    Manufacturing
                                </li>
                                <li>
                                    from MIT-accreditedFab Academy
                                </li>
                            </ul>
                        </div>
                        {{-- <a href="#" class="vujade_signup">SIGN UP NOW</a> --}}
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="vujade_pricing_table">
                        <div class="vujade_pricingbg">
                            <img src="images/templatemo_pricing_bg.png" alt="templatemo price img">
                        </div>
                        <div class="vujade_pricing_box">
                            <span class="price_title">Lap<br> Devolopment</span>
                            {{-- <span class="sign">$</span><span class="price">350 </span> <span class="month">/
                                month </span> --}}
                        </div>
                        <div class="vujade_pricing_list">
                            <ul>
                                <li>
                                    Establishment and Equipping of
                                    Innovation and Modeling
                                    Laboratories
                                </li>
                            </ul>
                        </div>
                        {{-- <a href="#" class="vujade_signup">SIGN UP NOW</a> --}}
                    </div>
                </div>

            </div>




            <div class="container" id="vujade_products" >
                <h2>Our Products</h2>
                <section class="customer-logos slider">
                    <div class="slide"> <a href="https://turn-sa.net" target="_blank">
                            <img src="{{ asset('images/turn.png') }}">
                        </a>
                    </div>
                    <div class="slide"> <a href="https://cropsense.xyz" target="_blank">
                            <img src="{{ asset('images/cropsense-w.png') }}">
                        </a>
                    </div>

                    <div class="slide"> <a href="https://doorstepview.com" target="_blank">
                            <img src="{{ asset('images/doorstep-w.png') }}">
                        </a>
                    </div>
                    <div class="slide"> <a href="https://edu.vujadesa.com" target="_blank">
                            <img src="{{ asset('images/edu-w2.png') }}">
                        </a>
                    </div>
                    {{--
                    <div class="slide"><img src="https://image.freepik.com/free-vector/3d-box-logo_1103-876.jpg">
                    </div>
                    <div class="slide"><img src="https://image.freepik.com/free-vector/blue-tech-logo_1103-822.jpg">
                    </div>
                    <div class="slide"><img
                            src="https://image.freepik.com/free-vector/colors-curl-logo-template_23-2147536125.jpg">
                    </div> --}}
                </section>
            </div>



            <br>
            <!-- promotion end -->
            <!-- work start -->
            {{-- <div id="vujade_about" class="row">
                <div class="col-md-4 vujade_work"><img src="images/templatemo_workicon.png" alt="templatemo work">
                </div>
                <div class="col-md-8">
                    <div class="vujade_worktitle">ABOUT US</div>
                    <div class="vujade_sub_worktitle">SED NON MAURIS VITAE ERAT</div>
                    <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum consequat
                        ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate amet mauris. Morbi
                        accumsan ipsum velit.</p>
                    <p>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam
                        nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu
                        in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos
                        himenaeos. Mauris in erat justo.</p>
                    <ul>
                        <li>Morbi accumsan ipsum velit</li>
                        <li>Nam nec tellus a odio tincidunta</li>
                        <li>Sed non mauris vitae erat</li>
                        <li>Class aptent taciti sociosqu ad</li>
                    </ul>
                </div>
            </div> --}}
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6">
                    <div class="vujade_separater">
                        <span class="page">3</span>
                    </div>
                </div>
            </div>
            <!-- work end -->
            <!-- contact start -->

            <div id="vujade_contact" class="row vujade_contact">

                <div class="col-md-12">
                    <div class="vujade_contacttitle">{{ __('Contact Us') }}</div>
                    <div class="vujade_sub_contacttitle"></div>
                    {{-- <div class="vujade_sub_contacttitle">CONSEQUAT AUCTOR DIEI SED ODIO</div> --}}
                </div>
                @if (Session::has('message'))
                    <div class="col-sm-12" id="success_alert">
                        <div
                            class="alert  alert-simple alert-success alert-dismissible text-left font__family-montserrat
                    font__size-16 font__weight-light brk-library-rendered rendered show">
                            <button onclick="hide()" type="button" class="close font__size-18"
                                data-dismiss="alert">
                                <span aria-hidden="true"><a>
                                        <i class="fa fa-times greencross"></i>
                                    </a></span>
                                {{-- <span class="sr-only">Close</span> --}}
                            </button>
                            <i class="start-icon far fa-check-circle faa-tada animated"></i>
                            <strong class="font__weight-semibold">{{ __('Successful') }} &nbsp;</strong>
                            {{ __('We got your message ,, we will contact you very soon') }}
                        </div>
                    </div>
                @endif
                <script>
                    function hide() {
                        document.getElementById('success_alert').style.display = 'none';
                    }
                </script>
                <div class="col-md-4 vujade_contactform">
                    <form action="{{ route('contact.store') }}" method="post">
                        @csrf
                        <input type="text" required name="name" id="name" class="name"
                            placeholder="NAME">
                        <input type="email" required name="email" id="email" class="email"
                            placeholder="EMAIL">
                        <input type="text" required name="phone" id="phone" class="subject"
                            placeholder="PHONE">
                        <textarea required name="message" class="message" placeholder="MESSAGE ... " id="message"></textarea>
                        <div class="clear"></div>
                        <button type="submit" class="btn btn-primary"
                            style="color: white">{{ __('Send') }}</button>
                    </form>
                </div>
                <div class="col-md-8">
                    <div class="vujade_contactmap card">
                        {{-- <div id="vujade_map"></div> --}}
                        {{-- <div class="vujade_mapcorner card-head">
                            <img src="images/vujade_mapcorner.png" alt="Google Maps">
                        </div> --}}
                        <ul class="" style="background-color: transparent">
                            <h4>
                                <li class="">Riyadh - Thakaa Center</li>
                            </h4>
                            <h4>
                                <li class=""><a href="email:info@vujadesa.com"> info@vujadesa.com</a></li>
                            </h4>
                            <h4>
                                <li class="">+966 544615194 </li>
                            </h4>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- contact end -->
        </div>
        <div class="vujade_footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script> <a href="#">VUJA DE</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
