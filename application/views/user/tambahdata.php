                       
                        <!-- ============================================================== -->
                        <!-- basic form  -->
                        <!-- ============================================================== -->
                        <div class="row">
                        <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1">
                        </div>
                            <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10">
                                <div class="card">
                                    
                                    <div class="card-body">
                                        <form action="<?= base_url(); ?>user/tambah" method="POST" enctype="multipart/form-data">
                                        <table border="0">
                                            <tr>
                                                <td width="100%" colspan="2"><?= $this->session->flashdata('Pesan') ?></td>
                                                <td></td>
                                                
                                            </tr>
                                        </table>
                                        <table class="table table-bordered">
                                            <tr>
                                            <td width="20%"><label for="namaU" class="col-form-label">Nama Lengkap</label></td>
                                            <td>
                                            <div class="form-group">
                                                <input id="namaU" type="text" class="form-control form-control-sm" name="namaU">
                                            </div>
                                            </td>
                                            </tr>

                                            <tr>
                                            <td width="20%"><label for="username" class="col-form-label">Username</label></td>
                                            <td>
                                            <div class="form-group">
                                                <input id="username" type="text" class="form-control form-control-sm" name="username">
                                            </div>
                                            </td>
                                            </tr>

                                            <tr>
                                            <td width="20%"><label for="pass" class="col-form-label">Passoword</label></td>
                                            <td>
                                            <div class="form-group">
                                                <input id="pass" type="password" class="form-control form-control-sm" name="pass">
                                            </div>
                                            </td>
                                            </tr>

                                            <tr>
                                            <td width="20%"><label for="email" class="col-form-label">Email</label></td>
                                            <td>
                                            <div class="form-group">
                                                <input id="email" type="email" class="form-control form-control-sm" name="email">
                                            </div>
                                            </td>
                                            </tr>

                                            <tr>
                                            <td width="20%"><label for="foto" class="col-form-label">Foto</label></td>
                                            <td>
                                            <div class="form-group">
                                                <input id="foto" type="file" class="form-control form-control-sm" name="foto">
                                            </div>
                                            </td>
                                            </tr>

                                            <tr>
                                            <td width="20%"><label for="lvl" class="col-form-label">Level</label></td>
                                            <td>
                                            <div class="form-group">
                                                <select name="lvl" class="form-control form-control-sm" >
                                                    <option value="admin">admin</option>
                                                    <option value="user">user</option>
                                                </select>
                                            </div>
                                            </td>
                                            </tr>

                                            <tr>
                                            <td colspan="2">
                                            <a href="<?= base_url(); ?>user" class="btn btn-primary"><i class="fa fa-fw fas fa-arrow-circle-left"></i> Kembali</a>
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
                        