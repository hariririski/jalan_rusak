<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   class Jalan_rusak extends CI_Controller {

     function __construct() {
         parent::__construct();
  			 $this->load->helper('url');
  			 $this->load->library('session');
         $this->load->model('M_Kabupaten');
         $this->load->model('M_Kecamatan');
         $this->load->model('M_Jalan');
         $this->load->model('M_Jalan_rusak');
  			 $this->load->database();
  			 }


      public function index(){
          $data['lihat'] = $this->M_Jalan_rusak->Lihat_jalan_rusak();
       		$this->load->view('Lihat_jalan_rusak',$data);
      }

      public function tambah_jalan_rusak(){
          $data['kabupaten'] = $this->M_Kabupaten->lihat_kabupaten();
          $data['kecamatan'] = $this->M_Kecamatan->lihat_kecamatan();
          $data['jalan'] = $this->M_Jalan->lihat_jalan();
       		$this->load->view('tambah_jalan_rusak',$data);
      }
      function proses_tambah_jalan_rusak(){
       $config['upload_path']   = './uploads/';
       $config['allowed_types'] = 'png|PNG|JPG|jpg|jpeg|JPE|gif|bmp';
       $config['max_size']      = 99999999;
       //$config['max_width']     = 10240;
       //$config['max_height']    = 7680;
       $new_name ="JALAN_RUSAK".time().$_FILES["gambar"] ['name'];
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
             $cek=$this->M_Jalan_rusak->tambah_jalan_rusak($new_name);
             if($cek){
               $this->tambah_berhasil();
               redirect('tambah_jalan_rusak');
             }else{
               $this->tambah_gagal();
               redirect('tambah_jalan_rusak');
             }
       }
     }

     public function proses_hapus_jalan_rusak(){
         $id=$_GET ['id'];
         $cek= $this->M_Jalan_rusak->proses_hapus_jalan_rusak($id);
         if($cek){
           $this->tambah_berhasil();
           redirect('tambah_jalan_rusak');
         }else{
           $this->tambah_gagal();
           redirect('tambah_jalan_rusak');
         }
     }

     public function detail_jalan_rusak(){
         $id=$_GET['id'];
         $data['lihat'] = $this->M_Jalan_rusak->jalan_rusak($id);
         $data['kabupaten'] = $this->M_Kabupaten->lihat_kabupaten();
         $data['kecamatan'] = $this->M_Kecamatan->lihat_kecamatan();
         $data['jalan'] = $this->M_Jalan->lihat_jalan();
         $this->load->view('detail_jalan_rusak',$data);
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
