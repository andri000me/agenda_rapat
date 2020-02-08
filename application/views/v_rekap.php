<div class="row">
	<div class="col-sm-12">
		<div class="panel panel-default card-view">

			<div class="panel-heading">
				<div class="pull-left">
					<h6 class="panel-title txt-dark">Rekap Agenda Rapat</h6>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="panel-wrapper collapse in">
				<div class="panel-body">
					 <?= $this->session->flashdata('msg'); ?>
					<form method="post" action="<?= base_url('c_admin/rekap'); ?>">
						<div class="form-group">
					        <label class="control-label col-md-1 col-sm-1 col-xs-12" for="first-name">Dari</label>
					        <div class="col-md-3 col-sm-11 col-xs-12">
					          	<input type="date" id="first-name" required="required" name="from" class="form-control col-md-7 col-xs-12">
					        </div>
					         <label class="control-label col-md-1 col-sm-1 col-xs-12" for="first-name">Sampai</label>
					        <div class="col-md-3 col-sm-11 col-xs-12">
					          	<input type="date" id="first-name" required="required" name="until" class="form-control col-md-7 col-xs-12">
					        </div>
					        
					        <div class="col-md-2 col-sm-11 col-xs-12">
					          	<button type="submit" id="first-name" class="btn btn-primary">Cari Data</button>
					        </div>
					    </div>
					</form>
				</div>

					
	                <div style="margin-left: 14px">
	                     <a href="<?= base_url('c_admin/cetakRekap/'.$from.'/'.$until); ?>" target='_blank1' class="btn btn-primary fa fa-print" >&nbspPrint</a>
	                </div> 

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
										data-sortable="true"> Hasil Rapat </th>
										
										
									</tr>
								</thead>
								<tbody>
								<?php  $no=1; foreach($rapat as $u):?>
					                <tr>
				                        <td><?= $no++; ?></td>
				                        <td><?= $u->tema; ?></td>
				                        <td><?= $u->tanggal; ?></td>
				                        <td><?= $u->jam; ?></td>
				                        <td><?= $u->hasil_rapat; ?></td>
				                        
				                       	          
							        </tr>
							    <?php endforeach; ?>
							    </tbody>
							</table><br>
						</div>
					</div>	
				</div>	
			</div>	
		</div>	
	</div>
</div>