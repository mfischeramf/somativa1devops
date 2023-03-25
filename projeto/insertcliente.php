<?php
echo "Nome: ".$_POST['nome']."<br>";
echo "Sobrenome: ".$_POST['sobrenome']."<br>";
echo "Telefone: ".$_POST['telef']."<br>";


$dn = $_POST['nome'];
$dsn = $_POST['sobrenome'];
$tl= $_POST['telef'];


?>

<?php
include "conexao.php";

if(empty($id)){

$sql = "INSERT INTO cliente (nome, sobrenome, telefone)
VALUES ('$dn','$dsn','$tl')";

if (mysqli_query($conn, $sql)) {
   header("location:http://localhost/atp/cadastrocliente.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
else{
	$sql = "UPDATE cliente SET

	nome='$dn',
	email='$de',
	senha='$ds'

	WHERE id=$id";	
		
	
	if (mysqli_query($conn, $sql)) {
  header("location:http://localhost/atp/cadastrocliente.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}

mysqli_close($conn);
?>
