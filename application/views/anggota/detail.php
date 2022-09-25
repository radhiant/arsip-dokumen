                    
                        <!-- ============================================================== -->
                        <!-- basic form  -->
                        <!-- ============================================================== -->
                        <div class="row">
                        <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1">
                        </div>
                            <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10">
                                <div class="card">
                                    
                                    <div class="card-body">
                                         <?php foreach ($anggota as $a) { ?>
                                        <form action="<?= base_url(); ?>anggota/tambah" method="POST">
                                        <table class="table table-bordered">
                                            <tr>
                                            <td width="20%"><label for="nim" class="col-form-label">NIM</label></td>
                                            <td>
                                            <div class="form-group">
                                                <input id="nim" type="number" disabled class="form-control form-control-sm" name="nim" value="<?= $a->nim ?>">
                                            </div>
                                            </td>
                                            </tr>

                                            <tr>
                                            <td width="20%"><label for="namaA" class="col-form-label">Nama Anggota</label></td>
                                            <td>
                                            <div class="form-group">
                                                <input id="namaA" type="text" disabled class="form-control form-control-sm" name="namaA" value="<?=  $a->nama_anggota ?>">
                                            </div>
                                            </td>
                                            </tr>

                                            <tr>
                                            <td width="20%"><label for="tmpt" class="col-form-label">Tempat lahir</label></td>
                                            <td>
                                            <div class="form-group">
                                                <input id="tmpt" type="text" disabled class="form-control form-control-sm" name="tmpt" value="<?= $a->tempat_lahir ?>">
                                            </div>
                                            </td>
                                            </tr>

                                            <tr>
                                            <td width="20%"><label for="tglhr" class="col-form-label">Tanggal Lahir</label></td>
                                            <td>
                                            <div class="form-group">
                                                <input id="tglhr" type="date" disabled class="form-control form-control-sm" name="tglhr" value="<?=  $a->tgl_lahir ?>">
                                            </div>
                                            </td>
                                            </tr>

                                            <tr>
                                            <td width="20%"><label for="jk" class="col-form-label">Jenis Kelamin</label></td>
                                            <td>
                                            <div class="form-group">
                                            <select class="form-control form-control-sm" id="jk" disabled name="jk">
                                                    <option value="<?= $a->jk ?>"> <?= $a->jk ?></option>
                                                    <option value="Perempuan">Perempuan</option>
                                                    <option value="Laki-laki">Laki-laki</option>
                                            </select>
                                            </div>
                                            </td>
                                            </tr>

                                            <tr>
                                            <td width="20%"><label for="prodi" class="col-form-label">Prodi</label></td>
                                            <td>
                                            <div class="form-group">
                                                <input id="prodi" type="text" disabled class="form-control form-control-sm" name="prodi" value="<?=  $a->prodi ?>">
                                            </div>
                                            </td>
                                            </tr>

                                            <tr>
                                            <td width="20%"><label for="thn" class="col-form-label">Tahun Masuk</label></td>
                                            <td>
                                            <div class="form-group">
                                                <input id="thn" type="number" disabled class="form-control form-control-sm" name="thn" value="<?=  $a->thn_masuk ?>">
                                            </div>
                                            </td>
                                            </tr>

                                            <tr>
                                            <td colspan="2">
                                            <a href="<?= base_url(); ?>anggota" class="btn btn-primary"><i class="fa fa-fw fas fa-arrow-circle-left"></i> Kembali</a>
                                            
                                            
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
                        