                       
                        <!-- ============================================================== -->
                        <!-- basic form  -->
                        <!-- ============================================================== -->
                        <div class="row">
                        <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1">
                        </div>
                            <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10">
                                <div class="card">
                                    
                                    <div class="card-body">
                                        <form action="<?= base_url() ?>anggota/tambah" method="POST">
                                        <table class="table table-bordered">
                                            <tr>
                                            <td width="20%"><label for="nim" class="col-form-label">NIM</label></td>
                                            <td>
                                            <div class="form-group">
                                                <input id="nim" type="number" class="form-control form-control-sm" name="nim">
                                            </div>
                                            </td>
                                            </tr>

                                            <tr>
                                            <td width="20%"><label for="namaA" class="col-form-label">Nama Anggota</label></td>
                                            <td>
                                            <div class="form-group">
                                                <input id="namaA" type="text" class="form-control form-control-sm" name="namaA">
                                            </div>
                                            </td>
                                            </tr>

                                            <tr>
                                            <td width="20%"><label for="tmpt" class="col-form-label">Tempat lahir</label></td>
                                            <td>
                                            <div class="form-group">
                                                <input id="tmpt" type="text" class="form-control form-control-sm" name="tmpt">
                                            </div>
                                            </td>
                                            </tr>

                                            <tr>
                                            <td width="20%"><label for="tglhr" class="col-form-label">Tanggal Lahir</label></td>
                                            <td>
                                            <div class="form-group">
                                                <input id="tglhr" type="date" class="form-control form-control-sm" name="tglhr">
                                            </div>
                                            </td>
                                            </tr>

                                            <tr>
                                            <td width="20%"><label for="jk" class="col-form-label">Jenis Kelamin</label></td>
                                            <td>
                                            <div class="form-group">
                                            <select class="form-control form-control-sm" id="jk" name="jk">
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
                                                <input id="prodi" type="text" class="form-control form-control-sm" name="prodi">
                                            </div>
                                            </td>
                                            </tr>

                                            <tr>
                                            <td width="20%"><label for="thn" class="col-form-label">Tahun Masuk</label></td>
                                            <td>
                                            <div class="form-group">
                                                <input id="thn" type="number" class="form-control form-control-sm" name="thn">
                                            </div>
                                            </td>
                                            </tr>

                                            <tr>
                                            <td colspan="2">
                                            <a href="<?= base_url() ?>anggota" class="btn btn-primary"><i class="fa fa-fw fas fa-arrow-circle-left"></i> Kembali</a>
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
                        