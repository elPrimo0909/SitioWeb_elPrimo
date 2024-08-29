<?
ob_start();
session_start();



///print_r($_SESSION);


///120819 se agegar 4 lista precios y se agrega decimales a echo en cantidad
/// 051019 opciones de vestuario
///301019 en cuentas emprendedor vestuario se modificaron campos talla, color, genero
///150120 de oculto listas de precios de las CUENTAS POS TEXTILES

/// 280120 SE AGREGO BOTON CRERA ITEM FACTURA ELECTRONICA Y ventana modal detalles delos ITEMS ELECTRONICOS ATENCION FALTA QUE SE PUEDA EDITAR



$rtt = $_SESSION['username'];
?><!DOCTYPE html>
<html>
  <head>

    <meta charset="UTF-8">
    <meta name="title" content="Blog amonca" />
    

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Blog amonca</title>

    <!-- Bootstrap Core CSS -->
  <!--  <link href="css/bootstrap.min.css" rel="stylesheet">--->
<meta name="description" content="Blog amonca, La tienda virtual GRATIS para emprendedores colombianos, Colombia." />



<meta name="keywords" content="Blog amonca, La tienda virtual GRATIS para emprendedores colombianos, Colombia.">


<!-- FAVICON chrome-->
<!-- FAVICON chrome-->
<link rel="icon" type="image/png" sizes="64x64" href="https://amonca.com/img/faviconfinal.png">

<!-- FAVICON android-->
<link rel="apple-touch-icon" sizes="180x180" href="https://amonca.com/img/faviconfinal.png">






    <!-- Custom CSS -->
    


<link href="../redirect/bootstrap37/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../redirect/bootstrap37/dist/css/estilos3.css" rel="stylesheet">



<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/css/select2.min.css" rel="stylesheet" />
  



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- QUITAR ESTO DE TODAS LAS PAGINAS Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                
<div  style="background: transparent; border: solid transparent;color:white;  " class="navbar-toggle" >
<?
if ($rtt=="") { ?>


    <a href="https://amonca.com/">
INICIO
        </a>

<?
}else{
?>
<a href="../app/">MI CUENTA</a>
    

<?
}

?>
           
</div>


               <a href="https://amonca.com/" class="navbar-brand"><img src="https://amonca.com/img/LOGOBARRANAVEGACIONFINAL.png" width="165" height="30"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                   
                   <li>
  <?


if ($rtt=="") { ?>


    <a href="https://amonca.com/">
INICIO
        </a>

<?
}else{
?>
<a href="../app/">MI CUENTA</a>
    

<?
}


           

  ?>                  </li>
 
                    <!-- <li>
                        <a href="http://www.facturoe.com/noticias.html">BLOG</a>
                    </li>-->
                </ul>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
<br><br><br>
<body>

    <!-- Navigation -->

    <!-- Header -->
   
    <!-- /.intro-header -->

    <!-- Page Content -->


    <div class="">

        <div class="container">
            <div class="row">
        <!-- /.container -->




    </div>
<style >
  .titulo{
    color:#0779e4;
  }

</style>

  <h3 class="section-heading titulo">Blog</h3>

<div class="visible-lg"  >
<hr>    
</div>


<div class="col-xs-12 col-md-6 general">
  <table class="table">
                       

<div class="text-left"  >




</div>  
                        
                    
                    </table>
            <div >


          
                <div class="text-left">
        
<div  class="table-bordered" >

<img class="img-responsive" src="https://amonca.com/blog/img/carro99.jpg" alt="">





<div style="font-weight: bolder; padding: 10px" >
 <a  target="_self"  style="color:#0779E4" href="https://amonca.com/blog/Consejos_tienda_online.html">

<h3>10 Consejos para Aumentar tus Ventas Online
    </h3></a>

    <span  style="font-size: 10px" >13 Febrero 2023</span>


    <p class="lead"   >
    &nbsp;&nbsp;&nbsp; 

  Tu tienda virtual ya está en marcha y está todo listo para hacer negocios.</p></p>

</div>
</div>



  <div class="panel-body">
                       
                  
                  
                </div>

                </div>

       <div class="text-left">
        
<div  class="table-bordered" >
 <img class="img-responsive" src="https://amonca.com/blog/img/ecommerce_livestream12.jpg" alt="">





<div style="font-weight: bolder; padding: 10px" >
 <a  target="_self"  style="color:#0779E4" href="livestreaming.html">
<h3>Live streaming shopping: El futuro del eCommerce
    </h3></a>

    <span  style="font-size: 10px" >28 Diciembre 2022</span>


    <p class="lead"   >
    &nbsp;&nbsp;&nbsp; 

    Influencers o empleados de una empresa presentan los productos en un directo y responden a las preguntas y peticiones de los clientes, una Tienda Virtual de amonca permite a los espectadores comprar este producto sin tener que abandonar la transmisión en vivo.</p></p>

</div>
</div>




                </div>



                <div class="panel-body">
                       
                  
                  
                </div>









                <div class="text-left">
        
<div  class="table-bordered" >
                    <img class="img-responsive" src="https://amonca.com/img/foto2.jpg"  alt="">


<div style="font-weight: bolder; padding: 10px" >
<a  target="_self"  style="color:#0779E4" href="https://amonca.com/blog/consejos_fotografias_productos.html">
<h3>Consejos para fotografiar productos</h3></a>

    <span  style="font-size: 10px" >01 Octubre 2022</span>


<p class="lead"   >
&nbsp;&nbsp;&nbsp; 


En las tiendas físicas donde los clientes pueden ver y tocar los productos que van a comprar, los clientes de tiendas en línea dependen de la información y fotografías que hay en las páginas de cada producto para tomar su decisión de compra.</p>

