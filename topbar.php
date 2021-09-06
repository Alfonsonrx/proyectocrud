<head>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/barrsup.css">
</head>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand me-2" href="./">
            <img
            src="./img/machine-learning-logo-png.jpg"
            height="50"
            alt=""
            loading="lazy"  
            />
        </a>
        <a class="navbar-brand" href="./">CRUDphp</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <div class="nav_list" > <a href="./ListarUsuarios.php" class="navbar-brand"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Usuarios</span> </a></div>
            </ul>
            <div class="col-auto">
                <!--Button for modal-->
                <?php
                    
                ?>
                <button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#loginModal'> Ingresar </button>
                <!--Login Modal-->
                <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog"  style="margin-top: 10%;">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="loginModalLabel">Ingresar como Usuario</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <?php include ("./ingresarUsuario.php");?>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--Button for modal-->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registrarModal">
                    Registrar
                </button>
                <!--Modal-->
                <div class="modal fade" id="registrarModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog"  style="margin-top: 5%;">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="registrarModalLabel">Registrar Usuario</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <?php
                                    include "CreateUser.php";
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</nav>

<footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</footer>