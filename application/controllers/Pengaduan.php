<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   class Pengaduan extends CI_Controller {

     function __construct() {
         parent::__construct();
  			 $this->load->helper('url');
  			 $this->load->library('session');
  			 $this->load->database();
         $this->load->model('M_Kabupaten');
         $this->load->model('M_Kecamatan');
         $this->load->model('M_Jalan');
  			 }


         public function index()
       	{

       		$this->load->view('Pengaduan');
       	}

        public function tambah_pengaduan()
       {
         $data['kabupaten'] = $this->M_Kabupaten->lihat_kabupaten();
         $data['kecamatan'] = $this->M_Kecamatan->lihat_kecamatan();
         $this->load->view('Tambah_pengaduan',$data);
       }



   }
?>
