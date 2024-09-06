<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Member_Model extends CI_Model
{
    public function get_all_data()
    {
        // $this->db->select('*');
        // $this->db->from('member');
        // $this->db->order_by('id', 'DESC');
        // return $this->db->get();
        
        return $this->db->get('member');
    }

    public function get_detail_data($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('member');
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

    public function update_data()
    {
        // $this->db->set('name', $this->input->post('name'));
        // $this->db->set('email', $this->input->post('email'));
        // $this->db->set('position', $this->input->post('position'));

        // $this->db->where('id', $this->input->post('id'));

        // $this->db->update('member');

        $value = [
            'id' => $this->input->post('id', true),
            'name' => $this->input->post('name', true),
            'email' => $this->input->post('email', true),
            'position' => $this->input->post('position', true),
        ];

        $this->db->where('id', $this->input->post('id'));

        $this->db->update('member', $value);
    }
}
