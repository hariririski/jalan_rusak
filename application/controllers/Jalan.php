<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   class Jalan extends CI_Controller {

     function __construct() {
         parent::__construct();
  			 $this->load->helper('url');
  			 $this->load->library('session');
  			 $this->load->database();
         $admin=$this->session->userdata('admin');
         $this->load->model('M_Jalan');
         if(empty($admin)==1){
            redirect("login/logout");
           }
  			 }


         public function index()
       	{
          //$data['lihat'] = $this->M_Jalan->Lihat_jalan();
       		$this->load->view('Lihat_jalan');
       	}

        public function tambah_jalan()
       {

         $this->load->view('tambah_jalan');
       }

   }
?>
