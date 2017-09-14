<?php
/** 
 *   Autor: Miguel Angel Lopez Moyano
 *
 *   Descripcion: Carga fecha de nacimiento en una variable y calcula la edad.
 */
?>

<html>
<head>
	<?php
		include '../includes/header.php';
		include '../includes/body.php';
		echo "<h1>Calcular la edad</h1><br>";

		$fec_nac = "1982-2-16";
		$fecha = time() - strtotime($fec_nac);
		$edad = floor((($fecha / 3600) / 24) / 365);
		echo "La edad de alguien nacido en $fec_nac es $edad años";
		
	?>
	<br><br>
	<a href="http://localhost/DWES/ejercicios/ver.php?src=
		<?php
    	echo basename($_SERVER['PHP_SELF'],'DWES/ejercicios/') ?>
     	">Ver codigo
    </a>	
</body>
</html>