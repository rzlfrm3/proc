<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Graph extends CI_Controller {
	
public function __construct()
{
parent::__construct();
$this->load->model('model_graph');
}
 
public function index()
{
$data['graph'] = $this->model_graph->graph();
$this->load->view('admin/graph', $data);
}
 
}