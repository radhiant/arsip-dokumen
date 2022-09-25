
                        <!-- ============================================================== -->
                        <!-- basic form  -->
                        <!-- ============================================================== -->
                        <div class="row">
                        <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1">
                        </div>
                            <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10">
                                <div class="card">

                                    <div class="card-body">

                                        <?php foreach ($buku as $bk) {



                                            ?>

                                        <form action="<?= base_url(); ?>/buku/ubah" method="POST">
                                        <table class="table table-bordered">
                                        <tr>
                                            <td width="20%"><label for="kdbuku" class="col-form-label">Kode Buku</label></td>
                                            <td>
                                            <div class="form-group">
                                                <input id="kdbuku" type="text"  class="form-control form-control-sm" name="kdbuku" value="<?= $bk->kode_buku ?>" readonly>
                                            </div>
                                            </td>
                                            </tr>

                                            <tr>
                                            <td width="20%"><label for="jbuku" class="col-form-label">Nama Dokumen</label></td>
                                            <td>
                                            <div class="form-group">
                                                <input id="jbuku" type="text"  class="form-control form-control-sm" name="jbuku" value="<?= $bk->nama_dokumen ?>" readonly>
                                            </div>
                                            </td>
                                            </tr>



                                            <tr>
                                            <td width="20%"><label for="pembuat"  class="col-form-label">pembuat</label></td>
                                            <td>
                                            <div class="form-group">
                                                <input id="pembuat" type="text"  value="<?= $bk->pembuat ?>" class="form-control form-control-sm" name="pembuat" readonly>
                                            </div>
                                            </td>
                                            </tr>

                                            <tr>
                                            <td width="20%"><label for="tahun" class="col-form-label">Tahun</label></td>
                                            <td>
                                            <div class="form-group">

                                                <input id="tahun" type="text"  value="<?= $bk->tahun ?>" class="form-control form-control-sm" name="tahun" readonly>

                                            </div>
                                            </td>
                                            </tr>


                                            <tr>
                                            <td width="20%"><label for="lampiran" class="col-form-label">Lampiran</label></td>
                                            <td>
                                            <div class="form-group">
                                            <?php

                                                if($bk->lampiran == "Tidak Mengupload file"){ ?>
                                                <?= $bk->lampiran; ?>
                                                <?php } else{ ?>

                                                <a href="<?= base_url();?>buku/dfile/<?= $bk->lampiran;?>"> Klik Disini <i class="fa fa-fw  fas fa-download"></i></a>
                                                <?php } ?>
                                            </div>
                                            </td>
                                            </tr>

                                            <tr>
                                            <td width="20%"><label for="jumlah" class="col-form-label">Keterangan</label></td>
                                            <td>
                                            <div class="form-group">
                                                <textarea name="ket" class="form-control form-control-sm" readonly><?= $bk->ket ?></textarea>
                                            </div>
                                            </td>
                                            </tr>

                                            <tr>
                                            <td width="20%"><label for="lokasi" class="col-form-label">Lokasi</label></td>
                                            <td>
                                            <div class="form-group">
                                                    <input type="text" class="form-control form-control-sm" value="<?=  $bk->lokasi?>" readonly>
                                            </div>
                                            </td>
                                            </tr>

                                            <tr>
                                            <td colspan="2">
                                            <a href="<?= base_url();?>buku" class="btn btn-primary"><i class="fa fa-fw fas fa-arrow-circle-left"></i> Kembali</a>


                                            </td>
                                            </tr>

                                        </table>

                                        </form>
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
