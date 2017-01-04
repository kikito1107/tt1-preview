<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <link rel="stylesheet" type="text/css" href="/css/source.css">
    <title>sistema Homeopático</title>
</head>
<body>
<header class="bg-primary-dark">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-11">
            <h1>Sistema Homeopático</h1>
        </div>
    </div>
</header>
<aside class="aside-primary bg-primary-1">
    <h2 class="color-white">&nbsp;&nbsp;Dashboard</h2>
    <ul class="ul-nav">
        <li class="li-nav">
            <a href="/citas/" class="ripple">
                {{--<em class="glyphicon glyphicon-book"></em>--}}
                <span>Gestion citas</span>
            </a>
        </li>
        <li class="li-nav">
            <a href="/consultas/" class="ripple">
                {{--<span class="glyphicon glyphicon-film"></span>--}}
                <span>Gestionar consultas</span>
            </a>
        </li>
        <li class="li-nav">
            <a href="/error" class="ripple">
                {{--<span class="glyphicon glyphicon-film"></span>--}}
                <span>Gestionar pacientes</span>
            </a>
        </li>
    </ul>
</aside>
<div class="container-sh bg-info">
    <div class="row">
        <div class="col-md-1">
            <a href="{{ url('/') }}" class="btn btn-link">Inicio</a>
        </div>
    </div>
</div>
<main class="container-sh">
    <div class="container">
        <h3>Datos del paciente</h3>
        <div class="col-md-12 table-bordered">
            <div class="row">
                <div class="col-md-4">
                    <p ><b>Nombre</b> Ramírez González Enrique Saúl</p>
                </div>
                <div class="col-md-4">
                    <p ><b>Dirección</b> Jardineros #40 int. 204 col. Morelos</p>
                </div>
                <div class="col-md-4">
                    <p ><b>Teléfono</b> 5527242816</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p ><b>Datos adicionales</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusamus
                        aperiam at atque consectetur debitis dolores doloribus ducimus, eligendi esse impedit, mollitia
                        natus officia optio quos sequi tenetur voluptatibus voluptatum!</p>
                </div>
            </div>
        </div>
        &nbsp;
        <h3>Repertorización</h3>
        <div class="col-md-12 table-bordered">
            <div class="row">
                <div class="col-md-6 text-center">
                    <div class="jumbotron bg-transparent">
                        <div class="container">
                            <a href="{{ url('/repertorio/tradicional') }}" class="btn btn-success btn-lg">Repertorización tradicional</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    <div class="jumbotron bg-transparent">
                        <div class="container">
                            <a href="{{ url('/repertorio/experto') }}" class="btn btn-primary btn-lg">Repertorización automática</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<footer class="text-center navbar-fixed-bottom bg-primary-dark">
    <h4>Instituto Politécnico Nacional - ESCOM</h4>
</footer>
</body>
</html>