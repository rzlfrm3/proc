<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
		
	public function __construct() {
        parent::__construct();
        $this->load->model('model_notifikasi'); 
        $this->load->helper('form','url');  hgsjhgdj
    }
	
	public function index() {
		
		$data['title'] = 'Notifikasi seperti difacebook CodeIgniter'; 
        $data['jlhnotif'] =$this->model_notifikasi->notif_count();  
        $data['notifikasi'] =$this->model_notifikasi->getnotifikasi();  
		$this->load->view('admin/home', $data); //
	}
	
}
