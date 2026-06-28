<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_gambar extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        // Create table if it doesn't exist
        $query = "
            CREATE TABLE IF NOT EXISTS gambar (
                id_gambar INT(11) AUTO_INCREMENT PRIMARY KEY,
                keterangan VARCHAR(255) NOT NULL,
                file_gambar VARCHAR(255) NOT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
        ";
        $this->db->query($query);
    }

    public function get_data()
    {
        $this->db->order_by('id_gambar', 'DESC');
        return $this->db->get('gambar')->result();
    }

    public function insert_data($data)
    {
        return $this->db->insert('gambar', $data);
    }

    public function get_data_by_id($id)
    {
        return $this->db->get_where('gambar', array('id_gambar' => $id))->row();
    }

    public function delete_data($where)
    {
        $this->db->where($where);
        return $this->db->delete('gambar');
    }
}
