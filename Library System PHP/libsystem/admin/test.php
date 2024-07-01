<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include 'includes/navbar.php'; ?>
  <?php include 'includes/menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Return Books
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Transaction</li>
        <li class="active">Return</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
   
      <?php
        if(isset($_SESSION['error'])){
          ?>
            <div class="alert alert-danger alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h4><i class="icon fa fa-warning"></i> Error!</h4>
                <ul>
                <?php
                  foreach($_SESSION['error'] as $error){
                    echo "
                      <li>".$error."</li>
                    ";
                  }
                ?>
                </ul>
            </div>
          <?php
          unset($_SESSION['error']);
        }

        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      ?>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
              <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> Returns</a>
            </div>
            <div class="box-body scroll">
              <table id="example1" class="table table-bordered">
                <thead>
                  <th class="hidden"></th>
                  <th>Category</th>
                  <th>ISBN</th>
                  <th>Accession Number</th>
                  <th>Call Number</th>
                  <th>Title</th>
                  <th>Author</th>
                  <th>Publisher</th>
                  <th>Status</th>
                  <th>Quantity</th>
               
                  <th>PDF</th>
                  <th>Tools</th>
                 
                </thead>
                <tbody>
                  <?php
                    $sql = "SELECT *, books.id AS bookid FROM books LEFT JOIN category ON category.id=books.category_id ORDER BY title";
                    $query = $conn->query($sql);
                    $sql2 = "SELECT title, COUNT(title) as Quantity FROM books WHERE status = 0 GROUP BY title HAVING COUNT(title) ORDER BY title";
                    $query2 = $conn->query($sql2);
                    $row = $query->fetch_assoc();
                    while($row2 = $query2->fetch_assoc()){
                      $sql3 = "UPDATE book
                      SET quantity = '$row2[Quantity]'
                      WHERE title = '$row2[title]'";
                      $query3 = $conn->query($sql3);
                    
                    }
                    while($row = $query->fetch_assoc()){
                        
                      if($row['status']){
                        $status = '<span class="label label-danger">borrowed</span>';
                      }
                      else{
                        $status = '<span class="label label-success">returned</span>';
                      }
                     
                      
                       
                      echo "
                        <tr>
                        <td>".$row['name']."</td>
                        <td>".$row['isbn']."</td>
                        <td>".$row['accnum']."</td>
                        <td>".$row['callnum']."</td>
                        <td>".$row['title']."</td>
                        <td>".$row['author']."</td>
                        <td>".$row['publisher']."</td>
                        <td>".$status."</td>";
                        
                        
                        echo"<td>".$row['quantity']."</td>";
                        
                        
                        if($row['pdf'] == ''){ echo "
                          <td><p style='background-color:#FFA500;'> No PDF File</p><a href='#upload_pdf' data-toggle='modal' class='pull-right pdf' data-id='".$row['bookid']."'><span class='fa fa-edit'></span></a>
                          </td> ";
                        }
                        else{ echo "
                          <td>".$row['pdf']."<a href='#upload_pdf' data-toggle='modal' class='pull-right pdf' data-id='".$row['bookid']."'><span class='fa fa-edit'></span></a>
                          </td>";

                        }
                        echo "
                        <td>
                          <button class='btn btn-success btn-sm edit btn-flat' data-id='".$row['bookid']."'><i class='fa fa-edit'></i> Edit</button>
                          <button class='btn btn-danger btn-sm delete btn-flat' data-id='".$row['bookid']."'><i class='fa fa-trash'></i> Delete</button>
                        </td>
                         
                        </tr>
                      ";
                     
                    
                    }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>   
  </div>
    
  <?php include 'includes/footer.php'; ?>
  <?php include 'includes/return_modal.php'; ?>
</div>
<?php include 'includes/scripts.php'; ?>
<script>
$(function(){
  $(document).on('click', '#append', function(e){
    e.preventDefault();
    $('#append-div').append(
      '<div class="form-group"><label for="" class="col-sm-3 control-label">ISBN</label><div class="col-sm-9"><input type="text" class="form-control" name="isbn[]"></div></div>'
    );
  });
});
</script>
</body>
</html>