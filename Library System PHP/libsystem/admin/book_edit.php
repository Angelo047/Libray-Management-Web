<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$isbn = $_POST['isbn'];
		$accnum = $_POST['accnum'];
		$callnum = $_POST['callnum'];
		$title = $_POST['title'];
		$category = $_POST['category'];
		$author = $_POST['author'];
		$publisher = $_POST['publisher'];
		$pub_date = $_POST['pub_date'];
		$quantity = $_POST['quantity'];

		$sql = "UPDATE books SET isbn = '$isbn', accnum = '$accnum', callnum = '$callnum',  title = '$title', category_id = '$category', author = '$author', publisher = '$publisher', publish_date = '$pub_date', 
		quantity ='$quantity' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Book updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location:book.php');

?>