<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class c_divisi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper(array('url','form','download'));
		$this->load->model('m_divisi');
	}

	public function index()
	{
		$data['content']='v_dashboard';
		$this->load->view('v_template',$data);
	}

	public function bussiness()
	{
		$id=$this->session->userdata('tipe');
		if ($this->session->userdata('tipe')=='admin') {
			$data['task_divisi']=$this->m_divisi->admin_data_tugas()->result();
		}else{
			$data['task_divisi']=$this->m_divisi->data_tugas($id)->result();
		}
		$data['content']='v_task_divisi';
		$this->load->view('v_template',$data);
	}

	public function supply()
	{
		$data['task_divisi']=$this->m_divisi->data_tugas_supply()->result();
		$data['content']='v_task_divisi';
		$this->load->view('v_template',$data);
	}

	public function finance()
	{
		$data['task_divisi']=$this->m_divisi->data_tugas_finance()->result();
		$data['content']='v_task_divisi';
		$this->load->view('v_template',$data);
	}

	public function human()
	{
		$data['task_divisi']=$this->m_divisi->data_tugas_human()->result();
		$data['content']='v_task_divisi';
		$this->load->view('v_template',$data);
	}


	public function upload_rapat()
	{

		$input = array(
			$id = $this->input->post('id'), 
			$tema =$this->input->post('tema'),
		);

		$file_tmp = $_FILES['upload']['tmp_name'];
		$file_type = $_FILES['upload']['type'];
		$file_error = $_FILES['upload']['error'];
		$file_size = $_FILES['upload']['size'];
		$name = $_FILES['upload']['name'];
		$allowedExts = array("doc", "docx");
		$ext = end((explode(".", $name)));
		$file_path_dokumen = $file_size.$name;

		if ($file_type == "application/msword" || ($file_type == "application/vnd.openxmlformats-officedocument.wordprocessingml.document") && in_array($ext, $allowedExts)) {
			if ($file_size > 0 and  $file_error == 0) {
				move_uploaded_file($file_tmp,"upload/tugas_divisi/".$file_size.$name);
			}
		}else{
			
		}

		if($_FILES['upload']['name']  == ''){
			$data=array(
			
				'hasil_tugas'=>$file_path_dokumen
			);
			
		}else{
			$data=array(
				'hasil_tugas'=>$file_path_dokumen

			);			
		}

		$where = array(
			'id'=>$id
		);

		$this->m_divisi->upload_tugas($where,$data,'tugas_divisi');

			$this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissable">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Tugas Berhasil Diupload. 
			</div>');
		redirect('c_divisi/bussiness');		
	}

	public function downloadtugas($id)
	{
		$id=$this->uri->segment(3);
		$file_info=$this->m_divisi->downloadtugas($id);

		force_download('upload/tugas_divisi/'.$file_info['hasil_tugas'],NULL);
	}


}