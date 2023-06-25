<?php
// Establecer la conexión con la base de datos MySQL
include("../bd/conexion.php");
// Verificar la conexión
if ($db->connect_error) {
    die("Error de conexión: " . $db->connect_error);
}
// Verificar si se ha enviado el formulario de cambio de contraseña
if (isset($_POST['submit'])) {
    // Obtener los datos proporcionados por el usuario
    $userId = $_POST['nombre_usuario'];
    $currentPassword = $_POST['current_password'];
    $newPassword = $_POST['new_password'];
    $confirmPassword = $_POST['confirm_password'];

    // Verificar que la nueva contraseña y la confirmación coincidan
    if ($newPassword !== $confirmPassword) {
    
        ?>
        <?php
        include("login.html");
        ?>
        <script>
            Swal.fire({
            title: "La nueva contraseña y la confirmación no coinciden!",
            icon: 'warning'
        })
        </script>
        
        <?php
    } else {
        // Verificar que la contraseña actual sea correcta para el usuario y su rol
        $sql = "select * from usuario where nomb_usu = '$userId' and contra = '$currentPassword'";
        $result = $db->query($sql);

        if ($result->num_rows == 1) {
            // Actualizar la contraseña en la base de datos
            $sql = "update usuario set contra = '$newPassword' where nomb_usu = '$userId'";
            if ($db->query($sql) === TRUE) {
                ?>
                <?php
                include("login.html");
                ?>
                <script>
                    Swal.fire({
                    title: 'Cambio exitoso, redireccionando....',
                    text: 'Serás redirigido a iniciar sesión',
                    icon: 'success',
                    timer: 4000, // Duración del SweetAlert en milisegundos (2 segundos en este ejemplo)
                    showConfirmButton: false
                }).then(function() {
                    // Redirigir al archivo deseado después de que se cierre el SweetAlert
                    window.location.href = 'login.html';
                });
                </script>
                
                <?php
            } else {
            
                ?>
                <?php
                include("login.html");
                ?>
                <script>
                    Swal.fire({
                    title: "Error al cambiar la contraseña!"<?php $db->error;?>,
                    icon: 'error'
                })
                </script>
                
                <?php
               
            }
        } else {
            ?>
            <?php
            include("login.html");
            ?>
            <script>
                Swal.fire({
                title: "La contraseña actual es incorrecta!",
                icon: 'error'
            })
            </script>
            
            <?php
        }
    }
}
// Cerrar la conexión
$db->close();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Recuperar</title>

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link rel="icon" href="../img/mango-and-lef-png.ico" type="image/ico" />
    <script src="https://kit.fontawesome.com/0adef27e98.js" crossorigin="anonymous"></script>

</head>
<body>
<div class="container">

    <div class="card col-lg-3">
        <div class="header">
            <img src="../img/usuario.png">
            <h1><b>Cambiar contraseña</b></h1>
        </div><br>

        <form method="post" action="">
            <div class="form-group">
                <label><b>Nombre de suario:</b> </label>
                <input id="usuario" name="nombre_usuario" class="form-control" type="text" placeholder="Ingrese su usuario">
            </div>

            <div class="form-group">
                <label><b>Contraseña actual:</b></label>
                <div class="box-eye">
                    <button type="button" onclick="mostrarcontraseña('contraseña1','eyecontra1')">
                        <i id="eyecontra1" class="fa-solid fa-eye changecontra"></i>
                    </button>
                </div>
                <input id="contraseña1" name="current_password" class="form-control" type="password" placeholder="Ingrese su contraseña actual">
            </div>

            <div class="form-group">
                <label><b>Nueva contraseña:</b></label>
                <div class="box-eye">
                    <button type="button" onclick="mostrarcontraseña('contraseña2','eyecontra2')">
                        <i id="eyecontra2" class="fa-solid fa-eye changecontra"></i>
                    </button>
                </div>
                <input id="contraseña2" name="new_password" class="form-control" type="password" placeholder="Ingrese su contraseña actual">
            </div>

            <div class="form-group">
                <label><b>Confirmar contraseña:</b></label>
                <div class="box-eye">
                    <button type="button" onclick="mostrarcontraseña('contraseña3','eyecontra3')">
                        <i id="eyecontra3" class="fa-solid fa-eye changecontra"></i>
                    </button>
                </div>
                <input id="contraseña3" name="confirm_password" class="form-control" type="password" placeholder="Ingrese su contraseña actual">
            </div><br>
        
            <button type="submit" class="btn btn-success"name="submit">Cambiar contraseña</button>
            <br>
            <a id="efecto" href="login.html">
                    <b>Cancelar - ir a iniciar sesión</b>
            </a>

        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="../js/misvalidaciones.js"></script>

</body>
</html>
