<?php
//Sessão
session_start();

//Conexão
require_once 'db_config.php';

//Se alguém clicou em cadastrar
if(isset($_POST['btn-editar'])):
	$nome = mysqli_escape_string($connect, $_POST['nome']);
	$email = mysqli_escape_string($connect, $_POST['email']);
	$comissao = mysqli_escape_string($connect, $_POST['comissao']);
	$id = mysqli_escape_string($connect, $_POST['id']);

	$sql = "UPDATE vendedores SET nome = '$nome' , email='$email', 	
			comissao='8.5' WHERE id = '$id' ";

	if(mysqli_query($connect,$sql)):
		$_SESSION['mensagem'] = "Atualizado com sucesso";
		header('Location: ../index.php');
	else:
		$_SESSION['mensagem'] = "Erro ao atualizar";
		header('Location: ../index.php');
	endif;
endif;

?>