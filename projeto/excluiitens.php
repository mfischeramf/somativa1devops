<?php

include "conexao.php";



	$id = $_GET['id'];
	$sql = "DELETE FROM item_emprestimo WHERE id = $id";
	
	if (mysqli_query($conn, $sql)) {
		header("location:http://localhost/atp/telaadministrador.php");
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>