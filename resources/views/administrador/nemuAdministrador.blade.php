@extends('layouts.menu')

@section('content')
<link rel="stylesheet" href="css/estilos_pie_pagina_menu.css">
<!--\\\\\\\ contentpanel start\\\\\\-->



<link rel="stylesheet" href="css/estilos_pie_pagina.css">

<link href="./css/all.min.css" rel="stylesheet">
<link href="./css/humano-el-estandar.css" rel="stylesheet">
<link <!--\\\\\\\ contentpanel start\\\\\\-->

<main class="hg-bg-white">
    <div class="nano has-scrollbar">
        <div class="parallax nano-content" id="nano-content" tabindex="0" style="right: -17px;">
            <div class="pull-left breadcrumb_admin clear_both">
                <div class="pull-left page_title theme_color">
                    <h1> @lang('Administrador')</h1>
                    <h2 class=""> @lang('Menu')</h2>
                </div>
                <div class="pull-right">
                    <ol class="breadcrumb">
                        <li><a href="#"> @lang('Inicio')</a></li>
                        <li><a href="#"> @lang('Administrador')</a></li>
                        <li class="active"> @lang('Menu')</li>
                    </ol>
                </div>
            </div>
            <div id="pnlInicio" class="container">

                <br>
                <br>
               <BR>
                <div class="color_informacion_modulo " style="margin-top: 15px;">
    <span class="color_infor  ">Usted se encuentra en: &nbsp;&nbsp;<font color="#060505"> Menu Reportes &gt; <font color="#060505"> </font> &gt; <font color="#060505">
            </font> </span>
</div>
<br>
                <div class="col-sm-8 col-sm-offset-2">
                    
                    <div class="row hg-menu-principal-contenedor">
                        
                        <div id="PanelIzquierdoUC1_pnlConsultarLiquidacion"
                            class="hg-col col-sm-6 col-md-4 col-lg-3 text-center">

                            <div class="row">
                                <div class="hg-menu-opcion">
                                <i class="fas fa-list-ul"></i>
                                    <a href="{{ url('Menu-Usuarios') }}">
                                        <h1>
                                           
                                            <i class="far fa-file-alt"></i>
                                            <class="icon_consulta"> 
                                        </h1>
                                         @lang('USUARIOS DEL SISTEMA SIPEMP')
                                    </a>
                                </div>
                            </div>

                        </div>
                        {{--
                        <div id="PanelIzquierdoUC1_pnlConsultarLiquidacion"
                            class="hg-col col-sm-6 col-md-4 col-lg-3 text-center">

                            <div class="row">
                                <div class="hg-menu-opcion">
                                <i class="fas fa-list-ul"></i>
                                    <a href="{{ url('estadistica-censo') }}">
                                        <h1>
                                        <img width=30px; src="icon/informacion.png" class="icon_consulta">
                                        </h1>
                                         @lang('ESTADÍSTICA DEL CENSO')
                                    </a>
                                </div>
                            </div>

                        </div>--}}
                        <div id="PanelIzquierdoUC1_pnlReportes" class="hg-col col-sm-6 col-md-4 col-lg-3 text-center">

                            <div class="row">
                                <div class="hg-menu-opcion">
                                    <i class="fas fa-list-ul"></i>
                                    <a href="{{ url('Validacion') }}" class="btn-menu-padre">
                                        <h1>
                                        <img  width=30px; src="icon/marketing.png" >
                                        </h1>
                                         @lang('VALIDACIÓN DE RETIRO DEL CENSO POBLACIONAL')
                                    </a>
                                    <div class="clear"></div>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            </section>




            <br>
            <br>
            <br>
            <br>
            
            



            <!--PIE DE PAGINA --->
            <footer>

                <div class="container-footer-all">

                    <div class="container-body">

                        <div class="colum1">
                            <h1>@lang('SISTEMA DE INFORMACIÓN POBLACIONAL MISAK - SIPEMP')</h1>

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
                            @lang('&copy;2020 Todos los Derechos Reservados |') <a href="">Cabido de Guambia</a>
                        </div>

                        <div class="informacion1">
                            <!-- <a href="">Informacion Compañia</a>--| <a href="">Privacion y Politica</a>--> | <a
                                href="">@lang('© Desarrollado: Ingeniero Fabian Aranda T - |Cabildo de Guambia')</a>
                        </div>
                    </div>

                </div>

            </footer>


            @endsection