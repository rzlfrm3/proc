<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alternatif extends CI_Controller {
	
	public function index() {
		
       $data['title'] = 'Notifikasi seperti difacebook CodeIgniter'; //judul title
       $data['jlhnotif'] =$this->model_notifikasi->notif_count();  //menghitung jumlah post
       $data['notifikasi'] =$this->model_notifikasi->getnotifikasi(); //menampilkan isi postingan
	   $data['data'] = $this->model_alternatif->GetUser();
       $this->load->view('admin/tabel_alternatif', $data);
	}
	
	public function add_data(){
		$data['title'] = 'Notifikasi seperti difacebook CodeIgniter'; //judul title
		$data['jlhnotif'] =$this->model_notifikasi->notif_count();  //menghitung jumlah post
		$data['notifikasi'] =$this->model_notifikasi->getnotifikasi(); //menampilkan isi postingan
	  
		$this->load->view('admin/form_tambahalternatif',$data);
	}
	
	public function do_insert(){
		$id_alternatif = $_POST['id_alternatif'];
		$nama_alternatif = $_POST['nama_alternatif'];
		
		$data_insert = array(
		'id_alternatif' => $id_alternatif,
		'nama_alternatif' => $nama_alternatif
		);
		$res = $this->model_alternatif->insertdata('tb_alternatif',$data_insert);
		if($res>=1){
			redirect('admin/alternatif/index');
		}else{
			echo "<h2>Insert Data gagal</h2>";
		}
	}
	
	public function edit_data($id_alternatif){
		$mhs = $this->model_alternatif->GetUser("where id_alternatif = '$id_alternatif'");
		$data = array(
		"id_alternatif" => $mhs[0]['id_alternatif'],
		"nama_alternatif" => $mhs[0]['nama_alternatif'],
		);
		$data['title'] = 'Notifikasi seperti difacebook CodeIgniter'; //judul title
        $data['jlhnotif'] =$this->model_notifikasi->notif_count();  //menghitung jumlah post
        $data['notifikasi'] =$this->model_notifikasi->getnotifikasi(); //menampilkan isi postingan
		$this->load->view('admin/form_editalternatif',$data);
	}
	public function do_update(){
		$id_alternatif = $_POST['id_alternatif'];
		$nama_alternatif = $_POST['nama_alternatif'];
		$data_update = array(
		'nama_alternatif' => $nama_alternatif
		);
		$where = array('id_alternatif' => $id_alternatif);
		$res = $this->model_alternatif->updatedata('tb_alternatif',$data_update,$where);
		if($res>=1){
			redirect('admin/alternatif/index');
		}else{
			echo "<h2>Insert data gagal</h2>";
		}
	}
	public function do_delete($id_alternatif){
		$where = array('id_alternatif' => $id_alternatif);
		$res = $this->model_alternatif->deletedata('tb_alternatif',$where);
		if($res>=1){
			redirect('admin/alternatif/index');
		}
	}
}
