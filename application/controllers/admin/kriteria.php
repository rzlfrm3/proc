<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kriteria extends CI_Controller {
	
	public function index() {
		
			$data['title'] = 'Notifikasi seperti difacebook CodeIgniter'; //judul title
			$data['jlhnotif'] =$this->model_notifikasi->notif_count();  //menghitung jumlah post
			$data['notifikasi'] =$this->model_notifikasi->getnotifikasi(); //menampilkan isi postingan
			$data['data'] = $this->model_kriteria2->GetUser();
            $this->load->view('admin/tabel_kriteria', $data);
	}
	public function add_data(){
		$data['title'] = 'Notifikasi seperti difacebook CodeIgniter'; //judul title
		$data['jlhnotif'] =$this->model_notifikasi->notif_count();  //menghitung jumlah post
		$data['notifikasi'] =$this->model_notifikasi->getnotifikasi(); //menampilkan isi postingan
	  
		$this->load->view('admin/form_tambahkriteria',$data);
	}
	
	public function do_insert(){
		$id_kriteria = $_POST['id_kriteria'];
		$nama_kriteria = $_POST['nama_kriteria'];
		$data_insert = array(
		'id_kriteria' => $id_kriteria,
		'nama_kriteria' => $nama_kriteria
		);
		$res = $this->model_kriteria2->insertdata('tb_kriteria',$data_insert);
		if($res>=1){
			redirect('admin/kriteria/index');
		}else{
			echo "<h2>Insert Data gagal</h2>";
		}
	}
	
	public function edit_data($id_kriteria){
		$mhs = $this->model_kriteria2->GetUser("where id_kriteria = '$id_kriteria'");
		$data = array(
		"id_kriteria" => $mhs[0]['id_kriteria'],
		"nama_kriteria" => $mhs[0]['nama_kriteria'],
		);
		$data['title'] = 'Notifikasi seperti difacebook CodeIgniter'; //judul title
        $data['jlhnotif'] =$this->model_notifikasi->notif_count();  //menghitung jumlah post
        $data['notifikasi'] =$this->model_notifikasi->getnotifikasi(); //menampilkan isi postingan
		$this->load->view('admin/form_editkriteria',$data);
	}
	public function do_update(){
		$id_kriteria = $_POST['id_kriteria'];
		$nama_kriteria = $_POST['nama_kriteria'];
		$data_update = array(
		'nama_kriteria' => $nama_kriteria
		);
		$where = array('id_kriteria' => $id_kriteria);
		$res = $this->model_kriteria2->updatedata('tb_kriteria',$data_update,$where);
		if($res>=1){
			redirect('admin/kriteria/index');
		}else{
			echo "<h2>Insert data gagal</h2>";
		}
	}
	public function do_delete($id_kriteria){
		$where = array('id_kriteria' => $id_kriteria);
		$res = $this->model_kriteria2->deletedata('tb_kriteria',$where);
		if($res>=1){
			redirect('admin/kriteria/index');
		}
	}
	
}
