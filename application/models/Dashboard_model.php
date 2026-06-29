<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model{

    public function jumlah_kamar()
    {
        return $this->db->count_all('kamar');
    }

    public function jumlah_tipe()
    {
        return $this->db->count_all('tipe_kamar');
    }

    public function jumlah_tamu()
    {
        return $this->db->count_all('tamu');
    }

    public function jumlah_booking()
    {
        return $this->db->count_all('pemesanan');
    }

}