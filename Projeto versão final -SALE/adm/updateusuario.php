<?php
include("../conexao.php");
$id = $_REQUEST['id'];
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


$sql  = "UPDATE clientes SET id='$id',nome='$nome',sobrenome='$sobrenome',email='$email',senha='$senha',senha2='$senha2',telefone='$telefone',datanascimento='$data',sexo='$sexo',rua='$rua',num='$num',bairro='$bairro' WHERE ID = $id;";

$result = $mysqli->query($sql);
if ($result){
echo "cliente alterado com sucesso!";
header("Refresh:1;url=usu_list.php");
}else{
echo "Cliente nao alerado!";
header("Refresh:1;url=usu_list.php");
}
?>

