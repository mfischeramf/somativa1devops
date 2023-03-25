<?php
		require "autentica.php";
?>
<?php

include "conexao.php";

$id = "";
$idc = "";
$idi = "";
$dte = "";
$dtd = "";
$dem = "";

if(isset($_GET['id'])){
	$id = $_GET['id'];
	$sql = "SELECT * FROM cliente_item WHERE id = $id";
	$res = mysqli_query($conn,$sql);
	$row = mysqli_fetch_assoc($res);
	
$id = $row['id'];
$idc = $row['id_cliente'];
$idi = $row['id_item'];
$dte = $row['data_emprestimo'];
$dtd = $row['data_devolucao'];	
$dem = $row['data_devolvido'];	
	
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
 			   <h1> Cadastro</h1><br>
				  
					<form action="insertpedido.php" method="post" >
					 <fieldset>
					<legend>Novo Empréstimo:</legend>
					
					<input type="hidden" name="id" value="<?php echo $id;?>"><br>
					
					Id Cliente:<br>
					<input type="text" name="idc" value="<?php echo $idc;?>" Maxlength='15'required=""><br><br>
					Id Item:<br>
					<input type="text" name="idi" value="<?php echo $idi;?>"Maxlength='15'required=""><br><br>
					Data Emprestimo:<br>
					<input type="date" name="dte" value="<?php echo $dte;?>"Maxlength='12'required=""><br><br>
					Data Devolução:<br>
					<input type="date" name="dtd" value="<?php echo $dtd;?>" Maxlength='12'required=""><br><br>
					Devolvido EM::<br>
					<input type="date" name="dem" value="<?php echo $dem;?>" Maxlength='12'><br><br>

					
					<input type="submit" value="&nbsp;Cadastrar&nbsp;">&nbsp
					<input type="reset" value="&nbsp;&nbsp;Limpar&nbsp;&nbsp;">&nbsp
					
   					</fieldset>
					</form>
 			 </article>
			</section>

			<footer>
			  <p>&copy, ATP PUC-PR</p>
			</footer>
 				
 			</body>
</html>

