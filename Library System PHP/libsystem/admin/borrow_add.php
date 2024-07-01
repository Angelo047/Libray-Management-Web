<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$student = $_POST['student'];
		
		$sql = "SELECT * FROM students WHERE student_id = '$student'";
		$query = $conn->query($sql);
		if($query->num_rows < 1){
			if(!isset($_SESSION['error'])){
				$_SESSION['error'] = array();
			}
			$_SESSION['error'][] = 'Student not found';
		}
		else{
			$row = $query->fetch_assoc();
			$student_id = $row['id'];

			$added = 0;
			foreach($_POST['isbn'] as $i => $isbn){
				if(!empty($isbn)){
					$accnum = $_POST['accnum'][$i];
					$callnum = $_POST['callnum'][$i];
					$sql = "SELECT * FROM books WHERE isbn = '$isbn' AND status != 1 AND accnum = '$accnum' AND callnum = '$callnum'";
					$query = $conn->query($sql);
					if($query->num_rows > 0){
						$brow = $query->fetch_assoc();
						$bid = $brow['id'];
						$bTitle = $brow['title'];
						$dDate = $_POST['due_date'][$i];
						


						$sql = "INSERT INTO borrow (student_id, book_id, date_borrow, due_date, accnum, callnum) VALUES ('$student_id', '$bid', NOW(), '$dDate', '$accnum', '$callnum')";
						if($conn->query($sql)){
							$added++;
							$sql = "UPDATE books SET quantity=quantity-1 WHERE title = '$bTitle'";
							$conn->query($sql);
							$sql = "UPDATE books SET  status = 1 WHERE  id = '$bid' ";
							$conn->query($sql);
						}
						else{
							if(!isset($_SESSION['error'])){
								$_SESSION['error'] = array();
							}
							$_SESSION['error'][] = $conn->error;
						}

					}
					else{
						if(!isset($_SESSION['error'])){
							$_SESSION['error'] = array();
						}
						$_SESSION['error'][] = 'Book with ISBN - '.$isbn.' or Accesion Number - '.$accnum.' or Call Number - '.$callnum.' unavailable';
					}
		
				}
			}

			if($added > 0){
				$book = ($added == 1) ? 'Book' : 'Books';
				$_SESSION['success'] = $added.' '.$book.' successfully borrowed';
			}

		}
	}	
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: borrow.php');

?>