<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_model extends CI_Model
{
    public function totalTamu()
    {
        return $this->db->count_all('tamu');
    }

    public function totalKamar()
    {
        return $this->db->count_all('kamar');
    }

    public function totalPemesanan()
    {
        return $this->db->count_all('pemesanan');
    }

    public function totalPembayaran()
    {
        return $this->db->count_all('pembayaran');
    }

    public function totalPendapatan()
    {
        $this->db->select_sum('total_bayar');
        $this->db->where('status', 'Lunas');

        $hasil = $this->db->get('pembayaran')->row();

        return $hasil->total_bayar;
    }

    public function getLaporan()
    {
        $this->db->select('
            pembayaran.*,
            tamu.nama_tamu,
            kamar.nomor_kamar
        ');

        $this->db->from('pembayaran');

        $this->db->join(
            'pemesanan',
            'pemesanan.id_pemesanan = pembayaran.id_pemesanan'
        );

        $this->db->join(
            'tamu',
            'tamu.id_tamu = pemesanan.id_tamu'
        );

        $this->db->join(
            'kamar',
            'kamar.id_kamar = pemesanan.id_kamar'
        );

        $this->db->order_by('tanggal_bayar', 'DESC');

        return $this->db->get()->result();
    }
}