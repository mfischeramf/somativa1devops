<?php
		require "autentica.php";
?>

<!DOCTYPE html>
<html>
	<head>
 		<meta charset="UTF-8"/>
 		<title>Empréstimos de Coisas -Início</title>
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
				<li><p><button onclick="document.location='dadosusuario.php'">&nbsp;Alterar dados do Usuário&nbsp;</a></button></p><br></li>
				<li><p><button onclick="document.location='cadastrocliente.php'">&nbsp;Cadastro de Novo Cliente&nbsp;</a></button></p><br></li>
				<li><p><button onclick="document.location='novoemprestimo.php'">&nbsp;Cadastro de Novo Empréstimo&nbsp;</a></button></p><br></li>
				
				<?php
				
					if($_SESSION['id']==1){
						echo "<a href='telaadministrador.php'><font color=white>Administrador</font></a>";
					}
				?>
				
					
			    </ul>

 			 </nav>
  
 			 <article>
			 Bem Vindo Usuário <?php echo $_SESSION['nome'];?>!<br>
			 <a href="logout.php">Sair</a>
			 <br><br>
			 	 
			 <table>
			 <h1>Lista de Itens Emprestados<br></h1>
			 		<tr>
					    <th>Id</th>
 						<th>Nome</th>
						<th>Telefone</th>
						<th>Item</th>
						<th>Data Emprestimo</th>
						<th>Data Devolução</th>
						<th>Devolvido EM:</th>
					</tr>
<?php

include "conexao.php";

$sql = "SELECT s.id, c.nome, c.telefone, i.descricao, s.data_emprestimo, s.data_devolucao, s.data_devolvido FROM cliente c
INNER JOIN cliente_item s ON c.id = s.id_cliente
INNER JOIN item_emprestimo i ON s.id_item = i.id
";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row

  while($row = mysqli_fetch_assoc($result)) {
	  $hj=date("Y-m-d");
	  $dv=$row["data_devolucao"];
	  if($dv<=$hj){
		  $dvv = "<mark>$dv</mark>";
	  }
	  else{
		  $dvv = "$dv";
	  }
	  
	  
	  echo "<tr>
	  <td>".$row["id"]."</td>
	  <td>".$row["nome"]."</td>
	  <td>".$row["telefone"]."</td>
	  <td>".$row["descricao"]."</td>
	  <td>".$row["data_emprestimo"]."</td>
	  <td>$dvv</td>
	  <td>".$row["data_devolvido"]."</td>
	  <td><a href='novoemprestimo.php?id=".$row["id"]."'>Editar</a></td>
	  <td><a href='excluiemprestimo.php?id=".$row["id"]."'>Excluir</a></td>
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
