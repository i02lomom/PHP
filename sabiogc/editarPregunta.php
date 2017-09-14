<?php
	session_start();
	require_once 'clases/pregunta.php';
	include 'funciones/funciones.php';
	include 'includes/header.php';
	include 'includes/body.php';

	if(isset($_GET['indice'])){
		$_SESSION['idPregunta']=$_GET['indice'];
		$preg = pregunta::singleton();
        $pregunta = $preg->get_pregunta_id($_GET['indice']);

        ?>
    	<h1>Editar pregunta</h1>
    	
    	<br/>

		<form method="post" action="guardarPreguntaEditada.php">
			<label>Pregunta: </label><?php

			echo " <input type=\"text\" name=\"pregunta\" value=\"".$pregunta['pregunta']."\"><br/><br/>";
			echo "<br/><br/>";

			?>
			<input type="submit" class="btn btn-primary" name="enviar" value="Editar">
			<form style="display: inline;" method="post" action="index.php">
				<input type="submit" class="btn btn-primary" name="volver" value="Volver">
			</form>
		</form>
			<?php
	}
		
	
?>