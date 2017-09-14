<html>
<head>
	<style>
		.error{
			color: #FF0000;
		}
	</style>
</head>
<body>
<?php
	$nameErr=$emailErr="";
	$lerror=false;
	$valorName="";
	$valorEmail="";


	if(isset($_POST['enviar'])){
		$valorName=$_POST['name'];
		$valorEmail=$_POST['email'];
		if(empty($_POST["name"])){	//filtervar
			$nameErr="Nombre requerido";
			$lerror=true;
		}

		else{
			$name=test_input($_POST['name']);
		}

		if(empty($_POST["email"])){	//filtervar
			$emailErr="Email requerido";
			$lerror=true;
		}

		else{
			$name=test_input($_POST['email']);
		}
	}	

	if(!isset($_POST['submit']) OR $lerror){?>
	
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		Name:<input type="text" name="name" value="<?php echo $valorName?>">
		<?php echo $nameErr;?>
		Email:<input type="text" name="email" value="<?php echo $valorEmail?>">
		<?php echo $emailErr;?>
		Enviar:<input type="submit" name="enviar">
	</form>
<?php
}

?>


<?php
	function test_input($data){
		$data=trim($data);
		$data=stripslashes($data);
		$data=htmlspecialchars($data);
		return $data;
	}
?>
</body>
<html>