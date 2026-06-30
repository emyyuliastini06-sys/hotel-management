<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kamar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

    
        if (!$this->session->userdata('login')) {
            redirect('login');
        }

        $this->load->model('Kamar_model');
    }

    public function index()
    {
        $data['kamar'] = $this->Kamar_model->get_all();

        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('kamar/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->input->post()) {

            $data = [
                'nomor_kamar' => $this->input->post('nomor_kamar'),
                'id_tipe'     => $this->input->post('id_tipe'),
                'status'      => $this->input->post('status')
            ];

            $this->Kamar_model->insert($data);

            redirect('kamar');
        }

        $data['tipe'] = $this->Kamar_model->get_tipe();

        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('kamar/tambah', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id)
    {
        if ($this->input->post()) {

            $data = [
                'nomor_kamar' => $this->input->post('nomor_kamar'),
                'id_tipe'     => $this->input->post('id_tipe'),
                'status'      => $this->input->post('status')
            ];

            $this->Kamar_model->update($id, $data);

            redirect('kamar');
        }

        $data['kamar'] = $this->Kamar_model->getById($id);
        $data['tipe']  = $this->Kamar_model->get_tipe();

        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('kamar/edit', $data);
        $this->load->view('templates/footer');
    }

    public function hapus($id)
    {
        $this->Kamar_model->delete($id);

        redirect('kamar');
    }
}