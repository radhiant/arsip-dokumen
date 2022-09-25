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
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="<?= base_url(); ?>/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/libs/css/style.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendor/fonts/flag-icon-css/flag-icon.min.css">

     <script src="<?= base_url(); ?>/assets/vendor/jquery/jquery-3.3.1.min.js"></script>

     <script>
         $(document).ready(function(){
            $(".preloader").fadeOut();
         });
     </script>

     <script>

     $(document).ready(function () {
         setInterval(function () {

           $("#tabel").load('<?= base_url() ?>viewonly/listdatalegal');


         }, 2000);



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

        <div class="dashboard">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
