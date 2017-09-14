<?php
	function subirFoto($ruta){
	    $target_file = "";
	    $errorImagen = "";

	    if($_FILES["upload"]["tmp_name"] != ""){
	    	$target_dir = $ruta;
	    	$target_file = $target_dir . basename($_FILES["upload"]["name"]);
	    	$uploadOk = 1;
	    	$fileType = pathinfo($target_file, PATHINFO_EXTENSION);
	    	$errorImagen ="";

		    if($_FILES["upload"]["size"] > 500000){
		    	$errorImagen = "Error. Demasiado grande";
		        $uploadOk = 0;
		    }

		    if($fileType != "jpg" && $fileType != "jpeg" 
		        && $fileType != "png" && $fileType != "gif" && $fileType != "svg"){
		        $errorImagen = "error de formato";
		        $uploadOk = 0;
		    }

		    if($uploadOk == 1){
		        chmod($_FILES["upload"]["tmp_name"], 777);
		        move_uploaded_file($_FILES["upload"]["tmp_name"], $target_file);
		    }
		    	echo $errorImagen;
		}
	}
?>