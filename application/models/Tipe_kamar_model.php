<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tipe_kamar_model extends CI_Model
{

    private $table = 'tipe_kamar';

    public function getAll()
    {
        return $this->db->get($this->table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->table, [
            'id_tipe' => $id
        ])->row();
    }

    public function insert($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function update($id, $data)
    {
        return $this->db
            ->where('id_tipe', $id)
            ->update($this->table, $data);
    }

    public function delete($id)
    {
        return $this->db
            ->where('id_tipe', $id)
            ->delete($this->table);
    }

}