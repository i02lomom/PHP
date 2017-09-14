<?php
/** 
 *   Autor: Miguel Angel Lopez Moyano
 *
 *   Descripcion: Escribe los números del 1 al 10.
 */
?>

<html>
<head>
	<?php
		include '../includes/header.php';
		include '../includes/body.php';
		
		echo "<h1>Números del 1 al 10</h1><br>";
		for($i=1;$i<11;$i++)
			echo "$i\t";

		include '../includes/footer.php';
	?>	
</body>
</html>