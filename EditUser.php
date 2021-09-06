<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Edit User - CRUDLearn</title>
</head>
<body>
	<?php 
		include "./topbar.php";
		require __DIR__ . "/vendor/autoload.php";
		use App\UserDao;				
	?>
	
	<div class="height-100" style="margin-left: 25%; width: 50%;">
		<form class="row g-3" action="ResultEditUser.php" method="POST">
			<?php
				$DAO = new UserDao();
				$id = $_GET['id'];
				$user = $DAO->read($id);
			?>
			<!-- Aqui se generan los campos de texto, el placeholder esta puesto de forma que mostrara el dato anterior a la actualizacion -->
			<div class='mb-3'> 
				<label class='form-label'>User</label> 
				<input type='text' class='form-control' value='<?php echo($user->GetUsername()); ?>' name='username'> 
			</div>
			<div class='mb-3'> 
				<label class='form-label'>Password</label> 
				<input type='password' class='form-control' value='<?php echo($user->GetPassword()); ?>' name='password'> 
			</div>
			<div class='mb-3'> 
				<label class='form-label'>Name</label> 
				<input type='text' class='form-control' value='<?php echo($user->GetName()); ?>' name='nombre'> 
			</div>
			<div class='mb-3'> 
				<label class='form-label'>E-Mail</label> 
				<input type='text' class='form-control' value='<?php echo($user->GetEmail()); ?>' name='correo'> 
			</div>
			<div class='mb-3'> 
				<label class='form-label'>Phone</label> 
				<input type='text' class='form-control' value='<?php echo($user->GetPhone()); ?>' name='telefono'> 
			</div>
			<center>
				<div class="col-auto">
					<input type="submit" class="btn btn-primary mb-3" value="Actualizar">
				</div>
			</center>
		</form>
	</div>
</body>
</html>