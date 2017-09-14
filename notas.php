<?php
/** 
 *   Autor: Miguel Angel Lopez Moyano
 *
 *   Descripcion: Nota de los alumnos de 2º DAW para el módulo DWES
 */
?>

<html>
<head>
	<?php
		include '../includes/header.php';
		include '../includes/body.php';
		
		$notas=array(
			"Miguel Angel López Moyano"=> array(
 												"1 eva" => 8,
 												"2 eva" => 9,
 												"3 eva" => 10),

			"Lucas Márquez Muñoz"=> array(
 												"1 eva" => 6,
 												"2 eva" => 8,
 												"3 eva" => 6)
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