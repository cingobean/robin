<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo base_url('assets/AdminLTE-2.0.5/dist/img/user2-160x160.jpg') ?>" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                <span class="input-group-btn">
                    <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <!--li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php //echo site_url('dashboard1') ?>"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
                    <li><a href="<?php //echo site_url('dashboard2') ?>"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
                </ul>
            </li-->     
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>Forms</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
					<li><a href="<?php echo site_url('generalform') ?>"><i class="fa fa-circle-o"></i> GeneralElements</a></li>
					<li><a href="<?php echo site_url('advancedform') ?>"><i class="fa fa-circle-o"></i> AdvancedElements</a></li>
					<li><a href="<?php echo site_url('book/bookadd') ?>"><i class="fa fa-circle-o"></i>Add Book</a></li>
					<!--li><a href="<?php //echo site_url('content/content_add') ?>"><i class="fa fa-circle-o"></i>Add Content</a></li-->
					<li><a href="<?php echo site_url('siswa/siswa_add') ?>"><i class="fa fa-circle-o"></i>Add Student</a></li>
					<!-- <li><a href="<?php //echo site_url('barang/form/add') ?>"><i class="fa fa-circle-o"></i>Tambah Barang</a></li> -->
                    <!--li><a href="#"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Editors</a></li-->
                </ul>
            </li>
			
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-table"></i> <span>Tables</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
				<!--li><a href="<?php //echo site_url('simpletables') ?>"><i class="fa fa-circle-o"></i>Simpletables</a></li-->
				<!--li><a href="<?php //echo site_url('datatables') ?>"><i class="fa fa-circle-o"></i> Datatables</a></li-->
				<!---li><a href="<?php //echo site_url('buku') ?>"><i class="fa fa-circle-o"></i>Data Buku</a></li-->	
				<!-- <li><a href="<?php //echo site_url('book') ?>"><i class="fa fa-circle-o"></i> Book Data</a></li> -->
				<!--li><a href="<?php //echo site_url('content') ?>"><i class="fa fa-circle-o"></i>Content</a></li-->
				<li><a href="<?php echo site_url('siswa') ?>"><i class="fa fa-circle-o"></i>Student</a></li>
				<!-- <li><a href="<?php //echo site_url('barang') ?>"><i class="fa fa-circle-o"></i>Barang</a></li>		 -->
                </ul>
            </li>
			
			 <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i> <span>Siswa</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
				<!--li><a href="<?php //echo site_url('simpletables') ?>"><i class="fa fa-circle-o"></i>Simpletables</a></li-->
				<!--li><a href="<?php //echo site_url('datatables') ?>"><i class="fa fa-circle-o"></i> Datatables</a></li-->
				<!---li><a href="<?php //echo site_url('buku') ?>"><i class="fa fa-circle-o"></i>Data Buku</a></li-->	
				<!-- <li><a href="<?php //echo site_url('book') ?>"><i class="fa fa-circle-o"></i> Book Data</a></li> -->
				<!--li><a href="<?php //echo site_url('content') ?>"><i class="fa fa-circle-o"></i>Content</a></li-->
				<li><a href="<?php echo site_url('siswa/siswa_add') ?>"><i class="fa fa-circle-o"></i>Tambah Siswa</a></li>
				<li><a href="<?php echo site_url('siswa') ?>"><i class="fa fa-circle-o"></i>Data Siswa</a></li>
				<!-- <li><a href="<?php //echo site_url('barang') ?>"><i class="fa fa-circle-o"></i>Barang</a></li>		 -->
                </ul>
            </li>
			
			<li class="treeview">
                <a href="#">
                    <i class="fa fa-university"></i> <span>Guru</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
				<!--li><a href="<?php //echo site_url('simpletables') ?>"><i class="fa fa-circle-o"></i>Simpletables</a></li-->
				<!--li><a href="<?php //echo site_url('datatables') ?>"><i class="fa fa-circle-o"></i> Datatables</a></li-->
				<!---li><a href="<?php //echo site_url('buku') ?>"><i class="fa fa-circle-o"></i>Data Buku</a></li-->	
				<!-- <li><a href="<?php //echo site_url('book') ?>"><i class="fa fa-circle-o"></i> Book Data</a></li> -->
				<!--li><a href="<?php //echo site_url('content') ?>"><i class="fa fa-circle-o"></i>Content</a></li-->
				<li><a href="<?php echo site_url('guru/guru_add') ?>"><i class="fa fa-circle-o"></i>Tambah Guru</a></li>
				<li><a href="<?php echo site_url('guru') ?>"><i class="fa fa-circle-o"></i>Data Guru</a></li>
				<!-- <li><a href="<?php //echo site_url('barang') ?>"><i class="fa fa-circle-o"></i>Barang</a></li>		 -->
                </ul>
            </li>
			
				
				<li><a href="<?php echo site_url('auth/logout') ?>"><i class="fa fa-coffee "></i>Logout</a></li>	
				
               
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">