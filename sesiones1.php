<?php
	session_start();

	include '../includes/header.php';
	include '../includes/body.php';

	if(empty($_SESSION['paises']))
		$_SESSION['paises']=array();


	?>

	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<label>Pais</label>
		<input type="text" name="pais">
		</br></br>
		<label>Capital</label>
		<input type="text" name="capital">
		</br></br>
		<input type="submit" name="enviar">
	</form><?php
	if(isset($_POST['enviar'])){
		$_SESSION['paises'][$_POST['pais']] = $_POST['capital'];
	}?>
	</br>
	<center>
		<table>
			<tr>
				<td>País</td>
				<td>Capital</td>
			</tr><?php
				foreach ($_SESSION['paises'] as $key => $value) {
					echo "<tr>";	
					echo "<td>$key</td><td>$value</td>";
					echo "</tr>";
				}?>
		</table>
	</center>
	<?php

	include '../includes/footer.php';
?>