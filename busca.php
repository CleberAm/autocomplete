<?php

header('Content-Type: application/json');
$data = json_decode(file_get_contents('php://input'), true);


if($data){
    include 'conexao.php';
    $termo = "'%".$data['termo']."%'";
    $sth = $pdo->prepare("SELECT * from clientes WHERE nome like {$termo}");
    $sth->execute();
    $result = $sth->fetchAll();
    $json = json_encode($result);
    echo $json;
}





