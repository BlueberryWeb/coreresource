<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <meta name="despcription" content="A company who has given human resource solutions for over 10 years."/>
    <meta name="keywords" content="Human resources, Hr solutions, Buisness solutions, Human talent, Human resource solutions, Worldwide solutions, Global business solutions"/>
    <meta name="author" content="blueberry.mx"/>
    <meta name="robots" content="index,follow"/>
    <link rel="preload" href="{{ asset('front/css/style.css') }}" as="style"/>
    <link rel="preload" href="{{ asset('front/css/animate.css') }}" as="style"/>
    <link rel="preload" href="{{ asset('front/js/script.js') }}" as="script"/>
    <link rel="preload" href="{{ asset('front/js/lib/easy-waypoint-animate.js') }}" as="script"/>
    <link rel="preload" href="{{ asset('front/js/lib/jquery.waypoints.js') }}" as="script"/>
    <link rel="preload" href="{{ asset('front/js/lib/jquery.waypoints.min.js') }}" as="script"/>
    <link rel="preload" href="{{ asset('front/vid/bg-footer-vertical.mp4') }}" as="video"/>
    <link rel="preload" href="{{ asset('front/vid/bg-hire-vertical.mp4') }}" as="video"/>
    <link rel="preload" href="{{ asset('front/vid/bg-hire.mp4') }}" as="video"/>
    <link rel="preload" href="{{ asset('front/css/fonts/GraphikRegular.otf') }}" as="font" crossorigin/>
    <link rel="preload" href="{{ asset('front/css/fonts/GraphikRegularItalic.otf') }}" as="font" crossorigin/>
    <link rel="preload" href="{{ asset('front/css/fonts/Montserrat-Bold.ttf') }}" as="font" crossorigin/>
    <link rel="preload" href="{{ asset('front/css/fonts/Montserrat-ExtraBold.ttf') }}" as="font" crossorigin/>
    <link rel="preload" href="{{ asset('front/css/fonts/Montserrat-Light.ttf') }}" as="font" crossorigin/>
    <link rel="preload" href="{{ asset('front/css/fonts/Montserrat-Medium.ttf') }}" as="font" crossorigin/>
    <link rel="preload" href="{{ asset('front/css/fonts/Montserrat-SemiBold.ttf') }}" as="font" crossorigin/> 
    <script src="https://kit.fontawesome.com/4514d9060c.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}"/>
    <link rel="stylesheet" href="{{ asset('front/css/animate.css') }}">
    <link rel="shortcut icon" href="{{ asset('front/img/favicon.png') }}" />
    <!-- CARROUSEL -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css"/>
    <link rel='stylesheet' type="text/css" href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'/>
    <title>CORE RESOURCES</title>
