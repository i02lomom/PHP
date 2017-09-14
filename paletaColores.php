<?php
/** 
 *   Autor: Miguel Angel Lopez Moyano
 *
 *   Descripcion:  Paleta de colores
 */
?>

<html>
<head>
	<?php
		include '../includes/header.php';
		include '../includes/body.php';
		
		for ($i=1; $i<=255 ; $i=$i+20){
			for ($j=1; $j<=255 ; $j=$j+20){
				for ($k=1; $k<=255 ; $k=$k+20){
					echo '<div style="background-color:rgb('.$i.",".$j.",".$k.")".'; width:250px"><img width="100" height="100"></div>';
				}
			}
		}

		include '../includes/footer.php';
	?>	
</body>
</html>