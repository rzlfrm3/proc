<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_subbidang1 extends CI_Model {
	public function GetUser($where=""){
		$data = $this->db->query('select * from tb_subbidang '.$where);
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
	function bidang(){
		$this->db->order_by('id_bidang','asc');
		$result = $this->db->get('tb_bidang');
		$data[''] = 'Please Select';
		if ($result->num_rows() > 0) {
			foreach ($result->result() as $row) {
				$data[$row->id_bidang] = $row->nama_bidang;
			}
		}
		return $data;
	}
}
