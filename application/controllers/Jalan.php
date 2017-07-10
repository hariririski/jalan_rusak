<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   class Jalan extends CI_Controller {

     function __construct() {
         parent::__construct();
  			 $this->load->helper('url');
  			 $this->load->library('session');
  			 $this->load->database();
         $admin=$this->session->userdata('admin');
         $this->load->model('M_Kabupaten');
         $this->load->model('M_Kecamatan');
         if(empty($admin)==1){
            redirect("login/logout");
           }
  			 }


         public function index()
       	{


       		$this->load->view('Lihat_jalan');
       	}

        public function tambah_jalan()
       {
         $data['kabupaten'] = $this->M_Kabupaten->lihat_kabupaten();
         $data['kecamatan'] = $this->M_Kecamatan->lihat_kecamatan();
         $this->load->view('tambah_jalan',$data);
       }

   }
?>
