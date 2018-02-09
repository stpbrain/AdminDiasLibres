

<?php 

require ("../bd/config.php"); 


 ?>
<!DOCTYPE html>

<html>	  
 <meta charset="utf-8">
  
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	 
	<head>
		<title>Usuario</title>
	</head>
	<body>
	

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="../vistas/vistaAdministrativa.php">Seele´s Solutions</a>
    </div>
    <ul class="nav navbar-nav">
     
    </ul>
    <ul class="nav navbar-nav navbar-right">
     
      <li><a href="../index.html"><span class="glyphicon glyphicon-log-in" ></span> Log Out</a></li>
    </ul>
  </div>
</nav>



<?php

$users = mysql_query("SELECT rut, usuario FROM usuarios WHERE nivel > 1");

echo"<div class='text-center'>";
echo "<h3> Ingrese usuario para gestionar sus dias </h3>"; 
echo "<form action='gestionarDias.php' name='gest' method='POST'>";
echo "<select name='ruser'>";

while($rs = mysql_fetch_row($users))
{
	
		echo"<option value='$rs[0]'>$rs[1] </option>";
}
	echo"</select>";
	echo"<br>";
	echo"<br>";
echo"<input type='submit' name='envi' value='Gestionar' class='btn btn-success'>";

echo" </form>";

echo"</div>";




    
   // $r = $_SESSION['user'];

if($_SERVER["REQUEST_METHOD"] == "POST") { // esta llave es para validar el envion por POST
	   // print("vengo por post".$_POST["ruser"]);
	    if( isset($_POST["ruser"]) )
	    {

		      $r = $_POST["ruser"];
		     


		  }    
   
		  $diasxuser = mysql_query("SELECT id,fecharegistro, motivoingreso,tipoDia FROM registrodias WHERE rut = $r and estado = 0");
		  				echo "<h2 class = 'text-center'> Recuento de Dias disponibles</h2>";
		  				
		  					echo "<div class='container '> ";
		  					
							echo "<table class='table table-bordered '>";
					  		
					  		echo"<tr >";
					  			echo " <th class='text-center'> Fecha Ingresada </th>";
					  			echo "<th class='text-center'> Motivo de Ingreso </th>";
					  			echo "<th class='text-center'> Cantidad </th>";
					  			echo "<th class='text-center'> Fecha de solicitud </th>";

					  			echo "<th class='text-center'> Motivo de Solicitud </th>";

					  		echo"</tr>";
					
		  				 while($row =  mysql_fetch_row($diasxuser) )
					  		{
					  	  echo "<form action='descontar.php' method='POST' name='des'>";
					  	  echo "<tr class='info text-center'>";
					  	  echo "<input type='text' name='id' value=".$row[0]." style='display: none;''>";
					  	  echo "<td>" .$row[1]. "</td>";
					  	  echo "<td>" .$row[2]. "</td>";
					  	  echo "<td>" .$row[3]. "</td>";
					  	  echo "<td>Ingrese fecha : <input type='date' name='fsol' required></td>";
					  	  echo "<td>Ingrese Motivo : <input type='text' name='msol' required></td>";
					  	  echo "<td> <input type='submit' name='btnSol' value='Solicitar'> </td>";
					  	   echo"</form>";
						}
					  	  echo "</tr>";
					  	 
					  	  echo"</table>";
					  	  
					  	  echo"</div>";
		    		  	    
		   }

   ?>




<div >


</div>




	</body>
</html>


