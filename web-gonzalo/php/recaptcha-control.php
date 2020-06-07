<?php
$nombre = stripslashes($_POST["nombre"]);
$celular = stripslashes($_POST["celular"]);
$email = stripslashes($_POST["email"]);
$checkin = stripslashes($_POST["checkin"]);
$checkout = stripslashes($_POST["checkout"]);
$adultos = stripslashes($_POST["adultos"]);
$ninos= stripslashes($_POST["ninos"]);
$habitacion = stripslashes($_POST["habitacion"]);


$recaptcha = $_POST["g-recaptcha-response"];

$url = "https://www.google.com/recaptcha/api/siteverify";
$data = array(
	"secret" => "6Ld-Fc8UAAAAAIhasqB6elaFpVnvDK5zifn_NKh-",
	"response" => $recaptcha
);
$options = array(
	"http" => array (
		"method" => "POST",
		"content" => http_build_query($data)
	)
);
$context  = stream_context_create($options);
$verify = file_get_contents($url, false, $context);
$captcha_success = json_decode($verify);
if ($captcha_success->success) {
		
		//datos de correo

	$cabeceras  = "MIME-Version: 1.0\r\n"; 
	$cabeceras .= "Content-type: text/html; charset=utf-8\r\n";
	$cabeceras .= "From: Mensaje desde la pagina de COPASU HOTEL <reservas@copasuhotel.com.pe>\r\n";

	$titulo = "Mensaje desde la Web de Copasu Hotel";
	// $correo= "contabilidad@riosramirez.com,ricardo@riosramirez.com";
	$correo= "desarrollo@geodreamspro.com, reservas@copasuhotel.com.pe";

	$asunto="Envio desde formulario web de la pagina de COPASU HOTEL";

	$mensaje="Nombre:  " . $nombre . "<br>";
	$mensaje.="Celular:  " . $celular . "<br>";
	$mensaje.="Email:  " . $email . "<br>";
	$mensaje.="Checkin:  " . $checkin . "<br>";
	$mensaje.="Checkout:  " . $checkout . "<br>";
    $mensaje.="Adultos:  " .$adultos."<br>";
    $mensaje.="Niños:  " .$ninos."<br>";
    $mensaje.="Habitacion:  " .$habitacion."<br>";

		mail($correo,$titulo, $mensaje, $cabeceras );
		header("Location: http://www.google.com"); 
		

} else {
	echo "REGRESA!, debes marcar la casilla de verificación!, gracias.";
}
	
?>
