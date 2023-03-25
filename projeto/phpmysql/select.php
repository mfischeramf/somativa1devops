<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>
<?php
include "conexao.php";

$sql = "SELECT * FROM emprestimo";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  $cont=0;
  $lista = array();
  while($row = mysqli_fetch_assoc($result)) {
	$lista[]=$row["id"];
	$lista[] =$row["item_emprestado"];
	$lista[]=$row["data_emprestimo"];
	$lista[] =$row["nome"];
	$lista[] =$row["sobrenome"];
	$lista[]=$row["telefone"];
	$lista[] =$row["data_devolucao"];
	$lista[] =$row["data_devolvido"];
	$cont=count($lista);
  }
echo "$cont";
} else {
  echo "0 results";
}

mysqli_close($conn);

?>

 <h1> Lista de Itens Emprestados </h1>
 <?php
 $l=$cont/8;
 $c=8;
 $d=0;
					echo"<p><table>"; 
					$il=1;
					while($il<=$l){
						echo "<tr>";
						$ic=1;
						while($ic<=$c){
							echo "<td> $lista[$d] </td>";
						$ic++;
						$d++;
						}
						echo "</tr>";
						$il++;
					}
 						
 					echo "</table></p>";					
?>
 			 

