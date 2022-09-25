<?php
class anggota extends CI_Controller{

	 public function __construct() {
        parent::__construct();
        $this->load->model('anggota_model');
        $this->load->model('legalitas_model');
        $this->load->helper('url');
        $this->load->library('pagination');


    }

    public function index()
    {



        $data['judul_halaman'] ='Anggota';
        $data['judul'] ='Data Anggota';

        //Get Total Records Count
        $this->db->select("*");
        $this->db->from("anggota");
        $this->db->order_by('id_anggota','DESC');
        if (!empty($_GET['keyword'])) {
            $this->db->order_by('id_anggota','DESC');
            $this->db->like('nama_anggota', $_GET['keyword']);
            $this->db->or_like('nim', $_GET['keyword']);
            $this->db->or_like('prodi', $_GET['keyword']);
            $this->db->or_like('thn_masuk', $_GET['keyword']);
        }

        $jumlahdata = $this->db->get();

        $totalRecords = $jumlahdata->num_rows();
        $limit = 5;

        if (!empty($_GET['keyword'])) {
            $config["base_url"] = base_url('anggota/index?keyword=' . $_GET['keyword']);
        } else {
            $config["base_url"] = base_url('anggota/index');

        }

        $config["total_rows"] = $totalRecords;
        $config["per_page"] = $limit;
        $config['use_page_numbers'] = TRUE;
        $config['page_query_string'] = TRUE;
        $config['enable_query_strings'] = TRUE;
        $config['num_links'] = 2;
        $config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close'] = '</span></li>';
        $config['next_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['cur_tag_open'] = '&nbsp;<li class="page-item active"><a class="page-link">';
        $config['cur_tag_close'] = '</a></li>';
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';
        $this->pagination->initialize($config);
        $str_links = $this->pagination->create_links();
        $links = explode('&nbsp;', $str_links);

        $offset = 0;
        if (!empty($_GET['per_page'])) {
            $pageNo = $_GET['per_page'];
            $offset = ($pageNo - 1) * $limit;


        }
        $no = $offset;


        //Get actual result from all records with pagination
        $this->db->select("*");
        $this->db->from("anggota");
        $this->db->order_by('id_anggota','DESC');
        if (!empty($_GET['keyword'])) {
            $this->db->order_by('id_anggota','DESC');
            $this->db->like('nama_anggota', $_GET['keyword']);
            $this->db->or_like('prodi', $_GET['keyword']);
            $this->db->or_like('nim', $_GET['keyword']);
            $this->db->or_like('thn_masuk', $_GET['keyword']);
        }
        $this->db->limit($limit, $offset);
        $cityRecords = $this->db->get();
        $this->load->view('templates/header',$data);
        $this->load->view('anggota/index', array(
            'totalResult' => $totalRecords,
            'hasil' => $cityRecords->result(),
            'links' => $links,
            'nomer' => @$no

        ));
        $this->load->view('templates/footer');
    }

     public function formtambah()
    {
        $data['judul_halaman'] = 'anggota';
        $data['judul'] = 'Tambah Data anggota';
        $this->load->view('templates/header', $data);
        $this->load->view('anggota/tambahdata', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
       $nim = $this->input->post('nim');
       $namaA = $this->input->post('namaA');
       $tmpt = $this->input->post('tmpt');
       $jk = $this->input->post('jk');
       $tglhr = $this->input->post('tglhr');
       $prodi = $this->input->post('prodi');
       $thn = $this->input->post('thn');


       $data = array(
        'nim' => $nim,
        'nama_anggota' => $namaA,
        'tempat_lahir' => $tmpt,
        'tgl_lahir' => $tglhr,
        'jk' => $jk,
        'prodi' => $prodi,
        'thn_masuk' => $thn
       );

       $this->anggota_model->tambah_data($data, 'anggota');
       $this->session->set_flashdata('Pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fa fa fas fa-check"></i> Data Berhasil <strong>Ditambahkan</strong>
            <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
        </div>');
       redirect('anggota/index');
    }


	public function detail($id)
    {
    	$data['judul_halaman'] = 'anggota';
    	$data['judul'] = 'Detail Data anggota';
    	$where = array('id_anggota' => $id);
    	$data['anggota'] = $this->anggota_model->detail_data($where,'anggota')->result();
    	$this->load->view('templates/header', $data);
        $this->load->view('anggota/detail', $data);
        $this->load->view('templates/footer');
    }

     public function formubah($id)
    {
        $data['judul_halaman'] = 'anggota';
        $data['judul'] = 'Ubah Data anggota';
        $where = array('id_anggota' => $id);
        $data['anggota'] = $this->anggota_model->detail_data($where,'anggota')->result();
        $this->load->view('templates/header', $data);
        $this->load->view('anggota/ubahdata', $data);
        $this->load->view('templates/footer');
    }

     public function ubah()
    {
       $nim = $this->input->post('nim');
       $namaA = $this->input->post('namaA');
       $tmpt = $this->input->post('tmpt');
       $tglhr = $this->input->post('tglhr');
       $jk = $this->input->post('jk');
       $prodi = $this->input->post('prodi');
       $thn = $this->input->post('thn');
       $id = $this->input->post('id');


       $data = array(
        'nim' => $nim,
        'nama_anggota' => $namaA,
        'tempat_lahir' => $tmpt,
        'tgl_lahir' => $tglhr,
        'jk' => $jk,
        'prodi' => $prodi,
        'thn_masuk' => $thn
       );

       $where = array(
        'id_anggota' => $id
       );

       $this->anggota_model->ubah_data($where, $data, 'anggota');
        $this->session->set_flashdata('Pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fa fa fas fa-check"></i> Data Berhasil <strong>DiUbah</strong>
            <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
        </div>');
       redirect('anggota/index');
    }

		public function hapus($id)
    {
        $where = array('id_anggota' => $id);
        $data['anggota'] = $this->anggota_model->hapus_data($where,'anggota') ;
        $this->session->set_flashdata('Pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fa fa fas fa-check"></i> Data Berhasil <strong>Dihapus</strong>
            <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
        </div>');
         redirect('anggota/index');

    }


}
