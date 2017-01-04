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
    <main>
        <div class="row">
            <div class="col-md-4 col-md-offset-4 margin-top-100">
                <h2>Iniciar sesión</h2>
                <form class="">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Dirección de correo</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Contraseña</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña">
                    </div>
                    <div class="checkbox text-center">
                        <label class="">
                            <input type="checkbox"> Recordar contraseña
                        </label>
                    </div>
                    <div class="text-center">
                        <a href="{{ url('/admin') }}" class="btn btn-danger text-center">Iniciar sesión administrador</a>
                        <a href="{{ url('/medico') }}" class="btn btn-success text-center">Iniciar sesión médico</a>
                        <a href="{{ url('/paciente') }}" class="btn btn-primary text-center">Iniciar sesión paciente</a>
                    </div>
                </form>
                <hr class="bg-primary">
                <a href="{{ url('/reset') }}" class="btn btn-block btn-link text-center">Restablecer contraseña</a>
            </div>
        </div>
    </main>
    <footer class="text-center navbar-fixed-bottom bg-primary-dark">
            <h4>Instituto Politécnico Nacional - ESCOM</h4>
    </footer>
</body>
</html>