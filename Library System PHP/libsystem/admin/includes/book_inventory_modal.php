<!-- Edit -->
<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Edit Book</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="book_inventory_edit.php">
            		<input type="hidden" class="bookid" name="id">
                <div class="form-group">
                    <label for="edit_isbn" class="col-sm-3 control-label">ISBN</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_isbn" name="isbn">
                    </div>
                </div>

                <div class="form-group">
                    <label for="edit_accnum" class="col-sm-3 control-label">Accession Number</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_accnum" name="accnum">
                    </div>
                </div>

                <div class="form-group">
                    <label for="edit_callnum" class="col-sm-3 control-label">Call Number</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_callnum" name="callnum">
                    </div>
                </div>

                <div class="form-group">
                    <label for="edit_title" class="col-sm-3 control-label">Title</label>

                    <div class="col-sm-9">
                      <textarea class="form-control" name="title" id="edit_title"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="category" class="col-sm-3 control-label">Category</label>

                    <div class="col-sm-9">
                      <select class="form-control" name="category" id="category">
                        <option value="" selected id="catselect"></option>
                        <?php
                          $sql = "SELECT * FROM category";
                          $query = $conn->query($sql);
                          while($crow = $query->fetch_assoc()){
                            echo "
                              <option value='".$crow['id']."'>".$crow['name']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_author" class="col-sm-3 control-label">Author</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_author" name="author">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_publisher" class="col-sm-3 control-label">Publisher</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_publisher" name="publisher">
                    </div>
                </div>
                <div class="form-group">
                    <label for="datepicker_edit" class="col-sm-3 control-label">Publish Date</label>

                    <div class="col-sm-9">
                      <div class="date">
                        <input type="date" class="form-control" id="datepicker_edit" name="pub_date"><br>
                      </div>
                    </div>

                    <div class="form-group">
                    <label for="edit_quantity" class="col-sm-3 control-label">Quantity</label>

                    <div class="col-sm-3">
                      <input type="number" class="form-control" id="edit_quantity" name="quantity">
                    </div>
                </div>

                </div>
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            	<button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i> Update</button>
            	</form>
          	</div>
        </div>
    </div>
</div>

<!-- Update Photo -->
<div class="modal fade" id="upload">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b><span class="upl_book"></span></b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="book_inventory_photo.php" enctype="multipart/form-data">
                <input type="hidden" class="bookid" name="id">
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Photo</label>

                    <div class="col-sm-9">
                      <input type="file" id="photo" name="photo" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="upload"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Update pdf -->
<div class="modal fade" id="upload_pdf">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b><span class="upl_pdf"></span></b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="book_inventory_pdf.php" enctype="multipart/form-data">
                <input type="hidden" class="bookid" name="id">
                <div class="form-group">
                    <label for="pdf" class="col-sm-3 control-label">PDF</label>

                    <div class="col-sm-9">
                      <input type="file" id="pdf" name="pdf" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="upload"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>
