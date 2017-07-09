<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   class Jalan_rusak extends CI_Controller {

     function __construct() {
         parent::__construct();
  			 $this->load->helper('url');
  			 $this->load->library('session');
  			 $this->load->database();
  			 }


      public function index(){
       		$this->load->view('Lihat_jalan_rusak');
      }

      public function tambah_jalan_rusak(){
       		$this->load->view('tambah_jalan_rusak');
      }


   }
?>
