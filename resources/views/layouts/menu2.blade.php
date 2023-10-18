<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
      <meta charset="utf-8">
      <link rel="icon" href="{{ asset('/images/logo_misak.png') }}" type="image/ico" />

      <!--Favicon-->
      <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">

      {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
      <title>{{ config('menu2.name', 'SISTEMA DE INFORMACIÓN  TALENTO HUMANO| SITH') }}</title>
      

      <!-- mobile responsive meta -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      
      <!-- Styles -->
      <link href="{{ asset('css/style.css') }}" rel="stylesheet">
      <link href="{{ asset('css/admin.css') }}" rel="stylesheet">

      <link href="{{ asset('css/estilos_pie_pagina.css') }}" rel="stylesheet">
      
      <link rel="icon" href="images/favicon.ico" type="image/x-icon">
      <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}" defer></script>
      <script src= "{{ asset('js/jquery-2.1.0.js')}}"></script>
 
@yield('styles')

</head>


<body>

  <div class="page-wrapper">
    <!-- Preloader -->
    
    <!-- Preloader -->
<!--header top-->
 <div class=" submenu" >         
  <div class="header_bar " >
    <!--\\\\\\\ header Start \\\\\\-->
    
    <!--\\\\\\\ brand end \\\\\\-->
	
    <div class="header_top_bar">
      <!--\\\\\\\ header top bar start \\\\\\-->  
	  
      <a  class="add_user" > <i class="fa fa-plus-square"></i>  @lang('Bienvenido a SIPEMP') </a>
     
	 <div class="top_right_bar">
	 
          <div class="user_admin dropdown"> <a href="javascript:void(0);" data-toggle="dropdown">
		  <img src="" /><span class="user_adminname">@lang('Traductor')</span> <b class="caret"></b> </a>
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
            <li> <a  class="fa fa-question-circle" href="{{ route('logout') }}" onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();"><i class="fa fa-user"></i>Salir</a>
		           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                   </form>
			</li>
          </ul>
		  
        </div>
        
      </div>
    </div>
    <!--\\\\\\\ header top bar end \\\\\\-->
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
                             
                              <img src="{{ asset('images/logo.jpg') }}" alt="">


							  
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
                              <a href="{{ url('home') }}">@lang('Inicio')</a>
                        </li>
                        <li>
                              <a href="{{ url('/Inicio/Talento-humano') }}">@lang('Talento Humano')</a>
                              
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

<div class="modal fade" id="myModal_buscar_codigo_vivienda" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog modal-lg">
            <div class="modal-content  ">
                  <div class="modal-header">
                  <!--<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>-->
                  <h5 class="modal-title"> @lang('Consultar la información del código de la vivienda, ingresado el número de identificación de la persona que esta viviendo dentro la vivienda  registrada en el sistema.') </<h5>
                  </div>
                  <div class="modal-body">

                  <div id="contenido_modal_confirm_alumno_matriculado">


                        <!----------------=========================0--------------------->

                        <!----BUSCAR CODIGO VIVIENDA POR DOCUMENTO DE INDENTIDAD -------------------->


                        <div class="subir_informacion_general">
                              <div class="container clearfix">
                                    <div class="col-sm-4 topmargin-sm">

                                          <form id="searchPersona" class="form_cunsulta" method="POST" role="Informacion_General">
                                               
                                                {{ csrf_field() }}
                              <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                                <div id="consulta_externa">
                                                <label>@lang('Ingresar el número de identificación de la persona') </label><br>
                                                <input id="nuip" name="documento" class="form-control"
                                                      placeholder="Digíte el número sin puntos ni comas"
                                                      title="El nùmero de cèdula debe ser de 2 a 10 dígitos" autocomplete="off" type="NUMBER" required>
                                                <span class="animated fadeIn"></span>
                                                </div>
                                                <br>
                                                <div class="nobottommargin tright">
                                                <input type="submit" id="boton" name="enviar" value="@lang('Buscar')"
                                                       class="btn btn-success">
                                                </div>
                                          </form>
                                    </div>

                                    <div class="col-sm-8 topmargin-sm text-center">
                                          <h5>@lang('Detalle de la persona que vive en la vivienda') </h5>
                                          <div class="table-responsive-md">
                                                <table class="table text-center" id="persona">
                                                      <thead>
                                                            <tr>
                                                              <th>@lang('Documento')</th>
                                                              <th>@lang('Nombres')</th>
                                                              <th>@lang('Apellidos')</th>
                                                              <th>@lang('Acción')</th>
                                                            </tr>
                                                          </thead>
                                                      <tbody>

                                                      </tbody>
                                                </table>
                                          </div> 
                                    </div>
                              </div>
                        </div>
                  </div><!-- FIN DEL contenido_modal_confirm_alumno_matriculado-->
                  </div>
                  <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">@lang('Cancelar')</button>
                  <!---->
                  </div>
            </div><!-- /.modal-content -->
      </div>
