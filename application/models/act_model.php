<?php

class act_model extends CI_Model
{

    public function insertBank()
    {
        $id_user=$this->input->post('id_user', true);
        $tipe=$this->input->post('tipe', true);
        $indeks=$this->input->post('indeks', true);
        $persentase=$this->input->post('persentase', true);
        $query = $this->db->get_where('eks_bank', ['id_user' => $id_user,'tipe' => $tipe,'indeks' => $indeks,'persentase' => $persentase]);
        if ($query->num_rows() == 0) {
            $data = [
                "id_user" => $this->input->post('id_user'),
                "tipe" => $this->input->post('tipe'),
                "indeks" => $this->input->post('indeks'),
                "persentase" => $this->input->post('persentase'),
                "jawaban" => $this->input->post('jawaban'),
                "waktu_isi" => date('Y-m-d H:i:s')
            ];
            $this->db->insert('eks_bank', $data);
            return true;
        }else{
            $this->db->set('jawaban',  $this->input->post('jawaban'));
            $this->db->set('waktu_isi', date('Y-m-d H:i:s') );
            $this->db->where('id_user', $this->input->post('id_user'));
            $this->db->where('tipe', $this->input->post('tipe'));
            $this->db->where('indeks', $this->input->post('indeks'));
            $this->db->where('persentase', $this->input->post('persentase'));
            $this->db->update('eks_bank');
            return true;
        }
        return false; 
    }

    public function insertSaham()
    {
        $id_user=$this->input->post('id_user', true);
        $tipe=$this->input->post('tipe', true);
        $indeks=$this->input->post('indeks', true);
        $persentase=$this->input->post('persentase', true);
        $query = $this->db->get_where('eks_saham', ['id_user' => $id_user,'tipe' => $tipe,'indeks' => $indeks,'persentase' => $persentase]);
        if ($query->num_rows() == 0) {
            $data = [
                "id_user" => $this->input->post('id_user'),
                "tipe" => $this->input->post('tipe'),
                "indeks" => $this->input->post('indeks'),
                "persentase" => $this->input->post('persentase'),
                "jawaban" => $this->input->post('jawaban'),
                "waktu_isi" => date('Y-m-d H:i:s')
            ];
            $this->db->insert('eks_saham', $data);
            return true;
        }else{
            $this->db->set('jawaban',  $this->input->post('jawaban'));
            $this->db->set('waktu_isi', date('Y-m-d H:i:s') );
            $this->db->where('id_user', $this->input->post('id_user'));
            $this->db->where('tipe', $this->input->post('tipe'));
            $this->db->where('indeks', $this->input->post('indeks'));
            $this->db->where('persentase', $this->input->post('persentase'));
            $this->db->update('eks_saham');
            return true;
        }
        return false; 
    }

    public function getCountSaham()
    {
        return $this->db->get('v_done')->result_array();
    }

    public function getDataBank()
    {
        return $this->db->get('v_res_bank')->result_array();
    }
}