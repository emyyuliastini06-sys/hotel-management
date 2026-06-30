<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemesanan_model extends CI_Model
{
    private $table = 'pemesanan';

    public function getAll()
    {
        $this->db->select('
            pemesanan.*,
            tamu.nama_tamu,
            kamar.nomor_kamar
        ');

        $this->db->from('pemesanan');

        $this->db->join('tamu','tamu.id_tamu=pemesanan.id_tamu');

        $this->db->join('kamar','kamar.id_kamar=pemesanan.id_kamar');

        return $this->db->get()->result();
    }

    public function getTamu()
    {
        return $this->db->get('tamu')->result();
    }

    public function getKamar()
    {
        return $this->db->get('kamar')->result();
    }

    public function insert($data)
    {
        return $this->db->insert($this->table,$data);
    }

    public function getById($id)
    {
        return $this->db->get_where(
            $this->table,
            ['id_pemesanan'=>$id]
        )->row();
    }

    public function update($id,$data)
    {
        return $this->db->update(
            $this->table,
            $data,
            ['id_pemesanan'=>$id]
        );
    }

    public function delete($id)
    {
        return $this->db->delete(
            $this->table,
            ['id_pemesanan'=>$id]
        );
    }
}