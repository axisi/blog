<?php
	
	include "bootstrap.php";
	
	
	$wpisy = pobierz("select *, to_char(data, 'YYYY-MM-DD HH24:MI:SS') as data_f from wpisy order by data DESC, id");
	
	include "templates/index.php";