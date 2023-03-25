<?php
	$login=$_POST['email'];
	$senha=$_POST['senha'];


	include "conexao.php";

	$sql = "SELECT * FROM usuario WHERE email = '$login' AND senha = '$senha'";
	$res = mysqli_query($conn,$sql);
	$qtdeRegistros=mysqli_num_rows($res);
	
	if($qtdeRegistros>0){
		session_start();
		$row = mysqli_fetch_assoc($res);
		$_SESSION['id']=$row['id'];
		$_SESSION['nome']=$row['nome'];
		header("Location:telainicial.php");
	}
	else{
		header("Location:index.php?erro=1");
	}
?>