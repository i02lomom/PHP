<?php
/** 
 *   Autor: Miguel Angel Lopez Moyano
 *
 *   Descripcion: Iniciales a partir del nombre y los apellidos
 */
?>

<html>
<head>
	<?php
		include '../includes/header.php';
		include '../includes/body.php';
		include 'funciones/funciones.php';

		$lerror=false;
		$nombreErr=$apellidosErr="";
		$nombre=$apellidos="";

		if(isset($_POST['enviar'])){
			$nombre=$_POST['nombre'];
			$apellidos=$_POST['apellidos'];
		

			if(empty($nombre)){
				$nombreErr="Nombre vacío";
				$lerror=true;
			}

			if(empty($apellidos)){
				$apellidoErr="Apellidos vacío";
				$lerror=true;
			}
		}

		if(!isset($_POST['enviar']) || $lerror){?>

			<h1>Iniciales</h1><br/><br/>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				<label>Nombre</label>
				<input type="text" name="nombre">
				<?php echo $nombreErr;?><br/><br/>
				<label>Apellidos</label>
				<input type="text" name="apellidos">
				<?php echo $apellidosErr;?><br/><br/>
				<br/>
		  		<input type="reset" value="Reset">
				<input type="submit" name="enviar">
			</form>
			<?php 
		}

		else{
			echo (iniciales($nombre,$apellidos));
		}


		include '../includes/footer.php';
	?>	
</body>
</html>