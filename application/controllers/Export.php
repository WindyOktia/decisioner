<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Export extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library("excel");
        $this->load->model("Export_model");
    }

    public function index(){
        $this->load->view('welcome_message');
    }

    public function export(){ 
        //membuat objek
        $objPHPExcel = new PHPExcel();
        $data = $this->db->query('select eks_saham.*, user.access_code,user.role from eks_saham, user where eks_saham.id_user=user.id_user');
         // Nama Field Baris Pertama
        $fields = $data->list_fields();
        
        $col = 0;
        foreach ($fields as $field)
        {
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($col, 1, $field);
            $col++;
        }
 
        // Mengambil Data
        $row = 2;
        foreach($data->result() as $data)
        {
            $col = 0;
            foreach ($fields as $field)
            {
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($col, $row, $data->$field);
                $col++;
            }
 
            $row++;
        }
        $objPHPExcel->setActiveSheetIndex(0);

        //Set Title
        $objPHPExcel->getActiveSheet()->setTitle('Eksperimen Saham');


        $objPHPExcel->createSheet();

        // Add some data to the second sheet, resembling some different data types
        $objPHPExcel->setActiveSheetIndex(1);
        $data2 = $this->db->query('select eks_bank.*, user.access_code,user.role from eks_bank, user where eks_bank.id_user=user.id_user');
        $fields2 = $data2->list_fields();
        $col2 = 0;
        foreach ($fields2 as $field2)
        {
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($col2, 1, $field2);
            $col2++;
        }
        $row = 2;
        foreach($data2->result() as $data2)
        {
            $col = 0;
            foreach ($fields2 as $field2)
            {
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($col, $row, $data2->$field2);
                $col++;
            }
 
            $row++;
        }

        // Rename 2nd sheet
        $objPHPExcel->getActiveSheet()->setTitle('Eksperimen Bank');

        $objPHPExcel->setActiveSheetIndex(0);

        $objPHPExcel->createSheet();

        // Add some data to the second sheet, resembling some different data types
        $objPHPExcel->setActiveSheetIndex(2);
        $data2 = $this->db->query('select * from v_real_bank_ses');
        $fields2 = $data2->list_fields();
        $col2 = 0;
        foreach ($fields2 as $field2)
        {
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($col2, 1, $field2);
            $col2++;
        }
        $row = 2;
        foreach($data2->result() as $data2)
        {
            $col = 0;
            foreach ($fields2 as $field2)
            {
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($col, $row, $data2->$field2);
                $col++;
            }
 
            $row++;
        }

        // Rename 2nd sheet
        $objPHPExcel->getActiveSheet()->setTitle('view_result_bank');

        $objPHPExcel->setActiveSheetIndex(0);
        //Save ke .xlsx, kalau ingin .xls, ubah 'Excel2007' menjadi 'Excel5'
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');

        //Header
        header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
        header("Cache-Control: no-store, no-cache, must-revalidate");
        header("Cache-Control: post-check=0, pre-check=0", false);
        header("Pragma: no-cache");
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');

        //Nama File
        // header('Content-Disposition: attachment;filename="Survei_Guru"'.$id.'".xlsx"');
        header('Content-Disposition: attachment;filename="Eksperimen.xlsx"');

        //Download
        $objWriter->save("php://output");

    }

    

}

/* End of file Phpexcel.php */
/* Location: ./application/controllers/Phpexcel.php */