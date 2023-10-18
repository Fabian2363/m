
<!DOCTYPE html>
<!-- saved from url=(0063)https://blackrockdigital.github.io/startbootstrap-coming-soon/# -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


  
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SISTEMA DE INFORMACIÓN TALENTO HUMANO- SITH|</title>
  <link rel="icon" href="{{ asset('/images/logo_misak.png') }}" type="image/ico" />

  <!-- Bootstrap core CSS -->
  <link href="./css/fonts/style.css" rel="stylesheet">
  <link href="./css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
 
  <link href="./css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="./css/coming-soon.min.css" rel="stylesheet">
  

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
            <a class="navbar-brand" href="/">

           

            <img src="{{ asset('images/logo.jpg') }}"  class='imgRedonda'alt="">
            
                </a>
                </div>
            
            </h1>
            <p class="mb-5">
              <strong></strong></p>
            
				
                <div class="card-heade"> @lang('INGRESAR AL SISTEMA')</div>
                  <br>
                <div class="">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">@lang('Correo')</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" style="width:320Px"   name="email" value="{{ old('email') }}" required autocomplete="email"  autocomplete="of" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">@lang('Contraseña')</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"  style="width:320Px"   name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                          @lang('Recordar')
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-secondary" >
                                @lang('Ingresar') 
                                </button>
                                
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('register') }}">
                                        {{ __('¿Registrar al SITH?') }}
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
   
  </div>
  <style>
  
  img {
  display: block;
  margin: 0 auto;
  max-width: 118%;
  
}

      .imgRedonda {
    /*width:300px;
    height:300px;*/
    border-radius:140px;
    background: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url(background.jpeg);
}

              .card-heade {
    padding: .75rem 1.25rem;
    margin-bottom: 0;
    background-color: rgba(0,0,0,.03);
    /*border-bottom: 1px solid rgba(0,0,0,.125);*/
    margin-left: 180px;
}
.idioma{
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
    background-color: rgba(0,46,102,.8);
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
    text-align: center!important;
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
          <i  class="">Na</i>
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

  <div class="social-icons">
 
  
                    <div class="informacion1">
                       
                        @lang('&copy;2020 Todos los Derechos Reservados |Sistema de Información de Talento Humano -Espiral de Educación') 
                    </div>

                    <div class="informacion1">
                       <!-- <a href="">Informacion Compañia</a>--| <a href="">Privacion y Politica</a>--> 
                       @lang('|© |Cabildo  Indigena del Resguardo de Guambía-Silvia-Cauca-Colombia|')
                   

            </div>
            <div class="informacion1">
                       <!-- <a href="">Informacion Compañia</a>--| <a href="">Privacion y Politica</a>--> | <a href=""> 
                       @lang('|soportek@misak-colombia.org')</a>
                   

            </div>
            <div class="informacion1">
                       <!-- <a href="">Informacion Compañia</a>--| <a href="">Privacion y Politica</a>--> | <a href=""> 
                       @lang('|© |Desarrollado: Fabian Aranda T |©Gestion TIC`S|')</a>
                   

            </div>

           
    
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="./css/jquery.min.js.descarga"></script>
  <script src="./css/bootstrap.bundle.min.js.descarga"></script>

  <!-- Custom scripts for this template -->
  <script src="./css/coming-soon.min.js.descarga"></script>




</body>
</html>