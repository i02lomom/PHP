<?php
/** 
 *   Autor: Miguel Angel Lopez Moyano
 *
 *   Descripcion: Curriculum
 */
?>

<html>
<head>
	<?php
		include '../includes/header.php';
		include '../includes/body.php';
	
		$lerror=false;
		$nombreErr=$apellidosErr=$educacionErr="";
		$nombre=$apellidos=$educacion=$vehiculo=$idioma=$experiencia="";

		if(isset($_POST['enviar'])){
			$nombre=$_POST['nombre'];
			$apellidos=$_POST['apellidos'];
			$experiencia=$_POST['experiencia'];

			if(empty($nombre)){
				$nombreErr="Nombre vacío";
				$lerror=true;
			}

			if(empty($apellidos)){
				$apellidoErr="Apellidos vacío";
				$lerror=true;
			}

			if(empty($_POST['educacion'])){
				$educacionErr="Seleccione un nivel de educación";
				$lerror=true;
			}
			else{
				$educacion=$_POST['educacion'];
			}

			if(empty($_POST['vehiculo'])){
				$vehiculo="off";
			}
			else{
				$vehiculo=$_POST['vehiculo'];
			}

			if(empty($_POST['menu'])){
				$idioma="off";
			}
			else{
				$idioma=$_POST['menu'];
			}


			
		}
				
		if(!isset($_POST['enviar']) || $lerror){?>

		<h1>Currículum</h1><br/><br/>

		<div style="text-align:justify; margin: 0 auto;padding: 20px; border-radius: 25px; border:1px solid grey; width: 370px; height: 550px;">
			<br/>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				<label>Nombre</label>
				<input type="text" name="nombre">
				<?php echo $nombreErr;?><br/><br/>
				<label>Apellidos</label>
				<input type="text" name="apellidos">
				<?php echo $apellidosErr;?><br/><br/>
				<label>Nivel de educación</label> <br/>
				
				<input type="radio" name="educacion" value="eso"> Graduado/ESO <br/>
	  			<input type="radio" name="educacion" value="bachiller"> Bachiller<br/>
	  			<input type="radio" name="educacion" value="diplomado"> Diplomado
	  			
	  			<br/><?php echo $educacionErr;?>
	  			<br/>
	  			<label>Experiencia</label> <br/>
				<select id="experiencia" name="experiencia">	
		  			<option value="Menos de un año"<?php if($experiencia=="Menos de un año"){echo ' selected ="selected"';}?>>Menos de un año</option>
		  			<option value="Entre uno y dos años"<?php if($experiencia=="Entre uno y dos años"){echo ' selected ="selected"';}?>>Entre uno y dos años</option>
		  			<option value="Más de dos años"<?php if($experiencia=="Más de dos años"){echo ' selected ="selected"';}?>>Más de dos años</option>
				</select>
				<br/><br/>
	  			<label>Idiomas</label>
	  			<select name="menu" size="3" multiple="multiple">
	  				<option value="ingles">Inglés</option>
	  				<option value="aleman">Alemán</option>
	  				<option value="frances">Francés</option>
				</select><br/><br/>
				<label>Vehiculo propio</label> 
				<input type="checkbox" name="vehiculo">
	  			<br/><br/>
	  			<input type="reset" value="Reset">
				<input type="submit" name="enviar">
			</form>
		</div>

		<?php
		}
		else{
			?>
			<h3>Datos personales</h3>
			Nombre: <?php echo $nombre?><br>
			Apellidos: <?php echo $apellidos?><br>

			<h3>Educación</h3>
			<?php echo $educacion?><br>

			<h3>Experiencia</h3>
			<?php echo $experiencia?><br>

			<h3>Idiomas</h3>
			<?php if($idioma=="off")
				echo "Ninguno";
			else
				echo $idioma;
			?><br>

			<h3>Vehículo propio</h3>
			<?php if($vehiculo=="off")
				echo "No";
			else if($vehiculo=="on")
				echo "Sí";
			?><br>
			
		<?php
		}
	?>

		
	<?php
		include '../includes/footer.php';
	?>	
</body>
</html>