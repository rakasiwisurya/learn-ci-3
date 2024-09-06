<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Member extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('member_model');
    }

    public function index()
    {
        $data['title'] = 'Member';
        $data['members'] = $this->member_model->get_all_data()->result();

        $this->load->view('templates/header', $data);
        $this->load->view('member/index', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $data['title'] = 'Add Member';

        $this->load->view('templates/header', $data);
        $this->load->view('member/add', $data);
        $this->load->view('templates/footer');
    }

    public function save()
    {
        $this->member_model->save_data();
        redirect('member');
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Member';
        $data['member'] = $this->member_model->get_detail_data($id)->row();

        $this->load->view('templates/header', $data);
        $this->load->view('member/edit', $data);
        $this->load->view('templates/footer');
    }

    public function update()
    {
        $this->member_model->update_data();
        redirect('member');
    }

    public function delete($id)
    {
        $this->member_model->delete_data($id);
        redirect('member');
    }
}
