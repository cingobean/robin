<?php
$this->load->view('template/head');
?>

<?php
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>


 
 <!-- Content Wrapper. Contains page content -->
      <!--div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Data Tables
            <small>advanced tables</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Data tables</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Table With Full Features</h3>
				  <br />
				   <br />
					<button class="btn btn-primary" onclick="add_book()"><i class="glyphicon glyphicon-plus"></i> Add Book</button>
				  <br />
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="table_id" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Book ID</th>
					<th>Book ISBN</th>
					<th>Book Title</th>
					<th>Book Author</th>
					<th>Book Category</th>
					<th>Action</th>
                </tr>
            </thead>
             <tbody>
				<?php foreach($books as $book){?>
				     <tr>
								<td><?php echo $book->book_id;?></td>
								<td><?php echo $book->book_isbn;?></td>
								<td><?php echo $book->book_title;?></td>
								<td><?php echo $book->book_author;?></td>
								<td><?php echo $book->book_category;?></td>
								<td>
									<button class="btn btn-warning" onclick="edit_book(<?php echo $book->book_id;?>)"><i class="glyphicon glyphicon-pencil"></i></button>
									<button class="btn btn-danger" onclick="delete_book(<?php echo $book->book_id;?>)"><i class="glyphicon glyphicon-remove"></i></button>
								</td>
				      </tr>
				     <?php }?>
			</tbody>
            <tfoot>
                <tr>
                    <th>Book ID</th>
					<th>Book ISBN</th>
					<th>Book Title</th>
					<th>Book Author</th>
					<th>Book Category</th>
					<th>Action</th>
                </tr>
            </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      <!--/div><!-- /.content-wrapper -->
	  


	  
<?php
$this->load->view('template/js');
?>


  <script type="text/javascript">
  $(document).ready( function () {
      $('#table_id').DataTable();
  } );
    var save_method; //for save method string
    var table;


    function add_book()
    {
      save_method = 'add';
      $('#form')[0].reset(); // reset form on modals
      $('#modal_form').modal('show'); // show bootstrap modal
    //$('.modal-title').text('Add Person'); // Set Title to Bootstrap modal title
    }

    function edit_book(id)
    {
      save_method = 'update';
      $('#form')[0].reset(); // reset form on modals

      //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('book/ajax_edit/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {

            $('[name="book_id"]').val(data.book_id);
            $('[name="book_isbn"]').val(data.book_isbn);
            $('[name="book_title"]').val(data.book_title);
            $('[name="book_author"]').val(data.book_author);
            $('[name="book_category"]').val(data.book_category);


            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Book'); // Set title to Bootstrap modal title

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
    }



    function save()
    {
      var url;
      if(save_method == 'add')
      {
          url = "<?php echo site_url('book/book_add')?>";
      }
      else
      {
        url = "<?php echo site_url('book/book_update')?>";
      }

       // ajax adding data to database
          $.ajax({
            url : url,
            type: "POST",
            data: $('#form').serialize(),
            dataType: "JSON",
            success: function(data)
            {
               //if success close modal and reload ajax table
               $('#modal_form').modal('hide');
              location.reload();// for reload a page
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding / update data');
            }
        });
    }

    function delete_book(id)
    {
      if(confirm('Are you sure delete this data?'))
      {
        // ajax delete data from database
          $.ajax({
            url : "<?php echo site_url('book/book_delete')?>/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
               
               location.reload();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });

      }
    }

  </script>
  
  
   <!-- Bootstrap modal -->
  <div class="modal fade" id="modal_form" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Book Form</h3>
      </div>
      <div class="modal-body form">
        <form action="#" id="form" class="form-horizontal">
          <input type="hidden" value="" name="book_id"/>
          <div class="form-body">
            <div class="form-group">
              <label class="control-label col-md-3">Book ISBN</label>
              <div class="col-md-9">
                <input name="book_isbn" placeholder="Book ISBN" class="form-control" type="text">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Book Title</label>
              <div class="col-md-9">
                <input name="book_title" placeholder="Book_title" class="form-control" type="text">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Book Author</label>
              <div class="col-md-9">
				<input name="book_author" placeholder="Book Author" class="form-control" type="text">
              </div>
            </div>
			<div class="form-group">
			<label class="control-label col-md-3">Book Category</label>
				<div class="col-md-9">
					<input name="book_category" placeholder="Book Category" class="form-control" type="text">
				</div>
			</div>
          </div>
        </form>
          </div>
          <div class="modal-footer">
            <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
  <!-- End Bootstrap modal -->
	

<?php
$this->load->view('template/foot');
?>
	