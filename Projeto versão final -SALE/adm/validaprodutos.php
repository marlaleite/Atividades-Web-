<?php
include("../conexao.php");

$nome = 		$_REQUEST['nome'];
$descricao = 	$_REQUEST['descricao'];
$preco =		$_REQUEST['preco'];
$imagem64 = 		base64_encode(file_get_contents($_FILES['imagem']['tmp_name']));
$imagem = "data:image/jpeg;base64,".$imagem64;
$quantidade = 	$_REQUEST['quantidade'];
$tipo = 		$_REQUEST['tipo'];


$sql="INSERT INTO produtos (id,nome,descricao,preco,imagem,quantidade,tipo)
VALUES (null,'$nome','$descricao','$preco','".$imagem."','$quantidade','$tipo')";
$result = $mysqli->query($sql);
if ($result){
echo "produto cadastrado com sucesso!";
header("Refresh:1;url=prod_list.php");//
}else{
echo "produto não cadastrado!";
header("Refresh:1;url=prod_cad.php");
}

?>

