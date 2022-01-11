<?php

  class ModelPengelola extends CI_Model
   {
    public function get($table)
    {
        return $this->db->get($table)->result_array();
    }

    public function ambil()
    {
    //   $this->db->where('id_pengelola', $this->session->id);
    
    // return $this->db->get('wisata')->result();

    $this->db->where('id_pengelola', $this->session->userdata('id_pengelola'));
    
    return $this->db->get('wisata')->result_array();
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

    public function getakun()
    {
      $this->db->where('role', '3');
    
      return $this->db->get('user')->result_array();
    }

    public function get_by($table,$id, $where)
	{
		return $this->db->get_where($table, [$id=>$where]);
	}

    public function update($table,$where,$data){		
       $res = $this->db->update($table,$where,$data);
       return $res;
    }

    public function delete($table,$where)
    {
      $res = $this->db->delete($table,$where);
       return $res;
    }

    

    public function verifikasi($status, $id)
    {
        return $this->db->query("UPDATE wisata SET status = '$status'  WHERE id_wisata = $id");
    }

  }
