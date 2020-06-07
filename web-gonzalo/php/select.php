<?php

$cantidadSelect=$_POST["cantidadSelect"];



		//datos de correo

	$cabeceras  = "MIME-Version: 1.0\r\n"; 
	$cabeceras .= "Content-type: text/html; charset=utf-8\r\n";
	$cabeceras .= "From: Mensaje desde la WEB ARGAL INGENIEROS <proyectos@argalingenieros.com>\r\n";

	$titulo = "Mensaje desde la Web de ARGAL INGENIEROS";
	$correo= "desarrollo@geodreamspro.com, geodreams@gmail.com, $correo, $email	";
	/*$correo= "desarrollo@geodreamspro.com";*/

	$asunto="Envio desde formulario web de la pagina de GARDEN";

	$mensaje.="Cantidad Seleccionada: " .$cantidadSelect."<br>";


		mail($correo,$titulo, $mensaje, $cabeceras );
		header("Location: http://www.argalingenieros.com/gracias.html"); 
		

	
?>