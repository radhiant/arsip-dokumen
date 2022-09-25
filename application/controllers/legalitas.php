<?php
class legalitas extends CI_Controller{

 public function __construct() {
        parent::__construct();
        $this->load->model('legalitas_model');
        $this->load->helper('url');
        $this->load->helper('download');
        $this->load->library('pagination');
        $this->load->model('legalitas_model');



    }

    public function index()
    {



        $data['judul_halaman'] ='Legalitas';
        $data['judul'] ='Data legalitas';


        //Get Total Records Count
        $this->db->select("*");
        $this->db->from("legalitas");
        $this->db->order_by('id_legalitas','DESC');
        if (!empty($_GET['keyword'])) {
            $this->db->order_by('id_legalitas','DESC');
            $this->db->like('nama_legalitas', $_GET['keyword']);
            $this->db->or_like('masa_berlaku', $_GET['keyword']);
            $this->db->or_like('nomor', $_GET['keyword']);
            $this->db->or_like('id_legalitas', $_GET['keyword']);
        }

        $jumlahdata = $this->db->get();

        $totalRecords = $jumlahdata->num_rows();
        $limit = 10;

        if (!empty($_GET['keyword'])) {
            $config["base_url"] = base_url('legalitas/index?keyword=' . $_GET['keyword']);
        } else {
            $config["base_url"] = base_url('legalitas/index');

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
        $this->db->from("legalitas");
        $this->db->order_by('id_legalitas','DESC');
        if (!empty($_GET['keyword'])) {
          $this->db->order_by('id_legalitas','DESC');
          $this->db->like('nama_legalitas', $_GET['keyword']);
          $this->db->or_like('masa_berlaku', $_GET['keyword']);
          $this->db->or_like('nomor', $_GET['keyword']);
          $this->db->or_like('id_legalitas', $_GET['keyword']);
        }
        $this->db->limit($limit, $offset);
        $cityRecords = $this->db->get();
        $this->load->view('templates/header',$data);
        $this->load->view('legalitas/index', array(
            'totalResult' => $totalRecords,
            'hasil' => $cityRecords->result(),
            'links' => $links,
            'nomer' => @$no

        ));
        $this->load->view('templates/footer');
    }

    public function data()
    {

        $data['judul_halaman'] ='Legalitas';
        $data['judul'] ='Data legalitas';


        //Get Total Records Count
        $this->db->select("*");
        $this->db->from("legalitas");
        $this->db->order_by('id_legalitas','DESC');
        if (!empty($_GET['keyword'])) {
            $this->db->order_by('id_legalitas','DESC');
            $this->db->like('nama_legalitas', $_GET['keyword']);
            $this->db->or_like('masa_berlaku', $_GET['keyword']);
            $this->db->or_like('nomor', $_GET['keyword']);
            $this->db->or_like('id_legalitas', $_GET['keyword']);
        }

        $jumlahdata = $this->db->get();

        $totalRecords = $jumlahdata->num_rows();
        $limit = 10;

        if (!empty($_GET['keyword'])) {
            $config["base_url"] = base_url('legalitas/index?keyword=' . $_GET['keyword']);
        } else {
            $config["base_url"] = base_url('legalitas/index');

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
        $this->db->from("legalitas");
        $this->db->order_by('id_legalitas','DESC');
        if (!empty($_GET['keyword'])) {
          $this->db->order_by('id_legalitas','DESC');
          $this->db->like('nama_legalitas', $_GET['keyword']);
          $this->db->or_like('masa_berlaku', $_GET['keyword']);
          $this->db->or_like('nomor', $_GET['keyword']);
          $this->db->or_like('id_legalitas', $_GET['keyword']);
        }
        $this->db->limit($limit, $offset);
        $cityRecords = $this->db->get();
        $this->load->view('templates/header',$data);
        $this->load->view('legalitas/index', array(
            'totalResult' => $totalRecords,
            'hasil' => $cityRecords->result(),
            'links' => $links,
            'nomer' => @$no

        ));
        $this->load->view('templates/footer');
    }









    public function formtambah()
    {
        $data['judul_halaman'] = 'Legalitas';
        $data['judul'] = 'Tambah Data legalitas';
        $data['kodeunik'] = $this->legalitas_model->buat_kode();

        $status = 'Akan Berakhir';
        $where = array('status' => $status);
        $data['status'] = $this->legalitas_model->detail_data($where,'legalitas')->num_rows();
        $data['statusrecord'] = $this->legalitas_model->detail_data($where,'legalitas')->result();

        $status1 = 'Sudah Berakhir';
        $where1 = array('status' => $status1);
        $data['statusberakhir'] = $this->legalitas_model->detail_data($where1,'legalitas')->num_rows();
        $data['statusakhir'] = $this->legalitas_model->detail_data($where1,'legalitas')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('legalitas/tambahdata', $data);
        $this->load->view('templates/footer');
    }

    public function detail($id)
    {
    	$data['judul_halaman'] = 'Legalitas';
    	$data['judul'] = 'Detail Data legalitas';
    	$where = array('id_legalitas' => $id);
    	$data['legalitas'] = $this->legalitas_model->detail_data($where,'legalitas')->result();

    	$data['log_legalitas'] = $this->legalitas_model->detail_data_log($where,'log_legalitas')->result();
      $data['jumlah_log'] = $this->legalitas_model->detail_data_log($where,'log_legalitas')->num_rows();

      $status = 'Akan Berakhir';
      $where = array('status' => $status);
      $data['status'] = $this->legalitas_model->detail_data($where,'legalitas')->num_rows();
      $data['statusrecord'] = $this->legalitas_model->detail_data($where,'legalitas')->result();

      $status1 = 'Sudah Berakhir';
      $where1 = array('status' => $status1);
      $data['statusberakhir'] = $this->legalitas_model->detail_data($where1,'legalitas')->num_rows();
      $data['statusakhir'] = $this->legalitas_model->detail_data($where1,'legalitas')->result();

    	$this->load->view('templates/header', $data);
        $this->load->view('legalitas/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubahupload($id)
    {
    	$data['judul_halaman'] = 'Legalitas';
    	$data['judul'] = 'Upload Data';
    	$where = array('id_legalitas' => $id);
    	$data['legalitas'] = $this->legalitas_model->detail_data($where,'legalitas')->result();

      $status = 'Akan Berakhir';
      $where = array('status' => $status);
      $data['status'] = $this->legalitas_model->detail_data($where,'legalitas')->num_rows();
      $data['statusrecord'] = $this->legalitas_model->detail_data($where,'legalitas')->result();

      $status1 = 'Sudah Berakhir';
      $where1 = array('status' => $status1);
      $data['statusberakhir'] = $this->legalitas_model->detail_data($where1,'legalitas')->num_rows();
      $data['statusakhir'] = $this->legalitas_model->detail_data($where1,'legalitas')->result();

    	$this->load->view('templates/header', $data);
        $this->load->view('legalitas/ubahupload', $data);
        $this->load->view('templates/footer');
    }

    public function upload($id)
    {
    	$data['judul_halaman'] = 'Legalitas';
    	$data['judul'] = 'Upload Data';
    	$where = array('id_legalitas' => $id);
    	$data['legalitas'] = $this->legalitas_model->detail_data($where,'legalitas')->result();

      $status = 'Akan Berakhir';
      $where = array('status' => $status);
      $data['status'] = $this->legalitas_model->detail_data($where,'legalitas')->num_rows();
      $data['statusrecord'] = $this->legalitas_model->detail_data($where,'legalitas')->result();

      $status1 = 'Sudah Berakhir';
      $where1 = array('status' => $status1);
      $data['statusberakhir'] = $this->legalitas_model->detail_data($where1,'legalitas')->num_rows();
      $data['statusakhir'] = $this->legalitas_model->detail_data($where1,'legalitas')->result();

    	$this->load->view('templates/header', $data);
        $this->load->view('legalitas/upload', $data);
        $this->load->view('templates/footer');
    }

      public function formubah($id)
    {
        $data['judul_halaman'] = 'Legalitas';
        $data['judul'] = 'Ubah Data Buku';
        $where = array('id_legalitas' => $id);
        $data['legalitas'] = $this->legalitas_model->detail_data($where,'legalitas')->result();

        $status = 'Akan Berakhir';
        $where = array('status' => $status);
        $data['status'] = $this->legalitas_model->detail_data($where,'legalitas')->num_rows();
        $data['statusrecord'] = $this->legalitas_model->detail_data($where,'legalitas')->result();

        $status1 = 'Sudah Berakhir';
        $where1 = array('status' => $status1);
        $data['statusberakhir'] = $this->legalitas_model->detail_data($where1,'legalitas')->num_rows();
        $data['statusakhir'] = $this->legalitas_model->detail_data($where1,'legalitas')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('legalitas/ubahdata', $data);
        $this->load->view('templates/footer');
    }


    public function prosesupload()
    {
      $id_legalitas = $this->input->post('id');
      $tgl = date('Y-m-d');

      $config['upload_path']   = './assets/legalitas/';
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
    redirect('legalitas/upload/'.$id_legalitas.'');

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
      redirect('legalitas/upload/'.$id_legalitas.'');
        }
        else{
          $data = array('file' => $this->upload->data());
          $nama_file= $data['file']['file_name'];
          $ganti = str_replace(" ", "_", $nama_file);


          $data=array(
            'file_upload' => $ganti
          );

          $where=array(
            'id_legalitas' => $id_legalitas,
          );

          $this->legalitas_model->ubah_data($where,$data, 'legalitas');
          $this->session->set_flashdata('Pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
           <i class="fa fa fas fa-check"></i> File Berhasil <strong>Diupload</strong>
           <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                   </a>
       </div>');
       redirect('legalitas/detail/'.$id_legalitas.'');

        }
      }

    }

    public function prosesubahupload()
    {
      $id_legalitas = $this->input->post('id');
      $filelama = $this->input->post('flama');

      $config['upload_path']   = './assets/legalitas/';
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
    redirect('legalitas/ubahupload/'.$id_legalitas.'');

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
      redirect('legalitas/ubahupload/'.$id_legalitas.'');
        }
        else{
          $data = array('file' => $this->upload->data());
          $nama_file= $data['file']['file_name'];
          $ganti = str_replace(" ", "_", $nama_file);


          $data=array(
            'file_upload' => $ganti
          );

          $where=array(
            'id_legalitas' => $id_legalitas,
          );

          $this->legalitas_model->ubah_data($where,$data, 'legalitas');
          unlink('./assets/legalitas/'.$filelama);
          $this->session->set_flashdata('Pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
           <i class="fa fa fas fa-check"></i> File Berhasil <strong>Diupload</strong>
           <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                   </a>
       </div>');
       redirect('legalitas/detail/'.$id_legalitas.'');

        }
      }

    }

    public function hapusupload($id,$id_legalitas,$file)
    {
      $where = array('id_file_legalitas' => $id);
      $data['legalitas'] = $this->legalitas_model->hapus_data($where,'file_legalitas') ;
      $this->session->set_flashdata('Pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
          <i class="fa fa fas fa-check"></i> Data Berhasil <strong>Dihapus</strong>
          <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </a>
      </div>');
      unlink('./assets/legalitas/'.$file);
       redirect('legalitas/detail/'.$id_legalitas.'');
    }

    public function dfilelegalitas($file){
        $this->load->helper('download');
        $path = base_url().'assets/legalitas/'.$file;
        $data = file_get_contents($path); // Read the file's contents
        $name = $file;
        force_download($file, $data);
    }

    public function proseshapusfile($id, $file){
      $kosong = 'tidak ada';

      $data=array(
        'file_upload' => $kosong
      );

      $where=array(
        'id_legalitas' => $id
      );




     $this->legalitas_model->ubah_data($where, $data, 'legalitas');
     $this->session->set_flashdata('Pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
      <i class="fa fa fas fa-check"></i> File berhasil <strong>Dihapus</strong>
      <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </a>
  </div>');

 unlink('./assets/legalitas/'.$file);
 redirect('legalitas/detail/'.$id.'');
    }


    public function tambah()
    {
       $namaL = $this->input->post('namaL');
       $tglLegal = $this->input->post('tglLegal');
       $nomor = $this->input->post('nomor');
       $msberlaku = $this->input->post('berlaku');
       $syarat = $this->input->post('syarat');
       $lokasiP = $this->input->post('lokasipengurus');
       $pic = $this->input->post('pic');
       $caraP = $this->input->post('carapengurusan');



       $pecah1 = explode(" " , $tglLegal);
       $tglpecah =$pecah1[0];
       $pecahtgl1 = explode("/" , $tglpecah);
       $tglsiapinput = $pecahtgl1[2].'-'.$pecahtgl1[0].'-'.$pecahtgl1[1];

       $pecah2 = explode(" " , $msberlaku);
       $tglpecah1 =$pecah2[0];
       $pecahtgl2 = explode("/" , $tglpecah1);
       $tglsiapinput1 = $pecahtgl2[2].'-'.$pecahtgl2[0].'-'.$pecahtgl2[1];


       $wkproses = $this->input->post('wkproses');

       $data=array(
         'nama_legalitas' => $namaL,
         'nomor' => $nomor,
         'masa_berlaku' => $tglsiapinput1,
         'waktu_proses' => $wkproses,
         'tgl_legalitas' => $tglsiapinput,
         'persyaratan' => $syarat,
         'lokasi_pengurusan' => $lokasiP,
         'pic' => $pic,
         'cara_pengurusan'=> $caraP,
         'file_upload' => 'tidak ada'
       );


      $this->legalitas_model->tambah_data($data, 'legalitas');
      $this->session->set_flashdata('Pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
       <i class="fa fa fas fa-check"></i> Data Berhasil <strong>Ditambahkan</strong>
       <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
               </a>
   </div>');
  redirect('legalitas/index');


    }




    public function ubah()
    {

      $namaL = $this->input->post('namaL');
      $tglLegal = $this->input->post('tglLegal');
      $nomor = $this->input->post('nomor');
      $msberlaku = $this->input->post('berlaku');
      $syarat = $this->input->post('syarat');
      $lokasiP = $this->input->post('lokasipengurus');
      $pic = $this->input->post('pic');
      $caraP = $this->input->post('carapengurusan');
      $id_legalitas = $this->input->post('id');
      $wkproses = $this->input->post('wkproses');

      $pecah1 = explode("/" , $tglLegal);
      $tglsiapinput = $pecah1[2].'-'.$pecah1[0].'-'.$pecah1[1];

      if ($msberlaku == '--') {
        $pecah2 = explode("-" , $msberlaku);
        $tglsiapinput1 = $pecah2[2].'-'.$pecah2[0].'-'.$pecah2[1];


      }else{
        $pecah2 = explode("/" , $msberlaku);
        $tglsiapinput1 = $pecah2[2].'-'.$pecah2[0].'-'.$pecah2[1];

      }





      $where1=array(
        'id_legalitas' => $id_legalitas
      );
      $sekarang = date('Y-m-d');

      $data_legal = $this->legalitas_model->detail_data($where1,'legalitas')->row_array();
      if ($namaL != $data_legal['nama_legalitas']) {

        $data1=array(
          'username' => $this->session->userdata('username'),
          'field_legalitas' => 'Nama Legalitas',
          'id_legalitas' => $id_legalitas,
          'keterangan' => $namaL,
          'tgl' => $sekarang
        );
        $this->legalitas_model->tambah_data($data1, 'log_legalitas');
      }
      if ($tglsiapinput != $data_legal['tgl_legalitas']) {

        $data2=array(
          'username' => $this->session->userdata('username'),
          'field_legalitas' => 'Tanggal Legalitas',
          'id_legalitas' => $id_legalitas,
          'keterangan' => $tglsiapinput,
          'tgl' => $sekarang
        );
        $this->legalitas_model->tambah_data($data2, 'log_legalitas');
      }
      if ($nomor != $data_legal['nomor']) {

        $data3=array(
          'username' => $this->session->userdata('username'),
          'field_legalitas' => 'Nomor',
          'id_legalitas' => $id_legalitas,
          'keterangan' => $nomor,
          'tgl' => $sekarang
        );
        $this->legalitas_model->tambah_data($data3, 'log_legalitas');
      }
      if ($tglsiapinput1 != $data_legal['masa_berlaku']) {

        $data4=array(
          'username' => $this->session->userdata('username'),
          'field_legalitas' => 'Masa Berlaku',
          'id_legalitas' => $id_legalitas,
          'keterangan' => $tglsiapinput1,
          'tgl' => $sekarang
        );
        $this->legalitas_model->tambah_data($data4, 'log_legalitas');
      }
      if ($syarat != $data_legal['persyaratan']) {

        $data5=array(
          'username' => $this->session->userdata('username'),
          'field_legalitas' => 'Persyaratan',
          'id_legalitas' => $id_legalitas,
          'keterangan' => $syarat,
          'tgl' => $sekarang
        );
        $this->legalitas_model->tambah_data($data5, 'log_legalitas');
      }
      if ($lokasiP != $data_legal['lokasi_pengurusan']) {

        $data1=array(
          'username' => $this->session->userdata('username'),
          'field_legalitas' => 'Lokasi Pengurusan',
          'id_legalitas' => $id_legalitas,
          'keterangan' => $lokasiP,
          'tgl' => $sekarang
        );
        $this->legalitas_model->tambah_data($data1, 'log_legalitas');
      }
      if ($pic != $data_legal['pic']) {

        $data6=array(
          'username' => $this->session->userdata('username'),
          'field_legalitas' => 'PIC/No Telepon',
          'id_legalitas' => $id_legalitas,
          'keterangan' => $pic,
          'tgl' => $sekarang
        );
        $this->legalitas_model->tambah_data($data6, 'log_legalitas');
      }
      if ($caraP != $data_legal['cara_pengurusan']) {

        $data7=array(
          'username' => $this->session->userdata('username'),
          'field_legalitas' => 'Cara Pengurusan',
          'id_legalitas' => $id_legalitas,
          'keterangan' => $caraP,
          'tgl' => $sekarang
        );
        $this->legalitas_model->tambah_data($data7, 'log_legalitas');
      }
      if ($wkproses != $data_legal['waktu_proses']) {

        $data8=array(
          'username' => $this->session->userdata('username'),
          'field_legalitas' => 'Waktu Proses',
          'id_legalitas' => $id_legalitas,
          'keterangan' => $wkproses.' Hari',
          'tgl' => $sekarang
        );
        $this->legalitas_model->tambah_data($data8, 'log_legalitas');
      }





      $data=array(
        'nama_legalitas' => $namaL,
        'nomor' => $nomor,
        'masa_berlaku' => $tglsiapinput1,
        'waktu_proses' => $wkproses,
        'tgl_legalitas' => $tglsiapinput,
        'status' => '',
        'persyaratan' => $syarat,
        'lokasi_pengurusan' => $lokasiP,
        'pic' => $pic,
        'cara_pengurusan'=> $caraP
      );

      $where=array(
        'id_legalitas' => $id_legalitas
      );


     $this->legalitas_model->ubah_data($where, $data, 'legalitas');
     $this->session->set_flashdata('Pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
      <i class="fa fa fas fa-check"></i> Data Berhasil <strong>Diubah</strong>
      <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </a>
  </div>');
 redirect('legalitas/index');
    }

    public function hapus($id)
    {
        $where = array('id_legalitas' => $id);
        $where1 = array('id_legalitas' => $id);
        $data['log_legalitas'] = $this->legalitas_model->hapus_data($where,'log_legalitas') ;
        $data['legalitas'] = $this->legalitas_model->hapus_data($where,'legalitas') ;
        $this->session->set_flashdata('Pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fa fa fas fa-check"></i> Data Berhasil <strong>Dihapus</strong>
            <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
        </div>');
         redirect('legalitas/index');

    }

    public function dfile($file){
        $this->load->helper('download');
        $path = base_url().'assets/lampiran/'.$file;
        $data = file_get_contents($path); // Read the file's contents
        $name = $file;
        force_download($file, $data);
    }

    public function send($namaL, $msberlaku)
    {
      $subject = 'Pemberitahuan Legalitas';
      $config = Array(
      'protocol' 	=> 'smtp',
      'smtp_host' => 'ssl://smtp.gmail.com',
      'smtp_port' => 465,
      'smtp_user' => 'legal.bku@gmail.com',
      'smtp_pass' => 'bku@2019',
      'mailtype' 	=> 'html',
      'charset' 	=> 'iso-8859-1',
      'wordwrap' 	=> TRUE
  );

    $this->load->library('email', $config);
    $this->email->set_newline("\r\n");
    $this->email->from('legal.bku@gmail.com');
    $this->email->to('febri@bintangku.com, munir@bintangku.com, rohadi@bintangku.com, ade@bintangku.com');
    //$this->email->to('matokiribattosai@gmail.com');
    $this->email->subject($subject);
      $this->email->message($namaL.' akan berakhir pada '.$msberlaku.'. Segera lakukan proses perpanjangan');
      if($this->email->send()){


      }else{
        $error = $this->email->print_debugger();


      }



    echo json_encode($result);
    }

    public function kirimpesan()
    {

      $id = $this->input->post('id');
      $pesan = $this->input->post('pesan');
      $status = $this->input->post('status');
      $namaL = $this->input->post('namaL');
      $msberlaku = $this->input->post('msberlaku');

      if ($status == 'Akan Berakhir') {
      echo json_encode($result);

    }elseif ($status == '') {
      $data = array(
        'status' => $pesan
      );
      $where=array(
        'id_legalitas' => $id
      );
      $this->legalitas_model->ubah_data($where, $data, 'legalitas');
      $cekdata = $this->legalitas_model->detail_data($where,'legalitas')->num_rows();
      if ($cekdata > 0) {
        redirect('legalitas/send/'.$namaL.'/'.$msberlaku);

      }
      else{
        echo 'error';
      }

    }
  }

  public function kirimpesan2()
  {

    $id = $this->input->post('id');
    $pesan = 'Sudah Berakhir';

    $namaL = $this->input->post('namaL');
      $status = $this->input->post('status');
    $msberlaku = $this->input->post('msberlaku');

    if ($status == 'Sudah Berakhir') {
    echo json_encode($result);

  }elseif ($status == '') {
    $data = array(
      'status' => $pesan
    );
    $where=array(
      'id_legalitas' => $id
    );
    $this->legalitas_model->ubah_data($where, $data, 'legalitas');
    $cekdata = $this->legalitas_model->detail_data($where,'legalitas')->num_rows();
    if ($cekdata > 0) {
      echo json_encode($result);

    }
    else{
      echo 'error';
    }

  }
}






}
