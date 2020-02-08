
<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class c_login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper(array('url','form'));
	}

	public function index()
	{
		$this->load->view('v_login');
	}

	public function login()
	{
		$nip=$this->input->post('nip');
		$pass=$this->input->post('password');

		$this->form_validation->set_rules('nip', 'nip', 'required|trim');
		$this->form_validation->set_rules('password', 'password', 'required|trim');

		if ($this->form_validation->run()==FALSE) {
			$data['title']='Login';
			$this->load->view('v_login',$data);
		}
		else{
			$user=$this->db->get_where('users', ['nip'=>$nip])->row_array();

			if ($user['nip']==$nip) {

				if ($user['password']==$pass) {
					
					$data=[
					'nip'=>$user['nip'],
					'nama'=>$user['nama'],
					'tipe'=>$user['tipe'],
					'foto'=>$user['foto'],
					'password'=>$user['password']
					
					];

					$this->session->set_userdata($data);

					if ($user['tipe']=='direktur') {
						redirect('c_pimpinan');

					}elseif ($user['tipe']=='admin'){
						redirect('c_admin');
					}
					
					elseif($user['tipe']=='karyawan') {
						redirect('c_karyawan');
					}
					else{
						redirect('c_divisi');
					}
				}
				else
				{
					$this->session->set_flashdata('message', '<div class="alert alert-danger role="alert">Password Salah</div>');
					redirect('c_login');
				}		
			}else if ($user['nip']!=$nip AND $user['password']!=$pass ) {
				$this->session->set_flashdata('message', '<div class="alert alert-danger role="alert">Nip dan Password Salah</div>');
				redirect('c_login');
			}

			else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger role="alert">Nip Salah</div>');
				redirect('c_login');
			}
			}
	}

	public function logout()
	{
		$this->session->unset_userdata('nip');
		$this->session->unset_userdata('nama');
		$this->session->unset_userdata('tipe');
		$this->session->unset_userdata('foto');
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>you have been logged out. 
		</div>');
			redirect('c_login');
	}

 }
 ?>

 