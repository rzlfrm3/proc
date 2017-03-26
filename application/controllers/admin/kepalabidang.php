<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kepalabidang extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Notifikasi seperti difacebook CodeIgniter'; //judul title
        $data['jlhnotif'] =$this->model_notifikasi->notif_count();  //menghitung jumlah post
        $data['notifikasi'] =$this->model_notifikasi->getnotifikasi(); //menampilkan isi postingan
		$data['data'] = $this->model_kepalabidang->GetUser();
		$this->load->view('admin/tabel_kepalabidang', $data);
	}
	public function add_data(){
		$data['title'] = 'Notifikasi seperti difacebook CodeIgniter'; //judul title
        $data['jlhnotif'] =$this->model_notifikasi->notif_count();  //menghitung jumlah post
        $data['notifikasi'] =$this->model_notifikasi->getnotifikasi(); //menampilkan isi postingan
		$data['data'] = $this->model_kepalabidang->GetUser();
		$this->load->view('admin/form_tambahkepalabidang',$data);
	}
	public function do_insert(){
		$id_kepalabidang = $_POST['id_kepalabidang'];
		$nama_kepalabidang = $_POST['nama_kepalabidang'];
		$data_insert = array(
		'id_kepalabidang' => $id_kepalabidang,
		'nama_kepalabidang' => $nama_kepalabidang
		);
		$res = $this->model_kepalabidang->insertdata('tb_kepalabidang',$data_insert);
		if($res>=1){
			redirect('admin/kepalabidang/index');
		}else{
			echo "<h2>Insert Data gagal</h2>";
		}
	}
	
	 public function edit_data($id_kepalabidang){
		$mhs = $this->model_kepalabidang->GetUser("where id_kepalabidang = '$id_kepalabidang'");
		$data = array(
		"id_kepalabidang" => $mhs[0]['id_kepalabidang'],
		"nama_kepalabidang" => $mhs[0]['nama_kepalabidang'],
		);
		$data['title'] = 'Notifikasi seperti difacebook CodeIgniter'; //judul title
        $data['jlhnotif'] =$this->model_notifikasi->notif_count();  //menghitung jumlah post
        $data['notifikasi'] =$this->model_notifikasi->getnotifikasi(); //menampilkan isi postingan
		$data['data'] = $this->model_kepalabidang->GetUser();
		$this->load->view('admin/form_editkepalabidang',$data);
	}
	public function do_update(){
		$id_kepalabidang = $_POST['id_kepalabidang'];
		$nama_kepalabidang = $_POST['nama_kepalabidang'];
		$data_update = array(
		'nama_kepalabidang' => $nama_kepalabidang
		);
		$where = array('id_kepalabidang' => $id_kepalabidang);
		$res = $this->model_kepalabidang->updatedata('tb_kepalabidang',$data_update,$where);
		if($res>=1){
			redirect('admin/kepalabidang/index');
		}else{
			echo "<h2>Insert data gagal</h2>";
		}
	}
	public function do_delete($id_kepalabidang){
		$where = array('id_kepalabidang' => $id_kepalabidang);
		$res = $this->model_kepalabidang->deletedata('tb_kepalabidang',$where);
		if($res>=1){
			redirect('admin/kepalabidang/index');
		}
	}
}