<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        // Cek login
        if (!$this->session->userdata('login')) {
            redirect('login');
        }

        $this->load->model('Pembayaran_model');
    }

    public function index()
    {
        $data['pembayaran'] = $this->Pembayaran_model->getAll();

        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('pembayaran/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->input->post()) {

            $data = [
                'id_pemesanan'       => $this->input->post('id_pemesanan'),
                'tanggal_bayar'      => $this->input->post('tanggal_bayar'),
                'total_bayar'        => $this->input->post('total_bayar'),
                'metode_pembayaran'  => $this->input->post('metode_pembayaran'),
                'status'             => $this->input->post('status')
            ];

            $this->Pembayaran_model->insert($data);

            redirect('pembayaran');
        }

        $data['pemesanan'] = $this->Pembayaran_model->getPemesanan();

        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('pembayaran/tambah', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id)
    {
        if ($this->input->post()) {

            $data = [
                'id_pemesanan'       => $this->input->post('id_pemesanan'),
                'tanggal_bayar'      => $this->input->post('tanggal_bayar'),
                'total_bayar'        => $this->input->post('total_bayar'),
                'metode_pembayaran'  => $this->input->post('metode_pembayaran'),
                'status'             => $this->input->post('status')
            ];

            $this->Pembayaran_model->update($id, $data);

            redirect('pembayaran');
        }

        $data['pemesanan'] = $this->Pembayaran_model->getPemesanan();
        $data['pembayaran'] = $this->Pembayaran_model->getById($id);

        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('pembayaran/edit', $data);
        $this->load->view('templates/footer');
    }

    public function hapus($id)
    {
        $this->Pembayaran_model->delete($id);

        redirect('pembayaran');
    }
}