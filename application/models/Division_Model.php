<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Division_Model extends CI_Model
{
    public function get_all_data()
    {
        $this->db->select('id, name');
        $this->db->from('division');
        $this->db->order_by('id', 'DESC');
        $this->db->limit(5);
        return $this->db->get();
    }

    public function get_detail_data($id)
    {
        return $this->db->get_where('division', ['id' => $id]);
    }

    public function save_data()
    {
        $value = [
            'name' => $this->input->post('name', true)
        ];

        $this->db->insert('division', $value);
    }

    public function update_data()
    {
        $value = [
            'id' => $this->input->post('id', true),
            'name' => $this->input->post('name', true)
        ];

        $this->db->where('id', $this->input->post('id'));

        $this->db->update('division', $value);
    }

    public function delete_data($id) 
    {
        // $this->db->where('id', $id);
        // $this->db->delete('division');

        $this->db->delete('division', ['id' => $id]);
    }
}
