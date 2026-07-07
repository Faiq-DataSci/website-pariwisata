<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_testimoni extends CI_Model
{
    public function __construct()
    {
        parent::__construct();

        $query = "
            CREATE TABLE IF NOT EXISTS testimoni (
                id_testimoni INT(11) AUTO_INCREMENT PRIMARY KEY,
                nama VARCHAR(255) NOT NULL,
                isi TEXT NOT NULL,
                rating TINYINT(1) NOT NULL DEFAULT 5,
                foto VARCHAR(255),
                status VARCHAR(50) NOT NULL DEFAULT 'Aktif',
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
        ";
        $this->db->query($query);
    }

    public function get_data($status = null)
    {
        $this->db->order_by('id_testimoni', 'DESC');
        if ($status !== null) {
            $this->db->where('status', $status);
        }
        return $this->db->get('testimoni')->result();
    }

    public function get_data_by_id($id)
    {
        return $this->db->get_where('testimoni', array('id_testimoni' => $id))->row();
    }

    public function insert_data($data)
    {
        return $this->db->insert('testimoni', $data);
    }

    public function update_data($data, $where)
    {
        $this->db->where($where);
        return $this->db->update('testimoni', $data);
    }

    public function delete_data($where)
    {
        $this->db->where($where);
        return $this->db->delete('testimoni');
    }
}
