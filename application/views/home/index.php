<div class="row">
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body bg-primary">
                                    <table width="100%" border="0">
                                        <tr>
                                            <td width="70%"><h1 style="color:white"><?= $buku; ?></h1></td>
                                            <td rowspan="2" align="center"><font size="100"><i class="fa fa fas fa-file"></i></font></td>
                                        </tr>
                                        <tr>
                                            <td><p class="card-text"> Data Dokumen</p></td>
                                        </tr>
                                    </table>

                                    </div>
                                    <div class="card-footer p-0 text-center bg-primary">
                                        <div class="card-footer-item card-footer-item-bordered">
                                            <a href="<?= base_url(); ?>buku/index" class="card-link" style="color:white">Lihat Selengkapnya <i class="fa fa fas fa-arrow-alt-circle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body bg-success">

                                        <table width="100%" border="0">
                                        <tr>
                                            <td width="70%"><h1 style="color:white"><?= $lelang; ?></h1></td>
                                            <td rowspan="2" align="center"><font color="white" size="100"><i class="fa fa fas fa-book"></i></font></td>
                                        </tr>
                                        <tr>
                                            <td><p class="card-text" style="color:white;">Data Lelang</p></td>
                                        </tr>
                                    </table>

                                    </div>
                                    <div class="card-footer p-0 text-center bg-success">
                                        <div class="card-footer-item card-footer-item-bordered">
                                            <a href="<?= base_url(); ?>lelang/index" class="card-link" style="color:white">Lihat Selengkapnya <i class="fa fa fas fa-arrow-alt-circle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body bg-info">

                                         <table width="100%" border="0">
                                        <tr>
                                            <td width="70%"><h1 style="color:white"><?= $transaksi; ?></h1></td>
                                            <td rowspan="2" align="center"><font color="white" size="100"><i class="fa fa fas fa-random"></i></font></td>
                                        </tr>
                                        <tr>
                                            <td><p class="card-text" style="color:white;"> Data Pinjam</p></td>
                                        </tr>
                                    </table>

                                    </div>
                                    <div class="card-footer p-0 text-center bg-info">
                                        <div class="card-footer-item card-footer-item-bordered">
                                            <a href="<?= base_url(); ?>transaksi/index" class="card-link" style="color:white">Lihat Selengkapnya <i class="fa fa fas fa-arrow-alt-circle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body bg-success">

                                        <table width="100%" border="0">
                                        <tr>
                                            <td width="70%"><h1 style="color:white"><?= $legalitas; ?></h1></td>
                                            <td rowspan="2" align="center"><font color="white" size="100"><i class="fa fa fas fa-book"></i></font></td>
                                        </tr>
                                        <tr>
                                            <td><p class="card-text" style="color:white;">Data Legalitas</p></td>
                                        </tr>
                                    </table>

                                    </div>
                                    <div class="card-footer p-0 text-center bg-success">
                                        <div class="card-footer-item card-footer-item-bordered">
                                            <a href="<?= base_url(); ?>legalitas/index" class="card-link" style="color:white">Lihat Selengkapnya <i class="fa fa fas fa-arrow-alt-circle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                             <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body bg-brand">

                                        <table width="100%" border="0">
                                        <tr>
                                            <td width="70%"><h1 style="color:white"><?= $pengembalian ?></h1></td>
                                            <td rowspan="2" align="center"><font color="white" size="100"><i class="fa fa fas fas fa-redo"></i></font></td>
                                        </tr>
                                        <tr>
                                            <td><p class="card-text" style="color:white;"> Data Pengembalian</p></td>
                                        </tr>
                                    </table>

                                    </div>
                                    <div class="card-footer p-0 text-center bg-brand">
                                        <div class="card-footer-item card-footer-item-bordered">
                                            <a href="<?= base_url(); ?>pengembalian/index" class="card-link" style="color:white">Lihat Selengkapnya <i class="fa fa fas fa-arrow-alt-circle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            if ($this->session->userdata('level') == 'admin') { ?>

                             <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body bg-secondary">

                                        <table width="100%" border="0">
                                        <tr>
                                            <td width="70%"><h1 style="color:white"><?= $user ?></h1></td>
                                            <td rowspan="2" align="center"><font color="white" size="100"><i class="fa fa fas fa-users"></i></font></td>
                                        </tr>
                                        <tr>
                                            <td><p class="card-text" style="color:white;">Data Admin</p></td>
                                        </tr>
                                    </table>


                                    </div>
                                    <div class="card-footer p-0 text-center bg-secondary">
                                        <div class="card-footer-item card-footer-item-bordered">
                                            <a href="<?= base_url(); ?>user/index" class="card-link" style="color:white">Lihat Selengkapnya <i class="fa fa fas fa-arrow-alt-circle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php } ?>
