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
}
