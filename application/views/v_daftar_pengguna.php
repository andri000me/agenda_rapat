<div class="row">
	<div class="col-sm-12">
		<div class="panel panel-default card-view">
			<div class="panel-heading">
				<div class="pull-left">
					<h6 class="panel-title txt-dark">Daftar Pengguna</h6>
				</div>
				<div class="clearfix"></div>
			</div>
			<!-- button tambah rapat -->
			<div class="row">
				<div class="button-list mt-25 mb-10 ml-15">
					<button type="button" class="btn btn-primary btn-md pull-left" data-toggle="modal" data-target="#exampleModal">Tambah Pengguna</button>
				</div><br>
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
											data-sortable="true"> NIP </th>
									  	<th data-field="tanggal" 
										  data-sortable="true" data-width="100"> Nama </th>
									  	<th data-field="jam" 
										data-sortable="true"> Tipe </th>
										
										<th data-field="aksi" 
											data-sortable="true"> Aksi </th>
									</tr>
								</thead>
								<tbody>
								<?php  $no=1; foreach($users as $u):?>
					                <tr>
				                        <td><?= $no++; ?></td>
				                        <td><?= $u->nip; ?></td>
				                        <td><?= $u->nama; ?></td>
				                        <td><?= $u->tipe; ?></td>
				                        
				                        <td>
				                        	<a class="label label-warning" data-toggle="modal" data-target="#editModal<?= $u->nip;?>"><i class="label label-warning">Edit</i></a>
				                        	<a class="label label-danger" data-toggle="modal" data-target="#deleteModal<?= $u->nip;?>"><i class="label label-danger">Delete</i></a>
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

<!-- modal tambah -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h5 class="modal-title" id="exampleModalLabel1">Tambah Pengguna</h5>
			</div>
			<div class="modal-body">
				<form action="<?= base_url('c_admin/tambah_pengguna'); ?>" role="from" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="nip" class="control-label mb-10">NIP:</label>
						<input type="text" name="nip" class="form-control" id="nip" required>
					</div>
					<div class="form-group">
						<label for="nama" class="control-label mb-10">Nama:</label>
						<input type="text" name="nama" class="form-control" id="nama" required>
					</div>
					<div class="form-group">
						<label for="password" class="control-label mb-10">Password:</label>
						<input type="password" name="password" class="form-control" id="password" required>
					</div>
					<div class="form-group">
						<label class="control-label mb-10 text-left">Tipe</label>
						<select class="form-control" name="tipe">
							<option value="admin">Admin</option>
							<option value="direktur">Direktur</option>
							<option value="karyawan">Karyawan</option>
							<option value="human resource and general">Human Resource and General</option>
							<option value="finance, accounting, and tax">Finance, Accounting, and Tax</option>
							<option value="supply chain management">Supply Chain Management</option>
							<option value="bussiness and development">Bussiness and Development</option>
							<option value="sales">Sales</option>
						</select>
					</div>
					<div class="form-group">
						<label for="foto" class="control-label mb-10">Foto:</label>
						<input type="file" name="foto" class="form-control" id="foto" required>
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


<!-- modal edit -->

<?php foreach($users as $u): ?>
<div class="modal fade" id="editModal<?= $u->nip;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h5 class="modal-title" id="exampleModalLabel1">Edit Data Pengguna</h5>
			</div>
			<div class="modal-body">
				<form action="<?= base_url('c_admin/edit_pengguna'); ?>" role="from" method="post" enctype="multipart/form-data">
					<!-- <input type="hidden" name=""> -->
					<div class="form-group">
						<label for="nip" class="control-label mb-10">NIP:</label>
						<input type="text" name="nip" class="form-control" id="nip" value="<?= $u->nip; ?>" required>
					</div>
					<div class="form-group">
						<label for="nama" class="control-label mb-10">Nama:</label>
						<input type="text" name="nama" class="form-control" id="nama" value="<?= $u->nama; ?>" required>
					</div>
					<div class="form-group">
						<label for="password" class="control-label mb-10">Password:</label>
						<input type="password" name="password" class="form-control" value="<?= $u->password; ?>" id="password" required>
					</div>
					<div class="form-group">
						<label class="control-label mb-10 text-left">Tipe</label>
						<select class="form-control" name="tipe">
							<option value="<?= $u->tipe ?>"><?= $u->tipe; ?></option>
							<option value="admin">Admin</option>
							<option value="direktur">Direktur</option>
							<option value="karyawan">Karyawan</option>
							<option value="human resource and general">Human Resource and General</option>
							<option value="finance, accounting, and tax">Finance, Accounting, and Tax</option>
							<option value="supply chain management">Supply Chain Management</option>
							<option value="bussiness and development">Bussiness and Development</option>
							<option value="sales">Sales</option>
						</select>
					</div>
					<div class="form-group">
						<label for="foto" class="control-label mb-10">Foto:</label>
						<div class="row">
							<div class="col-md-3">
								<img src="<?= base_url(); ?>img/<?= $u->foto; ?>" width="100px">
							</div>
							<div class="col-md-9">
								<input type="file" name="foto" class="form-control" value="<?= $u->foto; ?>" id="foto" >
							</div>
						</div>
						
						
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
<?php endforeach; ?>

<!-- modal delete -->

<?php foreach($users as $u): ?>
<div class="modal fade" id="deleteModal<?= $u->nip;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h5 class="modal-title" id="exampleModalLabel1">Hapus Data Pengguna</h5>
			</div>
			<div class="modal-body">
				<form action="<?= base_url('c_admin/hapus_pengguna'); ?>"  role="from" method="post">
					 <p>Anda yakin mau menghapus?</p>
				
			</div>
			<div class="modal-footer">
				<input type="hidden" name="nip" value="<?php echo $u->nip;?>">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Hapus</button>
			</div>
			</form>
		</div>
	</div>
</div>

<?php endforeach; ?>