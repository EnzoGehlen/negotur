<?php
$host = 'sql10.freemysqlhosting.net';
$base = 'sql10244807';
$user = 'sql10244807';
$pass = 'G2sWAytQ2n';


$mysqli= new mysqli($host, $user, $pass, $base);
if(mysqli_connect_errno())
    trigger_error(mysql_connect_error());


$mysqli->set_charset("utf8");
date_default_timezone_set('America/Sao_Paulo');