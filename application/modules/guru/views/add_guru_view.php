<?php
$this->load->view('template/head');
?>

<?php
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>

<!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Tambah guru
            <small>Preview</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">Advanced Elements</li>
          </ol>
        </section>

   <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-6">

            <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Quick Example</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="Nama">Nama :</label>
                      <input type="text" class="form-control" id="Nama" placeholder="Nama">
                    </div>
                    <div class="form-group">
                      <label for="NIS">NIS :</label>
                      <input type="number" class="form-control" id="NIS" placeholder="NIS">
                    </div>
					<div class="form-group">
                      <label for="NISN">NISN :</label>
                      <input type="number" class="form-control" id="NISN" placeholder="NISN">
                    </div>
					<!-- radio -->
                  <div class="form-group">
				    <label for="JenisKelamin">Jenis Kelamin : </label></br>
                    <label>
                      <input type="radio" name="r3" class="flat-red" checked/>
					  Laki-laki
                    </label>
                    <label>
                      <input type="radio" name="r3" class="flat-red" />
                     Perempuan
                    </label>
                  </div>
					<div class="form-group">
                      <label for="Tempat">Tempat :</label>
                      <input type="text" class="form-control" id="Tempat" placeholder="Tempat">
                    </div>
					<div class="form-group">
                    <label>Tanggal Lahir :</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control pull-right" id="datepicker"/>
                    </div><!-- /.input group -->
					</div><!-- /.form group -->
                    <div class="form-group">
                      <label for="exampleInputFile">Photo</label>
                      <input type="file" id="exampleInputFile">
                      <p class="help-block">Example block-level help text here.</p>
                    </div>
 
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div><!-- /.box -->
			  
			      <!-- Horizontal Form
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Horizontal Form</h3>
            </div>
            
            <form class="form-horizontal">
              <div class="box-body">
			  
				<div class="form-group">
                      <label for="Nama" class="col-sm-2 control-label">Nama :</label>
					<div class="col-sm-10">
                      <input type="text" class="form-control" id="Nama" placeholder="Nama">
					</div>
                </div>
				
               <div class="form-group">
                      <label for="NIS" class="col-sm-2 control-label">NIS :</label>
					<div class="col-sm-10">
                      <input type="number" class="form-control" id="NIS" placeholder="NIS">
					</div>
			   </div>
			   
					<div class="form-group">
                      <label for="NISN" class="col-sm-2 control-label">NISN :</label>
					  <div class="col-sm-10">
                      <input type="number" class="form-control" id="NISN" placeholder="NISN">
					</div>
					</div>
                
              </div>
              
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info ">Submit</button>
              </div>
              <!-- /.box-footer 
            </form>
          </div>
          box -->
		  
            </div><!-- /.col (right) -->
          </div><!-- /.row -->
        </section><!-- /.content -->		
       


	  
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
		
		//datepicker
		$("#datepicker").datepicker({
        autoclose: true,
        format: "yyyy-mm-dd",
        todayHighlight: true,
        orientation: "top auto",
        todayBtn: true,
        todayHighlight: true, 
		});
	});
    </script>

<?php
$this->load->view('template/foot');
?>
	