<?php 
$pinjam = date('d-m-Y');
$tuju_hari = mktime(0,0,0,date('n'),date("j")+7,date("Y"));
$kembali = date("d-m-Y", $tuju_hari);

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
                                        <form action="<?= base_url(); ?>transaksi/tambah" method="POST">
                                        <table class="table table-bordered">
                                        
                                            <tr>
                                            <td width="20%"><label for="jbuku" class="col-form-label">Nama Dokumen</label></td>
                                            <td>
                                            <div class="form-group">
                                            <select class="form-control form-control-sm" id="nmdokumen" name="nmdokumen">
                                            <?php
                                             
                                            foreach( $buku as $bk) : ?>
                                            <option value="<?= $bk->kode_buku ?>.<?= $bk->nama_dokumen ?>"><?= $bk->nama_dokumen ?></option>
                                            <?php endforeach; ?>
                                            </select>
                                                
                                            </div>
                                            </td>
                                            </tr>

                                        
                                            <tr>
                                                <td><label for="nmdokumen" class="col-form-label">Pembuat</label></td>
                                                    <td>
                                                        <div class="form-group">
                                            <select class="form-control form-control-sm" id="pembuat" name="pembuat">
                                            <?php
                                             
                                            foreach( $user as $u) : ?>
                                            <option value="<?= $u->id_user ?>. <?= $u->nama_user ?>"><?= $u->nama_user ?></option>
                                            <?php endforeach; ?>
                                                </select>
                                            </div>
                                                    </td>
                                            </tr>

                                            <tr>

                                            <tr>
                                                <td>Peminjam</td>
                                                <td><input type="text" class="form-control form-control-sm" id="peminjam" name="peminjam" required></td>
                                            </tr>
                                                
                                                <td colspan="2"><b>Keterangan Hari-Bulan-Tahun</b></td>
                                            </tr>

                                            <tr>
                                            <td width="20%"><label for="tglp" class="col-form-label">Tanggal Pinjam</label></td>
                                            <td>
                                            <div class="form-group">
                                                <input id="tglp" type="text" class="form-control form-control-sm" name="tglp" value="<?= $pinjam; ?>">
                                            </div>
                                            </td>
                                            </tr>

                                            

                                            <tr>
                                            <td width="20%"><label for="ket" class="col-form-label">Keterangan</label></td>
                                            <td>
                                            <div class="form-group">
                                               <textarea name="ket" class="form-control form-control-sm" required></textarea>
                                            </div>
                                            </td>
                                            </tr>

                                            <tr>
                                            <td colspan="2">
                                            <a href="<?= base_url(); ?>transaksi/index" class="btn btn-primary"><i class="fa fa-fw fas fa-arrow-circle-left"></i> Kembali</a>
                                            <button type="submit" class="btn btn-success"><i class="fa fa-fw fas fa-save"></i> Simpan</button>
                                            
                                            </td>
                                            </tr>
                                           
                                        </table>
                                            
                                        </form>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1">
                        </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end basic form  -->
                        <!-- ============================================================== -->
                        