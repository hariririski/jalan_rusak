<?php
class M_Jalan_rusak extends CI_Model{
    function lihat_jalan_rusak()
    {
        $query=$this->db->query("");
        return $query->result();
    }

    function tambah_jalan_rusak($new_name)
    {
      $photo= $new_name;
      $dokument=str_replace(" ","_",$photo);
      $jalan_rusak = array(
          'id_kabupaten'     =>$this->input->post('id_kabupaten'),
          'id_kecamatan'     =>$this->input->post('id_kecamatan'),
          'desa'             =>$this->input->post('desa'),
          'keterangan'       =>$this->input->post('keterangan'),
          'kode_ruas'        =>$this->input->post('kode_ruas'),
          'kondisi'          =>$this->input->post('kondisi'),
          'luas_jalan'       =>$this->input->post('luas_jalan'),
          'lat'              =>$this->input->post('lat'),
          'lon'              =>$this->input->post('lon'),
          'photo'            =>$photo
      );

      $cek=$this->db->insert('jalan_rusak',$jalan_rusak);
      return $cek;
    }

    function edit_jalan_rusak()
    {
        $query=$this->db->query("");
        return $query->result();
    }

    function hapus_jalan_rusak()
    {
        $query=$this->db->query("");
        return $query->result();
    }

    function detail_jalan_rusak()
    {
        $query=$this->db->query("");
        return $query->result();
    }
}