</div>
</div>




                </div>



                <div class="panel-body">
                       
                  
                  
                </div>









            </div>
        </div>


<div class="col-xs-12 col-md-6 general">
  <table class="table">
                       <div class="text-left">



<p class="lead"><span style="font-weight: bolder" ></span><span style="font-weight: bolder" ></span>


 </p>


<div  class="table-bordered" >

<img class="img-responsive" src="https://amonca.com/blog/img/dominio.jpg" alt="">


<div style="font-weight: bolder; padding: 10px" >
<a  target="_self"  style="color:#0779E4" href="https://amonca.com/blog/que_es_un_dominio.html">
<h3>¿Que es un dominio?</h3></a>
   <span  style="font-size: 10px" >05 Enero 2023</span>

<p class="lead"   >
&nbsp;&nbsp;&nbsp; 


El dominio es uno de los elementos más cruciales de cualquier página web, o mejor dicho de todo el Internet. Esta parte aparentemente pequeña de la red mundial es en realidad la razón por la que puedes visitar tus tiendas online y blogs favoritos. Sin él, navegar por la red se sentiría mucho más como una clase de álgebra y construir una presencia en línea sería un reto casi imposible.</p>

</div>
</div>


<div class="col-xs-12 col-md-6 general">
  <table class="table">
                       <div class="text-left">



<div  class="table-bordered" >

<img class="img-responsive" src="https://amonca.com/blog/img/logo.jpg" alt="">



<div style="font-weight: bolder; padding: 10px" >
<a  target="_self"  style="color:#0779E4" href="como_hacer_un_logo.html">
<h3>Cómo hacer un logo</h3></a>

   <span  style="font-size: 10px" >02 Noviembre 2022</span>
<p class="lead"   >
&nbsp;&nbsp;&nbsp; 

Por muy pequeño que parezca, el poder de un buen logotipo es tan grande al momento de lograr tener una marca efectiva, generar reconocimiento y dominar el mercado en cualquier industria.</p></p>

</div>
</div>


<div class="col-xs-12 col-md-6 general">
  <table class="table">
                       <div class="text-left">


<p class="lead"><span style="font-weight: bolder" ></span><span style="font-weight: bolder" ></span>


 </p>



<div  class="table-bordered" >

<img class="img-responsive" src="https://amonca.com/blog/img/carro3.jpg" alt="">



<div style="font-weight: bolder; padding: 10px" >
 <a  target="_self"  style="color:#0779E4" href="https://amonca.com/blog/que_vender_online.html">
<h3>¿Que vender online?</h3>
</a>   <span  style="font-size: 10px" >07 Septiembre 2022</span>

<p class="lead"   >
&nbsp;&nbsp;&nbsp; 

Es hora de dar forma a tu tienda online. Pero antes debes tener claro los 

    
 temas más importantes.</p></p>

</div>






</div>

                    </div>  
                        
                    
                    </table>
            <div >





       


              
          
                <div class="text-left">
</div></div>


</div>
                <div class="panel-body">
                       
                  
                  
                </div>
            </div>
        </div>








<div class="container" >
<div class="visible-lg" >
  <hr>
<!--
&nbsp;&nbsp;&nbsp;<span style="font-size: 40px" style="color: black"  onclick="copyToClipboard()" class="glyphicon glyphicon-link" title="Copiar enlace" ></span>
-->
</div>
</div> 



<script>
function copyToClipboard(text) {
var inputc = document.body.appendChild(document.createElement("input"));
inputc.value = window.location.href;
inputc.focus();
inputc.select();
document.execCommand('copy');
inputc.parentNode.removeChild(inputc);
alert("Enlace copiado.");
}
</script>

</p></p></p><br><br>


                </div>
                
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->

    <!-- /.content-section-b -->

   
    <!-- /.content-section-a -->
<!-- Footer -->


<style>
  a:link {
  color: green;
}

a:visited {
  color: green;
}

a:hover {
  color: green;

 text-decoration: none;
}

a:active {
  color: black;
} 

</style>


    <footer  style="background:#0779E4; color:white"  >
        <div class="container">
            <div class="row">
                <div class="col-lg-12  text-center">
<br>

        
<a href="https://www.instagram.com/tu_eCommerce_de_ropa_gratis/" target="_blank">
<img  src="https://amonca.com/img/instagram_icon.png" width="50px" ></a>

 <a >

  <a href="https://www.tiktok.com/@amoncacolombia" target="_blank">
<img  src="https://amonca.com/img/tikttok.png" width="50px" ></a>
<br>
 <a >
<img src="/img/colombialogo.png" width="240" ></a><br>

  <a style="color: white" href="mailto:info@amonca.com">info@amonca.com</a>
 <br> 


<span style="color: white">Copyright © <?  echo date('Y')    ?></span><br>

<span style="font-size: 10px; color: white  " ><a style="color: white" href="mailto:elprimo@amonca.com">  Desarrollado por elprimo@amonca.com</a>   </span>                <div style="border-top: 20px solid transparent" ></div><br> 

                    
                </div>
            </div>
        </div>
    </footer>

<style>
  a:link {
  color: white;
}

a:visited {
  color: white;
}

a:hover {
  color: white;

 text-decoration: none;
}

a:active {
  color: white;
} 

</style>

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

</body>

</html>

<!--Start of Zendesk Chat Script-->

<!--End of Zendesk Chat Script-->
  

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-3D11S8X1E2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-3D11S8X1E2');
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-3D11S8X1E2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-91629348-1');
</script>





<script type="">function Finalizar() {        
    window.close();
}
</script>



<script type="">function Finalizar() {        
    window.close();
}

/script>
;
}
</script>
