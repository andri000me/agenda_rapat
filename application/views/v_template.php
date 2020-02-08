
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>ARA APPS</title>
	<meta name="description" content="Zapily is a Dashboard & Admin Site Responsive Template by hencework." />
	<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Zapily Admin, Zapilyadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
	<meta name="author" content="hencework"/>
	
	<!-- Favicon -->
	<link rel="shortcut icon" href="<?= base_url() ?>favicon.ico">
	<link rel="icon" href="<?= base_url() ?>favicon.ico" type="image/x-icon">
	
	<!-- Data table CSS -->
	<link href="<?= base_url() ?>vendors/bower_components/datatables/media/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?= base_url() ?>vendors/bower_components/bootstrap-table/dist/bootstrap-table.css" rel="stylesheet" type="text/css"/>
	<link href="<?= base_url(); ?>vendors/bower_components/switchery/dist/switchery.min.css" rel="stylesheet" type="text/css"/>
	
	<!-- Toast CSS -->
	<link href="<?= base_url() ?>vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url() ?>vendors/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<!-- Custom CSS -->
	<link href="<?= base_url() ?>dist/css/style.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url(); ?>vendors/bower_components/dropify/dist/css/dropify.min.css" rel="stylesheet" type="text/css"/>
	<!-- Bootstrap Daterangepicker JavaScript -->
		
</head>

