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
    <div class="bg-info">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-1">
                <a href="{{ url('/') }}" class="btn btn-link">Inicio</a>
            </div>
        </div>
    </div>
    <main>
        <div class="row">
            <div class="col-md-4 col-md-offset-4 margin-top-100">
                <h2>Recuperar contraseña</h2>
                <form class="">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Dirección de correo</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary text-center">Restablecer</button>
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