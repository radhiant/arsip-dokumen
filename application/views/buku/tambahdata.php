                     
                        
                        <!-- ============================================================== -->
                        <!-- basic form  -->
                        <!-- ============================================================== -->
                        <div class="row">
                        <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1">
                        </div>
                            <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10">
                                <div class="card">
                                    
                                    <div class="card-body">
                                        <form action="<?= base_url(); ?>/buku/tambah" method="POST" enctype="multipart/form-data">
                                        <table class="table table-bordered">

                                        <tr>
                                            <td width="20%"><label for="kdbuku" class="col-form-label">Kode Buku</label></td>
                                            <td colspan="3">
                                            <div class="form-group">
                                                <input id="kdbuku" type="text" class="form-control form-control-sm" name="kdbuku" value="<?= $kodeunik; ?>" readonly>
                                            </div>
                                            </td>
                                            </tr>

                                            <tr>
                                            <td width="20%"><label for="nmdokumen" class="col-form-label">Nama Dokumen</label></td>
                                            <td colspan="3">
                                            <div class="form-group">
                                                <input id="nmdokumen" type="text" class="form-control form-control-sm" name="nmdokumen" required>
                                            </div>
                                            </td>
                                            </tr>

                                            <tr>
                                            <td width="20%"><label for="pembuat" class="col-form-label">Pembuat</label></td>
                                            <td colspan="3">
                                            <div class="form-group">
                                                <input id="pembuat" type="text" class="form-control form-control-sm" name="pembuat" required>
                                            </div>
                                            </td>
                                            </tr>

                                            <tr>
                                            <td width="20%"><label for="tahun" class="col-form-label">Tahun</label></td>
                                            <td width="15%">
                                            <div class="form-group">
                                                <input id="date" type="number" class="form-control form-control-sm" name="tgl" required placeholder="tgl">
                                            </div>
                                            </td>
                                            
                                            <td width="20%">
                                            <div class="form-group">
                                            <select class="form-control form-control-sm" id="lokasi" name="bulan" required>
                                                    <option value="Januari">Januari</option>
                                                    <option value="Februari">Februari</option>
                                                    <option value="Maret">Maret</option>
                                                    <option value="April">April</option>
                                                    <option value="Mei">Mei</option>
                                                    <option value="Juni">Juni</option>
                                                    <option value="Juli">Juli</option>
                                                    <option value="Agustus">Agustus</option>
                                                    <option value="September">September</option>
                                                    <option value="Oktober">Oktober</option>
                                                    <option value="November">November</option>
                                                    <option value="Desember">Desember</option>
                                                    
                                                </select>
                                            </div>
                                            
                                            </td>

                                            <td width="20%">
                                            <div class="form-group">
                                                <input id="date" type="number" class="form-control form-control-sm" name="tahun" required placeholder="tahun">
                                            </div>
                                            
                                            </td>

                                            </tr>


                                            <tr>
                                            <td width="20%"><label for="jumlah" class="col-form-label">Keterangan</label></td>
                                            <td colspan="3">
                                            <div class="form-group">
                                                <textarea name="ket" class="form-control form-control-sm" required></textarea>
                                            </div>
                                            </td>
                                            </tr>
                                            <tr>
                                            <td width="20%"><label for="jumlah" class="col-form-label">Lampiran</label></td>
                                            <td colspan="3">
                                            <div class="form-group">
                                                <input type="file" name="lampiran" class="form-control form-control-sm">
                                            </div>
                                            </td>
                                            </tr>

                                            <tr>
                                            <td width="20%"><label for="lokasi" class="col-form-label">Lokasi</label></td>
                                            <td colspan="3">
                                            <div class="form-group">
                                                <input type="text" name="lokasi" class="form-control form-control-sm" required>
                                            </div>
                                            </td>
                                            </tr>

                                            <tr>
                                            <td colspan="4">
                                            <a href="<?= base_url(); ?>/buku" class="btn btn-primary"><i class="fa fa-fw fas fa-arrow-circle-left"></i> Kembali</a>
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
                        