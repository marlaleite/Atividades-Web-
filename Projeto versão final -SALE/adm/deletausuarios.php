<?php
include("../conexao.php");

$id = $_GET['id'];

$delete = $mysqli->query("DELETE FROM clientes WHERE ID = $id;");


if ($delete){



echo "<script type='text/javascript'>alert('usuario deletado com sucesso!');</script>";
header("Refresh:1;url=usu_list.php");

}else{
echo "<script type='text/javascript'>alert('usuario não deletado!');</script>";
header("Refresh:1;url=usu_list.php");
}

?>

