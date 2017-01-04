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
            <a href="{{ url('/medicos/') }}" class="ripple">
                {{--<em class="glyphicon glyphicon-book"></em>--}}
                <span>Gestion médicos</span>
            </a>
        </li>
        <li class="li-nav">
            <a href="{{ url('/repertorio/') }}" class="ripple">
                {{--<span class="glyphicon glyphicon-film"></span>--}}
                <span>Gestionar repertorio</span>
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
    <div class="jumbotron bg-transparent">
        <div class="container">
            <h1>Bienvenido Administrador</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus dolorem, ea fuga ipsum minus mollitia nemo nihil perspiciatis possimus, reiciendis rerum voluptates. Aspernatur aut enim labore minima minus mollitia voluptatum!</p>
        </div>
    </div>
</main>
<footer class="text-center navbar-fixed-bottom bg-primary-dark">
    <h4>Instituto Politécnico Nacional - ESCOM</h4>
</footer>
</body>
</html>