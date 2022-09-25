<?php


class laporan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('buku_model');
		$this->load->model('anggota_model');
		$this->load->model('transaksi_model');
		$this->load->model('pengembalian_model');
		$this->load->model('legalitas_model');
	}


	public function index()
    {

        $data['judul_halaman'] = 'Laporan';
        $data['judul'] = 'Laporan Data';


        $this->load->view('templates/header', $data);
        $this->load->view('laporan/index');
        $this->load->view('templates/footer');
    }

    public function cetaksemuaBK()
    {

    	$data['buku'] = $this->buku_model->data('buku')->result();
    	$data['jumlah'] = $this->buku_model->data()->num_rows();

        $mpdf = new \Mpdf\Mpdf();

        $data['judul_halaman'] = 'Laporan Buku';


        $data = $this->load->view('laporan/CetakSemuaBuku', $data, TRUE);


        $mpdf->WriteHTML($data);
        $mpdf->Output();
    }

    public function cetaksemuaA()
    {

    	$data['anggota'] = $this->anggota_model->data('anggota')->result();
    	$data['jumlah'] = $this->anggota_model->data()->num_rows();

        $mpdf = new \Mpdf\Mpdf();

        $data['judul_halaman'] = 'Laporan Anggota';


        $data = $this->load->view('laporan/CetakSemuaAnggota', $data, TRUE);


        $mpdf->WriteHTML($data);
        $mpdf->Output();
    }

public function cetaksemuaP()
    {

    	$data['pinjam'] = $this->transaksi_model->data('transaksi')->result();
    	$data['jumlah'] = $this->transaksi_model->data()->num_rows();

        $mpdf = new \Mpdf\Mpdf();

        $data['judul_halaman'] = 'Laporan Peminjaman';


        $data = $this->load->view('laporan/CetakSemuaPinjam', $data, TRUE);


        $mpdf->WriteHTML($data);
        $mpdf->Output();
    }

    public function cetaksemuaPn()
    {

    	$data['pengembalian'] = $this->pengembalian_model->data('pengembalian')->result();
    	$data['jumlah'] = $this->pengembalian_model->data()->num_rows();

        $mpdf = new \Mpdf\Mpdf();

        $data['judul_halaman'] = 'Laporan Pengembalian';


        $data = $this->load->view('laporan/CetakSemuaPengembalian', $data, TRUE);


        $mpdf->WriteHTML($data);
        $mpdf->Output();
    }

}
