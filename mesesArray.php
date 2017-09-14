<?php
/** 
 *   Autor: Miguel Angel Lopez Moyano
 *
 *   Descripcion: Meses del año en un array
 */
?>

<html>
<head>
	<?php
		include '../includes/header.php';
		include '../includes/body.php';
		
		$meses=array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio",
		"Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");

		for($i=0;$i<12;$i++)
			echo $meses[$i]."<br>";

		include '../includes/footer.php';
	?>	
</body>
</html>