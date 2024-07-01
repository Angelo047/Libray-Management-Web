<?php
    require "includes/conn.php";
    if(isset($_POST['submit'])){
        $filename = $_FILES['pic']['name'][0];
				
		move_uploaded_file($_FILES["pic"]["tmp_name"][0],'images/'.$filename);

        $studID = $_POST['studID'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
       
        $cID = $_POST['cID'];

        $sql = "INSERT INTO students (student_id, firstname, lastname, photo, course_id, created_on) VALUES('$studID', '$fname', '$lname', '$filename', '$cID', now())";

        if($conn->query($sql) === true){
            echo "<script>alert('Registration Success!')</script>";
        }
        else{
            echo "Error: ".$sql."<br>".$conn->error;
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <link rel="stylesheet" href="includes/style.css">
    <style>
        .btn:hover{
            cursor: pointer;
            background-color:#0088f7!important;
            box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);
        }
       
       @media only screen and (max-height: 600px) {
            
       }
    </style>
</head>
<body>
    <div class="w3-col l4 w3-white w3-container w3-card-4" style="height:675px;">
    <center><img src="images/nhs.png" alt="" style="height: 180px;">
        <h2><b>Student Registration</b></h2></center>
        <form action="" method="post" enctype="multipart/form-data">
            <label for="">Student ID</label>
            <input type="text" name="studID" id="studID" class="w3-input w3-round w3-border" required>
            <label for="">First Name</label>
            <input type="text" name="fname" id="" class="w3-input w3-round w3-border" required>
            <label for="">Last Name</label>
            <input type="text" name="lname" id="" class="w3-input w3-round w3-border" required>
            <label for="">Photo of the Student</label>
            <input type="file" name="pic[]" id="pic" class="w3-input w3-round w3-border" enctype = "multipart/form-data" required>
            <label for="">Course ID</label>
            <input type="text" name="cID" id="" class="w3-input w3-round w3-border" required>
            <br>
            <input type="submit" value="Register" class="w3-input w3-blue w3-round btn" name="submit">
            <br>
        </form>
    </div>
    <div class="w3-col l8 w3-blue" style="height: 675px;">
       
       <h1>Clear Photo of NHS school</h1>
       
    </div>
</body>
</html>