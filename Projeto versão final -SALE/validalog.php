<?php

$admUso 	= "leitemarla678@gmail.com";
$admPass	= "1234";
$codigo = $_REQUEST['cdg'];
$usuario	= $_REQUEST['usu'];
$senha		= $_REQUEST['pass'];

if(($codigo == 0)&&($usuario ==  $admUso)&&($senha == $admPass)){
echo "<script type='text/javascript'>alert('Bem vinda $usuario');</script>";
header("Refresh:0;url=adm/usu_list.php");
}else if($codigo == 1){
echo "<div class='rec'>";
include("recuperasenha.php");
echo "<div>";
}else if($codigo == 2){
echo "<script type='text/javascript'>alert('Senha alterada com sucesso!');</script>";
header("Refresh:1;url=index.php");
}else{
	echo "<script type='text/javascript'>alert('Bem vindo $usuario');</script>";
	header("Refresh:1;url=index.php");
}
?>