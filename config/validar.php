<?php
	include('conex.php');
    if(isset($_POST['signUp'])){
        $email = $_POST['email'];
        $clave = $_POST['clave'];
        $sql_consult = "SELECT * FROM account where email ='$email'AND clave = '$clave'";
        $resultado = mysqli_query($conex,$sql_consult);
        $VF = mysqli_num_rows($resultado);
        if($VF==0){
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
?>