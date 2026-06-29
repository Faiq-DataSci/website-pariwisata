<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_artikel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        // Create table if it doesn't exist
        $query = "
            CREATE TABLE IF NOT EXISTS artikel (
                id_artikel INT(11) AUTO_INCREMENT PRIMARY KEY,
                judul VARCHAR(255) NOT NULL,
                penulis VARCHAR(100) NOT NULL,
                tanggal DATE NOT NULL,
                konten TEXT NOT NULL,
                status VARCHAR(50) NOT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
        ";
        $this->db->query($query);
    }

    public function get_data()
    {
        $this->db->order_by('id_artikel', 'DESC');
        return $this->db->get('artikel')->result();
    }

    public function count_published()
    {
        $this->db->from('artikel');
        $this->db->where("LOWER(status) = 'publikasi'");
        return $this->db->count_all_results();
    }

    public function insert_data($data)
    {
        return $this->db->insert('artikel', $data);
    }

    public function get_data_by_id($id)
    {
        return $this->db->get_where('artikel', array('id_artikel' => $id))->row();
    }

    public function update_data($data, $where)
    {
        $this->db->where($where);
        return $this->db->update('artikel', $data);
    }

    public function delete_data($where)
    {
        $this->db->where($where);
        return $this->db->delete('artikel');
    }
}
