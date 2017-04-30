<?php
	$dsn = "mysql:dbname=piratehc;host=localhost";
	$dbuser = "root";
	$dbpass = "99694266";

try{
	$db = new PDO($dsn,$dbuser,$dbpass);



}catch(PDOException $error){
	echo "Falhou a conexao ".$error->getMessage();
}

?>