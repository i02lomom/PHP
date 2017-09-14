<?php
/** 
 *   Autor: Miguel Angel Lopez Moyano
 *
 *   Descripcion: Países
 */
?>

<html>
<head>
	<?php
		include '../includes/header.php';
		include '../includes/body.php';
		
		$pais=array(
			"España"=> array(
 								"bandera" => '<img src="imagenes/spain.png">',
 								"capital" => "Madrid",
 								"continente" => "Europa"),

			"Brasil"=> array(
								"bandera" => '<img src="imagenes/brasil.png">',
 								"capital" => "Río de Janeiro",
 								"continente" => "America")
		);
 			
		foreach ($pais as $key => $value) {
			echo "<br>".$key."&nbsp;&nbsp;&nbsp;&nbsp;";
			foreach ($value as $key2 => $value2) {
				echo "&nbsp;&nbsp;&nbsp;&nbsp;".$key2."&nbsp;&nbsp;&nbsp;&nbsp;";
				echo $value2;
			}
		}

		include '../includes/footer.php';
	?>	
</body>
</html>