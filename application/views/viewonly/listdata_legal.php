<script type="text/javascript">
    window.setTimeout("waktu()",1000);
    function waktu() {
        var tanggal = new Date();
        setTimeout("waktu()",1000);
        document.getElementById("jam").innerHTML = tanggal.getHours();
        document.getElementById("menit").innerHTML = tanggal.getMinutes();
        document.getElementById("detik").innerHTML = tanggal.getSeconds();

    }
</script>

<style>
    #jam-digital{overflow:hidden; width:700px}
    #tanggal{
      float:right; width:250px; height:40px; background-color:#17a2b8; margin-right:15px
    }

    #hours{
      float:right; width:80px; height:40px; background-color:#6B9AB8;
    }
    #minute{
      float:right; width:80px; height:40px; background-color:#A5B1CB;
    }
    #second{
      float:right; width:80px; height:40px; background-color:#FF618A;
    }
    #jam-digital p{
      color:#FFF; font-size:24px; text-align:center; margin-top:5px
    }
</style>

<?php
function tgl_indo($tanggal){
	$bulan = array (
		1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	$pecahkan = explode('-', $tanggal);

	// variabel pecahkan 0 = tanggal
	// variabel pecahkan 1 = bulan
	// variabel pecahkan 2 = tahun

	return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];

}
?>



<div class="card">
  <h2 class="card-header"><i class="fa fa fas fa-book"></i> DATA LEGALITAS
  <div id="jam-digital" class="float-right">
      <div id="second"><p id="detik"></p></div>
        <div id="minute"><p id="menit"></p></div>
        <div id="hours"><p id="jam"></p></div>
          <div id="tanggal"><p ><?= tgl_indo(date('Y-m-d')); ?></p></div>



      </div>
    </h2>
                         <div class="card-body">
                             <table class="table table-striped">
                                 <thead>
                                     <tr>
                                         <th scope="col" width="5%"><h3>No</h3></th>
                                         <th scope="col" ><h3>Legalitas</h3></th>
                                         <th scope="col" width="20%"><h3>Masa Berlaku</h3></th>
                                         <th scope="col" width="20%"><h3>Status</h3></th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <?php $no=1; foreach ($legalitas as $l):
                                      
                                      if ($l->masa_berlaku == '--') {
                                        
                                      }else{
                                      
                                      ?>
                                       <tr>
                                       
                                         <td style="font-size:17px;"><?= $no++; ?></td>
                                         <td style="font-size:17px;"><?= $l->nama_legalitas; ?></td>
                                         <td style="font-size:17px;"><?php
                                         
                                          $msberlaku = $l->masa_berlaku;
                                          $waktuproses = $l->waktu_proses;
                                          $pecah1 = explode ("-", $msberlaku);
                                          $target = mktime(0, 0, 0,$pecah1[1], $pecah1[2],$pecah1[0]) ;
                                          $hari_ini = time () ;
                                          $rentang =($target-$hari_ini) ;
                                          $hari =(int) ($rentang/86400) ;
                                          if ($hari < 0) {
                                            echo "Sudah Berakhir";
                                          }else{
                                            echo $hari.' Hari Lagi';
                                          }
                                          ?>

                                        </td>
                                         <td style="font-size:17px;">
                                           <?php
                                           if ($hari >= 0 && $hari <= $waktuproses) {
                                             echo '<div class="p-2 sb-2 bg-warning text-white">Perpanjang</div>';
                                           }if ($hari > $waktuproses ) {
                                             echo '<div class="p-2 sb-2 bg-success text-white">Aktif</div>';
                                           }
                                           if ($hari < 0)  {
                                             echo '<div class="p-2 sb-2 bg-danger text-white">Tidak Aktif</div>';
                                           }
                                            ?>
                                         </td>
                                       </tr>
                                          <?php } ?>
                                     <?php endforeach; ?>
                                 </tbody>
                             </table>
                         </div>
                     </div>
