<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bidang extends CI_Controller {
	
	public function __construct() {
        parent::__construct();
        $this->load->model('model_notifikasi'); 
        $this->load->helper('form','url');  
    }
	
	public function index()
	{
		$data['title'] = 'Notifikasi seperti difacebook CodeIgniter'; //judul title
        $data['jlhnotif'] =$this->model_notifikasi->notif_count();  //menghitung jumlah post
        $data['notifikasi'] =$this->model_notifikasi->getnotifikasi(); //menampilkan isi postingan
		$data ['data']= $this->model_bidang->GetUser();
		$this->load->view('admin/tabel_bidang',$data);
	}
	public function add_data(){
		$this->load->model('model_kepalabidang');
		$this->load->helper('form_helper');
		$data = array(
		'kepalabidang' => $this->model_kepalabidang->kepalabidang(),
		'kepalabidang_selected' => $this->input->post('tb_kepalabidang') ? $this->input->post('tb_kepalabidang') : '', // untuk edit ganti '' menjadi data dari database misalnya $row->provinsi
	);
		$data['title'] = 'Notifikasi seperti difacebook CodeIgniter'; //judul title
        $data['jlhnotif'] =$this->model_notifikasi->notif_count();  //menghitung jumlah post
        $data['notifikasi'] =$this->model_notifikasi->getnotifikasi(); //menampilkan isi postingan
		$this->load->view('admin/form_tambahbidang', $data);
	}
	public function do_insert(){
		$id_bidang = $_POST['id_bidang'];
		$nama_bidang = $_POST['nama_bidang'];
		$id_kepalabidang = $_POST['id_kepalabidang'];
		$data_insert = array(
		'id_bidang' => $id_bidang,
		'nama_bidang' => $nama_bidang,
		'id_kepalabidang' => $id_kepalabidang
		);
		$res = $this->model_bidang->insertdata('tb_bidang',$data_insert);
		if($res>=1){
			redirect('admin/bidang/index');
		}else{
			echo "<h2>Insert Data gagal</h2>";
		}
	}
	
	 public function edit_data($id_bidang){
		$mhs = $this->model_bidang1->GetUser("where id_bidang = '$id_bidang'");
		$data = array(
		"id_bidang" => $mhs[0]['id_bidang'],
		"nama_bidang" => $mhs[0]['nama_bidang'],
		"id_kepalabidang" => $mhs[0]['id_kepalabidang'],
		'kepalabidang' => $this->model_kepalabidang->kepalabidang(),
		'kepalabidang_selected' => $this->input->post('tb_bidang') ? $this->input->post('tb_bidang') : '',
		);
		$data['title'] = 'Notifikasi seperti difacebook CodeIgniter'; //judul title
        $data['jlhnotif'] =$this->model_notifikasi->notif_count();  //menghitung jumlah post
        $data['notifikasi'] =$this->model_notifikasi->getnotifikasi(); //menampilkan isi postingan
		$this->load->view('admin/form_editbidang',$data);
	}
	public function do_update(){
		$id_bidang = $_POST['id_bidang'];
		$nama_bidang = $_POST['nama_bidang'];
		$id_kepalabidang = $_POST['id_kepalabidang'];
		$data_update = array(
		'nama_bidang' => $nama_bidang,
		'id_kepalabidang' => $id_kepalabidang
		);
		$where = array('id_bidang' => $id_bidang);
		$res = $this->model_bidang1->updatedata('tb_bidang',$data_update,$where);
		if($res>=1){
			redirect('admin/bidang/index');
		}else{
			echo "<h2>Insert data gagal</h2>";
		}
	}
	public function do_delete($id_bidang){
		$where = array('id_bidang' => $id_bidang);
		$res = $this->model_bidang->deletedata('tb_bidang',$where);
		if($res>=1){
			redirect('admin/bidang/index');
		}
	}
}