<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Golongan extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Notifikasi seperti difacebook CodeIgniter'; //judul title
        $data['jlhnotif'] =$this->model_notifikasi->notif_count();  //menghitung jumlah post
        $data['notifikasi'] =$this->model_notifikasi->getnotifikasi(); //menampilkan isi postingan
		$data ['data'] = $this->model_golongan->GetUser();
		$this->load->view('admin/tabel_golongan', $data);
	}
	public function add_data(){
		$data['title'] = 'Notifikasi seperti difacebook CodeIgniter'; //judul title
        $data['jlhnotif'] =$this->model_notifikasi->notif_count();  //menghitung jumlah post
        $data['notifikasi'] =$this->model_notifikasi->getnotifikasi(); //menampilkan isi postingan
		$data ['data'] = $this->model_golongan->GetUser();
		$this->load->view('admin/form_tambahgolongan', $data);
	}
	public function do_insert(){
		$id_golongan = $_POST['id_golongan'];
		$nama_golongan = $_POST['nama_golongan'];
		$pangkat = $_POST['pangkat'];
		$data_insert = array(
		'id_golongan' => $id_golongan,
		'pangkat' => $pangkat,
		'nama_golongan' => $nama_golongan
		);
		$res = $this->model_golongan->insertdata('tb_golongan',$data_insert);
		if($res>=1){
			redirect('admin/golongan/index');
		}else{
			echo "<h2>Insert Data gagal</h2>";
		}
	}
	
	 public function edit_data($id_golongan){
		$mhs = $this->model_golongan->GetUser("where id_golongan = '$id_golongan'");
		$data = array(
		"id_golongan" => $mhs[0]['id_golongan'],
		"nama_golongan" => $mhs[0]['nama_golongan'],
		"pangkat" => $mhs[0]['pangkat'],
		);
		$data['title'] = 'Notifikasi seperti difacebook CodeIgniter'; //judul title
        $data['jlhnotif'] =$this->model_notifikasi->notif_count();  //menghitung jumlah post
        $data['notifikasi'] =$this->model_notifikasi->getnotifikasi(); //menampilkan isi postingan
		$data ['data'] = $this->model_golongan->GetUser();
		$this->load->view('admin/form_editgolongan',$data);
	}
	public function do_update(){
		$id_golongan = $_POST['id_golongan'];
		$nama_golongan = $_POST['nama_golongan'];
		$pangkat = $_POST['pangkat'];
		$data_update = array(
		'nama_golongan' => $nama_golongan,
		'pangkat' => $pangkat
		);
		$where = array('id_golongan' => $id_golongan);
		$res = $this->model_golongan->updatedata('tb_golongan',$data_update,$where);
		if($res>=1){
			redirect('admin/golongan/index');
		}else{
			echo "<h2>Insert data gagal</h2>";
		}
	}
	public function do_delete($id_golongan){
		$where = array('id_golongan' => $id_golongan);
		$res = $this->model_golongan->deletedata('tb_golongan',$where);
		if($res>=1){
			redirect('admin/golongan/index');
		}
	}
}