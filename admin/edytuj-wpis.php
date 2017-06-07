<?php

include "../bootstrap.php";
include "sprawdz-logowanie.php";

$id = (int)$_GET['id'];
$wpis=pobierz_jeden("select * from wpisy where id ={$id}");
if(empty($wpis)){
	header("Location: index.php");
	exit();
}
include "templates/edytuj-wpis.php";