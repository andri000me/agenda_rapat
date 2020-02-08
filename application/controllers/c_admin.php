<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class c_admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper(array('url','form'));
		$this->load->model('m_admin');
	}

	public function index()
	{
		$data['rapat_selesai']=$this->db->query("SELECT * FROM pengajuan_rapat WHERE keterangan=2")->num_rows();
		$data['content']='v_dashboard';
		$this->load->view('v_template',$data);
	}

	public function daftar_pengguna()
	{
		$data['users']=$this->m_admin->data_pengguna()->result();
		$data['content']='v_daftar_pengguna';
		$this->load->view('v_template',$data);
	}
	

	public function tambah_pengguna()
	{
		$data=array(
			'nip'=>$this->input->post('nip'),
			'nama'=>$this->input->post('nama'),
			'password'=>$this->input->post('password'),
			'tipe'=>$this->input->post('tipe'),
			'foto'=>$file_path = $this->input->post('nama').".jpg"
		);

		$file_tmp = $_FILES['foto']['tmp_name'];
			$file_type = $_FILES['foto']['type'];
			$file_error = $_FILES['foto']['error'];
			$file_size = $_FILES['foto']['size'];
			$file_path = $this->input->post('nama').".jpg";

			if ($file_type == "image/jpeg" || $file_type == "image/png") {
				if ($file_size > 0 and  $file_error == 0) {
					move_uploaded_file($file_tmp,"img/".$this->input->post('nama').".jpg" );
				}
			}

			$this->m_admin->tambah_pengguna($data,'users');
			$this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Yay! Data Berhasil Disimpan. 
				</div>');
			redirect('c_admin/daftar_pengguna');
	}

	public function edit_pengguna()
	{
		if ($_FILES['foto']['name'] =='') {
				$data=[
				'nip'=>$this->input->post('nip'),
				'nama'=>$this->input->post('nama'),
				'password'=>$this->input->post('password'),
				'tipe'=>$this->input->post('tipe')
				];
			}else{
				$data=[
			
				'nip'=>$this->input->post('nip'),
				'nama'=>$this->input->post('nama'),
				'password'=>$this->input->post('password'),
				'tipe'=>$this->input->post('tipe'),
				'foto'=>$file_path = $this->input->post('nama').".jpg"
				];		
			}

			$file_tmp = $_FILES['foto']['tmp_name'];
			$file_type = $_FILES['foto']['type'];
			$file_error = $_FILES['foto']['error'];
			$file_size = $_FILES['foto']['size'];
			$file_path = $this->input->post('nama').".jpg";

			if ($file_type == "image/jpeg" || $file_type == "image/png") {
				if ($file_size > 0 and  $file_error == 0) {
					move_uploaded_file($file_tmp,"img/".$this->input->post('nama').".jpg" );
				}
			}

			$id=$this->input->post('nip');
			$where=$this->db->where('nip',$id);
			$this->m_admin->edit_pengguna($data,$where,'users');

			$this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Yay! Data Berhasil Diedit. 
				</div>');
			redirect('c_admin/daftar_pengguna');
	}

	public function hapus_pengguna()
	{
		$nip=$this->input->post('nip');
		$this->m_admin->hapus_pengguna($nip);

      	
      	$this->session->set_flashdata('msg', 
		'<div class="alert alert-success alert-dismissable">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Yay! Data Pengguna Telah Dihapus. 
		</div>');    
		redirect('c_admin/daftar_pengguna'); 
	}

	public function usulan_rapat()
	{	
		$data['rapat']=$this->m_admin->data_rapat()->result();
		$data['content']='v_usulan_rapat';
		$this->load->view('v_template',$data);
	}

	public function share_rapat($id)
	{
		if ($this->m_admin->share_rapat($id)) {

			$this->session->set_flashdata('msg', 
				'<div class="alert alert-success alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Agenda Rapat Telah Disebar. 
				</div>');    
    		redirect('c_admin/usulan_rapat');
    	}else{
    		exit('data unknown!');
    	}	
	}

	public function hasil_rapat()
	{
		$data= $this->input->post('hasil_rapat');
			

		$id=$this->input->post('id');
		$where=$this->input->post('id',$id);
		$this->m_admin->hasil_rapat($data,$where,'pengajuan_rapat');

		$this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Hasil Rapat Berhasil Ditambah. 
				</div>');
		redirect('c_admin/usulan_rapat');
	}

	public function edit_hasil_rapat()
	{
		$id=$this->input->post('id');
		$data=$this->input->post('hasil_rapat');
		$where=$this->input->post('id',$id);
		$this->m_admin->edit_hasil_rapat($data,$where,'pengajuan_rapat');

		$this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Hasil Rapat Berhasil Diedit. 
				</div>');
		redirect('c_admin/usulan_rapat');
	}

	public function bussiness()
	{
		$data['content']='v_task_bussiness';
		$this->load->view('v_template',$data);
	}

	public function tugas_divisi()
	{
		$data=[
			'tema'=>$this->input->post('tema'),
			'tanggal'=>$this->input->post('tanggal'),
			'jam'=>$this->input->post('jam'),
			'tujuan'=>$this->input->post('tujuan'),
			'tugas'=>$this->input->post('tugas_divisi'),
			'penanggung_jawab'=>$this->input->post('pj')
		];

		$this->m_admin->tugas_divisi($data,'tugas_divisi');
		$this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissable">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Tugas Berhasil Dikirim. 
			</div>');
		redirect('c_admin/usulan_rapat');
	}

	public function rekap()
	{
		$from=$this->input->post('from');
		$until=$this->input->post('until');
		$data['rapat']=$this->m_admin->tampil_data_rekap($from,$until)->result();
	    $data['from'] = $from;
	    $data['until'] = $until;
		$data['content']='v_rekap';
		$this->load->view('v_template',$data);
	}

	public function cetakRekap($from = FALSE,$until = FALSE)
	{
		if($from != FALSE || $until != FALSE)
		{
      		$data['rapat']=$this->m_admin->tampil_data_rekap($from,$until)->result();
	      	if(empty($data['rapat'] ))
	      	{
	        	echo "<script>alert('Tidak ada data'); window.location.href='".base_url('c_admin/rekap')."';</script>";
	      	}
      
		    $data['from'] = $from;
		    $data['until'] = $until;
		    $this->load->view('v_output_rekap',$data);
 		} else{

		   echo "<script>alert('Masukkan tanggal pencarian dulu'); window.location.href='".base_url('c_admin/rekap')."';</script>";
		   }
		
	}

}