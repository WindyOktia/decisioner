<?php

class Admin_model extends CI_Model
{
    public function addUser()
    {
        $seed = str_split('12345'
                 .'ABCDEFGHIJKLMNOPQRSTUVWXYZ'); // and any other characters
        shuffle($seed); // probably optional since array_is randomized; this may be redundant
        $rand = '';
        foreach (array_rand($seed, 5) as $k) $rand .= $seed[$k];
        $data = [
            "nama_user" => 'Responden',
            "session" => $this->input->post('sesi', true),
            "role" => $this->input->post('tipe', true),
            "access_code" => $rand
        ];
        $this->db->insert('user', $data);
        return true;
    }

    public function getRawBank()
    {
        return $this->db->get('eks_bank')->result_array();
    }

    public function getRawSaham()
    {
        return $this->db->get('eks_saham')->result_array();
    }

    public function getUser()
    {
        return $this->db->get('user')->result_array();
    }

    public function getSearchUser()
    {
    
        $this->db->select('*');
        $this->db->where('status', $this->input->get('filter_status', true));
        $this->db->where('session', $this->input->get('filter_sesi', true));
       
    
        $query = $this->db->get('user');
        return $query->result_array();
    }

    public function deleteUser($id)
    {
        $this->db->where('id_user', $id);
        $this->db->delete('user');
        return true;
    }

    public function resetTable()
    {
        $this->db->truncate('eks_bank');
        $this->db->truncate('eks_saham');
        return true;
    }

    public function getFinalSaham()
    {
        return $this->db->get('v_final_saham')->result_array();
    }

    public function getFinalBank()
    {
        return $this->db->get('v_final_bank')->result_array();
    }
}