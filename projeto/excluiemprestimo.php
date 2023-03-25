<?php

include "conexao.php";



	$id = $_GET['id'];
	$sql = "DELETE FROM cliente_item WHERE id = $id";
	
	if (mysqli_query($conn, $sql)) {
		header("location:http://localhost/atp/telainicial.php");
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>