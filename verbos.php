<?php
/** 
 *   Autor: Miguel Angel Lopez Moyano
 *
 *   Descripcion: Verbos irregulares
 */
?>

<html>
<head>
	<?php
		include '../includes/header.php';
		include '../includes/body.php';
		
		$notas=array(
			"ser, estar"=> array(
 								"infinitivo" => "be",
 								"pasado" => "was/were",
 								"participio" => "been"),

			"empezar"=> array(
								"infinitivo" => "begin",
 								"pasado" => "began",
 								"participio" => "begun")
		);
 			
		foreach ($notas as $key => $value) {
			echo "<br>".$key."<br>";
			foreach ($value as $key2 => $value2) {
				echo "<br>".$key2."&nbsp;&nbsp;&nbsp;&nbsp;";
				echo $value2."<br>";
			}
		}

		include '../includes/footer.php';
	?>	
</body>
</html>