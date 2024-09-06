<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_Model extends CI_Model
{
    public function save_data()
    {
        $value = [
            'name' => $this->input->post('name', true),
            'email' => $this->input->post('email', true),
            'password' => password_hash($this->input->post('password', true), PASSWORD_DEFAULT),
            'level' => $this->input->post('level', true)
        ];

        $this->db->insert('user', $value);
    }
}
