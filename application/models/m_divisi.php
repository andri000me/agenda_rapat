<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 

 class m_divisi extends CI_Model{

 	function data_tugas($id)
 	{
 		return $this->db->query("SELECT * FROM tugas_divisi where tujuan='$id'"); 		
 	}

 	function admin_data_tugas()
 	{
 		return $this->db->query("SELECT * FROM tugas_divisi where tujuan='bussiness and development'"); 		
 	}

 	function upload_tugas($where,$data,$table)
 	{
 		$this->db->where($where);
 		$this->db->update($table,$data);
 	}

 	function downloadtugas($id)
 	{
 		$sql = $this->db->get_where('tugas_divisi', array('id'=>$id));
 		return $sql->row_array();
 	}

 	function data_tugas_supply()
 	{
 		return $this->db->query("SELECT * FROM tugas_divisi where tujuan='supply chain management'"); 		
 	}

 	function data_tugas_finance()
 	{
 		return $this->db->query("SELECT * FROM tugas_divisi where tujuan='finance, accounting, and tax'"); 		
 	}

 	function data_tugas_human()
 	{
 		return $this->db->query("SELECT * FROM tugas_divisi where tujuan='human resource and general'"); 		
 	}

 }