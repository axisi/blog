<?php

include "bootstrap.php";

$id = (int) $_GET['id'];

$wpis = pobierz_jeden("select * from wpisy where id={$id}");

if (empty($wpis)){ //!$wpis
	
	header('HTTP/1.0 404 Not Found');
	//header('Location:index.php');
	exit();
}

$komentarze = pobierz("select * from komentarze where wpis_id={$id}");

include "templates/wpis.php";