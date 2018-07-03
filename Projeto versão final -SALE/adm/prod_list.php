<?php
include("../conexao.php");

$consulta = "SELECT * FROM produtos";
$con = $mysqli->query($consulta) or die($mysqli->error);
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8"/>
<title>PRODUTOS</title>

<link rel="icon" href="../imagem/sale.png">

<link href="css/responsivo.css" rel="stylesheet" type="text/css">
<link href="css/table.css" rel="stylesheet" type="text/css">

</head>

<body>
<div id="geral">

<div id="topo">
	<div id="menu">
		<nav id="menutopo">
		<ul>
           <a href="usu_list.php"><li>USUARIOS</li></a>
           <a href="prod_list.php"><li>PRODUTOS</li></a>
        </ul>
    </nav>
	</div>
	
    <a href="usu_list.php"><div id="logomarca">
		<img src="../imagem/sale.png">
	</div>
</a>
</div>

  
  <article class="listar">
<br>
 <a href="prod_cad.php">CADASTAR NOVO PRODUTO</a><br>
 <a href="../index.php">SAIR</a>
<br>
<table>
	<tr>
		<th>ID</th>
		<th width="60px">Imagem</th>
		<th>Nome</th>
		<th>Descrição</th>
		<th>Preço</th>
		<th>Quantidade</th>
		<th>Grupo</th>
		<th>Ação</th>
	</tr>


	
	<?php while($dado = $con->fetch_array()){ ?>
	<tr>
		<td align="center"><?php echo $dado["id"];?></td>
		<td align="center"><?php echo '<img width="60px" src="data:image/jpeg;base64,'.base64_encode( $dado['imagem'] ).'"/>';?></td>
		<td><?php echo $dado["nome"];?></td>
		<td><?php echo $dado["descricao"];?></td>
		<td align="center"><?php echo "R$ ";echo $dado["preco"];?></td>
		<td align="center"><?php echo $dado["quantidade"];?></td>
		<td>
		<?php
			if ($dado["tipo"] == 1){
				echo "Arduino";
			}else if ($dado["tipo"] == 2){
				echo "Eletronica";
			}else if ($dado["tipo"] == 3){
				echo "Embarcados";
			}else if ($dado["tipo"] == 4){
				echo "Kits";
			}

		?>
		</td>

	<td align="center">
	
	<?php
	$id = $dado["id"];
	echo "<a href='prod_edit.php?id=$id'>";?>
	<img src="img/edit.png" title="Editar" width="25px">
	<?php echo "</a>";?>

	<?php
	$id = $dado["id"];
	echo "<a href='deletaprodutos.php?id=$id'>";?>
	<img src="img/del.png" title="Deletar" width="25px">
	<?php echo "</a>";?>

	

	</td>
	</tr>


	<?php } ?>
</table>

</article>

<footer id="rodape">
SALE - Peças e Acessórios<br>
63660-000, Centro, Tauá - CE<br>
(88) 9.9697-0026<br>
&copy <a href="https://www.facebook.com/marla.leite.1">Marla Leite</a>
</footer>
</div>
</body>
</html>
