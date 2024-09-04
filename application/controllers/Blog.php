<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'My First Blog';
        $data['blog'] = 'Second';
        $this->load->view('blog', $data);
    }
}
