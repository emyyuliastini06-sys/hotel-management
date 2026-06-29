<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{

    public function __construct()
    {
        parent::__construct();

        if(!$this->session->userdata('login')){
            redirect('login');
        }

        $this->load->model('Dashboard_model');
    }

    public function index()
    {
        $data['jumlah_kamar']   = $this->Dashboard_model->jumlah_kamar();
        $data['jumlah_tipe']    = $this->Dashboard_model->jumlah_tipe();
        $data['jumlah_tamu']    = $this->Dashboard_model->jumlah_tamu();
        $data['jumlah_booking'] = $this->Dashboard_model->jumlah_booking();

        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('dashboard/index',$data);
        $this->load->view('templates/footer');
    }

}