<?php 
	include 'includes/session.php';

	if(isset($_POST['id'])){
		$id = $_POST['id'];
		$sql = "SELECT *, book_inventory.id AS bookid FROM book_inventory LEFT JOIN category ON category.id=book_inventory.category_id WHERE book_inventory.id = '$id'";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();

		echo json_encode($row);
	}
?>