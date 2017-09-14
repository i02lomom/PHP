<?php
/** 
 *   Autor: Miguel Angel Lopez Moyano
 *
 *   Descripcion:  Tablas de multiplicar 1 al 10
 */
?>

<html>
<head>
	<?php
		include '../includes/header.php';
		include '../includes/body.php';
		
		for($i=1;$i<11;$i++){
			echo "<br>Tabla del $i<br>";
			for($j=1;$j<11;$j++){
				echo "$i x $j = ".$i*$j."<br>";
			}
		}

		include '../includes/footer.php';
	?>	
</body>
</html>