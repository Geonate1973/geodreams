<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	
	<?php
$action=$_REQUEST['action'];
if ($action=="")    /* display the contact form */
    {
    ?>
    <form  action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="action" value="submit">
    Nombre Completo:<br>
    <input name="name" type="text" value="" size="30" required /><br>
    Email:<br>
    <input name="email" type="text" value="" size="30" required /><br>
		Direccion Completa:<br>
    <input name="direccion" type="text" value="" size="30" required /><br>
		Distrito:<br>
    <input name="distrito" type="text" value="" size="30" required /><br>
		Referencia:<br>
    <input name="referencia" type="text" value="" size="30" required /><br>
		Telefono:<br>
    <input name="telefono" type="text" value="" size="30" required /><br>
    Mensaje:<br>
    <textarea name="message" rows="7" cols="30" required ></textarea><br>
    <input type="submit" class="button" value="Send email"/>
    </form>
    <?php
    } 
else                /* send the submitted data */
    {
    $name=$_REQUEST['name'];
	$email=$_REQUEST['email'];
    $direccion=$_REQUEST['direccion'];
	$distrito=$_REQUEST['distrito'];
	$referencia=$_REQUEST['referencia'];
	$telefono=$_REQUEST['telefono'];
    $message=$_REQUEST['message'];
	$email_to = "informes@carmontiperu.com,desarrollo@geodreamspro.com";
    if (($name=="")||($email=="")||($direccion=="") || ($distrito=="")|| ($referencia=="") ||($telefono=="")||($message==""))
        {
        echo "Requiere llenar todas los datos, regresa al <a href=\"\">formulario</a> por favor.";
        }
    else{   
		$mensaje = "
			Nombre: " . $name . " 
			Email: " . $email . " 
			Direccion: " . $direccion . " 
			Distrito: " . $distrito . " 
			Referencia:: " . $referencia . " 
			Telefono: ".$telefono."
			Su mensaje es el siguiente:  ". $message . " 
			Enviado el " . date('d/m/Y', time());
		
        $from="From: $name<$email>\r\nReturn-path: $email";
        $subject="Mensaje desde formulario CV CARMONTI";
        mail($email_to, $subject, $mensaje, $from);
        echo "Ya enviamos tu correo, dentro de poco nuestro personal se contactará contigo, gracias por confiar en nosotros!";
        }
    }  
?>
</body>
</html>