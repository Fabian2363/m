<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <link rel="icon" href="{{ asset('/images/logo_misak.png') }}" type="image/ico" />

  

  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('menu2.name', 'SISTEMA DE INFORMACIÓN  POBLACIONAL  EN RELACIÓN  A LA EDUCACIÓN  Y SALUDO PROPIA  DE LA COMUNIDAD MISAK| SILVIA CAUCA') }}</title>
  

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- Styles -->
 <link href="{{ asset('css/style.css') }}" rel="stylesheet">
 
  <!--Favicon-->
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  
 <link rel="icon" href="images/favicon.ico" type="image/x-icon">
 <!-- Scripts -->
 <script src="{{ asset('js/app.js') }}" defer></script>
 
 <script>
  var base = "{{url('')}}";
  $(function(){

  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  })
});
 </script>
  <script src="{{ asset('js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('js/common-script.js')}}"></script>

<script src="{{ asset('js/bootstrap.min.js') }}" defer></script>


</head>


<body>
  <div class="page-wrapper">
    <!-- Preloader -->
    
    <!-- Preloader -->

<!--header top-->
<div class="header-top ">
      <div class="containe clearfix">
            <div class="top-left">
                  <h6>Bienvenido al  Sistema de Informacion Poblacional Misak: Fecha de ingreso: - 8am to 10pm</h6>
            </div>
            <div class="top-right">
                  <ul class="social-links">
                       <!-- <li>
                              <a href="#">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                              </a>
                        </li>
                        <li>
                              <a href="#">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                              </a>
                        </li>
                        <li>
                              <a href="#">
                                    <i class="fa fa-google-plus" aria-hidden="true"></i>
                              </a>
                        </li>-->
                        <br>
                        <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  Usuario:  {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Salir') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        
                  </ul>
            </div>
      </div>
</div>
<!--header top-->

<!--Header Upper-->
<section class="header-uper">
      <div class="container clearfix">
            <div class="logo">
                  <figure>
                        <a href="#">
                              <!--<img src="images/encabezado.jpg" alt="">-->
                             
							  <img src="{{ asset('images/logo.png') }}" alt="">

							  
                        </a>
                  </figure>
            </div>
            <div class="right-side">
                  <ul class="contact-info">
                      <!--  <li class="item">
                              <div class="icon-box">
                                    <i class="fa fa-envelope-o"></i>
                              </div>
                             <!-- <strong>Email</strong>--
                              <br>
                              <a href="#">
                                    <span>info@medic.com</span>
                              </a>
                        </li>-->
						
                        <!--<li class="item">
                              <div class="icon-box">
                                    <i class="fa fa-phone"></i>
                              </div>
                              <strong>Call Now</strong>
                              <br>
                              <span>+ (88017) - 123 - 4567</span>
                        </li>-->
                        
                  </ul>
                  <div class="link-btn">
                       <!-- <a href="#" class="btn-style-one">Appoinment</a>
						<!-- <img src="images/logo.png" alt="">-->
                  </div>
            </div>
      </div>
</section>
<!--Header Upper-->


<!--Main Header-->
<nav class="navbar navbar-default">
      <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                        aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                  </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                       
					   <li class="active">
                              <a href="{{ url('home') }}">Inicio</a>
                        </li>
                        <li>
                              <a href="{{ url('Hogar') }}">Censo Poblacional</a>
                              
                        </li>

                        <li>
                              <a href="{{ url('Menu-Cunsultas') }}">CONSULTAS</a>
                        </li>
                        <li>
                              <a href="gallery.html">REPORTES</a>
                        </li>
                        <li>
                              <a href="team.html">ACTUALIZACIÓN CENSO</a>
                        </li>
                       
                         <li>
                              <a href="team.html">Administración</a>
                        </li>
                        
                         <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Otros
                                    <span class="caret"></span>
                              </a>
                              <ul class="dropdown-menu">
                                    <li>
                                          <a href="#">Action</a>
                                    </li>
                                    <li>
                                          <a href="#">Another action</a>
                                    </li>
                                    <li>
                                          <a href="#">Something else here</a>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li>
                                          <a href="#">Separated link</a>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li>
                                          <a href="#">One more separated link</a>
                                    </li>
                              </ul>
                        </li> 
                  </ul>
            </div>
            <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
</nav>
<!--End Main Header -->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".header-top">
  <span class="icon fa fa-angle-up"></span>
</div>
@if (session('info'))
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="alert alert-success">
                        {{ session('info') }}
                    </div>
                </div>
            </div>
        </div>
        @endif

        <main class="py-4">
            @yield('content')
        </main>

<!-- Scripts -->

<script src="{{ asset('plugins/bootstrap.min.js') }}" defer></script>

</body>
</html>
