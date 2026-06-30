<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tipe_kamar extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        // Cek login
        if (!$this->session->userdata('login')) {
            redirect('login');
        }

        $this->load->model('Tipe_kamar_model');
    }

    public function index()
    {
        $data['tipe_kamar'] = $this->Tipe_kamar_model->getAll();

        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('tipe_kamar/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
{
    if ($this->input->post()) {

        $data = [
            'nama_tipe'  => $this->input->post('nama_tipe'),
            'harga'      => $this->input->post('harga'),
            'kapasitas'  => $this->input->post('kapasitas'),
            'keterangan' => $this->input->post('keterangan')
        ];

        $this->Tipe_kamar_model->insert($data);

        redirect('tipe_kamar');
    }

    $this->load->view('templates/header');
    $this->load->view('templates/navbar');
    $this->load->view('templates/sidebar');
    $this->load->view('tipe_kamar/tambah');
    $this->load->view('templates/footer');
}
public function edit($id)
{
    if ($this->input->post()) {

        $data = [
            'nama_tipe'  => $this->input->post('nama_tipe'),
            'harga'      => $this->input->post('harga'),
            'kapasitas'  => $this->input->post('kapasitas'),
            'keterangan' => $this->input->post('keterangan')
        ];

        $this->Tipe_kamar_model->update($id, $data);

        redirect('tipe_kamar');
    }

    $data['tipe'] = $this->Tipe_kamar_model->getById($id);

    $this->load->view('templates/header');
    $this->load->view('templates/navbar');
    $this->load->view('templates/sidebar');
    $this->load->view('tipe_kamar/edit', $data);
    $this->load->view('templates/footer');
}

public function hapus($id)
{
    $this->Tipe_kamar_model->delete($id);

    redirect('tipe_kamar');
}

}