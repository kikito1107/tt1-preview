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
        <h2>Gestión del repertorio médico</h2>
        <hr>
        <div class="col-md-4 bg-repertorio">
            <form>
                <h3>Agregar medicamento</h3>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nombre medicamento</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Aconitum">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nombre abreviado</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Aco">
                </div>
                <div class="row">&nbsp;</div>
                &nbsp;
                <div class="text-center">
                    <button type="submit" class="btn btn-default bg-primary-1 color-white">Agregar</button>
                </div>
                &nbsp;
                <div class="text-center">
                    <button type="submit" class="btn btn-default bg-primary-1 color-white">Modificar medicamento</button>
                </div>
            </form>
        </div>

        <div class="col-md-7 col-md-offset-1 bg-repertorio">
            <form>
                <h3>Agregar síntoma</h3>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nombre síntoma</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Dolor de cabeza">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Órgano asociado</label>
                    <select class="form-control">
                        <option>Cabeza</option>
                        <option>Corazón</option>
                        <option>Garganta</option>
                        <option>Ojos</option>
                        <option>Piernas</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Medicamentos asociados y ponderación</label>
                    <div class="row">
                        <div class="col-md-5">
                            <select class="form-control">
                                <option>Ab-c</option>
                                <option>Ab-n</option>
                                <option>Abro</option>
                                <option>Abs</option>
                                <option>Acaly</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <select class="form-control">
                                <option>3</option>
                                <option>2</option>
                                <option>1</option>
                                <option>0</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <button type="submit" class="btn btn-success ">Agregar lista</button>
                        </div>
                    </div>
                </div>
                <div class="row" style="overflow-x: scroll;overflow-y: hidden;height: 80px;white-space:nowrap">
                    <div class="col-md-12">
                        <ul class="ul-sin">
                            <li class="li-sin"><p >Ab-c</p></li>
                            <li class="li-sin"><p >Ab-n</p></li>
                            <li class="li-sin"><p >Abro</p></li>
                        </ul>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-default bg-primary-1 color-white">Agregar</button>
                </div>
                &nbsp;
                <div class="text-center">
                    <button type="submit" class="btn btn-default bg-primary-1 color-white">Modificar síntoma</button>
                </div>
            </form>
        </div>
    </div>
</main>
<footer class="text-center navbar-fixed-bottom bg-primary-dark">
    <h4>Instituto Politécnico Nacional - ESCOM</h4>
</footer>
</body>
</html>