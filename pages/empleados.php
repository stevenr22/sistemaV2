<?php
session_start();
if(isset($_SESSION['DBid'])==false) header("location:../index.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <?php include("../pages/partes/heads.php");?>
</head>
<body>
    <?php include("../pages/partes/menu.php");?>
    <div id="layoutSidenav">
            <?php include("../pages/partes/pag.php");?>


            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Empleados registrados</h1>
                       
                   
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card mb-4">
                                    <div class="card-header">TABLA DE DATOS</div>
                                    <div class="card-body">
                                    <div class="panel panel-success">
                                
                                    <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead class="bg-warning">
                                                <tr>
                                                    <th>ID</th>
                                                    <th>NOMBRES</th>
                                                    <th>APELLIDOS</th>
                                                    <th>NOMBRE DE USUARIO</th>
                                                    <th>OPCIONES</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            $sentencia = "select * from usuario where estado=1";
                                            $respuesta = $db->query($sentencia);
                                            while($arreglo = $respuesta->fetch_array()){
                                            ?>

                                                <tr class="odd gradeX">
                                                    <td><?php echo $arreglo['id_usuario'] ?></td>
                                                    <td><?php echo $arreglo['nombre'] ?></td>
                                                    <td><?php echo $arreglo['apellido'] ?></td>
                                                    <td><?php echo $arreglo['nomb_usuario'] ?></td>
                                                    <td class="center">
                                                        <button type="button" class="btn btn-warning" onclick="modalcito_aparece('<?php echo $arreglo['id_usuario']; ?>','<?php echo $arreglo['nombre']; ?>','<?php echo $arreglo['apellido']; ?>', '<?php echo $arreglo['nomb_usuario']; ?>')">ACTUALIZAR</button>
                                                        <button type="button" class="btn btn-danger" onclick="eliminar('<?php echo $arreglo['id_usuario']; ?>')">ELIMINAR</button>
                                                    </td>
                                                </tr>

                                            <?php } ?>

                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->

                                </div>
                                <!-- /.panel-body -->
                            </div>
                                    </div>
                                    
                                </div>
                                
                            </div>
                            <!--Datos del empleado-->
                        </div>
                       
                    </div>
                </main>
                
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="../js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>

<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    
    
</body>
</html>