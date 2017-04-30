<?php
require 'config/config.php';


if(isset($_POST["email"]) && !empty($_POST["email"])){
	if($_POST["senha"] && !empty($_POST["senha"])){
	
		$email = $_POST["email"];
		$senha = $_POST["senha"];


		$sql = $db->query("SELECT * FROM users WHERE email='$email' AND senha = '$senha'");

		if($sql->rowCount() > 0){
			header("location: user.php");
		}

	}else{
		echo "Login ou senhas invalidos";
	}
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login::PirateHC</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>

	<body>
		<div id="cabecalho">
			<h1><span id="vermelho">Pirate</span>HC</h1>
		</div>

		<hr>
		
		<div id="logo">
			<img src="imagens/logo.png" width="200" height="200">
			
		</div>

		<form id="form" method="post">
			<table>
				<br>
				<input type="email" name="email" placeholder="Login"><br>
				<br>
				<input type="password" maxlenght="32" name="senha" placeholder="Senha"><br>
				<br>
				<input type="submit"   value="entrar">

				<a href="cadastro.php">Cadastrar-se</a>
			</table>
		</form>
		<hr id="gambiarra">
		<p>Desenvolvido por mr0mx - A mente que domina a magia dos bits, controla o mundo</p>
		
	</body>
</html>