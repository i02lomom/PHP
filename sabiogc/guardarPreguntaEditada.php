<?php
	session_start();
	require_once 'clases/pregunta.php';
	include 'includes/header.php';
	include 'includes/body.php';

	if(!isset($_POST['enviar'])){
		header("Location: index.php");
	}

	else{
		if(empty($_POST['pregunta'])){
			echo "<h2>No se ha podido editar</h2><br/>";
			echo "<h5>El campo está vacío</h5><br/>";?>
			<form style="display: inline;" method="post" action="index.php">
				<input type="submit" class="btn btn-primary" name="volver" value="Volver">
			</form><?php
		}

		else{
			$pregunta = pregunta::singleton();
			$pregunta->editar_pregunta($_POST['pregunta'],$_SESSION['idPregunta']);
			echo "<h2>Pregunta editada</h2><br/>";
			echo "<br/><br/>";?>

			<form style="display: inline;" method="post" action="index.php">
				<input type="submit" class="btn btn-primary" name="volver" value="Volver">
			</form>
			<?php
		}
	}
?>