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
        <div class="col-md-1">
            <a href="{{ url('/medicos/') }}" class="btn btn-link">· Listado</a>
        </div>
    </div>
</div>
<main class="container-sh">
    <div class="container">
        <h2>Médico: Ramírez González Enrique Saúl </h2>
        <hr>
        <p for="exampleInputEmail1">Nombre: <strong class="strong">Ramírez González Enrique Saúl</strong></p>
        <p for="exampleInputEmail1">Dirección: <strong class="strong">Jardineros #40 int. 204 col. Morelos</strong></p>
        <p for="exampleInputEmail1">Correo electrónico <strong class="strong">enriquesaul1@hotmail.com</strong></p>
        <p for="exampleInputEmail1">Teléfono <strong class="strong">5527242816</strong></p>
        <p for="exampleInputPassword1">Password <strong class="strong">******************</strong></p>
        <p for="exampleInputFile">Subir cédula profesional <strong class="strong">ABCDEF1234567UIOERFD</strong></p>
        <p for="exampleInputEmail1">Datos adicionales <strong class="strong">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusamus aperiam at atque consectetur debitis dolores doloribus ducimus, eligendi esse impedit, mollitia natus officia optio quos sequi tenetur voluptatibus voluptatum!</strong></p>
    </div>
</main>
<footer class="text-center navbar-fixed-bottom bg-primary-dark">
    <h4>Instituto Politécnico Nacional - ESCOM</h4>
</footer>
</body>
</html>