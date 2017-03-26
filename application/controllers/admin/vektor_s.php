<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vektor_s extends CI_Controller {
	
	public function index() {
		
			$data['data'] = $this->model_vektor_s->GetUser();
            $this->load->view('admin/tabel_vektor_s', $data);
			
	}
	
	 public function edit_data($id_alternatif){
		$mhs = $this->model_vektor_s2->GetUser("where id_alternatif = '$id_alternatif'");
		$data = array(
		"id_alternatif" => $mhs[0]['id_alternatif'],
		"vektor_s" => $mhs[0]['vektor_s'],
		);
		$data['vektor_v'] = $this->model_vektor_s->vektor_v();
		$this->load->view('admin/form_tambahvektor_v',$data);
	}
	
	public function do_update(){
		
		$data['id_alternatif']=$this->input->post('id_alternatif',true);
		$data['vektor_s']=$this->input->post('vektor_s',true);
		$data['jumlah_vektor_s']=$this->input->post('jumlah_vektor_s',true);
		$data['vektor_v']=$this->input->post('vektor_v',true);
		if ($data['jumlah_vektor_s']>0)
        $data['vektor_v']=$data['vektor_s']/$data['jumlah_vektor_s']; 
		else
		$data['vektor_v']='Warning, nilai kedua tidak boleh 0 !';
		$this->db->insert('tb_vektor_v',$data);
		$data['data'] = $this->model_vektor_s->GetUser();
		$this->load->view('admin/tabel_vektor_s',$data);
		
	}
	
}
