<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class c_pimpinan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper(array('url','form'));
		$this->load->model('m_pimpinan');
	}

	public function index()
	{	
		$data['content']='v_dashboard';
		$this->load->view('v_template',$data);
	}

	public function pengajuan_rapat()
	{
		$data['rapat']=$this->m_pimpinan->tampil_data()->result();
		$data['content']='v_pengajuan_rapat';
		$this->load->view('v_template',$data);
	}

	public function tambah_rapat()
	{

		$tema = $this->input->post('tema');
		$tanggal = $this->input->post('tanggal');
		$jam = $this->input->post('jam');
		
		$data =array(
			
			'tema'=>$tema,
			'tanggal'=>$tanggal,
			'jam'=>$jam
			
		);

		$add_rapat=$this->db->get_where('pengajuan_rapat', ['tanggal'=>$tanggal])->row_array();

		// if ($data == null) {
		// 	$this->session->set_flashdata('msg', 
		// 		'<div class="alert alert-danger alert-dismissable">
		// 			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Opps! Ada kesalahan!!. 
		// 		</div>');    
		// 	redirect('c_pimpinan/pengajuan_rapat'); 
			
		// }
		if($add_rapat['tanggal']==$tanggal){
			$this->session->set_flashdata('msg', 
				'<div class="alert alert-danger alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Opps! Jadwal Rapat Telah Ada pada Tanggal ' .$tanggal.' 
				</div>');    
			redirect('c_pimpinan/pengajuan_rapat'); 

		}
		else{
			$this->m_pimpinan->tambah_data($data,'pengajuan_rapat');
		
			$this->session->set_flashdata('msg', 
				'<div class="alert alert-success alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Yay! Data Berhasil Disimpan. 
				</div>');    
			redirect('c_pimpinan/pengajuan_rapat');
		}

		
	}

	public function hapus_rapat()
	{
		 $id=$this->input->post('id');
		 $this->m_pimpinan->hapus_rapat($id);

      	
      	$this->session->set_flashdata('msg', 
		'<div class="alert alert-success alert-dismissable">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Yay! Data Rapat Telah Dihapus. 
		</div>');    
		redirect('c_pimpinan/pengajuan_rapat'); 
    
   
  }

	

	

}


 ?>