<body>
	<!-- Preloader -->
	<div class="preloader-it">
		<div class="la-anim-1"></div>
	</div>
	<!-- /Preloader -->
    <div class="wrapper theme-2-active pimary-color-gold">
		<!-- Top Menu Items -->
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<span class="weight-500 uppercase-font block mt-10" style="text-align: center;margin-bottom: -30px; color: white; ">Welcome <?= $this->session->userdata('tipe'); ?></span>

			<div class="mobile-only-brand pull-left">
				<div class="nav-header pull-left">
					<div class="logo-wrap">
						<a href="#">
							<img class="brand-img" src="<?= base_url() ?>img/logo.png" alt="brand"/>
							<!-- <span class="brand-text">Welcome <?= $this->session->userdata('tipe'); ?></span> -->
						</a>
					</div>
				</div>	



				<a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block ml-20 pull-left" href="javascript:void(0);"><i class="zmdi zmdi-menu"></i></a>
				<a id="toggle_mobile_search" data-toggle="collapse" data-target="#search_form" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-search"></i></a>
				<a id="toggle_mobile_nav" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-more"></i></a>
				
			</div>
			
				

			<!-- profile -->
			<div id="mobile_only_nav" class="mobile-only-nav pull-right">
				<ul class="nav navbar-right top-nav pull-right">
					
					<li class="dropdown auth-drp">
						<a href="#" class="dropdown-toggle pr-0" data-toggle="dropdown"><img src="<?= base_url() ?>img/<?=$this->session->userdata('foto') ?>" alt="user_auth" class="user-auth-img img-circle"/><span class="user-online-status"></span></a>
						<ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
							<li>
								<a  href="<?= base_url('c_karyawan/updateProfil') ?>"><i class="zmdi zmdi-account"></i><span>Profile</span></a>
							</li>
							
							<li class="divider"></li>
							
							<li>
								<a href="<?= base_url('c_login/logout'); ?>"><i class="zmdi zmdi-power"></i><span>Log Out</span></a>
							</li>
						</ul>
					</li>
				</ul>
			</div>	

			<!-- end profile -->
		</nav>
		<!-- /Top Menu Items -->
		
		<!-- Left Sidebar Menu -->
		<div class="fixed-sidebar-left">
			<ul class="nav navbar-nav side-nav nicescroll-bar">
				<li class="navigation-header">
					<span>Main</span> 
					<i class="zmdi zmdi-more"></i>
				</li>
				
				<li>
					<a href="<?= base_url('c_pimpinan') ?>"><div class="pull-left"><i class="fa fa-home mr-20"></i><span class="right-nav-text">Dashboard</span></div><div class="clearfix"></div></a>
				</li>

				<?php if($this->session->userdata('tipe')=='admin'): ?>
				<li><hr class="light-grey-hr mb-10"/></li>
				<li>
					<a href="<?= base_url('c_admin/daftar_pengguna') ?>"><div class="pull-left"><i class="fa fa-users mr-20"></i><span class="right-nav-text">Daftar Pengguna</span></div><div class="clearfix"></div></a>
				</li>

				<li><hr class="light-grey-hr mb-10"/></li>

				<?php
						$info= $this->db->query("SELECT * FROM pengajuan_rapat WHERE keterangan='0'")->num_rows();
					?>

				<li>
					<a href="<?= base_url('c_admin/usulan_rapat') ?>"><div class="pull-left"><i class="fa fa-comment mr-20"></i><span class="right-nav-text">Usulan Rapat</span></div>
					<?php if ($info !=0): ?>
						<div class="pull-right">
							<span class="label label-warning"><?= $info; ?></span>
						</div>
					<?php endif ?>
					
					<div class="clearfix"></div></a>
				</li>

				<?php endif; ?>

				<?php if($this->session->userdata('tipe')!='admin' && $this->session->userdata('tipe')!='direktur'): ?>
					<li><hr class="light-grey-hr mb-10"/></li>

					<?php
						$info= $this->db->query("SELECT * FROM pengajuan_rapat WHERE keterangan='1'")->num_rows();
					?>

					<li>
						<a href="<?= base_url('c_karyawan/undangan_rapat') ?>"><div class="pull-left"><i class="fa fa-envelope mr-20"></i><span class="right-nav-text">Undangan Rapat</span></div>
						<?php if ($info !=0): ?>
							<div class="pull-right">
								<span class="label label-warning"><?= $info; ?></span>
							</div>
						<?php endif ?>
						<div class="clearfix"></div></a>
					</li>

				<?php endif; ?>

				<?php if ($this->session->userdata('tipe')!='admin' && $this->session->userdata('tipe')!='direktur' && $this->session->userdata('tipe')!='karyawan'): ?>

					<li><hr class="light-grey-hr mb-10"/></li>
					<li>
						<a href="<?= base_url('c_divisi/Bussiness') ?>"><div class="pull-left"><i class="fa fa-book mr-20"></i><span class="right-nav-text">Tugas Rapat</span></div>
						
							<div class="pull-right">
								<span class="label label-warning"></span>
							</div>
						 
						<div class="clearfix"></div></a>
					</li>	
				<?php endif ?>

				<?php if($this->session->userdata('tipe')=='direktur' || $this->session->userdata('tipe')=='admin' ): ?>			
				
				<?php if($this->session->userdata('tipe')=='direktur' ): ?>
				<li><hr class="light-grey-hr mb-10"/></li>
				<li>
					<a href="<?= base_url('c_pimpinan/pengajuan_rapat'); ?>"><div class="pull-left"><i class="fa fa-pencil-square mr-20"></i><span class="right-nav-text">Pengajuan rapat</span></div><div class="clearfix"></div></a>
				</li>
			<?php endif; ?>

				<li><hr class="light-grey-hr mb-10"/></li>
				
				<li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#maps_dr"><div class="pull-left"><i class="fa fa-list-alt mr-20"></i><span class="right-nav-text">Tugas Per Devisi</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
					<ul id="maps_dr" class="collapse collapse-level-1">
						<li>
							<a href="<?= base_url('c_divisi/bussiness'); ?>">Bussiness and Development</a>
						</li>
						<li>
							<a href="<?= base_url('c_divisi/finance') ?>">Finance, Accounting, and Tax</a>
						</li>

						<li>
							<a href="<?= base_url('c_divisi/human') ?>">Human Resource and General</a>
						</li>

						<li>
							<a href="<?= base_url('c_divisi/supply') ?>">Supply Chain Management</a>
						</li>
						
					</ul>
				</li>

				<li><hr class="light-grey-hr mb-10"/></li>

				<li>
					<a href="<?= base_url('c_admin/rekap'); ?>"><div class="pull-left"><i class="fa fa-file mr-20"></i><span class="right-nav-text">Rekap Agenda Rapat</span></div><div class="clearfix"></div></a>
				</li>

			<?php endif; ?>
				<li><hr class="light-grey-hr mb-10"/></li>
				
				
				<li>
					<a href="<?= base_url('c_login/logout'); ?>"><div class="pull-left"><i class="fa fa-power-off mr-20"></i><span class="right-nav-text">Logout</span></div><div class="clearfix"></div></a>
				</li>
				
			</ul>
		</div>
		<!-- /Left Sidebar Menu -->
		
		
        <!-- Main Content -->
		<div class="page-wrapper">
            <div class="container pt-25">

            	<?php $this->load->view($content); ?>
				
			</div>
			
			<!-- Footer -->
			<footer class="footer container-fluid pl-30 pr-30">
				<div class="row">
					<div class="col-sm-12">
						<p>2018 &copy; Zapily. Pampered by Hencework </p>
					</div>
				</div>
			</footer>
			<!-- /Footer -->
			
		</div>
        <!-- /Main Content -->

    </div>
    <!-- /#wrapper -->
	
	<!-- JavaScript -->
	
    <!-- jQuery -->
    <script src="<?= base_url(); ?>vendors/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?= base_url(); ?>vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    
	<!-- Data table JavaScript -->
	<script src="<?= base_url(); ?>vendors/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>

	<script src="<?= base_url() ?>dist/js/dataTables-data.js"></script>
	
	<!-- Slimscroll JavaScript -->
	<script src="<?= base_url(); ?>dist/js/jquery.slimscroll.js"></script>
	
	<!-- Progressbar Animation JavaScript -->
	<script src="<?= base_url(); ?>vendors/bower_components/waypoints/lib/jquery.waypoints.min.js"></script>
	<script src="<?= base_url(); ?>vendors/bower_components/jquery.counterup/jquery.counterup.min.js"></script>
	
	<!-- Fancy Dropdown JS -->
	<script src="<?= base_url(); ?>dist/js/dropdown-bootstrap-extended.js"></script>
	
	<!-- Sparkline JavaScript -->
	<script src="<?= base_url(); ?>vendors/jquery.sparkline/dist/jquery.sparkline.min.js"></script>
	
	<!-- Owl JavaScript -->
	<script src="<?= base_url(); ?>vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>
	
	<!-- Switchery JavaScript -->
	<script src="<?= base_url(); ?>vendors/bower_components/switchery/dist/switchery.min.js"></script>
	
	<!-- EChartJS JavaScript -->
	<script src="<?= base_url(); ?>vendors/bower_components/echarts/dist/echarts-en.min.js"></script>
	<script src="<?= base_url(); ?>vendors/echarts-liquidfill.min.js"></script>
	
	<!-- Toast JavaScript -->
	<!-- <script src="<?= base_url(); ?>vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js"></script> -->
	
	<!-- Init JavaScript -->
	<script src="<?= base_url(); ?>dist/js/init.js"></script>
	<script src="<?= base_url(); ?>dist/js/toast-data.js"></script>
	<script src="<?= base_url(); ?>dist/js/dashboard-data.js"></script>
	
	<script src="<?= base_url(); ?>vendors/bower_components/bootstrap-table/dist/bootstrap-table.min.js"></script>
	<script src="<?= base_url() ?>dist/js/bootstrap-table-data.js"></script>
	<script src="vendors/bower_components/dropify/dist/js/dropify.min.js"></script>
		
		<!-- Form Flie Upload Data JavaScript -->
	<script src="dist/js/form-file-upload-data.js"></script>
	
</body>

</html>

