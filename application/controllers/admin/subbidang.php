<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subbidang extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Notifikasi seperti difacebook CodeIgniter'; //judul title
        $data['jlhnotif'] =$this->model_notifikasi->notif_count();  //menghitung jumlah post
        $data['notifikasi'] =$this->model_notifikasi->getnotifikasi(); //menampilkan isi postingan
		$data['data'] = $this->model_subbidang->GetUser();
		$this->load->view('admin/tabel_subbidang', $data);
	}
	public function add_data(){
		$this->load->model('model_subbidang1');
		$this->load->helper('form_helper');
		$data = array(
		'bidang' => $this->model_subbidang1->bidang(),
		'bidang_selected' => $this->input->post('tb_bidang') ? $this->input->post('tb_bidang') : '', // untuk edit ganti '' menjadi data dari database misalnya $row->provinsi
		);
		$data['title'] = 'Notifikasi seperti difacebook CodeIgniter'; //judul title
        $data['jlhnotif'] =$this->model_notifikasi->notif_count();  //menghitung jumlah post
        $data['notifikasi'] =$this->model_notifikasi->getnotifikasi(); //menampilkan isi postingan
		$data['data'] = $this->model_subbidang->GetUser();
		$this->load->view('admin/form_tambahsubbidang', $data);
	}
	public function do_insert(){
		$id_subbidang = $_POST['id_subbidang'];
		$nama_subbidang = $_POST['nama_subbidang'];
		$id_bidang = $_POST['id_bidang'];
		$data_insert = array(
		'id_subbidang' => $id_subbidang,
		'nama_subbidang' => $nama_subbidang,
		'id_bidang' => $id_bidang
		);
		$res = $this->model_subbidang->insertdata('tb_subbidang',$data_insert);
		if($res>=1){
			redirect('admin/subbidang/index');
		}else{
			echo "<h2>Insert Data gagal</h2>";
		}
	}
	
	 public function edit_data($id_subbidang){
		$mhs = $this->model_subbidang1->GetUser("where id_subbidang = '$id_subbidang'");
		$data = array(
		"id_subbidang" => $mhs[0]['id_subbidang'],
		"nama_subbidang" => $mhs[0]['nama_subbidang'],
		"id_bidang" => $mhs[0]['id_bidang'],
		'bidang' => $this->model_subbidang1->bidang(),
		'bidang_selected' => $this->input->post('tb_bidang') ? $this->input->post('tb_bidang') : '',
		);
		$data['title'] = 'Notifikasi seperti difacebook CodeIgniter'; //judul title
        $data['jlhnotif'] =$this->model_notifikasi->notif_count();  //menghitung jumlah post
        $data['notifikasi'] =$this->model_notifikasi->getnotifikasi(); //menampilkan isi postingan
		$data['data'] = $this->model_subbidang->GetUser();
		$this->load->view('admin/form_editsubbidang',$data);
	}
	public function do_update(){
		$id_subbidang = $_POST['id_subbidang'];
		$nama_subbidang = $_POST['nama_subbidang'];
		$id_bidang = $_POST['id_bidang'];
		$data_update = array(
		'nama_subbidang' => $nama_subbidang,
		'id_bidang' => $id_bidang
		);
		$where = array('id_subbidang' => $id_subbidang);
		$res = $this->model_subbidang1->updatedata('tb_subbidang',$data_update,$where);
		if($res>=1){
			redirect('admin/subbidang/index');
		}else{
			echo "<h2>Insert data gagal</h2>";
		}
	}
	public function do_delete($id_bidang){
		$where = array('id_subbidang' => $id_subbidang);
		$res = $this->model_subbidang->deletedata('tb_subbidang',$where);
		if($res>=1){
			redirect('admin/subbidang/index');
		}
	}
}