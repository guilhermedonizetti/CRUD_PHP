<?php

include("../main.php");

//Pegar a acao do formulario, se existir
$acao = isset($_GET["acao"]) ? $acao = $_GET["acao"] : $acao = null;
if($acao == null) die();

//REGISTRA OS DADOS DE CLIENTES NO BANCO DE DADOS
if ($acao == "cadastrar") {
	//nome email sexo idade
	$nome = isset($_GET["nome"]) ? $_GET["nome"] : null;
	$email = isset($_GET["email"]) ? $_GET["email"] : null;
	$sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : null;
	$idade = isset($_GET["idade"]) ? $_GET["idade"] : null;

	$sql = $conn->prepare("INSERT INTO clientes(nome, email, sexo, idade) VALUES(?, ?, ?, ?)");
	$sql->bindParam(1, $nome, PDO::PARAM_STR);
	$sql->bindParam(2, $email, PDO::PARAM_STR);
	$sql->bindParam(3, $sexo, PDO::PARAM_STR);
	$sql->bindParam(4, $idade, PDO::PARAM_INT);

	try {
		$sql->execute();
		echo true;
	}
	catch (PDOException $erro) {
		echo false;
	}
}

if($acao == "consultar"){
	
}

if($acao == "atualizar"){
	
}

if($acao == "deletar"){
	
}