                             <!-- ============================================================== -->
                        <!-- basic form  -->
                        <!-- ============================================================== -->
                        <div class="row">
                        <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1">
                        </div>
                            <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10">
                                <div class="card">
                                    
                                    <div class="card-body">
                                        <?php foreach ($user as $u) { ?>
                                        <form action="<?= base_url(); ?>user/ubah" method="POST" enctype="multipart/form-data">
                                        <table border=0 width="100%">
                                        <tr>
                                            <td colspan="2">
                                                <?= $this->session->flashdata('Pesan') ?>
                                            </td>
                                        </tr>
                                        </table>
                                        <table class="table table-bordered">
                                        <input type="hidden" name="id" id="id" value="<?= $u->id_user ?>">
                                        
                                            <tr>
                                            <td width="20%"><label for="namaU" class="col-form-label">Nama Lengkap</label></td>
                                            <td>
                                            <div class="form-group">
                                                <input id="namaU" type="text" value="<?= $u->nama_user ?>" class="form-control form-control-sm" name="namaU">
                                            </div>
                                            </td>
                                            </tr>

                                            <tr>
                                            <td width="20%"><label for="username"  class="col-form-label">Username</label></td>
                                            <td>
                                            <div class="form-group">
                                                <input id="username" type="text" value="<?= $u->username ?>" class="form-control form-control-sm" name="username">
                                            </div>
                                            </td>
                                            </tr>

                                            <tr>
                                            <td width="20%"><label for="email" class="col-form-label">Email</label></td>
                                            <td>
                                            <div class="form-group">
                                                <input id="email" type="email" value="<?= $u->email ?>" class="form-control form-control-sm" name="email">
                                            </div>
                                            </td>
                                            </tr>

                                            <tr>
                                            <td width="20%"><label for="foto" class="col-form-label">Foto</label></td>
                                            <td> 
                                                <img src="<?= base_url(); ?>assets/images/user/<?= $u->foto ?>" width="100" >
                                            <div class="form-group">
                                            <input id="flama" type="hidden" value="<?= $u->foto ?>"  name="flama">
                                            <input type="file" class="form-control form-control-sm" name="foto">
                                            </div>
                                            </td>
                                            </tr>

                                            <tr>
                                            <td width="20%"><label for="lvl" class="col-form-label">Level</label></td>
                                            <td>

                                            <div class="form-group">
                                                <select name="lvl" class="form-control form-control-sm" >
                                                    <option value="<?= $u->lvl ?>"><?= $u->lvl ?></option>
                                                    <option value="admin">admin</option>
                                                    <option value="user">user</option>
                                                </select>
                                            </div>
                                            </td>
                                            </tr>

                                            <tr>
                                            <td colspan="2">
                                            <a href="<?= base_url(); ?>user" class="btn btn-primary"><i class="fa fa-fw fas fa-arrow-circle-left"></i> Kembali</a>
                                            <button type="submit" class="btn btn-success"><i class="fa fa-fw fas fa-save"></i> Ubah</button>
                                            
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
                        