<?php include 'includes/session.php'; ?>
<?php
	$where = '';
	if(isset($_GET['category'])){
		$catid = $_GET['category'];
		$where = 'WHERE category_id = '.$catid;
	}
?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">
<style>
	@media only screen and (max-width: 1000px) {
		div.scroll {
          overflow-x: auto;
          overflow-y: hidden;
          white-space: nowrap;
        }
	}
        
      </style>
<div class="wrapper">

	<?php include 'includes/navbar.php'; ?>
	 
	  <div class="content-wrapper">
	    <div class="container">

	      <!-- Main content -->
	      <section class="content ">
	        <div class="row">
	        	<div class="col-sm-10 col-sm-offset-1">
	        		<?php
	        			if(isset($_SESSION['error'])){
	        				echo "
	        					<div class='alert alert-danger'>
	        						".$_SESSION['error']."
	        					</div>
	        				";
	        				unset($_SESSION['error']);
	        			}
	        		?>
	        		<div class="box">
	        			<div class="box-header with-border">
	        				<div class="input-group">
				                <input type="text" class="form-control input-lg" id="searchBox" placeholder="Search for ISBN, Title or Author">
				                <span class="input-group-btn">
				                    <button type="button" class="btn btn-primary btn-flat btn-lg"><i class="fa fa-search"></i> </button>
				                </span>
				            </div>
	        			</div>
	        			<div class="box-body scroll">
	        				<div class="input-group col-sm-5">
				                <span class="input-group-addon">Category:</span>
				                <select class="form-control" id="catlist">
				                	<option value=0>ALL</option>
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
	        				<table class="table table-bordered table-striped" id="booklist">
			        			<thead>
			        				<th>ISBN</th>
									<th>Accession Number</th>
									<th>Call Number</th>
			        				<th>Title</th>
			        				<th>Author</th>
			        				<th>Status</th>
									<th>Photo</th>
									<th>Action</th>
			
			        			</thead>
			        			<tbody>
			        			<?php
			        				$sql = "SELECT * FROM books $where";
			        				$query = $conn->query($sql);
			        				while($row = $query->fetch_assoc()){
			        					$status = ($row['status'] == 0) ? '<span class="label label-success">available</span>' : '<span class="label label-danger">not available</span>';
										$photo = (!empty($row['photo'])) ? '../images/Book Photos/'.$row['photo'] : '../images/Book Photos/';
										echo "

			        						<tr>
			        							<td>".$row['isbn']."</td>
												<td>".$row['accnum']."</td>
			        							<td>".$row['callnum']."</td>
			        							<td>".$row['title']."</td>
			        							<td>".$row['author']."</td>
			        							<td>".$status."</td>
												<td>
												<img src='images/Book Photos/".$row['photo']."' width='100px' height='100px'>
												</td>
												";?>
												<?php
													if($row['pdf'] == ""){?>
														<td>
														  <center><p class='btn  btn-sm  btn' style ="background-color:#FFA500;"> Library Only</p></center> <br>
														  <center><button data-id='<?php echo $row['id']; ?>' class="userinfo btn btn-primary"><i class="fa fa-info-circle"></i> Info</button></center>
														</td>
													</tr>
												<?php }
												else{ ?>
													<td>
														<center><a href="PDFFile/<?php echo $row['pdf']?>" target='_blank'><button class='btn btn-success btn-sm edit btn'><i class='fa fa-eye'></i> View</button></a></center><br> 
														<center><button data-id='<?php echo $row['id']; ?>' class="userinfo btn btn-primary"><i class="fa fa-info-circle"></i> Info</button></center>
													</td>
													</tr>
												<?php }	
										}?>
			        			</tbody>
			        		</table>
	        			</div>
	        		</div>
	        	</div>
	        </div>
	      </section>
	     
	    </div>
	  </div>
	  <?php include 'includes/details_modal.php'; ?>
  	<?php include 'includes/footer.php'; ?>
</div>
<?php include 'includes/scripts.php'; ?>
<script>
$(function(){
	$('#catlist').on('change', function(){
		if($(this).val() == 0){
			window.location = 'index.php';
		}
		else{
			window.location = 'index.php?category='+$(this).val();
		}
		
	});
	$(document).ready(function(){
                $('.userinfo').click(function(){
                    var userid = $(this).data('id');
                    $. ajax({
                        url: 'includes/ajaxfile.php',
                        type: 'post',
                        data: {userid: userid},
                        success: function(response){
                            $('.modal-body2').html(response);
                            $('#empModal').modal('show');
                    }
                });
            });
		});
	});
</script>
</body>
</html>