<?php 
$pinjam = date('d-m-Y');
$tuju_hari = mktime(0,0,0,date('n'),date("j")+7,date("Y"));
$kembali = date("d-m-Y", $tuju_hari);


function selisih_tanggal($tgl_dateline, $tgl_kembali){

    $tgl_dateline_pcs = explode("-", $tgl_dateline);
		$tgl_dateline_pcs = $tgl_dateline_pcs[2]."-".$tgl_dateline_pcs[1]."-".$tgl_dateline_pcs[0];

		$tgl_kembali_pcs = explode("-", $tgl_kembali);
		$tgl_kembali_pcs = $tgl_kembali_pcs[2]."-".$tgl_kembali_pcs[1]."-".$tgl_kembali_pcs[0];

		$selisih = strtotime($tgl_kembali_pcs) - strtotime($tgl_dateline_pcs);

			$selisih = $selisih / 86400;
			if ($selisih>=1) {
				$hasil_tgl = floor($selisih);
			}else{
				$hasil_tgl = 0;
			}
			return $hasil_tgl;
}






?>


                        <!-- ============================================================== -->
                        <!-- basic form  -->
                        <!-- ============================================================== -->
                        <div class="row">
                        <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1">
                        </div>
                            <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10">
                                <div class="card">
                                    
                                    <div class="card-body">
                                        <?php foreach ($transaksi as $t) { ?>
                                        <form action="<?= base_url(); ?>transaksi/pengembalian" method="post">
                                        <table class="table table-bordered">
                                        <input type="hidden" value="<?= $t->id_transaksi ?>" name="id">
                                        
                                            <tr>
                                            <td width="20%"><label for="jbuku" class="col-form-label">Kode Buku</label></td>
                                            <td>
                                            <input type="text" class="form-control form-control-sm" name="kdbuku" value="<?= $t->kode_buku ?>" readonly>
                                            </td>
                                            </tr>
                                            <tr>
                                            <td width="20%"><label for="jbuku" class="col-form-label">Nama Dokumen</label></td>
                                            <td>
                                                <input id="jbuku"  type="text" class="form-control form-control-sm" name="nmdokumen" value="<?=  $t->nama_dokumen ?>" readonly>
                                            </td>
                                            </tr>

                                            <tr>
                                            <td width="20%"><label for="pembuat" class="col-form-label">Pembuat</label></td>
                                            <td>
                                            <div class="form-group">
                                                <input id="pembuat" type="text"  class="form-control form-control-sm" name="pembuat"  value="<?=  $t->nama_user ?>" readonly>
                                            </div>
                                            </td>
                                            </tr>

                                            <tr>
                                            <td width="20%"><label for="namaA" class="col-form-label">Nama Peminjam</label></td>
                                            <td>
                                            <div class="form-group">
                                                <input id="namaA" type="text"  class="form-control form-control-sm" name="namaA"  value="<?=  $t->peminjam ?>" readonly>
                                            </div>
                                            </td>
                                            </tr>

                                            <tr>
                                            <td width="20%"><label for="tglp" class="col-form-label">Tanggal Pinjam</label></td>
                                            <td>
                                            <div class="form-group">
                                                <input id="tglp" type="text"  class="form-control form-control-sm" name="tglp"  value="<?=  $t->tgl_pinjam ?>" readonly>
                                            </div>
                                            </td>
                                            </tr>

                                            <tr>
                                            <td width="20%"><label for="tglp" class="col-form-label">Keterangan</label></td>
                                            <td>
                                            <div class="form-group">
                                                <textarea name="ket" class="form-control form-control-sm" readonly><?= $t->ket ?></textarea>
                                            </div>
                                            </td>
                                            </tr>

                                            

                                            <?php 

                                            $tgl = $t->tgl_pinjam;
                                            $tgl_dateline = date("d-m-Y", strtotime($tgl));
                                            $tgl_kembali=date('d-m-Y');
                                            $lambat= selisih_tanggal($tgl_dateline,$tgl_kembali);
                                            $denda1=2000;
                                            $denda=$lambat*$denda1;

                                            ?>

                                           
                                            
                                           
                                                <input id="lambat" type="hidden"  class="form-control form-control-sm" name="lambat" value="<?= $lambat; ?>" readonly>
                                            
                                            

                                            

                                            <tr>
                                            <td colspan="2">
                                            
                                            <a href="<?= base_url(); ?>transaksi" class="btn btn-primary"><i class="fa fa-fw fas fa-arrow-circle-left"></i> Kembali</a>
                                            <button type="submit" class="btn btn-success"><i class="fa fa-fw fas fa-save"></i> Kembalikan</button>
                                            </form>
                                            
                                            </td>
                                            </tr>
                                           
                                        </table>
                                             <?php } ?>
                                        
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1">
                        </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end basic form  -->
                        <!-- ============================================================== -->
                        