<?php
echo "Descrição: ".$_POST['descres']."<br>";
echo "Dt_emprestimo: ".$_POST['dataemp']."<br>";
echo "Nome: ".$_POST['nome']."<br>";
echo "Sobrenome: ".$_POST['sobrenome']."<br>";
echo "Telefone: ".$_POST['telef']."<br>";
echo "Data prevista: ".$_POST['devprev']."<br>";

$ds = $_POST['descres'];
$dte = $_POST['dataemp'];
$nm =  $_POST['nome'];
$sn = $_POST['sobrenome'];
$tl= $_POST['telef'];
$dp = $_POST['devprev'];

?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "coisas_emprestadas";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO emprestimo (item_emprestado, data_emprestimo, nome, sobrenome, telefone, data_devolucao)
VALUES ('$ds','$dte','$nm','$sn','$tl','$dp')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>




