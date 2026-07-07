<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_komentar extends CI_Model
{
    public function __construct()
    {
        parent::__construct();

        $query = "
            CREATE TABLE IF NOT EXISTS komentar (
                id_komentar INT(11) AUTO_INCREMENT PRIMARY KEY,
                user_id INT(11) NULL,
                nama VARCHAR(255) NOT NULL,
                komentar TEXT NOT NULL,
                status VARCHAR(50) NOT NULL DEFAULT 'Aktif',
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
        ";
        $this->db->query($query);
    }

    public function get_data($status = null)
    {
        $this->db->order_by('id_komentar', 'DESC');
        if ($status !== null) {
            $this->db->where('status', $status);
        }
        return $this->db->get('komentar')->result();
    }

    public function insert_data($data)
    {
        return $this->db->insert('komentar', $data);
    }
}
