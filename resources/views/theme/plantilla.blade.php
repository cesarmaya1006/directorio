<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/vnd.microsoft.icon" href="{{ asset('imagenes/sistema/logo1.png') }}" sizes="500x500">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cinzel:700|Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">
    <!-- troas letreros -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <!-- Fuentes -->
    <link
        href="https://fonts.googleapis.com/css?family=Acme|Courgette|Dancing+Script|Fira+Sans+Condensed|Great+Vibes|Homemade+Apple|Poppins|Roboto+Condensed|Satisfy|Ubuntu&display=swap"
        rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('lte/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('lte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('lte/dist/css/adminlte.min.css') }}">
    <!-- Titulo -->
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Directorio Empresarial</title>
    <link rel="stylesheet" href="{{ asset('css/general.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index/index.css') }}">

</head>

<body>
    <header>
        <div class="header-top" style="background-color: rgb(12, 94, 202);">
            <div class="container container--default">
                <a class="header-linkWrap" href="https://www.gov.co/" target="_blank" tabindex="2">
                    <img class="header-logoGov"
                        src="https://www.micolombiadigital.gov.co/sites/superadmin/content/files/001264/63190.png"></a>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-6 d-flex flex-row align-items-center">
                    <div class="imagenes_logos d-flex flex-column flex-sm-row">
                        <img class="img-fluid logos_escudos" src="{{ asset('imagenes/sistema/colombia.png') }}"
                            style="max-height: 60px;width: auto;">
                        <img class="img-fluid logos_escudos" src="{{ asset('imagenes/sistema/funza.png') }}"
                            style="max-height: 60px;width: auto;">
                    </div>
                    <h4>Alcaldía Municipal de Funza Cundinamarca</h4>
                </div>
                <div class="col-12 col-md-6 d-flex flex-row align-items-center justify-content-sm-end justify-content-around">
                    <img class="img-fluid imagen_logos" src="{{ asset('imagenes/sistema/logo1.png') }}"
                        style="max-height: 100px;width: auto;">
                    <img class="img-fluid imagen_logos" src="{{ asset('imagenes/sistema/logo2.png') }}"
                        style="max-height: 100px;width: auto;">
                </div>
            </div>
        </div>
        <hr>
    </header>
    @yield ('cuerpo_pagina')

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="{{ asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <script src="{{ asset('lte/dist/js/adminlte.js') }}"></script>

</body>

</html>
