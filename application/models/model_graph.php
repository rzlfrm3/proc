<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_graph extends CI_Model {
public function __construct()
{
$this->load->database();
}
 
public function graph()
{
$this->db->select('tb_vektor_v.id_alternatif,tb_vektor_v.vektor_s,tb_vektor_v.jumlah_vektor_s,tb_vektor_v.vektor_v,tb_alternatif.id_alternatif,tb_alternatif.nama_alternatif')
		->join('tb_alternatif','tb_alternatif.id_alternatif=tb_vektor_v.id_alternatif');
		return $this->db->get('tb_vektor_v')->result();
$data = $this->db->query("SELECT * from tb_vektor_v");
return $data->result();
}

}