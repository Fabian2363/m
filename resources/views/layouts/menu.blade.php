<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <link rel="icon" href="{{ asset('/images/logo_misak.png') }}" type="image/ico" />



    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('menu.name', 'SISTEMA DE INFORMACIÓN  TALENTO HUMANO| SITH') }}</title>



    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    <link href="{{ asset('plugin/datatables/datatables.min.css') }}" rel="stylesheet">
    <!--Favicon-->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">

    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery-2.1.0.js') }}"></script>
    <script>
        // bariable global base, 

        var base = "{{ url('') }}";
        $(function() {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            })
        });
    </script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/common-script.js') }}"></script>

    <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
    <link rel="stylesheet" href="{{ asset('css/estilos_pie_pagina.css') }}">

</head>


<body>
    <div class="page-wrapper">
        <!-- Preloader -->

        <!-- Preloader -->

        <!--header top-->

        <div class=" submenu">
            <div class="header_bar ">
                <!--\\\\\\\ header Start \\\\\\-->

                <!--\\\\\\\ brand end \\\\\\-->

                <div class="header_top_bar">
                    <!--\\\\\\\ header top bar start \\\\\\-->

                    <a class="add_user"> <i class="fa fa-plus-square"></i> @lang('Bienvenido a SITH') </a>

                    <div class="top_right_bar">

                        <div class="user_admin dropdown"> <a href="javascript:void(0);" data-toggle="dropdown">
                                <img src="" /><span class="user_adminname">@lang('Traductor') </span> <b class="caret"></b> </a>
                            <ul class="dropdown-menu">
                                <div class="top_pointer"></div>
                                <li> <a href="{{route('set_language','na')}}"><i class="fa fa-user"></i>Namtrik</a> </li>
                                <li> <a href="{{route('set_language','es')}}"><i class="fa fa-user"></i> Españo</a> </li>
                                {{-- <li> <a href="{{route('set_language','en')}}"><i class="fa fa-question-circle"></i>Ingles</a>--}}


                            </ul>
                        </div>

                        <div class="user_admin dropdown"> <a href="javascript:void(0);" data-toggle="dropdown">
                                <img src="" /> {{ Auth::user()->name }}</span> <b class="caret"></b> </a>
                            <ul class="dropdown-menu">
                                <div class="top_pointer"></div>
                                <li> <a href="#"><i class="fa fa-user"></i>Normas del Sistema</a> </li>
                                <li> <a href="#"><i class="fa fa-question-circle"></i> Ayuda</a> </li>
                                <!--<li> <a href="#"><i class="fa fa-cog"></i> Setting </a></li>-->
                                <li> <a class="fa fa-question-circle" href="{{ route('logout') }}" onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();"><i class="fa fa-user"></i>Salir</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            </ul>

                        </div>


                        <!--\\\\\\\  usuari login \\\\\\-->




                    </div>
                </div>
                <!--\\\\\\\ header top bar end \\\\\\-->
            </div>
        </div>
















        <!--Header Upper-->
        <section class="header-uper">
            <div class="container clearfix">
                <div class="logo">
                    <figure>
                        <a href="#">
                            <!--<img src="images/encabezado.jpg" alt="">--
                            <img src="{{ asset('images/pagina_logo.jpg') }}" alt="" width="1500" height="250" >
    -->
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
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="{{ url('home') }}">@lang('Inicio')</a>
                        </li>

                        @php
                        $permisos=\Session::get('permisos')[0];
                        @endphp
                        @foreach ($permisos as $permiso)
                        <li>
                            <a href="{{$permiso['ruta']}}">
                                @lang($permiso ['permiso'])

                            </a>
                        </li>
                        @endforeach

                        {{--

                        <li>
                            <a href="/censo-poblacional">@lang('Censo Poblacional')</a>
                        </li>

                        <li>
                            <a href="{{ url('Menu-Cunsultas') }}">@lang('CONSULTAS')</a>
                        </li>
                        <li>
                            <a href="{{ url('Menu-Reportes') }}">@lang('REPORTES DEL CENSO') </a>
                        </li>
                        <li>
                            <a href="{{ url('Menu-Actualizacion') }}">@lang('ACTUALIZACIÓN DEL CENSO') </a>
                        </li>
                        <li>
                            <a href="{{ url('Menu-Novedad') }}">@lang('NOVEDADADES DEL CENSO') </a>
                        </li>

                        <li>
                            <a href="{{ url('Menu-administrador') }}">@lang('Administración')</a>
                        </li>
                        --}}

                        <!--
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
                        </li>-->
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
        @if(session('info'))
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

        <script src="{{ asset('js/sweetalert2@9.js') }}" defer></script>

        <script src="{{ asset('plugin/datatables/datatables.min.js') }}" defer></script>
        @yield('script')

</body>

</html>