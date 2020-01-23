<?php

class Responden extends CI_Controller
{
    public function index()
    {
        $data['page']='grupA';
        $this->load->view('templates/header_res',$data);
        $this->load->view('responden/res_A');
        $this->load->view('templates/footer');
    }

    public function a1()
    {
        $data['page']='grupA';
        $this->load->view('templates/header_res',$data);
        $this->load->view('res_eks_1/1');
        $this->load->view('templates/footer');
    }

    public function a12()
    {
        $data['page']='grupA';
        $this->load->view('templates/header_res',$data);
        $this->load->view('res_eks_1/2');
        $this->load->view('templates/footer');
    }

    public function a13()
    {
        $data['page']='grupA';
        $this->load->view('templates/header_res',$data);
        $this->load->view('res_eks_1/3');
        $this->load->view('templates/footer');
    }

    public function a14()
    {
        $data['page']='grupA';
        $this->load->view('templates/header_res',$data);
        $this->load->view('res_eks_1/4');
        $this->load->view('templates/footer');
    }

    public function a15()
    {
        $data['page']='grupA';
        $this->load->view('templates/header_res',$data);
        $this->load->view('res_eks_1/5');
        $this->load->view('templates/footer');
    }

    public function a16()
    {
        $data['page']='grupA';
        $this->load->view('templates/header_res',$data);
        $this->load->view('res_eks_1/6');
        $this->load->view('templates/footer');
    }

    public function a17()
    {
        $data['page']='grupA';
        $this->load->view('templates/header_res',$data);
        $this->load->view('res_eks_1/7');
        $this->load->view('templates/footer');
    }

    public function a18()
    {
        $data['page']='grupA';
        $this->load->view('templates/header_res',$data);
        $this->load->view('res_eks_1/8');
        $this->load->view('templates/footer');
    }

    public function a19()
    {
        $data['page']='grupA';
        $this->load->view('templates/header_res',$data);
        $this->load->view('res_eks_1/9');
        $this->load->view('templates/footer');
    }

    public function a20()
    {
        $data['page']='grupA';
        $this->load->view('templates/header_res',$data);
        $this->load->view('res_eks_1/10');
        $this->load->view('templates/footer');
    }

    public function a21()
    {
        $data['page']='grupA';
        $this->load->view('templates/header_res',$data);
        $this->load->view('res_eks_1/11');
        $this->load->view('templates/footer');
    }

    public function b()
    {
        $data['page']='grupB';
        $this->load->view('templates/header_res',$data);
        $this->load->view('responden/res_B');
        $this->load->view('templates/footer');
    }

    public function act_B()
    {
        $data['page']='grupB';
        $this->load->view('templates/header_res',$data);
        $this->load->view('templates/footer');
    }

    public function c()
    {
        $data['page']='grupC';
        $this->load->view('templates/header_res',$data);
        $this->load->view('responden/perbankan');
        $this->load->view('templates/footer');
    }

    public function act_C()
    {
        $data['page']='grupC';
        $this->load->view('templates/header_res',$data);
        $this->load->view('templates/footer');
    }

    public function refresh()
    {
        echo 'Data Siap';
    }

    public function refreshBank()
    {
        echo(rand(10,100));
    }
    public function refreshBank2()
    {
        echo(rand(10,100));
    }

    public function d()
    {
        $data['page']='grupD';
        $this->load->view('templates/header_res',$data);
        $this->load->view('responden/saham');
        $this->load->view('templates/footer');
    }
}