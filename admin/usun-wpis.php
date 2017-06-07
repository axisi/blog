<?php

include "../bootstrap.php";
include "sprawdz-logowanie.php";

$id = (int) $_REQUEST['id'];

pg_query("delete from komentarze where wpis_id={$id}");
pg_query("delete from wpisy where id={$id}");

header("Location: index.php");
exit();