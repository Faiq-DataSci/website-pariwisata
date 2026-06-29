<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_kontak extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        // Create table if it doesn't exist
        $query = "
            CREATE TABLE IF NOT EXISTS kontak (
                id_kontak INT(11) AUTO_INCREMENT PRIMARY KEY,
                pengirim VARCHAR(255) NOT NULL,
                email VARCHAR(100) NOT NULL,
                no_hp VARCHAR(50) NOT NULL,
                isi_pesan TEXT NOT NULL,
                tanggal DATE NOT NULL,
                status VARCHAR(50) DEFAULT 'unread'
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
        ";
        $this->db->query($query);
    }

    public function get_data()
    {
        $this->db->order_by('id_kontak', 'DESC');
        return $this->db->get('kontak')->result();
    }

    public function count_unread()
    {
        $this->db->from('kontak');
        $this->db->where("LOWER(status) = 'unread'");
        return $this->db->count_all_results();
    }

    public function insert_data($data)
    {
        return $this->db->insert('kontak', $data);
    }

    public function get_data_by_id($id)
    {
        return $this->db->get_where('kontak', array('id_kontak' => $id))->row();
    }

    public function update_data($data, $where)
    {
        $this->db->where($where);
        return $this->db->update('kontak', $data);
    }

    public function delete_data($where)
    {
        $this->db->where($where);
        return $this->db->delete('kontak');
    }
}
