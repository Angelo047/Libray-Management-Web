<?php include 'includes/session.php'; ?>
<?php
  $catid = 0;
  $where = '';
  if(isset($_GET['category'])){
    $catid = $_GET['category'];
    $where = 'WHERE book_inventory.category_id = '.$catid;
  }

?>
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
        Book Inventory
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Books</li>
        <li class="active">Book Inventory</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              ".$_SESSION['error']."
            </div>
          ";
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
            <br>
              <div class="box-tools pull-right">
                <form class="form-inline">
                  <div class="form-group">
                    <label>Category: </label>
                    <select class="form-control input-sm" id="select_category">
                      <option value="0">ALL</option>
                      <?php
                        $sql = "SELECT * FROM category";
                        $query = $conn->query($sql);
                        while($catrow = $query->fetch_assoc()){
                          $selected = ($catid == $catrow['id']) ? " selected" : "";
                          echo "
                            <option value='".$catrow['id']."' ".$selected.">".$catrow['name']."</option>
                          ";
                        }
                      ?>
                    </select>
                  </div>
                </form>
              </div>
            </div>
            <div class="box-body scroll">
              <table id="example1" class="table table-bordered">
                <thead>
                  <th>Category</th>
                  <th>ISBN</th>
                  <th>Accession Number</th>
                  <th>Call Number</th>
                  <th>Title</th>
                  <th>Author</th>
                  <th>Publisher</th>
                  <th>Status</th>
                  <th>Quantity</th>
                  <th>Photos</th>
                  <th>PDF</th>
                  <th>Tools</th>
                </thead>
                <tbody>
                  <?php
                    $sql = "SELECT *, book_inventory.id AS bookid FROM book_inventory LEFT JOIN category ON category.id=book_inventory.category_id $where";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){
                      if($row['status']){
                        $status = '<span class="label label-warning">Condemn</span>';
                      }
                      else{
                        $status = '<span class="label label-warning">Condemn</span>';
                      }
                      $photo = (!empty($row['photo'])) ? '../images/Book Photos/'.$row['photo'] : '../images/Book Photos/';
                      echo "
                        <tr>
                          <td>".$row['name']."</td>
                          <td>".$row['isbn']."</td>
                          <td>".$row['accnum']."</td>
                          <td>".$row['callnum']."</td>
                          <td>".$row['title']."</td>
                          <td>".$row['author']."</td>
                          <td>".$row['publisher']."</td>
                          <td>".$status."</td>
                          <td>".$row['quantity']."</td>
                          <td>
                          <img src='".$photo."' width='100px' height='100px'><a href='#upload' data-toggle='modal' class='pull-right photo' data-id='".$row['bookid']."'><span class='fa fa-edit'></span></a>
                          </td>";
                          if($row['pdf'] == ''){ echo "
                            <td><p style='background-color:#FFA500; width: 50%;'> No PDF File</p><a href='#upload_pdf' data-toggle='modal' class='pull-right pdf' data-id='".$row['bookid']."'><span class='fa fa-edit'></span></a>
                            </td> ";
                          }
                          else{ echo "
                            <td>".$row['pdf']."<a href='#upload_pdf' data-toggle='modal' class='pull-right pdf' data-id='".$row['bookid']."'><span class='fa fa-edit'></span></a>
                            </td>";

                          }
                          echo "
                          <td>
                          <button class='btn btn-success btn-sm edit btn-flat' data-id='".$row['bookid']."'><i class='fa fa-edit'></i> Edit</button>
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
  <?php include 'includes/book_inventory_modal.php'; ?>
</div>
<?php include 'includes/scripts.php'; ?>
<script>
  $('#select_category').change(function(){
    var value = $(this).val();
    if(value == 0){
      window.location = 'Book_Inventory.php';
    }
    else{
      window.location = 'Book_Inventory.php?category='+value;
    }
  });
  $(function(){
  $(document).on('click', '.edit', function(e){
    e.preventDefault();
    $('#edit').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });
  $(document).on('click', '.photo', function(e){
    e.preventDefault();
    var id = $(this).data('id');
    getRow(id);
  });

  $(document).on('click', '.pdf', function(e){
    e.preventDefault();
    var id = $(this).data('id');
    getRow(id);
  });
});

function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'book_inventory_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.bookid').val(response.bookid);
      $('#edit_isbn').val(response.isbn);
      $('#edit_accnum').val(response.accnum);
      $('#edit_callnum').val(response.callnum);
      $('#edit_title').val(response.title);
      $('#catselect').val(response.category_id).html(response.name);
      $('#edit_author').val(response.author);
      $('#edit_publisher').val(response.publisher);
      $('#datepicker_edit').val(response.publish_date);
      $('#edit_quantity').val(response.quantity);
      $('#del_book').html(response.title);
      $('.upl_book').html(response.title);
      $('.upl_pdf').html(response.pdf);
    }
  });
}
</script>
</body>
</html>
