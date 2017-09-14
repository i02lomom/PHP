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
		
		$tablero=array(
			"A"=>array(0,0,0,0,0,0,0,0,0,0),
			"B"=>array(0,0,0,0,0,0,0,0,0,0),
			"C"=>array(0,0,0,0,0,0,0,0,0,0),
			"D"=>array(0,0,0,0,0,0,0,0,0,0),
			"E"=>array(0,0,0,0,0,0,0,0,0,0),
			"F"=>array(0,0,0,0,0,0,0,0,0,0),
			"G"=>array(0,0,0,0,0,0,0,0,0,0),
			"H"=>array(0,0,0,0,0,0,0,0,0,0),
			"I"=>array(0,0,0,0,0,0,0,0,0,0),
			"J"=>array(0,0,0,0,0,0,0,0,0,0)
				);

		echo "&nbsp;&nbsp;&nbsp;&nbsp;";
		for($i=1;$i<11;$i++)
			echo $i;
		echo "<br>";
		foreach ($tablero as $key => $value) {
			echo $key."&nbsp;&nbsp;&nbsp;&nbsp;";
			foreach ($value as $key2 => $value2) {
				echo $value2;
			}
			echo "<br>";
		}

		include '../includes/footer.php';
	?>	
</body>
</html>