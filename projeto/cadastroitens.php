<?php
		require "autentica.php";
?>
<?php

include "conexao.php";

$id = "";
$idd = "";
$idq = "";



if(isset($_GET['id'])){
	$id = $_GET['id'];
	$sql = "SELECT * FROM item_emprestimo WHERE id = $id";
	$res = mysqli_query($conn,$sql);
	$row = mysqli_fetch_assoc($res);
	
$id = $row['id'];
$idd = $row['descricao'];
$idq = $row['quantidade'];

	
	
	
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
 			   <h1> Cadastro </h1>		  								
					<form action="insertitem.php" method="post" >
					<fieldset>
					<legend>Novo Item:</legend>	
					<input type="hidden" name="id" value="<?php echo $id;?>"><br>				
					Id Item:<br>
					<input type="text" name="iditem" ><br>
					Descrição:<br>
					<input type="text" name="descres" value="<?php echo $idd;?>" Maxlength='20' required=""><br>
 					Quantidade:<br>
					<input type="number" name="qtdest" value="<?php echo $idq;?>" min="0" max="10" required=""><br><br>
					<input type="submit" value="Cadastrar">&nbsp;
					<input type="reset" value="Limpar">
      				</form>
					</fieldset>
					</form>
 			 </article>
			</section>

			<footer>
			  <p>&copy, ATP PUC-PR</p>
			</footer>
 				
 			</body>
</html>

