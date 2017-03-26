<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bobot extends CI_Controller {
	
	public function index() {
       $data['data'] = $this->model_bobot->GetUser();
       $this->load->view('admin/tabel_bobot', $data);
	}
	
	public function add_data(){
		$this->load->model('model_bobot');
		$this->load->helper('form_helper');
		$data = array(
		'kriteria' => $this->model_bobot->kriteria(),
		'kriteria_selected' => $this->input->post('tb_kriteria') ? $this->input->post('tb_kriteria') : '', 
		'nilai' => $this->model_bobot->nilai(),
		'nilai_selected' => $this->input->post('tb_nilai') ? $this->input->post('tb_nilai') : '', 
	);
	    $data['hasil_bobot'] = $this->model_bobot->hasil_bobot();
		$this->load->view('admin/form_tambahbobot',$data);
	}
	public function do_insert()
	{
		$data['nama_bobot']=$this->input->post('nama_bobot',true);
		$data['id_kriteria']=(int)$this->input->post('id_kriteria',true);
		$data['nilai_bobot']=(int)$this->input->post('nilai_bobot',true);
		$data['hasil_bobot']=(int)$this->input->post('hasil_bobot',true);
		$data['jum_nilai']=(int)$this->input->post('jum_nilai',true);
		 if ($data['hasil_bobot']>0)
        $data['jum_nilai']=$data['nilai_bobot']/$data['hasil_bobot']; 
		else
		$data['jum_nilai']='Warning, nilai kedua tidak boleh 0 !';
		$this->db->insert('tb_bobot',$data);
		$data['data'] = $this->model_bobot->GetUser();
		$this->load->view('admin/tabel_bobot',$data);
	}
	public function do_delete($id_kriteria){
		$where = array('id_kriteria' => $id_kriteria);
		$res = $this->model_bobot->deletedata('tb_bobot',$where);
		if($res>=1){
			redirect('admin/bobot/index');
		}
	}
}
