<?php
session_start();

?>
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html">Sistema Web</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                        <?php echo $_SESSION['DBnombre'];  ?><i class="fas fa-user fa-fw"></i></a>
                    
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="../pages/perfil.php">Perfíl</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../pages/cerrar_sesion.php">Salir</a>
                    </div>
                </li>
            </ul>
        </nav>
        
