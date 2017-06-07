<?php

include "../bootstrap.php";
include "sprawdz-logowanie.php";

$id= (int) $_POST['id'];
$temat= pg_escape_string($_POST['temat']);

$tresc= pg_escape_string($_POST['tresc']);

pg_query("
update wpisy
set
temat='{$temat}',
tresc='{$tresc}'
where id= {$id}
");

header("Location: index.php");
