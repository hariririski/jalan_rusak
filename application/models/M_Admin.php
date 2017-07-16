<?php
class M_Admin extends CI_Model{
    function lihat_admin()
    {
        $query=$this->db->query("SELECT * FROM `admin`");
        return $query->result();
    }

    function admin($id)
    {
        $query=$this->db->query("SELECT * FROM `admin` where username='$id'");
        return $query->result();
    }

    function tambah_admin()
    {
      $nama_lengkap = $this->input->post('nama_lengkap');
      $username = $this->input->post('username');
      $password = md5($this->input->post('password'));
      $data = array(
          'nama_lengkap'=>$nama_lengkap,
          'username'=>$username,
          'password'=>$password
      );
      $cek=$this->db->insert('admin',$data);
      return $cek;
    }

    function edit_admin()
    {
      $query=$this->db->query("");
      return $query->result();
    }


    function proses_hapus_admin($id)
    {
      $query=$this->db->where('username', $id);
      $cek=$this->db->delete('admin');
      return $cek;
    }


}
