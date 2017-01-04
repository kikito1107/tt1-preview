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
        <div class="col-md-7">
            <h2>Citas agendadas del día <b>dd-mm-aaa</b></h2>
            <table class="table table-hover table-bordered">
                <thead>
                <tr>
                    <th>Número</th>
                    <th>Nombre</th>
                    <th>Horario</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th>1</th>
                    <th>Ramírez González Enrique Saúl</th>
                    <th>9:00</th>
                    <th class="text-center">
                        <a href="{{ url('/medicos/ver') }}" class="btn btn-success">Ver</a>
                    </th>
                </tr>
                <tr>
                    <th>2</th>
                    <th>Martínez López Francisco Javier</th>
                    <th>13:00</th>
                    <th class="text-center">
                        <a href="{{ url('/medicos/ver') }}" class="btn btn-success">ver</a>
                    </th>
                </tr>
                </tbody>
            </table>
        </div>
        <div style="overflow:hidden;">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-5">
                        <div id="datetimepicker12"></div>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                $(function () {
                    $('#datetimepicker12').datetimepicker({
                        inline: true,
                        sideBySide: true
                    });
                });
            </script>
        </div>
    </div>
</main>
<footer class="text-center navbar-fixed-bottom bg-primary-dark">
    <h4>Instituto Politécnico Nacional - ESCOM</h4>
</footer>
</body>
</html>