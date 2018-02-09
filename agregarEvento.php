

<?php
require ("bd/config.php"); 

if(isset($_POST["titulo"] ))
{ 
	$titulo = $_POST['titulo'];

	if( isset($_POST["inicio"]))
	{
		$inicio = $_POST['inicio'];

		if( isset($_POST["fin"]))
		{
			$fin = $_POST['fin'];
			if( isset($_POST["color"]))
			{
				$color = $_POST['color'];
			}
		}
	}	


}
// connection to the database


// insert the records
$ins="INSERT INTO eventos VALUES ('$titulo', '$inicio', '$fin','$color')";
mysql_query($ins);
print_r($ins);
header("location: vistas/vistaUsuario.php");




?>
