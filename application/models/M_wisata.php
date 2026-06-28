<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_wisata extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        // Create table if it doesn't exist
        $query = "
            CREATE TABLE IF NOT EXISTS wisata (
                id_wisata INT(11) AUTO_INCREMENT PRIMARY KEY,
                nama_wisata VARCHAR(255) NOT NULL,
                deskripsi TEXT NOT NULL,
                kategori VARCHAR(100) NOT NULL,
                status VARCHAR(50) NOT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
        ";
        $this->db->query($query);
    }

    public function get_data()
    {
        $this->db->order_by('id_wisata', 'DESC');
        return $this->db->get('wisata')->result();
    }

    public function insert_data($data)
    {
        return $this->db->insert('wisata', $data);
    }

    public function get_data_by_id($id)
    {
        return $this->db->get_where('wisata', array('id_wisata' => $id))->row();
    }

    public function update_data($data, $where)
    {
        $this->db->where($where);
        return $this->db->update('wisata', $data);
    }

    public function delete_data($where)
    {
        $this->db->where($where);
        return $this->db->delete('wisata');
    }
}
