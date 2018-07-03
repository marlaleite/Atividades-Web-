<?php
$mysqli = new mysqli('localhost', 'root', 'root', 'webcadastro');

if($mysqli->connect_errno)
echo "FALHA NA CONEXAO";
?>