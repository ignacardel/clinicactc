<?php
function Conectarse() 
{ 
   if (!($link=mysql_connect("localhost","root","1234"))) 
   { 
      echo "Error al conectarse con la base de datos."; 
      exit(); 
   } 
   if (!mysql_select_db("clinica",$link)) 
   { 
      echo "Error seleccionando la base de datos."; 
      exit(); 
   } 
   return $link; 
} 

$link=Conectarse(); 




?>
