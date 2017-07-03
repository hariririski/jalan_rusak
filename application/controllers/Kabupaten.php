<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   class Kabupaten extends CI_Controller {

     function __construct() {
         parent::__construct();
  			 $this->load->helper('url');
  			 $this->load->library('session');
  			 $this->load->database();
         $this->load->model('M_Kabupaten');
         $admin=$this->session->userdata('admin');
         if(empty($admin)==1){
            redirect("login/logout");
           }
  			 }


         public function index()
       	{
          $data['lihat'] = $this->M_Kabupaten->Lihat_kabupaten();
       		$this->load->view('Lihat_kabupaten',$data);
       	}

        public function proses_tambah_kabupaten(){
          $cek= $this->M_Kabupaten->tambah_kabupaten();
          if($cek){
            $data="document.getElementById('berhasil').click();";
            $this->session->set_flashdata('pesan', 'onload="'.$data.'"');
            redirect('kabupaten');
          }else{
            $data="document.getElementById('gagal').click();";
            $this->session->set_flashdata('pesan', 'onload="'.$data.'"');
            redirect('kabupaten');
          }
        }

        public function proses_hapus_kabupaten(){
          	$id=$_GET ['id'];
          	$cek= $this->M_Kabupaten->proses_hapus_kabupaten($id);
            if($cek){
          		$data="document.getElementById('berhasil_hapus').click();";
          		$this->session->set_flashdata('pesan', 'onload="'.$data.'"');
          		redirect('kabupaten');
          	}else{
          		$data="document.getElementById('gagal_hapus').click();";
          		$this->session->set_flashdata('pesan', 'onload="'.$data.'"');
          		redirect('kabupaten');
          	}
        }


   }
?>
