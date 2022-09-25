<?php

if (! $this->session->userdata('username')) {
    redirect('login/index');
    exit;
}
    $linkaktif1 = '';
    $linkaktif2 = '';
    $linkaktif3 = '';
    $linkaktif4 = '';
    $linkaktif5 = '';
    $linkaktif6 = '';
    $linkaktif7 = '';
    $linkaktif8 = '';
    $linkaktif9 = '';
    $linkaktif10 = '';

    if ($judul_halaman == "home") {
        $linkaktif1 = 'active';
    }
    elseif ($judul_halaman == "Arsip Dokumen") {
        $linkaktif2 = 'active';
    }
    elseif ($judul_halaman == "Anggota") {
        $linkaktif3 = 'active';
    }
    elseif ($judul_halaman == "Transaksi") {
       $linkaktif4 = 'active';
    }
    elseif ($judul_halaman == "Pengembalian") {
        $linkaktif5 = 'active';
    }
       elseif ($judul_halaman == "Laporan") {
       $linkaktif6 = 'active';
    }
    elseif ($judul_halaman == "User") {
        $linkaktif7 = 'active';
    }
    elseif ($judul_halaman == "Admin Lelang") {
        $linkaktif8 = 'active';
    }
    elseif ($judul_halaman == "Legalitas") {
        $linkaktif9 = 'active';
    }
    elseif ($judul_halaman == "View") {
        $linkaktif10 = 'active';
    }
    else{
        $linkaktif = '';
    }





?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="<?= base_url(); ?>assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/libs/css/style.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/datepicker/tempusdominus-bootstrap-4.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/summernote/css/summernote-bs4.css">

    <link rel="stylesheet" href="<?= base_url(); ?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    

     <script src="<?= base_url(); ?>assets/vendor/jquery/jquery-3.3.1.min.js"></script>



     <script>
         $(document).ready(function(){
            $(".preloader").fadeOut();

            $('#datetimepicker1').datetimepicker({

            });
         });


     </script>

     <script>

     $(document).ready(function () {
         setInterval(function () {

           $("#test").load('<?= base_url() ?>testing/test');


         }, 5000);



     });
     </script>

    <title> Halaman <?= $judul_halaman; ?> </title>
    <link rel="icon" type="image/png" href="<?= base_url(); ?>assets/images/logo/logoBKU.png">
</head>

