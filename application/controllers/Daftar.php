<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Daftar extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->helper('tglindo_helper');
       $this->load->helper('cleanurl_helper');
    $this->load->model('m_login');
    $this->load->model('model_tabungan');
    $this->load->library('pagination','form_validation');
    $this->load->helper(array('url','html','text'));
  }

  public function index()
  {
    $this->load->view('template_a'); 
    $this->load->view('daftar');
  }

  

function logout(){
    $this->session->sess_destroy(); 
         redirect('login'); 
   }

}

/* AJ3 */
/* ColorlIb*/