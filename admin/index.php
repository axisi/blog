<?php

include "../bootstrap.php";
include "sprawdz-logowanie.php";

$wpisy = pobierz("select * from wpisy order by data desc");

include "templates/index.php";