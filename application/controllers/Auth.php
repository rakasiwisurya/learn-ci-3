<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('auth_model');
    }

    public function index() {}

    public function registration()
    {
        $data['title'] = 'Account Registration';

        $this->load->view('auth/registration', $data);
    }

    public function register()
    {
        $this->session->set_flashdata('message', 'Success Registration');
        $this->auth_model->save_data();
        redirect('auth/registration');
    }
}
