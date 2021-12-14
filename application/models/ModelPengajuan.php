<?php
class ModelPengajuan extends CI_Model
{
    public function get($table)
    {
        return $this->db->get($table)->result_array();
    }

    public function add($table, $data)
    {
        return $this->db->insert($table, $data);
    }

    public function where($table, $where)
    {
        return $this->db->get_where($table, $where);
    }
    public function verifikasi($status, $id)
    {
        return $this->db->query("UPDATE wisata SET status = '$status'  WHERE id_wisata = $id");
    }
}
