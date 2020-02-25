<?php

class User_model extends CI_Model
{
    public function getAllUser()
    {
        $query = $this->db->get_where('user', ['role_id' => 2]);
        return $query->result_array();
    }

    public function tambahDataUser()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "email" => $this->input->post('email', true)
        ];

        $this->db->insert('user', $data);
    }

    public function hapusDataUser($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user');
    }

    public function getUserById($id)
    {
        return $this->db->get_where('user', ['id' => $id])->row_array();
    }

    public function ubahDataUser()
    {
        $data = [
            "name" => $this->input->post('name', true),
            "email" => $this->input->post('email', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user', $data);
    }
}
