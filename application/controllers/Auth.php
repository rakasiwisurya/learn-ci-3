<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('auth_model');
        $this->load->library('form_validation');
    }

    public function login()
    {
        $data['title'] = 'Login';

        $this->load->view('auth/login', $data);
    }

    public function sign_in()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        $this->form_validation->set_message('required', '%s is empty');
        $this->form_validation->set_message('valid_email', '%s must be valid email');

        if ($this->form_validation->run() == FALSE) {
            $this->login();
        } else {
            $check_email_user = $this->db->get_where('user', ['email' => $this->input->post('email', true)])->row();

            if ($check_email_user) {
                if (password_verify($this->input->post('password'), $check_email_user->password)) {
                    $session_user = [
                        'id' => $check_email_user->id,
                        'level' => $check_email_user->level
                    ];

                    $this->session->set_userdata($session_user);

                    redirect('member');
                } else {
                    $this->session->set_flashdata('message', 'Your password is wrong');
                    redirect('auth/login');
                }
            } else {
                $this->session->set_flashdata('message', 'Email doesnt registered yet');
                redirect('auth/login');
            }
        }
    }

    public function sign_out()
    {
        session_destroy();
        redirect('auth/login')
    }

    public function registration()
    {
        $data['title'] = 'Account Registration';

        $this->load->view('auth/registration', $data);
    }

    public function register()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|matches[confirm_password]|min_length[4]');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|trim|matches[password]|min_length[4]');

        $this->form_validation->set_message('required', '%s is empty');
        $this->form_validation->set_message('valid_email', '%s must be valid email');
        $this->form_validation->set_message('matches', '%s must be match');
        $this->form_validation->set_message('min_length', '%s must be minimum 4 character');

        if ($this->form_validation->run() == FALSE) {
            $this->registration();
        } else {
            $this->session->set_flashdata('message', 'Success Registration');
            $this->auth_model->save_data();
            redirect('auth/registration');
        }
    }
}
