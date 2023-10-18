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

    <!-- Styles --
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
        $(function () {

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
   
</head>




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
        <!--PIE DE PAGINA --->
        


        <!-- Scripts -->

        <script src="{{ asset('plugins/bootstrap.min.js') }}" defer></script>

        <script src="{{ asset('js/sweetalert2@9.js') }}" defer></script>

        <script src="{{ asset('plugin/datatables/datatables.min.js') }}" defer></script>
        @yield('script')

</body>

</html>
