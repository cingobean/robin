<?php
$this->load->view('template/head');
?>

<?php
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>

<?php
if($aksi=='aksi_add'){
    $id="";
    $kode="";
    $nama="";
    $jenis="";
    $harga="";
    $keterangan="";
    $satuan="";
    $stok="";
	$expired="";
	$photo="";
}else{
  foreach($qdata as $rowdata){
    $id=$rowdata->id;
    $kode=$rowdata->barcode;
    $nama=$rowdata->nama_brg;
    $jenis=$rowdata->id_jenis;
    $harga=$rowdata->harga_brg;
    $keterangan=$rowdata->keterangan;
    $satuan=$rowdata->satuan;
    $stok=$rowdata->stok_brg;
	$expired=$rowdata->expired;
	$photo=$rowdata->photo;
  }
}

?>


 <!--div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Customer Add
            <small>Preview</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">General Elements</li>
          </ol>
        </section>


		<section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Quick Example</h3>
                </div><!-- /.box-header -->
			<?=$this->session->flashdata('pesan')?>
			<form action="<?=base_url()?>barang/form/<?=$aksi?>" method="post" id="form" enctype="multipart/form-data" >

                 <input type="hidden" value="<?=$id?>" name="id"/> 
				<!-- form start -->
                <!--form role="form"-->
                  <div class="box-body">
                   <!-- text input -->
                    <div class="form-group">
                      <label>Kode Barcode</label>
                    <input type="text" name="kode" placeholder="Kode Barcode" class="form-control" value="<?=$kode?>">
                    </div>
                    <!-- text input -->
                    <div class="form-group">
                      <label>Nama Barang</label>
                        <input type="text" name="nama" class="form-control" placeholder="Nama Barang" value="<?=$nama?>">
                    </div>
					<div class="form-group">
                            <label>Satuan</label>
							<input type="text" name="satuan" placeholder="Satuan" class="form-control" value="<?=$satuan?>">    
                    </div>
					
					<div class="form-group">
                            <label>Harga Barang</label>
							<input type="text" name="harga" placeholder="Harga Barang"  class="form-control" value="<?=$harga?>">  
                    </div>
						
					<div class="form-group">
                           <label >Stok Barang</label>
							<input type="text" name="stok" placeholder="Stok Barang" class="form-control" value="<?=$stok?>"> 
                    </div>
					
					<div class="form-group">
                          <label>Tanggal Kadaluarsa</label>
                          <input name="expired" placeholder="yyyy-mm-dd" class="form-control datepicker" type="text" value="<?=$expired?>">   
                    </div>
					
                    <div class="form-group">
                      <label>Jenis</label>
                      <select name="jenis" required="requreid" class="form-control">
								<option value="none" selected="selected">-- Pilih Jenis --</option>
								<!-----Displaying fetched cities in options using foreach loop ---->
								<?php 
									$select = '';
									foreach($master_jenis as $row)
									{
										if($jenis==$row['id_jenis'])
										{
											echo '<option value="'.$row['id_jenis'].'" selected>'.$row['nama_jenis'].'</option>';
										}
										else
										{ 
											echo '<option value="'.$row['id_jenis'].'">'.$row['nama_jenis'].'</option>';
										}
								?>
									<?php }?>
								</select>
                    </div>
					<div class="form-group" id="photo">
                            <label>Photo</label>
                                <?php 
								if($aksi=="aksi_edit") {
									if($rowdata->photo)
										$qbarang = '<a href="'.base_url('upload/'.$rowdata->photo).'" target="_blank"><img src="'.base_url('upload/'.$rowdata->photo).'" class="img-responsive" /></a>';
									else
										$qbarang = '(No photo)'; 
									echo ($qbarang);
									
								}
								  ?>
                        </div>
					
					
                    <div class="form-group">
                      <label id="photo" >Upload Photo</label>
                     <input name="photo" type="file" >
                    </div>
					
                    <div class="form-group">
                      <label>Keterangan</label>
					  <textarea  name="uraian" placeholder="Keterangan"  class="form-control"><?=$keterangan?></textarea>
                    </div>
					
                </div>
				
				 
                  <div class="box-footer">
                   <input type="submit" class="btn btn-success" value="Simpan">
				   <button type="reset" class="btn btn-default">Batal</button>
                  </div>
                </form>
              </div><!-- /.box -->

            </div><!--/.col (left) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      <!--/div><!-- /.content-wrapper -->
	  
<?php
$this->load->view('template/js');
?>

<!-- Page script -->
    <script type="text/javascript">
      $(function () {
        //Datemask dd/mm/yyyy
        $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
        //Datemask2 mm/dd/yyyy
        $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
        //Money Euro
        $("[data-mask]").inputmask();

        //Date range picker
        $('#reservation').daterangepicker();
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
        //Date range as a button
        $('#daterange-btn').daterangepicker(
                {
                  ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract('days', 1), moment().subtract('days', 1)],
                    'Last 7 Days': [moment().subtract('days', 6), moment()],
                    'Last 30 Days': [moment().subtract('days', 29), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
                  },
                  startDate: moment().subtract('days', 29),
                  endDate: moment()
                },
        function (start, end) {
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
        );

        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
          checkboxClass: 'icheckbox_minimal-blue',
          radioClass: 'iradio_minimal-blue'
        });
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
          checkboxClass: 'icheckbox_minimal-red',
          radioClass: 'iradio_minimal-red'
        });
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
          checkboxClass: 'icheckbox_flat-green',
          radioClass: 'iradio_flat-green'
        });

        //Colorpicker
        $(".my-colorpicker1").colorpicker();
        //color picker with addon
        $(".my-colorpicker2").colorpicker();

        //Timepicker
        $(".timepicker").timepicker({
          showInputs: false
        });
      });
    </script>


<?php
$this->load->view('template/foot');
?>