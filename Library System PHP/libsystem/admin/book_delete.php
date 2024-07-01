<?php
	include 'includes/session.php';
	if(isset($_POST['delete'])){

		$id = $_POST['id'];

		$sql = "INSERT INTO book_inventory SELECT * FROM books WHERE id = '$id'";
		$sql2 = "SELECT * FROM books WHERE id = '$id'";
		$query2 = $conn->query($sql2); 
		$row = $query2->fetch_assoc();
		if ($conn->query($sql) === TRUE) {
			
			$sql3 = "UPDATE books
			SET quantity = quantity-1
			WHERE title = '$row[title]'";
			$query3 = $conn->query($sql3);  
			$sql = "DELETE FROM books WHERE id='$id'";
			$_SESSION['success'] = 'Book Moved successfully';
			$conn->query($sql);
		}
			else{
				$_SESSION['error'] = $conn->error;
			}
		}
	else{
		$_SESSION['error'] = 'Select item to delete first';
	}
	
	

	
       
              
    
	$sql = "SELECT title, COUNT(title) as Quantity FROM book_inventory GROUP BY title HAVING COUNT(title) ORDER BY title";
    	$query = $conn->query($sql);
        while($row = $query2->fetch_assoc()){
        $sql3 = "UPDATE book_inventory
        SET quantity = '$row[Quantity]'
        WHERE title = '$row[title]'";
        $query3 = $conn->query($sql3);          
    }
	header('location: book.php');
?>