<?php
//Conexão
require_once 'db_config.php'

//Se alguém clicou em cadastrar
if(isset($_POST['btn-cadastrar'])):
	$nome = mysqli_escape_string($connect, $_POST['nome']);
	$email = mysqli_escape_string($connect, $_POST['email']);
	$comissao = mysqli_escape_string($connect, $_POST['comissao']);
endif;

?>