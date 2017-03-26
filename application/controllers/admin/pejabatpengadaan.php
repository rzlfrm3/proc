<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pejabatpengadaan extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Notifikasi seperti difacebook CodeIgniter'; //judul title
        $data['jlhnotif'] =$this->model_notifikasi->notif_count();  //menghitung jumlah post
        $data['notifikasi'] =$this->model_notifikasi->getnotifikasi(); //menampilkan isi postingan
		$data['data'] = $this->model_pejabatpengadaan->GetUser();
		$this->load->view('admin/tabel_pejabatpengadaan', $data);
	}
	public function add_data(){
		$data['title'] = 'Notifikasi seperti difacebook CodeIgniter'; //judul title
        $data['jlhnotif'] =$this->model_notifikasi->notif_count();  //menghitung jumlah post
        $data['notifikasi'] =$this->model_notifikasi->getnotifikasi(); //menampilkan isi postingan
		$data['data'] = $this->model_pejabatpengadaan->GetUser();
		$this->load->view('admin/form_tambahpejabatpengadaan', $data);
	}
	public function do_insert(){
		$id_pejabatpengadaan = $_POST['id_pejabatpengadaan'];
		$nama_pejabatpengadaan = $_POST['nama_pejabatpengadaan'];
		$data_insert = array(
		'id_pejabatpengadaan' => $id_pejabatpengadaan,
		'nama_pejabatpengadaan' => $nama_pejabatpengadaan
		);
		$res = $this->model_pejabatpengadaan->insertdata('tb_pejabatpengadaan',$data_insert);
		if($res>=1){
			redirect('admin/pejabatpengadaan/index');
		}else{
			echo "<h2>Insert Data gagal</h2>";
		}
	}
	
	 public function edit_data($id_pejabatpengadaan){
		$mhs = $this->model_pejabatpengadaan->GetUser("where id_pejabatpengadaan = '$id_pejabatpengadaan'");
		$data = array(
		"id_pejabatpengadaan" => $mhs[0]['id_pejabatpengadaan'],
		"nama_pejabatpengadaan" => $mhs[0]['nama_pejabatpengadaan'],
		);
		$data['title'] = 'Notifikasi seperti difacebook CodeIgniter'; //judul title
        $data['jlhnotif'] =$this->model_notifikasi->notif_count();  //menghitung jumlah post
        $data['notifikasi'] =$this->model_notifikasi->getnotifikasi(); //menampilkan isi postingan
		$data['data'] = $this->model_pejabatpengadaan->GetUser();
		$this->load->view('admin/form_editpejabatpengadaan',$data);
	}
	public function do_update(){
		$id_pejabatpengadaan = $_POST['id_pejabatpengadaan'];
		$nama_pejabatpengadaan = $_POST['nama_pejabatpengadaan'];
		$data_update = array(
		'nama_pejabatpengadaan' => $nama_pejabatpengadaan
		);
		$where = array('id_pejabatpengadaan' => $id_pejabatpengadaan);
		$res = $this->model_pejabatpengadaan->updatedata('tb_pejabatpengadaan',$data_update,$where);
		if($res>=1){
			redirect('admin/pejabatpengadaan/index');
		}else{
			echo "<h2>Insert data gagal</h2>";
		}
	}
	public function do_delete($id_pejabatpengadaan){
		$where = array('id_pejabatpengadaan' => $id_pejabatpengadaan);
		$res = $this->model_pejabatpengadaan->deletedata('tb_pejabatpengadaan',$where);
		if($res>=1){
			redirect('admin/pejabatpengadaan/index');
		}
	}
}