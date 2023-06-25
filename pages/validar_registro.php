<?php 
include("../bd/conexion.php");

if (isset($_POST['btnregistro'])) {
    if (strlen($_POST['Nusu']) >= 1 && strlen($_POST['Ncontra']) >= 1) {
	    $usu = trim($_POST['Nusu']);
	    $contra = trim($_POST['Ncontra']);
	
	    $consulta = "INSERT INTO usuario(nomb_usuario, contraseña) VALUES ('$usu','$contra')";
	    $resultado = mysqli_query($db,$consulta);
        if ($resultado) {
            ?>
            <?php
            include("../pages/registro.php");
            ?>
            <script>
                Swal.fire({
                title: "REGISTRO COMPLETADO!",
                icon: 'success'
            })
            </script>
            <?php
	    } else {
            ?>
            <?php
            include("../pages/registro.php");
            ?>
            <script>
                Swal.fire({
                title: "ERROR AL REGISTRARSE!",
                icon: 'error'
            })
            </script>
            <?php
	    	
	    }
    }else {
	    ?>
            <?php
            include("../pages/registro.php");
            ?>
            <script>
                Swal.fire({
                title: "COMPLETE LOS CAMPOS!",
                icon: 'warning'
            })
            </script>
            <?php
    }
}

?>