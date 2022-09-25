<?php

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



    <div class="row">
                    <!-- ============================================================== -->
                    <!-- basic table  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    
                        <div class="card">
                            <div class="card-header">
                            <table border="0" width="100%">
                                 <tr>
                                    <td colspan="6"><?= $this->session->flashdata('Pesan') ?></td>
                                </tr>
                            <tr>
                                <td>
                                <a href="<?= base_url(); ?>transaksi/formtambah" class="btn btn-success"><i class="fa fa-fw  fas fa-plus"></i> Input Transaksi</a>
                                
                                </td>
                                
                                <td width="40%">
                                <form name='frmSearch' action='' method='GET'>
                                <div class="input-group">
                                <input type="text" class="form-control" placeholder="Cari transaksi..." aria-label="Recipient's username" aria-describedby="basic-addon2" name='keyword' value="<?php
                                   if (!empty($_GET['keyword'])) {
                                       echo $_GET['keyword'];
                                   }
                                   ?>" id='keyword' maxlength='25' autocomplete="off">
                                 <div class="input-group-append">
                                 <button class="btn btn-primary btn-sm" type="submit"><i class="fa fa-fw  fas fa-search"></i></button>
                                 </div>
                                </div>
                            </form>
                                 
                                </td>
                            </tr>
                            </table>
                                
                                
                               
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Kode Buku</th>
                                                <th>Nama Dokumen</th>
                                                <th>Pembuat</th>
                                                <th>Nama Pegawai</th>
                                                <th>Tanggal Pinjam</th>
                                                
                                                <th>Aksi</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        
                                        foreach( $hasil as $t) : ?>
                                        <?php 
                                        @$nomer++;
                                        ?>
                                            <tr>
                                                <td><?= $nomer; ?></td>
                                                <td><?= $t->kode_buku ?></td>
                                                <td><?= $t->nama_dokumen ?></td>
                                                <td><?= $t->nama_user ?></td>
                                                <td><?= $t->peminjam ?></td>
                                                <td><?= $t->tgl_pinjam ?></td>
                                                
                                                
                                                <td>
                                                <a href="<?= base_url(); ?>transaksi/detail/<?= $t->id_transaksi ?>" class="btn btn-primary btn-sm " data-id="<?= $t->id_transaksi ?>">detail</a>
                                                </td>
                                                
                                                    </tr>
                                                    <?php endforeach; ?>

                                                    <tr>
                                                    	<td colspan="8"><br>
                                                    		<nav aria-label="Page Naigation example">
                                                    		<ul class="pagination justify-content-center">

                                                    			<?php
                        											foreach ($links as $link) {
                           											 echo "<li class='page-item'>" . $link . "</li>";
                        											}
                        											?>
                        										</ul>
                        									</nav>
                                                    	</td>
                                                    </tr>
                                        </tbody>
                                       
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end basic table  -->
                    <!-- ============================================================== -->
                </div>
       