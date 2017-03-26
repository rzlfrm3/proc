<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usulan extends CI_Controller {
	
	public function __construct(){
		parent::__construct();	
		$this->load->model('model_usulan1','id_usulan','model_notifikasi');
		$this->load->helper('form','url');  
	}

	public function index()
	{
		$data['title'] = 'Notifikasi seperti difacebook CodeIgniter'; //judul title
        $data['jlhnotif'] =$this->model_notifikasi->notif_count();  //menghitung jumlah post
        $data['notifikasi'] =$this->model_notifikasi->getnotifikasi(); //menampilkan isi postingan
		$data ['data']= $this->model_usulan->GetUser();
		$this->load->view('admin/tabel_usulan',$data);
		$tgldv=time();


        $que=$this->db->query("SELECT id_usulan,tgl, FROM_UNIXTIME(tgl,'%Y%m%d') AS tglbru , CURDATE()-4 AS newtgl FROM tb_usulan WHERE FROM_UNIXTIME(tgl,'%Y%m%d') < CURDATE()-2")->result();

        foreach($que as $newque){
            $id_usulan=$newque->id_usulan;
            $this->db->query("DELETE FROM tb_usulan WHERE id_usulan='$id_usulan'");
            //menghapus otomatis
		}
		
	}
	public function add_data(){
		$this->load->model('model_usulan');
		$this->load->helper('form_helper');
		$data = array(
		'jenisusulan' => $this->model_usulan1->jenisusulan(),
		'jenisusulan_selected' => $this->input->post('tb_jenisusulan') ? $this->input->post('tb_jenisusulan') : '',
		'kategori' => $this->model_usulan1->kategori(),
		'kategori_selected' => $this->input->post('tb_kategori') ? $this->input->post('tb_kategori') : '',
		'pejabatpengadaan' => $this->model_usulan1->pejabatpengadaan(),
		'pejabatpengadaan_selected' => $this->input->post('tb_pejabatpengadaan') ? $this->input->post('tb_pejabatpengadaan') : '',
	    );
		$data['id_usulan'] = $this->id_usulan->buat_id();
		$data['title'] = 'Notifikasi seperti difacebook CodeIgniter'; //judul title
        $data['jlhnotif'] =$this->model_notifikasi->notif_count();  //menghitung jumlah post
        $data['notifikasi'] =$this->model_notifikasi->getnotifikasi(); //menampilkan isi postingan
		$data ['data']= $this->model_usulan->GetUser();
		$this->load->view('admin/form_tambahusulan', $data);
	}
	public function do_insert(){
		$id_usulan = $_POST['id_usulan'];
		$hal = $_POST['hal'];
		$nama = $_POST['nama'];
		$jasalayanan = $_POST['jasalayanan'];
		$jumlah = $_POST['jumlah'];
		$id_jenisusulan = $_POST['id_jenisusulan'];
		$id_kategori = $_POST['id_kategori'];
		$id_pejabatpengadaan = $_POST['id_pejabatpengadaan'];
		$data_insert = array(
		'id_usulan' => $id_usulan,
		'hal' => $hal,
		'nama' => $nama,
		'jasalayanan' => $jasalayanan,
		'jumlah' => $jumlah,
		'tgl' => time(),
		'id_jenisusulan' => $id_jenisusulan,
		'id_kategori' => $id_kategori,
		'id_pejabatpengadaan' => $id_pejabatpengadaan
		);
		$this->db->set('tanggal', 'NOW()', FALSE);
		$res = $this->model_usulan->insertdata('tb_usulan',$data_insert);
		if($res>=1){
			redirect('admin/usulan/index');
		}else{
			echo "<h2>Insert Data gagal</h2>";
		}
	}
	
	 public function edit_data($id_usulan){
		$mhs = $this->model_usulan1->GetUser("where id_usulan = '$id_usulan'");
		$data = array(
		"id_usulan" => $mhs[0]['id_usulan'],
		"hal" => $mhs[0]['hal'],
		"nama" => $mhs[0]['nama'],
		"jasalayanan" => $mhs[0]['jasalayanan'],
		"jumlah" => $mhs[0]['jumlah'],
		"tanggal" => $mhs[0]['tanggal'],
		"id_jenisusulan" => $mhs[0]['id_jenisusulan'],
		"id_kategori" => $mhs[0]['id_kategori'],
		"id_pejabatpengadaan" => $mhs[0]['id_pejabatpengadaan'],
		'jenisusulan' => $this->model_usulan1->jenisusulan(),
		'jenisusulan_selected' => $this->input->post('tb_jenisusulan') ? $this->input->post('tb_jenisusulan') : '',
		'kategori' => $this->model_usulan1->kategori(),
		'kategori_selected' => $this->input->post('tb_kategori') ? $this->input->post('tb_kategori') : '',
		'pejabatpengadaan' => $this->model_usulan1->pejabatpengadaan(),
		'pejabatpengadaan_selected' => $this->input->post('tb_pejabatpengadaan') ? $this->input->post('tb_pejabatpengadaan') : '',
		);
		$data['title'] = 'Notifikasi seperti difacebook CodeIgniter'; //judul title
        $data['jlhnotif'] =$this->model_notifikasi->notif_count();  //menghitung jumlah post
        $data['notifikasi'] =$this->model_notifikasi->getnotifikasi(); //menampilkan isi postingan
		$data ['data']= $this->model_usulan->GetUser();
		$this->load->view('admin/form_editusulan',$data);
	}
	public function do_update(){
		$id_usulan = $_POST['id_usulan'];
		$hal = $_POST['hal'];
		$nama = $_POST['nama'];
		$jasalayanan = $_POST['jasalayanan'];
		$jumlah = $_POST['jumlah'];
		$tanggal = $_POST['tanggal'];
		$id_jenisusulan = $_POST['id_jenisusulan'];
		$id_kategori = $_POST['id_kategori'];
		$id_pejabatpengadaan = $_POST['id_pejabatpengadaan'];
		$data_update = array(
		'hal' => $hal,
		'nama' => $nama,
		'jasalayanan' => $jasalayanan,
		'jumlah' => $jumlah,
		'id_jenisusulan' => $id_jenisusulan,
		'id_kategori' => $id_kategori,
		'id_pejabatpengadaan' => $id_pejabatpengadaan
		);
		$where = array('id_usulan' => $id_usulan);
		$res = $this->model_usulan1->updatedata('tb_usulan',$data_update,$where);
		if($res>=1){
			redirect('admin/usulan/index');
		}else{
			echo "<h2>Insert data gagal</h2>";
		}
	}
	public function do_delete($id_usulan){
		$where = array('id_usulan' => $id_usulan);
		$res = $this->model_usulan1->deletedata('tb_usulan',$where);
		if($res>=1){
			redirect('admin/usulan/index');
		}
	}
	public function load_row(){     //fungsi load_row untuk menampilkan jlh data pada navbar secara realtime
        echo $this->model_notifikasi->notif_count(); //jumlah data akan langsung di tampilkan
    }
	
	 public function load_data(){    //fungsi load_data untuk menampilkan isi data pada navbar secara realtime
 
        $data=$this->model_notifikasi->getnotifikasi();
        $no=0;foreach($data as $rdata){ $no++;
            if($no % 2==0){$strip='strip1';}
                    else{$strip='strip2';}
            echo"<li><a href=\"#\" class=\"".$strip."\">".$rdata->id_usulan."<br>
            <small>".$rdata->hal." ".timeAgo($rdata->tgl)."</small>
            </a><li>";
        }
    }
}