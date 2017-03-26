<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_bidang extends CI_Model {
	public function GetUser($where=""){
		$this->db->select('tb_bidang.id_bidang,tb_bidang.nama_bidang,tb_bidang.id_kepalabidang,tb_kepalabidang.id_kepalabidang,tb_kepalabidang.nama_kepalabidang')
		->join('tb_kepalabidang','tb_kepalabidang.id_kepalabidang=tb_bidang.id_kepalabidang');
		return $this->db->get('tb_bidang')->result();
		$data = $this->db->query('select * from tb_bidang'.$where);
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
