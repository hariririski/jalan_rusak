
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   class Peta extends CI_Controller {

     function __construct() {
         parent::__construct();
  			 $this->load->helper('url');
  			 $this->load->library('session');
  			 $this->load->database();
         $this->load->model('M_Admin');

  	  }


      public function index(){
        //$data['lihat'] = $this->M_Admin->lihat_admin();
       	$this->load->view('maps/peta_jalan_rusak');
      }

      public function popup(){
        //$data['lihat'] = $this->M_Admin->lihat_admin();
       	$this->load->view('maps/popup');
      }




   }
?>
