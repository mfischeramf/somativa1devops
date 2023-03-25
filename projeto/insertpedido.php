<?php
echo "Id: ".$_POST['id']."<br>";
echo "Id Cliente: ".$_POST['idc']."<br>";
echo "Id Item: ".$_POST['idi']."<br>";
echo "Data Emprestimo: ".$_POST['dte']."<br>";
echo "Data Devolução: ".$_POST['dtd']."<br>";


$id = $_POST['id'];
$idc = $_POST['idc'];
$idi = $_POST['idi'];
$dte =  $_POST['dte'];
$dtd = $_POST['dtd'];

$dem = $_POST['dem'];

?>

<?php
include "conexao.php";

if(empty($id)){

$sql = "INSERT INTO cliente_item (id_cliente, id_item, data_emprestimo, data_devolucao)
VALUES ('$idc','$idi','$dte','$dtd')";

if (mysqli_query($conn, $sql)) {
  header("location:http://localhost/atp/telainicial.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
else{
	$sql = "UPDATE cliente_item SET

	id_cliente='$idc',
	id_item='$idi',
	data_emprestimo='$dte',
	data_devolucao='$dtd',
	data_devolvido='$dem'

	WHERE id=$id";	
		
	
	if (mysqli_query($conn, $sql)) {
  header("location:http://localhost/atp/telainicial.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
mysqli_close($conn);
?>




