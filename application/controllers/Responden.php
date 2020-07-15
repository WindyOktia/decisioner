<?php

class Responden extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // $this->load->model('admin_model');
        $this->load->model('login_model');
        if($this->login_model->is_role() != "2"){
            if($this->login_model->is_role() != "3"){
                redirect('login');
            }
        }
    }

    public function index()
    {
        $data['page']='grupD';
        $this->load->view('templates/header_res',$data);
        $this->load->view('responden/res_B');
        $this->load->view('templates/footer');
    }

    public function ref()
    {
        $data['page']='ref';
        $this->load->view('templates/header_res',$data);
        $this->load->view('referensi/1');
        $this->load->view('templates/footer');
    }
    public function ref2()
    {
        $data['page']='ref';
        $this->load->view('templates/header_res',$data);
        $this->load->view('referensi/2');
        $this->load->view('templates/footer');
    }
    public function ref3()
    {
        $data['page']='ref';
        $this->load->view('templates/header_res',$data);
        $this->load->view('referensi/3');
        $this->load->view('templates/footer');
    }

    public function a0()
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

    public function a22()
    {
        $data['page']='grupA';
        $this->load->view('templates/header_res',$data);
        $this->load->view('res_eks_1/12');
        $this->load->view('templates/footer');
    }

    public function a23()
    {
        $data['page']='grupA';
        $this->load->view('templates/header_res',$data);
        $this->load->view('res_eks_1/13');
        $this->load->view('templates/footer');
    }

    public function a24()
    {
        $data['page']='grupA';
        $this->load->view('templates/header_res',$data);
        $this->load->view('res_eks_1/14');
        $this->load->view('templates/footer');
    }

    public function a25()
    {
        $data['page']='grupA';
        $this->load->view('templates/header_res',$data);
        $this->load->view('res_eks_1/15');
        $this->load->view('templates/footer');
    }

    public function a26()
    {
        $data['page']='grupA';
        $this->load->view('templates/header_res',$data);
        $this->load->view('res_eks_1/16');
        $this->load->view('templates/footer');
    }

    public function a27()
    {
        $data['page']='grupA';
        $this->load->view('templates/header_res',$data);
        $this->load->view('res_eks_1/17');
        $this->load->view('templates/footer');
    }

    public function a28()
    {
        $data['page']='grupA';
        $this->load->view('templates/header_res',$data);
        $this->load->view('res_eks_1/18');
        $this->load->view('templates/footer');
    }

    public function d0()
    {
        $data['page']='grupD';
        $this->load->view('templates/header_res',$data);
        $this->load->view('responden/res_B');
        $this->load->view('templates/footer');
    }

    public function d()
    {
        $data['page']='grupD';
        $this->load->view('templates/header_res',$data);
        $this->load->view('re_eks_saham/1');
        $this->load->view('templates/footer');
    }
    public function d2()
    {
        $data['page']='grupD';
        $this->load->view('templates/header_res',$data);
        $this->load->view('re_eks_saham/2');
        $this->load->view('templates/footer');
    }
    public function d3()
    {
        $data['page']='grupD';
        $this->load->view('templates/header_res',$data);
        $this->load->view('re_eks_saham/3');
        $this->load->view('templates/footer');
    }
    public function d4()
    {
        $data['page']='grupD';
        $this->load->view('templates/header_res',$data);
        $this->load->view('re_eks_saham/4');
        $this->load->view('templates/footer');
    }
    public function d5()
    {
        $data['page']='grupD';
        $this->load->view('templates/header_res',$data);
        $this->load->view('re_eks_saham/5');
        $this->load->view('templates/footer');
    }
    public function d6()
    {
        $data['page']='grupD';
        $this->load->view('templates/header_res',$data);
        $this->load->view('re_eks_saham/6');
        $this->load->view('templates/footer');
    }
    public function d6_1()
    {
        $data['page']='grupD';
        $this->load->view('templates/header_res',$data);
        $this->load->view('re_eks_saham/6_1');
        $this->load->view('templates/footer');
    }
    public function d6_2()
    {
        $data['page']='grupD';
        $this->load->view('templates/header_res',$data);
        $this->load->view('re_eks_saham/6_2');
        $this->load->view('templates/footer');
    }
    public function d6_3()
    {
        $data['page']='grupD';
        $this->load->view('templates/header_res',$data);
        $this->load->view('re_eks_saham/6_3');
        $this->load->view('templates/footer');
    }
    public function d6_4()
    {
        $data['page']='grupD';
        $this->load->view('templates/header_res',$data);
        $this->load->view('re_eks_saham/6_4');
        $this->load->view('templates/footer');
    }
    public function d6_5()
    {
        $data['page']='grupD';
        $this->load->view('templates/header_res',$data);
        $this->load->view('re_eks_saham/6_5');
        $this->load->view('templates/footer');
    }
    public function d6_6()
    {
        $data['page']='grupD';
        $this->load->view('templates/header_res',$data);
        $this->load->view('re_eks_saham/6_6');
        $this->load->view('templates/footer');
    }
    public function d6_7()
    {
        $data['page']='grupD';
        $this->load->view('templates/header_res',$data);
        $this->load->view('re_eks_saham/6_7');
        $this->load->view('templates/footer');
    }
    public function d6_8()
    {
        $data['page']='grupD';
        $this->load->view('templates/header_res',$data);
        $this->load->view('re_eks_saham/6_8');
        $this->load->view('templates/footer');
    }
    public function d6_9()
    {
        $data['page']='grupD';
        $this->load->view('templates/header_res',$data);
        $this->load->view('re_eks_saham/6_9');
        $this->load->view('templates/footer');
    }
    public function d7()
    {
        $data['page']='grupD';
        $this->load->view('templates/header_res',$data);
        $this->load->view('re_eks_saham/7');
        $this->load->view('templates/footer');
    }
    public function d8()
    {
        $data['page']='grupD';
        $this->load->view('templates/header_res',$data);
        $this->load->view('re_eks_saham/8');
        $this->load->view('templates/footer');
    }
    public function d9()
    {
        $data['page']='grupD';
        $this->load->view('templates/header_res',$data);
        $this->load->view('re_eks_saham/9');
        $this->load->view('templates/footer');
    }
    public function d10()
    {
        $data['page']='grupD';
        $this->load->view('templates/header_res',$data);
        $this->load->view('re_eks_saham/10');
        $this->load->view('templates/footer');
    }
    public function d11()
    {
        $data['page']='grupD';
        $this->load->view('templates/header_res',$data);
        $this->load->view('re_eks_saham/11');
        $this->load->view('templates/footer');
    }
    public function d12()
    {
        $data['page']='grupD';
        $this->load->view('templates/header_res',$data);
        $this->load->view('re_eks_saham/12');
        $this->load->view('templates/footer');
    }
    public function d13()
    {
        $data['page']='grupD';
        $this->load->view('templates/header_res',$data);
        $this->load->view('re_eks_saham/13');
        $this->load->view('templates/footer');
    }
    public function d14()
    {
        $data['page']='grupD';
        $this->load->view('templates/header_res',$data);
        $this->load->view('re_eks_saham/14');
        $this->load->view('templates/footer');
    }
    public function d15()
    {
        $data['page']='grupD';
        $this->load->view('templates/header_res',$data);
        $this->load->view('re_eks_saham/15');
        $this->load->view('templates/footer');
    }

    public function refresh()
    {
        echo 'Data Siap';
    }

    public function refreshBank()
    {
        echo(rand(75,100));
    }
    public function refreshBank2()
    {
        echo(rand(0,25));
    }

    public function refreshBank3()
    {
        echo(rand(10,100));
    }
    public function refreshBank4()
    {
        echo(rand(10,100));
    }

    
}