<?php

$dsn = "mysql:dbname=DB_clientes; host=localhost";
$dbuser = 'root';
$dbpass = '';
 

try{
	
	$pdo = new PDO($dsn, $dbuser, $dbpass);
	$pdo->exec("SET sql_mode=(SELECT REPLACE(@@sql_mode, 'ONLY_FULL_GROUP_BY', ''));");
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
}catch(PDOException $e){
	echo "Falhou: ".$e->getMessage();
	throw new PDOException($e);
}
