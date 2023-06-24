<?php
// Se utiliza para llamar al archivo que contine la conexion a la base de datos
include("../bd/conexion.php");
$db = DataBase::connect();
date_default_timezone_set("America/Guayaquil");
// Validamos que el formulario y que el boton registro haya sido presionado
if(isset($_POST['btnregistro'])) {

// Obtener los valores enviados por el formulario
$usu = $_POST['Nusu'];
$contra = $_POST['Ncontra'];
//VALIDAR CAMPOS VACIOS
if (empty($usu) || empty($contra)) {
    ?>
    <?php
    include("registro.html");
    ?>
    <script>
        Swal.fire({
        title: "CAMPOS VACIOS!",
        icon: 'warning'
    })
    </script>
    
    <?php
}else{

    // Insertamos los datos en la base de datos
    $sql = "INSERT INTO usuario (nomb_usuario, contraseña) 
    VALUES ('$usu', '$contra')";
    $resultado =  mysqli_query($db,$sql);
    if($resultado) {
        // Inserción correcta
        ?>
        <?php
        include("registro.html");
        ?>
        <script>
            Swal.fire({
            title: "DATOS REGISTRADOS CORRECTAMENTE!",
            icon: 'success'
        })
        </script>
            
        <?php
        }
    }
}

?>
