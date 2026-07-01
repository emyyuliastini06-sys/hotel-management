<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if (!$this->session->userdata('login')) {
            redirect('login');
        }

        $this->load->model('Laporan_model');
    }

    public function index()
    {
        $data['total_tamu']        = $this->Laporan_model->totalTamu();
        $data['total_kamar']       = $this->Laporan_model->totalKamar();
        $data['total_pemesanan']   = $this->Laporan_model->totalPemesanan();
        $data['total_pembayaran']  = $this->Laporan_model->totalPembayaran();
        $data['total_pendapatan']  = $this->Laporan_model->totalPendapatan();

        $data['laporan'] = $this->Laporan_model->getLaporan();

        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('laporan/index', $data);
        $this->load->view('templates/footer');
    }
}