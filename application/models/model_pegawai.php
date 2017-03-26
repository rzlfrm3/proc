<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_pegawai extends CI_Model {
	public function GetUser($where=""){
		$this->db->select('tb_pegawai.nip,tb_pegawai.nama,tb_pegawai.email,tb_pegawai.password,tb_pegawai.id_subbidang,tb_pegawai.id_level,tb_pegawai.id_golongan,tb_pegawai.id_jabatan,tb_subbidang.id_subbidang,tb_subbidang.nama_subbidang,tb_level.id_level,tb_level.nama_level,tb_golongan.id_golongan,tb_golongan.nama_golongan,tb_jabatan.id_jabatan,tb_jabatan.nama_jabatan')
		->join('tb_subbidang','tb_subbidang.id_subbidang=tb_pegawai.id_subbidang')
		->join('tb_level','tb_level.id_level=tb_pegawai.id_level')
		->join('tb_golongan','tb_golongan.id_golongan=tb_pegawai.id_golongan')
		->join('tb_jabatan','tb_jabatan.id_jabatan=tb_pegawai.id_jabatan');
		return $this->db->get('tb_pegawai')->result();
		$data = $this->db->query('select * from tb_pegawai'.$where);
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
