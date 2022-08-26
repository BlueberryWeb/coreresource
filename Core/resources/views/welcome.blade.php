<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <script src="https://kit.fontawesome.com/4514d9060c.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}"/>
    <link rel="shortcut icon" href="{{ asset('front/img/favicon.png') }}" />
    <!-- CARROUSEL -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css"/>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'/>
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
                            <h6 class="gRegular">Who we are?</h6>
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
                            <h6 class="gRegular">Contact</h6>
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
                                <h6 class="pt-2 gRegular">Contact Us</h6>
                            </a>
                        </button>
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
                        <a class="nav-link text-white" href="#who-we"><h6 class="gRegular">Who we are?</h6></a>
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
                        <div class="tit-global">
                            <h2 class="mMedium h3">GLOBAL TEAM</h2>
                        </div>
                        <div class="tit-dreams">
                            <h1 class="mBold display-4">OF YOUR DREAMS!</h1>
                        </div>
                        <div class="tit-hard mLight">We do the hard work. </div>
                        <div class="about-us">
                            <a href="#" class="a_none_style text-white">
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
                    <div class="header-lines">
                        <div class="header-line"></div>
                        <div class="header-line"></div>
                        <div class="header-line"></div>
                        <div class="header-line"></div>
                        <div class="header-line"></div>
                        <div class="header-line"></div>
                        <div class="header-line"></div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
            </div>
        </div>
    </header>
    <!-- WHO WE ARE -->
    <div class="container py-5" id="who-we">
        <div class="row pt-5">
            <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-11">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-5">
                        <div class="">
                            <h1 class="mExtraBold display-3 mb-0 txt-negro">Who</h1>
                            <h1 class="mExtraBold display-3 txt-azul mt-0">we are? <img src="{{ asset('front/img/complemento-tit.png') }}" alt="CORE" class="img-fluid"/></h1>
                            <h5 class="mMedium txt-separacion mb-3 ">A HUMAN RESOURCE </h5>
                            <h5 class="mMedium txt-separacion mb-2">SOFTWARE YOU CAN TRUST.</h5>
                            <p class="gRegular mb-2">A company who has given human resource </p>
                            <p class="gRegular">solutions to many countries for over 10 years.</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-7">
                        <div class="text-center">
                            <img src="{{ asset('front/img/who-we.gif') }}" alt="WHO WE ARE? " class="img-fluid img-who"/>
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
        <div class="container bg-who pb-5 pt-2">
            <div class="row">
                <div class="text-center pt-4">
                    <h1 class="mExtraBold display-4 txt-negro">What do <b class="txt-azul">we do?</b>  <img src="{{ asset('front/img/complemento-tit.png') }}" alt="WHAT DO WE DO" class="img-fluid"/></h1>
                </div>
                <div class="row pt-5">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                        <div class="mx-2">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="{{ asset('front/img/international-payroll.gif') }}" alt="INTERNATIONAL PAYROLL" class="img-fluid img-what"/>
                                    </div>
                                    <div class="mx-4 pt-3">
                                        <h5 class="mLight">International</h5>
                                        <h5 class="mBold">Payroll</h5>
                                        <p class="mb-0 gRegular txt-gris">Have an intelligent international </p>
                                        <p class="my-0 gRegular txt-gris">payroll management system to</p>
                                        <p class="my-0 gRegular txt-gris">ensure the loyalty of your </p>
                                        <p class="mt-0 gRegular txt-gris">employees.</p>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-3 ms-5 me-5">
                        <div class="mx-2">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="{{ asset('front/img/taxes-benefits.gif') }}" alt="EMPLOYEE TAXES AND BENEFITS" class="img-fluid img-what-2"/>
                                    </div>
                                    <div class="mx-4 pt-3">
                                        <h5 class="mLight">Employee taxes  </h5>
                                        <h5 class="mBold">and benefits</h5>
                                        <p class="mb-0 gRegular txt-gris">All the management of benefits </p>
                                        <p class="my-0 gRegular txt-gris">and taxes of your employees will</p>
                                        <p class="my-0 gRegular txt-gris">be in compliance with the</p>
                                        <p class="mt-0 gRegular txt-gris">current law.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                        <div class="mx-2">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="{{ asset('front/img/business-compliance.gif') }}" alt="BUSINESS COMPLIANCE" class="img-fluid img-what-3"/>
                                    </div>
                                    <div class="mx-4 pt-3">
                                        <h5 class="mLight">Business</h5>
                                        <h5 class="mBold">compliance</h5>
                                        <p class="mb-0 gRegular txt-gris">The installed capacity can ensure</p>
                                        <p class="my-0 gRegular txt-gris">the management of small and </p>
                                        <p class="my-0 gRegular txt-gris">medium-sized companies in thei</p>
                                        <p class="mt-0 gRegular txt-gris">fulfillment of human capital.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
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
                         <div class="col-12 col-sm-12 col-md-12 col-lg-8"></div>
                         <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                            <div class="text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="245.326" height="150.187" viewBox="0 0 251.326 163.187" >
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
                             <div class="pt-5 ">
                                 <h1 class="mExtraBold display-4"><b class="txt-azul">Hire</b> anyone</h1>
                                 <h1 class="mExtraBold display-4">from</h1>
                                 <h1 class="mExtraBold display-4">anywhere <img src="{{ asset('front/img/complemento-tit.png') }}" alt="CORE" class="img-fluid icono-logo"/></h1>
                                 <div class="pt-3">
                                    <button class="btn btn-primary btn-contact">
                                        <a href="#contact" class="a_none_style text-white">
                                            <h6 class="pt-2 mSemiBold">Contact Us</h6>
                                        </a>
                                    </button>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="row pt-5">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-2">
                            <img src="{{ asset('front/img/logo-bco.gif') }}" alt="CORE" class="img-fluid"/>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-10"></div>
                     </div>
                 </div>
             </div>
         </div>
         <!-- VISTA MÓVIL -->
    <!-- WHAT DO THE WORKERS SAYS -->
    @include('Pagina.components.carrousel')
    <!-- PAYROLL SOLUTIONS -->
    <div class="container py-5">
        <div class="container bg-mundo py-5">
            <div class="row pt-5">
                <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-10 pt-5">
                    <div class="row pt-5">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                            <div class="pt-5">
                                <h1 class="mExtraBold display-4 txt-negro">Payroll</h1>
                                <h1 class="mExtraBold txt-azul display-4">solutions <img src="{{ asset('front/img/complemento-tit.png') }}" alt="Payroll solutions" class="img-fluid"/></h1>
                                <p class="gRegular mb-0 txt-gris">Save time by managing everything from one platform.</p>
                                <p class="gRegular my-0 txt-gris">Core Resources is an integral payroll and human resources </p>
                                <p class="gRegular mt-0 txt-gris">solution for your global team.</p>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                            <div class="row mb-5">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-2"></div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                                    <div class="text-end">
                                        <img src="{{ asset('front/img/experience.gif') }}" alt="10 years of experience" class="img-fluid icono-payroll"/>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                                    <div class="pt-2">
                                        <h5 class="mExtraBold txt-azul-marino h2 mb-0">10 years</h5>
                                        <h5 class="gRegular txt-gris h6 txt-gris mt-0">Of experience</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-5">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-2"></div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                                    <div class="text-end">
                                        <img src="{{ asset('front/img/happy-workers.gif') }}" alt="12, 560 happy workers" class="img-fluid icono-payroll"/>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                                    <div class="pt-2">
                                        <h5 class="mExtraBold txt-azul-marino h2 mb-0">12, 560</h5>
                                        <h5 class="gRegular txt-gris h6 txt-gris mt-0">Happy workers</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-5">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-2"></div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                                    <div class="text-end">
                                        <img src="{{ asset('front/img/companies.gif') }}" alt="450 companies we have worker with" class="img-fluid icono-payroll"/>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-5">
                                    <div class="pt-2">
                                        <h5 class="mExtraBold txt-azul-marino h2 mb-0">450</h5>
                                        <h5 class="gRegular txt-gris h6 txt-gris my-0">Companies we have</h5>
                                        <h5 class="gRegular txt-gris h6 txt-gris mt-0">worker with</h5>
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
        <div class="row">
            <div class="text-center">
                <h1 class="mExtraBold display-4 txt-negro">Our <b class="txt-azul">benefits</b></h1>
            </div>
        </div>
        <div class="row pt-3">
            <div class="boxesContainer">
                <div class="cardBox">
                  <div class="card2">
                    <div class="front">
                        <div class="text-center mb-4">
                            <img src="{{ asset('front/img/workforce.png') }}" alt="" class="img-fluid"/>
                        </div>
                        <div class="mx-4">
                            <h3 class="mBold h3 mb-0">Workforce </h3>
                            <h3 class="mBold h3 my-0">management</h3>
                            <h3 class="mBold h3 my-0">with less </h3>
                            <h3 class="mBold h3 mt-0">work.</h3>
                        </div>
                    </div>
                    <div class="back">
                        <div class="text-center mb-4">
                            <img src="{{ asset('front/img/workforce.png') }}" alt="" class="img-fluid"/>
                        </div>
                        <div class="mx-4">
                            <h3 class="mBold mb-0 h4">Workforce </h3>
                            <h3 class="mBold my-0 h4">management</h3>
                            <h3 class="mBold my-0 h4">with less </h3>
                            <h3 class="mBold mt-0 h4">work.</h3>
                            <p>Our platform serves as your </p>
                            <p>employee management system. It’s</p>
                            <p>where you’ll find personnel </p>
                            <p>information including things like </p>
                            <p>salary, benefits, paid-time off, and </p>
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
                            <img src="{{ asset('front/img/offers-in-line.png') }}" alt="" class="img-fluid"/>
                        </div>
                        <div class="mx-4">
                            <h3 class="mBold h3 mb-0">Offers in line</h3>
                            <h3 class="mBold h3 my-0">with local </h3>
                            <h3 class="mBold h3 my-0">norms and </h3>
                            <h3 class="mBold h3 mt-0">laws.</h3>
                        </div>
                    </div>
                    <div class="back">
                        <div class="text-center mb-4">
                            <img src="{{ asset('front/img/offers-in-line.png') }}" alt="" class="img-fluid"/>
                        </div>
                        <div class="mx-4">
                            <h3 class="mBold h4 mb-0">Offers in line</h3>
                            <h3 class="mBold h4 my-0">with local </h3>
                            <h3 class="mBold h4 my-0">norms and </h3>
                            <h3 class="mBold h4 mt-0 mb-3">laws.</h3>
                            <p>We handle the many complexities</p>
                            <p>of country-specific benefits</p>
                            <p>packages. There isn’t a one-size-</p>
                            <p>fits-all strategy or offering </p>
                            <p>because every country has its </p>
                            <p>own requirements.</p>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="cardBox">
                  <div class="card2">
                    <div class="front">
                        <div class="text-center mb-4">
                            <img src="{{ asset('front/img/customized.png') }}" alt="" class="img-fluid"/>
                        </div>
                        <div class="mx-4">
                            <h3 class="mBold h3 mb-0">Customized </h3>
                            <h3 class="mBold h3 my-0">employment</h3>
                            <h3 class="mBold h3 mt-0">contracts. </h3>
                        </div>
                    </div>
                    <div class="back">
                        <div class="text-center mb-4">
                            <img src="{{ asset('front/img/customized.png') }}" alt="" class="img-fluid"/>
                        </div>
                        <div class="mx-4">
                            <h3 class="mBold h4 mb-0">Customized </h3>
                            <h3 class="mBold h4 my-0">employment</h3>
                            <h3 class="mBold h4 mt-0 mb-3">contracts. </h3>
                            <p>Because labor laws are so </p>
                            <p>strictly enforced across the </p>
                            <p>globe, going it alone or doing </p>
                            <p>it incorrectly could expose you</p>
                            <p>to fines, penalties, and </p>
                            <p>litigation.</p>
                        </div> 
                    </div>
                  </div>
                </div>
                <div class="cardBox">
                  <div class="card2">
                    <div class="front">
                        <div class="text-center mb-4">
                            <img src="{{ asset('front/img/payroll-goes.png') }}" alt="" class="img-fluid"/>
                        </div>
                        <div class="mx-4">
                            <h3 class="mBold h3 mb-0">Payroll </h3>
                            <h3 class="mBold h3 my-0">goes </h3>
                            <h3 class="mBold h3 mt-0">through us.</h3>
                        </div>
                    </div>
                    <div class="back">
                        <div class="text-center mb-4">
                            <img src="{{ asset('front/img/payroll-goes.png') }}" alt="" class="img-fluid"/>
                        </div>
                        <div class="mx-4">
                            <h3 class="mBold h4 mb-0">Payroll </h3>
                            <h3 class="mBold h4 my-0">goes </h3>
                            <h3 class="mBold h4 mt-0 mb-3">through us.</h3>
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
            <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                <div class="pt-5">
                    <h1 class="mExtraBold display-4">Contracts</h1>
                    <h1 class="mExtraBold txt-azul display-4">in every</h1>
                    <h1 class="mExtraBold txt-azul display-4">country <img src="{{ asset('front/img/complemento-tit.png') }}" alt="CORE" class="img-fluid"/></h1>
                    <p class="gRegular mb-0">We prepare contracts that are always in </p>
                    <p class="gRegular my-0">compliance in every country you wish to</p>
                    <p class="gRegular my-0">hire, local HR experts and Worldwide </p>
                    <p class="gRegular mt-0">entities.</p>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                <div class="">
                    <img src="{{ asset('front/img/contracts.png') }}" alt="CONTRACTS IN EVERY COUNTRY" class="img-fluid"/>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
        </div>
    </div>
    <!-- HOW DOES IT WORK -->
    <div class="container-fluid bg-gris py-5" id="how-does">
        <div class="row">
            <div class="bg-world">
                <img src="{{ asset('front/img/bg-mundo.png') }}" alt="CORE" class="img-fluid "/>
                <div class="text-center tit-world">
                    <h1 class="mExtraBold display-3">How does <b class="txt-azul">it work?</b> <img src="{{ asset('front/img/complemento-tit.png') }}" alt="CORE" class="img-fluid"/></h1>
                    <h4 class="mMedium txt-separacion">DO IT WITH CORE RESOURCES</h4>
                </div>
                <div class="container py-5 cards-world">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                            <div class="">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-center pt-4">
                                            <img src="{{ asset('front/img/we-take.gif') }}" alt="BUSINESS COMPLIANCE" class="img-fluid img-what-3"/>
                                        </div>
                                        <div class="mx-4 pt-3">
                                            <aside class="num-how">
                                                <h1 class="mExtraBold txt-azul-marino display-4">1</h1>
                                            </aside>
                                            <h5 class="mBold mb-0 pt-2">We take</h5>
                                            <h5 class="mLight mt-0">care of all</h5>
                                            <p class="mb-0 gRegular txt-gris pt-3">From the search for candidates, </p>
                                            <p class="my-0 gRegular txt-gris">to the legal aspects, we will be in </p>
                                            <p class="my-0 gRegular txt-gris">the whole process.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-3 ms-5 me-5">
                            <div class="">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-center pt-4">
                                            <img src="{{ asset('front/img/we-take-responsability.gif') }}" alt="BUSINESS COMPLIANCE" class="img-fluid img-what-3"/>
                                        </div>
                                        <div class="mx-4 pt-3">
                                            <aside class="num-how">
                                                <h1 class="mExtraBold txt-azul-marino display-4">2</h1>
                                            </aside>
                                            <h5 class="mBold mb-0 pt-2">We take the</h5>
                                            <h5 class="mLight mt-0">responsability</h5>
                                            <p class="mb-0 gRegular txt-gris pt-3">Don’t worry about payroll, </p>
                                            <p class="my-0 gRegular txt-gris">benefits or paying taxes, we do it</p>
                                            <p class="my-0 gRegular txt-gris">for you.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                            <div class="">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-center pt-4">
                                            <img src="{{ asset('front/img/global-team.gif') }}" alt="BUSINESS COMPLIANCE" class="img-fluid img-what-3"/>
                                        </div>
                                        <div class="mx-4 pt-3">
                                            <aside class="num-how">
                                                <h1 class="mExtraBold txt-azul-marino display-4">3</h1>
                                            </aside>
                                            <h5 class="mBold mb-0 pt-1">Global</h5>
                                            <h5 class="mLight mt-0">remote team</h5>
                                            <p class="mb-0 gRegular txt-gris pt-3">Your team can work remotely </p>
                                            <p class="my-0 gRegular txt-gris">from anywhere. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FORMULARIO -->
    <div class="container py-5" id="contact">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-5 pt-5">
                <div class="pt-5">
                    <h1 class="mExtraBold display-4 txt-negro pt-5">Are you ready</h1>
                    <h1 class="mExtraBold txt-azul display-4">to grow your</h1>
                    <h1 class="mExtraBold txt-azul display-4">business? <img src="{{ asset('front/img/complemento-tit.png') }}" alt="CORE" class="img-fluid"/></h1>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-5">
                <div class="bg-form py-5">
                    <div class="mx-5">
                        <form method="POST" action="{{ route('contacto.index') }} " class="mx-3">
                            @csrf
                            <div class="text-center mb-3">
                                <h1 class="mMedium txt-separacion h6">GET IN TOUCH WITH US <img src="{{ asset('front/img/complemento-tit.png') }}" alt="CORE" class="img-fluid compl-form"/></h1>
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
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Message" id="message" style="height: 120px" name="message" required></textarea>
                                    <label for="message">Message</label>
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
    <footer>
       <div class="d-none d-sm-none d-md-block" >
            <div class="container-fluid p-0 vid-monitoreo"id="sobre">
                <div class="video_index">
                    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" class="w-100">
                        <source src="{{ asset('front/vid/bg-footer.mp4') }}" type="video/mp4" />
                    </video>
                </div>
                <div class="container txt-footer">
                    <div class="row pt-5">
                        <div class="text-center mb-5 pt-5">
                            <img src="{{ asset('front/img/logo-bco.gif') }}" alt="CORE" class="img-fluid logo-footer-bco"/>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-10">
                            <div class="row py-5">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                                    <div class="me-5 mb-3">
                                        <img src="{{ asset('front/img/logo-azul.gif') }}" alt="CORE" class="img-fluid mb-4 logo-footer"/>
                                        <p class="gRegular">We are a company who has been</p>
                                        <p class="gRegular">giving global human resources</p>
                                        <p class="gRegular">solutions to many countries for</p>
                                        <p class="gRegular">more than 10 years. </p>
                                    </div>
                                    <!--<div class="">
                                        <h3 class="mBold txt-azul h5 mb-3">FOLLOW US</h3>
                                        <a href="" class="a_none_style" target="_blank" rel="noopener noreferrer">
                                            <img src="{{ asset('front/img/fb-icono.png') }}" alt="FB: Core" class="img-fluid icono-redes-foot me-3"/>
                                        </a>
                                        <a href="" class="a_none_style" target="_blank" rel="noopener noreferrer">
                                            <img src="{{ asset('front/img/ig-icono.png') }}" alt="IG: Core" class="img-fluid icono-redes-foot me-3"/>
                                        </a>
                                        <a href="" class="a_none_style" target="_blank" rel="noopener noreferrer">
                                            <img src="{{ asset('front/img/tw-icono.png') }}" alt="TW: Core" class="img-fluid icono-redes-foot"/>
                                        </a>
                                    </div>-->
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                                    <div class="">
                                        <h3 class="mBold txt-azul h5 mb-3">SITE MENU</h3>
                                        <a href="#index" class="a_none_style text-white ">
                                            <h6 class="gRegular mb-3">Index</h6>
                                        </a>
                                        <a href="#who-we" class="a_none_style text-white">
                                            <h6 class="gRegular mb-3">Who are we?</h6>
                                        </a>
                                        <a href="#services" class="a_none_style text-white">
                                            <h6 class="gRegular mb-3">Services</h6>
                                        </a>
                                        <a href="#benefits" class="a_none_style text-white">
                                            <h6 class="gRegular mb-3">Benefits</h6>
                                        </a>
                                        <a href="#how-does" class="a_none_style text-white">
                                            <h6 class="gRegular mb-3">How does it work?</h6>
                                        </a>
                                        <a href="#contact" class="a_none_style text-white">
                                            <h6 class="gRegular mb-3">Contact</h6>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                                    <div class="">
                                        <h3 class="mBold txt-azul h5 mb-3">LEGAL</h3>
                                        <a href="{{ route('privacy.index') }}" class="a_none_style text-white">
                                            <h6 class="gRegular mb-3">Privacy Policy</h6>
                                        </a>
                                        <a href="{{ route('terms.index') }}" class="a_none_style text-white">
                                            <h6 class="gRegular mb-3">Terms & Conditions</h6>
                                        </a>
                                        <a href="{{ route('cookies.index') }}" class="a_none_style text-white">
                                            <h6 class="gRegular mb-3">Cookies Policy</h6>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="row pt-5">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                                <div class="">
                                    <h6 class="gRegular">© 2022 Core Resources, All rights reserved</h6>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-4"></div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                                <img src="{{ asset('front/img/materialized-blueberry.gif') }}" alt="Materialized by Blueberry" class="img-fluid bb-logo"/>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
                        
                        
                    </div>
                </div>
            </div>
        </div>
         <!-- VISTA CELULAR -->
        <div class="d-block d-sm-block d-md-none" >
            <div class="container-fluid p-0 vid-monitoreo-cel">
                <div class="video_index-cel">
                    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" class="w-100">
                        <source src="{{ asset('front/vid/bg-footer-vertical.mp4') }}" type="video/mp4" />
                    </video>
                </div>
                <div class="container  txt-footer-cel">
                    <div class="row pt-5">
                        <div class="text-center mb-5">
                            <img src="{{ asset('front/img/logo-bco.gif') }}" alt="CORE" class="img-fluid"/>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-10">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                                    <div class="me-5">
                                        <img src="{{ asset('front/img/logo-azul.gif') }}" alt="CORE" class="img-fluid mb-4 logo-footer"/>
                                        <p class="gRegular">We are a company who has been</p>
                                        <p class="gRegular">giving global human resources</p>
                                        <p class="gRegular">solutions to many countries for</p>
                                        <p class="gRegular">more than 10 years. </p>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                                    <div class="">
                                        <h3 class="mBold txt-azul h5 mb-3">SITE MENU</h3>
                                        <a href="#index" class="a_none_style text-white">
                                            <h6 class="gRegular">Index</h6>
                                        </a>
                                        <a href="#who-we" class="a_none_style text-white">
                                            <h6 class="gRegular">Who are we?</h6>
                                        </a>
                                        <a href="#services" class="a_none_style text-white">
                                            <h6 class="gRegular">Services</h6>
                                        </a>
                                        <a href="#benefits" class="a_none_style text-white">
                                            <h6 class="gRegular">Benefits</h6>
                                        </a>
                                        <a href="#how-does" class="a_none_style text-white">
                                            <h6 class="gRegular">How does it work?</h6>
                                        </a>
                                        <a href="#contact" class="a_none_style text-white">
                                            <h6 class="gRegular">Contact</h6>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                                    <div class="">
                                        <h3 class="mBold txt-azul h5 mb-3">LEGAL</h3>
                                        <a href="{{ route('privacy.index') }}" class="a_none_style text-white">
                                            <h6 class="gRegular">Privacy Policy</h6>
                                        </a>
                                        <a href="{{ route('terms.index') }}" class="a_none_style text-white">
                                            <h6 class="gRegular">Terms & Conditions</h6>
                                        </a>
                                        <a href="{{ route('cookies.index') }}" class="a_none_style text-white">
                                            <h6 class="gRegular">Cookies Policy</h6>
                                        </a>
                                    </div>
                                </div>
                                <!--<div class="col-12 col-sm-12 col-md-12 col-lg-3">
                                    <div class="">
                                        <h3 class="mBold txt-azul h5 mb-3">FOLLOW US</h3>
                                        <a href="" class="a_none_style" target="_blank" rel="noopener noreferrer">
                                            <img src="{{ asset('front/img/fb-icono.png') }}" alt="FB: Core" class="img-fluid icono-redes-foot me-3"/>
                                        </a>
                                        <a href="" class="a_none_style" target="_blank" rel="noopener noreferrer">
                                            <img src="{{ asset('front/img/ig-icono.png') }}" alt="IG: Core" class="img-fluid icono-redes-foot me-3"/>
                                        </a>
                                        <a href="" class="a_none_style" target="_blank" rel="noopener noreferrer">
                                            <img src="{{ asset('front/img/tw-icono.png') }}" alt="TW: Core" class="img-fluid icono-redes-foot"/>
                                        </a>
                                    </div>
                                </div>-->
                            </div>
                        </div>
                        <div class="row pt-5">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                                <div class="">
                                    <h6 class="gRegular">© 2022 Core Resources, All rights reserved</h6>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-4"></div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                                <img src="{{ asset('front/img/materialized-blueberry.gif') }}" alt="Materialized by Blueberry" class="img-fluid bb-logo"/>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
                        
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.1.0/jquery-migrate.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js'></script>
    <script src="{{ asset('front/js/script.js') }}"></script>
</body>
</html>