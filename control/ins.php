<?php 

include '../bd/config.php';

IF($_SERVER['REQUEST_METHOD'] == 'POST')
{
  
  $result = mysql_query("SELECT * FROM usuarios where  rut = ".$_POST['rut']."");
  $nfilas = mysql_num_rows($result);

  if($nfilas > 0)
  {
    $alert = '<div class="alert alert-danger" role="alert">El Usuario ya existe !!</div>';
    print_r($alert);
    
    


  }else
  {

    $insert = ("INSERT INTO usuarios VALUE(null,'".$_POST['rut']."','".$_POST['nombre']."','".$_POST['pass']."',NOW(),3,1);");
    mysql_query($insert);
	//print_r($insert);
	header("location: ../index.html");

  }
}



 ?>