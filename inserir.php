<?php

	$nome 		     = $_POST['nome'];
	$CPF 		     = $_POST['CPF'];
	$RG 		     = $_POST['RG'];
	$cel 		     = $_POST['cel'];
	$email		     = $_POST['email'];
	$data			 = $_POST['data_nasc'];
	$estado			 = $_POST['estado'];
	$cidade			 = $_POST['cidade'];
	$login 			 = $_POST['login'];
	$senha 			 = $_POST['senha'];
	$confirmar_senha = $_POST['confirmar_senha'];

	$server = "localhost";
	$user   = "root";
	$pass   = "";
	$db     = "pessoas";

	$conn   = new mysqli($server, $user, $pass, $db);
	$conn->set_charset("utf8");

	if (!$conn) {
		echo "Não conectou! ";
	}

	if ($senha 	== $confirmar_senha){
		$insert = "insert into Pessoas values (null, '$nome', '$CPF ', '$RG ','$cel', '$email', '$data', '$estado', '$cidade', '$login ','$senha','$confirmar_senha');";
	
		if(mysqli_query($conn, $insert)) 
			echo "<h1>Cadastrado com sucesso! :)</h1>";
			
		else
			echo "Falhou " . mysqli_error($conn);

	} else {
		echo "<h2> Senha não confirmada, dados digitados estão divergindo <h2>". mysqli_error($conn);
	}
	

?>