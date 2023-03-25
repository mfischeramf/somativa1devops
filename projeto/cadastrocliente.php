<?php
		require "autentica.php";
?>
<?php

include "conexao.php";

$id = "";
$idn = "";
$ids = "";
$idt = "";


if(isset($_GET['id'])){
	$id = $_GET['id'];
	$sql = "SELECT * FROM cliente WHERE id = $id";
	$res = mysqli_query($conn,$sql);
	$row = mysqli_fetch_assoc($res);
	
$id = $row['id'];
$idn = $row['nome'];
$ids = $row['sobrenome'];
$idt = $row['telefone'];
	
	
	
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
			   <a href="telainicial.php"><font color=white>Voltar</font></a>
		
 			 </nav>
  
 			 <article>
 			   <h1> Cadastro</h1>								
					<form action="insertcliente.php" method="post" name="formulario">
					<fieldset>
					<legend>Cliente:</legend>	
					<input type="hidden" name="id" value="<?php echo $id;?>"><br>
					Nome:<br>
					<input type="text" name="nome" value="<?php echo $idn;?>" Maxlength='15' required=""><br>
					Sobrenome:<br>
					<input type="text" name="sobrenome" value="<?php echo $ids;?>" Maxlength='15' required=""><br>
 					Telefone:<br>
					<input type="text" name="telef" value="<?php echo $idt;?>" Maxlength='12' required=""><br><br>
					
					<td><input type="submit" value="Cadastrar">&nbsp;
					<td><input type="reset" value="Limpar">	
					</fildset>
      				</form>
					<br><br>
					
					
								 <table>
			 <h1>Clientes Cadastrados<br></h1>
			 		<tr>
					    <th>Id</th>
 						<th>Descrição</th>
						<th>Quantidade</th>
						
					</tr>
<?php

include "conexao.php";

$sql = "SELECT * FROM cliente";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row

  while($row = mysqli_fetch_assoc($result)) {
	  echo "<tr>
	  <td>".$row["id"]."</td>
	  <td>".$row["nome"]."</td>
	  <td>".$row["sobrenome"]."</td>
	  <td>".$row["telefone"]."</td>
	  <td><a href='cadastrocliente.php?id=".$row["id"]."'>Editar</a></td>
	  <td><a href='excluicliente.php?id=".$row["id"]."'>Excluir</a></td>
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

