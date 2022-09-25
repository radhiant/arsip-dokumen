<?php
class user extends CI_Controller{

 public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('legalitas_model');
        $this->load->helper(array('url','form'));
        $this->load->library('pagination');


    }

    public function index()
    {



        $data['judul_halaman'] ='User';
        $data['judul'] ='Data User';

        //Get Total Records Count
        $this->db->select("*");
        $this->db->from("user");
        $this->db->order_by('id_user','DESC');
        if (!empty($_GET['keyword'])) {
            $this->db->order_by('id_user','DESC');
            $this->db->like('nama_user', $_GET['keyword']);
            $this->db->or_like('username', $_GET['keyword']);
            $this->db->or_like('email', $_GET['keyword']);
        }

        $jumlahdata = $this->db->get();

        $totalRecords = $jumlahdata->num_rows();
        $limit = 5;

        if (!empty($_GET['keyword'])) {
            $config["base_url"] = base_url('user/index?keyword=' . $_GET['keyword']);
        } else {
            $config["base_url"] = base_url('user/index');

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
        $this->db->from("user");
        $this->db->order_by('id_user','DESC');
        if (!empty($_GET['keyword'])) {
            $this->db->order_by('id_user','DESC');
             $this->db->like('nama_user', $_GET['keyword']);
            $this->db->or_like('username', $_GET['keyword']);
            $this->db->or_like('email', $_GET['keyword']);
        }
        $this->db->limit($limit, $offset);
        $cityRecords = $this->db->get();
        $this->load->view('templates/header',$data);
        $this->load->view('user/index', array(
            'totalResult' => $totalRecords,
            'hasil' => $cityRecords->result(),
            'links' => $links,
            'nomer' => @$no

        ));
        $this->load->view('templates/footer');
    }


     public function formubah($id)
    {
        $data['judul_halaman'] = 'User';
        $data['judul'] = 'Ubah Data User';
        $where = array('id_User' => $id);
        $data['user'] = $this->user_model->detail_data($where,'user')->result();

        $status = 'Akan Berakhir';
        $where = array('status' => $status);
        $data['status'] = $this->legalitas_model->detail_data($where,'legalitas')->num_rows();
        $data['statusrecord'] = $this->legalitas_model->detail_data($where,'legalitas')->result();

        $status1 = 'Sudah Berakhir';
        $where1 = array('status' => $status1);
        $data['statusberakhir'] = $this->legalitas_model->detail_data($where1,'legalitas')->num_rows();
        $data['statusakhir'] = $this->legalitas_model->detail_data($where1,'legalitas')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('user/ubahdata', $data);
        $this->load->view('templates/footer');
    }

    public function formtambah()
    {
        $data['judul_halaman'] = 'User';
        $data['judul'] = 'Tambah Data User';

        $status = 'Akan Berakhir';
        $where = array('status' => $status);
        $data['status'] = $this->legalitas_model->detail_data($where,'legalitas')->num_rows();
        $data['statusrecord'] = $this->legalitas_model->detail_data($where,'legalitas')->result();

        $status1 = 'Sudah Berakhir';
        $where1 = array('status' => $status1);
        $data['statusberakhir'] = $this->legalitas_model->detail_data($where1,'legalitas')->num_rows();
        $data['statusakhir'] = $this->legalitas_model->detail_data($where1,'legalitas')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('user/tambahdata');
        $this->load->view('templates/footer');
    }

    public function ubah()
    {
       $namaU = $this->input->post('namaU');
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $lvl = $this->input->post('lvl');
        $flama = $this->input->post('flama');
        $id = $this->input->post('id');

        $ukuranFile = $_FILES['foto']['size'];
        $error = $_FILES['foto']['error'];
        $tmpName = $_FILES['foto']['tmp_name'];
        $namaFile = $_FILES['foto']['name'];
        $namaFileBaru = uniqid();




        //jika tidak mengupload gambar maka akan menggunakan fotolama
        if ( $error ){



        $data = array(
        'nama_user' => $namaU,
        'username' => $username,
        'email' => $email,
        'foto' => $flama,
        'lvl' => $lvl
       );
                $where = array('id_user' => $id);

            $this->user_model->ubah_data($where, $data, 'user');
            $this->session->set_flashdata('Pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Berhasil Di Ubah
            <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
        </div>');
            redirect('user/index');
        }

        //jika mengupload foto baru
        else{



        $config['file_name'] = $namaFileBaru;
        $config['upload_path'] = './assets/images/user/' ;
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 2048;
        $config['max_width'] = 1920;
        $config['max_height'] = 1080;

        $this->load->library('upload', $config);

        $upload_file = $this->upload->do_upload('foto');




        if ( ! $upload_file  ) {
            $error = $this->upload->display_errors();
            $this->session->set_flashdata('Pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">
            '. $error .'
            <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
        </div>');
            redirect('user/index');
        }

        else{
            unlink('assets/images/user/'. $flama);
             $upload = $this->upload->data();
            $this->session->set_flashdata('Pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Berhasil Di Ubah
            <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
        </div>');

        $data = array(
        'nama_user' => $namaU,
        'username' => $username,
        'pwd' => $pass,
        'email' => $email,
        'foto' => $upload['file_name'],
        'lvl' => $lvl
       );

                $where = array('id_user' => $id);

            $this->user_model->ubah_data($where, $data, 'user');
            redirect('user/index');
        }
    }
}



     public function tambah()
    {

        $namaU = $this->input->post('namaU');
        $username = $this->input->post('username');
        $pass = $this->input->post('pass');
        $email = $this->input->post('email');
        $lvl = $this->input->post('lvl');


        $namaFile = $_FILES['foto']['name'];
        $error = $_FILES['foto']['error'];

        if($error > 0){
            $default = "default.png";

            $data = array(
                'nama_user' => $namaU,
                'username' => $username,
                'pwd' => $pass,
                'email' => $email,
                'foto' =>$default,
                'lvl' => $lvl
               );

                    $this->user_model->tambah_data($data, 'user');
                    redirect('user/index');

        }

        else {
        $namaFileBaru = uniqid();

        $config['file_name'] = $namaFileBaru;
        $config['upload_path'] = './assets/images/user/' ;
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 2048;
        $config['max_width'] = 1920;
        $config['max_height'] = 1080;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('foto')) {
            $error = $this->upload->display_errors();
            $this->session->set_flashdata('Pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            '. $error .'
            <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
        </div>');
            redirect('user/formtambah');
        }

        else{
            $upload = $this->upload->data();
            $this->session->set_flashdata('Pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Berhasil Di Upload
            <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
        </div>');

            $data = array(
        'nama_user' => $namaU,
        'username' => $username,
        'pwd' => $pass,
        'email' => $email,
        'foto' => $upload['file_name'],
        'lvl' => $lvl
       );

            $this->user_model->tambah_data($data, 'user');
            redirect('user/index');
        }
    }


    }

    public function detail($id)
    {
        $data['judul_halaman'] = 'User';
        $data['judul'] = 'Detail Data User';
        $where = array('id_user' => $id);
        $data['user'] = $this->user_model->detail_data($where,'user')->result();

        $status = 'Akan Berakhir';
        $where = array('status' => $status);
        $data['status'] = $this->legalitas_model->detail_data($where,'legalitas')->num_rows();
        $data['statusrecord'] = $this->legalitas_model->detail_data($where,'legalitas')->result();
        
        $status1 = 'Sudah Berakhir';
        $where1 = array('status' => $status1);
        $data['statusberakhir'] = $this->legalitas_model->detail_data($where1,'legalitas')->num_rows();
        $data['statusakhir'] = $this->legalitas_model->detail_data($where1,'legalitas')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('user/detail', $data);
        $this->load->view('templates/footer');
    }

    public function hapus($id, $foto)
    {
        $where = array('id_user' => $id);
        $data['user'] = $this->user_model->hapus_data($where,'user') ;
        $this->session->set_flashdata('Pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Berhasil <strong>Dihapus</strong>
            <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
        </div>');
        if($foto == 'default.png'){

        }else{
            unlink('assets/images/user/'. $foto);
        }

         redirect('user/index');
    }



}
