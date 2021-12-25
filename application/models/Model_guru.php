<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_guru extends CI_Model {
var $gallerypath;
var $gallery_path_url;

	public function __construct() {
 $this->load->database();
 $this->load->helper('tglindo_helper');
 }
 function jadwal(){
        $query = $this->db->query("SELECT * FROM jw_terapis JOIN t_admin WHERE jw_terapis.id_guru=".$this->session->userdata('id')." GROUP BY id_jadwal DESC");
 return $query;

    }
}