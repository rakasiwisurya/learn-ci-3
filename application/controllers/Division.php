<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Division extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('division_model');
    }

    public function index()
    {
        $data['title'] = 'Division';
        $data['divisions'] = $this->division_model->get_all_data()->result();

        $this->load->view('templates/header', $data);
        $this->load->view('division/index', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $data['title'] = 'Add Division';

        $this->load->view('templates/header', $data);
        $this->load->view('division/add', $data);
        $this->load->view('templates/footer');
    }

    public function save()
    {
        $this->division_model->save_data();
        redirect('division');
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Division';
        $data['division'] = $this->division_model->get_detail_data($id)->row();

        $this->load->view('templates/header', $data);
        $this->load->view('division/edit', $data);
        $this->load->view('templates/footer');
    }

    public function update()
    {
        $this->division_model->update_data();
        redirect('division');
    }

    public function delete($id)
    {
        $this->division_model->delete_data($id);
        redirect('division');
    }
}
