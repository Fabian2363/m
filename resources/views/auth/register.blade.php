<!DOCTYPE html>
<!-- saved from url=(0063)https://blackrockdigital.github.io/startbootstrap-coming-soon/# -->
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">




    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SISTEMA DE INFORMACIÓN TALENTO HUMANO- SITH|</title>
    <link rel="icon" href="{{ asset('/images/logo_misak.png') }}" type="image/ico" />

    <!-- Bootstrap core CSS -->
   

    <!-- Custom fonts for this template -->

   
    <link href="{{ asset('/css/fonts/style.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('/css/all.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/coming-soon.min.css') }}" rel="stylesheet">

</head>

<body>

    <div class="overlay"></div>
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
        <source src=" {{ asset('mp4/aranda.mp4') }}" type="video/mp4">
    </video>

    <div class="masthead">
        <div class="masthead-bg"></div>
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 my-auto">

                    <div class="masthead-content text-white py-5 py-md-0">
                        <h1 class="mb-3">
                            <div class="logo">
                                <a class="navbar-brand" href="login_admi-X7S9XXXX9S-DJSI3YSNZSG3UAJ-JSHHS">



                                    <img src="{{ asset('images/logo.jpg') }}" class='imgRedonda' alt="">

                                </a>
                            </div>

                        </h1>
                        <p class="mb-5">
                            <strong></strong>
                        </p>
                        -
                    </div>
                </div>
            </div>
        </div>

    </div>
    <style>
    img {
        display: block;
        margin: 0 auto;
        max-width: 140%;

    }

    .imgRedonda {
        /*width:300px;
    height:300px;*/
        border-radius: 240px;
        background: linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url(background.jpeg);
    }

    .card-heade {
        padding: .75rem 1.25rem;
        margin-bottom: 0;
        background-color: rgba(0, 0, 0, .03);
        /*border-bottom: 1px solid rgba(0,0,0,.125);*/
        margin-left: 180px;
    }

    .idioma {
        margin: 0;
        position: absolute;
        right: 2.5rem;
        bottom: 2rem;
        width: auto;
        margin-top: -1110px;

        position: absolute;
        margin-bottom: 2rem;
        width: 100%;
        z-index: 2
    }

    .idioma ul>li {
        display: block;
        margin-left: 0;
        margin-right: 0;
        margin-bottom: 2rem;
    }

    .idioma ul>li>a {
        display: block;
        color: #fff;
        background-color: rgba(0, 46, 102, .8);
        border-radius: 100%;
        font-size: 2rem;
        line-height: 4rem;
        height: 4rem;
        width: 4rem;

    }

    .idioma {
        margin: 0;
        position: absolute;
        right: 2.5rem;
        bottom: 2rem;
        width: auto;
    }

    .text-center {
        text-align: center !important;
        margin-top: -590px;
    }
    </style>

    <div class="table-container table-responsive-md">
        <div class="idioma ">

            <ul class="list-unstyled text-center mb-0">
                <label> @lang('Idiomas')</label>
                <br>
                <li class="list-unstyled-item">
                    <a href="{{route('set_language','na')}}">
                        <i class="">Na</i>
                    </a>
                </li>
                <li class="list-unstyled-item">
                    <a href="{{route('set_language','es')}}">
                        <i class="">Es</i>
                    </a>
                </li>
                {{-- <li class="list-unstyled-item">
        <a href="{{route('set_language','en')}}">
                <i class="">En</i>
                </a>
                </li>--}}
            </ul>
        </div>



        
        <br>
        <br>
        
        <br>
        <br>
        <br>
        <br>
        <div class="social-icons">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                       <br>
                       <br>
                       <br>
                       <br>
                            <div class="card-header">{{ __('Registrar al SITH') }}</div>

                            <div class="card-body">
                                <form method="POST" action="/register">
                                    @csrf
                                    <input id="id_rol" type="number"
                                                @error('id_rol') is-invalid @enderror" name="rol"
                                                value="9" style="visibility:hidden" >

                                               
                                     
                                            <input id="fin_contrato" type="text"
                                                class="form-control @error('fin_contrato') is-invalid @enderror" name="fin_contrato"
                                                value="2021-08-21 06:44:01" style="visibility:hidden" >
                                    <div class="form-group row">
                                        <label for="name"
                                            class="col-md-4 col-form-label text-md-right">{{ __('Nombres') }}</label>

                                        <div class="col-md-6">
                                            <input id="name" type="text"
                                                class="form-control @error('name') is-invalid @enderror" name="name" value=""
                                                value="{{ old('name') }}" required autocomplete="name" autofocus >

                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="name"
                                            class="col-md-4 col-form-label text-md-right">{{ __('Apellidos') }}</label>

                                        <div class="col-md-6">
                                            <input id="apellidos" type="text"
                                                class="form-control @error('apellidos') is-invalid @enderror"
                                                name="apellidos"  value="" value="{{ old('apellidos') }}" required
                                                autocomplete="apellidos" autofocus>

                                            @error('apellidos')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                  
                                    <div class="form-group row">
                                        <label for="cedula"
                                            class="col-md-4 col-form-label text-md-right">{{ __('Docuento de ID') }}</label>
                                        
                                        <div class="col-md-6">
                                            <input id="cedula" type="text"
                                                class="form-control @error('cedula') is-invalid @enderror" name="cedula" 
                                                
                                                value="" required autocomplete="cedula" >

                                               
                                            @error('cedula')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                   

                                    <div class="form-group row">
                                        <label for="cargo"
                                            class="col-md-4 col-form-label text-md-right">{{ __('Cargo') }}</label>

                                        <div class="col-md-6">
                                            
                                            <select  id="cargo" class="form-control @error('cargo') is-invalid @enderror" name="cargo"
                                                value="{{ old('cargo') }}" required autocomplete="cargo" autofocus>
                                                <option value="" selected>Selecc</option>
                                                <option value="Administrativo IE">Administrativo I-E</option>
                                                <option value="Dinamizador_Laboral">Dinamizador-Contrato Laboral </option>
                                                <option value="Dinamizador_ops">Dinamizador-OPS </option>
                                               
                                                <option value="Economas">Economas</option>
                                            </select>
                                            @error('cargo')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                
                                         

                                           
                                      
                                    <div class="form-group row">
                                        <label for="email"
                                            class="col-md-4 col-form-label text-md-right">{{ __('Correo E') }}</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email">

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="password"
                                            class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password" required autocomplete="new-password">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="password-confirm"
                                            class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" class="form-control"
                                                name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Register') }}
                                            </button>

                                            @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('login') }}">
                                        {{ __('Ir a Inicias Sesion') }}
                                    </a>
                                @endif
                                        </div>
                                        
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="informacion1">

                @lang('&copy;2020 Todos los Derechos Reservados |Sistema de Información de Talento Humano -Espiral de
                Educación')
            </div>

           
           



        </div>

        <!-- Bootstrap core JavaScript -->
        <script src="./css/jquery.min.js.descarga"></script>
        <script src="./css/bootstrap.bundle.min.js.descarga"></script>

        <!-- Custom scripts for this template -->
        <script src="./css/coming-soon.min.js.descarga"></script>




</body>

</html>







---------------------------------------