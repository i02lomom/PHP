<?php
	session_start();

    include 'funciones/funciones.php';

	if(!isset($_POST['enviarMulta'])){
		header("Location: index.php");
	}

	else{
		$hoy=getdate();
		$multa=array();
		$multa['id']=obtenerIdAgente();
		$multa['matricula']=$_POST['matricula'];
		$multa['descripcion']=$_POST['descripcion'];
		$multa['fecha']=date("d")."/".date("m")."/".$hoy['year'];
		$multa['importe']=$_POST['importe'];
		$multa['estado']="pendiente";
		array_push($_SESSION['multas'],$multa);
		header("Location: index.php");
	}
?>