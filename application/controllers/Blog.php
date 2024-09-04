<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'My First Blog';
        $data['heading'] = 'My First Blog';
        $data['message'] = 'This is my first blog which build using Codeigniter 3 Framework.';

        $this->load->view('templates/header', $data);
        $this->load->view('blog', $data);
        $this->load->view('templates/footer');
    }
}
