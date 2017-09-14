<?php
	session_start();

	include 'includes/header.php';
	include 'includes/body.php';

	//$contacto=array();

	if(!isset($_POST['anadir']))
		header("Location: home.php");

	else{?>

		<form method="post" action="procNuevo.php">
			<label>Nombre</label>
			<input type="text" name="nombre">
			<label>Teléfono</label>
			<input type="tel" name="telefono">
			<input type="submit" name="enviar" value="Añadir">
		</form>
	<?php
	}

	include 'includes/footer.php';
?>