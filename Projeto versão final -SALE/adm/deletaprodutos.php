<?php
include("../conexao.php");

$id = $_GET['id'];

$delete = $mysqli->query("DELETE FROM produtos WHERE ID = $id;");


if ($delete){

echo "<script type='text/javascript'>alert('produto deletado com sucesso!');</script>";
header("Refresh:1;url=prod_list.php");

}else{
echo "<script type='text/javascript'>alert('produto não deletado!');</script>";
header("Refresh:1;url=prod_list.php");
}

?>

