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
         $this->load->model('M_jalan');
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


       function proses_tambah_jalan(){
        $config['upload_path']   = './uploads/';
        $config['allowed_types'] = 'pdf|rar|zip|docx|doc|xlsx|xls';
        $config['max_size']      = 99999999;
        //$config['max_width']     = 10240;
        //$config['max_height']    = 7680;
        $new_name ="JALAN".time().$_FILES["gambar"] ['name'];
        $config['file_name']=$new_name;
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('gambar')) {

                $this->session->set_flashdata('pesan', '
                <div class="alert alert-danger fade in">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Gagal!</strong> Gambar Terlalu Besar.
                </div>');
                echo "filenya";
                //redirect('tambah_jalan');
        }else {
              $cek=$this->M_jalan->tambah_jalan($new_name);
              if($cek){
                $this->tambah_berhasil();
                redirect('tambah_jalan');
              }else{
                $this->tambah_gagal();
                redirect('tambah_jalan');
              }
        }
      }

      function tambah_berhasil(){
  			$this->session->set_flashdata('pesan', '
  							<div class="alert alert-success fade in">
  							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  							<strong>Berhasil!</strong> Data Berhasil Di Tambahkan!.
  							</div>');
  		}
  		function tambah_gagal(){
  			$this->session->set_flashdata('pesan', '
  							<div class="alert alert-danger fade in">
  							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  							<strong>Gagal!</strong> Data Gagal ditambahkan!.
  							</div>');
  		}
  		function edit_berhasil(){
  			$this->session->set_flashdata('pesan', '
  							<div class="alert alert-success fade in">
  							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  							<strong>Berhasil!</strong> Data Berhasil Di Perbaharui!.
  							</div>');
  		}
  		function edit_gagal(){
  			$this->session->set_flashdata('pesan', '
  							<div class="alert alert-danger fade in">
  							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  							<strong>Gagal!</strong> Data Gagal Di Perbaharui!.
  							</div>');
  		}
  		function hapus_berhasil(){
  			$this->session->set_flashdata('pesan', '
  							<div class="alert alert-success fade in">
  							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  							<strong>Berhasil!</strong> Data Berhasil Dihapus!.
  							</div>');
  		}
  		function hapus_gagal(){
  			$this->session->set_flashdata('pesan', '
  							<div class="alert alert-danger fade in">
  							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  							<strong>Gagal!</strong> Data Gagal Di Hapus!.
  							</div>');
  		}

   }
?>
