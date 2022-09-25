<?php
class pengembalian extends CI_Controller{

	public function __construct() {
        parent::__construct();
        $this->load->model('pengembalian_model');
        $this->load->helper('url');
        $this->load->library('pagination');
				$this->load->model('legalitas_model');


    }

    public function index()
    {



        $data['judul_halaman'] ='Pengembalian';
        $data['judul'] ='Data Pengembalian';

        //Get Total Records Count
        $this->db->select("*");
        $this->db->from("pengembalian");
        $this->db->order_by('id_kembali','DESC');
        if (!empty($_GET['keyword'])) {
            $this->db->order_by('id_kembali','DESC');
            $this->db->like('judul_buku', $_GET['keyword']);
            $this->db->or_like('nim', $_GET['keyword']);
            $this->db->or_like('nama_anggota', $_GET['keyword']);
            $this->db->or_like('tgl_kembali', $_GET['keyword']);
            $this->db->or_like('tgl_pinjam', $_GET['keyword']);
        }

        $jumlahdata = $this->db->get();

        $totalRecords = $jumlahdata->num_rows();
        $limit = 5;

        if (!empty($_GET['keyword'])) {
            $config["base_url"] = base_url('pengembalian/index?keyword=' . $_GET['keyword']);
        } else {
            $config["base_url"] = base_url('pengembalian/index');

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
        $this->db->from("pengembalian");
        $this->db->order_by('id_kembali','DESC');
        if (!empty($_GET['keyword'])) {
            $this->db->order_by('id_kembali','DESC');
            $this->db->like('judul_buku', $_GET['keyword']);
            $this->db->or_like('nim', $_GET['keyword']);
            $this->db->or_like('nama_anggota', $_GET['keyword']);
            $this->db->or_like('tgl_kembali', $_GET['keyword']);
            $this->db->or_like('tgl_pinjam', $_GET['keyword']);
        }
        $this->db->limit($limit, $offset);
        $cityRecords = $this->db->get();
        $this->load->view('templates/header',$data);
        $this->load->view('pengembalian/index', array(
            'totalResult' => $totalRecords,
            'hasil' => $cityRecords->result(),
            'links' => $links,
            'nomer' => @$no

        ));
        $this->load->view('templates/footer');
    }


    public function hapus($id)
    {
        $where = array('id_kembali' => $id);
        $data['pengembalian'] = $this->pengembalian_model->hapus_data($where,'pengembalian') ;
        $this->session->set_flashdata('Pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
           <i class="fa fa fas fa-check"></i> Data Berhasil <strong>Dihapus</strong>
            <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
        </div>');
         redirect('pengembalian/index');

    }




}
