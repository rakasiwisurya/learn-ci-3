<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('blog_model');
    }

    public function index()
    {
        $data['title'] = 'My First Blog';
        $data['heading'] = 'My First Blog';
        $data['messages'] = [
            'This is my first blog which build using Codeigniter 3 Framework.',
            'This is my second blog which build using Codeigniter 3 Framework.',
            'This is my third blog which build using Codeigniter 3 Framework.',
            'This is my fourth blog which build using Codeigniter 3 Framework.',
            'This is my fifth blog which build using Codeigniter 3 Framework.',
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('blog', $data);
        $this->load->view('templates/footer');
    }
}
