<?php
class M_Jalan extends CI_Model{
    function lihat_jalan()
    {
        $query=$this->db->query("select * from jalan");
        return $query->result();
    }

    function tambah_jalan($new_name)
    {
      $foto= $new_name;
      $foto=str_replace(" ","_",$foto);
      $jalan = array(
          'kode_ruas'     =>$this->input->post('kode_ruas'),
          'no_ruas'       =>$this->input->post('no_ruas_ruas'),
          'status'        =>$this->input->post('status'),
          'nama_jalan'    =>$this->input->post('nama_jalan'),
          'panjang_km'    =>$this->input->post('panjang_km'),
          'dari'          =>$this->input->post('dari'),
          'ke'            =>$this->input->post('ke'),
          'id_kabupaten'  =>$this->input->post('id_kabupaten'),
          'id_kecamatan'  =>$this->input->post('id_kecamatan'),
          'baik'          =>$this->input->post('baik'),
          'rusak_sedang'  =>$this->input->post('sedang'),
          'rusak_ringan'  =>$this->input->post('rusak_ringan'),
          'rusak_berat'   =>$this->input->post('rusak_berat'),
          'belum_tembus'  =>$this->input->post('belum_tembus'),
          'foto'          =>$foto
      );
      $dungsi = array(
          'kode_ruas'     =>$this->input->post('kode_ruas'),
          'nama_kjp'      =>$this->input->post('nama_kjp'),
          'no_kjp'      =>$this->input->post('no_kjp'),
          'keterangan'    =>$this->input->post('keterangan')
      );
      $cek=$this->db->insert('jalan',$jalan);
      $cek2=$this->db->insert('jalan',$fungsi);
      return $cek;
    }

    function edit_jalan()
    {
        $query=$this->db->query("");
        return $query->result();
    }

    function hapus_jalan()
    {
        $query=$this->db->query("");
        return $query->result();
    }

    function detail_jalan()
    {
        $query=$this->db->query("");
        return $query->result();
    }
}
