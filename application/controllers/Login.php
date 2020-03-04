<?php

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
    }

    public function index()
    {
        $this->load->view('login.php');
    }

    public function do_login()
	{
		$acc    = $this->input->post('access_code',TRUE);
		// $pass = md5($this->input->post('password',TRUE));
		$validate = $this->login_model->login($acc);
		if($validate->num_rows() > 0){
			$data  = $validate->row_array();
			$id  = $data['id_user'];
			$name  = $data['nama_user'];
			$code  = $data['access_code'];
			$session  = $data['session'];
			$status  = $data['status'];
			$role = $data['role'];
			$sesdata = array(
				'id_user'  => $id,
				'nama_user'  => $name,
				'access_code'     => $code,
				'session'    => $session,
				'status'    => $status,
				'role'    => $role,
				'logged_in' => TRUE
			);
			$this->session->set_userdata($sesdata);
			if($role==2){
				$stat='1';
				$this->login_model->update($acc,$stat);
				redirect('responden/');
			}elseif($role=='3'){
				$stat='1';
				$this->login_model->update($acc,$stat);
				redirect('responden/a0');
			}else{
				redirect('admin/');
			}
			
		}else{
			$this->session->set_flashdata('error', 'Harap Pilih Sesi');
			redirect('');
		}
    }

    function logout($acc){
		$stat='0';
		$this->login_model->update($acc,$stat);
        $this->session->sess_destroy();
        redirect('');
    }
      

}