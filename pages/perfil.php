
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
                        <h1 class="mt-4">Perfil</h1>
                       
                   
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card mb-4">
                                    <div class="card-header">DATOS EMPLEADOS</div>
                                    <div class="card-body">
                                    <div class="panel panel-success">
                                
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <form role="form" method="post" action="guardaris.php" id="formito">

                                                <div class="form-group">
                                                    <label>Nombre</label>
                                                    <input class="form-control" type="text" name="nombre" id="nombre" placeholder="Ingrese el nombre y el apellido">
                                                </div>

                                                <div class="form-group">
                                                    <label>Cédula</label>
                                                    <input class="form-control" type="text" name="ced" id="ced" placeholder="Ingrese cédula">
                                                </div>

                                                <div class="form-group">
                                                    <label>Correo</label>
                                                    <input class="form-control" type="email" name="correo" id="correo" placeholder="Ingrese el correo">
                                                </div>

                                                <div class="form-group">
                                                    <label>Dirección</label>
                                                    <input class="form-control" type="text" name="dir" id="dir" placeholder="Ingrese la dirección">
                                                </div>

                                                <div class="form-group">
                                                    <label>Ciudad</label>
                                                    <select class="form-control" name="ciudad" id="ciudad">
                                                        <option value="1">GYE</option>
                                                        <option value="2">UIO</option>
                                                        <option value="3">CUM</option>
                                                        <option value="4">ESM</option>
                                                        <option value="5">MAN</option>
                                                    </select>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Usuario</label>
                                                            <input class="form-control" type="text" name="usu" id="usu" placeholder="Ingrese el usuario">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Contraseña</label>
                                                            <input class="form-control" type="password" name="pass" id="pass" placeholder="Ingrese la contraseña">
                                                        </div>
                                                    </div>
                                                </div>

                                                <button type="submit" class="btn btn-success">Guardar Registro</button>
                                                <button type="reset" class="btn btn-info">Limpiar Datos</button>
                                            </form>
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->


                                    </div>
                                    <!-- /.row (nested) -->
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