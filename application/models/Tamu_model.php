<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tamu_model extends CI_Model
{
    private $table = 'tamu';

    public function getAll()
    {
        return $this->db->get($this->table)->result();
    }

    public function insert($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function getById($id)
    {
        return $this->db->get_where($this->table, [
            'id_tamu' => $id
        ])->row();
    }

    public function update($id, $data)
    {
        return $this->db->update($this->table, $data, [
            'id_tamu' => $id
        ]);
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, [
            'id_tamu' => $id
        ]);
    }
}