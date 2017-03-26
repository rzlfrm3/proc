<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_notifikasi extends CI_Model {
	 var $tabel = 'tb_usulan';
 
    function __construct() {
        parent::__construct();
    }
    function notif_count() {
        $this->db->from($this->tabel);
        $query = $this->db->get();
        return $query->num_rows();
    }
    function getnotifikasi() {
        $this->db->from($this->tabel);
        $this->db->order_by('id_usulan', 'DESC');
 
        $query = $this->db->get();
 
        if ($query->num_rows() >0) {
            return $query->result();
        }
    }
    function ginsert($data){
       $this->db->insert($this->tabel, $data);
       return TRUE;
    }
}
?>