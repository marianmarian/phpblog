<?php 
	include "../db/connect.php";
	$id_delete = $_GET['id'];
	$sql = "DELETE FROM posts WHERE id=" . $id_delete;
	
	$res = $conn->query($sql);

	if ($res) {
		header("Location: ../dashboard.php");
	}