<div class="row">
	<div class="col-sm-12">
		<div class="panel panel-default card-view">

			<div class="panel-heading">
				<div class="pull-left">
					<h6 class="panel-title txt-dark">Agenda Rapat</h6>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="panel-wrapper collapse in">
				<div class="panel-body">
					 <?= $this->session->flashdata('msg'); ?>
					<div class="table-wrap">
						<div class="table-responsive">
							<table id="datable_1" class="table table-hover display  pb-30"	>
								<thead>
									<tr>
										<th data-field="no" 
											data-sortable="true"> No </th>
									  	<th data-field="tema" 
											data-sortable="true"> Tema </th>
									  	<th data-field="tanggal" 
										  data-sortable="true"> Tanggal </th>
									  	<th data-field="jam" 
										data-sortable="true"> Jam </th>
										
										<th data-field="aksi" 
											data-sortable="true"> Aksi </th>
									</tr>
								</thead>
								<tbody>
								<?php  $no=1; foreach($rapat as $u):?>
					                <tr>
				                        <td><?= $no++; ?></td>
				                        <td><?= $u->tema; ?></td>
				                        <td><?= $u->tanggal; ?></td>
				                        <td><?= $u->jam; ?></td>
				                        
				                        <td>
				                        	<?php if ($u->keterangan==0): ?>
				                        		<a href="<?= base_url('c_admin/share_rapat/'.$u->id); ?>" class="label label-primary mr-5"><i class="label label-primary">Share Rapat </i> </a>
				                        			
				                        	<?php endif ?>

				                        	<?php if($u->keterangan != 0 ): ?>
				                        		
				                        		<?php if($u->hasil_rapat ==''): ?>
				                        	
				                        	<a class="label label-warning" data-toggle="modal" data-target="#hasilModal<?= $u->id;?>"><i class="label label-warning">Input Hasil Rapat</i></a>

				                       			 <?php endif; ?>

				                       			 <?php if($u->hasil_rapat !=''): ?>

				                       				<a class="label label-primary" data-toggle="modal" data-target="#editModal<?= $u->id;?>"><i class="label label-primary">Edit</i></a>

				                       				<a class="label label-success" data-toggle="modal" data-target="#infoModal<?= $u->id;?>"><i class="label label-success">Info</i></a>

				                       				<a class="label label-info" data-toggle="modal" data-target="#tugasModal<?= $u->id;?>"><i class="label label-info">Kirim Tugas</i></a>


				                       			<?php endif; ?>

				                        	

				                        	<?php endif; ?>
				                        	
				                        </td>	          
							        </tr>
							    <?php endforeach; ?>
							    </tbody>
							</table>
						</div>
					</div>	
				</div>	
			</div>	
		</div>	
	</div>
</div>

<!-- modal tambah hasil rapat -->

<?php foreach($rapat as $u): ?>
<div class="modal fade" id="hasilModal<?= $u->id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h5 class="modal-title" id="exampleModalLabel1">Hasil Rapat</h5>
			</div>
			<div class="modal-body">
				<form action="<?= base_url('c_admin/hasil_rapat'); ?>" role="from" method="post" enctype="multipart/form-data">
					<input type="hidden" name="id" value="<?= $u->id; ?>">
					<label>Input Hasil Rapat:</label>
					<textarea class="form-control mt-10" rows="5" name="hasil_rapat"><?= $u->hasil_rapat; ?></textarea>
					
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save</button>
			</div>
			</form>
		</div>
	</div>
</div>
<?php endforeach; ?>

<!-- modal info rapat -->

<?php foreach($rapat as $u): ?>
<div class="modal fade" id="infoModal<?= $u->id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h5 class="modal-title" id="exampleModalLabel1">Hasil Rapat</h5>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<div class="table-wrap mt-30">
						<div class="table-responsive">
							<table class="table table-hover mb-0">
								
								<tbody>
									<tr>
										<td>Tema</td>
										<td><?= $u->tema ?></td>
									</tr>
									<tr>
										<td>Tanggal</td>
										<td><?= $u->tanggal ?></td>
									</tr>
									<tr>
										<td>Pukul</td>
										<td><?= $u->jam ?></td>
									</tr>
									<tr>
										<td>Hasil Rapat</td>
										<td><textarea  class="form-control" rows="5" disabled><?= $u->hasil_rapat; ?></textarea></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>

				
				</div>
							
			</div>
				
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
			
		</div>
	</div>
</div>
<?php endforeach; ?>

<!-- modal edit hasil rapat -->

<?php foreach($rapat as $u): ?>
<div class="modal fade" id="editModal<?= $u->id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h5 class="modal-title" id="exampleModalLabel1">Hasil Rapat</h5>
			</div>
			<div class="modal-body">
				<form action="<?= base_url('c_admin/edit_hasil_rapat'); ?>" role="from" method="post" enctype="multipart/form-data">
					<input type="hidden" name="id" value="<?= $u->id; ?>">
					<label>Input Hasil Rapat:</label>
					<textarea class="form-control mt-10" rows="5" name="hasil_rapat"><?= $u->hasil_rapat; ?></textarea>
					
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save</button>
			</div>
			</form>
		</div>
	</div>
</div>
<?php endforeach; ?>


<!-- modal kirim tugas rapat -->


<?php foreach($rapat as $u): ?>
<div class="modal fade" id="tugasModal<?= $u->id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h5 class="modal-title" id="exampleModalLabel1">Tugas Divisi</h5>
			</div>
			<div class="modal-body">
				<div class="form-wrap">
					<form class="form-horizontal" action="<?= base_url('c_admin/tugas_divisi'); ?>" method="post" role="from" enctype="multipart/form-data">
						<input type="hidden" name="tema" value="<?= $u->tema; ?>">
						<input type="hidden" name="tanggal" value="<?= $u->tanggal; ?>">
						<input type="hidden" name="jam" value="<?= $u->jam; ?>">
						<div class="form-group">
							<label class="control-label mb-10 col-sm-2">Tujuan</label>
							<div class="col-sm-10">

								<select class="form-control" name="tujuan">
									<option selected disabled>Pilih Divisi</option>
									<option value="bussiness and development">Bussiness and Development</option>
									<option value="finance, accounting, and tax">Finance, Accounting, and Tax</option>
									<option value="human resource and general">Human Resource and General</option>
									<option value="supply chain management">Supply Chain Management</option>
								</select>
								
							</div>
						</div>
						<div class="form-group">
							<label class="control-label mb-10 col-sm-2">Penanggung Jawab</label>
							<div class="col-sm-10">
								<input type="text" name="pj" class="form-control">
							</div>
							
						</div>

						<div class="form-group">
							<label class="control-label mb-10 col-sm-2" for="pwd_hr">Input Tugas</label>
						<div class="col-sm-10"> 
							<textarea class="form-control mt-10" rows="5" name="tugas_divisi"></textarea>
						</div>
						</div>
						
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Save</button>
						</div>
						
					</form>
				</div>
			</div>
				
		</div>
	</div>
</div>
<?php endforeach; ?>