<?

$id=$_GET['id'];


define("DB_HOST", "localhost");//DB_HOST:  generalmente suele ser "127.0.0.1"
define("DB_NAME", "facturoe_correos");//Nombre de la base de datos
define("DB_USER", "facturoe_Dios");//Usuario de tu base de datos
define("DB_PASS", "lPsTV4bjzBzz");//
	# conectare la base de datos
  $con = @mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if (!$con) {
	die("imposible conectarse: ".mysqli_error($con));
}


$sql        = "UPDATE masivos_2023_1 SET  visitado='1'  WHERE id='".$id."'";


	
$query_update = mysqli_query($con, $sql);



echo "Visitante Bienvenido...";



header( "refresh:1;url=https://elprimo.com.co/home/" );