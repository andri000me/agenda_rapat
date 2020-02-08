<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
 class m_karyawan extends CI_Model{

 	function undangan_rapat()
 	{
 		return $this->db->query("SELECT * FROM pengajuan_rapat where keterangan=1 || keterangan=2 ORDER BY keterangan ASC");
 	}

 }