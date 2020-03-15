<?php
class Login_model extends CI_Model
{
    function login($acc)
    {   
        $this->db->where('access_code',$acc);
        $result = $this->db->get('user',1);
        return $result;
    }

    function update($acc,$stat)
    {
        $this->db->set('status', $stat);
        $this->db->where('access_code', $acc);
        $this->db->update('user');
    }

    function is_role()
    {
        return $this->session->userdata('role');
    }
}