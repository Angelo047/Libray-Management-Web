

<?php
include "conn.php";
$userid = $_POST['userid'];
$sql = "SELECT *, books.id AS bookid FROM books LEFT JOIN category ON category.id=books.category_id where books.id=".$userid;
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result)){
?>
<div class="card">
    <div class="card-header">
        <h3 class="card-title"><?php echo $row['title']; ?></h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-4">
                <img src="images/Book Photos/<?php echo $row['photo']; ?>" class="img-fluid" alt="Book Image" style="padding-right: 15px;">
            </div>
            <div class="col-md-8">
                <p><strong>ISBN:</strong> <?php echo $row['isbn']; ?></p>
                <p><strong>Accession Number:</strong> <?php echo $row['accnum']; ?></p>
                <p><strong>Call Number:</strong> <?php echo $row['callnum']; ?></p>
                <p><strong>Category:</strong> <?php echo $row['name']; ?></p>
                <p><strong>Author:</strong> <?php echo $row['author']; ?></p>
                <p><strong>Publisher:</strong> <?php echo $row['publisher']; ?></p>
                <p><strong>Publish Date:</strong> <?php echo $row['publish_date']; ?></p>
                <p>Status: <?php echo ($row['status'] == 0) ? '<span class="label label-success">available</span>' : '<span class="label label-danger">not available</span>'; ?></p>
                </div>
        </div>
    </div>
</div>
<?php } ?>