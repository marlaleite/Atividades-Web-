<?php
include("conexao.php");

$nome=$_REQUEST['nome'];
$sobrenome=$_REQUEST['sobrenome'];
$email=$_REQUEST['email'];
$senha=$_REQUEST['senha'];
$senha2=$_REQUEST['senha2'];
$telefone=$_REQUEST['tel'];
$data=$_REQUEST['data'];
$sexo=$_REQUEST['sexo'];
$rua=$_REQUEST['rua'];
$num=$_REQUEST['num'];
$bairro=$_REQUEST['bairro'];

$sql="INSERT INTO clientes (id,nome,sobrenome,email,senha,senha2,telefone,datanascimento,sexo,rua,num, bairro)
VALUES (null,'$nome','$sobrenome','$email','$senha','$senha2','$telefone','$data','$sexo','$rua','$num','$bairro')";

$result = $mysqli->query($sql);
if ($result){
echo "cliente cadastrado com sucesso!";
header("Refresh:1;url=usu_cad.php");
}else{
echo "Cliente nao cadastrado!";
}

?>

