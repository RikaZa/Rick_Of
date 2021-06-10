<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>INICIO</title>
    <link rel="stylesheet" href="../style/style.css">
</head>

<body class="gb_registrar">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar navbar-dark bg-dark">
            <div class="container ">
                <h4 class="navbar-brand justify-content-center">CREAR CUENTA</h4>
                <a href="../index.php"> <button type="button" class="btn btn-success btn btn-outline-light"> Iniciar
                        Sesión </button></a>
        </nav>
    </header>
    <section class="contine_registro">
        <div class="card">
            <div class="card-body">
                <form action="validar.php" method="post">
                    <h4 class="titulo_registrar">REGÍSTRATE</h4>
                    <hr>
                    <div class="row g-2">
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="floatingInputGrid"
                                    placeholder="email@example.com" name="email" require>
                                <label for="floatingInputGrid">Correo Electrónico</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInputGrid"
                                    placeholder="name@example.com" name="usuario" require>
                                <label for="floatingInputGrid">Nombre de Usuario</label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingInput"
                            placeholder="Ingresa tu contraseña" name="clave" require>
                        <label for="floatingInput">Ingresa tu contraseña</label>
                    </div>
                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck" require>
                            <label class="form-check-label" for="gridCheck">
                                Acepto términos y condiciones.
                            </label>
                        </div>
                    </div>
                    <br>
                    <div clas="boton_registro">
                        <input class="btn btn-primary" type="submit" name="register_" value="REGISTRAR">
                    </div>
                    <div class="mb-3 posi_chek">
                        <a href="#">¿Olvidaste tu contraseña?</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

</html>