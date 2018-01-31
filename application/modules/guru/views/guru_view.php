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
            Data guru
            <small>advanced tables</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
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
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Nama</th>
						<th>Jenis Kelamin</th>
                        <th>NIP</th>
                        <th>Mata Pelajaran</th>
                        <th>Tempat</th>
                        <th>Tanggal Lahir</th>
						<th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Rohamid Bambang Sulaeman, S.Pd.I</td>
						<td>Laki-laki</td>
                        <td>1516.2.0001</td>
                        <td>Pendidikan Agama dan Budi Pekerti</td>
                        <td>Tangerang</td>
                        <td>19 Pebruari 2000</td>
						<td>
						<a href="<?php //echo site_url('content/contentedit/'.$val->id.''); ?>"><div class="btn btn-success"><i class="glyphicon glyphicon-search"></i></div></a>
						<a href="<?php //echo site_url('content/contentedit/'.$val->id.''); ?>"><div class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i></div></a>
						<a href="<?php //echo site_url('content/contentedit/'.$val->id.''); ?>"><div class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></div></a>
                        </td>
					  </tr>
					  <tr>
                        <td>Yetti Suharti, S.Pd</td>
						<td>Perempuan</td>
                        <td>1516.2.0001</td>
                        <td>Pendidikan Pancasila dan Kewarganegaraan</td>
                        <td>Tangerang</td>
                        <td>19 Pebruari 2000</td>
						<td>
						<a href="<?php //echo site_url('content/contentedit/'.$val->id.''); ?>"><div class="btn btn-success"><i class="glyphicon glyphicon-search"></i></div></a>
						<a href="<?php //echo site_url('content/contentedit/'.$val->id.''); ?>"><div class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i></div></a>
						<a href="<?php //echo site_url('content/contentedit/'.$val->id.''); ?>"><div class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></div></a>
                        </td>
					  </tr>
					  <tr>
                        <td>Widaningsih, S.Pd</td>
						<td>Perempuan</td>
                        <td>1516.2.0001</td>
                        <td>Bahasa Indonesia</td>
                        <td>Tangerang</td>
                        <td>19 Pebruari 2000</td>
						<td>
						<a href="<?php //echo site_url('content/contentedit/'.$val->id.''); ?>"><div class="btn btn-success"><i class="glyphicon glyphicon-search"></i></div></a>
						<a href="<?php //echo site_url('content/contentedit/'.$val->id.''); ?>"><div class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i></div></a>
						<a href="<?php //echo site_url('content/contentedit/'.$val->id.''); ?>"><div class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></div></a>
                        </td>
					  </tr>
					  <tr>
                        <td>Ade Ferdiansyah, M.Pd</td>
						<td>Laki-laki</td>
                        <td>1516.2.0001</td>
                        <td>Matematika</td>
                        <td>Tangerang</td>
                        <td>19 Pebruari 2000</td>
						<td>
						<a href="<?php //echo site_url('content/contentedit/'.$val->id.''); ?>"><div class="btn btn-success"><i class="glyphicon glyphicon-search"></i></div></a>
						<a href="<?php //echo site_url('content/contentedit/'.$val->id.''); ?>"><div class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i></div></a>
						<a href="<?php //echo site_url('content/contentedit/'.$val->id.''); ?>"><div class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></div></a>
                        </td>
					  </tr>
					  <tr>
                        <td>Eka Lestari, S.Pd</td>
						<td>Perempuan</td>
                        <td>1516.2.0001</td>
                        <td>Sejarah Indonesia</td>
                        <td>Tangerang</td>
                        <td>19 Pebruari 2000</td>
						<td>
						<a href="<?php //echo site_url('content/contentedit/'.$val->id.''); ?>"><div class="btn btn-success"><i class="glyphicon glyphicon-search"></i></div></a>
						<a href="<?php //echo site_url('content/contentedit/'.$val->id.''); ?>"><div class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i></div></a>
						<a href="<?php //echo site_url('content/contentedit/'.$val->id.''); ?>"><div class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></div></a>
                        </td>
					  </tr>
					  <tr>
                        <td>Puji Supriyatun, S.Pd</td>
						<td>Perempuan</td>
                        <td>1516.2.0001</td>
                        <td>Bahasa Inggris</td>
                        <td>Tangerang</td>
                        <td>19 Pebruari 2000</td>
						<td>
						<a href="<?php //echo site_url('content/contentedit/'.$val->id.''); ?>"><div class="btn btn-success"><i class="glyphicon glyphicon-search"></i></div></a>
						<a href="<?php //echo site_url('content/contentedit/'.$val->id.''); ?>"><div class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i></div></a>
						<a href="<?php //echo site_url('content/contentedit/'.$val->id.''); ?>"><div class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></div></a>
                        </td>
					  </tr>
					  <tr>
                        <td>Nuraman, M.Si</td>
						<td>Laki-laki</td>
                        <td>1516.2.0001</td>
                        <td>Seni Budaya</td>
                        <td>Tangerang</td>
                        <td>19 Pebruari 2000</td>
						<td>
						<a href="<?php //echo site_url('content/contentedit/'.$val->id.''); ?>"><div class="btn btn-success"><i class="glyphicon glyphicon-search"></i></div></a>
						<a href="<?php //echo site_url('content/contentedit/'.$val->id.''); ?>"><div class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i></div></a>
						<a href="<?php //echo site_url('content/contentedit/'.$val->id.''); ?>"><div class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></div></a>
                        </td>
					  </tr>
					  <tr>
                        <td>Deni Nurfahmi, S.Pd</td>
						<td>Laki-laki</td>
                        <td>1516.2.0001</td>
                        <td>Pendidikan Jasmani, Olah Raga, dan Kesehatan</td>
                        <td>Tangerang</td>
                        <td>19 Pebruari 2000</td>
						<td>
						<a href="<?php //echo site_url('content/contentedit/'.$val->id.''); ?>"><div class="btn btn-success"><i class="glyphicon glyphicon-search"></i></div></a>
						<a href="<?php //echo site_url('content/contentedit/'.$val->id.''); ?>"><div class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i></div></a>
						<a href="<?php //echo site_url('content/contentedit/'.$val->id.''); ?>"><div class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></div></a>
                        </td>
					  </tr>
					  <tr>
                        <td>Moh. Syafe'i, S.Kom</td>
						<td>Laki-laki</td>
                        <td>1516.2.0001</td>
                        <td>Teknologi Infrakstruktur Jaringan</td>
                        <td>Tangerang</td>
                        <td>19 Pebruari 2000</td>
						<td>
						<a href="<?php //echo site_url('content/contentedit/'.$val->id.''); ?>"><div class="btn btn-success"><i class="glyphicon glyphicon-search"></i></div></a>
						<a href="<?php //echo site_url('content/contentedit/'.$val->id.''); ?>"><div class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i></div></a>
						<a href="<?php //echo site_url('content/contentedit/'.$val->id.''); ?>"><div class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></div></a>
                        </td>
					  </tr>
					  <tr>
                        <td>Akmal Munawar, S.Kom</td>
						<td>Laki-laki</td>
                        <td>1516.2.0001</td>
                        <td>Rancang Bangun Jaringan</td>
                        <td>Tangerang</td>
                        <td>19 Pebruari 2000</td>
						<td>
						<a href="<?php //echo site_url('content/contentedit/'.$val->id.''); ?>"><div class="btn btn-success"><i class="glyphicon glyphicon-search"></i></div></a>
						<a href="<?php //echo site_url('content/contentedit/'.$val->id.''); ?>"><div class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i></div></a>
						<a href="<?php //echo site_url('content/contentedit/'.$val->id.''); ?>"><div class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></div></a>
                        </td>
					  </tr>
					  <tr>
                        <td>Setia Adi Nugroho, S.Pd</td>
						<td>Laki-laki</td>
                        <td>1516.2.0001</td>
                        <td>Administrasi Server dan Keamanan Jaringan</td>
                        <td>Tangerang</td>
                        <td>19 Pebruari 2000</td>
						<td>
						<a href="<?php //echo site_url('content/contentedit/'.$val->id.''); ?>"><div class="btn btn-success"><i class="glyphicon glyphicon-search"></i></div></a>
						<a href="<?php //echo site_url('content/contentedit/'.$val->id.''); ?>"><div class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i></div></a>
						<a href="<?php //echo site_url('content/contentedit/'.$val->id.''); ?>"><div class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></div></a>
                        </td>
					  </tr>
					  <tr>
                        <td>Susi. S.Kom</td>
						<td>Perempuan</td>
                        <td>1516.2.0001</td>
                        <td>Pengembangan Produk Kreatif</td>
                        <td>Tangerang</td>
                        <td>19 Pebruari 2000</td>
						<td>
						<a href="<?php //echo site_url('content/contentedit/'.$val->id.''); ?>"><div class="btn btn-success"><i class="glyphicon glyphicon-search"></i></div></a>
						<a href="<?php //echo site_url('content/contentedit/'.$val->id.''); ?>"><div class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i></div></a>
						<a href="<?php //echo site_url('content/contentedit/'.$val->id.''); ?>"><div class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></div></a>
                        </td>
					  </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Nama</th>
						<th>Jenis Kelamin</th>
                        <th>NIP</th>
                        <th>Mata Pelajaran</th>
                        <th>Tempat</th>
                        <th>Tanggal Lahir</th>
						<th>Action</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->


	  
<?php
$this->load->view('template/js');
?>

<!-- page script -->
    <script type="text/javascript">
      $(function () {
        $("#example1").dataTable();
        $('#example2').dataTable({
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": false,
          "bSort": true,
          "bInfo": true,
          "bAutoWidth": false
        });
      });
    </script>



  
  

	

<?php
$this->load->view('template/foot');
?>
	