</div>

      <main class="py-4">
            @yield('content')

            <div id="ConfirmAction" class="modal" tabindex="-1" role="dialog">
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                              <h5 class="modal-title">Confirmar Acción</h5>
                          </div>
                          <div class="modal-body">
                              <p>¿Esta seguro de terminar con el proceso?</p>
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                              <button type="button" class="btn btn-primary" id="btnConfirmar">Confirmar</button>
                          </div>
                      </div>
                  </div>
            </div>
      </main>

      <!--PIE DE PAGINA --->
      <footer>

<div class="container-footer-all">

    <div class="container-body">

        <div class="colum1">
            <h1>@lang('SISTEMA DE INFORMACIÓN DE TALENTO HUMANO - SITH')</h1>

            <img src="/images/logo.png" alt="">

        </div>

        <div class="colum2">

            <h1>@lang('Contacto')</h1>

            <div class="row2">
                <img src="/icon/smartphone.png">
                <label>3217452529</label>
            </div>
            <div class="row2">
                <img src="/icon/contact.png">
                <label>CabildoGuambia@gmail.com</label>
            </div>




        </div>

        <div class="colum3">

            <h1>@lang('Direccion')</h1>

            <div class="row2">
                <img src="/icon/house.png">
                <label>CARRERA 2 12 25-Silvia Cauca
                </label>
            </div>

        </div>

    </div>

</div>

<div class="container-footer">
    <div class="footer">
        <div class="copyright">
        @lang('&copy;2020 Todos los Derechos Reservados |') <a href="">Cabildo de Guambia</a>
        </div>

        <div class="informacion">
            <!-- <a href="">Informacion Compañia</a>--| <a href="">Privacion y Politica</a>--> | <a
                href="">@lang('© Desarrollado: Ingeniero Fabian Aranda T - |Cabildo de Guambia')</a>
        </div>
    </div>

</div>

</footer>
<script>
      
      $(document).ready(() => {
            let formSearchPersona = $('#searchPersona');

            formSearchPersona.submit((e) => {
                  e.preventDefault();
                  $.ajax({
                        type: "POST",
                        url: "{{ route('persona.vivienda') }}",
                        data: formSearchPersona.serialize(),
                        success: (response) => {
                              if(!response.status){
                                    Swal.fire(
                                          'INFORMACIÓN',
                                          response.mensaje,
                                          'warning',
                                    );
                              }else{
                                    let row = `<tr>
                                                      <td>${response.result.docomento_persona}</td>
                                                      <td>${response.result.nombres}</td>
                                                      <td>${response.result.apellidos}</td>
                                                      <td><a href="/censo-poblacional/vivienda/${response.id_vivienda}/familia">@lang('Ir a censar')</a></td>
                                                </tr>`;
                                    
                                    $('#persona>tbody').html(row);
                              }
                        }
                  });
            });
      });
</script>

<!-- Scripts -->
<script src= "/js/jquery-2.1.0.js"></script>
<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
<script src="{{ asset('plugins/bootstrap.min.js') }}" defer></script>
<script src="{{ asset('js/bootstrap.min.js')}}"></script>
 <script src="{{ asset('js/common-script.js')}}"></script>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<!-- Scripts -->
<script src= "/js/jquery-2.1.0.js"></script>
<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
<script src="{{ asset('plugins/bootstrap.min.js') }}" defer></script>
<script src="{{ asset('js/bootstrap.min.js')}}"></script>
<script src="{{ asset('js/common-script.js')}}"></script>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="/js/sweetalert2@9.js"></script>
 
@yield('scripts')

</body>

</html>
