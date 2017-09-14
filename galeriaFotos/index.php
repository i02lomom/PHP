<?php
	include 'funciones/funciones.php';
	include 'includes/header.php';
	include 'includes/body.php';

	$ruta="./uploads/galeria/";
	echo "<center>";
    echo "<form action=\"index.php\" method=\"post\" enctype=\"multipart/form-data\">"; 
    echo "<label>Sube una imagen</label><input class=\"btn\" type=\"file\" name=\"upload\"></br>"; 
    echo "<input class=\"btn btn-primary\" type=\"submit\" name=\"subir\" value=\"subir\">"; 
    echo "</form>"; 
    echo "</center>";
    echo "</br></br>";

    if(isset($_POST['subir'])){ 
            subirFoto($ruta); 
    } 

    $archivosCarpeta=scandir($ruta); 
    echo "<div class=\"col-lg-12 text-center\">"; 
    echo "<table class=\"table table-bordered table-condensed\">"; 
    $salto=0; 
    foreach ($archivosCarpeta as $value) { 
        if(substr($value,-4)==".png" || substr($value,-4)==".jpg" || substr($value,-4)==".jpeg" || substr($value,-4)==".gif" || substr($value,-4)==".svg"){ 
            echo "<td><img src=".$ruta."".$value." alt=\"foto\" width=\"100\" height=\"100\"></td>"; 
            $salto++; 
        } 
        if($salto==4){ 
            echo "<tr/>"; 
            $salto=0; 
        } 
    }

    echo "</table>"; 
    echo "</div>"; 

	include 'includes/footer.php';
?>