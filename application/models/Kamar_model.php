<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kamar_model extends CI_Model
{
    private $table = 'kamar';

    public function get_all()
    {
        $this->db->select('kamar.*, tipe_kamar.nama_tipe');
        $this->db->from('kamar');
        $this->db->join('tipe_kamar', 'tipe_kamar.id_tipe = kamar.id_tipe');

        return $this->db->get()->result();
    }

    public function get_tipe()
    {
        return $this->db->get('tipe_kamar')->result();
    }

    public function insert($data)
    {
        return $this->db->insert($this->table,$data);
    }

    public function getById($id)
    {
        return $this->db->get_where($this->table,['id_kamar'=>$id])->row();
    }

    public function update($id,$data)
    {
        return $this->db->update($this->table,$data,['id_kamar'=>$id]);
    }

    public function delete($id)
    {
        return $this->db->delete($this->table,['id_kamar'=>$id]);
    }
}