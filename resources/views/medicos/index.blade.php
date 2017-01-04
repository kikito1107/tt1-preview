<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/app.css">
    <link rel="stylesheet" type="text/css" href="css/source.css">
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
            <a href="/medicos" class="ripple">
                {{--<em class="glyphicon glyphicon-book"></em>--}}
                <span>Gestion médicos</span>
            </a>
        </li>
        <li class="li-nav">
            <a href="/repertorio" class="ripple">
                {{--<span class="glyphicon glyphicon-film"></span>--}}
                <span>Gestionar repertorio</span>
            </a>
        </li>
    </ul>
</aside>
<div class="container-sh bg-info">
    <div class="row">
        <div class="col-md-1">
                <a href="{{ url('/') }}" class="btn btn-link">· Inicio </a>
            </div>
        <div class="col-md-1">
                <a href="{{ url('/admin') }}" class="btn btn-link">· Dashboard</a>
        </div>
    </div>
</div>
<main class="container-sh">
    <div class="container">
        <h2>Listado de médicos <a href="{{ url('/medicos/agregar') }}" class="btn btn-success pull-right">Agregar médico</a></h2>
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>Número</th>
                    <th>Nombre</th>
                    <th>Teléfono</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>1</th>
                    <th>Ramírez González Enrique Saúl</th>
                    <th>5527242816</th>
                    <th class="text-center">
                        <a href="{{ url('/medicos/ver') }}" class="btn btn-success">Ver</a>
                        <a href="{{ url('/medicos/actualizar') }}" class="btn btn-primary">Actualizar </a>
                        <a onclick="alert('Seguro que quieres deshabilitar a este médico')" class="btn btn-danger">Habilitar </a>
                    </th>
                </tr>
                <tr>
                    <th>2</th>
                    <th>Martínez López Francisco Javier</th>
                    <th>5547593751</th>
                    <th class="text-center">
                        <a href="{{ url('/medicos/ver') }}" class="btn btn-success">ver</a>
                        <a href="{{ url('/medicos/actualizar') }}" class="btn btn-primary">actualizar </a>
                        <a onclick="alert('Seguro que quieres habilitar a este médico')" class="btn btn-danger">Deshabilitar </a>
                    </th>
                </tr>
            </tbody>
        </table>
    </div>
</main>
<footer class="text-center navbar-fixed-bottom bg-primary-dark">
    <h4>Instituto Politécnico Nacional - ESCOM</h4>
</footer>
</body>
</html>