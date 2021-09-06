<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Delete User - CRUDLearn</title>
    </head>
    <body>
        <?php 
        	include './topbar.php'; 
			require __DIR__ . '/vendor/autoload.php';
			use App\UserDao;
        ?>
        <center>
            <div style="margin-top: 20%;">
                <?php
                    $DAO = new UserDao;
                    $id = $_GET['id'];
					$result = $DAO->delete($id); 
                    echo("<h2> $result </h2>");
                ?>
                <button type="button" class="btn btn-primary mb-3"><a href="/">Go to home</a></button>
                <button type="button" class="btn btn-primary mb-3"><a href="./ListUsers.php">Go to users list</a></button>
            </div>
        </center>
    </body>
</html>
