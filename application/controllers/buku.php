<?php
class buku extends CI_Controller{

 public function __construct() {
        parent::__construct();
        $this->load->model('buku_model');
        $this->load->model('legalitas_model');
        $this->load->helper('url');
        $this->load->helper('download');
        $this->load->library('pagination');



    }

    public function index()
    {



        $data['judul_halaman'] ='Arsip Dokumen';
        $data['judul'] ='Data Arsip Dokumen';


        //Get Total Records Count
        $this->db->select("*");
        $this->db->from("buku");
        $this->db->order_by('kode_buku','DESC');
        if (!empty($_GET['keyword'])) {
            $this->db->order_by('kode_buku','DESC');
            $this->db->like('nama_dokumen', $_GET['keyword']);
            $this->db->or_like('kode_buku', $_GET['keyword']);
            $this->db->or_like('pembuat', $_GET['keyword']);
            $this->db->or_like('tahun', $_GET['keyword']);
        }

        $jumlahdata = $this->db->get();

        $totalRecords = $jumlahdata->num_rows();
        $limit = 10;

        if (!empty($_GET['keyword'])) {
            $config["base_url"] = base_url('buku/index?keyword=' . $_GET['keyword']);
        } else {
            $config["base_url"] = base_url('buku/index');

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
        $config['first_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['last_tag_open'] = '<li class="page-item"><span class="page-link">';
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
        $this->db->from("buku");
        $this->db->order_by('kode_buku','DESC');
        if (!empty($_GET['keyword'])) {
            $this->db->order_by('kode_buku','DESC');
            $this->db->like('nama_dokumen', $_GET['keyword']);
            $this->db->or_like('kode_buku', $_GET['keyword']);
            $this->db->or_like('pembuat', $_GET['keyword']);
            $this->db->or_like('tahun', $_GET['keyword']);
        }
        $this->db->limit($limit, $offset);
        $cityRecords = $this->db->get();
        $this->load->view('templates/header',$data);
        $this->load->view('buku/index', array(
            'totalResult' => $totalRecords,
            'hasil' => $cityRecords->result(),
            'links' => $links,
            'nomer' => @$no

        ));
        $this->load->view('templates/footer');
    }







    public function formtambah()
    {
        $data['judul_halaman'] = 'Arsip Dokumen';
        $data['judul'] = 'Tambah Data Arsip Dokumen';
        $data['kodeunik'] = $this->buku_model->buat_kode();

        $status = 'Akan Berakhir';
        $where = array('status' => $status);
        $data['status'] = $this->legalitas_model->detail_data($where,'legalitas')->num_rows();
        $data['statusrecord'] = $this->legalitas_model->detail_data($where,'legalitas')->result();

        $status1 = 'Sudah Berakhir';
        $where1 = array('status' => $status1);
        $data['statusberakhir'] = $this->legalitas_model->detail_data($where1,'legalitas')->num_rows();
        $data['statusakhir'] = $this->legalitas_model->detail_data($where1,'legalitas')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('buku/tambahdata', $data);
        $this->load->view('templates/footer');
    }

    public function detail($id)
    {
    	$data['judul_halaman'] = 'Arsip Dokumen';
    	$data['judul'] = 'Detail Data Buku';
    	$where = array('kode_buku' => $id);
    	$data['buku'] = $this->buku_model->detail_data($where,'buku')->result();

      $status = 'Akan Berakhir';
      $where = array('status' => $status);
      $data['status'] = $this->legalitas_model->detail_data($where,'legalitas')->num_rows();
      $data['statusrecord'] = $this->legalitas_model->detail_data($where,'legalitas')->result();

      $status1 = 'Sudah Berakhir';
      $where1 = array('status' => $status1);
      $data['statusberakhir'] = $this->legalitas_model->detail_data($where1,'legalitas')->num_rows();
      $data['statusakhir'] = $this->legalitas_model->detail_data($where1,'legalitas')->result();

    	$this->load->view('templates/header', $data);
        $this->load->view('buku/detail', $data);
        $this->load->view('templates/footer');
    }

      public function formubah($id)
    {
        $data['judul_halaman'] = 'Arsip Dokumen';
        $data['judul'] = 'Ubah Data Buku';
        $where = array('kode_buku' => $id);
        $data['buku'] = $this->buku_model->detail_data($where,'buku')->result();

        $status = 'Akan Berakhir';
        $where = array('status' => $status);
        $data['status'] = $this->legalitas_model->detail_data($where,'legalitas')->num_rows();
        $data['statusrecord'] = $this->legalitas_model->detail_data($where,'legalitas')->result();

        $status1 = 'Sudah Berakhir';
        $where1 = array('status' => $status1);
        $data['statusberakhir'] = $this->legalitas_model->detail_data($where1,'legalitas')->num_rows();
        $data['statusakhir'] = $this->legalitas_model->detail_data($where1,'legalitas')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('buku/ubahdata', $data);
        $this->load->view('templates/footer');
    }


    public function tambah()
    {
       $kdbuku = $this->input->post('kdbuku');
       $nmdokumen = $this->input->post('nmdokumen');
       $pembuat = $this->input->post('pembuat');

       $tanggal = $this->input->post('tgl');
       $bulan = $this->input->post('bulan');
       $tahun = $this->input->post('tahun');
       $thn = $tanggal.'-'.$bulan.'-'.$tahun;

       $ket = $this->input->post('ket');
       $lokasi = $this->input->post('lokasi');
       $tgl = date("Y-m-d");



        $config['upload_path']   = './assets/lampiran/';
        $config['allowed_types'] = 'doc|docx|xls|xlsx|pdf|zip|rar';
        $namaFileBaru = date("his");
        $namaFile = $_FILES['lampiran']['name'];
        $error = $_FILES['lampiran']['error'];
        $this->load->library('upload', $config);

        if($error > 0){
            $lampiran="Tidak Mengupload file";

            $data = array(
                'kode_buku' => $kdbuku,
                'nama_dokumen' => $nmdokumen,
                'pembuat' => $pembuat,
                'tahun' => $thn,
                'ket' => $ket,
                'lokasi' => $lokasi,
                'tgl_input' =>$tgl,
                'lampiran' =>$lampiran
               );

               $this->buku_model->tambah_data($data, 'buku');
               $this->session->set_flashdata('Pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="fa fa fas fa-check"></i> Data Berhasil <strong>DiTambahkan</strong>
                    <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </a>
                </div>');
               redirect('buku/index');
        } else{



				 if ( ! $this->upload->do_upload('lampiran')) {
					$error = $this->upload->display_errors();
            $this->session->set_flashdata('Pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            '. $error .'
            <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
        </div>');
            redirect('buku/formtambah');

				 }

				 else {

                    $upload = $this->upload->data();
                    $this->session->set_flashdata('Pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Berhasil Di Upload
                    <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </a>
                </div>');


                $gntinama = str_replace(" ", "_", $namaFile);


                $data = array(
                    'kode_buku' => $kdbuku,
                    'nama_dokumen' => $nmdokumen,
                    'pembuat' => $pembuat,
                    'tahun' => $thn,
                    'ket' => $ket,
                    'lokasi' => $lokasi,
                    'tgl_input' =>$tgl,
                    'lampiran' =>$gntinama,
                   );

                   $this->buku_model->tambah_data($data, 'buku');
                   $this->session->set_flashdata('Pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <i class="fa fa fas fa-check"></i> Data Berhasil <strong>DiTambahkan</strong>
                        <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </a>
                    </div>');
                   redirect('buku/index');

                }
            }



    }




    public function ubah()
    {
       $nmdokumen = $this->input->post('nmdokumen');
       $pembuat = $this->input->post('pembuat');
       $ket = $this->input->post('ket');

       $tanggal = $this->input->post('tgl');
       $bulan = $this->input->post('bulan');
       $tahun = $this->input->post('tahun');
       $thn = $tanggal.'-'.$bulan.'-'.$tahun;

       $lampiranlama = $this->input->post('lampiranlama');
       $lokasi = $this->input->post('lokasi');
       $id = $this->input->post('id');

       $config['upload_path']   = './assets/lampiran/';
        $config['allowed_types'] = 'doc|docx|xls|xlsx|pdf|zip|rar';


       $ukuranFile = $_FILES['lampiran']['size'];
        $error = $_FILES['lampiran']['error'];
        $tmpName = $_FILES['lampiran']['tmp_name'];
        $namaFile = $_FILES['lampiran']['name'];
        $this->load->library('upload', $config);


       if ($error > 0){



        $data = array(
            'nama_dokumen' => $nmdokumen,
            'pembuat' => $pembuat,
            'tahun' => $thn,
            'lampiran' => $lampiranlama,
            'lokasi' => $lokasi,
            'ket' => $ket
           );
           $where = array(
            'kode_buku' => $id
           );

           $this->buku_model->ubah_data($where, $data, 'buku');
           $this->session->set_flashdata('Pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fa fa fas fa-check"></i> Data Berhasil <strong>DiUbah</strong>
            <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
        </div>');
       redirect('buku/index');
        }

        else{

            if ( ! $this->upload->do_upload('lampiran')) {
                $error = $this->upload->display_errors();
        $this->session->set_flashdata('Pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
        '. $error .'
        <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </a>
    </div>');
        redirect('buku/formubah/'.$id);

             }

             else {

                $upload = $this->upload->data();
                $this->session->set_flashdata('Pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
                Berhasil Di Ubah
                <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </a>
            </div>');

            $gntinama = str_replace(" ", "_", $namaFile);

            $data = array(
                'nama_dokumen' => $nmdokumen,
                'pembuat' => $pembuat,
                'tahun' => $thn,
                'lampiran' => $gntinama,
                'lokasi' => $lokasi,
                'ket' => $ket
               );
               $where = array(
                'kode_buku' => $id
               );


               $this->buku_model->ubah_data($where, $data, 'buku');
               $this->session->set_flashdata('Pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fa fa fas fa-check"></i> Data Berhasil <strong>DiUbah</strong>
                <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </a>
            </div>');
           redirect('buku/index');

            }

        }







    }

    public function hapus($id)
    {
        $where = array('kode_buku' => $id);
        $data['buku'] = $this->buku_model->hapus_data($where,'buku') ;
        $this->session->set_flashdata('Pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fa fa fas fa-check"></i> Data Berhasil <strong>Dihapus</strong>
            <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
        </div>');
         redirect('buku/index');

    }

    public function dfile($file){
        $this->load->helper('download');
        $path = base_url().'assets/lampiran/'.$file;
        $data = file_get_contents($path); // Read the file's contents
        $name = $file;
        force_download($file, $data);
    }

}
