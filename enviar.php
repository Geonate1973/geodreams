<?php
	
	// Datos de la base de datos 
	$usuario = "u286313822_geodreamsgeo"; //usuario de la base de datos que se creo en el cpanel (no phpmyadmin)
	$password = "G24rw3ng"; // password q tambien se crea en el cpanel
	$servidor = "localhost"; // servidor tanto en pc como en godaddy es localhost
	$basededatos = "u286313822_geodreams"; // nombre de la base de datos que contendra las tablas, ambas se crean en phpmyadmin


	// sentencia para conectar con servidor y base de datos
	$con = mysqli_connect($servidor, $usuario, $password,$basededatos);
		if(!$con){
			echo("conexion erronea");
		}else{
			echo("conexion exitosa");
		};

	//captura de datos de formulario
	$nombre= $_POST["nombre"];
	$apellido_p= $_POST["apellido_p"];
	$apellido_m= $_POST["apellido_m"];
	$edad= $_POST["edad"];
	$direccion= $_POST["direccion"];
	$distrito= $_POST["distrito"];	
	$celular= $_POST["celular"];
	$telefono= $_POST["telefono"];
	$email= $_POST["email"];
	$empresa= $_POST["empresa"];
	$portafolio= $_POST["portafolio"];
	$herramientas= $_POST["herramientas"];
	$pretencion_s= $_POST["pretencion_s"];
	

	$nombre=strtoupper($nombre);
	$apellido_p=strtoupper($apellido_p);
	$apellido_m=strtoupper($apellido_m);
	$edad=strtoupper($edad);
	$direccion=strtoupper($direccion);
	$distrito=strtoupper($distrito);
	$celular=strtoupper($celular);
	$telefono=strtoupper($telefono);
	$email=strtoupper($email);
	$empresa=strtoupper($empresa);
	$portafolio=strtoupper($portafolio);
	$herramientas=strtoupper($herramientas);
	$pretencion_s=strtoupper($pretencion_s);


		
			//para el envío en formato HTML 
	$headers = "MIME-Version: 1.0\r\n"; 
	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

	//dirección del remitente 
	$headers .= "From: GEORWING FORMULARIO <desarrollo@geodreamspro.com>\r\n"; 

	//dirección de respuesta, si queremos que sea distinta que la del remitente 
	$headers .= "Reply-To: desarrolllo@geodreamspro.com\r\n"; 

	//ruta del mensaje desde origen a destino 
	$headers .= "Return-path: desarrollo@geodreamspro.com\r\n"; 

	//direcciones que recibián copia 
	//$headers .= "Cc: geodreams@gmail.com\r\n"; 

	//direcciones que recibirán copia oculta 
	//$headers .= "Bcc: pepe@pepe.com,juan@juan.com\r\n"; 

	//datos de correo
	$correo= "desarrollo@geodreamspro.com";
	$asunto="Envio desde Formulario Geodreams Diseñador";
	$mensaje="Revisar base de datos. \r\n" ;



//la coneccion va primero que la orden de insertar
	;(mysqli_query($con,"INSERT INTO registro (nombre, apellido_p, apellido_m, edad, direccion, distrito, celular, telefono, email, empresa, portafolio, herramientas, pretencion_s ) VALUES ('$nombre','$apellido_p', '$apellido_m','$edad', '$direccion', '$distrito','$celular','$telefono', '$email', '$empresa', '$portafolio', '$herramientas','$pretencion_s')"));
	

	mail($correo,"Mensaje desde Pagina Web PRACTICANDO", $mensaje, $headers );
	header('Location: http://www.geodreamspro.com');

//cerrar conexion
mysqli_close($con);

// cuando se trabaja con PHP puro no es necesario cerrar la apertura <?php