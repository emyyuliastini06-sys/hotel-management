<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tamu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if (!$this->session->userdata('login')) {
            redirect('login');
        }

        $this->load->model('Tamu_model');
    }

    public function index()
    {
        $data['tamu'] = $this->Tamu_model->getAll();

        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('tamu/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->input->post()) {

            $data = [
                'nik'             => $this->input->post('nik'),
                'nama_tamu'       => $this->input->post('nama_tamu'),
                'jenis_kelamin'   => $this->input->post('jenis_kelamin'),
                'no_hp'           => $this->input->post('no_hp'),
                'alamat'          => $this->input->post('alamat')
            ];

            $this->Tamu_model->insert($data);

            redirect('tamu');
        }

        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('tamu/tambah');
        $this->load->view('templates/footer');
    }

    public function edit($id)
    {
        if ($this->input->post()) {

            $data = [
                'nik'             => $this->input->post('nik'),
                'nama_tamu'       => $this->input->post('nama_tamu'),
                'jenis_kelamin'   => $this->input->post('jenis_kelamin'),
                'no_hp'           => $this->input->post('no_hp'),
                'alamat'          => $this->input->post('alamat')
            ];

            $this->Tamu_model->update($id,$data);

            redirect('tamu');
        }

        $data['tamu'] = $this->Tamu_model->getById($id);

        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('tamu/edit',$data);
        $this->load->view('templates/footer');
    }

    public function hapus($id)
    {
        $this->Tamu_model->delete($id);

        redirect('tamu');
    }
}