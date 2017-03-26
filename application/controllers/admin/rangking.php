<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rangking extends CI_Controller {
	
	public function index() {
		
       $data['data'] = $this->model_rangking->GetUser();
       $this->load->view('admin/tabel_rangking', $data);
	}
	
	public function add_data(){
		$this->load->model('model_rangking');
		$this->load->helper('form_helper');
		$data = array(
		'alternatif' => $this->model_rangking->alternatif(),
		'alternatif_selected' => $this->input->post('tb_alternatif') ? $this->input->post('tb_alternatif') : '', 
		'bobot' => $this->model_rangking->bobot(),
		'bobot_selected' => $this->input->post('tb_bobot') ? $this->input->post('tb_bobot') : '', 
		);
		
		$this->load->view('admin/form_tambahrangking',$data);
	}
	
	public function do_insert(){
		
		$data['id_alternatif']=$this->input->post('id_alternatif',true);
		$data['id_kriteria']=$this->input->post('id_kriteria',true);
		$data['nilai_rangking']=$this->input->post('nilai_rangking',true);
		$data['nilai_normalisasi']=(int)$this->input->post('hasil_bobot',true);
		$data['id_kriteria2']=$this->input->post('id_kriteria2',true);
		$data['nilai_rangking2']=$this->input->post('nilai_rangking2',true);
		$data['nilai_normalisasi2']=(int)$this->input->post('hasil_bobot2',true);
		$data['id_kriteria3']=$this->input->post('id_kriteria3',true);
		$data['nilai_rangking3']=$this->input->post('nilai_rangking3',true);
		$data['nilai_normalisasi3']=(int)$this->input->post('hasil_bobot3',true);
		$data['id_kriteria4']=$this->input->post('id_kriteria4',true);
		$data['nilai_rangking4']=$this->input->post('nilai_rangking4',true);
		$data['nilai_normalisasi4']=(int)$this->input->post('hasil_bobot4',true);
		$data['id_kriteria5']=$this->input->post('id_kriteria5',true);
		$data['nilai_rangking5']=$this->input->post('nilai_rangking5',true);
		$data['nilai_normalisasi5']=(int)$this->input->post('hasil_bobot5',true);
		 if ($data['nilai_rangking']>0)
        $data['nilai_normalisasi']= pow($data['nilai_rangking'],$data['id_kriteria']); 
		else
		$data['nilai_normalisasi']='Warning, nilai kedua tidak boleh 0 !';
		 if ($data['nilai_rangking2']>0)
        $data['nilai_normalisasi2']= pow($data['nilai_rangking2'],$data['id_kriteria2']); 
		else
		$data['nilai_normalisasi2']='Warning, nilai kedua tidak boleh 0 !';
		 if ($data['nilai_rangking3']>0)
        $data['nilai_normalisasi3']= pow($data['nilai_rangking3'],$data['id_kriteria3']); 
		else
		$data['nilai_normalisasi3']='Warning, nilai kedua tidak boleh 0 !';
		 if ($data['nilai_rangking4']>0)
        $data['nilai_normalisasi4']= pow($data['nilai_rangking4'],$data['id_kriteria4']); 
		else
		$data['nilai_normalisasi4']='Warning, nilai kedua tidak boleh 0 !';
		 if ($data['nilai_rangking5']>0)
        $data['nilai_normalisasi5']= pow($data['nilai_rangking5'],$data['id_kriteria5']); 
		else
		$data['nilai_normalisasi5']='Warning, nilai kedua tidak boleh 0 !';
		$this->db->insert('tb_rangking',$data);
		$data['data'] = $this->model_rangking->GetUser();
		$this->load->view('admin/tabel_rangking',$data);
	}
	
	 public function edit_data($id_rangking){
		$mhs = $this->model_rangking2->GetUser("where id_rangking = '$id_rangking'");
		$data = array(
		"id_rangking" => $mhs[0]['id_rangking'],
		"id_alternatif" => $mhs[0]['id_alternatif'],
		"nilai_normalisasi" => $mhs[0]['nilai_normalisasi'],
		"nilai_normalisasi2" => $mhs[0]['nilai_normalisasi2'],
		"nilai_normalisasi3" => $mhs[0]['nilai_normalisasi3'],
		"nilai_normalisasi4" => $mhs[0]['nilai_normalisasi4'],
		"nilai_normalisasi5" => $mhs[0]['nilai_normalisasi5'],
		);
		$this->load->view('admin/form_tambahvektor_s',$data);
	}
	
	public function do_update(){
		$data['id_alternatif']=$this->input->post('id_alternatif',true);
		$data['nilai_normalisasi']=$this->input->post('nilai_normalisasi',true);
		$data['nilai_normalisasi2']=$this->input->post('nilai_normalisasi2',true);
		$data['nilai_normalisasi3']=$this->input->post('nilai_normalisasi3',true);
		$data['nilai_normalisasi4']=$this->input->post('nilai_normalisasi4',true);
		$data['nilai_normalisasi5']=$this->input->post('nilai_normalisasi5',true);
		$data['vektor_s']=$this->input->post('vektor_s',true);
        $data['vektor_s']= $data['nilai_normalisasi']+$data['nilai_normalisasi2']+$data['nilai_normalisasi3']+$data['nilai_normalisasi4']+$data['nilai_normalisasi5']; 
		$this->db->insert('tb_vektor_s',$data);
		$data['data'] = $this->model_rangking->GetUser();
		$this->load->view('admin/tabel_rangking',$data);
		
	}
	
}