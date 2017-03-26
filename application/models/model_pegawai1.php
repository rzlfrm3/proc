<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_pegawai1 extends CI_Model {
	public function GetUser($where=""){
		$data = $this->db->query('select * from tb_pegawai '.$where);
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
	function subbidang(){
		$this->db->order_by('id_subbidang','asc');
		$result = $this->db->get('tb_subbidang');
		$data[''] = 'Please Select';
		if ($result->num_rows() > 0) {
			foreach ($result->result() as $row) {
				$data[$row->id_subbidang] = $row->nama_subbidang;
			}
		}
		return $data;
	}
	function level(){
		$this->db->order_by('id_level','asc');
		$result = $this->db->get('tb_level');
		$data[''] = 'Please Select';
		if ($result->num_rows() > 0) {
			foreach ($result->result() as $row) {
				$data[$row->id_level] = $row->nama_level;
			}
		}
		return $data;
	}
	function golongan(){
		$this->db->order_by('id_golongan','asc');
		$result = $this->db->get('tb_golongan');
		$data[''] = 'Please Select';
		if ($result->num_rows() > 0) {
			foreach ($result->result() as $row) {
				$data[$row->id_golongan] = $row->nama_golongan;
			}
		}
		return $data;
	}
	function jabatan(){
		$this->db->order_by('id_jabatan','asc');
		$result = $this->db->get('tb_jabatan');
		$data[''] = 'Please Select';
		if ($result->num_rows() > 0) {
			foreach ($result->result() as $row) {
				$data[$row->id_jabatan] = $row->nama_jabatan;
			}
		}
		return $data;
	}
}
