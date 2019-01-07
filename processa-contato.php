<?php
require_once 'config.php'; 		
require_once 'funcoes.php';
require_once DBAPI;

$nome = $_POST["nome"];
$email = $_POST["email"];
$assunto = $_POST["assunto"];
$mensagem = $_POST["mensagem"];

$conexao = open_database();

$query = "INSERT INTO contato (nome, email, assunto, mensagem) VALUES ('" . $nome . "','" . $email . "','" . $assunto . "','" . $mensagem . "')";

$resultado = $conexao->query($query);

if($resultado){
	echo "Sucesso!";
}else{
	echo "Falha";
}

close_database($conexao);