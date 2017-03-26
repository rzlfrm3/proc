<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_pejabatpengadaan extends CI_Model {
	public function GetUser($where=""){
		$data = $this->db->query('select * from tb_pejabatpengadaan '.$where);
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
	function kepalabidang(){
		$this->db->order_by('id_kepalabidang','asc');
		$result = $this->db->get('tb_kepalabidang');
		$data[''] = 'Please Select';
		if ($result->num_rows() > 0) {
			foreach ($result->result() as $row) {
				$data[$row->id_kepalabidang] = $row->nama_kepalabidang;
			}
		}
		return $data;
	}
}
