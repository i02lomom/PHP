<?php
/** 
 *   Autor: Miguel Angel Lopez Moyano
 *
 *   Descripcion:  Cabecera en función de la estación del año.
 */
?>

<html>
<head>
	<?php
		include '../includes/header.php';
		include '../includes/body.php';
		
		$anyo=date('Y');
		$inicioPrimavera = new DateTime($anyo.'-03-21');
		$inicioVerano = new DateTime($anyo.'-06-21');
		$inicioOtonyo = new Datetime($anyo.'-09-23');
		$inicioInvierno = new Datetime($anyo.'-12-21');
		$fechaActual = new Datetime();

		if($fechaActual>$inicioPrimavera && $fechaActual<$inicioVerano)
			echo "<img src='../../primavera.png' </img><br><br>";
		elseif($fechaActual>$inicioVerano && $fechaActual<$inicioOtonyo)
			echo "<img src='../../verano.png' </img><br><br>";
		elseif($fechaActual>$inicioOtonyo && $fechaActual<$inicioInvierno)
			echo "<img src='../../otono.png' </img><br><br>";
		else
			echo "<img src='../../invierno.png' </img><br><br>";

		include '../includes/footer.php';
	?>	
</body>
</html>