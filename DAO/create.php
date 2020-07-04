<?php
//Sessão
session_start();

//Conexão
require_once 'db_config.php';

//Se alguém clicou em cadastrar
if(isset($_POST['btn-cadastrar'])):
	$nome = mysqli_escape_string($connect, $_POST['nome']);
	$email = mysqli_escape_string($connect, $_POST['email']);
	$comissao = mysqli_escape_string($connect, $_POST['comissao']);

	$sql = "INSERT INTO vendedores (nome, email, comissao) VALUES 
			('$nome','$email','8.5')";

	if(mysqli_query($connect,$sql)):
		$_SESSION['mensagem'] = "Cadastrado com sucesso";
		header('Location: ../index.php');
	else:
		$_SESSION['mensagem'] = "Erro ao cadastrar";
		header('Location: ../index.php');
	endif;
endif;

?>