<div class="row">
	<div class="col-sm-12">
		<div class="panel panel-default card-view">
			<div class="panel-heading">
				<div class="pull-left">
					<h6 class="panel-title txt-dark">Pengajuan Rapat</h6>
				</div>
				<div class="clearfix"></div>
			</div>
			<!-- button tambah rapat -->
			<div class="button-list mt-25">
				<button type="button" class="btn btn-primary " data-toggle="modal" data-target="#exampleModal">Ajukan Rapat</button>
			</div><br>
			 <?= $this->session->flashdata('msg'); ?>
			 
			<div class="panel-wrapper collapse in">
				<div class="panel-body">
					<div class="table-wrap">
						<table id="myTable1" class="table table-hover display  pb-30"	>
							<thead>
								<tr>
									<th data-field="no" 
										data-sortable="true"> No </th>
								  	<th data-field="tema" 
										data-sortable="true"> Tema </th>
								  	<th data-field="tanggal" 
									  data-sortable="true" data-width="100"> Tanggal </th>
								  	<th data-field="jam" 
									data-sortable="true"> Jam </th>
									
									<th data-field="aksi" 
										data-sortable="true"> Aksi </th>
								</tr>
							</thead>
							<tbody>
							<?php  $no=1; foreach($rapat as $r):?>
				                <tr>
			                        <td><?= $no++; ?></td>
			                        <td><?= $r->tema; ?></td>
			                        <td><?= $r->tanggal; ?></td>
			                        <td><?= $r->jam; ?></td>
			                        
			                        <td>
			                        	<a class="label label-danger" data-toggle="modal" data-target="#deleteModal<?= $r->id;?>"><i class="label label-danger">Delete</i></a>
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


<!-- tambah rapat -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h5 class="modal-title" id="exampleModalLabel1">Tambah Rapat</h5>
			</div>
			<div class="modal-body">
				<form action="<?= base_url('c_pimpinan/tambah_rapat'); ?>"  role="from" method="post">
					<div class="form-group">
						<label for="recipient-name" class="control-label mb-10">Tema:</label>
						<input type="text" name="tema" class="form-control" id="recipient-name1" required>
					</div>
					<div class="form-group">
						<label for="message-text" class="control-label mb-10">Tanggal:</label>
						<input type="date" name="tanggal" class="form-control" id="message-text" required>
					</div>
					<div class="form-group">
						<label for="jam" class="control-label mb-10">Jam:</label>
						<input type="time" name="jam" class="form-control" id="jam" required>
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


<!-- hapus rapat -->
<?php foreach($rapat as $r): ?>
<div class="modal fade" id="deleteModal<?= $r->id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h5 class="modal-title" id="exampleModalLabel1">Hapus Rapat</h5>
			</div>
			<div class="modal-body">
				<form action="<?= base_url('c_pimpinan/hapus_rapat'); ?>"  role="from" method="post">
					 <p>Anda yakin mau menghapus?</p>
				
			</div>
			<div class="modal-footer">
				<input type="hidden" name="id" value="<?php echo $r->id;?>">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Hapus</button>
			</div>
			</form>
		</div>
	</div>
</div>

<?php endforeach; ?>



