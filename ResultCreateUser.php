<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ingreso Usuario - CRUDLearn</title>
    </head>
    <body>
        <?php
        require __DIR__ . '/vendor/autoload.php';

		use App\User;
		use App\UserDao;
        include ('topbar.php') ?>
        
        <center>
            <div style="margin-top: 20%;">
            <!-- Se condiciona si hay un usuario logeado ya -->
            <?php
                $username = $_POST['username'];
                $password = $_POST['password'];
                $name = $_POST['name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];

                $user = new User(null, $username, $password, $name, $email, $phone);

                $DAO = new UserDao();
				$result = $DAO->create($user);

				echo("$result");
            ?>
            <h3>Vuelve a inicio o a la lista de usuarios</h3> <br>
            <button type="button" class="btn btn-primary mb-3"><a href="./">Volver A Inicio</a></button>
            <button type="button" class="btn btn-primary mb-3"><a href="./ListUsers.php">Volver A Lista</a></button>
            </div>
        </center>
    </body>
</html>
