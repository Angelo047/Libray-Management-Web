<?php
    include 'includes/session.php';

    if(isset($_POST['add'])){
        $filename = $_FILES['pic']['name'][0];
				
		$photo = $_POST['photo'];
        $username = $_POST['username'];
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        
        $sql = "INSERT INTO admin (username, password, firstname, lastname, photo, created_on) VALUES('$username', '$password', '$fname', '$lname', '$photo', now())";

        if($conn->query($sql) === true){
            echo "<script>alert('Registration Success!')</script>";
            header("Location: admin.php");
        }
        else{
            echo "Error: ".$sql."<br>".$conn->error;
        }
    }
    
?>
