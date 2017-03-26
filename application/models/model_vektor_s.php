<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_vektor_s extends CI_Model {
	public function GetUser($where=""){
		$this->db->select('tb_vektor_s.id_alternatif,tb_vektor_s.vektor_s,tb_alternatif.id_alternatif,tb_alternatif.nama_alternatif')
		->join('tb_alternatif','tb_alternatif.id_alternatif=tb_vektor_s.id_alternatif');
		return $this->db->get('tb_vektor_s')->result();
		$data = $this->db->query('select * from tb_vektor_s '.$where);
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
	function alternatif(){
		$this->db->order_by('id_alternatif','asc');
		$result = $this->db->get('tb_alternatif');
		$data[''] = 'Please Select';
		if ($result->num_rows() > 0) {
			foreach ($result->result() as $row) {
				$data[$row->id_alternatif] = $row->nama_alternatif;
			}
		}
		return $data;
	}
	function vektor_v(){
	 $this->db->select('SUM(vektor_s)as vektor_v');
	 $this->db->from('tb_vektor_s');
	 return $this->db->get()->row()->vektor_v;
	}
}
