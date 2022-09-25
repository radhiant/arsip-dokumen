<?php
class hanyaview extends CI_Controller{

	 public function __construct() {
        parent::__construct();
        $this->load->model('anggota_model');
        $this->load->model('buku_model');
        $this->load->model('transaksi_model');
        $this->load->model('pengembalian_model');
        $this->load->model('user_model');
				$this->load->model('lelang_model');
				$this->load->model('legalitas_model');
        $this->load->helper('url');
        $this->load->library('pagination');


    }

    public function index()
    {

        $data['judul_halaman'] = 'View';
        $data['judul'] = 'Dashboard';

				$status = 'Akan Berakhir';
				$where = array('status' => $status);
	    	$data['status'] = $this->legalitas_model->detail_data($where,'legalitas')->num_rows();
				$data['statusrecord'] = $this->legalitas_model->detail_data($where,'legalitas')->result();

				$status1 = 'Sudah Berakhir';
        $where1 = array('status' => $status1);
        $data['statusberakhir'] = $this->legalitas_model->detail_data($where1,'legalitas')->num_rows();
        $data['statusakhir'] = $this->legalitas_model->detail_data($where1,'legalitas')->result();

        $data['buku'] = $this->buku_model->data()->num_rows();
        $data['anggota'] = $this->anggota_model->data()->num_rows();
				$data['lelang'] = $this->lelang_model->data()->num_rows();
				$data['legalitas'] = $this->legalitas_model->data()->num_rows();

        $data['transaksi'] = $this->transaksi_model->data()->num_rows();
        $data['pengembalian'] = $this->pengembalian_model->data()->num_rows();
        $data['user'] = $this->user_model->data()->num_rows();

        $this->load->view('templates/header_view', $data);
        $this->load->view('viewonly/index');
        $this->load->view('templates/footer_view');
    }



}
