<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai extends CI_Controller {
	
	public function index() {
		
       $data['title'] = 'Notifikasi seperti difacebook CodeIgniter'; //judul title
       $data['jlhnotif'] =$this->model_notifikasi->notif_count();  //menghitung jumlah post
       $data['notifikasi'] =$this->model_notifikasi->getnotifikasi(); //menampilkan isi postingan
	   $data['data'] = $this->model_nilai->GetUser();
       $this->load->view('admin/tabel_nilai', $data);
	}
	
	public function add_data(){
		$data['title'] = 'Notifikasi seperti difacebook CodeIgniter'; //judul title
		$data['jlhnotif'] =$this->model_notifikasi->notif_count();  //menghitung jumlah post
		$data['notifikasi'] =$this->model_notifikasi->getnotifikasi(); //menampilkan isi postingan
	  
		$this->load->view('admin/form_tambahnilai',$data);
	}
	
	public function do_insert(){
		$id_nilai = $_POST['id_nilai'];
		$ket_nilai = $_POST['ket_nilai'];
		$jum_nilai = $_POST['jum_nilai'];
		$data_insert = array(
		'id_nilai' => $id_nilai,
		'ket_nilai' => $ket_nilai,
		'jum_nilai' => $jum_nilai
		);
		$res = $this->model_nilai->insertdata('tb_nilai',$data_insert);
		if($res>=1){
			redirect('admin/nilai/index');
		}else{
			echo "<h2>Insert Data gagal</h2>";
		}
	}
	
	public function edit_data($id_nilai){
		$mhs = $this->model_nilai->GetUser("where id_nilai = '$id_nilai'");
		$data = array(
		"id_nilai" => $mhs[0]['id_nilai'],
		"ket_nilai" => $mhs[0]['ket_nilai'],
		"jum_nilai" => $mhs[0]['jum_nilai'],
		);
		$data['title'] = 'Notifikasi seperti difacebook CodeIgniter'; //judul title
        $data['jlhnotif'] =$this->model_notifikasi->notif_count();  //menghitung jumlah post
        $data['notifikasi'] =$this->model_notifikasi->getnotifikasi(); //menampilkan isi postingan
		$this->load->view('admin/form_editnilai',$data);
	}
	public function do_update(){
		$id_nilai = $_POST['id_nilai'];
		$ket_nilai = $_POST['ket_nilai'];
		$jum_nilai = $_POST['jum_nilai'];
		$data_update = array(
		'ket_nilai' => $ket_nilai,
		'jum_nilai' => $jum_nilai
		);
		$where = array('id_nilai' => $id_nilai);
		$res = $this->model_nilai->updatedata('tb_nilai',$data_update,$where);
		if($res>=1){
			redirect('admin/nilai/index');
		}else{
			echo "<h2>Insert data gagal</h2>";
		}
	}
	public function do_delete($id_nilai){
		$where = array('id_nilai' => $id_nilai);
		$res = $this->model_nilai->deletedata('tb_nilai',$where);
		if($res>=1){
			redirect('admin/nilai/index');
		}
	}
}