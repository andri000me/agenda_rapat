<div class="row ">
	<div class="col-lg-12 col-xs-12 ">
		<div class="panel panel-default card-view  pa-0">
			<div class="panel-wrapper collapse in">
				<div class="panel-body  pa-0">
					<div class="panel-heading">
						<?= $this->session->flashdata('msg'); ?>
						<div class="pull-left">
							<h6 class="panel-title txt-dark">My Profile</h6>
						</div>
						<div class="clearfix"></div>
					</div>

					<div class="profile-box">
						<div class="profile-cover-pic">
							<div class="profile-image-overlay"></div>
						</div>
						<div class="profile-info text-center">
							<div class="profile-img-wrap">
								<img class="inline-block mb-10" src="<?= base_url();?>img/<?=$this->session->userdata('foto')?>"  alt="user"/>
								
							</div>	
							<h5 class="block mt-10 mb-5 weight-500 capitalize-font txt-gold"><?= $this->session->userdata('nama') ?></h5>
							<h6 class="block capitalize-font pb-20"><?= $this->session->userdata('tipe') ?></h6>
						</div>	
						<div class="social-info">
							<div class="row">
								<div class="col-xs-12 text-center">
									<span class="counts block head-font"><span class="counter-anim"><?= $this->session->userdata('nip') ?></span></span>
									<span class="counts-text block">NIP</span>
								</div>
								
							</div>
							<button class="btn btn-gold btn-block  btn-anim mt-40" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil"></i><span class="btn-text">edit profile</span></button>
							
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>

<!-- modal edit profil -->

<div id="myModal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h5 class="modal-title" id="myModalLabel">Edit Profile</h5>
			</div>
			<div class="modal-body">
				<!-- Row -->
				<div class="row">
					<div class="col-lg-12">
						<div class="">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<div class="col-sm-12 col-xs-12">
										<div class="form-wrap">
											<form action="<?= base_url('c_karyawan/actionUpdateProfil') ?>" method="post" enctype="multipart/form-data">
												<div class="form-body overflow-hide">
													<div class="form-group">
														<label class="control-label mb-10" for="exampleInputuname_1">Name</label>
														<div class="input-group">
															<div class="input-group-addon"><i class="icon-user"></i></div>
															<input type="text" class="form-control" name="nama" value="<?= $this->session->userdata('nama') ?>">
														</div>
													</div>
													
													<div class="form-group">
														<label class="control-label mb-10" for="exampleInputpwd_1">Password</label>
														<div class="input-group">
															<div class="input-group-addon"><i class="icon-lock"></i></div>
															<input type="password" name="password" class="form-control" value="<?= $this->session->userdata('password') ?>">
														</div>
													
													</div>

													<div class="form-group">
														<label class="control-label mb-10" for="exampleInputpwd_1">Foto</label>
														<div class="input-group">
															<div class="input-group-addon"><img src="<?= base_url();?>img/<?=$this->session->userdata('foto')?>" width="50px"  alt="user"></div>
															<input type="file" name="foto" class="form-control" >
														</div>
													
													</div>


												<div class="form-actions mt-10">			
													<button type="submit" class="btn btn-success mr-10 mb-30">Update profile</button>
												</div>				
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
