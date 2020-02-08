<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class c_karyawan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper(array('url','form'));
		$this->load->model(array('m_karyawan','m_admin'));
	}

	public function index()
	{
		$data['content']='v_dashboard';
		$this->load->view('v_template',$data);
	}

	public function undangan_rapat()
	{
		$data['ur']=$this->m_karyawan->undangan_rapat()->result();
		$data['content']='v_undangan_rapat';
		$this->load->view('v_template',$data);
	}

	public function hasil_rapat()
	{
		$data['content']='v_hasil_rapat';
		$this->load->view('v_template',$data);
	}

	public function updateProfil()
	{	
		$info=$this->m_admin->data_pengguna()->result();
		$data['content']='v_profil';
		$this->load->view('v_template',$data);
	}

	public function actionUpdateProfil()
	{
		
		if ($_FILES['foto']['name'] =='') {
				$data=[
				'nip'=>$this->session->userdata('nip'),
				'nama'=>$this->input->post('nama'),
				'password'=>$this->input->post('password'),
				'tipe'=>$this->session->userdata('tipe')
				];
			}else{
				$data=[
			
				'nip'=>$this->session->userdata('nip'),
				'nama'=>$this->input->post('nama'),
				'password'=>$this->input->post('password'),
				// 'tipe'=>$this->input->post('tipe'),
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

			$id=$this->session->userdata('nip');
			$where=$this->db->where('nip',$id);
			$this->m_admin->edit_profil($data,$where,'users');

			$this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Profil Berhasil Diupdate. 
				</div>');
			redirect('c_karyawan/updateProfil');
	}

}

?>