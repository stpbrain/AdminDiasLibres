<?php
    session_start();
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
      <a class="navbar-brand" href="#">Seele´s Solutions</a>
    </div>
    <ul class="nav navbar-nav">
      

      <li><a href="formularioNewday.php">Ingrese Nuevo Dia</a></li>
      <li><a href="../ingresoDeVacas.php">Ingrese Vacaciones</a></li>
      <li><a href="../calendario.html">ver calendario de Vacaciones</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
     
      <li><a href="../control/dest.php"><span class="glyphicon glyphicon-log-in"></span> Log Out</a></li>
    </ul>
  </div>
</nav>





 <?php
     $rut = $_SESSION['prueba'];
   
  $diasxuser = mysql_query("SELECT fecharegistro, motivoingreso, estado, tipoDia FROM registrodias WHERE rut = $rut");
  				echo "<h2 class = 'text-center'> Tus Dias Adeudados</h2>";
  				
  					echo "<div class='container'> ";
					echo "<table class='table table-bordered '>";
			  		
			  		echo"<tr>";
			  			echo " <th> Fecha de ingreso </th>";
			  			echo "<th> Motivo de Ingreso </th>";
			  			echo "<th> Estado</th>";
			  			echo "<th> Tipo Dia </th>";
			  		echo"</tr>";
			
  				 while($row =  mysql_fetch_row($diasxuser) )
			  		{
			  	  echo "<tr class='info'>";
			  	 
			  	  echo "<td>" .$row[0]. "</td>";
			  	  echo "<td>" .$row[1]. "</td>";
			  	  if($row[2] == 0)
			  	  {
			  	  	$t = "<h5 style='color:blue'>Disponible</h5>";
			  	  }else{$t = "<h5 style='color:Red'>Cobrado</h5>";}
			  	  echo "<td>" .$t. "</td>";
			  	  if($row[3] == 1)
			  	  {
			  	  	$td = "Dia Completo";
			  	  }else {$td="Medio Dia";}
			  	  echo "<td>".$td."</td>";
				}
			  	  echo "</tr>";
			  	 
			  	  echo"</table>";
			  	  echo"</div>";
    		  	    
   

   ?>



<div >


</div>




	</body>
</html>
