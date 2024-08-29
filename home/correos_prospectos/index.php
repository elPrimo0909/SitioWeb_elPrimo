<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>HTML</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="estilo.css">
</head>

<body>

</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>HTML</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet">

<style type="text/css">
  
  body {
  font-family: "Open Sans", sans-serif;
  color: #272829;
  
 
}

 .color{
background: #0563bb;
color:white;
 font-weight: bold;
 }


</style>

<div  class="color" style="text-align: center;  padding: 20px;"   >

      <img src="https://elprimo.com.co/home/assets/img/DISENOCORREO555.png">
<br>
<span  style="color: white; background: #9b0a1f; border-radius: 10px; width: 20%; text-align: center; padding: 10px " >
  <a href="https://elprimo.com.co/home/correo_visitado/?id=17082" style="color:white" > Conocer más
</a>
 </span>



      <div class="social-links">
</div>
</div>


</head>

<body>

  
</body>

<footer class="color" >
 <div class="container "  style="text-align: center;  padding: 20px;"    >
      <h3>elPrimo</h3>
      <p>Developer Full-Stack - eCommerce - AWS</p>
      <div class="social-links">

        <a href="https://www.linkedin.com/in/adrian-monsalve-365b64265/"  target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright 2023 <br> 
<span style="font-size: 10px; color: white  " ><a style="color: black;" href="https://elprimo.com.co/home/cancelar_correo/?id=17082"> No deseo recibir mas correo.</a>   </span>       
 <strong>
      </div></strong></div>

</footer>

</html>


<form action="./" >
  asdasD
<input type="input" name="desde"   >
<input type="input" name="hasta"   >

  <BUTTON type="submit" >ss</BUTTON>
</form>

<?


$db = new mysqli('localhost', 'facturoe_Dios', 'lPsTV4bjzBzz', 'facturoe_correos'); 
 
if ($db->connect_errno > 0) { 
    die('Imposible conectar [' . $db->connect_error . ']'); 
}


echo $desde=$_GET['desde'];
echo $hasta=$_GET['hasta'];


$result = $db->query("SELECT * FROM lista_general WHERE id between '".$desde."' AND '".$hasta."' ORDER by id DESC");
 
// Iniciamos el "bucle" para enviar multiples correos. 
 
while($row = $result->fetch_assoc()) { 


$email2= $row['email'];
$idd= $row['id'];


$destinatario = $email2; 
$asunto = "Tu Pagina WEB Profesional"; 
$cuerpo = ' 
 <!DOCTYPE html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta charset="UTF-8">

</head> 
<body> 

<p> <style type="text/css">
  
  body {
  font-family: "Open Sans", sans-serif;
  color: #272829;
  
 
}

 .color{
background: #0563bb;
color:white;
 font-weight: bold;
 }


</style>

<div  class="color" style="text-align: center;  padding: 20px;"   >

      <img src="https://elprimo.com.co/home/assets/img/DISENOCORREO555.png">
<br>
<span  style="color: white; background: #9b0a1f; border-radius: 10px; width: 20%; text-align: center; padding: 10px " >
  <a href="https://elprimo.com.co/home/correo_visitado/?id='.$idd.'" style="color:white" > Conocer más
</a>
 </span>



      <div class="social-links">
</div>
</div>


</head>

<body>

  
</body>

<footer class="color" >
 <div class="container "  style="text-align: center;  padding: 20px;"    >
      <h3>elPrimo</h3>
      <p>Developer Full-Stack - eCommerce - AWS</p>
      <div class="social-links">

        <a href="https://www.linkedin.com/in/adrian-monsalve-365b64265/"  target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright 2023 <br> 
<span style="font-size: 10px; color: white  " ><a style="color: black;" href="https://elprimo.com.co/home/cancelar_correo/?id='.$idd.'"> No deseo recibir mas correo.</a>   </span>       
 <strong>
      </div></strong></div>

</footer>

</body> 
</html> 
'; 

//para el envío en formato HTML 
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=utf-8\r\n"; 

//dirección del remitente 
$headers .= "From: elprimo <info@elprimo.com.co>\r\n"; 

//dirección de respuesta, si queremos que sea distinta que la del remitente 
///$headers .= "Reply-To: mariano@desarrolloweb.com\r\n"; 

//ruta del mensaje desde origen a destino 
///$headers .= "Return-path: holahola@desarrolloweb.com\r\n"; 

//direcciones que recibián copia 
///$headers .= "Cc: maria@desarrolloweb.com\r\n"; 

//direcciones que recibirán copia oculta 
///$headers .= "Bcc: pepe@pepe.com,juan@juan.com\r\n"; 

mail($destinatario,$asunto,$cuerpo,$headers) ;



}

?>