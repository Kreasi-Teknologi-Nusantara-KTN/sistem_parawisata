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

    public function where2($nama,$id)
    {
        return $this->db->query("SELECT * FROM wisata where nama_wisata LIKE '%$nama%' AND id_wisata NOT LIKE '%$id%'  AND status = 'Sudah disetujui'")->result_array();
    }

    public function update($table, $where, $data)
    {
        $res = $this->db->update($table, $where, $data);
        return $res;
    }

    public function join($id)
    {
        return $this->db->query("SELECT * FROM wisata JOIN user ON wisata.id_pengelola = user.id WHERE id_wisata = $id");
    }

    public function delete($table, $where)
    {
        $res = $this->db->delete($table, $where);
        return $res;
    }

    public function verifikasi($status, $id)
    {
        return $this->db->query("UPDATE wisata SET status = '$status'  WHERE id_wisata = $id");
    }
}
