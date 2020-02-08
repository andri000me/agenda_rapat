<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 

 class m_admin extends CI_Model{

 	function data_pengguna()
 	{
 		return $this->db->query("SELECT * FROM users");
 	}

 	function tambah_pengguna($data,$table)
 	{
 		return $this->db->insert($table,$data);
 	}

 	function edit_pengguna($data,$where,$table)
 	{
 		return $this->db->update($table,$data,$where);
 	}

 	function edit_profil($data,$where,$table)
 	{
 		return $this->db->update($table,$data,$where);
 	}

 	function hapus_pengguna($nip)
 	{
 		$hapus =$this->db->query("DELETE FROM users WHERE nip='$nip'");
		return $hapus;
 	}

 	function data_rapat()
 	{
 		return $this->db->query("SELECT * FROM pengajuan_rapat order by id DESC");
 	}

 	function share_rapat($id)
 	{
 		$data=[
			'keterangan'=>'1'
			];

			$this->db->where('id',$id);
			$this->db->update('pengajuan_rapat',$data);
			return true;
 	}

 	public function hasil_rapat($data,$where,$table)
 	{
 		return $this->db->query("UPDATE pengajuan_rapat SET hasil_rapat='$data' where id=$where");
 	}

 	public function edit_hasil_rapat($data,$where,$table)
 	{
 		return $this->db->query("UPDATE $table SET hasil_rapat='$data' where id=$where");
 	}

 	public function tugas_divisi($data,$table)
 	{
 		return $this->db->insert($table,$data);
 	}

 	public function tampil_data_rekap($from,$until)
 	{
 		$from=htmlspecialchars($from,ENT_QUOTES);
        $until=htmlspecialchars($until,ENT_QUOTES);

 		return $this->db->query("SELECT * FROM pengajuan_rapat WHERE keterangan=2 || keterangan=1 AND tanggal BETWEEN '$from' and '$until'");
 	}

}

?>