<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   class Kecamatan extends CI_Controller {

     function __construct() {
         parent::__construct();
  			 $this->load->helper('url');
  			 $this->load->library('session');
  			 $this->load->database();
         $this->load->model('M_Kabupaten');
         $this->load->model('M_Kecamatan');
         $admin=$this->session->userdata('admin');
         if(empty($admin)==1){
            redirect("login/logout");
           }
  			 }


         public function index()
       	{
          $data['select'] = $this->M_Kabupaten->lihat_kabupaten();
          $data['lihat'] = $this->M_Kecamatan->lihat_Kecamatan();
       		$this->load->view('lihat_Kecamatan',$data);
       	}

        public function proses_tambah_kecamatan(){
          $cek= $this->M_Kecamatan->tambah_kecamatan();
          if($cek){
            $data="document.getElementById('berhasil').click();";
            $this->session->set_flashdata('pesan', 'onload="'.$data.'"');
            redirect('kecamatan');
          }else{
            $data="document.getElementById('gagal').click();";
            $this->session->set_flashdata('pesan', 'onload="'.$data.'"');
            redirect('kecamatan');
          }
        }

        public function proses_hapus_kecamatan(){
          	$id=$_GET ['id'];
          	$cek= $this->M_Kecamatan->proses_hapus_kecamatan($id);
            if($cek){
          		$data="document.getElementById('berhasil_hapus').click();";
          		$this->session->set_flashdata('pesan', 'onload="'.$data.'"');
          		redirect('kecamatan');
          	}else{
          		$data="document.getElementById('gagal_hapus').click();";
          		$this->session->set_flashdata('pesan', 'onload="'.$data.'"');
          		redirect('kecamatan');
          	}
        }


   }
?>
