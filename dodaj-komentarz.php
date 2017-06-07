<?php

include "bootstrap.php";

if(empty($_POST)){
	header('Location:index.php');
	exit();
}

$autor= pg_escape_string($_POST['autor']);
$tresc= pg_escape_string($_POST['tresc']);
$wpis_id= pg_escape_string($_POST['wpis_id']);
$ip = $_SERVER['REMOTE_ADDR'];

$sql="
insert into komentarze (autor, tresc, wpis_id,ip)
values
('{$autor}' , '{$tresc}' , {$wpis_id}, '{$ip}')
";

pg_query($sql);

$wiadomosc = <<<EOS
Drogi Adminie!
Został dodany nowy komentarz!
Autor:{$autor}
Treść: {$tresc}
EOS;

mail($config['admin_email'],"Nowy komentarz",$wiadomosc);

header("Location: wpis.php?id={$wpis_id}");
exit();




