<?php
	require_once 'autoload.php';

	if ($_POST) {
		$actorToSave = new Actor($_POST['id'], $_POST['nombre'], $_POST['apellido']);

		$actorToSave->setEdad($_POST['edad']);

		$saved = DB::saveActor($actorToSave);
	}

	$pageTitle = 'Agregar actor';
	require_once 'partials/head.php';
	require_once 'partials/navbar.php';
?>

		<div class="container">
			<div class="row justify-content-center">
				<div class="col-10">
					<h2>Agregar actor</h2>
					<form method="post">
						<div class="row">
							<div class="col-6">
								<div class="form-group">
									<label>ID:</label>
									<input type="text" class="form-control" placeholder="ID = DNI N°" name="id">
								</div>
							</div>
							<div class="col-6">
								<div class="form-group">
									<label>Nombre:</label>
									<input type="text" class="form-control" placeholder="Ej: Maria" name="nombre">
								</div>
							</div>
							<div class="col-6">
								<div class="form-group">
									<label>Apellido:</label>
									<input type="text" class="form-control" placeholder="Ej: Pérez" name="apellido">
								</div>
							</div>
							<div class="col-6">
								<div class="form-group">
									<label>Edad:</label>
									<input type="number" class="form-control" placeholder="Ej: 44" name="edad">
								</div>
							</div>
							<div class="col-6">
								<div class="form-group">
									<label>Película favorita</label>
									<select class="form-control" name="movie_id">
										<option value="">Elegí una película</option>
										<?php foreach ($movies as $movie): ?>
											<option value="<?php echo $movie->getID() ?>"><?php echo $movie->getTitle() ?></option>
										<?php endforeach; ?>
									</select>
								</div>
							</div>
							<div class="col-12 text-center">
								<button type="submit" class="btn btn-primary">GUARDAR</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<?php if (isset($saved)): ?>
				<div
					class="alert <?php echo $saved ? 'alert-success' : 'alert-danger'?>"
				>
					<?php echo $saved ? '¡Actor generado con éxito!' : '¡No se pudo generar el actor!' ?>
				</div>
			<?php endif; ?>
		</div>
	</body>
</html>
