<?php
echo "Id: ".$_POST['iditem']."<br>";
echo "Descrição: ".$_POST['descres']."<br>";
echo "Quantidade: ".$_POST['qtdest']."<br>";

$id = $_POST['id'];
$di = $_POST['iditem'];
$dd = $_POST['descres'];
$dq= $_POST['qtdest'];


?>

<?php
include "conexao.php";

if(empty($id)){

$sql = "INSERT INTO item_emprestimo (id, descricao, quantidade)
VALUES ('$di','$dd','$dq')";

if (mysqli_query($conn, $sql)) {
  header("location:http://localhost/atp/cadastroitens.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
else{
	$sql = "UPDATE item_emprestimo SET

	descricao='$dd',
	quantidade='$dq'
	

	WHERE id=$id";	
		
	
	if (mysqli_query($conn, $sql)) {
  header("location:http://localhost/atp/telaadministrador.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
mysqli_close($conn);
?>