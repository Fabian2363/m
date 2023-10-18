





<!DOCTYPE html>
<!-- saved from url=(0063)https://blackrockdigital.github.io/startbootstrap-coming-soon/# -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


  
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SISTEMA DE INFORMACIÓN  POBLACIONAL  MISAK| SILVIA CAUCA</title>

  <link href="{{ asset('./css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/css/all.min.css') }}" rel="stylesheet">
  <link href="{{ asset('./css/coming-soon.min.css') }}" rel="stylesheet">
  <!-- Bootstrap core CSS -->
  <link href="" rel="stylesheet">

  <!-- Custom fonts for this template -->
 
  <link href="." rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="" rel="stylesheet">

</head>

<body>

  <div class="overlay"></div>
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src=" {{ asset('mp4/bg.mp4') }}" type="video/mp4">
   
  </video>

  <div class="masthead">
    <div class="masthead-bg"></div>
    <div class="container h-100">
      <div class="row h-100">
        <div class="col-12 my-auto">
          <div class="masthead-content text-white py-5 py-md-0">
            <h1 class="mb-3">
            <a class="navbar-brand" href="{{ url('login') }}">
            <img  style="width:550px" src="{{ asset('images/logo_v1-1.jpg') }}" alt="">
                </a>
              </h1>
            <p class="mb-5">
              <strong></strong></p>
			     
				
              <div class="card-header">{{ __('Recuperar Contraseña del Sistema  SIPEMP') }}</div>
               <br>
<div class="card-body">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo ') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" style="width:320Px" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

    
              
                
            </div>

        </div>
        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary" style="width:150Px" >
                    {{ __('Recuperar') }}
                </button>


                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('login') }}">
                                        {{ __('Iniciar sesión en el sistema') }}
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
   
  </div>
  
  <div class="social-icons">
   
                    <div class="copyright">
                        &copy;2020 Todos los Derechos Reservados |Sistema de Informacion Poplacional Misak- SIPEMP
                    </div>

                    <div class="informacion1">
                       <!-- <a href="">Informacion Compañia</a>--| <a href="">Privacion y Politica</a>--> | <a href=""> Cabildo  Indiegna del Resguardo de Guambía Silvia Cauca|© Desarrollado: Fabian Aranda T |  </a>
                   

            </div>
    
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="./css/jquery.min.js.descarga"></script>
  <script src="./css/bootstrap.bundle.min.js.descarga"></script>

  <!-- Custom scripts for this template -->
  <script src="./css/coming-soon.min.js.descarga"></script>




</body>
</html>






















