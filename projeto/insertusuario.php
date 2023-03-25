<?php
echo "Nome: ".$_POST['nome']."<br>";
echo "Email: ".$_POST['email']."<br>";
echo "Senha: ".$_POST['senha']."<br>";

$id = $_POST['id'];
$dn = $_POST['nome'];
$de = $_POST['email'];
$ds= $_POST['senha'];


?>

<?php
include "conexao.php";

if(empty($id)){

$sql = "INSERT INTO usuario (nome, email, senha)
VALUES ('$dn','$de','$ds')";

if (mysqli_query($conn, $sql)) {
  header("location:http://localhost/atp/cadastrousuario.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
else{
	$sql = "UPDATE usuario SET

	nome='$dn',
	email='$de',
	senha='$ds'

	WHERE id=$id";	
		
	
	if (mysqli_query($conn, $sql)) {
  header("location:http://localhost/atp/telaadministrador.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
mysqli_close($conn);
?>




