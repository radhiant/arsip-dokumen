<?php


class login extends CI_Controller
{
	 public function __construct() {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->helper(array('url','form'));


    }


	public function index()
    {

        $data['judul_halaman'] = 'Login';
        $this->load->view('templates/header_login', $data);
        $this->load->view('login/index');
        $this->load->view('templates/footer_login');
    }


    public function aksi_login()
    {
    	$username = $this->input->post('user');
    	$password = $this->input->post('pwd');

    	$where = array(
    		'username' => $username,
    		'pwd' => $password
    	);

    	$cek = $this->login_model->cek_login($where, 'user')->num_rows();
    	$data = $this->login_model->cek_login($where, 'user')->row_array();
    	if ($cek > 0) {

    		$data_session = array(
    			'username' => $username,
    			'nama_lengkap' => $data['nama_user'],
    			'level' => $data['lvl'],
    			'foto' => $data['foto'],
    			'id' => $data['id_user']
    		);

    		$this->session->set_userdata($data_session);
    		redirect('home/index');
    	}
    	else{
    		$this->session->set_flashdata('Pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="fa fa fas fa-exclamation-circle"></i> Username atau password tidak cocok!
            <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
        </div>');
    	redirect('login/index');
    	}
    }

    public function logout()
    {
    	$this->session->sess_destroy();
    	redirect('login/index');
    }

}
