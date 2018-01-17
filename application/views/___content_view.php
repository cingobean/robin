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
            Content
            <small>Content Mading</small>
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
				  <button class="btn btn-primary" class="btn btn-danger" onclick="location.href='<?php echo base_url();?>index.php/content/content_add'"><i class="glyphicon glyphicon-plus"></i>Add Content</button>
				
				  <br />
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="tables" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
					<th>Title</th>
					<th>Content</th>
					<th>Image</th>
					<th>Date</th>
					<th>Ip</th>
					<th>User</th>
					<th>Status</th>
					<th>Action</th>
                </tr>
            </thead>
             <tbody>
				<?php foreach($tbl_mcontent as $konten=>$val ){?>
				<?php //echo "<pre>"; print_r ($val); die ();?>
					
				
			
				     <tr>
								<td><?php echo $val->id;?></td>
								<td><?php echo $val->mtittle;?></td>
								<td><?php echo $val->mcontent;?></td>
								<!--td><?php //echo $konten->mimage;?></td-->
								<td>
									<?php if($val->mimage)
										$gambar = '<a href="'.base_url('./assets/images/'.$val->mimage).'" target="_blank"><img src="'.base_url('./assets/images/'.$val->mimage).'" class="img-responsive" style="max-height:100px "  /></a>';
									else
										$gambar = '(No photo)'; 
									echo ($gambar);
									?>
								</td>
								<td><?php echo $val->mdate;?></td>
								<td><?php echo $val->mipaddress;?></td>
								<td><?php echo $val->muser;?></td>
								<td><?php 
								if ($val->mstatus==0){
									$status='Tidak Aktif';
								}else {
									$status='Aktif';
									
								}
								echo $status;
								?></td>
								<td>
									<a href="<?php echo site_url('content/contentedit/'.$val->id.''); ?>"><div class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i></div></a>
									<!--button class="btn btn-warning" onclick="location.href='<?php echo base_url();?>index.php/book/bookedit/$book->book_id'"><i class="glyphicon glyphicon-pencil"></i></button-->
									<button class="btn btn-danger" onclick="delete_content(<?php echo $val->id;?>)"><i class="glyphicon glyphicon-remove"></i></button>
								</td>
				      </tr>
				     <?php }?>
			</tbody>
            <tfoot>
                <tr>
                    <th>ID</th>
					<th>Title</th>
					<th>Content</th>
					<th>Image</th>
					<th>Date</th>
					<th>Ip</th>
					<th>User</th>
					<th>Status</th>
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
      $('#tables').DataTable();
  } );
  
  
  function delete_content(id)
    {
      if(confirm('Are you sure delete this data?'))
      {
        // ajax delete data from database
          $.ajax({
            url : "<?php echo site_url('content/content_delete')?>/"+id,
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
	