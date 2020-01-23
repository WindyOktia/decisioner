<?php

class Admin extends CI_Controller
{
    public function index()
    {
        $data['page']='eks_1';
        $this->load->view('templates/header',$data);
        $this->load->view('eksperimen_1/index');
        $this->load->view('templates/footer');
    }

    public function eks_2()
    {
        $data['page']='eks_2';
        $this->load->view('templates/header',$data);
        $this->load->view('eksperimen_2/index');
        $this->load->view('templates/footer');
    }

    public function eks_3()
    {
        $data['page']='eks_3';
        $this->load->view('templates/header',$data);
        $this->load->view('eksperimen_3/index');
        $this->load->view('templates/footer');
    }

    public function addEks_1()
    {
        $data['page']='eks_1';
        $this->load->view('templates/header',$data);
        $this->load->view('eksperimen_1/tambahSimulasi');
        $this->load->view('templates/footer');
    }

    public function addEks_2()
    {
        $data['page']='eks_2';
        $this->load->view('templates/header',$data);
        $this->load->view('eksperimen_2/tambahSimulasi');
        $this->load->view('templates/footer');
    }

    public function addEks_3()
    {
        $data['page']='eks_3';
        $this->load->view('templates/header',$data);
        $this->load->view('eksperimen_3/tambahSimulasi');
        $this->load->view('templates/footer');
    }

    public function detail()
    {
        $data['page']='eks_1';
        $this->load->view('templates/header',$data);
        $this->load->view('eksperimen_1/detail');
        $this->load->view('templates/footer');
    }

    public function detail_2()
    {
        $data['page']='eks_2';
        $this->load->view('templates/header',$data);
        $this->load->view('eksperimen_2/detail');
        $this->load->view('templates/footer');
    }
    public function detail_3()
    {
        $data['page']='eks_3';
        $this->load->view('templates/header',$data);
        $this->load->view('eksperimen_3/detail');
        $this->load->view('templates/footer');
    }


}