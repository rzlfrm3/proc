<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_kriteria extends CI_Model {
	public function GetUser($where=""){
		$this->db->select('tb_kriteria.id_kriteria,tb_kriteria.nama_kriteria,tb_bobot.id_kriteria,tb_bobot.nilai_bobot,tb_bobot.hasil_bobot,tb_bobot.jum_nilai')
		->join('tb_bobot','tb_bobot.id_kriteria=tb_kriteria.id_kriteria');
		return $this->db->get('tb_kriteria')->result();
		$data = $this->db->query('select * from tb_kriteria'.$where);
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