<?php
include("../conexao.php");

$consulta = "SELECT * FROM clientes";
$con = $mysqli->query($consulta) or die($mysqli->error);
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="refresh" content="1">
<title>LISTAR</title>
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
  	<a href="../index.php">SAIR</a>
  	<br>
<table>
	<tr>
		<th>ID</th>
		<th>Nome</th>
		<th>E-mail</th>
		<th>Senhas</th>
		<th>Telefone</th>
		<th>D.D.N</th>
		<th>Sexo</th>
		<th>Endereço</th>
		<th>Nº</th>
		<th>Bairro</th>
		<th>Ação</th>
	</tr>
	<?php while($dado = $con->fetch_array()){ ?>
	<tr>
		<td><?php echo $dado["id"];?></td>
		<td><?php echo $dado["nome"];?>
		<?php echo $dado["sobrenome"];?></td>
		<td><?php echo $dado["email"];?></td>
		<td><?php echo $dado["senha"];?><br><?php echo $dado["senha2"];?></td>
		<td><?php echo $dado["telefone"];?></td>
		<td><?php echo date("d/m/Y", strtotime($dado["datanascimento"]));?></td>
		<td><?php echo $dado["sexo"];?></td>
		<td><?php echo $dado["rua"];?></td>
		<td align="center"><?php echo $dado["num"];?></td>
		<td><?php echo $dado["bairro"];?></td>


		<td align="center">


			<?php
			$id = $dado["id"];
			echo "<a href='usu_edit.php?id=$id'>";?>
			<img src="img/edit.png" title="Editar" width="25px">
			<?php echo "</a>";?>


			<?php
			$id = $dado["id"];
			echo "<a href='deletausuarios.php?id=$id'>";?>
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
