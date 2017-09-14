<?php
/** 
 *   Autor: Miguel Angel Lopez Moyano
 *
 *   Descripcion:  Sumar los 3 primeros números pares.
 */
?>

<html>
<head>
	<?php
		include '../includes/header.php';
		include '../includes/body.php';
		echo "<h1>Sumar los 3 primeros números pares</h1><br>";
		for($i=0,$contador=0;$i<7;$i++){
			if($i%2==0)
				$contador+=$i;
		}
		echo "Resultado: $contador";

		include '../includes/footer.php';
	?>	
</body>
</html>