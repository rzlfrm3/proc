<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_usulan extends CI_Model {
	public function GetUser($where=""){
		$this->db->select('tb_usulan.id_usulan,tb_usulan.hal,tb_usulan.nama,tb_usulan.jasalayanan,tb_usulan.jumlah,tb_usulan.tanggal,tb_usulan.tgl,tb_usulan.id_jenisusulan,tb_usulan.id_kategori,tb_usulan.id_pejabatpengadaan,tb_jenisusulan.id_jenisusulan,tb_jenisusulan.nama_jenisusulan,tb_kategori.id_kategori,tb_kategori.nama_kategori,tb_pejabatpengadaan.id_pejabatpengadaan,tb_pejabatpengadaan.nama_pejabatpengadaan')
		->join('tb_jenisusulan','tb_jenisusulan.id_jenisusulan=tb_usulan.id_jenisusulan')
		->join('tb_kategori','tb_kategori.id_kategori=tb_usulan.id_kategori')
		->join('tb_pejabatpengadaan','tb_pejabatpengadaan.id_pejabatpengadaan=tb_usulan.id_pejabatpengadaan');
		return $this->db->get('tb_usulan')->result();
		$data = $this->db->query('select * from tb_usulan'.$where);
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