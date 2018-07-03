<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>FAÇA LOGIN</title>
<link rel="icon" href="imagem/sale.png">
<link href="css/responsivo.css" rel="stylesheet" type="text/css">
<link href="css/login.css" rel="stylesheet" type="text/css">
<link href="css/menulateral.css" rel="stylesheet" type="text/css">

</head>
<body>


<div id="geral">
<div id="topo">
	<div id="menu">
	
		<nav id="menutopo">
		<ul>
           <a href="index.php"><li>HOME</li></a>
            <a href="login.php"><li>LOGIN</li></a>
            <a href="usu_cad.php"><li>CADASTRE-SE</li></a>
        </ul>
    </nav>
</div>

  <a href="index.php"><div id="logomarca">
		<img src="imagem/sale.png">
	</div>
</a>
</div>
        <nav id="menulateral">
		<ul>
          <a href="arduino.php"><li>Arduino</li></a>
          <a href="eletronica.php"><li>Eletronica</li></a>
          <a href="embarcados.php"><li>Embarcados</li></a>
          <a href="kits.php"><li>Kits</li></a>
		</ul>
	</nav> 


<article class="arealogin">
<form class="formulario" action="validalog.php" method="get">

	<img id="perfil" src="imagem/avatar.jpg">


	<input id="log" type="email" name="usu" placeholder="Email"><br>
	<input id="log" type="password" name="pass" placeholder="Senha" minlength="4"><br>
	<button class="btn" type="submit" name="cdg" value="0">FAZER LOGIN</button><br>
	
	<input name="lembrar" type="checkbox">Lembrar-me <br>
	<button class="btn2" type="submit" name="cdg" value="1">Esqueceu a senha?</button><br>
</form>
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





