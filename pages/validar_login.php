<?php

include("../bd/conexion.php");
session_start();

$usu = $_POST["Nusu"];
$contra = $_POST["Ncontra"];

$band = false;
//FALTA REALIZAR EL LOGIN CON LOS RESPECTIVOS ROLES
$sentencia = "select * from usuario where nomb_usuario='$usu' and contraseña='$contra'";
$respuesta = $db->query($sentencia);
while($fila = $respuesta->fetch_array()){
    $_SESSION['DBid'] = $fila['id_usuario'];
    $_SESSION['DBnombusu'] = $fila['nomb_usuario'];
 
    $band = true;
}

if ($band) header("location:index.php"); //SI TODO ESTA BIEN VAL DASHBOARD
elseif(empty($usu) || empty($contra)){ //PERMITE VERIFICAR SI LOS CAMPOS ESTAN VACIOS
    ?>
    <?php
    include("../pages/login.html");
    ?>
    <script>
        Swal.fire({
        title: "CAMPOS VACIOS!",
        icon: 'warning'
    })
    </script>
    
    <?php

}else{ //VERIFICA SI LOS DATOS ESTAN INCORRECTOS
    ?>
    <?php
    include("../pages/login.html");
    ?>
    <script>
        Swal.fire({
        title: "DATOS INCORRECTOS!",
        icon: 'error'
    })
    </script>
    
    <?php
}

?>