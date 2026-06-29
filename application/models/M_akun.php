<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_akun extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        // Create table if it doesn't exist (assuming tbl_admin)
        $query = "
            CREATE TABLE IF NOT EXISTS tbl_admin (
                id_admin INT(11) AUTO_INCREMENT PRIMARY KEY,
                nama_lengkap VARCHAR(255) NOT NULL,
                username VARCHAR(100) NOT NULL,
                password VARCHAR(255) NOT NULL,
                role VARCHAR(50) NOT NULL,
                terakhir_login DATETIME NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
        ";
        $this->db->query($query);
    }

    public function get_data()
    {
        $this->db->order_by('id_admin', 'DESC');
        return $this->db->get('tbl_admin')->result();
    }

    public function count_all()
    {
        return $this->db->count_all('tbl_admin');
    }

    public function insert_data($data)
    {
        return $this->db->insert('tbl_admin', $data);
    }

    public function get_data_by_id($id)
    {
        return $this->db->get_where('tbl_admin', array('id_admin' => $id))->row();
    }

    public function update_data($data, $where)
    {
        $this->db->where($where);
        return $this->db->update('tbl_admin', $data);
    }

    public function delete_data($where)
    {
        $this->db->where($where);
        return $this->db->delete('tbl_admin');
    }
}
