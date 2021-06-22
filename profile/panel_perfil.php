<?php
    include('../config/conex.php');
    session_start();
    $varsesion = $_SESSION['usuario'];
    if($varsesion == null || $varsesion = ""){
        header("location:../index.php");
        die();
    }
?>

<?php
	include_once 'conexion.php';

	$sentencia_select=$con->prepare('SELECT *FROM clientes ORDER BY id DESC');
	$sentencia_select->execute();
	$resultado=$sentencia_select->fetchAll();

	// metodo buscar
	if(isset($_POST['btn_buscar'])){
		$buscar_text=$_POST['buscar'];
		$select_buscar=$con->prepare('
			SELECT *FROM clientes WHERE nombre LIKE :campo OR apellidos LIKE :campo;'
		);

		$select_buscar->execute(array(
			':campo' =>"%".$buscar_text."%"
		));

		$resultado=$select_buscar->fetchAll();

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

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
    <header>
    
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar navbar-dark bg-dark">
            <div class="container">
                <h4 class="navbar-brand"> PANEL DE USUARIO</h4>
                <div class="btn-group">
                    <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Menú
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="index.php">Inicio</a></li>
                        <li><a class="dropdown-item" href="#">Configuraciones</a></li>
                        <li><a class="dropdown-item" href="#">About</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="../config/logout.php">Cerrar Sesión</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section>
        <div class="card text-center">
            <div class="card-header">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                            type="button" role="tab" aria-controls="home" aria-selected="true">CUENTA</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                            type="button" role="tab" aria-controls="profile" aria-selected="false">PERFIL</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact"
                            type="button" role="tab" aria-controls="contact" aria-selected="false">CONTACTO</button>
                    </li>
                </ul>
                <?php
                $varsesion = $_SESSION['usuario'];
                $sql_Consult= "SELECT * FROM account WHERE usuario = '$varsesion'";
                $resulado_sql = mysqli_query($conex,$sql_Consult);
                while($consulta = mysqli_fetch_array($resulado_sql)){
                    $id_cuenta = $consulta['id_cuenta'];
                    $id_acceso = $consulta['id_acceso'];
                    $usuario = $consulta['usuario'];
                    $claveDB =  $consulta['clave'];
                    $emailDB = $consulta['email'];
                    $fecha_Creacion = $consulta['fecha_create'];
                }
                ?>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active cuadro" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="card-body">
                            <h5>Bienvenido</h5>
                            <div class="card mb-3 todo_cart" style="max-width: 540px;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="img/logo_perfil.png" class="foto_panel" width="190px">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h4 class="card-title">Datos de la cuenta:</h4>
                                            <h6 class="card-title"> Nivel de cuenta: <br>
                                                <small class="text-muted"><?php if ($id_acceso==3){
                                                    echo 'ADMINISTRADOR';
                                                }elseif ($id_acceso==2) {
                                                    echo 'EMPLEADO';
                                                }elseif ($id_acceso==1) {
                                                    echo 'CLIENTE';
                                                } ?></small>
                                            </h6>
                                            <h6 class="card-title"> Nombre de usuario: <br> <small
                                                    class="text-muted"><?php echo $usuario ?></small></h6>
                                            <h6 class="card-title"> Correo electrónico: <br> <small
                                                    class="text-muted"><?php echo $emailDB ?></small></h6>
                                            <h6 class="card-title"> Fecha de creación: <br> <small
                                                    class="text-muted"><?php echo $fecha_Creacion; ?></small></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="contenedor">
		<h2>PANEL DE USUARIO</h2>
		<div class="barra__buscador">
			<form action="" class="formulario" method="post">
				<input type="text" name="buscar" placeholder="buscar nombre o apellidos" 
				value="<?php if(isset($buscar_text)) echo $buscar_text; ?>" class="input__text">
				<input type="submit" class="btn" name="btn_buscar" value="Buscar">
				<a href="insert.php" class="btn btn__nuevo">Nuevo</a>
			</form>
		</div>
		<table>
			<tr class="head">
				<td>Id</td>
				<td>Nombre</td>
				<td>Apellidos</td>
				<td>Teléfono</td>
				<td>Ciudad</td>
				<td>Correo</td>
				<td colspan="2">Acción</td>
			</tr>
			<?php foreach($resultado as $fila):?>
				<tr >
					<td><?php echo $fila['id']; ?></td>
					<td><?php echo $fila['nombre']; ?></td>
					<td><?php echo $fila['apellidos']; ?></td>
					<td><?php echo $fila['telefono']; ?></td>
					<td><?php echo $fila['ciudad']; ?></td>
					<td><?php echo $fila['correo']; ?></td>
					<td><a href="update.php?id=<?php echo $fila['id']; ?>"  class="btn__update" >Editar</a></td>
					<td><a href="delete.php?id=<?php echo $fila['id']; ?>" class="btn__delete">Eliminar</a></td>
				</tr>
			<?php endforeach ?>

		</table>
	</div>
                    
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>