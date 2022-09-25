<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  </head>
  <body>

    <?php $no = 1; ?>

    <?php foreach ($legalitas as $l):

  if($l->masa_berlaku == '--'){

  }else{

    $tgl = date('Y-m-d');
    $waktuproses = $l->waktu_proses;
    $masaberlaku = $l->masa_berlaku;
    $pecah1 = explode ("-", $masaberlaku);
    $tglsebelum = mktime(0,0,0,$pecah1[1],$pecah1[2]-$waktuproses,$pecah1[0]);
    $tglsesudah = mktime(0,0,0,$pecah1[1],$pecah1[2]+1,$pecah1[0]);
    $cc = date('Y-m-d',$tglsebelum);
    $dd = date('Y-m-d', $tglsesudah);
    $status = 'Akan Berakhir';
    ?>



    <?php if ($cc == $tgl){ ?>

    <script type="text/javascript">
    ceklegal();

    function ceklegal(){

            var id = '<?= $l->id_legalitas ?>';
            var pesan = '<?= $status ?>';
            var status = '<?= $l->status ?>';
            var namaL = '<?= $l->nama_legalitas ?>';
            var msberlaku = '<?= $l->masa_berlaku ?>';

            if (status == 'Akan Berakhir') {

            }else{

            $.ajax({
                type:'POST',
                data:'id='+id+'&pesan='+pesan+'&status='+status+'&namaL='+namaL+'&msberlaku='+msberlaku,
                url:'<?php echo site_url("index.php/legalitas/kirimpesan")?>',
                dataType:'json',
                success: function(hasil){

                }
            });
          }
        }

    </script>



  <?php }  }?>


<?php endforeach; ?>



<?php $no = 1; ?>

<?php foreach ($legalitas as $l):

if($l->masa_berlaku == '--'){

}else{
$tgl = date('Y-m-d');
$waktuproses = $l->waktu_proses;
$masaberlaku = $l->masa_berlaku;
$pecah1 = explode ("-", $masaberlaku);
$tglsebelum = mktime(0,0,0,$pecah1[1],$pecah1[2]-$waktuproses,$pecah1[0]);
$tglsesudah = mktime(0,0,0,$pecah1[1],$pecah1[2]+1,$pecah1[0]);
$cc = date('Y-m-d',$tglsebelum);
$dd = date('Y-m-d', $tglsesudah);
$status = 'Akan Berakhir';
?>



<?php if ($dd == $tgl){ ?>

<script type="text/javascript">
ceklegal2();

function ceklegal2(){

        var id = '<?= $l->id_legalitas ?>';
        var pesan = '<?= $status ?>';
        var status = '<?= $l->status ?>';
        var namaL = '<?= $l->nama_legalitas ?>';
        var msberlaku = '<?= $l->masa_berlaku ?>';

        if (status == 'Sudah Berakhir') {

        }else{

        $.ajax({
            type:'POST',
            data:'id='+id+'&pesan='+pesan+'&status='+status+'&namaL='+namaL+'&msberlaku='+msberlaku,
            url:'<?php echo site_url("index.php/legalitas/kirimpesan2")?>',
            dataType:'json',
            success: function(hasil){

            }
        });
      }
    }

</script>



<?php }  }?>


<?php endforeach; ?>





  </body>




</html>
