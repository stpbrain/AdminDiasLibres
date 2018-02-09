<?php 

require ("../bd/config.php"); 
//session_start(); 

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
      

      
       <li><a href="formularioNewdayAdmin.php">Ingrese Nuevo Dia</a></li>
      <li><a href="../ingresoDeVacasAdmin.php">Ingrese Vacaciones</a></li>
      <li><a href="../calendarioAdmin.html">ver calendario de Vacaciones</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
     
      <li><a href="../index.html"><span class="glyphicon glyphicon-log-in"></span> Log Out</a></li>
    </ul>
  </div>
</nav>





<?php
    
   
  $diasxuser = mysql_query("SELECT rut,nombre , sum(tipoDia)  from registrodias WHERE estado = 0 group by rut, nombre");
  				echo "<h2 class = 'text-center'> Recuento de Dias del Equipo</h2>";
  				
  					echo "<div class='container '> ";
  					//echo "<form action='../control/gestionarDias.php' method='POSt' name='ges'>";
					echo "<table class='table table-bordered '>";
			  		
			  		echo"<tr >";
			  			echo " <th class='text-center'> Nombre </th>";
			  			echo "<th class='text-center'> Cantidad de Dias </th>";
			  			echo "<th class='text-center'> Gestionar </th>";
			  		echo"</tr>";
			
  				 while($row =  mysql_fetch_row($diasxuser) )
			  		{
			  	  echo "<tr class='info text-center'>";
			  	 
			  	//echo "<input type='text' name='us' value='$row[0]' style='display: none'>";
			  	 //echo "<td>$row[0]</td>";
			  	  //$_SESSION["user"] = $row[0];
			  	  echo "<td>" .$row[1]. "</td>";
			  	  echo "<td>" .$row[2]. "</td>";
			  	 // echo "<td><input type='submit' name='ges' ' class='btn btn-info' value='Solicitar' > </td>";
			  	  echo "<td><a href='../control/gestionarDias.php' 	class='btn btn-success'>Gestionar</a></td>";
			  	  echo "</tr>";
			  	} 
			  	
			  	  echo"</table>";
			  	  echo"</form>";
			  	  echo"</div>";
    		  	    
   

   ?>




<div >


</div>




	</body>
</html>


