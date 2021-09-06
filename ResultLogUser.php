<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ingreso Usuario - CRUDLearn</title>
    </head>
    <body>
        <?php

        require __DIR__ . '/vendor/autoload.php';
        use App\UserDao;
        include ('topbar.php') ?>
        
        <center>
            <div style="margin-top: 20%;">
            <!-- Se condiciona si hay un usuario logeado ya -->
            <?php
                if(isset($_POST['email'])) {
                    $email = $_POST['email'];
                    $password = $_POST['password']; 
                }
                if($_SESSION['loged']) {
                    // De estar logeado el sistema lo deslogea debido a que el boton estara como cerrar sesion
                    $_SESSION['loged'] = false;
                    echo "Has Deslogeado Exitosamente";
                } else {    
                    $DAO = new UserDao;
                    $user = $DAO->search($email);
                    $real_pw = $user->GetPassword();
                    if($password == $real_pw) {
                        $_SESSION['loged'] = true;
                        echo "<h1>Has Logeado Exitosamente</h1>";
                    }
                }
            ?>
            <h3>Vuelve a inicio o a la lista de usuarios</h3> <br>
            <button type="button" class="btn btn-primary mb-3"><a href="./">Volver A Inicio</a></button>
            <button type="button" class="btn btn-primary mb-3"><a href="./ListUsers.php">Volver A Lista</a></button>
            </div>
        </center>
    </body>
</html>
