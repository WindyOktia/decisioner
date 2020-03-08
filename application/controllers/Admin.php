<?php

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
        $this->load->model('login_model');
        if($this->login_model->is_role() != "1"){
            // echo'sorry, you dont have access';
            redirect('login');
        }
    }

    public function index()
    {
        $data['page']='eks_saham';
        $this->load->view('templates/header',$data);
        $this->load->view('admin/eksperimen_saham');
        $this->load->view('templates/footer');
    }

    public function eks_bank()
    {
        $data['page']='eks_bank';
        $this->load->view('templates/header',$data);
        $this->load->view('admin/eksperimen_bank');
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
            $this->session->set_flashdata('success', 'Data Berhasil Dihapus');
        }
        redirect('admin/user');
    }

    





}