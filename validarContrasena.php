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
		$contrasenaErr="";
		$contrasena="";
		$tipoError="";

		if(isset($_POST['enviar'])){
			$contrasena=$_POST['contrasena'];

			if(empty($contrasena)){
				$nombreErr="Contraseña vacía";
				$lerror=true;
			}
		}

		if(!isset($_POST['enviar']) || $lerror){?>
			<h1>Contraseña segura</h1><br/><br/>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				<label>Contraseña</label>
				<input type="text" name="contrasena">
				<?php echo $contrasenaErr;?><br/><br/>
				<input type="reset" value="Reset">
				<input type="submit" name="enviar">
			</form>

			<?php 
		}

		else{
			if(validarContrasena($contrasena,$tipoError))
				echo "Contraseña segura";
			else
				echo "Contraseña no segura.</br></br>".$tipoError;
		}

		include '../includes/footer.php';
	?>	
</body>
</html>