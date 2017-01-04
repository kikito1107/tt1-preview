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
            <a href="/profile" class="ripple">
                {{--<em class="glyphicon glyphicon-book"></em>--}}
                <span>Gestion médicos</span>
            </a>
        </li>
        <li class="li-nav">
            <a href="/provider" class="ripple">
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
        <h2>Agregar nuevo médico </h2>
        <hr>
        <form>
            <div class="form-group">
                <label for="exampleInputEmail1">Nombre</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nombre">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Dirección</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="calle #1 col. ejemplo">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Correo electrónico</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="ejemplo@mail.com">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Teléfono</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="55555555">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="exampleInputFile">Subir cédula profesional</label>
                <input type="file" id="exampleInputFile">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Datos adicionales</label>
                <textarea class="form-control" placeholder="Descripción de la carrera del médico homeopático."></textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Agregar</button>
            </div>
        </form>
    </div>
</main>
<footer class="text-center navbar-fixed-bottom bg-primary-dark">
    <h4>Instituto Politécnico Nacional - ESCOM</h4>
</footer>
</body>
</html>