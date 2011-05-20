<?php
session_start();
header ('Location: index.php');
$sesion = false;
if (!isset($_SESSION['cedula'])){ 
   	$sesion = false; 
}else{ 
    $sesion = true;
	

}
?>