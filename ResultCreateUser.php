<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Create User - CRUDLearn</title>
    </head>
    <body>
        <?php
        require __DIR__ . '/vendor/autoload.php';

		use App\User;
		use App\UserDao;
        include ('topbar.php') ?>
        
        <center>
            <div style="margin-top: 20%;">
            <?php
                $username = $_POST['username'];
                $password = $_POST['password'];
                $name = $_POST['name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];

                $user = new User(null, $username, $password, $name, $email, $phone);

                $DAO = new UserDao();
				$result = $DAO->create($user);

				echo("<h1> $result </h1>");
            ?>

            <button type="button" class="btn btn-primary mb-3"><a href="/">Go to home</a></button>
            <button type="button" class="btn btn-primary mb-3"><a href="./ListUsers.php">Go to users list</a></button>
            </div>
        </center>
    </body>
</html>
