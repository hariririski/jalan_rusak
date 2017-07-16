<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   class Admin extends CI_Controller {

     function __construct() {
         parent::__construct();
  			 $this->load->helper('url');
  			 $this->load->library('session');
  			 $this->load->database();
         $this->load->model('M_Admin');
  			 $admin=$this->session->userdata('admin');
  			 if(empty($admin)==1){
  					redirect("login/logout");
  				 }
  	  }


      public function index(){
        $data['lihat'] = $this->M_Admin->lihat_admin();
       	$this->load->view('Lihat_Admin',$data);
      }

      public function proses_tambah_admin(){
    		$cek= $this->M_Admin->tambah_admin();
    		if($cek){
    			$data="document.getElementById('berhasil').click();";
    			$this->session->set_flashdata('pesan', 'onload="'.$data.'"');
    			redirect('admin');
    		}else{
    			$data="document.getElementById('gagal').click();";
    			$this->session->set_flashdata('pesan', 'onload="'.$data.'"');
    			redirect('admin');
    		}
    	}

      public function proses_hapus_admin(){
        	$id=$_GET ['id'];
        	$cek= $this->M_Admin->proses_hapus_admin($id);
          if($cek){
        		$data="document.getElementById('berhasil_hapus').click();";
        		$this->session->set_flashdata('pesan', 'onload="'.$data.'"');
        		redirect('admin');
        	}else{
        		$data="document.getElementById('gagal_hapus').click();";
        		$this->session->set_flashdata('pesan', 'onload="'.$data.'"');
        		redirect('admin');
        	}
      }

      public function ubah_profil(){
        	$id=$_GET ['id'];
          $data['lihat'] = $this->M_Admin->admin($id);
         	$this->load->view('edit_profil',$data);
      }
      public function ubah_password(){
          $id=$_GET ['id'];
          $data['lihat'] = $this->M_Admin->admin($id);
          $this->load->view('edit_password',$data);
      }


   }
?>
