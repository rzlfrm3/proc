<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_subbidang extends CI_Model {
	public function GetUser($where=""){
		$this->db->select('tb_subbidang.id_subbidang,tb_subbidang.nama_subbidang,tb_subbidang.id_bidang,tb_bidang.id_bidang,tb_bidang.nama_bidang')
		->join('tb_bidang','tb_bidang.id_bidang=tb_subbidang.id_bidang');
		return $this->db->get('tb_subbidang')->result();
		$data = $this->db->query('select * from tb_subbidang'.$where);
		return $data->result_array();
		
	}
	public function insertdata($tabelName,$data){
		$res = $this->db->insert($tabelName,$data);
		return $res;
	}
	public function updatedata($tabelName,$data,$where){
		$res = $this->db->update($tabelName,$data,$where);
		return $res;
	}
	public function deletedata($tabelName,$where){
		$res = $this->db->delete($tabelName,$where);
		return $res;
	}
}
