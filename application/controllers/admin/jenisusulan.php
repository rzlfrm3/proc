<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenisusulan extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Notifikasi seperti difacebook CodeIgniter'; //judul title
        $data['jlhnotif'] =$this->model_notifikasi->notif_count();  //menghitung jumlah post
        $data['notifikasi'] =$this->model_notifikasi->getnotifikasi(); //menampilkan isi postingan
		$data ['data']= $this->model_jenisusulan->GetUser();
		$this->load->view('admin/tabel_jenisusulan', $data);
	}
	public function add_data(){
		$data['title'] = 'Notifikasi seperti difacebook CodeIgniter'; //judul title
        $data['jlhnotif'] =$this->model_notifikasi->notif_count();  //menghitung jumlah post
        $data['notifikasi'] =$this->model_notifikasi->getnotifikasi(); //menampilkan isi postingan
		$data ['data']= $this->model_jenisusulan->GetUser();
		$this->load->view('admin/form_tambahjenisusulan', $data);
	}
	public function do_insert(){
		$id_jenisusulan = $_POST['id_jenisusulan'];
		$nama_jenisusulan = $_POST['nama_jenisusulan'];
		$data_insert = array(
		'id_jenisusulan' => $id_jenisusulan,
		'nama_jenisusulan' => $nama_jenisusulan
		);
		$res = $this->model_jenisusulan->insertdata('tb_jenisusulan',$data_insert);
		if($res>=1){
			redirect('admin/jenisusulan/index');
		}else{
			echo "<h2>Insert Data gagal</h2>";
		}
	}
	
	 public function edit_data($id_jenisusulan){
		$mhs = $this->model_jenisusulan->GetUser("where id_jenisusulan = '$id_jenisusulan'");
		$data = array(
		"id_jenisusulan" => $mhs[0]['id_jenisusulan'],
		"nama_jenisusulan" => $mhs[0]['nama_jenisusulan'],
		);
		$data['title'] = 'Notifikasi seperti difacebook CodeIgniter'; //judul title
        $data['jlhnotif'] =$this->model_notifikasi->notif_count();  //menghitung jumlah post
        $data['notifikasi'] =$this->model_notifikasi->getnotifikasi(); //menampilkan isi postingan
		$data ['data']= $this->model_jenisusulan->GetUser();
		$this->load->view('admin/form_editjenisusulan',$data);
	}
	public function do_update(){
		$id_jenisusulan = $_POST['id_jenisusulan'];
		$nama_jenisusulan = $_POST['nama_jenisusulan'];
		$data_update = array(
		'nama_jenisusulan' => $nama_jenisusulan
		);
		$where = array('id_jenisusulan' => $id_jenisusulan);
		$res = $this->model_jenisusulan->updatedata('tb_jenisusulan',$data_update,$where);
		if($res>=1){
			redirect('admin/jenisusulan/index');
		}else{
			echo "<h2>Insert data gagal</h2>";
		}
	}
	public function do_delete($id_jenisusulan){
		$where = array('id_jenisusulan' => $id_jenisusulan);
		$res = $this->model_jenisusulan->deletedata('tb_jenisusulan',$where);
		if($res>=1){
			redirect('admin/jenisusulan/index');
		}
	}
}