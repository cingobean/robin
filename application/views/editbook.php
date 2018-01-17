<?php
$this->load->view('template/head');
//echo "<pre>"; print_r($dt); die();
//echo $dt->book_isbn; die();
/*
[book_id] => 3
[book_isbn] => 8934
[book_title] => Android Programming
[book_author] => Farrukhh
[book_category] => Programming
*/
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
                  <h3 class="box-title">Add Book</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
			<div ng-app="validationApp" ng-controller="mainController">
			<!--span ng-hide="editing" ng-click="editing = true">{{book.book_isbn}} | {{book.book_title}} | {{book.book_author}} | {{book.book_category}} | {{book.book_date}} </span-->
                <form action="<?php echo site_url(). '/book/book_update'; ?>" id="form" method="post" name="bookForm" ng-submit="submitForm()" novalidate >
							<input type="hidden" value="{{book.book_id}}" name="book_id"/>
                  <div class="box-body">
				  
						<div class="form-group" ng-class="{ 'has-error' : bookForm.book_isbn.$touched  && bookForm.book_isbn.$invalid }">
							<label>Book ISBN </label>
							<input name="book_isbn" placeholder="Book ISBN" class="form-control" type="number" value="{{book.book_isbn}}" ng-model ="book.book_isbn" required >
							<p ng-show="bookForm.book_isbn.$touched  && bookForm.book_isbn.$invalid " class="help-block ">Wajib diisi dengan nomor</p>
						</div>
						<div class="form-group" ng-class="{'has-error' :  bookForm.book_title.$touched  && bookForm.book_title.$invalid }">
							<label>Book Title</label>
							<input name="book_title" placeholder="Book title" class="form-control" type="text" value="{{book.book_title}}"  ng-model ="book.book_title" ng-minlength="3" ng-maxlength="8"  required>
							<p ng-show="bookForm.book_title.$touched  && bookForm.book_title.$invalid" class="help-block">Wajib diisi.</p>
							<p ng-show="bookForm.book_title.$error.minlength" class="help-block">Terlalu Pendek.</p>
							<p ng-show="bookForm.book_title.$error.maxlength" class="help-block">Terlalu Panjang.</p>							
							
							
						</div>
						<div class="form-group" ng-class="{ 'has-error' : bookForm.book_author.$touched  && bookForm.book_author.$invalid }">
							<label>Book Author</label>
							<input name="book_author" placeholder="Book Author" class="form-control" type="text" value="{{book.book_author}}"  ng-model="book.book_author" required >
							<p ng-show="bookForm.book_author.$touched  && bookForm.book_author.$invalid" class="help-block">Wajib diisi.</p>
						</div>
						<div class="form-group" ng-class="{ 'has-error' : bookForm.book_category.$touched  && bookForm.book_category.$invalid }">
							<label>Book Category</label>
							<input name="book_category" placeholder="Book Category" class="form-control" type="text" value="{{book.book_category}}"  
							ng-model="book.book_category"  required >	
							<p ng-show=" bookForm.book_category.$touched  && bookForm.book_category.$invalid" class="help-block">Wajib diisi.</p>
						</div>
						
						<div class="form-group" ng-class="{ 'has-error' : bookForm.book_descript.$touched  && bookForm.book_descript.$invalid }">
							<label>Book Description</label>
							<textarea name="book_descript" class="ckeditor"  
							type="text" value="{{book.book_category}}" autocomplete="off"  ng-model="book.book_category"  required >	
							</textarea>
							<p ng-show=" bookForm.book_category.$touched  && bookForm.book_category.$invalid" class="help-block">Wajib diisi.</p>
						</div>
						
						<div class="form-group" ng-class="{ 'has-error' : bookForm.book_date.$touched  && bookForm.book_date.$invalid }">
							<label>Book date</label>
							<input name="book_date" placeholder="yyyy-mm-dd" class="form-control datepicker" type="text" value="{{book.book_date}}" ng-model="book.book_date" required>	
							<p ng-show=" bookForm.book_date.$touched  && bookForm.book_date.$invalid" class="help-block">Wajib diisi.</p>
						</div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
				    <button type="submit" class="btn btn-primary" ng-disabled="bookForm.$invalid">Submit</button>
					<!--button type="submit" id="btnSave"  class="btn btn-primary">Save</button-->
					<button type="button" class="btn btn-danger" onclick="location.href='<?php echo base_url();?>index.php/book'">Cancel</button>
					
                   
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
	validationApp.controller('mainController', function($scope) {
		//$scope.book_title = 'ghghgh';
		$scope.book = 
		{
		
		book_isbn 		: 	"<?=$dt->book_isbn;?>",
        book_title 		: 	"<?=$dt->book_title;?>",
		book_author 	: 	"<?=$dt->book_author;?>",
		book_category 	: 	"<?=$dt->book_category;?>",
		book_descript 	:	"<?=trim($dt->book_descript);?>",
		book_date 		: 	"<?=$dt->book_date;?>"
		}

		// function to submit the form after all validation has occurred			
		$scope.submitForm = function() {
			
		//$scoope.book.isbn=

			// check to make sure the form is completely valid
			if ($scope.bookForm.$valid) {
				alert('Berhasil di ubah');
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