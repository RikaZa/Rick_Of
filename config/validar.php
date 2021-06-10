<?php
	include('conex.php');
    if(isset($_POST['signUp'])){
        $email = $_POST['email'];
        $clave = $_POST['clave'];
        $sql_consult = "SELECT * FROM account where email ='$email'AND clave = '$clave'";
        $resultado = mysqli_query($conex,$sql_consult);
        $VF = mysqli_num_rows($resultado);
        if($VF<=0){
            ?>
<script src="alert/alert.js"></script>
<?php
        }else{
            while($consulta = mysqli_fetch_array($resultado)){
                $id_cuenta = $consulta['id_cuenta'];
                $usuario = $consulta['usuario'];
                $claveDB =  $consulta['clave'];
                $emailDB = $consulta['email'];
            }
            if($id_cuenta>=1 && $emailDB == $email && $claveDB == $clave){
                session_start();
                $_SESSION['usuario'] = $usuario;
                ?>
<script src="alert/wellcome.js"></script>
<?php
            }
        }
    }
    if (isset($_POST['register_'])){
        $_usuario = trim($_POST['usuario']);
        $_email = trim($_POST['email']);
        $_clave = trim($_POST['clave']);
        $sql_consult = "SELECT * FROM account where email ='$_email'";
        $resultado = mysqli_query($conex,$sql_consult);
        $VAF = mysqli_num_rows($resultado);
        if ($VAF<=0){
            $sql_registro = "INSERT INTO account (usuario,email,clave) VALUES ('$_usuario','$_email','$_clave') ";
            $resultado = mysqli_query($conex,$sql_registro);
            session_start();
                $_SESSION['usuario'] = $_usuario;
                ?>
<script src="alert/wellcome.js"></script>
<?php
        }else{
            ?>
<script src="alert/al_regist.js"></script>
<?php
        }
    }
?>