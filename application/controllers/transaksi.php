<?php
class transaksi extends CI_Controller{


 public function __construct() {
        parent::__construct();
        $this->load->model('transaksi_model');
        $this->load->model('buku_model');
        $this->load->model('anggota_model');
        $this->load->model('user_model');
        $this->load->helper('url');
        $this->load->library('pagination');
        $this->load->model('legalitas_model');


    }

    public function index()
    {

        $data['judul_halaman'] = 'Transaksi';
        $data['judul'] = 'Data Transaksi Pinjam';

        //Get Total Records Count
        $this->db->select("*");
        $this->db->from("transaksi");
        $this->db->order_by('id_transaksi','DESC');
        if (!empty($_GET['keyword'])) {
            $this->db->order_by('id_transaksi','DESC');
            $this->db->like('nama_dokumen', $_GET['keyword']);
            $this->db->or_like('pembuat', $_GET['keyword']);
            $this->db->or_like('kode_buku', $_GET['keyword']);
            $this->db->or_like('tgl_pinjam', $_GET['keyword']);
            $this->db->or_like('nama_anggota', $_GET['keyword']);
        }

        $jumlahdata = $this->db->get();

        $totalRecords = $jumlahdata->num_rows();
        $limit = 5;

        if (!empty($_GET['keyword'])) {
            $config["base_url"] = base_url('transaksi/index?keyword=' . $_GET['keyword']);
        } else {
            $config["base_url"] = base_url('transaksi/index');

        }

        $config["total_rows"] = $totalRecords;
        $config["per_page"] = $limit;
        $config['use_page_numbers'] = TRUE;
        $config['page_query_string'] = TRUE;
        $config['enable_query_strings'] = TRUE;
        $config['num_links'] = 2;
        $config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close'] = '</span></li>';
        $config['first_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['last_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['next_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['cur_tag_open'] = '&nbsp;<li class="page-item active"><a class="page-link">';
        $config['cur_tag_close'] = '</a></li>';
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';
        $config['first_link'] = 'First';
        $config['last_link'] = 'Last';
        $this->pagination->initialize($config);
        $str_links = $this->pagination->create_links();
        $links = explode('&nbsp;', $str_links);

        $offset = 0;
        if (!empty($_GET['per_page'])) {
            $pageNo = $_GET['per_page'];
            $offset = ($pageNo - 1) * $limit;


        }
        $no = $offset;

        $status = 'Akan Berakhir';
        $where = array('status' => $status);
        $data['status'] = $this->legalitas_model->detail_data($where,'legalitas')->num_rows();
        $data['statusrecord'] = $this->legalitas_model->detail_data($where,'legalitas')->result();

        $status1 = 'Sudah Berakhir';
        $where1 = array('status' => $status1);
        $data['statusberakhir'] = $this->legalitas_model->detail_data($where1,'legalitas')->num_rows();
        $data['statusakhir'] = $this->legalitas_model->detail_data($where1,'legalitas')->result();


        //Get actual result from all records with pagination
        $this->db->select("*");
        $this->db->from("transaksi");
        $this->db->order_by('id_transaksi','DESC');
        if (!empty($_GET['keyword'])) {
            $this->db->order_by('id_transaksi','DESC');
            $this->db->like('judul_buku', $_GET['keyword']);
            $this->db->or_like('nim', $_GET['keyword']);
            $this->db->or_like('nama_anggota', $_GET['keyword']);
        }
        $this->db->limit($limit, $offset);
        $cityRecords = $this->db->get();
        $this->load->view('templates/header',$data);
        $this->load->view('transaksi/index', array(
            'totalResult' => $totalRecords,
            'hasil' => $cityRecords->result(),
            'links' => $links,
            'nomer' => @$no

        ));
        $this->load->view('templates/footer');


    }


public function formtambah()
    {
        $data['judul_halaman'] = 'Transaksi';
        $data['judul'] = 'Tambah Data Pinjam Buku';
        $data['buku'] = $this->buku_model->data()->result();
        $data['user'] = $this->user_model->data()->result();

        $status = 'Akan Berakhir';
        $where = array('status' => $status);
        $data['status'] = $this->legalitas_model->detail_data($where,'legalitas')->num_rows();
        $data['statusrecord'] = $this->legalitas_model->detail_data($where,'legalitas')->result();

        $status1 = 'Sudah Berakhir';
        $where1 = array('status' => $status1);
        $data['statusberakhir'] = $this->legalitas_model->detail_data($where1,'legalitas')->num_rows();
        $data['statusakhir'] = $this->legalitas_model->detail_data($where1,'legalitas')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('transaksi/tambahdata', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
       $nmdokumen = $this->input->post('nmdokumen');
       $peminjam = $this->input->post('peminjam');
       $pembuat = $this->input->post('pembuat');
       $tglp = $this->input->post('tglp');
       $tglk = $this->input->post('tglk');
       $ket = $this->input->post('ket');

       $tgl_pinjam = date("Y-m-d", strtotime($tglp));
       $tgl_kembali = date("Y-m-d", strtotime($tglk));

       $pecah_buku = explode(".", $nmdokumen);
       $id = $pecah_buku[0];
       $nmdok = $pecah_buku[1];

       $pecah_pembuat = explode(".", $pembuat);
       $idUser = $pecah_pembuat[0];
       $namaU = $pecah_pembuat[1];

        $data = array(
        'kode_buku' => $id,
        'nama_dokumen' => $nmdok,
        'peminjam' => $peminjam,
        'nama_user' => $namaU,
        'tgl_pinjam' => $tgl_pinjam,
        'tgl_kembali' => $tgl_kembali,
        'ket' => $ket
       );

           $this->buku_model->tambah_data($data, 'transaksi');
           $this->session->set_flashdata('Pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fa fa fas fa-check"></i> Data Berhasil <strong>DiTambahkan</strong>
            <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
        </div>');
       redirect('transaksi/index');

       /*

        $where = array('kode_buku' => $id);
        $buku = $this->buku_model->detail_data($where,'buku')->result();

        foreach ($buku as $bk) {
            $jumlah = $bk->jumlah;
        }


        //$jumlah = $data->jumlah;

        if ($jumlah > 0) {

            $dikurangi = intval($jumlah) - 1;

            $where = array('kode_buku' => $id);
            $total = array('jumlah' => $dikurangi);

           $this->buku_model->jumlahberkurang($where, $total, 'buku');

           $this->buku_model->tambah_data($data, 'transaksi');
           $this->session->set_flashdata('Pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fa fa fas fa-check"></i> Data Berhasil <strong>DiTambahkan</strong>
            <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
        </div>');
       redirect('transaksi/index');
        }

        else{

            $this->session->set_flashdata('Pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="fa fa fas fa-exclamation-circle"></i> <strong>Maaf!</strong> stok buku sudah habis
            <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
        </div>');
       redirect('transaksi/index');
        }

        */

    }

    public function detail($id)
    {
        $data['judul_halaman'] = 'Transaksi';
        $data['judul'] = 'Detail Pinjam Buku';
        $where = array('id_transaksi' => $id);
        $data['transaksi'] = $this->transaksi_model->detail_data($where,'transaksi')->result();

        $status = 'Akan Berakhir';
        $where = array('status' => $status);
        $data['status'] = $this->legalitas_model->detail_data($where,'legalitas')->num_rows();

        $status1 = 'Sudah Berakhir';
        $where1 = array('status' => $status1);
        $data['statusberakhir'] = $this->legalitas_model->detail_data($where1,'legalitas')->num_rows();
        $data['statusakhir'] = $this->legalitas_model->detail_data($where1,'legalitas')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('transaksi/detail', $data);
        $this->load->view('templates/footer');
    }

    public function pengembalian()
    {
       $kdbuku = $this->input->post('kdbuku');
       $nmdokumen = $this->input->post('nmdokumen');
       $pembuat = $this->input->post('pembuat');
       $namaA = $this->input->post('namaA');
       $tglp = $this->input->post('tglp');
       $id = $this->input->post('id');
       $kdbuku = $this->input->post('kdbuku');
       $lambat = $this->input->post('lambat');

       $lamaP = $lambat.' Hari';

       $tgl_pinjam = date("Y-m-d", strtotime($tglp));
       $tgl_kembali = date("Y-m-d");


       $data = array(
        'kode_buku' => $kdbuku,
        'nama_dokumen' => $nmdokumen,
        'pembuat' => $pembuat,
        'peminjam' => $namaA,
        'tgl_pinjam' => $tgl_pinjam,
        'tgl_kembali' => $tgl_kembali,
        'lama_pinjam' => $lamaP

       );

       $this->transaksi_model->pengembalian($data, 'pengembalian');
       redirect('transaksi/hapus/'.$id.'');

       /*

       $where = array('kode_buku' => $kdbuku);
       $buku = $this->buku_model->detail_data($where,'buku')->result();
       foreach ($buku as $bk) {
            $jumlah = $bk->jumlah;
        }
        $ditambah = intval($jumlah) + 1;

        $total = array('jumlah' => $ditambah);
        $this->buku_model->jumlahbertambah($where, $total, 'buku');

        */
       
    }

     public function hapus($id)
    {
        $where = array('id_transaksi' => $id);
        $data['transaksi'] = $this->transaksi_model->hapus_data($where,'transaksi') ;
        $this->session->set_flashdata('Pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fa fa fas fa-check"></i> Data Berhasil <strong>DiKembalikan</strong>
            <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
        </div>');
         redirect('transaksi/index');

    }

    public function perpanjang($id, $tglk)
    {
        $tgl = date("d-m-Y", strtotime($tglk));
        $pecah = explode("-", $tgl);
        $next_7_hari = mktime(0,0,0,$pecah[1],$pecah[0]+7,$pecah[2]);
        $hari_next = date("d-m-Y", $next_7_hari);
        $perpanjang = date("Y-m-d", strtotime($hari_next));

        $data = array('tgl_kembali' => $perpanjang);

        $where = array('id_transaksi' => $id);

        $this->transaksi_model->perpanjangpinjam($where, $data, 'transaksi');
        $this->session->set_flashdata('Pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
           <i class="fa fa fas fa-check"></i> Data Berhasil <strong>DiPerpanjang</strong>
            <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
        </div>');
         redirect('transaksi/index');


    }

}
