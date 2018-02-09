<?php
    session_start();
require ("bd/config.php");  

?>

<!DOCTYPE html>
<html>
<head>
	<title>Vacaciones</title>
</head>
  		<meta charset="UTF-8">
        <link href="css/style.css" rel="stylesheet" type="text/css" >
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
       
<body>

<div class="container">
<div   >
	<h1>Ingrese sus vacaciones</h1>
	<table>
	<form action="agregarEvento.php" name="n1" method="POST">
		<tr>

		 <!--<?php  $rut = $_SESSION['prueba']; $nombre = mysql_result( mysql_query("SELECT usuario FROM usuarios WHERE rut = $rut"), 0); ?> -->
			
			<td>
			<label>Ingrese Usuario</label>
		  <select name="titulo">
           <?php
           

           $usuarios = mysql_query("SELECT  rut , usuario FROM usuarios WHERE estado = 1");

            while($row =  mysql_fetch_row($usuarios) )
            {
              
              echo("<option value='vacaciones.$row[1]'>$row[1]</option>");
            }

            ?>

          </select>

			</td>
		</tr>
		<tr>
			<td> Favor ingrese el inicio de sus vacaciones<input type="date" name="inicio" class="form-control"  required=""></td>
		</tr>
		<tr>
			<td> favor ingrese el fin de sus vacaciones<input type="date" name="fin" class="form-control"  required=""></td>
		</tr>
		<tr>
			<td>
			<label>Seleccione color </label>
				<select name="color">
					<option value="red"> Rojo</option>
					<option value="green"> Verde</option>
					<option value="blue"> Azul</option>
					<option value="yellow"> Amarillo</option>
					<option value="pink"> Rosado</option>
				</select>
			</td>
		</tr>
		<tr>
			<td><br> <input type="submit" name="btn_guardar" value="Guardar" class="btn btn-success">
			<a href="vistas/vistaUsuario.php" class="btn btn-danger">Volver</a>
			</td>
		</tr>
		</form>
	</table>
	</div>
</div>


</body>

</html>