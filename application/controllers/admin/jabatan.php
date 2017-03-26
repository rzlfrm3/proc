<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jabatan extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Notifikasi seperti difacebook CodeIgniter'; //judul title
        $data['jlhnotif'] =$this->model_notifikasi->notif_count();  //menghitung jumlah post
        $data['notifikasi'] =$this->model_notifikasi->getnotifikasi(); //menampilkan isi postingan
		$data['data'] = $this->model_jabatan->GetUser();
		$this->load->view('admin/tabel_jabatan', $data);
	}
	public function add_data(){
		$data['title'] = 'Notifikasi seperti difacebook CodeIgniter'; //judul title
        $data['jlhnotif'] =$this->model_notifikasi->notif_count();  //menghitung jumlah post
        $data['notifikasi'] =$this->model_notifikasi->getnotifikasi(); //menampilkan isi postingan
		$data['data'] = $this->model_jabatan->GetUser();
		$this->load->view('admin/form_tambahjabatan',$data);
	}
	public function do_insert(){
		$id_jabatan = $_POST['id_jabatan'];
		$nama_jabatan = $_POST['nama_jabatan'];
		$data_insert = array(
		'id_jabatan' => $id_jabatan,
		'nama_jabatan' => $nama_jabatan
		);
		$res = $this->model_jabatan->insertdata('tb_jabatan',$data_insert);
		if($res>=1){
			redirect('admin/jabatan/index');
		}else{
			echo "<h2>Insert Data gagal</h2>";
		}
	}
	
	 public function edit_data($id_jabatan){
		$mhs = $this->model_jabatan->GetUser("where id_jabatan = '$id_jabatan'");
		$data = array(
		"id_jabatan" => $mhs[0]['id_jabatan'],
		"nama_jabatan" => $mhs[0]['nama_jabatan'],
		);
		$data['title'] = 'Notifikasi seperti difacebook CodeIgniter'; //judul title
        $data['jlhnotif'] =$this->model_notifikasi->notif_count();  //menghitung jumlah post
        $data['notifikasi'] =$this->model_notifikasi->getnotifikasi(); //menampilkan isi postingan
		$data['data'] = $this->model_jabatan->GetUser();
		$this->load->view('admin/form_editjabatan',$data);
	}
	public function do_update(){
		$id_jabatan = $_POST['id_jabatan'];
		$nama_jabatan = $_POST['nama_jabatan'];
		$data_update = array(
		'nama_jabatan' => $nama_jabatan
		);
		$where = array('id_jabatan' => $id_jabatan);
		$res = $this->model_jabatan->updatedata('tb_jabatan',$data_update,$where);
		if($res>=1){
			redirect('admin/jabatan/index');
		}else{
			echo "<h2>Insert data gagal</h2>";
		}
	}
	public function do_delete($id_jabatan){
		$where = array('id_jabatan' => $id_jabatan);
		$res = $this->model_jabatan->deletedata('tb_jabatan',$where);
		if($res>=1){
			redirect('admin/jabatan/index');
		}
	}
}