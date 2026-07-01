<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemesanan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if (!$this->session->userdata('login')) {
            redirect('login');
        }

        $this->load->model('Pemesanan_model');
    }

    public function index()
    {
        $data['pemesanan'] = $this->Pemesanan_model->getAll();

        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('pemesanan/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->input->post()) {

            $data = [
                'id_tamu'           => $this->input->post('id_tamu'),
                'id_kamar'          => $this->input->post('id_kamar'),
                'tanggal_checkin'   => $this->input->post('tanggal_checkin'),
                'tanggal_checkout'  => $this->input->post('tanggal_checkout'),
                'jumlah_tamu'       => $this->input->post('jumlah_tamu'),
                'status'            => $this->input->post('status')
            ];

            $this->Pemesanan_model->insert($data);

            redirect('pemesanan');
        }

        $data['tamu'] = $this->Pemesanan_model->getTamu();
        $data['kamar'] = $this->Pemesanan_model->getKamar();

        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('pemesanan/tambah',$data);
        $this->load->view('templates/footer');
    }

    public function edit($id)
    {
        if ($this->input->post()) {

            $data = [
                'id_tamu'           => $this->input->post('id_tamu'),
                'id_kamar'          => $this->input->post('id_kamar'),
                'tanggal_checkin'   => $this->input->post('tanggal_checkin'),
                'tanggal_checkout'  => $this->input->post('tanggal_checkout'),
                'jumlah_tamu'       => $this->input->post('jumlah_tamu'),
                'status'            => $this->input->post('status')
            ];

            $this->Pemesanan_model->update($id,$data);

            redirect('pemesanan');
        }

        $data['tamu'] = $this->Pemesanan_model->getTamu();
        $data['kamar'] = $this->Pemesanan_model->getKamar();
        $data['pemesanan'] = $this->Pemesanan_model->getById($id);

        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('pemesanan/edit',$data);
        $this->load->view('templates/footer');
    }

    public function hapus($id)
    {
        $this->Pemesanan_model->delete($id);

        redirect('pemesanan');
    }
    public function checkin($id)
{
    $this->Pemesanan_model->update($id, [
        'status' => 'Check In'
    ]);

    // Ambil data pemesanan
    $pemesanan = $this->Pemesanan_model->getById($id);

    // Update status kamar
    $this->db->where('id_kamar', $pemesanan->id_kamar);
    $this->db->update('kamar', [
        'status' => 'Terisi'
    ]);

    redirect('pemesanan');
}

public function checkout($id)
{
    $this->Pemesanan_model->update($id, [
        'status' => 'Check Out'
    ]);

    // Ambil data pemesanan
    $pemesanan = $this->Pemesanan_model->getById($id);

    // Update status kamar
    $this->db->where('id_kamar', $pemesanan->id_kamar);
    $this->db->update('kamar', [
        'status' => 'Tersedia'
    ]);

    redirect('pemesanan');
}
}