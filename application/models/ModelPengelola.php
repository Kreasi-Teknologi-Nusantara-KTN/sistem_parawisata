<?php

  class ModelPengelola extends CI_Model
   {
    public function get($table)
    {
        return $this->db->get($table)->result_array();
    }

    public function add($table, $data)
    {
        return $this->db->insert($table, $data);
    }

    public function getpengelola()
    {
      $this->db->where('role', '2');
    
      return $this->db->get('user')->result_array();
    }

    public function ubah($table, $id, $where, $data)
    {
      $this->db->update($table, $data , [$id=>$where]);
    }

    public function verifikasi($status, $id)
    {
        return $this->db->query("UPDATE wisata SET status = '$status'  WHERE id_wisata = $id");
    }

  }
?>

