<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_rangking extends CI_Model {
	public function GetUser($where=""){
		$this->db->select('tb_rangking.id_rangking,tb_rangking.id_alternatif,tb_rangking.id_kriteria,tb_rangking.nilai_rangking,tb_rangking.nilai_normalisasi,tb_rangking.id_kriteria2,tb_rangking.nilai_rangking2,tb_rangking.nilai_normalisasi2,tb_rangking.id_kriteria3,tb_rangking.nilai_rangking3,tb_rangking.nilai_normalisasi3,tb_rangking.id_kriteria4,tb_rangking.nilai_rangking4,tb_rangking.nilai_normalisasi4,tb_rangking.id_kriteria5,tb_rangking.nilai_rangking5,tb_rangking.nilai_normalisasi5,tb_alternatif.id_alternatif,tb_alternatif.nama_alternatif')
		->join('tb_alternatif','tb_alternatif.id_alternatif=tb_rangking.id_alternatif');
		return $this->db->get('tb_rangking')->result();
		$data = $this->db->query('select * from tb_rangking'.$where);
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
	function bobot(){
		$this->db->order_by('id_kriteria','asc');
		$result = $this->db->get('tb_bobot');
		$data[''] = 'Please Select';
		if ($result->num_rows() > 0) {
			foreach ($result->result() as $row) {
				$data[$row->jum_nilai] = $row->nama_bobot;
			}
		}
		return $data;
	}
}
