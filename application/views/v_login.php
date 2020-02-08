<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>Login</title>
		<meta name="description" content="Zapily is a Dashboard & Admin Site Responsive Template by hencework." />
		<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Zapily Admin, Zapilyadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
		<meta name="author" content="hencework"/>
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="<?= base_url() ?>favicon.ico">
		<link rel="icon" href="<?= base_url() ?>favicon.ico" type="image/x-icon">
		
		<!-- vector map CSS -->
		<link href="<?= base_url() ?>vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css" rel="stylesheet" type="text/css"/>
		<link href="<?= base_url() ?>vendors/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
		
		
		
		<!-- Custom CSS -->
		<link href="<?= base_url() ?>dist/css/style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<!--Preloader-->
		<div class="preloader-it">
			<div class="la-anim-1"></div>
		</div>
		<!--/Preloader-->
		
		<div class="wrapper pa-0">
			
			
			<!-- Main Content -->
			<div class="page-wrapper pa-0 ma-0 auth-page">
				<div class="container-fluid">
					<!-- Row -->
					<!-- <div class="table-struct full-width full-height"> -->
						<!-- <div class="table-cell vertical-align-middle auth-form-wrap"> -->
							<div class="auth-form  ml-auto mr-auto no-float">
								<div class="row">
									<div class="col-sm-12 col-xs-12">
											<img  class="img-responsive" src="<?= base_url('img/ekaputra.png'); ?>" >
								
									<div class="form-wrap">
											<?= $this->session->flashdata('message'); ?>
											<form action="<?= base_url('c_login/login') ?>" method="post">
												<div class="form-group">
													<label class="control-label mb-10" for="exampleInputEmail_2">NIP</label>
													<input type="text" name="nip" class="form-control" required="" id="exampleInputEmail_2" placeholder="Enter NIP">
													<?= form_error('nip','<small class="text-danger pl-3">','</small>'); ?>
												</div>
												<div class="form-group">
													<label class="pull-left control-label mb-10"  for="exampleInputpwd_2">Password</label>
													
													<div class="clearfix"></div>
													<input type="password" name="password" class="form-control" required="" id="exampleInputpwd_2" placeholder="Enter passsword">
													<?= form_error('password','<small class="text-danger pl-3">','</small>'); ?>
												</div>
												
												
												<div class="form-group text-center">
													<button type="submit" class="btn btn-success  btn-rounded">sign in</button>
												</div>
											</form>
										</div>
									</div>	
								</div>
							</div>
						<!-- </div>
					</div> -->
					<!-- /Row -->	
				</div>
				
			</div>
			<!-- /Main Content -->
		
		</div>
		<!-- /#wrapper -->
		
		<!-- JavaScript -->
		
		<!-- jQuery -->
		<script src="<?= base_url() ?>vendors/bower_components/jquery/dist/jquery.min.js"></script>
		
		<!-- Bootstrap Core JavaScript -->
		<script src="<?= base_url() ?>vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		<script src="<?= base_url() ?>vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js"></script>
		
		<!-- Slimscroll JavaScript -->
		<script src="<?= base_url() ?>dist/js/jquery.slimscroll.js"></script>
		
		<!-- Init JavaScript -->
		<script src="<?= base_url() ?>dist/js/init.js"></script>
	</body>
</html>
