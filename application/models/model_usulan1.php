<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_usulan1 extends CI_Model {
	public function GetUser($where=""){
		$data = $this->db->query('select * from tb_usulan '.$where);
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
	function __construct()
	 {
	 parent::__construct();
	 }
	function buat_id(){
		$this->db->select('RIGHT(tb_usulan.id_usulan,3) as id_usulan', FALSE);
		$this->db->order_by('id_usulan','DESC');
		$this->db->limit(1);
		$query = $this->db->get('tb_usulan');
		
		if ($query->num_rows() <> 0) {
			$data = $query->row();
			$id_usulan = intval($data->id_usulan) + 1;
		} else {
			$id_usulan = 1;
		}
		$tahun = date("Y");
		$dot = ".";
		$kodemax = str_pad($id_usulan, 3, "0", STR_PAD_LEFT);
		$kodejadi = $tahun .$kodemax;
		return $kodejadi;
	}
	
	function jenisusulan(){
		$this->db->order_by('id_jenisusulan','asc');
		$result = $this->db->get('tb_jenisusulan');
		$data[''] = 'Please Select';
		if ($result->num_rows() > 0) {
			foreach ($result->result() as $row) {
				$data[$row->id_jenisusulan] = $row->nama_jenisusulan;
			}
		}
		return $data;
	}
	function kategori(){
		$this->db->order_by('id_kategori','asc');
		$result = $this->db->get('tb_kategori');
		$data[''] = 'Please Select';
		if ($result->num_rows() > 0) {
			foreach ($result->result() as $row) {
				$data[$row->id_kategori] = $row->nama_kategori;
			}
		}
		return $data;
	}
	function pejabatpengadaan(){
		$this->db->order_by('id_pejabatpengadaan','asc');
		$result = $this->db->get('tb_pejabatpengadaan');
		$data[''] = 'Please Select';
		if ($result->num_rows() > 0) {
			foreach ($result->result() as $row) {
				$data[$row->id_pejabatpengadaan] = $row->nama_pejabatpengadaan;
			}
		}
		return $data;
	}
}