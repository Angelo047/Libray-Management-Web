<?php
	$conn = new mysqli('localhost', 'root', '', 'libsystem');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
	$sql22 = "SELECT title, COUNT(title) as Quantity FROM books WHERE status = 0 GROUP BY title HAVING COUNT(title) ORDER BY title";
                      $query22 = $conn->query($sql22);
                      
                      while($row22 = $query22->fetch_assoc()){
                        $sql33 = "UPDATE books
                        SET quantity = '$row22[Quantity]'
                        WHERE title = '$row22[title]'";
                        $query3 = $conn->query($sql33);
                       
    }
	
	 $sql22 = "SELECT title, COUNT(title) as Quantity FROM book_inventory WHERE status = 0 GROUP BY title HAVING COUNT(title) ORDER BY title";
     $query22 = $conn->query($sql22);
                      
    while($row22 = $query22->fetch_assoc()){
		$sql33 = "UPDATE book_inventory
		SET quantity = '$row22[Quantity]'
		WHERE title = '$row22[title]'";
		$query3 = $conn->query($sql33);
    }
?>