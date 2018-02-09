
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
      

     
    </ul>
    <ul class="nav navbar-nav navbar-right">
     
      <li><a href="../vistas/vistaUsuario.php"><span class="glyphicon glyphicon-log-in"></span> Home</a></li>
    </ul>
  </div>
</nav>


<div class="text-center">
<h2>Formulario de ingreso de Dias Adeudados</h2>
</div>

<div class="container">
<form action="../control/insertaNewDayAdmin.php" method="POST" name="form">
  <table class="table text-center">
    <tr >
      <td> 
            Seleccione Usuario : 
          
         <select name="user">
           <?php
           require ("../bd/config.php");  

           $usuarios = mysql_query("SELECT  rut , usuario FROM usuarios WHERE nivel > 1 AND estado = 1");

            while($row =  mysql_fetch_row($usuarios) )
            {
              
              echo("<option value='$row[0]''>$row[1]</option>");
            }

            ?>

          </select>
          
        

      </td>
     
    </tr>
    <tr>
        <td>
            Ingrese fecha del dia adeudado <input type="date" name="fechaingreso" required="">
        </td>
        <td>
            Ingrese motivo del dia <input type="text" name="motivo" required="">
        </td>
        <td>
          Ingese Tipo de dia <select name="tipoDia">
            <option value="1">Dia Completo </option>
            <option value="0.5">Medio Dia</option>
          </select>
        </td>
    </tr>
    <tr >
      <td colspan="2" ><input type="submit" value="Guardar" class="btn btn-success">

      <a href="../vistas/vistaAdministrativa.php" class="btn btn-danger">Volver</a>
      </td>
    </tr>

  </table>
</form>
</div>




  </body>
</html>