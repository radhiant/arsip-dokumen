<?php
class lelang extends CI_Controller{

 public function __construct() {
        parent::__construct();
        $this->load->model('lelang_model');
        $this->load->model('legalitas_model');
        $this->load->helper('url');
        $this->load->helper('download');
        $this->load->library('pagination');
        $this->load->model('legalitas_model');



    }

    public function index()
    {



        $data['judul_halaman'] ='Admin Lelang';
        $data['judul'] ='Data Admin Lelang';


        //Get Total Records Count
        $this->db->select("*");
        $this->db->from("lelang");
        $this->db->order_by('id_lelang','DESC');
        if (!empty($_GET['keyword'])) {
            $this->db->order_by('id_lelang','DESC');
            $this->db->like('opd', $_GET['keyword']);
            $this->db->or_like('kabkota', $_GET['keyword']);
            $this->db->or_like('projek', $_GET['keyword']);
            $this->db->or_like('tahun', $_GET['keyword']);
        }

        $jumlahdata = $this->db->get();

        $totalRecords = $jumlahdata->num_rows();
        $limit = 10;

        if (!empty($_GET['keyword'])) {
            $config["base_url"] = base_url('lelang/index?keyword=' . $_GET['keyword']);
        } else {
            $config["base_url"] = base_url('lelang/index');

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
        $this->db->from("lelang");
        $this->db->order_by('id_lelang','DESC');
        if (!empty($_GET['keyword'])) {
          $this->db->order_by('id_lelang','DESC');
          $this->db->like('opd', $_GET['keyword']);
          $this->db->or_like('kabkota', $_GET['keyword']);
          $this->db->or_like('tahun', $_GET['keyword']);
          $this->db->or_like('projek', $_GET['keyword']);
        }
        $this->db->limit($limit, $offset);
        $cityRecords = $this->db->get();
        $this->load->view('templates/header',$data);
        $this->load->view('lelang/index', array(
            'totalResult' => $totalRecords,
            'hasil' => $cityRecords->result(),
            'links' => $links,
            'nomer' => @$no

        ));
        $this->load->view('templates/footer');
    }







    public function formtambah()
    {
        $data['judul_halaman'] = 'Admin Lelang';
        $data['judul'] = 'Tambah Data Lelang';
        $data['kodeunik'] = $this->lelang_model->buat_kode();

        $status = 'Akan Berakhir';
        $where = array('status' => $status);
        $data['status'] = $this->legalitas_model->detail_data($where,'legalitas')->num_rows();
        $data['statusrecord'] = $this->legalitas_model->detail_data($where,'legalitas')->result();

        $status1 = 'Sudah Berakhir';
        $where1 = array('status' => $status1);
        $data['statusberakhir'] = $this->legalitas_model->detail_data($where1,'legalitas')->num_rows();
        $data['statusakhir'] = $this->legalitas_model->detail_data($where1,'legalitas')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('lelang/tambahdata', $data);
        $this->load->view('templates/footer');
    }

    public function detail($id)
    {
    	$data['judul_halaman'] = 'Admin Lelang';
    	$data['judul'] = 'Detail Data Lelang';
    	$where = array('id_lelang' => $id);
    	$data['lelang'] = $this->lelang_model->detail_data($where,'lelang')->result();
      $data['file'] = $this->lelang_model->detail_data($where,'file_lelang')->result();

      $status = 'Akan Berakhir';
      $where = array('status' => $status);
      $data['status'] = $this->legalitas_model->detail_data($where,'legalitas')->num_rows();
      $data['statusrecord'] = $this->legalitas_model->detail_data($where,'legalitas')->result();

      $status1 = 'Sudah Berakhir';
      $where1 = array('status' => $status1);
      $data['statusberakhir'] = $this->legalitas_model->detail_data($where1,'legalitas')->num_rows();
      $data['statusakhir'] = $this->legalitas_model->detail_data($where1,'legalitas')->result();

    	$this->load->view('templates/header', $data);
        $this->load->view('lelang/detail', $data);
        $this->load->view('templates/footer');
    }

    public function upload($id)
    {
    	$data['judul_halaman'] = 'Admin Lelang';
    	$data['judul'] = 'Upload Data';
    	$where = array('id_lelang' => $id);
    	$data['lelang'] = $this->lelang_model->detail_data($where,'lelang')->result();

      $status = 'Akan Berakhir';
      $where = array('status' => $status);
      $data['status'] = $this->legalitas_model->detail_data($where,'legalitas')->num_rows();
      $data['statusrecord'] = $this->legalitas_model->detail_data($where,'legalitas')->result();

      $status1 = 'Sudah Berakhir';
      $where1 = array('status' => $status1);
      $data['statusberakhir'] = $this->legalitas_model->detail_data($where1,'legalitas')->num_rows();
      $data['statusakhir'] = $this->legalitas_model->detail_data($where1,'legalitas')->result();

    	$this->load->view('templates/header', $data);
        $this->load->view('lelang/upload', $data);
        $this->load->view('templates/footer');
    }

      public function formubah($id)
    {
        $data['judul_halaman'] = 'Admin Lelang';
        $data['judul'] = 'Ubah Data Buku';
        $where = array('id_lelang' => $id);
        $data['lelang'] = $this->lelang_model->detail_data($where,'lelang')->result();

        $status = 'Akan Berakhir';
        $where = array('status' => $status);
        $data['status'] = $this->legalitas_model->detail_data($where,'legalitas')->num_rows();
        $data['statusrecord'] = $this->legalitas_model->detail_data($where,'legalitas')->result();

        $status1 = 'Sudah Berakhir';
        $where1 = array('status' => $status1);
        $data['statusberakhir'] = $this->legalitas_model->detail_data($where1,'legalitas')->num_rows();
        $data['statusakhir'] = $this->legalitas_model->detail_data($where1,'legalitas')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('lelang/ubahdata', $data);
        $this->load->view('templates/footer');
    }


    public function prosesupload()
    {
      $id_lelang = $this->input->post('id');
      $tgl = date('Y-m-d');

      $config['upload_path']   = './assets/lelang/';
      $config['allowed_types'] = 'doc|docx|xls|xlsx|pdf|zip|rar';
      $namaFile = $_FILES['file']['name'];
      $error = $_FILES['file']['error'];
      $config['encrypt_name'] = false;
      $this->load->library('upload', $config);

      //return var_dump($_FILES['file']);



      if($error > 0){
        $this->session->set_flashdata('Pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
         <i class="fa fa fas fa-exclamation"></i> Anda Tidak mengupload apapun
         <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </a>
     </div>');
    redirect('lelang/upload/'.$id_lelang.'');

  }
      else {

        if (! $this->upload->do_upload('file')) {
          $error = $this->upload->display_errors();
          $this->session->set_flashdata('Pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
           '.$error.'
           <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                   </a>
       </div>');
      redirect('lelang/upload/'.$id_lelang.'');
        }
        else{
          $data = array('file' => $this->upload->data());
          $nama_file= $data['file']['file_name'];
          $ganti = str_replace(" ", "_", $nama_file);


          $data=array(
            'id_lelang' => $id_lelang,
            'nama_file' => $ganti,
            'tgl_upload' => $tgl
          );

          $this->lelang_model->tambah_data($data, 'file_lelang');
          $this->session->set_flashdata('Pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
           <i class="fa fa fas fa-check"></i> File Berhasil <strong>Diupload</strong>
           <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                   </a>
       </div>');
       redirect('lelang/detail/'.$id_lelang.'');

        }
      }

    }

    public function hapusupload($id,$id_lelang,$file)
    {
      $where = array('id_file_lelang' => $id);
      $data['lelang'] = $this->lelang_model->hapus_data($where,'file_lelang') ;
      $this->session->set_flashdata('Pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
          <i class="fa fa fas fa-check"></i> Data Berhasil <strong>Dihapus</strong>
          <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </a>
      </div>');
      unlink('./assets/lelang/'.$file);
       redirect('lelang/detail/'.$id_lelang.'');
    }

    public function dfilelelang($file){
        $this->load->helper('download');
        $path = base_url().'assets/lelang/'.$file;
        $data = file_get_contents($path); // Read the file's contents
        $name = $file;
        force_download($file, $data);
    }


    public function tambah()
    {
        $namaP = $this->input->post('namaP');
       $opd = $this->input->post('opd');
       $kabkota = $this->input->post('kabkota');
       $tahun = $this->input->post('tahun');

       $data=array(
         'projek' => $namaP,
         'opd' => $opd,
         'kabkota' => $kabkota,
         'tahun' => $tahun
       );


      $this->lelang_model->tambah_data($data, 'lelang');
      $this->session->set_flashdata('Pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
       <i class="fa fa fas fa-check"></i> Data Berhasil <strong>Ditambahkan</strong>
       <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
               </a>
   </div>');
  redirect('lelang/index');


    }




    public function ubah()
    {
      $namaP = $this->input->post('namaP');
      $opd = $this->input->post('opd');
      $kabkota = $this->input->post('kabkota');
      $tahun = $this->input->post('tahun');
      $id_lelang = $this->input->post('id');

      $data=array(
        'projek' => $namaP,
        'opd' => $opd,
        'kabkota' => $kabkota,
        'tahun' => $tahun
      );

      $where=array(
        'id_lelang' => $id_lelang
      );


     $this->lelang_model->ubah_data($where, $data, 'lelang');
     $this->session->set_flashdata('Pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
      <i class="fa fa fas fa-check"></i> Data Berhasil <strong>Diubah</strong>
      <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </a>
  </div>');
 redirect('lelang/index');
    }

    public function hapus($id)
    {
        $where = array('id_lelang' => $id);
        $data['lelang'] = $this->lelang_model->hapus_data($where,'lelang') ;
        $this->session->set_flashdata('Pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fa fa fas fa-check"></i> Data Berhasil <strong>Dihapus</strong>
            <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
        </div>');
         redirect('lelang/index');

    }

    public function dfile($file){
        $this->load->helper('download');
        $path = base_url().'assets/lampiran/'.$file;
        $data = file_get_contents($path); // Read the file's contents
        $name = $file;
        force_download($file, $data);
    }

}
