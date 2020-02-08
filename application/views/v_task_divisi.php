<div class="row">
	<div class="col-sm-12">
		<div class="panel panel-default card-view">

			<div class="panel-heading">
				<div class="pull-left">
					<h6 class="panel-title txt-dark">
						<?php if ($this->session->userdata('tipe')=='admin'): ?>
							Laporan Tugas Rapat Divisi
						<?php else: ?>
							Tugas Rapat <?= $this->session->userdata('tipe'); ?>
						<?php endif ?>
					
					</h6>
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
									  	<th data-field="tugas" 
										  data-sortable="true">Tugas</th>
									  	<th data-field="jam" 
										data-sortable="true"> Laporan Tugas </th>
										<th data-field="jam" 
										data-sortable="true"> Penanggung Jawab Tugas </th>
										<th data-field="jam" 
										data-sortable="true"> Keterangan </th>

										<?php if ($this->session->userdata('tipe')=='admin' || $this->session->userdata('tipe')=='direktur'): ?>
											
										<?php else: ?>
											<th data-field="Aksi" 
										data-sortable="true"> Aksi </th>
											
										<?php endif ?>
										
										
									</tr>
								</thead>
								<tbody>
								<?php  $no=1; foreach($task_divisi as $u):?>
					                <tr>
				                        <td><?= $no++; ?></td>
				                        <td><?= $u->tema; ?></td>
				                        <td><?= $u->tugas; ?></td>
				                        <td>
				                        	<?php if ($u->hasil_tugas !=''): ?>
				                        		<a href="<?= base_url('c_divisi/downloadtugas/'.$u->id); ?>"  class="label label-success" data-toogle="tooltip" title="Download Surat" data-placement="right">Lihat Laporan</a>
				                        	<?php else: ?>
				                        		<p>-</p>
				                        	<?php endif; ?>
				                        </td>
				                        <td><?= $u->penanggung_jawab; ?></td>

				                        
				                        	<td>
				                        		<?php if ($u->hasil_tugas==''): ?>
				                        			<p class="label label-danger">Belum Selesai</p>
				                        		<?php else: ?>
				                        			<p class="label label-primary">Sudah Selesai</p>
				                        		<?php endif ?></td>

				                        <?php if ($this->session->userdata('tipe')=='admin' || $this->session->userdata('tipe')=='direktur'): ?>
				                        <?php else: ?>
				                        <td>
				                        	<?php if ($u->hasil_tugas ==''): ?>
				                        		<a class="label label-primary" data-toggle="modal" data-target="#uploadModal<?= $u->id;?>"><i class="label label-primary">Upload Tugas</i></a>
				                        	<?php endif ?>
				                        	
				                        	<a class="label label-warning" data-toggle="modal" data-target="#editModal<?= $u->id;?>"><i class="label label-warning">Edit</i></a>
				                    	</td>
				                    	<?php endif; ?>
				                        
				                               
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

<!-- modal upload tugas rapat -->

<?php foreach($task_divisi as $u): ?>
<div class="modal fade" id="uploadModal<?= $u->id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h5 class="modal-title" id="exampleModalLabel1">Upload Tugas Rapat</h5>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<div class="panel-wrapper collapse in">
						<div class="panel-body">
							<p class="text-muted">Upload Tugas Anda.</p>
							<div class="mt-40">
							<form action="<?= base_url('c_divisi/upload_rapat'); ?>" role="form" method="post" enctype="multipart/form-data">
								<input type="hidden" name="id" value="<?= $u->id; ?>">
								<input type="hidden" name="tema" value="<?= $u->tema; ?>">


								<input type="file" name="upload"  class="dropify" />

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
			
		</div>
	</div>
</div>
<?php endforeach; ?>

<!-- modal edit upload tugas rapat -->

<?php foreach($task_divisi as $u): ?>
<div class="modal fade" id="editModal<?= $u->id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h5 class="modal-title" id="exampleModalLabel1">Edit Laporan Tugas Rapat</h5>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<div class="panel-wrapper collapse in">
						<div class="panel-body">
							<p class="text-muted">Upload Tugas Anda.</p>
							<div class="mt-40">
							<form action="<?= base_url('c_divisi/upload_rapat'); ?>" role="form" method="post" enctype="multipart/form-data">
								<input type="hidden" name="id" value="<?= $u->id; ?>">
								<input type="hidden" name="tema" value="<?= $u->tema; ?>">

								<input type="file" name="upload"  class="dropify" />

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
			
		</div>
	</div>
</div>
<?php endforeach; ?>