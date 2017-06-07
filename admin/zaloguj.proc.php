<?php

include "../bootstrap.php";

session_start();

if(
$_POST['login']=='admin'&&
password_verify($_POST['haslo'] ,'$2y$10$Nzt.safqDzEndd2zlNFUl.AxMwnfa1eVX7qpZTH/Rvz85DXbkCcdu')
){
	$_SESSION['zalogowany']= true;
	header("Location: index.php");
	exit();
}else{
	header("location: zaloguj.php");
	exit();
}