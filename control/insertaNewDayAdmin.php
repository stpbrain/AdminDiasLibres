<?php

 require ("../bd/config.php");  

if($_SERVER["REQUEST_METHOD"] == "POST") { 


    if( isset($_POST["user"]) && isset($_POST["fechaingreso"]) && isset($_POST["motivo"])&& isset($_POST["tipoDia"]))
      
    {

      $rut = $_POST["user"];
      
      $fingreso = $_POST["fechaingreso"];
      $motivo = $_POST["motivo"];
      $tipo = $_POST["tipoDia"];

      

      $nombre = mysql_query("SELECT usuario FROM usuarios WHERE rut = $rut");
      

      while($row =  mysql_fetch_row($nombre) )
            {
              $r = $row[0];
            }
           
 


      $inserta = mysql_query("insert registrodias VALUE (null,'$r',$rut,'$fingreso','null','$motivo','null',$tipo,0)");
      
      $res = "Registro Ingresado";
  
    
    }else{print("me cai");}
}


?> 

<html>
<meta charset="utf-8">
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    
    
   
  <head>
    <title>Resultado</title>
  </head>
  <body>
  <div class="jumbotron text-center">

    <H1 style="color: red"> <?php echo $res; ?> </H1>
    <h3>Comuniquese con el Administrador</h3>
    <br>
    <a href="../vistas/vistaAdministrativa.php" class=" btn btn-success">Volver </a>
  </div>
  </body>
</html>