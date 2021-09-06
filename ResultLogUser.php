<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>User Login - CRUDLearn</title>
    </head>
    <body>
        <?php

        require __DIR__ . '/vendor/autoload.php';
        use App\UserDao;
        include ('topbar.php') ?>
        
        <center>
            <div style="margin-top: 20%;">
            <?php
                if(isset($_POST['email'])) {
                    $email = $_POST['email'];
                    $password = $_POST['password']; 
                }
                if($_SESSION['loged']) {
                    $_SESSION['loged'] = false;
                    echo "<h1>Sucessfull Logout</h1>";
                } else {    
                    $DAO = new UserDao;
                    $user = $DAO->search($email);
                    $real_pw = $user->GetPassword();
                    if($password == $real_pw) {
                        $_SESSION['loged'] = true;
                        echo "<h1>Succesfull Login</h1>";
                    }
                }
            ?>
            <button type="button" class="btn btn-primary mb-3"><a href="./">Go to home</a></button>
            <button type="button" class="btn btn-primary mb-3"><a href="./ListUsers.php">Go to list</a></button>
            </div>
        </center>
    </body>
</html>
