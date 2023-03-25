
<?php
	require "autentica.php";
	if($_SESSION['id']!=1){
					header("Location:logout.php");
					}
?>

<!DOCTYPE html>
<html>
	<head>
 		<meta charset="UTF-8"/>
 		<title>Empréstimos de Coisas</title>
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
				<li><p><button onclick="document.location='cadastrousuario.php'">&nbsp;Cadastro de Usuários&nbsp;</a></button></p><br></li>
				<li><p><button onclick="document.location='cadastroitens.php'">&nbsp;&nbsp;&nbsp;&nbsp;Cadastro de Itens&nbsp;&nbsp;&nbsp;&nbsp;</a></button></p><br></li>
				</ul>
 			 </nav>
  
 			 <article>
			 Bem Vindo Usuário <?php echo $_SESSION['nome'];?>!<br>
			 <a href="logout.php">Sair</a>
			 <br><br>
			 <table>
			 <h1>Usuários Cadastrados<br></h1>
			 		<tr>
					    <th>Id</th>
 						<th>Nome</th>
						<th>Email</th>
						
					</tr>
<?php

include "conexao.php";

$sql = "SELECT * FROM usuario";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row

  while($row = mysqli_fetch_assoc($result)) {
	  echo "<tr>
	  <td>".$row["id"]."</td>
	  <td>".$row["nome"]."</td>
	  <td>".$row["email"]."</td>
	  <td><a href='cadastrousuario.php?id=".$row["id"]."'>Editar</a></td>
	  <td><a href='excluiusuario.php?id=".$row["id"]."'>Excluir</a></td>
	  </tr>";
		
  }
} else {
  echo "0 results";
}

mysqli_close($conn);

					
?>
			</table><br>

			 <table>
			 <h1>Itens Cadastrados<br></h1>
			 		<tr>
					    <th>Id</th>
 						<th>Descrição</th>
						<th>Quantidade</th>
						
					</tr>
<?php

include "conexao.php";

$sql = "SELECT * FROM item_emprestimo";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row

  while($row = mysqli_fetch_assoc($result)) {
	  echo "<tr>
	  <td>".$row["id"]."</td>
	  <td>".$row["descricao"]."</td>
	  <td>".$row["quantidade"]."</td>
	  <td><a href='cadastroitens.php?id=".$row["id"]."'>Editar</a></td>
	  <td><a href='excluiitens.php?id=".$row["id"]."'>Excluir</a></td>
	  </tr>";
		
  }
} else {
  echo "0 results";
}

mysqli_close($conn);

					
?>
			</table>			

 			 </article>
			</section>

			<footer>
			  <p>&copy, ATP PUC-PR</p>
			</footer>
 				
 			</body>
</html>

