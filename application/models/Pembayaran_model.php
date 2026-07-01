<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran_model extends CI_Model
{
    private $table = 'pembayaran';

    public function getAll()
    {
        $this->db->select('
            pembayaran.*,
            tamu.nama_tamu,
            kamar.nomor_kamar
        ');

        $this->db->from('pembayaran');
        $this->db->join('pemesanan', 'pemesanan.id_pemesanan = pembayaran.id_pemesanan');
        $this->db->join('tamu', 'tamu.id_tamu = pemesanan.id_tamu');
        $this->db->join('kamar', 'kamar.id_kamar = pemesanan.id_kamar');

        return $this->db->get()->result();
    }

    public function getPemesanan()
    {
        $this->db->select('
            pemesanan.id_pemesanan,
            tamu.nama_tamu,
            kamar.nomor_kamar
        ');

        $this->db->from('pemesanan');
        $this->db->join('tamu', 'tamu.id_tamu = pemesanan.id_tamu');
        $this->db->join('kamar', 'kamar.id_kamar = pemesanan.id_kamar');

        return $this->db->get()->result();
    }

    public function insert($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function getById($id)
    {
        return $this->db->get_where($this->table, [
            'id_pembayaran' => $id
        ])->row();
    }

    public function update($id, $data)
    {
        return $this->db->update(
            $this->table,
            $data,
            ['id_pembayaran' => $id]
        );
    }

    public function delete($id)
    {
        return $this->db->delete(
            $this->table,
            ['id_pembayaran' => $id]
        );
    }
}