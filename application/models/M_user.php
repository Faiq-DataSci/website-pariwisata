<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_user extends CI_Model
{
    public function __construct()
    {
        parent::__construct();

        $query = "
            CREATE TABLE IF NOT EXISTS tbl_users (
                id_user INT(11) AUTO_INCREMENT PRIMARY KEY,
                nama_lengkap VARCHAR(255) DEFAULT NULL,
                email VARCHAR(255) NOT NULL,
                provider VARCHAR(50) NOT NULL,
                provider_id VARCHAR(255) NOT NULL,
                avatar VARCHAR(255) DEFAULT NULL,
                created_at DATETIME NULL,
                updated_at DATETIME NULL,
                UNIQUE KEY unique_email_provider (email, provider)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
        ";
        $this->db->query($query);
    }

    public function get_by_provider($provider, $provider_id)
    {
        return $this->db->get_where('tbl_users', array(
            'provider' => $provider,
            'provider_id' => $provider_id
        ))->row();
    }

    public function get_by_email($email)
    {
        return $this->db->get_where('tbl_users', array('email' => $email))->row();
    }

    public function insert_user($data)
    {
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');
        $this->db->insert('tbl_users', $data);
        return $this->db->insert_id();
    }

    public function update_user($data, $where)
    {
        $data['updated_at'] = date('Y-m-d H:i:s');
        $this->db->where($where);
        $this->db->update('tbl_users', $data);
        return $this->db->affected_rows();
    }

    public function find_or_create_social_user($provider, $provider_id, $email, $name, $avatar = null)
    {
        $user = $this->get_by_provider($provider, $provider_id);

        if (!$user && !empty($email)) {
            $user = $this->get_by_email($email);
        }

        $data = array(
            'nama_lengkap' => $name,
            'email' => $email,
            'provider' => $provider,
            'provider_id' => $provider_id,
            'avatar' => $avatar
        );

        if ($user) {
            $this->update_user($data, array('id_user' => $user->id_user));
            return $this->get_by_provider($provider, $provider_id) ?: $this->get_by_email($email);
        }

        $this->insert_user($data);
        return $this->get_by_provider($provider, $provider_id);
    }
}
