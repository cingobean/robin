<?php
$this->load->view('template/head');
?>

<?php
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>

<section class="content">
    <div class="row">
            <!-- left column -->
        <div class="col-md-6">
              <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Edit Content</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
			<div ng-app="validationApp" ng-controller="ContentControllerEdit">
                <form action="<?php echo site_url(). '/content/content_update'; ?>" id="form" method="post" enctype="multipart/form-data" name="contentForm"  ng-submit="submitForm()" novalidate >
							<input type="hidden" value="{{content.id}}" name="id" >
                  <div class="box-body">
						<div class="form-group" ng-class="{ 'has-error' : contentForm.mtittle.$touched  && contentForm.mtittle.$invalid }">
							<label>Title</label>
							<input name="mtittle" placeholder="Title" class="form-control" type="text" value="{{content.mtittle}}"  ng-model="content.mtittle" required>
							<p ng-show="contentForm.mtittle.$touched  && contentForm.mtittle.$invalid " class="help-block ">Wajib diisi</p>
						</div>
						
						
						<div class="form-group" ng-class="{ 'has-error' :  contentForm.mcontent.$touched  && contentForm.mcontent.$invalid }">
							<label>Content</label>
							<textarea name="mcontent" class="ckeditor"  
							type="text" value="{{content.mcontent}}" autocomplete="off"  ng-model="content.mcontent"  >
							
							</textarea>
							<!--textarea type="text" class="form-control" 
							ng-model="commentBox.text" 
							ng-model="tbl_mcontent.mcontent"
							ng-required="commentBox.textRequired">
							</textarea-->
							<p ng-show="contentForm.mcontent.$touched  && contentForm.mcontent.$invalid" class="help-block">Wajib diisi.</p> 
						</div>
						
						
						
						<div class="form-group"  >
						  <label for="mimage">Image </label>
						   <?php 
								
									if($dt->mimage)
										$qcontent = '<a href="'.base_url('upload/'.$dt->mimage).'" target="_blank">
									   <img src="'.base_url('upload/'.$dt->mimage).'" class="img-responsive" /></a>';
									else
										$qcontent = ': (No photo)'; 
									echo ($qcontent);
								  ?>
						</div>
						
						<div class="form-group" ng-class="{ 'has-error' :  contentForm.mimage.$touched  && contentForm.mimage.$invalid }" >
						  <label for="mimage">Upload Image</label>
						  <input type="file" id="mimage" name="mimage" value="{{content.mimage}}" >
						  <p ng-show="contentForm.mimage.$touched  && contentForm.mimage.$invalid" class="help-block">Wajib diisi.</p> 
						</div>
						
						<div class="form-group" ng-class="{ 'has-error' :  contentForm.mstatus.$touched  && contentForm.mstatus.$invalid }" >
						  <label for="mimage">Status</label>
						  <?php
 
							(isset($_POST["mstatus"])) ? $mstatus = $_POST["mstatus"] : $mstatus=0;
							 
						  ?>
						<select id="mstatus" name="mstatus" value="{{content.mstatus}}" ng-model="content.mstatus" >
							<option <?php if ($mstatus == 0 ) echo 'selected' ; ?> value="0">Tidak Aktif</option>
							<option <?php if ($mstatus == 1 ) echo 'selected' ; ?> value="1">Aktif</option>
						</select>
						</div>
						
						
						<input type="hidden" value="{{content.mbrowser}}"  name="mbrowser"/>
						<input type="hidden" value="{{content.mipaddress}}"  name="mipaddress"/>
						<input type="hidden" value="{{content.muser}}"  name="muser"/>
						<!--input type="hidden" value="{{content.mstatus}}"  name="mstatus"/--> 
						
							
                  </div><!-- /.box-body -->

                  <div class="box-footer">
				    <button type="submit" class="btn btn-primary" ng-disabled="contentForm.$invalid">Submit</button>
					<!--button type="submit" id="btnSave"  class="btn btn-primary">Save</button-->
					<button type="button" class="btn btn-danger" onclick="location.href='<?php echo base_url();?>index.php/content'">Cancel</button>
                  </div>
				</form>
				
			</div>
            </div><!-- /.box -->
		</div>
	</div>
</section>
<?php
$this->load->view('template/js');
?>
<!--script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script-->
 
 <script type="text/javascript">

// create angular app
	var validationApp = angular.module('validationApp', []);

	// create angular controller
	validationApp.controller('ContentControllerEdit', function($scope) {
		//$scope.book_title = 'ghghgh';
		$scope.content = 
		{
		id 				:"<?php echo $dt->id;?>",			
		mtittle 		:"<?php echo $dt->mtittle;?>",
		mcontent 		:"<?php echo trim($dt->mcontent);?>",
		mimage 			:"<?php echo $dt->mimage;?>",
		mbrowser 		:"<?php echo $dt->mbrowser;?>",
		mipaddress 		:"<?php echo $dt->mipaddress;?>",
		muser 			:"<?php echo $dt->muser;?>",
		mstatus 		:"<?php echo $dt->mstatus;?>"
		
		}
		

		// function to submit the form after all validation has occurred			
		$scope.submitForm = function() {
			
		//$scoope.book.isbn=

			// check to make sure the form is completely valid
			if ($scope.contentForm.$valid) {
				alert('Content Berhasil di ubah');
			}

		};

	});
</script>



  


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
		$('.datepicker').datepicker({
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