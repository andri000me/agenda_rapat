<?php 
	$rapat_selesai=$this->db->query("SELECT * FROM pengajuan_rapat WHERE hasil_rapat !=''")->num_rows();
	$rapat_soon= $this->db->query("SELECT * FROM pengajuan_rapat WHERE hasil_rapat=''")->num_rows();
?>
<div class="row">
	<div class="panel-heading">
		<div class="pull-left">
			<h3 class="panel-title txt-dark">Dashboard</h3><br><br>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<div class="panel panel-default card-view pa-0">
			<div class="panel-wrapper collapse in">
				<div class="panel-body pa-0">
					<div class="sm-data-box">
						<div class="container-fluid">
							<div class="row">
								<div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
									<span class="txt-dark block counter"><span class="counter-anim"><?= $rapat_soon; ?></span></span>
									<span class="weight-500 uppercase-font block font-13">Agenda Rapat</span>
								</div>
								<div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
									<i class="icon-layers data-right-rep-icon txt-light-grey"></i>
								</div>
							</div>	


						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<div class="panel panel-default card-view pa-0">
			<div class="panel-wrapper collapse in">
				<div class="panel-body pa-0">
					<div class="sm-data-box">
						<div class="container-fluid">
							<div class="row">
								<div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
									<span class="txt-dark block counter"><span class="counter-anim"><?= $rapat_selesai; ?></span></span>
									<span class="weight-500 uppercase-font block">Rapat Terlaksana</span>
								</div>
								<div class="col-xs-6 text-center  pl-0 pr-0 pt-25  data-wrap-right">
									<div class="sp-small-chart" id="sparkline_4" ></div>
								</div>
							</div>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
</div>

<div class="row">
	<div class="col-md-6">
		<div class="panel panel-default card-view">
			<div class="panel-heading">
				
					<h4 align="center">VISI</h4>
			
				<div class="clearfix"></div>
			</div>
			<div class="panel-wrapper collapse in">
				<div class="panel-body">
					<span class="weight-500 uppercase-font block font-13" style="line-height: 40px">
						Menjadi Perusahaan Penyedia kebutuhan Produk Bahan Makanan dan Minuman yang terlengkap, Terkemuka, Terpecaya & Terjangkau untuk seluruh Modern & Traditional Retail & Food Services di Indonesia dan memberikan manfaat bagi seluruh pihak terkait dengan menyediakan jasa warehousing, logistic & distribution standard Internasional.<br>
					</span>
					
				</div>
			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="panel panel-default card-view">
			<div class="panel-heading">
				
					<h4 align="center">Misi</h4>
			
				<div class="clearfix"></div>
			</div>
			<div class="panel-wrapper collapse in">
				<div class="panel-body">
					<span class="weight-500 uppercase-font block font-13" ">
						1.	Memposisikan Customer sebagai Prioritas.<br>
					2.	Mengoptimalisasikan Sumber Daya Manusia yang Unggul.<br>
					3.	Membangun Sistem dan Teknologi yang Inovatif dan Kompetitif untuk Warehousing, Logistic & Distributions.<br>
					4.	Membangun Kemitraaan yang mendukung dan menguntungkan secara strategis<br>
					5.	Meningkatkan Mutu dari Karyawan, Proses, kualitas Produk dan Pelayanan terbaik.<br>
					6.	Berkontribusi terhadap Peningkatan Gizi, standarisasi Penyimpanan, Pengiriman, dan pendistribusioan serta Mengimplementasikan Total Quality System, WMS, GMP, HACCP, Sertifikasi Halal & ISO .<br>
					7.	Membangun Top Mind Brand untuk Masyarakat Indonesia maupun Internasional.<br>

					</span>
					
				</div>
			</div>
		</div>
	</div>
</div>
					<!-- /Row -->