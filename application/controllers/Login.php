<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');
    }

    public function index()
    {
        $this->load->view('login');
    }

    public function proses()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->Login_model->cek_login($username, $password);

        if($user){

            $this->session->set_userdata([
                'id_user' => $user->id_user,
                'username' => $user->username,
                'role' => $user->role,
                'login' => TRUE
            ]);

            redirect('dashboard');

        }else{

            $this->session->set_flashdata('error','Username atau Password salah');

            redirect('login');

        }

    }
    public function logout()
{
    $this->session->sess_destroy();
    redirect('login');
}
}