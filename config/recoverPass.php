<?php
    include('conex.php');
    if(isset($_POST['btn_buscar'])){
        $clave = 0;
        $email = $_POST['emailRecover'];
        $sql_consult = "SELECT * FROM account where email ='$email'";
        $resultado = mysqli_query($conex,$sql_consult);
        while($consulta = mysqli_fetch_array($resultado)){
            $id_cuenta = $consulta['id_cuenta'];
            $usuario = $consulta['usuario'];
            $claveDB =  $consulta['clave'];
            $emailDB = $consulta['email'];
        }
    }

    ?>



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
    <section class="contenedorRecover">
        <div class="card card-body ">
            <div class="card-body">
                <form action="recoverPass.php" method="post">
                    <h4 class="titulo_registrar">RRECUPERAR CONTRASEÑA</h4>
                    <hr>

                    <div class="form-floating ">
                        <input type="Email" class="form-control" id="floatingInput" placeholder="Correo Electrónico"
                            name="emailRecover" require>
                        <label for="floatingInput">Ingresa tu correco electrónico</label>
                    </div>
                    <br>
                    <div clas="boton_registro ">
                        <input class="btn btn-primary btn-mid " type="submit" name="btn_buscar" value="BUSCAR">
                    </div>
                    <label for="floatingInput">
                            <?php 
                                                           
                            ?>
                        </label>
                    <h3>Nueva contraseña</h3>
                    <div class="form-floating">

                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <br>
                    <div clas="boton_registro ">
                        <input class="btn btn-primary btn-mid" type="submit" name="register_" value="Guardar">
                    </div>
                </form>

            </div>
        </div>
    </section>
</body>

</html>
<?php
?>