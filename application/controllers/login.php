<?php 

class Login extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');

	}

	function index(){
		$this->load->view('v_login');
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$cek = $this->m_login->cek_login($username,$password)->num_rows();
        
		if($cek > 0){
            $row = $this->m_login->cek_login($username,$password)->row_array();
            
			$data_session = array(
				'username' => $row['username'],
                'name' => $row['name'],
                'address' => $row['address'],
				'status' => "login"
            );

			$this->session->set_userdata($data_session);

			redirect(base_url("dashboard"));
		}else{
			echo "Username dan password salah !";
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}

	function edit_pass(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$edit = $this->m_login->edit_pass($username,$password);
        if($edit){
			$msg = "Password berhasil diubah !";
		}else{
			$msg = "Password gagal diubah !";
		}
		
		echo $msg;
	}
}