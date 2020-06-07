<?php


$nombre = $_POST["nombre2"];
$color = $_POST["color"];
$email = $_POST["email"];
$texto = $_POST["texto"];
$check = $_POST["check"];
$cantidadSelect=$_POST["cantidadSelect"];
$cantidadSelec2t=$_POST["cantidadSelect2"];
$cantidadSelect3=$_POST["cantidadSelect3"];
$cantidadManual=$_POST["cantidadManual"];
$cantidadManual2=$_POST["cantidadManual2"];
$cantidadManual3=$_POST["cantidadManual3"];
$check2 = $_POST["check2"];
$check3 = $_POST["check3"];
$correo=$_POST["correo"];


		//datos de correo

	$cabeceras  = "MIME-Version: 1.0\r\n"; 
	$cabeceras .= "Content-type: text/html; charset=utf-8\r\n";
	$cabeceras .= "From: Mensaje desde la WEB ARGAL INGENIEROS <proyectos@argalingenieros.com>\r\n";

	$titulo = "Mensaje desde la Web de ARGAL INGENIEROS";
	$correo= "desarrollo@geodreamspro.com, geodreams@gmail.com, $correo, $email	";
	/*$correo= "desarrollo@geodreamspro.com";*/

	$asunto="Envio desde formulario web de la pagina de GARDEN";

	$mensaje="Nombre:" . $nombre . "<br>";
	$mensaje.="Email: " . $email . "<br>";
	$mensaje.="Mensaje: " .$texto."<br>";
	$mensaje.="Check: " .$check."<br>";
	$mensaje.="Cantidad Seleccionada: " .$cantidadSelect. ",".$cantidadSelect2.",".$cantidadSelect3."<br>";
	$mensaje.="Cantidad Manual: " .$cantidadManual. "," .$cantidadManual2. ",".$cantidadManual3. "<br>";
	$mensaje.="---------------------------------------"."<br>";
	$mensaje.="Check2: " .$check2."<br>";
	$mensaje.="Check3: " .$check3."<br>";
	$mensaje.="COLOR: " .$color."<br>";
	


		mail($correo,$titulo, $mensaje, $cabeceras );
		header("Location: http://www.argalingenieros.com/gracias.html"); 
		

	
?>