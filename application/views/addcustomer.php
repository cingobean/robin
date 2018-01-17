<?php
$this->load->view('template/head');
?>

<?php
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>

<?
if($aksi=='aksi_add'){
    $id="";
    $first="";
    $last="";
    $phone="";
    $address="";
    $city="";
    $country="";

}else{
  foreach($list as $rowdata){
    $id=$rowdata->id;
    $first=$rowdata->FirstName;
    $last=$rowdata->LastName;
    $phone=$rowdata->phone;
    $address=$rowdata->address;
    $city=$rowdata->city;
    $country=$rowdata->country;
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
			<form action="<?=base_url()?>customers/addcustomer/<?=$aksi?>" method="post" id="form"  enctype="multipart/form-data" class="form-horizontal">
                 <input type="hidden" value="<?=$id?>" name="id"/> 
				<!-- form start -->
                <!--form role="form"-->
                  <div class="box-body">
                   <!-- text input -->
                    <div class="form-group">
                      <label>First Name</label>
                     <input type="text" name="first" placeholder="First Name" class="form-control" value="<?=$first?>">
                    </div>
                    <!-- text input -->
                    <div class="form-group">
                      <label>Last Name</label>
                       <input type="text" name="last" placeholder="Last Name" class="form-control" value="<?=$last?>">
                    </div>
					
                  <!-- phone mask -->
                  <div class="form-group">
                    <label>Telephone</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-phone"></i>
                      </div>
					   <input type="text" name="phone" placeholder="+099 99 99 9999[9]-9999]" class="form-control" value="<?=$phone?>">
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->
				  
					  <!-- textarea -->
                    <div class="form-group">
                      <label>Address</label>
					  <textarea  name="address" placeholder="Address"  rows="3" class="form-control"><?=$address?></textarea>
                    </div>
					
					<!-- text input -->
                    <div class="form-group">
                      <label>City</label>
                      <input type="text" name="city" placeholder="First Name" class="form-control" value="<?=$city?>">
                    </div>
                    <!-- text input -->
                    <div class="form-group">
                      <label>Country</label>
                      <input type="text" name="country" placeholder="First Name" class="form-control" value="<?=$country?>">
                    </div>
					
                 </div>
				 <!-- /.box-body -->
				 
				
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
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