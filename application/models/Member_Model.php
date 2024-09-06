<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Member_Model extends CI_Model
{
    public function get_all_data()
    {
        $this->db->select('*');
        $this->db->from('member');
        $this->db->order_by('id', 'DESC');
        return $this->db->get();
    }

    public function save_data()
    {
        $value = [
            'name' => $this->input->post('name', true),
            'email' => $this->input->post('email', true),
            'position' => $this->input->post('position', true),
        ];

        $this->db->insert('member', $value);
    }
}
