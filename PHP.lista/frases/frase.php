<?php
$criar = fopen  ("frases.txt", "a");

$primeirafrase = fwrite ($criar, "Sistema web \r\n");
$segundafrase = fwrite ($criar, "Projeto \r\n");
$terceirafrase = fwrite ($criar, " atividade web\r\n");

fclose($criar);
?>
