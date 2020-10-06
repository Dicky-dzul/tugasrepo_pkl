<?php
defined('BASEPATH')or exit ("No direct access script allowed");

class M_model extends CI_Model{
	public function tampil_data($tabel_name){
		$get = $this->db->get($tabel_name);
		return $get->result_array();
	}

	public function Tampil_dataEdit($id){
		$this->db->where('id_obat',$id);
		$get = $this->db->get('obat');
		return $get->row();
	}

	public function Update_data($data,$id)
	{
		$this->db->where('id_obat',$id);
		$edit = $this->db->update('obat',$data);
		return $edit;
	}

	public function Hapus_data($id){
		$this->db->where('id_obat',$id);
		$hapus = $this->db->delete('obat');
		return $hapus;
	}
	public function M_Tambah($tabel_name,$data){
		$tambah = $this->db->insert($tabel_name,$data);
		return $tambah;
	}
}
?>