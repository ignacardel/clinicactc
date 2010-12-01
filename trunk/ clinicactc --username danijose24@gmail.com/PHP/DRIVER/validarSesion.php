<?php

session_start();
$sesion = false;

if (!isset($_SESSION['cedula'])){ 
   	$sesion = false; 
}else{ 
    $sesion = true;
} 
?>