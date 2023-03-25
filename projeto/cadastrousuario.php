<?php
		require "autentica.php";
?>

<?php

include "conexao.php";

$id = "";
$idn = "";
$ide = "";
$ids = "";


if(isset($_GET['id'])){
	$id = $_GET['id'];
	$sql = "SELECT * FROM usuario WHERE id = $id";
	$res = mysqli_query($conn,$sql);
	$row = mysqli_fetch_assoc($res);
	
$id = $row['id'];
$idn = $row['nome'];
$ide = $row['email'];
$ids = $row['senha'];
	
	
	
}
?>
<!DOCTYPE html>
<html>
	<head>
 		<meta charset="UTF-8"/>
 		<title>Empréstimos de Coisas - Cadastro</title>
 		<!-- importando arquivos CSS -->
 		<link rel="stylesheet" href="css/estilo3.css">
 	</head>
		<body>	
			<header>
 				 <h2>Projeto Coisas Empretadas</h2>
			</header>

			<section>
			  <nav>
			   <a href="telaadministrador.php"><font color=white>Voltar</font></a>
		
 			 </nav>
  
 			 <article>
 			   <h1> Cadastro</h1>								
					<form action="insertusuario.php" method="post" name="formulario">
					<fieldset>
					<legend>Usuário:</legend>	
					<input type="hidden" name="id" value="<?php echo $id;?>"><br>
					Nome:<br>
					<input type="text" name="nome" value="<?php echo $idn;?>" Maxlength='100' required=""><br>
					Email:<br>
					<input type="text" name="email" value="<?php echo $ide;?>" Maxlength='100' required=""><br>
 					senha:<br>
					<input type="password" name="senha" value="<?php echo $ids;?>" Maxlength='12' placeholder="Digite a senha" required=""><br><br>
					
					<td><input type="submit" value="Cadastrar">&nbsp;
					<td><input type="reset" value="Limpar">	
					</fildset>
      				</form>
 			 </article>
			</section>

			<footer>
			  <p>&copy, ATP PUC-PR</p>
			</footer>
 				
 			</body>
</html>

