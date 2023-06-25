
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
                        <h1 class="mt-4">DATOS</h1>
                       
                   
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card mb-4">
                                    <div class="card-header">DATOS DE LOS EMPLEADOS</div>
                                    <div class="card-body">
                                    <div class="panel panel-success">
                                
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead class="bg-warning">
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Nombre</th>
                                                    <th>Apellido</th>
                                                    <th>Nombre de usuario</th>
                                                    <th>Rol</th>
                                                    <th>Opciones</th>
                                               
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <!--FALTA AGG INFO DE LOS EMPELADOS-->

                                            </tbody>
                                            </table>
                                        </div>
                                      


                                    </div>
                             
                                </div>
                             
                            </div>
                                    </div>
                                    
                                </div>
                                
                            </div>
                          
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