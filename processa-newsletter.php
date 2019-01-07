<?php
require_once 'config.php'; 		
require_once 'funcoes.php';
require_once DBAPI;

$email = $_POST["email-atualizacoes"];

$query = "INSERT INTO newsletter (email) VALUES ('" . $email . "')";

$conexao = open_database();

$resultado = $conexao->query($query);

if($resultado){
	echo "Sucesso!";
}else{
	echo "Falha";
}

close_database($conexao);