<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vektor_v extends CI_Controller {
	
	public function index() {
		
			$data['data'] = $this->model_vektor_v->GetUser();
            $this->load->view('admin/tabel_vektor_v', $data);
			
	}
	
}
