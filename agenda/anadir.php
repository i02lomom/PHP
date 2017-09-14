<?php
	session_start();

	include 'includes/header.php';
	include 'includes/body.php';

	//$contacto=array();

	if(!isset($_POST['anadir']))
		header("Location: index.php");

	else{?>

		<form method="post" action="procNuevo.php">
			<label>Nombre</label>
			<input type="text" name="nombre"></br></br>
			<label>Teléfono</label>
			<input type="tel" name="telefono"></br></br>
			<input type="submit" name="enviar" value="Añadir">
		</form>
		</br>
		<form method="post" action="index.php">
			<input type="submit" name="volver" value="Volver">
		</form>
	<?php
	}

	include 'includes/footer.php';
?>