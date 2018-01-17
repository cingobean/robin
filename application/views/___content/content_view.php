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
				  
					<button class="btn btn-primary" class="btn btn-danger" onclick="location.href='#'"><i class="glyphicon glyphicon-plus"></i>Add Content</button>
				  <br />
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="table_id" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Book ID</th>
					<th>Title</th>
					<th>Content</th>
					<th>Image</th>
					<th>Date</th>
					<th>Browser</th>
					<th>Ip</th>
					<th>User</th>
					<th>Status</th>
                </tr>
            </thead>
             <tbody>
				<?php foreach($tbl_mcontent as $konten){?>
				     <tr>
								<td><?php echo $konten->id;?></td>
								<td><?php echo $konten->mtittle;?></td>
								<td><?php echo $konten->mcontent;?></td>
								<td><?php echo $konten->mimage;?></td>
								<td><?php echo $konten->mdate;?></td>
								<td><?php echo $konten->mbrowser;?></td>
								<td><?php echo $konten->mipaddress;?></td>
								<td><?php echo $konten->muser;?></td>
								<td><?php echo $konten->mstatus;?></td>
								<td>
									
								</td>
				      </tr>
				     <?php }?>
			</tbody>
            <tfoot>
                <tr>
                    <th>Book ID</th>
					<th>Title</th>
					<th>Content</th>
					<th>Image</th>
					<th>Date</th>
					<th>Browser</th>
					<th>Ip</th>
					<th>User</th>
					<th>Status</th>
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
    
  </script>
  
  

	

<?php
$this->load->view('template/foot');
?>
	