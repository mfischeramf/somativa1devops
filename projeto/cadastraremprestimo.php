<?php
		require "autentica.php";
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
		
 			 </nav>
  
 			 <article>
 			   <h1> Cadastro</h1><br>
				  
					<form action="phpmysql/insert.php" method="post" >
					 <fieldset>
					<legend>Novo Empréstimo:</legend>
					
					Descrição:<br>
					<input type="text" name="descres" Maxlength='20'required=""><br><br>
					Data do Empréstimo:<br>
					<input type="date" name="dataemp" Maxlength='12'required=""><br><br>
					Nome:<br>
					<input type="text" name="nome" Maxlength='15'required=""><br><br>
					Sobrenome:<br>
					<input type="text" name="sobrenome" Maxlength='15'required=""><br><br>
					Telefone:<br>
					<input type="text" name="telef" Maxlength='12'required=""><br><br>
					Devolução Prevista:<br>
					<input type="date" name="devprev" Maxlength='12'required=""><br><br>
					<input type="submit" value="&nbsp;Cadastrar&nbsp;">&nbsp
					<input type="reset" value="&nbsp;&nbsp;Limpar&nbsp;&nbsp;">
   					</fieldset>
					</form>
 			 </article>
			</section>

			<footer>
			  <p>&copy, ATP PUC-PR</p>
			</footer>
 				
 			</body>
</html>

