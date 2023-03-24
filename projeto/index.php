<!DOCTYPE html>
<html>
	<head>
 		<meta charset="UTF-8"/>
 		<title>Empréstimos de Coisas - Login</title>
 		<!-- importando arquivos CSS -->
 		<link rel="stylesheet" href="css/estilo3.css">
 	</head>
		<body>	
			<header>
 				 <h2>Projeto Coisas Empretadas</h2>
			</header>

			<section>
			  <nav>
			    <ul>
  				    <form action="login.php" method="post" >
						<li><h1>Email</h1></li>
						<li><input type="email" name="email" placeholder="Digite um e-mail"><br></li>
						<li><h1>Senha</h1></li>
 						<li><input type="password" name="senha" placeholder="Digite a senha"><br><br></li>
						<li><input type="submit" value="Autenticar">
						<input type="reset" value="limpar"></li>
		   	 </ul>
			 			 
			 
 			 </nav>
  
 			 <article>
 			   <h1>Tela de Login</h1>
				    <p>Para acessar o sistema de controle de empréstimo de ferramentas você deverá fazer o logon com chave e senha de acesso.</p>
					<br>
					<?php 
			 
				if(isset($_GET['erro'])){
					echo "<mark>Usuário e senha incorretos</mark>";
			 }
				if(isset($_GET['autentica'])){
					echo "<mark>Usuário sem permissão</mark>";
			 }
			 
			 ?>
			 
 			 </article>
			</section>

			<footer>
			  <p>&copy, ATP PUC-PR</p>
			</footer>
 				
 			</body>
</html>

