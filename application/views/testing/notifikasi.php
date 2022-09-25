<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  </head>
  <body>

    <?php $pesan= ''; ?>

    <?php foreach ($legalitas as $l):
    $tgl = date('Y-m-d');
    $waktuproses = $l->waktu_proses;
    $masaberlaku = $l->masa_berlaku;
    $pecah1 = explode ("-", $masaberlaku);
    $tglsebelum = mktime(0,0,0,$pecah1[1],$pecah1[2]-$waktuproses,$pecah1[0]);
    $cc = date('Y-m-d',$tglsebelum);
    $status = 'Akan Berakhir';
    ?>



    <?php if ($cc == $tgl){
    $pesan = 'true';
   } else{
     $pesan = 'false';
   }
   return $pesan;
   ?>





<?php endforeach; ?>

<?php if ($pesan == 'true') { ?>
  <span class="indicator"></span>
<?php }?>


  </body>




</html>
