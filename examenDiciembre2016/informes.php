<?php
	session_start();
	include 'includes/header.php';
	include 'includes/body.php';
    include 'funciones/funciones.php';

    if(!isset($_POST['informes']))
		header("Location: index.php");

	else{?>
		<div id="cajaEnLinea">
		<form method="post" action="informeDelAno.php">
			<label>Año: </label>
			<input type="number" name="ano"></br></br>
			<input type="submit" class="btn btn-primary" name="consultarAno" value="Buscar">	
		</form>
		
		
		<form method="post" action="index.php">
			<input type="submit" class="btn btn-primary" name="volver" value="Volver">
		</form>
		</div><?php
	}

    include 'includes/footer.php';
?>