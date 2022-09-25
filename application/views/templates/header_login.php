<?php 


if ($this->session->userdata('username')) {
    redirect('home/index');
    exit;
  }


?>

<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $judul_halaman ?></title>
    <link rel="icon" type="image/png" href="<?= base_url(); ?>assets/images/logo/logoBKU.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="<?= base_url(); ?>assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/libs/css/style.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/fonts/fontawesome/css/fontawesome-all.css">

     <script src="<?= base_url(); ?>/assets/vendor/jquery/jquery-3.3.1.min.js"></script>

     <script>
         $(document).ready(function(){
            $(".preloader").fadeOut();

            

         });
     </script>

    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }

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
    </style>
     
</head>

<body>
     <div class="preloader">
        <div class="loading">
            <span class="dashboard-spinner spinner-lg"></span><br><br>
            <center><label>Harap Tunggu</label></center>
        </div>
    </div>