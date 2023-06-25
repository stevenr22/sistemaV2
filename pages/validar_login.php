<?php

include("../bd/conexion.php");
session_start();

$usu = $_POST["Nusu"];
$contra = $_POST["Ncontra"];


//FALTA REALIZAR EL LOGIN CON LOS RESPECTIVOS ROLES
$sentencia = "select * from usuario where nomb_usu='$usu' and contra='$contra'";
$respuesta = $db->query($sentencia);
$fila = mysqli_fetch_array($respuesta);
if($fila['id_cargo']==1){ //administrador
    $_SESSION['DBid_usuario'] = $fila['id'];
    $_SESSION['DBnombusu'] = $fila['nomb_usu'];


    header("location:index.php");

}else
if($fila['id_cargo']==2){ //gerente
    $_SESSION['DBid_usuario'] = $fila['id'];
    $_SESSION['DBnombusu'] = $fila['nomb_usu'];
    header("location:index2.php");
}else
if($fila['id_cargo']==3){ //gerente
    $_SESSION['DBid_usuario'] = $fila['id'];
    $_SESSION['DBnombusu'] = $fila['nomb_usu'];
    header("location:index3.php");
}else{
    ?>
    <?php
    include("../pages/login.html");
    ?>
    <script>
        Swal.fire({
        title: "ERROR DE AUTENTIFICACIÓN!",
        icon: 'error'
    })
    </script>
    
    <?php
}
mysqli_free_result($respuesta);
mysqli_close($db);
?>