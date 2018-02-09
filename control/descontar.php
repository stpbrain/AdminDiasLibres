<?php 

require ("../bd/config.php"); 

if($_SERVER["REQUEST_METHOD"] == "POST") { // esta llave es para validar el envion por POST
	//print("fecha".$_POST["fsol"]);
	//print("motivo".$_POST["msol"]);

	    if( isset($_POST["id"]) && isset($_POST["fsol"]) && isset($_POST["msol"]))
	    {

		      $id = $_POST["id"];
		      $fsol = $_POST["fsol"];

		      $msol = $_POST["msol"];

	     }

	     $desc = mysql_query(" UPDATE registrodias SET fechacobro = '$fsol', motivocobro = '$msol',estado = 1 WHERE id = $id");
	   //  print(" UPDATE registrodias SET fechacobro = '$fsol', motivocobro = '$msol' WHERE id = $id");

	     header("location:gestionarDias.php");
   }




 ?>