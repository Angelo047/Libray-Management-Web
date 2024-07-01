<?php
	include 'includes/session.php';

	if(isset($_POST['upload'])){
		$id = $_POST['id'];
		$filename = $_FILES['pdf']['name'];
		if(!empty($filename)){
			move_uploaded_file($_FILES['pdf']['tmp_name'], '../PDFFile/'.$filename);	
		}
		
		$sql = "UPDATE books SET pdf = '$filename' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Book pdf updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Select book to update pdf first';
	}

	header('location: book.php');
?>
