<?php

session_start();

if(!(isset($_SESSION['zalogowany'])&& $_SESSION['zalogowany']==true)){
	header('Location: zaloguj.php');
	exit();
}