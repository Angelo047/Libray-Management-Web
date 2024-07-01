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
        Borrow Books
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Transaction</li>
        <li class="active">Borrow</li>
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
              <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> Borrow</a>
            </div>
            <div class="box-body scroll">
              <table id="example1" class="table table-bordered">
                <thead>
                  <th class="hidden"></th>
                  <th>Date</th>
                  <th>Student ID</th>
                  <th>Name</th>
                  <th>ISBN</th>
                  <th>Accession Number</th>
                  <th>Call Number</th>
                  <th>Title</th>
                  <th>Status</th>
                  <th>Due date</th>
                  <th>Message</th>
                </thead>
                <tbody>
                  <?php
                    $sql = "SELECT *, borrow.accnum AS an, borrow.callnum as cn, students.student_id AS stud, borrow.status AS barstat FROM borrow LEFT JOIN students ON students.id=borrow.student_id LEFT JOIN books ON books.id=borrow.book_id ORDER BY date_borrow DESC";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){
                      if($row['barstat']){
                        $status = '<span class="label label-success">returned</span>';
                      }
                      else{
                        $status = '<span class="label label-danger">not returned</span>';
                      }
                      echo "
                        <tr>
                          <td class='hidden'></td>
                          <td>".date('M d, Y', strtotime($row['date_borrow']))."</td>
                          <td>".$row['stud']."</td>
                          <td>".$row['firstname'].' '.$row['lastname']."</td>
                          <td>".$row['isbn']."</td>
                          <td>".$row['an']."</td>
                          <td>".$row['cn']."</td>
                          <td>".$row['title']."</td>
                          <td>".$status."</td>
                          <td>".date('M d, Y', strtotime($row['due_date']))."</td>";
                       
                      
                    ?>
                      <?php
                      
                        if($status == '<span class="label label-success">returned</span>'){
                          echo "<td></td>";
                        } 
                        elseif(strtotime($row['date_borrow']) > strtotime($row['due_date'])){
                          echo "<td>Overdue</td>";
                        } 
                        else{
                          echo "<td>Onhand</td>";
                        }
                       
                      ?>
                    </tr>
                  <?php }?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>   
  </div>
    
  <?php include 'includes/footer.php'; ?>
  <?php include 'includes/borrow_modal.php'; ?>
</div>
<?php include 'includes/scripts.php'; ?>
<script>
$(function(){
  $(document).on('click', '#append', function(e){
    e.preventDefault();
    $('#append-div').append(
      '<div class="form-group"><label for="" class="col-sm-3 control-label">ISBN</label><div class="col-sm-9"><input type="text" class="form-control" name="isbn[]"></div></div>'
    );
    $('#append-div').append(
      '<div class="form-group"><label for="" class="col-sm-3 control-label">Accession Number</label><div class="col-sm-9"><input type="text" class="form-control" name="accnum[]"></div></div>'
    );
    $('#append-div').append(
      '<div class="form-group"><label for="" class="col-sm-3 control-label">Call Number</label><div class="col-sm-9"><input type="text" class="form-control" name="callnum[]"></div></div>'
    );
    $('#append-div').append(
      '<div class="form-group"><label for="" class="col-sm-3 control-label">Due Date</label><div class="col-sm-9"><input type="date" class="form-control" name="due_date[]"></div></div>'
    );
  });
});
</script>
</body>
</html>
