<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'info@elprimo.com.co';
echo "Mensaje recibido, pronto le responderemos.";

 $name =$_POST['name'];
 $email =$_POST['email'];
 $message =$_POST['message'];
 $subject =$_POST['subject'];
 // $contact->add_message( $_POST['email'], 'Email');
 // $contact->add_message( $_POST['message'], 'Message', 10);





$destinatario = "info@elprimo.com.co"; 
$asunto = "mensaje para elprimo desde el sitio"; 
$cuerpo = ' 
<html> 
<head> 
   <title>Prueba de correo</title> 
</head> 
<body> 
<h1>Mensaje para elprimo</h1> 
<p> 
<b>'.$name.'<br> '.$email.'<br>'.$subject.' <br>'.$message.'<br> 
</p> 
</body> 
</html> 
'; 

//para el envío en formato HTML 
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

//dirección del remitente 
$headers .= "From: Sitio elprimo <info@amonca.co>\r\n"; 

//dirección de respuesta, si queremos que sea distinta que la del remitente 
///$headers .= "Reply-To: mariano@desarrolloweb.com\r\n"; 

//ruta del mensaje desde origen a destino 
///$headers .= "Return-path: holahola@desarrolloweb.com\r\n"; 

//direcciones que recibián copia 
///$headers .= "Cc: maria@desarrolloweb.com\r\n"; 

//direcciones que recibirán copia oculta 
///$headers .= "Bcc: pepe@pepe.com,juan@juan.com\r\n"; 

mail($destinatario,$asunto,$cuerpo,$headers) 
?>