</head>
<body>
    <header class="bg-index" id="index">
        <div class="d-none d-sm-none d-md-block">
            <div class="container py-3">
                <div class="menu-web">
                    <div class="me-3">
                        <a href="{{ url('/') }}" class="a_none_style"><img src="{{ asset('front/img/logo-bco.gif') }}" alt="CORE" class="img-fluid logo-menu-web"/></a>
                    </div>
                    <div class="ms-3 pt-3">
                        <a href="#index" class="a_none_style text-white">
                            <h6 class="gRegular">Index</h6>
                        </a>
                    </div>
                    <div class="ms-5 pt-3">
                        <a href="#who-we" class="a_none_style text-white">
                            <h6 class="gRegular">Who we are</h6>
                        </a>
                    </div>
                    <div class="ms-5 pt-3">
                        <a href="#services" class="a_none_style text-white">
                            <h6 class="gRegular">Services</h6>
                        </a>
                    </div>
                    <div class="ms-5 pt-3">
                        <a href="#benefits" class="a_none_style text-white">
                            <h6 class="gRegular">Benefits</h6>
                        </a>
                    </div>
                    <div class="ms-5 pt-3">
                        <a href="#how-does" class="a_none_style text-white">
                            <h6 class="gRegular">How does it work?</h6>
                        </a>
                    </div>
                    <div class="ms-5 pt-3">
                        <a href="#contact" class="a_none_style text-white">
                            <h6 class="gRegular ">Contact</h6>
                        </a>
                    </div>
                    <div class="ms-5"></div>
                    <div class="ms-5"></div>
                    <div class="ms-5"></div>
                    <div class="ms-5"></div>
                    <div class="ms-5"></div>
                    <div class="ms-5">
                        <button class="btn btn-primary btn-contact-menu">
                            <a href="#contact" class="a_none_style text-white">
                                <h6 class="gRegular txt-btn-contact">Contact Us</h6>
                            </a>
                        </button>
                    </div>
                </div>
            </div>
            <!-- MENU RESOLUCIÓN 1200PX  -->
            <div class="container-fluid pt-5">
                <div class="row">
                    <div class="menu-tablet">
                        <div class="me-2">
                            <a class="navbar-brand" href="{{ url ('/')}}"> <img src="{{ asset('front/img/logo-bco.gif') }}" alt="PEAR" class="img-fluid logo-menu-web"/></a>
                        </div>
                        <div class="margen-left"></div>
                        <div class="ms-5">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon pt-1">
                                    <i class="fa-solid fa-bars"></i>
                                </span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ms-auto">
                                  <li class="nav-item ">
                                    <a class="nav-link active text-white" aria-current="page" href="#index"><h6 class="gRegular">Index</h6></a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link text-white" href="#who-we"> <h6 class="gRegular">Who we are</h6></a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link text-white"  href="#services"><h6 class="gRegular">Services</h6></a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link text-white"  href="#benefits"><h6 class="gRegular">Benefits</h6></a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link text-white" href="#how-does"> <h6 class="gRegular">How does it work?</h6></a>
                                  </li>
                                  <li class="nav-item">
                                    <a href="#contact" class="nav-link text-white"><h6 class="gRegular ">Contact</h6></a>
                                  </li>
                                </ul>
                              </div>
                        </div>
                        <div class="margen-left"></div>
                        <div class="ms-2">
                            <button class="btn btn-primary btn-contact-menu">
                                <a href="#contact" class="a_none_style text-white">
                                    <h6 class="gRegular txt-btn-contact">Contact Us</h6>
                                </a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- MENU PHONE -->
        <div class="d-block d-sm-block d-md-none">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                  <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('front/img/logo-bco.gif') }}" alt="CORE" class="img-fluid logo-menu-web"/></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa-solid fa-bars"></i>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="#index"><h6 class="gRegular">Index</h6></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-white" href="#who-we"><h6 class="gRegular">Who we are</h6></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-white" href="#services"><h6 class="gRegular">Services</h6></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-white" href="#benefits"><h6 class="gRegular">Benefits</h6></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-white" href="#how-does"><h6 class="gRegular">How does it work?</h6></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-white" href="#contact"><h6 class="gRegular">Contact</h6></a>
                      </li>
                      <li class="nav-item">
                        <button class="btn btn-primary btn-contact-menu">
                            <a href="#contact" class="a_none_style text-white">
                                <h6 class="pt-1 gRegular">Contact Us</h6>
                            </a>
                        </button>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
        </div>
        
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-10">
                    <div class="text-index">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-5">
                                <div class="tit-global">
                                    <h2 class="mMedium h4">BUILD YOUR DREAMS</h2>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6"></div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-2 lin-loader">
                                <div class="d-none d-sm-none d-md-block">
                                    <div class="div-loader loader"></div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-7">
                                <div class="tit-dreams">
                                    <h1 class="mBold display-4">GLOBAL TEAM!</h1>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-3"></div>
                        </div>
                        <div class="row ">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-7"></div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                                <div class="">
                                    <h5 class="tit-hard mLight h2">
                                        We do the hard work. 
                                    </h5>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-8"></div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                                <div class="about-us">
                                    <a href="#who-we" class="a_none_style text-white">
                                        <div class="plus-readmore">
                                            <div class="read-more">
                                                <h3 class="mMedium">WHO WE ARE</h3>
                                            </div>
                                            <div class="more-plus">
                                                <i class="fa-solid fa-plus ms-2 mt-1"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
            </div>
        </div>
        <div class="d-none d-sm-none d-md-block">
            <div class="header-lines wp-animated-group">
                <div class="header-line_1 wp-animated" data-animation="fadeInLeft"  data-animation-duration="10s"></div>
                <div class="header-line_2 wp-animated" data-animation="fadeInLeft" data-animation-delay="0.4s"  data-animation-duration="10s"></div>
                <div class="header-line_3 wp-animated" data-animation="fadeInLeft" data-animation-delay="0.8s"  data-animation-duration="10s"></div>
                <div class="header-line_4 wp-animated" data-animation="fadeInLeft" data-animation-delay="1.2s"  data-animation-duration="10s"></div>
                <div class="header-line_5 wp-animated" data-animation="fadeInLeft" data-animation-delay="1.6s"  data-animation-duration="10s"></div>
                <div class="header-line_6 wp-animated" data-animation="fadeInLeft" data-animation-delay="2s"  data-animation-duration="10s"></div>
                <div class="header-line_7 wp-animated" data-animation="fadeInLeft" data-animation-delay="2.4s"  data-animation-duration="10s"></div>
            </div>
            <div class="svg_1">
                <img src="{{ asset('front/img/svg-animado.gif') }}" alt="CORE RESOURCES" class="img-fluid svg-animado"/>
            </div>
            <div class="svg_2">
                <svg xmlns="http://www.w3.org/2000/svg" width="150" height="126.755" viewBox="0 0 195.044 126.755">
                    <g id="Grupo_4946" data-name="Grupo 4946" transform="translate(-423.793 162.207)" opacity="0.701">
                      <line id="Línea_149" data-name="Línea 149" y1="24.204" x2="24.204" transform="translate(424.5 -161.5)" fill="none" stroke="#fff" stroke-width="2"/>
                      <line id="Línea_150" data-name="Línea 150" y1="24.204" x2="24.204" transform="translate(448.704 -161.5)" fill="none" stroke="#fff" stroke-width="2"/>
                      <line id="Línea_151" data-name="Línea 151" y1="24.204" x2="24.204" transform="translate(472.907 -161.5)" fill="none" stroke="#fff" stroke-width="2"/>
                      <line id="Línea_152" data-name="Línea 152" y1="24.204" x2="24.204" transform="translate(497.111 -161.5)" fill="none" stroke="#fff" stroke-width="2"/>
                      <line id="Línea_153" data-name="Línea 153" y1="24.204" x2="24.204" transform="translate(521.315 -161.5)" fill="none" stroke="#fff" stroke-width="2"/>
                      <line id="Línea_154" data-name="Línea 154" y1="24.204" x2="24.204" transform="translate(545.519 -161.5)" fill="none" stroke="#fff" stroke-width="2"/>
                      <line id="Línea_155" data-name="Línea 155" y1="24.204" x2="24.204" transform="translate(569.722 -161.5)" fill="none" stroke="#fff" stroke-width="2"/>
                      <line id="Línea_156" data-name="Línea 156" y1="24.204" x2="24.204" transform="translate(593.926 -161.5)" fill="none" stroke="#fff" stroke-width="2"/>
                      <line id="Línea_157" data-name="Línea 157" y1="24.204" x2="24.204" transform="translate(424.5 -127.788)" fill="none" stroke="#fff" stroke-width="2"/>
                      <line id="Línea_158" data-name="Línea 158" y1="24.204" x2="24.204" transform="translate(448.704 -127.788)" fill="none" stroke="#fff" stroke-width="2"/>
                      <line id="Línea_159" data-name="Línea 159" y1="24.204" x2="24.204" transform="translate(472.907 -127.788)" fill="none" stroke="#fff" stroke-width="2"/>
                      <line id="Línea_160" data-name="Línea 160" y1="24.204" x2="24.204" transform="translate(497.111 -127.788)" fill="none" stroke="#fff" stroke-width="2"/>
                      <line id="Línea_161" data-name="Línea 161" y1="24.204" x2="24.204" transform="translate(521.315 -127.788)" fill="none" stroke="#fff" stroke-width="2"/>
                      <line id="Línea_162" data-name="Línea 162" y1="24.204" x2="24.204" transform="translate(545.519 -127.788)" fill="none" stroke="#fff" stroke-width="2"/>
                      <line id="Línea_163" data-name="Línea 163" y1="24.204" x2="24.204" transform="translate(569.722 -127.788)" fill="none" stroke="#fff" stroke-width="2"/>
                      <line id="Línea_164" data-name="Línea 164" y1="24.204" x2="24.204" transform="translate(593.926 -127.788)" fill="none" stroke="#fff" stroke-width="2"/>
                      <line id="Línea_165" data-name="Línea 165" y1="24.204" x2="24.204" transform="translate(424.5 -94.075)" fill="none" stroke="#fff" stroke-width="2"/>
                      <line id="Línea_166" data-name="Línea 166" y1="24.204" x2="24.204" transform="translate(448.704 -94.075)" fill="none" stroke="#fff" stroke-width="2"/>
                      <line id="Línea_167" data-name="Línea 167" y1="24.204" x2="24.204" transform="translate(472.907 -94.075)" fill="none" stroke="#fff" stroke-width="2"/>
                      <line id="Línea_168" data-name="Línea 168" y1="24.204" x2="24.204" transform="translate(497.111 -94.075)" fill="none" stroke="#fff" stroke-width="2"/>
                      <line id="Línea_169" data-name="Línea 169" y1="24.204" x2="24.204" transform="translate(521.315 -94.075)" fill="none" stroke="#fff" stroke-width="2"/>
                      <line id="Línea_170" data-name="Línea 170" y1="24.204" x2="24.204" transform="translate(545.519 -94.075)" fill="none" stroke="#fff" stroke-width="2"/>
                      <line id="Línea_171" data-name="Línea 171" y1="24.204" x2="24.204" transform="translate(569.722 -94.075)" fill="none" stroke="#fff" stroke-width="2"/>
                      <line id="Línea_172" data-name="Línea 172" y1="24.204" x2="24.204" transform="translate(593.926 -94.075)" fill="none" stroke="#fff" stroke-width="2"/>
                      <line id="Línea_173" data-name="Línea 173" y1="24.204" x2="24.204" transform="translate(424.5 -60.363)" fill="none" stroke="#fff" stroke-width="2"/>
                      <line id="Línea_174" data-name="Línea 174" y1="24.204" x2="24.204" transform="translate(448.704 -60.363)" fill="none" stroke="#fff" stroke-width="2"/>
                      <line id="Línea_175" data-name="Línea 175" y1="24.204" x2="24.204" transform="translate(472.907 -60.363)" fill="none" stroke="#fff" stroke-width="2"/>
                      <line id="Línea_176" data-name="Línea 176" y1="24.204" x2="24.204" transform="translate(497.111 -60.363)" fill="none" stroke="#fff" stroke-width="2"/>
                      <line id="Línea_177" data-name="Línea 177" y1="24.204" x2="24.204" transform="translate(521.315 -60.363)" fill="none" stroke="#fff" stroke-width="2"/>
                      <line id="Línea_178" data-name="Línea 178" y1="24.204" x2="24.204" transform="translate(545.519 -60.363)" fill="none" stroke="#fff" stroke-width="2"/>
                      <line id="Línea_179" data-name="Línea 179" y1="24.204" x2="24.204" transform="translate(569.722 -60.363)" fill="none" stroke="#fff" stroke-width="2"/>
                      <line id="Línea_180" data-name="Línea 180" y1="24.204" x2="24.204" transform="translate(593.926 -60.363)" fill="none" stroke="#fff" stroke-width="2"/>
                    </g>
                  </svg>
            </div>
        </div>
        
        
    </header>
    <!-- WHO WE ARE -->
    <div class="container py-5" id="who-we">
        <div class="row pt-5">
            <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-11">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-5 mb-5">
                        <div class="txt-who">
                            <h1 class="mExtraBold display-3 mb-0 txt-negro">Who</h1>
                            <h1 class="mExtraBold display-3 txt-azul mt-0 mb-3">we are <img src="{{ asset('front/img/complemento-tit.webp') }}" alt="CORE" class="img-fluid compl-tit"/></h1>
                            <h5 class="mMedium txt-separacion mb-3 ">A HUMAN RESOURCE </h5>
                            <h5 class="mMedium txt-separacion mb-4">SOLUTION YOU CAN TRUST.</h5>
                            <p class="gRegular mb-2">Your trusted partner for HR solutions, </p>
                            <p class="gRegular">with over 10 years of experience worldwide.</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-7">
                        <div class="text-center">
                            <img  src="{{ asset('front/img/who-we.webp') }}" alt="WHO WE ARE? " class="img-fluid img-who"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- WHAT DO WE DO -->
    <div class="container-fluid bg-gris mt-5 pb-5 " id="services">
        <div class="row">
            <div class="text-end">
                <svg xmlns="http://www.w3.org/2000/svg" width="251.326" height="163.187" viewBox="0 0 251.326 163.187">
                    <g id="Grupo_4961" data-name="Grupo 4961" transform="translate(-423.793 162.207)" opacity="0.701">
                      <line id="Línea_149" data-name="Línea 149" y1="25.239" x2="25.239" transform="translate(424.5 -161.5)" fill="none" stroke="#4d4d4d" stroke-width="2"/>
                      <line id="Línea_150" data-name="Línea 150" y1="25.239" x2="25.239" transform="translate(455.739 -161.5)" fill="none" stroke="#4d4d4d" stroke-width="2"/>
                      <line id="Línea_151" data-name="Línea 151" y1="25.239" x2="25.239" transform="translate(486.978 -161.5)" fill="none" stroke="#4d4d4d" stroke-width="2"/>
                      <line id="Línea_152" data-name="Línea 152" y1="25.239" x2="25.239" transform="translate(518.217 -161.5)" fill="none" stroke="#4d4d4d" stroke-width="2"/>
                      <line id="Línea_153" data-name="Línea 153" y1="25.239" x2="25.239" transform="translate(549.456 -161.5)" fill="none" stroke="#4d4d4d" stroke-width="2"/>
                      <line id="Línea_154" data-name="Línea 154" y1="25.239" x2="25.239" transform="translate(580.695 -161.5)" fill="none" stroke="#4d4d4d" stroke-width="2"/>
                      <line id="Línea_155" data-name="Línea 155" y1="25.239" x2="25.239" transform="translate(611.934 -161.5)" fill="none" stroke="#4d4d4d" stroke-width="2"/>
                      <line id="Línea_156" data-name="Línea 156" y1="25.239" x2="25.239" transform="translate(643.172 -161.5)" fill="none" stroke="#4d4d4d" stroke-width="2"/>
                      <line id="Línea_157" data-name="Línea 157" y1="25.239" x2="25.239" transform="translate(424.5 -117.989)" fill="none" stroke="#4d4d4d" stroke-width="2"/>
                      <line id="Línea_158" data-name="Línea 158" y1="25.239" x2="25.239" transform="translate(455.739 -117.989)" fill="none" stroke="#4d4d4d" stroke-width="2"/>
                      <line id="Línea_159" data-name="Línea 159" y1="25.239" x2="25.239" transform="translate(486.978 -117.989)" fill="none" stroke="#4d4d4d" stroke-width="2"/>
                      <line id="Línea_160" data-name="Línea 160" y1="25.239" x2="25.239" transform="translate(518.217 -117.989)" fill="none" stroke="#4d4d4d" stroke-width="2"/>
                      <line id="Línea_161" data-name="Línea 161" y1="25.239" x2="25.239" transform="translate(549.456 -117.989)" fill="none" stroke="#4d4d4d" stroke-width="2"/>
                      <line id="Línea_162" data-name="Línea 162" y1="25.239" x2="25.239" transform="translate(580.695 -117.989)" fill="none" stroke="#4d4d4d" stroke-width="2"/>
                      <line id="Línea_163" data-name="Línea 163" y1="25.239" x2="25.239" transform="translate(611.934 -117.989)" fill="none" stroke="#4d4d4d" stroke-width="2"/>
                      <line id="Línea_164" data-name="Línea 164" y1="25.239" x2="25.239" transform="translate(643.172 -117.989)" fill="none" stroke="#4d4d4d" stroke-width="2"/>
                      <line id="Línea_165" data-name="Línea 165" y1="25.239" x2="25.239" transform="translate(424.5 -74.477)" fill="none" stroke="#4d4d4d" stroke-width="2"/>
                      <line id="Línea_166" data-name="Línea 166" y1="25.239" x2="25.239" transform="translate(455.739 -74.477)" fill="none" stroke="#4d4d4d" stroke-width="2"/>
                      <line id="Línea_167" data-name="Línea 167" y1="25.239" x2="25.239" transform="translate(486.978 -74.477)" fill="none" stroke="#4d4d4d" stroke-width="2"/>
                      <line id="Línea_168" data-name="Línea 168" y1="25.239" x2="25.239" transform="translate(518.217 -74.477)" fill="none" stroke="#4d4d4d" stroke-width="2"/>
                      <line id="Línea_169" data-name="Línea 169" y1="25.239" x2="25.239" transform="translate(549.456 -74.477)" fill="none" stroke="#4d4d4d" stroke-width="2"/>
                      <line id="Línea_170" data-name="Línea 170" y1="25.239" x2="25.239" transform="translate(580.695 -74.477)" fill="none" stroke="#4d4d4d" stroke-width="2"/>
                      <line id="Línea_171" data-name="Línea 171" y1="25.239" x2="25.239" transform="translate(611.934 -74.477)" fill="none" stroke="#4d4d4d" stroke-width="2"/>
                      <line id="Línea_172" data-name="Línea 172" y1="25.239" x2="25.239" transform="translate(643.172 -74.477)" fill="none" stroke="#4d4d4d" stroke-width="2"/>
                      <line id="Línea_173" data-name="Línea 173" y1="25.239" x2="25.239" transform="translate(424.5 -30.966)" fill="none" stroke="#4d4d4d" stroke-width="2"/>
                      <line id="Línea_174" data-name="Línea 174" y1="25.239" x2="25.239" transform="translate(455.739 -30.966)" fill="none" stroke="#4d4d4d" stroke-width="2"/>
                      <line id="Línea_175" data-name="Línea 175" y1="25.239" x2="25.239" transform="translate(486.978 -30.966)" fill="none" stroke="#4d4d4d" stroke-width="2"/>
                      <line id="Línea_176" data-name="Línea 176" y1="25.239" x2="25.239" transform="translate(518.217 -30.966)" fill="none" stroke="#4d4d4d" stroke-width="2"/>
                      <line id="Línea_177" data-name="Línea 177" y1="25.239" x2="25.239" transform="translate(549.456 -30.966)" fill="none" stroke="#4d4d4d" stroke-width="2"/>
                      <line id="Línea_178" data-name="Línea 178" y1="25.239" x2="25.239" transform="translate(580.695 -30.966)" fill="none" stroke="#4d4d4d" stroke-width="2"/>
                      <line id="Línea_179" data-name="Línea 179" y1="25.239" x2="25.239" transform="translate(611.934 -30.966)" fill="none" stroke="#4d4d4d" stroke-width="2"/>
                      <line id="Línea_180" data-name="Línea 180" y1="25.239" x2="25.239" transform="translate(643.172 -30.966)" fill="none" stroke="#4d4d4d" stroke-width="2"/>
                    </g>
                </svg>
            </div>
        </div>
      
        <div class="container bg-who pb-5 pt-1">
            <div class="row">
                <div class="col-12 col-sm-12 col-lg-1"></div>
                <div class="col-12 col-sm-12 col-lg-10">
                    <div class="text-center">
                        <h1 class="mExtraBold display-4 txt-negro">WHAT <b class="txt-azul">WE DO</b><img src="{{ asset('front/img/complemento-tit.webp') }}" alt="WHAT DO WE DO" class="img-fluid compl-tit ms-2"/></h1>
                    </div>
                    
                </div>
                <div class="col-12 col-sm-12 col-lg-1"></div>
                
                <!-- VISTA WEB -->
                <div class="d-none d-sm-none d-md-block">
                    <div class="d-flex justify-content-center pt-5 cards-who">
                        <div class="mx-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="{{ asset('front/img/international-payroll.gif') }}" alt="" class="img-fluid img-what"/>
                                        <!--<video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" class="vid-payroll">
                                            <source src="{{ asset('front/vid/international-payroll.mp4') }}" type="video/mp4" />
                                        </video>-->
                                    </div>
                                    <div class="mx-4 pt-3">
                                        <h5 class="mLight h3">International</h5>
                                        <h5 class="mBold h3 mb-4">Payroll</h5>
                                        <p class="gRegular txt-gris mb-2">Utilize an intelligent international </p>
                                        <p class="gRegular txt-gris mb-2">payroll management system to</p>
                                        <p class="gRegular txt-gris mb-2">ensure employee loyalty.</p>
                
                                    </div>   
                                </div>
                            </div>
                        </div>
                        <div class="mx-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="{{ asset('front/img/employee-taxes.gif') }}" alt="" class="img-fluid img-what-2"/>
                                        <!--<video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" class="vid-taxes">
                                            <source src="{{ asset('front/vid/employe-taxes.mp4') }}" type="video/mp4" />
                                        </video>-->
                                    </div>
                                    <div class="mx-4 pt-3">
                                        <h5 class="mLight h3">Employee Taxes  </h5>
                                        <h5 class="mBold h3 mb-4">and Benefits</h5>
                                        <p class="gRegular txt-gris mb-2">Manage workforce taxes</p>
                                        <p class="gRegular txt-gris mb-2">and benefits in compliance</p>
                                        <p class="gRegular txt-gris mb-2"> with local laws.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mx-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <!--<video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" class="vid-business">
                                            <source src="{{ asset('front/vid/business-compliance.mp4') }}" type="video/mp4" />
                                        </video>-->
                                        <img src="{{ asset('front/img/business-compliance.gif') }}" alt="" class="img-fluid img-what-3"/>
                                    </div>
                                    <div class="mx-4 pt-3">
                                        <h5 class="mLight h3">Business</h5>
                                        <h5 class="mBold h3 mb-4">Compliance</h5>
                                        <p class="gRegular txt-gris mb-2">Ensure corporate management</p>
                                        <p class="gRegular txt-gris mb-2">compliance by fulfilling the </p>
                                        <p class="gRegular txt-gris mb-2">requirements of specialized </p>
                                        <p class="gRegular txt-gris mb-2">human capital. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- VISTA CELULAR -->
                <div class="d-block d-sm-block d-md-none">
                    <div class="pt-5 cards-who">
                        <div class="mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="{{ asset('front/img/international-payroll.gif') }}" alt="" class="img-fluid img-what"/>
                                        <!--<video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" class="vid-payroll">
                                            <source src="{{ asset('front/vid/international-payroll.mp4') }}" type="video/mp4" />
                                        </video>-->
                                    </div>
                                    <div class="mx-4 pt-3">
                                        <h5 class="mLight h3">International</h5>
                                        <h5 class="mBold h3">Payroll</h5>
                                        <p class="gRegular txt-gris mb-2">Utilize an intelligent international </p>
                                        <p class="gRegular txt-gris mb-2">payroll management system to</p>
                                        <p class="gRegular txt-gris mb-2">ensure employee loyalty.</p>
                                    </div>   
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="{{ asset('front/img/employee-taxes.gif') }}" alt="" class="img-fluid img-what-2"/>
                                        <!--<video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" class="vid-taxes">
                                            <source src="{{ asset('front/vid/employe-taxes.mp4') }}" type="video/mp4" />
                                        </video>-->
                                    </div>
                                    <div class="mx-4 pt-3">
                                        <h5 class="mLight h3">Employee Taxes  </h5>
                                        <h5 class="mBold h3 mb-4">and Benefits</h5>
                                        <p class="gRegular txt-gris mb-2">Manage workforce taxes</p>
                                        <p class="gRegular txt-gris mb-2">and benefits in compliance</p>
                                        <p class="gRegular txt-gris mb-2"> with local laws.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <!--<video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" class="vid-business">
                                            <source src="{{ asset('front/vid/business-compliance.mp4') }}" type="video/mp4" />
                                        </video>-->
                                        <img src="{{ asset('front/img/business-compliance.gif') }}" alt="" class="img-fluid img-what-3"/>
                                    </div>
                                    <div class="mx-4 pt-3">
                                        <h5 class="mLight h3">Business</h5>
                                        <h5 class="mBold h3 mb-4">Compliance</h5>
                                        <p class="gRegular txt-gris mb-2">Ensure corporate management</p>
                                        <p class="gRegular txt-gris mb-2">compliance by fulfilling the </p>
                                        <p class="gRegular txt-gris mb-2">requirements of specialized </p>
                                        <p class="gRegular txt-gris mb-2">human capital. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
        </div>
    </div>
    <!-- HIRE ANYONE FROM  ANYWHERE -->
         <div class="d-none d-sm-none d-md-block" >
             <div class="container-fluid p-0 vid-hire">
                 <div class="video_index">
                     <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" class="w-100">
                         <source src="{{ asset('front/vid/bg-hire.mp4') }}" type="video/mp4" />
                     </video>
                 </div>
                 <div class="container txt-hire">
                     <div class="row pt-5">
                         <div class="col-4 col-sm-4 col-md-4 col-lg-8"></div>
                         <div class="col-8 col-sm-8 col-md-8 col-lg-4">
                            <div class="text-center anim-svg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="180" height="150.187" viewBox="0 0 251.326 163.187" >
                                    <g id="Grupo_4961" data-name="Grupo 4961" transform="translate(-423.793 162.207)" opacity="0.701" class="svg_bco">
                                      <line id="Línea_149" data-name="Línea 149" y1="25.239" x2="25.239" transform="translate(420.5 -157.5)"/>
                                      <line id="Línea_150" data-name="Línea 150" y1="25.239" x2="25.239" transform="translate(451.739 -157.5)"/>
                                      <line id="Línea_151" data-name="Línea 151" y1="25.239" x2="25.239" transform="translate(482.978 -157.5)"/>
                                      <line id="Línea_152" data-name="Línea 152" y1="25.239" x2="25.239" transform="translate(514.217 -157.5)"/>
                                      <line id="Línea_153" data-name="Línea 153" y1="25.239" x2="25.239" transform="translate(545.456 -157.5)"/>
                                      <line id="Línea_154" data-name="Línea 154" y1="25.239" x2="25.239" transform="translate(574.695 -157.5)"/>
                                      <line id="Línea_155" data-name="Línea 155" y1="25.239" x2="25.239" transform="translate(607.934 -157.5)"/>
                                      <line id="Línea_156" data-name="Línea 156" y1="25.239" x2="25.239" transform="translate(639.172 -157.5)"/>
                                      <line id="Línea_157" data-name="Línea 157" y1="25.239" x2="25.239" transform="translate(420.5 -109.989)"/>
                                      <line id="Línea_158" data-name="Línea 158" y1="25.239" x2="25.239" transform="translate(454.739 -113.989)"/>
                                      <line id="Línea_159" data-name="Línea 159" y1="25.239" x2="25.239" transform="translate(482.978 -113.989)"/>
                                      <line id="Línea_160" data-name="Línea 160" y1="25.239" x2="25.239" transform="translate(514.217 -113.989)"/>
                                      <line id="Línea_161" data-name="Línea 161" y1="25.239" x2="25.239" transform="translate(545.456 -113.989)"/>
                                      <line id="Línea_162" data-name="Línea 162" y1="25.239" x2="25.239" transform="translate(576.695 -113.989)"/>
                                      <line id="Línea_163" data-name="Línea 163" y1="25.239" x2="25.239" transform="translate(607.934 -113.989)"/>
                                      <line id="Línea_164" data-name="Línea 164" y1="25.239" x2="25.239" transform="translate(639.172 -113.989)"/>
                                      <line id="Línea_165" data-name="Línea 165" y1="25.239" x2="25.239" transform="translate(420.5 -70.477)"/>
                                      <line id="Línea_166" data-name="Línea 166" y1="25.239" x2="25.239" transform="translate(451.739 -70.477)"/>
                                      <line id="Línea_167" data-name="Línea 167" y1="25.239" x2="25.239" transform="translate(482.978 -70.477)"/>
                                      <line id="Línea_168" data-name="Línea 168" y1="25.239" x2="25.239" transform="translate(514.217 -70.477)"/>
                                      <line id="Línea_169" data-name="Línea 169" y1="25.239" x2="25.239" transform="translate(545.456 -70.477)"/>
                                      <line id="Línea_170" data-name="Línea 170" y1="25.239" x2="25.239" transform="translate(576.695 -70.477)"/>
                                      <line id="Línea_171" data-name="Línea 171" y1="25.239" x2="25.239" transform="translate(607.934 -70.477)"/>
                                      <line id="Línea_172" data-name="Línea 172" y1="25.239" x2="25.239" transform="translate(639.172 -70.477)"/>
                                      <line id="Línea_173" data-name="Línea 173" y1="25.239" x2="25.239" transform="translate(420.5 -26.966)"/>
                                      <line id="Línea_174" data-name="Línea 174" y1="25.239" x2="25.239" transform="translate(451.739 -26.966)"/>
                                      <line id="Línea_175" data-name="Línea 175" y1="25.239" x2="25.239" transform="translate(482.978 -26.966)"/>
                                      <line id="Línea_176" data-name="Línea 176" y1="25.239" x2="25.239" transform="translate(514.217 -26.966)"/>
                                      <line id="Línea_177" data-name="Línea 177" y1="25.239" x2="25.239" transform="translate(545.456 -26.966)"/>
                                      <line id="Línea_178" data-name="Línea 178" y1="25.239" x2="25.239" transform="translate(576.695 -26.966)"/>
                                      <line id="Línea_179" data-name="Línea 179" y1="25.239" x2="25.239" transform="translate(607.934 -26.966)"/>
                                      <line id="Línea_180" data-name="Línea 180" y1="25.239" x2="25.239" transform="translate(639.172 -26.966)"/>
                                    </g>
                                </svg>
                            </div>
                             <div class="pt-5 txt-hire-2">
                                 <h1 class="mExtraBold display-4">Hire anyone</h1>
                                 <h1 class="mExtraBold display-4">from</h1>
                                 <h1 class="mExtraBold display-4">anywhere <img src="{{ asset('front/img/complemento-tit.webp') }}" alt="CORE" class="img-fluid icono-logo"/></h1>
                                 <div class="pt-3 text-end me-5">
                                    <button class="btn btn-primary btn-contact">
                                        <a href="#contact" class="a_none_style text-white">
                                            <h6 class=" mSemiBold">Contact Us</h6>
                                        </a>
                                    </button>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="row pt-5">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-2">
                            <img loading="lazy" src="{{ asset('front/img/logo-bco.gif') }}" alt="CORE" class="img-fluid logo-hire"/>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-10"></div>
                     </div>
                 </div>
             </div>
         </div>
         <!-- VISTA MÓVIL -->
         <div class="d-block d-sm-block d-md-none">
            <section class="showcase" id="showcase">
                <div class="container txt-hire">
                    <div class="row pt-5">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-8"></div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                            <div class="pt-5 ">
                                <h1 class="mExtraBold display-4">Hire anyone</h1>
                                <h1 class="mExtraBold display-4">from</h1>
                                <h1 class="mExtraBold display-4">anywhere <img  src="{{ asset('front/img/complemento-tit.webp') }}" alt="CORE" class="img-fluid icono-logo"/></h1>
                                <div class="pt-3">
                                   <button class="btn btn-primary btn-contact">
                                       <a href="#contact" class="a_none_style text-white">
                                           <h6 class=" mSemiBold">Contact Us</h6>
                                       </a>
                                   </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row pt-5">
                       <div class="col-12 col-sm-12 col-md-12 col-lg-2">
                           <img loading="lazy" src="{{ asset('front/img/logo-bco.gif') }}" alt="CORE" class="img-fluid logo-hire"/>
                       </div>
                       <div class="col-12 col-sm-12 col-md-12 col-lg-10"></div>
                    </div>
                </div>
                <video src="{{ asset('front/vid/bg-hire-vertical.mp4') }}" muted loop autoplay playsinline></video>
            </section>
         </div>
    <!-- WHAT DO THE WORKERS SAYS -->
    @include('Pagina.components.carrousel')
    <!-- PAYROLL SOLUTIONS -->
    <div class="container py-5">
        <div class="container bg-mundo py-5">
            <div class="row pt-5">
                <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-10 pt-5">
                    <div class="row pt-5">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 mb-5">
                            <div class="txt-payroll">
                                <h1 class="mExtraBold display-4 txt-negro">Payroll</h1>
                                <h1 class="mExtraBold txt-azul display-4 mb-3">solutions <img  src="{{ asset('front/img/complemento-tit.webp') }}" alt="Payroll solutions" class="img-fluid compl-tit"/></h1>
                                <p class="gRegular mb-2 txt-gris">Save time by managing everything from one platform.</p>
                                <p class="gRegular mb-2 txt-gris">Core Resources is an integral payroll and human resources </p>
                                <p class="gRegular txt-gris">solution for your global team.</p>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                            <div class="row mb-5">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-2"></div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                                    <div class="text-end">
                                        <img loading="lazy" src="{{ asset('front/img/experience.webp') }}" alt="10 years of experience" class="img-fluid icono-payroll"/>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg-4">
                                    <div class="pt-2">
                                        <h5 class="mExtraBold txt-azul-marino h2 mb-0">10 years</h5>
                                        <p class="gRegular txt-gris h6 txt-gris mt-0">Of experience.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-5">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-2"></div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                                    <div class="text-end">
                                        <img loading="lazy" src="{{ asset('front/img/happy-workers.webp') }}" alt="12, 560 happy workers" class="img-fluid icono-payroll"/>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg-4">
                                    <div class="pt-2">
                                        <h5 class="mExtraBold txt-azul-marino h2 mb-0">12, 560</h5>
                                        <p class="gRegular txt-gris h6 txt-gris mt-0">Happy workers.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-5">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-2"></div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                                    <div class="text-end">
                                        <img loading="lazy" src="{{ asset('front/img/companies.webp') }}" alt="450 companies we have worker with" class="img-fluid icono-payroll"/>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg-5">
                                    <div class="pt-2">
                                        <h5 class="mExtraBold txt-azul-marino h2 mb-0">450</h5>
                                        <p class="gRegular txt-gris h6 txt-gris my-0">Companies</p>
                                        <p class="gRegular txt-gris h6 txt-gris mt-0">collaborated with.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- OUR BENEFITS -->
    <div class="container py-5" id="benefits">
        <div class="row mb-4">
            <div class="text-center">
                <h1 class="mExtraBold display-4 txt-negro">The <b class="txt-azul">benefits</b><img  src="{{ asset('front/img/complemento-tit.webp') }}" alt="CORE" class="img-fluid compl-tit ms-2"/></h1>                
               
            </div>
        </div>
        <div class="row pt-3">
            <div class="d-none d-sm-none d-md-block">
                <div class="boxesContainer">
                    <div class="cardBox">
                      <div class="card2">
                        <div class="front">
                            <div class="text-center mb-4">
                                <img loading="lazy" src="{{ asset('front/img/workforce.webp') }}" alt="WORK FORCE" class="img-fluid"/>
                            </div>
                            <div class="mx-4">
                                <h3 class="mBold mb-0 h4">Efficient </h3>
                                <h3 class="mBold my-0 h4">workforce</h3>
                                <h3 class="mBold my-0 h4 mb-4">management.</h3>
                                <p>Our platform serves as your </p>
                                <p>employee management system. It’s</p>
                                <p>where you’ll find personnel </p>
                                <p>information including things</p>
                                <p>salary, benefits, paid time off, and </p>
                                <p>more. It’s also what you’ll use to </p>
                                <p>supervise payroll. All payments are</p>
                                <p>automated for you so that they’re</p>
                                <p>delivered correctly and efficiently. </p>
                            </div>
                        </div>
                      </div>
                    </div>
                    <div class="cardBox">
                      <div class="card2">
                        <div class="front">
                            <div class="text-center mb-4">
                                <img loading="lazy" src="{{ asset('front/img/offers-in-line.webp') }}" alt="OFFERS IN LINE" class="img-fluid"/>
                            </div>
                            <div class="mx-4">
                                <h3 class="mBold h4 mb-0">Offers in line</h3>
                                <h3 class="mBold h4 my-0">with local </h3>
                                <h3 class="mBold h4 my-0">norms and </h3>
                                <h3 class="mBold h4 mt-0 mb-4">laws.</h3>
                                <p>Benefit packages vary from </p>
                                <p>one country to another, which is </p>
                                <p>why we detail the complex</p>
                                <p>requirements into country</p>
                                <p>specific benefits packages.</p>
                            </div>
                        </div>
                      </div>
                    </div>
                    <div class="cardBox">
                      <div class="card2">
                        <div class="front">
                            <div class="text-center mb-4">
                                <img loading="lazy" src="{{ asset('front/img/customized.webp') }}" alt="CUSTOMIZED EMPLOYMENT" class="img-fluid"/>
                            </div>
                            <div class="mx-4">
                                <h3 class="mBold h4 mb-0">Customized </h3>
                                <h3 class="mBold h4 my-0">employment</h3>
                                <h3 class="mBold h4 mt-0 mb-4">contracts. </h3>
                                <p>abor laws differ across the</p>
                                <p>globe. Your corporate culture</p>
                                <p>and your new hire require</p>
                                <p>customized employment contracts</p>
                                <p>that are fair and legal. </p>
                            </div> 
                        </div>
                      </div>
                    </div>
                    <div class="cardBox">
                      <div class="card2">
                        <div class="front">
                            <div class="text-center mb-4">
                                <img loading="lazy" src="{{ asset('front/img/payroll-goes.webp') }}" alt="PAYROLL GOES" class="img-fluid"/>
                            </div>
                            <div class="mx-4">
                                <h3 class="mBold h4 mb-0">Streamlined </h3>
                                <h3 class="mBold h4 mt-0 mb-4">Payroll</h3>
                                <p>With Core Resources, your </p>
                                <p>employees are put on our </p>
                                <p>local payroll. You assign their</p>
                                <p>work and dictate their pay, </p>
                                <p>but we take care of logistics</p>
                                <p>and compliance. </p>
                            </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
            <div class="d-block d-sm-block d-md-none">
                <div class="boxesContainer">
                    <div class="cardBox">
                      <div class="card2">
                        <div class="text-center mb-4">
                            <img loading="lazy" src="{{ asset('front/img/workforce.webp') }}" alt="WORK FORCE" class="img-fluid"/>
                        </div>
                        <div class="mx-4">
                            <h3 class="mBold mb-0 h4">Efficient </h3>
                                <h3 class="mBold my-0 h4">workforce</h3>
                                <h3 class="mBold mt-0 h4 mb-4">management.</h3>
                                <p>Our platform serves as your </p>
                                <p>employee management system. It’s</p>
                                <p>where you’ll find personnel </p>
                                <p>information including things</p>
                                <p>salary, benefits, paid time off, and </p>
                                <p>more. It’s also what you’ll use to </p>
                                <p>supervise payroll. All payments are</p>
                                <p>automated for you so that they’re</p>
                                <p>delivered correctly and efficiently. </p>
                        </div>
                      </div>
                    </div>
                    <div class="cardBox">
                      <div class="card2">
                        <div class="text-center mb-4">
                            <img loading="lazy" src="{{ asset('front/img/offers-in-line.webp') }}" alt="OFFERS IN LINE" class="img-fluid"/>
                        </div>
                        <div class="mx-4">
                            <h3 class="mBold h4 mb-0">Offers in line</h3>
                            <h3 class="mBold h4 my-0">with local </h3>
                            <h3 class="mBold h4 my-0">norms and </h3>
                            <h3 class="mBold h4 mt-0 mb-4">laws.</h3>
                            <p>Benefit packages vary from </p>
                            <p>one country to another, which is </p>
                            <p>why we detail the complex</p>
                            <p>requirements into country</p>
                            <p>specific benefits packages.</p>
                        </div>
                      </div>
                    </div>
                    <div class="cardBox">
                      <div class="card2">
                        <div class="text-center mb-4">
                            <img loading="lazy" src="{{ asset('front/img/customized.webp') }}" alt="CUSTOMIZED EMPLOYMENT" class="img-fluid"/>
                        </div>
                        <div class="mx-4">
                            <h3 class="mBold h4 mb-0">Customized </h3>
                            <h3 class="mBold h4 my-0">employment</h3>
                            <h3 class="mBold h4 mt-0 mb-4">contracts. </h3>
                            <p>abor laws differ across the</p>
                            <p>globe. Your corporate culture</p>
                            <p>and your new hire require</p>
                            <p>customized employment contracts</p>
                            <p>that are fair and legal. </p>
                        </div> 
                      </div>
                    </div>
                    <div class="cardBox">
                      <div class="card2">
                        <div class="text-center mb-4">
                            <img loading="lazy" src="{{ asset('front/img/payroll-goes.webp') }}" alt="PAYROLL GOES" class="img-fluid"/>
                        </div>
                        <div class="mx-4">
                            <h3 class="mBold h4 mb-0">Streamlined </h3>
                            <h3 class="mBold h4 mt-0 mb-4">Payroll</h3>
                            <p>With Core Resources, your </p>
                            <p>employees are put on our </p>
                            <p>local payroll. You assign their</p>
                            <p>work and dictate their pay, </p>
                            <p>but we take care of logistics</p>
                            <p>and compliance. </p>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CONTRACTS IN EVERY COUNTRY -->
    <div class="container bg-contracts py-5">
        <div class="row py-5">
            <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-5">
                <div class="txt-contracts">
                    <h1 class="mExtraBold display-4 txt-negro">Contracts</h1>
                    <h1 class="mExtraBold txt-azul display-4">in every</h1>.
                    <h1 class="mExtraBold txt-azul display-4 mb-4">country <img  src="{{ asset('front/img/complemento-tit.webp') }}" alt="CORE" class="img-fluid compl-tit"/></h1>                    
                    <p class="gRegular mb-2 txt-gris">We prepare contracts that are always in </p>
                    <p class="gRegular mb-2 txt-gris">compliance in every country you wish to</p>
                    <p class="gRegular mb-2 txt-gris">hire, local HR experts and Worldwide </p>
                    <p class="gRegular mb-2 txt-gris">entities.</p>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                <div class="">
                    <img loading="lazy" src="{{ asset('front/img/contracts.gif') }}" alt="CONTRACTS IN EVERY COUNTRY" class="img-fluid"/>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
        </div>
    </div>
    <!-- HOW DOES IT WORK -->
    <div class="container-fluid bg-gris py-5" id="how-does">
        <div class="row">
            <div class="bg-world">
                <img loading="lazy" src="{{ asset('front/img/bg-mundo.webp') }}" alt="CORE" class="img-fluid "/>
                <div class="text-center tit-world">
                    <h1 class="mExtraBold display-3 txt-negro">How does <b class="txt-azul">it work?</b> <img src="{{ asset('front/img/complemento-tit.webp') }}" alt="CORE" class="img-fluid compl-how compl-tit ms-2"/></h1>
                    <h4 class="mMedium txt-separacion">DO IT WITH CORE RESOURCES</h4>
                </div> 
                 <!-- VISTA WEB -->
                <div class="d-none d-sm-none d-md-block">
                    <div class="container py-5 cards-world">
                        <div class="d-flex justify-content-center">
                            <div class="mx-2">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-center pt-4">
                                            <img loading="lazy" src="{{ asset('front/img/we-take.webp') }}" alt="BUSINESS COMPLIANCE" class="img-fluid img-what-3"/>
                                        </div>
                                        <div class="mx-4 pt-3">
                                            <aside class="num-how">
                                                <h1 class="mExtraBold txt-azul-marino display-4">1</h1>
                                            </aside>
                                            <h5 class="mBold mb-0 h5">Global sourcing </h5>
                                            <p class="mb-2 gRegular txt-gris pt-3">Remote, means anywhere</p>
                                            <p class="mb-2 gRegular txt-gris">in the world. We source</p>
                                            <p class="mb-2 gRegular txt-gris">candidates globally.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mx-2">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-center pt-4">
                                            <img loading="lazy" src="{{ asset('front/img/we-take-responsability.webp') }}" alt="BUSINESS COMPLIANCE" class="img-fluid img-what-3"/>
                                        </div>
                                        <div class="mx-4 pt-3">
                                            <aside class="num-how">
                                                <h1 class="mExtraBold txt-azul-marino display-4">2</h1>
                                            </aside>
                                            <h5 class="mBold mb-0 h5">The hiring process</h5>
                                            <p class="mb-2 gRegular txt-gris pt-3">From search to follow up,</p>
                                            <p class="mb-2 gRegular txt-gris">we take care of all the details</p>
                                            <p class="mb-2 gRegular txt-gris">of your new hire.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mx-2">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-center pt-4">
                                            <img loading="lazy" src="{{ asset('front/img/global-team.webp') }}" alt="BUSINESS COMPLIANCE" class="img-fluid img-what-3"/>
                                        </div>
                                        <div class="mx-4 pt-3">
                                            <aside class="num-how">
                                                <h1 class="mExtraBold txt-azul-marino display-4">3</h1>
                                            </aside>
                                            <h5 class="mBold mb-0  h5">We are accountable</h5>
                                            <p class="mb-2 gRegular txt-gris pt-3">Payroll, benefits, taxes, </p>
                                            <p class="mb-2 gRegular txt-gris">we do it all for you. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- VISTA CELULAR -->
                <div class="d-block d-sm-block d-md-none">
                    <div class="container py-5 cards-world">
                        <div class="">
                            <div class="mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-center pt-4">
                                            <img loading="lazy" src="{{ asset('front/img/we-take.webp') }}" alt="BUSINESS COMPLIANCE" class="img-fluid img-what-3"/>
                                        </div>
                                        <div class="mx-4 pt-3">
                                            <aside class="num-how">
                                                <h1 class="mExtraBold txt-azul-marino display-4">1</h1>
                                            </aside>
                                            <h5 class="mBold mb-0 h5">Global sourcing </h5>
                                            <p class="mb-2 gRegular txt-gris pt-3">Remote, means anywhere</p>
                                            <p class="mb-2 gRegular txt-gris">in the world. We source</p>
                                            <p class="mb-2 gRegular txt-gris">candidates globally.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-center pt-4">
                                            <img loading="lazy" src="{{ asset('front/img/we-take-responsability.webp') }}" alt="BUSINESS COMPLIANCE" class="img-fluid img-what-3"/>
                                        </div>
                                        <div class="mx-4 pt-3">
                                            <aside class="num-how">
                                                <h1 class="mExtraBold txt-azul-marino display-4">2</h1>
                                            </aside>
                                            <h5 class="mBold mb-0 h5">The hiring process</h5>
                                            <p class="mb-2 gRegular txt-gris pt-3">From search to follow up,</p>
                                            <p class="mb-2 gRegular txt-gris">we take care of all the details</p>
                                            <p class="mb-2 gRegular txt-gris">of your new hire.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-center pt-4">
                                            <img loading="lazy" src="{{ asset('front/img/global-team.webp') }}" alt="BUSINESS COMPLIANCE" class="img-fluid img-what-3"/>
                                        </div>
                                        <div class="mx-4 pt-3">
                                            <aside class="num-how">
                                                <h1 class="mExtraBold txt-azul-marino display-4">3</h1>
                                            </aside>
                                            <h5 class="mBold mb-0  h5">We are accountable</h5>
                                            <p class="mb-2 gRegular txt-gris pt-3">Payroll, benefits, taxes, </p>
                                            <p class="mb-2 gRegular txt-gris">we do it all for you. </p>
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
    <!-- FORMULARIO -->
    <div class="container py-5" id="contact">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-5 mb-5">
                <div class="txt-contact">
                    <h1 class="mExtraBold display-4 txt-negro">Are you ready</h1>
                    <h1 class="mExtraBold txt-azul display-4">to grow your</h1>
                    <h1 class="mExtraBold txt-azul display-4">business? <img  src="{{ asset('front/img/complemento-tit.webp') }}" alt="CORE" class="img-fluid compl-tit"/></h1>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-5">
                <div class="bg-form py-5">
                    <div class="mx-5">
                        <form method="POST" action="{{ route('contacto.index') }} " class="mx-3 needs-validation" novalidate>
                            @csrf
                            <div class="text-center mb-3">
                                <aside>
                                    <h1 class="mMedium txt-separacion h6">GET IN TOUCH WITH US </h1>
                                </aside>
                                <img src="{{ asset('front/img/complemento-tit.webp') }}" alt="CORE" class="img-fluid compl-form"/>
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="name"  name="name" required placeholder="Name">
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                    <div class="mb-3">
                                        <input type="email" class="form-control" id="email"  name="email" required placeholder="E-mail">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                    <div class="mb-3">
                                        <input type="text" class="form-control" id="phone"  name="phone" required placeholder="Phone">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                    <div class="mb-3">
                                        <input type="text" class="form-control" id="country"  name="country" required placeholder="Country">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                    <div class="mb-3">
                                        <input type="text" class="form-control" id="city"  name="city" required placeholder="City">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="company"  name="company" required placeholder="Company">
                            </div>
                            <div class="mb-3">
                                <select class="form-select" aria-label="Default select example" name="people"  id="people">
                                    <option selected>How many people work in your company?</option>
                                    <option value="1-50">1 - 50 </option>
                                    <option value="51-200">51 - 200</option>
                                    <option value="2001-1000">201 - 1000</option>
                                    <option value="+1000">+1000</option>
                                  </select>
                            </div>
                            <div class="mb-3">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Message" id="message" style="height: 120px" name="message" required></textarea>
                                    <label for="message" class="txt-gris">Message</label>
                                </div>
                            </div>
                            <div class="text-end">
                                <button class="btn btn-primary btn-send">
                                    <h6 class="mMedium pt-1">Send</h6>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
        </div>
    </div>
    <!-- FOOTER -->
    @include('Pagina.components.footer')


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.1.0/jquery-migrate.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js'></script>
    <script src="{{ asset('front/js/lib/easy-waypoint-animate.js') }}"></script>
    <script src="{{ asset('front/js/lib/jquery.waypoints.js') }}"></script>
    <script src="{{ asset('front/js/lib/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('front/js/script.js') }}"></script>
</body>
</html>