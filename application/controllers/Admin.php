<?php

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
        $this->load->model('login_model');
        $this->load->model('act_model');
        if($this->login_model->is_role() != "1"){
            // echo'sorry, you dont have access';
            redirect('login');
        }
    }

    public function index()
    {
        $data['page']='eks_saham';
        $data['saham']=$this->admin_model->getFinalSaham();
        $this->load->view('templates/header',$data);
        $this->load->view('admin/eksperimen_saham',$data);
        $this->load->view('templates/footer');
    }

    public function showFinal()
    {
        echo json_encode($this->admin_model->getFinalSaham());
    }

    public function eks_bank()
    {
        $data['page']='eks_bank';
        $data['bank']=$this->admin_model->getFinalBank();
        $this->load->view('templates/header',$data);
        $this->load->view('admin/eksperimen_bank',$data);
        $this->load->view('templates/footer');
    }

    public function raw()
    {
        $data['page']='raw';
        $data['bank']=$this->admin_model->getRawBank();
        $data['saham']=$this->admin_model->getRawSaham();
        $this->load->view('templates/header',$data);
        $this->load->view('admin/raw',$data);
        $this->load->view('templates/footer');
    }

    public function user()
    {
        $data['page']='admin';
        if($this->input->get('filter_sesi', true)||$this->input->get('filter_status', true)){
            $data['user']=$this->admin_model->getSearchUser();
        }else{
            $data['user']=$this->admin_model->getUser();
        }
        
        $this->load->view('templates/header',$data);
        $this->load->view('admin/user',$data);
        $this->load->view('templates/footer');
    }

    public function addUser()
    {
        $i = 0;
        $jml=$this->input->post('jumlah', true);
        $sesi=$this->input->post('sesi', true);
        $tipe=$this->input->post('tipe', true);
        if($sesi=='' || $tipe==''){
            $this->session->set_flashdata('error', 'Harap Pilih Sesi / Tipe Responden');
        }else{
            while ($i < $jml)
            {
                $ins = $this->admin_model->addUser();
                sleep(2);
                $i++;
            }
            if($ins==true)
            {
                $this->session->set_flashdata('success', 'Data Berhasil Disimpan');
            }
        }
        redirect('admin/user');
    }

    public function deleteUser($id)
    {
        $del = $this->admin_model->deleteUser($id);
        if($del==true)
        {
            $this->session->set_flashdata('error', 'Data Berhasil Dihapus');
        }
        redirect('admin/user');
    }

    public function config()
    {
        $data['page']='config';
        $data['config']=$this->act_model->getConfig();
        $this->load->view('templates/header',$data);
        $this->load->view('admin/config',$data);
        $this->load->view('templates/footer');
    }

    public function updateConfig()
    {
        $upd = $this->act_model->updateConfig();
        if($upd ==true)
        {
            $this->session->set_flashdata('success', 'Data Berhasil Disimpan');
        }
        redirect('admin/config');
    }

    public function resetTable()
    {
        $upd = $this->admin_model->resetTable();
        if($upd ==true)
        {
            $this->session->set_flashdata('error', 'Data Berhasil Direset');
        }
        redirect('admin/config');
    }

    public function dataSaham()
    {
        $data['page']='dataSaham';
        $data['saham']= $this->admin_model->getAnswerSaham();
        $this->load->view('templates/header',$data);
        $this->load->view('admin/dataSaham',$data);
        $this->load->view('templates/footer');
    }

    public function dataBank()
    {
        $data['page']='dataBank';
        $data['bank']= $this->admin_model->getAnswerBank();
        $this->load->view('templates/header',$data);
        $this->load->view('admin/dataBank',$data);
        $this->load->view('templates/footer');
    }

    public function detailSaham($id)
    {
        $data['page']='dataSaham';
        $data['saham']= $this->admin_model->getDetailAnswerSaham($id);
        $data['user']= $this->admin_model->getAccCode($id);
        $this->load->view('templates/header',$data);
        $this->load->view('admin/detailSaham',$data);
        $this->load->view('templates/footer');
    }

    public function detailBank($id)
    {
        $data['page']='dataBank';
        $data['bank']= $this->admin_model->getDetailAnswerBank($id);
        $data['user']= $this->admin_model->getAccCode($id);
        $this->load->view('templates/header',$data);
        $this->load->view('admin/detailBank',$data);
        $this->load->view('templates/footer');
    }


}