<?php
	include 'includes/session.php';

	if(isset($_POST['login'])){
		$student = $_POST['student'];
		$password = $_POST['password'];
		$sql = "SELECT * FROM students WHERE student_id = '$student'";
		$query = $conn->query($sql);
		if($query->num_rows > 0){
			
			$row = $query->fetch_assoc();
			if($row['password'] == $password){
			$_SESSION['student'] = $row['id'];
			header('location: transaction.php');
			}
			else{
				$_SESSION['error'] = 'Password incorrect';
			header('location: index.php');
			}
	
		}
		else{
			$_SESSION['error'] = 'Student not found';
			header('location: index.php');
		}

	}
	else{
		$_SESSION['error'] = 'Enter student id first';
		header('location: index.php');
	}


?>