<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Notifikasi seperti difacebook CodeIgniter'; //judul title
        $data['jlhnotif'] =$this->model_notifikasi->notif_count();  //menghitung jumlah post
        $data['notifikasi'] =$this->model_notifikasi->getnotifikasi(); //menampilkan isi postingan
		$data['data'] = $this->model_pegawai->GetUser();
		$this->load->view('admin/tabel_pegawai', $data);
	}
	public function add_data(){
		$this->load->model('model_pegawai1');
		$this->load->helper('form_helper');
		$data = array(
		'subbidang' => $this->model_pegawai1->subbidang(),
		'subbidang_selected' => $this->input->post('tb_subbidang') ? $this->input->post('tb_subbidang') : '',
		'level' => $this->model_pegawai1->level(),
		'level_selected' => $this->input->post('tb_level') ? $this->input->post('tb_level') : '',
		'golongan' => $this->model_pegawai1->golongan(),
		'golongan_selected' => $this->input->post('tb_golongan') ? $this->input->post('tb_golongan') : '',
		'jabatan' => $this->model_pegawai1->jabatan(),
		'jabatan_selected' => $this->input->post('tb_jabatan') ? $this->input->post('tb_jabatan') : '',
		);
		$data['title'] = 'Notifikasi seperti difacebook CodeIgniter'; //judul title
        $data['jlhnotif'] =$this->model_notifikasi->notif_count();  //menghitung jumlah post
        $data['notifikasi'] =$this->model_notifikasi->getnotifikasi(); //menampilkan isi postingan
		$data['data'] = $this->model_pegawai->GetUser();
		$this->load->view('admin/form_tambahpegawai', $data);
	}
	public function do_insert(){
		$nip = $_POST['nip'];
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$id_subbidang = $_POST['id_subbidang'];
		$id_level = $_POST['id_level'];
		$id_golongan = $_POST['id_golongan'];
		$id_jabatan = $_POST['id_jabatan'];
		$data_insert = array(
		'nip' => $nip,
		'nama' => $nama,
		'email' => $email,
		'password' => $password,
		'id_level' => $id_level,
		'id_golongan' => $id_golongan,
		'id_jabatan' => $id_jabatan,
		'id_subbidang' => $id_subbidang
		);
		$res = $this->model_pegawai->insertdata('tb_pegawai',$data_insert);
		if($res>=1){
			redirect('admin/pegawai/index');
		}else{
			echo "<h2>Insert Data gagal</h2>";
		}
	}
	
	 public function edit_data($nip){
		$mhs = $this->model_pegawai1->GetUser("where nip = '$nip'");
		$data = array(
		"nip" => $mhs[0]['nip'],
		"nama" => $mhs[0]['nama'],
		"email" => $mhs[0]['email'],
		"password" => $mhs[0]['password'],
		"id_subbidang" => $mhs[0]['id_subbidang'],
		"id_level" => $mhs[0]['id_level'],
		"id_golongan" => $mhs[0]['id_golongan'],
		"id_jabatan" => $mhs[0]['id_jabatan'],
		'subbidang' => $this->model_pegawai1->subbidang(),
		'subbidang_selected' => $this->input->post('tb_subbidang') ? $this->input->post('tb_subbidang') : '',
		'level' => $this->model_pegawai1->level(),
		'level_selected' => $this->input->post('tb_level') ? $this->input->post('tb_level') : '',
		'golongan' => $this->model_pegawai1->golongan(),
		'golongan_selected' => $this->input->post('tb_golongan') ? $this->input->post('tb_golongan') : '',
		'jabatan' => $this->model_pegawai1->jabatan(),
		'jabatan_selected' => $this->input->post('tb_jabatan') ? $this->input->post('tb_jabatan') : '',
		);
		$data['title'] = 'Notifikasi seperti difacebook CodeIgniter'; //judul title
        $data['jlhnotif'] =$this->model_notifikasi->notif_count();  //menghitung jumlah post
        $data['notifikasi'] =$this->model_notifikasi->getnotifikasi(); //menampilkan isi postingan
		$data['data'] = $this->model_pegawai->GetUser();
		$this->load->view('admin/form_editpegawai',$data);
	}
	public function do_update(){
		$nip = $_POST['nip'];
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$id_subbidang = $_POST['id_subbidang'];
		$id_level = $_POST['id_level'];
		$id_golongan = $_POST['id_golongan'];
		$id_jabatan = $_POST['id_jabatan'];
		$data_update = array(
		'nama' => $nama,
		'email' => $email,
		'password' => $password,
		'id_subbidang' => $id_subbidang,
		'id_level' => $id_level,
		'id_golongan' => $id_golongan,
		'id_jabatan' => $id_jabatan
		);
		$where = array('nip' => $nip);
		$res = $this->model_pegawai1->updatedata('tb_pegawai',$data_update,$where);
		if($res>=1){
			redirect('admin/pegawai/index');
		}else{
			echo "<h2>Insert data gagal</h2>";
		}
	}
	public function do_delete($nip){
		$where = array('nip' => $nip);
		$res = $this->model_pegawai->deletedata('tb_pegawai',$where);
		if($res>=1){
			redirect('admin/pegawai/index');
		}
	}
}