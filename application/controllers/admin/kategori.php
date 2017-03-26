<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Notifikasi seperti difacebook CodeIgniter'; //judul title
        $data['jlhnotif'] =$this->model_notifikasi->notif_count();  //menghitung jumlah post
        $data['notifikasi'] =$this->model_notifikasi->getnotifikasi(); //menampilkan isi postingan
		$data ['data']= $this->model_kategori->GetUser();
		$this->load->view('admin/tabel_kategori', $data);
	}
	public function add_data(){
		$data['title'] = 'Notifikasi seperti difacebook CodeIgniter'; //judul title
        $data['jlhnotif'] =$this->model_notifikasi->notif_count();  //menghitung jumlah post
        $data['notifikasi'] =$this->model_notifikasi->getnotifikasi(); //menampilkan isi postingan
		$data ['data']= $this->model_kategori->GetUser();
		$this->load->view('admin/form_tambahkategori', $data);
	}
	public function do_insert(){
		$id_kategori = $_POST['id_kategori'];
		$nama_kategori = $_POST['nama_kategori'];
		$data_insert = array(
		'id_kategori' => $id_kategori,
		'nama_kategori' => $nama_kategori
		);
		$res = $this->model_kategori->insertdata('tb_kategori',$data_insert);
		if($res>=1){
			redirect('admin/kategori/index');
		}else{
			echo "<h2>Insert Data gagal</h2>";
		}
	}
	
	 public function edit_data($id_kategori){
		$mhs = $this->model_kategori->GetUser("where id_kategori = '$id_kategori'");
		$data = array(
		"id_kategori" => $mhs[0]['id_kategori'],
		"nama_kategori" => $mhs[0]['nama_kategori'],
		);
		$data['title'] = 'Notifikasi seperti difacebook CodeIgniter'; //judul title
        $data['jlhnotif'] =$this->model_notifikasi->notif_count();  //menghitung jumlah post
        $data['notifikasi'] =$this->model_notifikasi->getnotifikasi(); //menampilkan isi postingan
		$data ['data']= $this->model_kategori->GetUser();
		$this->load->view('admin/form_editkategori',$data);
	}
	public function do_update(){
		$id_kategori = $_POST['id_kategori'];
		$nama_kategori = $_POST['nama_kategori'];
		$data_update = array(
		'nama_kategori' => $nama_kategori
		);
		$where = array('id_kategori' => $id_kategori);
		$res = $this->model_kategori->updatedata('tb_kategori',$data_update,$where);
		if($res>=1){
			redirect('admin/kategori/index');
		}else{
			echo "<h2>Insert data gagal</h2>";
		}
	}
	public function do_delete($id_kategori){
		$where = array('id_kategori' => $id_kategori);
		$res = $this->model_kategori->deletedata('tb_kategori',$where);
		if($res>=1){
			redirect('admin/kategori/index');
		}
	}
}