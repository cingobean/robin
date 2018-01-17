<?php
$this->load->view('template/head');
?>

<?php
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>

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
				  
					
				  <br />
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="table_id" class="table table-bordered table-striped">
            <thead>
                <tr>
                     <th>No</th>
					 <th>Barcode</th>
					 <th>Nama</th>
					 <th>Harga</th>
					 <th>Jenis</th>
					 <th>Satuan</th>
					 <th>Stok</th>
					 <th>Expired</th>
					 <th>Photo</th>
					 <th>Action</th>
                </tr>
            </thead>
             <tbody>
				<?php if(empty($qbarang)){ ?>
         <tr>
          <td colspan="6">Data tidak ditemukan</td>
         </tr>
        <?php }else{
          $no=0;
          foreach($qbarang as $rowbarang){ $no++;?>
         <tr>
          <td><?=$no?></td>
          <td><?=$rowbarang->barcode?></td>
          <td><?=$rowbarang->nama_brg?></td>
          <td><?=$rowbarang->harga_brg?></td>
          <td><?=$rowbarang->nama_jenis?></td>
          <td><?=$rowbarang->satuan?></td>
          <td><?=$rowbarang->stok_brg?></td>
		  <td><?=$rowbarang->expired?></td>
		 
		  <td>
		    <?php if($rowbarang->photo)
                $qbarang = '<a href="'.base_url('upload/'.$rowbarang->photo).'" target="_blank"><img src="'.base_url('upload/'.$rowbarang->photo).'" class="img-responsive" style="max-height:100px "  /></a>';
            else
                $qbarang = '(No photo)'; 
			echo ($qbarang);
			?>
		  </td>
          <td>
           <a href="<?=base_url()?>barang/form/edit/<?=$rowbarang->id?>" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-pencil"></i></a>
           <a href="<?=base_url()?>barang/detail/<?=$rowbarang->id?>" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-search"></i></a>
		   <!--button class="btn btn-danger" onclick="delete_barang(<?php //echo $rowbarang->id;?>)"><i class="glyphicon glyphicon-remove"></i></button-->
		    <a href="<?=base_url()?>barang/hapus/<?=$rowbarang->id?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda Yakin menghapus data ini?')"><i class="glyphicon glyphicon-trash"></i></a>
           
          </td>
		  
         </tr>
        <?php }}?>
			</tbody>
            <tfoot>
                <tr>
                     <th>No</th>
					 <th>Barcode</th>
					 <th>Nama</th>
					 <th>Harga</th>
					 <th>Jenis</th>
					 <th>Satuan</th>
					 <th>Stok</th>
					 <th>Expired</th>
					 <th>Photo</th>
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


    /* function add_book()
    {
      save_method = 'add';
      $('#form')[0].reset(); // reset form on modals
      $('#modal_form').modal('show'); // show bootstrap modal
    //$('.modal-title').text('Add Person'); // Set Title to Bootstrap modal title
    } */

    /* function edit_book(id)
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
    } */



    

    function delete_barang(id)
    {
      if(confirm('Are you sure delete this data?'))
      {
        // ajax delete data from database
          $.ajax({
            url : "<?php echo site_url('barang/hapus')?>/"+id,
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
  
  

	

<?php
$this->load->view('template/foot');
?>
	