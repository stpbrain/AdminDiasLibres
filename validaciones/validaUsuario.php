<?php 
// name="user"   
// name="pass" 

session_start();
  

 require ("../bd/config.php");  

if($_SERVER["REQUEST_METHOD"] == "POST") { // esta llave es para validar el envion por POST
    if( isset($_POST["user"]) && isset($_POST["pass"]))
    {

      $rut = $_POST["user"];
      $_SESSION["prueba"] = $rut;

      
      $pass = $_POST["pass"];

      //echo $tk;
  	}

  	$validaUser = mysql_query("SELECT rut, password, nivel, estado FROM usuarios WHERE  rut = $rut ");

  	
$res= "Usuario no Existe";

  	if($validaUser)
  	{

			  	while($row =  mysql_fetch_row($validaUser) )
			  	{

			  		
			  		
			  		
			  		if($rut == $row[0] ) // validacion de user
			  		//print("valide ususario");
			  		{
			  				print("res pass: ".strcmp($pass, $row[1] ));	
			  			if(strcmp($pass, $row[1] ) == 1)  // validacione de pass
				  			{
				  				$res= "Contraseña Incorrecta";

										
			  				}
			  			if(strcmp($pass, $row[1] ) == 0)  // validacione de pass
			  			{
			  				
			  				//print("valida pass");
			  				//print("pas de consulta:".$row[1]);
			  				if($row[3] != 1)
			  				{
				  				$res= "Usuario Inactivo";
										
				  			}

			  				if($row[3] == 1) // validacion de activacion !
			  				{
			  					
			  			
				  					if((int) $row[2] == 2 ) // validacion de nivel
				  					
				  					{
				  						print("nivel:".$row[2]."  hola soy admin");
				  						header("location: ../vistas/vistaAdministrativa.php");
				  						
				  					}
				  				
				  					if((int) $row[2] == 3) 
				  					{
				  						print("nivel:".$row[2]."  hola soy ususario");
  										
				  						header("location: ../vistas/vistaUsuario.php"); // listo
				  						
				  					}
				  					if((int) $row[2] == 1)
				  					{
				  						print("nivel:".$row[2] ."  soy root");
				  						header("location: ../vistas/vistaRoot.php");
				  						
				  					}
				  				}
				  					
			  					} 

								}
								

				}
				
				
				
}// esta llave es para validar si el query no funca

//$res = "Ususuario no existe NO FUNCO LA QUERY";	
}
?>
<!DOCTYPE html>

<html>
<meta charset="utf-8">
<meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="../css/bootstrap.min.css">
	  
	  
	 
	<head>
		<title>error</title>
	</head>
	<body>
	<div class="jumbotron text-center">

		<H1 style="color: red"> <?php echo $res; ?> </H1>
		<h3>Comuniquese con el Administrador</h3>
		<br>
		<a href="../index.html" class=" btn btn-success">Volver </a>
	</div>
	</body>
</html>

