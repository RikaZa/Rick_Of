<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Myog</title>
    <link rel="stylesheet" href="style/style.css">
</head>

<body class="BG_general">
    <div class="BG_CONTENIDO">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
        </script>
        <section class="cuerpo_login">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h2>INICIAR SESIÓN</h2>
                    <hr>
                    <form action="config/validar.php" method="post">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" name="email" >
                            <div id="emailHelp" class="form-text"></div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" name="clave">
                            </div>
                            <div class="mb-3 form-check">
                                <a href="config/registrar.php">¿Regístrate?</a><br>
                                <a href="#">¿Olvidaste tu contraseña?</a>
                            </div>
                            <input class="btn btn-primary" type="submit" name="signUp" value="INGRESAR">
                            <script src="alert.js"></script>
                    </form>
                </div>
        </section>
    </div>
</html>