<style>
.button_link {color:#FFF;text-decoration:none; background-color:#428a8e;padding:10px;}
#keyword{border: #CCC 1px solid; border-radius: 4px; padding: 7px;background:url("demo-search-icon.png") no-repeat center right 7px;}
.btn-page{margin-right:10px;padding:5px 10px; border: #CCC 1px solid; background:#FFF; border-radius:4px;cursor:pointer;}
.btn-page:hover{background:#F0F0F0;}
.btn-page.current{background:#F0F0F0;}

.preloader{
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background-color:rgba(0, 0, 0, 0.5);
}

.preloader .loading{
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
    font: 14px arial;
}

#footer{
    position: fixed;
    bottom: 0px;
}

</style>

<body>

    <div class="preloader" >
        <div class="loading">
            <span class="dashboard-spinner spinner-lg"></span><br><br>
            <center><label>Harap Tunggu</label></center>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href=""><img src="<?= base_url(); ?>assets/images/logo/bkuu.jpg" class="img-fluid mr-2 user-avatar-lg rounded-circle ">Arsip Dokumen</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <!--
                        <li class="nav-item dropdown notification">
                            <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span class="indicator"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                                <li>
                                    <div class="notification-title"> Notification</div>
                                    <div class="notification-list">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item list-group-item-action active">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="<?= base_url(); ?>/assets/images/avatar-2.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Jeremy Rakestraw</span>accepted your invitation to join the team.
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="<?= base_url(); ?>/assets/images/avatar-3.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">John Abraham </span>is now following you
                                                        <div class="notification-date">2 days ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="<?= base_url(); ?>/assets/images/avatar-4.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Monaan Pechi</span> is watching your main repository
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="<?= base_url(); ?>/assets/images/avatar-5.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Jessica Caruso</span>accepted your invitation to join the team.
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-footer"> <a href="#">View all notifications</a></div>
                                </li>
                            </ul>
                        </li>-->

                        <li class="nav-item dropdown notification" >
                           <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <b id="notifikasi">
                             <?php if ($status > 0 || $statusberakhir > 0){ ?>
                               <span class="indicator"></span>
                             <?php } else { ?>

                             <?php } ?>
                           </a>
                           <div id="test">

                           </div>
                           <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                               <li>
                                   <div class="notification-title"> Notifikasi</div>
                                   <div class="notification-list">
                                       <div class="list-group">
                                         <?php $no=1; foreach ($statusakhir as $akhir): ?>

                                           <a href="<?= base_url(); ?>legalitas/index?keyword=<?= $akhir->nama_legalitas ?>" class="list-group-item list-group-item-action active">
                                               <div class="notification-info">
                                                 - <span class="notification-list-user-name"> <?= $akhir->nama_legalitas ?></span>Sudah berakhir pada <b><?= $akhir->masa_berlaku ?></b>


                                               </div>
                                           </a>

                                         <?php endforeach; ?>
                                         <span class="separator"><br></span>
                                         <?php $no=1; foreach ($statusrecord as $pesan): ?>
                                           <a href="<?= base_url(); ?>legalitas/index?keyword=<?= $pesan->nama_legalitas ?>" class="list-group-item list-group-item-action active">
                                               <div class="notification-info">
                                                 <?= $no++; ?>.<span class="notification-list-user-name"> <?= $pesan->nama_legalitas ?></span>akan berakhir pada <b><?= $pesan->masa_berlaku ?></b>


                                               </div>
                                           </a>
                                         <?php endforeach; ?>
                                         </div>
                                   </div>
                               </li>

                           </ul>
                       </li>

                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="

                                <?= base_url(); ?>assets/images/user/<?= $this->session->userdata('foto'); ?>

                            " alt="" class="img-fluid mr-1 user-avatar-md rounded-circle "><?= $this->session->userdata('nama_lengkap'); ?></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">

                                    <span class="status"></span><span class="ml-2"><?= $this->session->userdata('level'); ?></span>

                                </div>

                                <a class="dropdown-item" href="<?= base_url(); ?>/user/detail/<?= $this->session->userdata('id'); ?>"><i class="fas fa-user mr-2"></i>Account</a>
                                <a class="dropdown-item" href="<?= base_url(); ?>/login/logout"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link <?= $linkaktif1; ?>" href="<?= base_url(); ?>home/index"><i class="fa fa-fw  fas fa-home"></i>Home </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link <?= $linkaktif2; ?>" href="<?= base_url(); ?>buku/index"><i class="fa fa-fw fa-file"></i>Dokumen </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link <?= $linkaktif8; ?>" href="<?= base_url(); ?>lelang/index"><i class="fa fa-fw fas fa-book"></i>Admin Lelang </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link <?= $linkaktif9; ?>" href="<?= base_url(); ?>legalitas/index"><i class="fa fa-fw fas fa-book"></i>Legalitas </a>
                            </li>
                            <!-- <li class="nav-item ">
                                <a class="nav-link <?= $linkaktif3; ?>" href="<?= base_url(); ?>anggota/index"><i class="fa fa-fw fa-user-circle"></i>Anggota </a>
                            </li> -->

                            <li class="nav-item ">
                                <a class="nav-link <?= $linkaktif4; ?>" href="<?= base_url(); ?>transaksi/index"><i class="fa fa-fw fas fa-random"></i>Transaksi </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link <?= $linkaktif5; ?>" href="<?= base_url(); ?>pengembalian/index"><i class="fa fa-fw fas fas fa-redo"></i>Pengembalian </a>
                            </li>
                            <li class="nav-item ">
                                <a target="_blank" class="nav-link <?= $linkaktif10; ?>" href="<?= base_url(); ?>hanyaview/index"><i class="fa fa-fw fas fas fa-eye"></i>Hanya View </a>
                            </li>
                          <!--  <li class="nav-item ">
                                <a class="nav-link <?= $linkaktif6 ?>" href="<?= base_url(); ?>laporan/index"><i class="fa fa-fw fas fa-print"></i>Laporan </a>
                            </li> -->

                            <?php if ($this->session->userdata('level') == 'admin') { ?>

                            <li class="nav-item ">
                                <a class="nav-link <?= $linkaktif7; ?>" href="<?= base_url(); ?>user/index"><i class="fa fa-fw fas fa-users"></i>User </a>
                            </li>



                            <?php } ?>


                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title"><?= $judul; ?></h2>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
