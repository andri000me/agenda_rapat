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
										<th data-field="jam" 
										data-sortable="true"> Keterangan </th>
										
									</tr>
								</thead>
								<tbody>
								<?php  $no=1; foreach($ur as $u):?>
					                <tr>
				                        <td><?= $no++; ?></td>
				                        <td><?= $u->tema; ?></td>
				                        <td><?= $u->tanggal; ?></td>
				                        <td><?= $u->jam; ?></td>
				                        <td>
				                        <?php if ($u->keterangan==1): ?>
				                        	<a class="label label-warning"><i class="label label-warning">Akan Datang</i></a>
				                        <?php elseif($u->keterangan==2): ?>
				                        	<a class="label label-success"><i class="label label-success mr-5">Terlaksana</i></a>
				                        	<a class="label label-primary" data-toggle="modal" data-target="#infoModal<?= $u->id;?>"><i class="label label-primary">Hasil Rapat</i></a>

				                        <?php endif ?>
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

<!-- modal info rapat -->

<?php foreach($ur as $u): ?>
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