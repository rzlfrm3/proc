<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Level extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Notifikasi seperti difacebook CodeIgniter'; //judul title
        $data['jlhnotif'] =$this->model_notifikasi->notif_count();  //menghitung jumlah post
        $data['notifikasi'] =$this->model_notifikasi->getnotifikasi(); //menampilkan isi postingan
		$data ['data']= $this->model_level->GetUser();
		$this->load->view('admin/tabel_level', $data);
	}
	public function add_data(){
		$data['title'] = 'Notifikasi seperti difacebook CodeIgniter'; //judul title
        $data['jlhnotif'] =$this->model_notifikasi->notif_count();  //menghitung jumlah post
        $data['notifikasi'] =$this->model_notifikasi->getnotifikasi(); //menampilkan isi postingan
		$data ['data']= $this->model_level->GetUser();
		$this->load->view('admin/form_tambahlevel',$data);
	}
	public function do_insert(){
		$id_level = $_POST['id_level'];
		$nama_level = $_POST['nama_level'];
		$data_insert = array(
		'id_level' => $id_level,
		'nama_level' => $nama_level
		);
		$res = $this->model_level->insertdata('tb_level',$data_insert);
		if($res>=1){
			redirect('admin/level/index');
		}else{
			echo "<h2>Insert Data gagal</h2>";
		}
	}
	
	 public function edit_data($id_level){
		$mhs = $this->model_level->GetUser("where id_level = '$id_level'");
		$data = array(
		"id_level" => $mhs[0]['id_level'],
		"nama_level" => $mhs[0]['nama_level'],
		);
		$data['title'] = 'Notifikasi seperti difacebook CodeIgniter'; //judul title
        $data['jlhnotif'] =$this->model_notifikasi->notif_count();  //menghitung jumlah post
        $data['notifikasi'] =$this->model_notifikasi->getnotifikasi(); //menampilkan isi postingan
		$data ['data']= $this->model_level->GetUser();
		$this->load->view('admin/form_editlevel',$data);
	}
	public function do_update(){
		$id_level = $_POST['id_level'];
		$nama_level = $_POST['nama_level'];
		$data_update = array(
		'nama_level' => $nama_level
		);
		$where = array('id_level' => $id_level);
		$res = $this->model_level->updatedata('tb_level',$data_update,$where);
		if($res>=1){
			redirect('admin/level/index');
		}else{
			echo "<h2>Insert data gagal</h2>";
		}
	}
	public function do_delete($id_level){
		$where = array('id_level' => $id_level);
		$res = $this->model_level->deletedata('tb_level',$where);
		if($res>=1){
			redirect('admin/level/index');
		}
	}
}