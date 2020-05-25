<?php

class Data extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('act_model');
      
    }

    public function general_insert_eksBank()
    {
        $this->act_model->insertBank();
    }

    public function general_insert_eksSaham()
    {
        $this->act_model->insertSaham();
    }


    public function randBank()
    {
        $big = rand(85,100);
        $small = rand(0,15);
        $total = $big+$small;
        $bigrate = ($big/$total)*100;
        $smallrate = ($small/$total)*100;
        $arr1 = array ('big'=>intval($bigrate),'small'=>intval($smallrate));
        echo json_encode($arr1);
    }

    public function randBankFalse()
    {
        $big = rand(0,15);
        $small = rand(85,100);
        $total = $big+$small;
        $bigrate = ($big/$total)*100;
        $smallrate = ($small/$total)*100;
        $arr1 = array ('big'=>intval($bigrate),'small'=>intval($smallrate));
        echo json_encode($arr1);
    }

    public function getCountSaham($session)
    {
        echo json_encode($this->act_model->getCountSaham($session));
    }

    public function getDataBank($session)
    {
        echo json_encode($this->act_model->getDataBank($session));
    }

    public function getConfig()
    {
        echo json_encode($this->act_model->getConfig());
    }
}