<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$isbn = $_POST['isbn'];
		$accnum = $_POST['accnum'];
		$callnum = $_POST['callnum'];
		$title = $_POST['title'];
		$category = $_POST['category'];
		$author = $_POST['author'];
		$publisher = $_POST['publisher'];
		$pub_date = $_POST['pub_date'];
		$quantity = $_POST['quantity'];
		$photo = $_POST['photo'];
		$pdf = $_POST['pdf'];

		$sql = "INSERT INTO books (isbn, accnum, callnum, category_id, title, author, publisher, publish_date, quantity, photo, pdf) VALUES ('$isbn', '$accnum', '$callnum', '$category', '$title', '$author', '$publisher', '$pub_date' , '$quantity', '$photo' , '$pdf')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Book added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}	
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: book.php');

?>