<!-- ======= Header ======= -->
<header id="header" class="fixed-top header-inner-pages">
  <div class="container d-flex align-items-center justify-content-lg-between">

    <!--<h1 class="logo me-auto me-lg-0"><a href="index.html">Gp<span>.</span></a></h1>-->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="{{ route('index')}}" class="logo me-auto me-lg-0"><img src="img/logo.png" alt="" class="img-fluid"></a>

    <nav id="navbar" class="navbar order-last order-lg-0">
      <ul>
        <li><a class="nav-link scrollto " href="{{ route('index')}}">Inicio</a></li>
        <li><a class="nav-link scrollto" href="{{ route('conoce')}}">Conócenos</a></li>
        <li><a class="nav-link scrollto" href="#services">Colonos</a></li>
        <li><a class="nav-link scrollto " href="#portfolio">Fotografías</a></li>
        <li><a class="nav-link scrollto" href="{{ route('equipo')}}">Equipo</a></li>
        <li class="dropdown"><a href="#"><span>Comunicados</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="#">Eventos</a></li>
            <li class="dropdown"><a href="#"><span>Status Financiero</span> <i class="bi bi-chevron-right"></i></a>
              <ul>
                <li><a href="#">Deep Drop Down 1</a></li>
                <li><a href="#">Deep Drop Down 2</a></li>
                <li><a href="#">Deep Drop Down 3</a></li>
                <li><a href="#">Deep Drop Down 4</a></li>
                <li><a href="#">Deep Drop Down 5</a></li>
              </ul>
            </li>
            <li><a href="#">Drop Down 2</a></li>
            <li><a href="#">Drop Down 3</a></li>
            <li><a href="#">Drop Down 4</a></li>
          </ul>
        </li>
        <li><a class="nav-link scrollto" href="{{ route('contacto')}}">Contacto</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

    <a href="#about" class="get-started-btn scrollto">Iniciar Sesión</a>

  </div>
</header><!-- End Header -->