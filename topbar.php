<head>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/barrsup.css">
</head>
<?php
    session_start();
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand me-2" href="./">
            <img
            src= "https://www.pngkey.com/png/full/314-3143637_your-guide-to-machine-learning-machine-learning.png"
            height="75"
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
                <div class="nav_list" > <a href="./ListUsers.php" class="navbar-brand"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Users</span> </a></div>
            </ul>
            <div class="col-auto"">
                <!--Button for modal-->
                <?php
                    if(isset($_SESSION['loged'])) {
                        if($_SESSION['loged']) {
                            // Logout Button
                            echo("<button type='button' class='btn btn-primary' onclick=\"location.href='./ResultLogUser.php'\"> Log Out </button>");   
                        } else {
                            echo("<button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#loginModal'> Sign In  </button>");
                            include ("./LogUser.html"); // Login Modal
                        }
                    } else {
                        $_SESSION['loged'] = false;
                        echo("<button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#loginModal'> Sign In </button>");
                        include ("./LogUser.html"); // Login modal
                    }
                ?>  
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registerModal">
                    Register
                </button>
                <!--Modal-->
                <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog"  style="margin-top: 5%;">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="registerModalLabel">Sign Up User</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <?php
                                    include "CreateUser.html";
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