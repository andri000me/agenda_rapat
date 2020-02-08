<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 

 class m_pimpinan extends CI_Model{

 	function tampil_data()
 	{
 		return $this->db->query("SELECT * FROM pengajuan_rapat order by id DESC");	
 	}

 	function tambah_data($data,$table)
 	{
 		$this->db->insert($table,$data);
 	}

 	function hapus_rapat($id)
 	{
 		$hapus =$this->db->query("DELETE FROM pengajuan_rapat WHERE id='$id'");
		return $hapus;
 	}

 }

 ?>



 