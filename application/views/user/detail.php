     
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
                                        <form action="<?= base_url(); ?>user/ubah" method="POST">
                                        <table class="table table-bordered">
                                        <input type="hidden" name="id" id="id" value="<?= $u->id_user ?>">

                                            <tr>
                                            <td rowspan="5" width="10%"> <img src="<?= base_url(); ?>assets/images/user/<?= $u->foto ?>" width="150" ></td>
                                            
                                            </tr>

                                            <tr>
                                            
                                            <td width="20%"><label for="namaU" class="col-form-label">Nama Lengkap</label></td>
                                            <td>
                                            <p><?= $u->nama_user ?></p>
                                            
                                            </td>
                                            </tr>

                                            <tr>
                                            
                                            <td width="20%"><label for="username"  class="col-form-label">Username</label></td>
                                            <td>
                                            <p><?= $u->username ?></p>
                                            </td>
                                            </tr>

                                            <tr>
                                            
                                            <td width="20%"><label for="email" class="col-form-label">Email</label></td>
                                            <td>
                                            <p><?= $u->email ?></p>
                                            </td>
                                            </tr>

                                            

                                            <tr>
                                            
                                            <td width="20%"><label for="lvl" class="col-form-label">Level</label></td>
                                            <td>
                                            <p><?= $u->lvl ?></p>
                                            
                                            </td>
                                            </tr>

                                            <tr>
                                            
                                            <td colspan="3">
                                            <?php if ($this->session->userdata('level') == 'admin') { ?>
                                            
                                            <a href="<?= base_url(); ?>user" class="btn btn-primary"><i class="fa fa-fw fas fa-arrow-circle-left"></i> Kembali</a>

                                            <?php } else{ ?>

                                            <a href="<?= base_url(); ?>home/index" class="btn btn-primary"><i class="fa fa-fw fas fa-arrow-circle-left"></i> Kembali</a>

                                            <?php } ?>
                                            
                                            
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
                        