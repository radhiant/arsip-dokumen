<?php
class viewonly extends CI_Controller{

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

        $data['judul_halaman'] = 'Live Masa Berlaku Legalitas';
        $data['judul'] = 'Dashboard';

        $data['buku'] = $this->buku_model->data()->num_rows();
        $data['anggota'] = $this->anggota_model->data()->num_rows();
				$data['lelang'] = $this->lelang_model->data()->num_rows();
				$data['legalitas'] = $this->legalitas_model->data()->result();
        $data['transaksi'] = $this->transaksi_model->data()->num_rows();
        $data['pengembalian'] = $this->pengembalian_model->data()->num_rows();
        $data['user'] = $this->user_model->data()->num_rows();

        $this->load->view('templates/header_view', $data);
        $this->load->view('testing/index');
        $this->load->view('templates/footer_view');
    }
    public function listdatalegal()
    {

        $data['judul_halaman'] = 'Live Masa Berlaku Legalitas';
        $data['judul'] = 'Legalitas';

        $data['buku'] = $this->buku_model->data()->num_rows();
        $data['anggota'] = $this->anggota_model->data()->num_rows();
				$data['lelang'] = $this->lelang_model->data()->num_rows();
				$data['legalitas'] = $this->legalitas_model->data()->result();
        $data['transaksi'] = $this->transaksi_model->data()->num_rows();
        $data['pengembalian'] = $this->pengembalian_model->data()->num_rows();
        $data['user'] = $this->user_model->data()->num_rows();


        $this->load->view('viewonly/listdata_legal', $data);

    }

		public function notifikasi()
		{

				$data['judul_halaman'] = 'home';
				$data['judul'] = 'Dashboard';

				$status = 'Akan Berakhir';
				$where = array('status' => $status);
	    	$data['status'] = $this->lelang_model->detail_data($where,'legalitas')->num_rows();

				$data['buku'] = $this->buku_model->data()->num_rows();
				$data['anggota'] = $this->anggota_model->data()->num_rows();
				$data['lelang'] = $this->lelang_model->data()->num_rows();
				$data['legalitas'] = $this->legalitas_model->data()->result();
				$data['transaksi'] = $this->transaksi_model->data()->num_rows();
				$data['pengembalian'] = $this->pengembalian_model->data()->num_rows();
				$data['user'] = $this->user_model->data()->num_rows();



				$this->load->view('testing/notifikasi', $data);

		}

    public function kirimpesan()
    {

    }



}
