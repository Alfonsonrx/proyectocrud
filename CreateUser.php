<form class="row g-3" action="ingresarDatos.jsp" method="get">
	<div class="mb-3">
		<label class="form-label">Nombre de Usuario</label>
		<input type="text" class="form-control" placeholder="Nombre de Usuario" name="username">
	</div>
	<div class="mb-3">
		<label class="form-label">Contraseña</label>
		<input type="password" class="form-control" placeholder="Contraseña" name="password">
	</div>
	<div class="mb-3">
		<label class="form-label">Nombre Real</label>
		<input type="text" class="form-control" placeholder="Nombre Real" name="nombre">
	</div>
	<div class="mb-3">
		<label class="form-label">Correo</label>
		<input type="text" class="form-control" placeholder="ejemplo@ejemplo.ej" name="correo">
	</div>
	<div class="mb-3">
		<label class="form-label">Telefono</label>
		<input type="text" class="form-control" placeholder="+56960006000" name="telefono">
	</div>
	<div class="col-auto">
		<input type="submit" class="btn btn-primary mb-3" value="Registrar">
		<button type="button" class="btn btn-secondary mb-3" data-bs-dismiss="modal">Close</button>
	</div>
</form>