<?php
include("../conexao.php");
$id = 			$_REQUEST['id'];
$nome = 		$_REQUEST['nome'];
$descricao = 	$_REQUEST['descricao'];
$preco =		$_REQUEST['preco'];
$imagem = 		$_REQUEST['imagem'];
$quantidade = 	$_REQUEST['quantidade'];
$tipo = 		$_REQUEST['tipo'];

$sql  = "UPDATE produtos SET id='$id',nome='$nome',preco='$preco',descricao='$descricao',quantidade='$quantidade',imagem='$imagem',tipo='$tipo' WHERE ID = $id;";

$result = $mysqli->query($sql);
if ($result){
echo "produto atualizado com sucesso!";
header("Refresh:1;url=prod_list.php");
}else{
echo "produto nao atualizado!";
header("Refresh:1;url=prod_list.php");
}
?>