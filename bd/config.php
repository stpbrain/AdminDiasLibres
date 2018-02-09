<?php 

$host='localhost'; 
$user='root'; 
$pass=''; 
$db='diasLibres'; 
$link=mysql_connect($host,$user,$pass) or die(mysql_error()); 
mysql_select_db($db,$link); ?>