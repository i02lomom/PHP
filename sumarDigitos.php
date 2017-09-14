<?php
/** 
 *   Autor: Miguel Angel Lopez Moyano
 *
 *   Descripcion: Sumar los dígitos de un número con una función recursiva
 */
?>

<html>
<head>
	<?php
		include("funciones/funciones.php");
		include("../includes/header.php");
		include("../includes/body.php");
	
		$lerror=false;
		$numero=0;
		$numeroErr="";

		if(isset($_POST['enviar'])){
			$numero=$_POST['numero'];

			if(empty($_POST['numero']) || !filter_var($numero, FILTER_VALIDATE_INT)){	//filtervar
					$numeroErr="Número erróneo";
					$lerror=true;
			}
		}

		if(!isset($_POST['enviar']) || $lerror){?>

			<h1>Sumar dígitos recursivo</h1><br/><br/>
			
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<label>Número</label>
			<input type="text" name="numero">
	  		<?php echo $numeroErr;?>
			<input type="submit" name="enviar">
			</form>
		
			<?php
		}

		else{
			echo (sumar($numero));
		}

		include("../includes/footer.php");
	?>	
</body>
</html>