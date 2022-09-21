<header class="bg-menu">
    <div class="d-none d-sm-none d-md-block">
        <div class="container pt-3">
            <div class="menu-web">
                <div class="me-3">
                    <a href="{{ url('/') }}" class="a_none_style"><img src="{{ asset('front/img/logo-bco.gif') }}" alt="CORE" class="img-fluid logo-menu-web"/></a>
                </div>
                <div class="ms-3 pt-3">
                    <a href="{{ url('/') }}#index" class="a_none_style text-white">
                        <h6 class="gRegular">Index</h6>
                    </a>
                </div>
                <div class="ms-5 pt-3">
                    <a href="{{ url('/') }}#who-we" class="a_none_style text-white">
                        <h6 class="gRegular">Who we are?</h6>
                    </a>
                </div>
                <div class="ms-5 pt-3">
                    <a href="{{ url('/') }}#services" class="a_none_style text-white">
                        <h6 class="gRegular">Services</h6>
                    </a>
                </div>
                <div class="ms-5 pt-3">
                    <a href="{{ url('/') }}#benefits" class="a_none_style text-white">
                        <h6 class="gRegular">Benefits</h6>
                    </a>
                </div>
                <div class="ms-5 pt-3">
                    <a href="{{ url('/') }}#how-does" class="a_none_style text-white">
                        <h6 class="gRegular">How does it work?</h6>
                    </a>
                </div>
                <div class="ms-5 pt-3">
                    <a href="{{ url('/') }}#contact" class="a_none_style text-white">
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
                        <a href="{{ url('/') }}#contact" class="a_none_style text-white">
                            <h6 class="pt-1 gRegular">Contact Us</h6>
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
                            <a class="nav-link active text-white" aria-current="page" href="{{ url('/') }}#index"><h6 class="gRegular">Index</h6></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link text-white" href="{{ url('/') }}#who-we"> <h6 class="gRegular">Who we are?</h6></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link text-white"  href="{{ url('/') }}#services"><h6 class="gRegular">Services</h6></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link text-white"  href="{{ url('/') }}#benefits"><h6 class="gRegular">Benefits</h6></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link text-white" href="{{ url('/') }}#how-does"> <h6 class="gRegular">How does it work?</h6></a>
                          </li>
                          <li class="nav-item">
                            <a href="{{ url('/') }}#contact" class="nav-link text-white"><h6 class="gRegular ">Contact</h6></a>
                          </li>
                        </ul>
                      </div>
                </div>
                <div class="margen-left"></div>
                <div class="ms-2">
                    <button class="btn btn-primary btn-contact-menu">
                        <a href="{{ url('/') }}#contact" class="a_none_style text-white">
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
                    <a class="nav-link active text-white" aria-current="page" href="{{ url('/') }}#index"><h6 class="gRegular">Index</h6></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="{{ url('/') }}#who-we"><h6 class="gRegular">Who we are?</h6></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="{{ url('/') }}#services"><h6 class="gRegular">Services</h6></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="{{ url('/') }}#benefits"><h6 class="gRegular">Benefits</h6></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="{{ url('/') }}#how-does"><h6 class="gRegular">How does it work?</h6></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="{{ url('/') }}#contact"><h6 class="gRegular">Contact</h6></a>
                  </li>
                  <li class="nav-item">
                    <button class="btn btn-primary btn-contact-menu">
                        <a href="{{ url('/') }}#contact" class="a_none_style text-white">
                            <h6 class="pt-1 gRegular">Contact Us</h6>
                        </a>
                    </button>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </div>
</header>
