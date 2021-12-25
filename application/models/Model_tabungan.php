<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_tabungan extends CI_Model {
var $gallerypath;
var $gallery_path_url;

	public function __construct() {
 $this->load->database();
 $this->load->helper('tglindo_helper');

 $this->gallerypath = realpath(APPPATH . '../uploads/');
 $this->gallery_path_url = base_url().'uploads/';
 }

 public function get_data_by_pk($tbl, $where, $id)
	{
				$this->db->from($tbl);
				$this->db->where($where,$id);
				$query = $this->db->get();

				return $query;
	}

	public function delete_data_by_pk($tbl, $where, $id)
	{
		$this->db->where($where, $id);
		$this->db->delete($tbl);
	}



	function simpan_berita(){
	    $config = array('allowed_types' =>'png|jpg|pdf|doc|docx','encrypt_name' =>'TRUE','upload_path' => './uploads');

		$this->load->library('upload', $config);
		$this->upload->do_upload('image');
		$datafile = $this->upload->data();
		
		$config = array('source_image' => $datafile['full_path'],
	                         'new_image' => $this->gallerypath . '/uploads',
				             'maintain_ration' => false,
				             'width' => 130,
			                 'height' =>100);

	    $this->load->library('image_lib', $config);
	    $this->upload->initialize($config);
		$this->image_lib->resize();
		
		$create_by = $this->input->post('create_by');

		$username = $this->input->post('username');
		$kategori = $this->input->post('kategori');
		$capaian = $this->input->post('capaian');

		$keterangan = $this->input->post('keterangan');
		$tgl = date('Y-m-d');
		
		date_default_timezone_set('Asia/Jakarta');
		$create_by = $this->input->post('create_by');
		$image = $_FILES['image']['name'];
		
		$data = array('kategori' => $kategori,
					'capaian' => $capaian,
					'keterangan' => $keterangan,
	                  'created_at' => $tgl,
	                  'create_by' => $create_by,

	                  'username' => $username,
				      'image' => $image);
		$this->db->insert('kegiatan', $data);
	}


	function post_user($data,$table){
		$this->db->insert($table,$data);
	}









public function tabungan(){

    return $query = $this->db->query("SELECT * FROM tabungan JOIN t_admin WHERE tabungan.id_user=t_admin.id ORDER BY tabungan.id DESC");
    
	}
	public function hitungtabungan()
{
	$id = $this->session->userdata('id');
   $this->db->select_sum('jumlah');
   $this->db->where('id_user',$id);
   $query = $this->db->get('tabungan');
   if($query->num_rows()>0)
   {
     return $query->row()->jumlah;
   }
   else
   {
     return 0;
   }
}

public function hitunguser()
{
   $this->db->select_sum('id');
   $query = $this->db->get('t_admin');
   if($query->num_rows()>0)
   {
     return $query->row()->id;
   }
   else
   {
     return 0;
   }
}



}