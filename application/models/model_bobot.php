<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_bobot extends CI_Model {
	public function GetUser($where=""){
		$this->db->select('tb_bobot.nama_bobot,tb_bobot.id_kriteria,tb_bobot.nilai_bobot,tb_bobot.hasil_bobot,tb_bobot.jum_nilai,tb_kriteria.id_kriteria,tb_kriteria.nama_kriteria')
		->join('tb_kriteria','tb_kriteria.id_kriteria=tb_bobot.id_kriteria');
		return $this->db->get('tb_bobot')->result();
		$data = $this->db->query('select * from tb_bobot'.$where);
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
	function kriteria(){
		$this->db->order_by('id_kriteria','asc');
		$result = $this->db->get('tb_kriteria');
		$data[''] = 'Please Select';
		if ($result->num_rows() > 0) {
			foreach ($result->result() as $row) {
				$data[$row->id_kriteria] = $row->nama_kriteria;
			}
		}
		return $data;
	}
	function nilai(){
		$this->db->order_by('jum_nilai','asc');
		$result = $this->db->get('tb_nilai');
		$data[''] = 'Please Select';
		if ($result->num_rows() > 0) {
			foreach ($result->result() as $row) {
				$data[$row->jum_nilai] = $row->jum_nilai;
			}
		}
		return $data;
	}
	function hasil_bobot(){
	 $this->db->select('SUM(jum_nilai)as hasil_bobot');
	 $this->db->from('tb_nilai');
	 return $this->db->get()->row()->hasil_bobot;
	}
}
