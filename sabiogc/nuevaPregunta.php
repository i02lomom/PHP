<?php
	session_start();
	require_once 'clases/respuestas.php';
    include 'clases/pregunta.php';
	include 'includes/header.php';
	include 'includes/body.php';
    include 'funciones/funciones.php';

    if(!isset($_POST['enviar']))
		header("Location: index.php");
	else{

		$fichero="";
		$ruta="/var/www/sabiogc/uploads/";
		$target_file = "";
	    $errorImagen = "";

	    if($_FILES["uploadedfile"]["tmp_name"] != ""){
	    	$target_dir = $ruta;
	    	$target_file = $target_dir.$_FILES["uploadedfile"]["name"];

	    	$fileType = pathinfo($target_file, PATHINFO_EXTENSION);

		    chmod($_FILES["uploadedfile"]["tmp_name"], 777);
		    move_uploaded_file($_FILES["uploadedfile"]["tmp_name"], $target_file);
		    $fichero = $_FILES["uploadedfile"]["name"];
		}
		    
		$pregunta = pregunta::singleton();
		$id = $pregunta->sel_pregunta_max();
		$id = $id['id']+1;
		
		insertarPregunta($id,$_POST['pregunta'],$fichero,$_POST['tipoObjeto'][0],$_POST['categorias'][0],$_POST['niveles'][0],$_SESSION['idExperto']);
		if(!empty($_POST['respuesta1'])){
			if(isset($_POST['check1'])){
				insertarRespuesta($id,$_POST['respuesta1'],1);
			}
			else{
				insertarRespuesta($id,$_POST['respuesta1'],0);
			}
		}
		if(!empty($_POST['respuesta2'])){
			if(isset($_POST['check2'])){
				insertarRespuesta($id,$_POST['respuesta2'],1);
			}
			else{
				insertarRespuesta($id,$_POST['respuesta2'],0);
			}
		}
		if(!empty($_POST['respuesta3'])){
			if(isset($_POST['check3'])){
				insertarRespuesta($id,$_POST['respuesta3'],1);
			}
			else{
				insertarRespuesta($id,$_POST['respuesta3'],0);
			}
		}
		if(!empty($_POST['respuesta4'])){
			if(isset($_POST['check4'])){
				insertarRespuesta($id,$_POST['respuesta4'],1);
			}
			else{
				insertarRespuesta($id,$_POST['respuesta4'],0);
			}
		}

		echo "<h2>Pregunta y respuestas añadidas</h2>";
		?>

		<form style="display: inline;" method="post" action="index.php">
			<input type="submit" class="btn btn-primary" name="volver" value="Volver">
		</form><?php
	}
?>