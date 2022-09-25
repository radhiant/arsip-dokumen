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
                            <a href="<?= base_url(); ?>lelang/formtambah" class="btn btn-success"><i class="fa fa-fw  fas fa-plus"></i> Tambah Data</a>

                            </td>

                            <td width="40%">
                            <form action="" method="GET">
                            <div class="input-group">

                            <input type="text" class="form-control" placeholder="Cari Data Lelang..." aria-label="Recipient's username" aria-describedby="basic-addon2" name="keyword" value="<?php
                               if (!empty($_GET['keyword'])) {
                                   echo $_GET['keyword'];
                               }
                               ?>" id='keyword' maxlength='100' autocomplete="off">
                             <div class="input-group-append">
                             <button class="btn btn-primary btn-sm" type="submit"><i class="fa fa-fw  fas fa-search"></i></button>

                             </div>
                         </form>
                            </div>

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
                                            <th>Projek</th>
                                            <th>OPD</th>
                                            <th>Kabupaten/Kota</th>
                                            <th>Tahun</th>
                                            <th width="1%">Aksi</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php

                                    foreach( $hasil as $l) : ?>
                                   <?php  @$nomer++; ?>
                                        <tr>
                                            <td><?= $nomer; ?></td>
                                            <td><?= $l->projek ?></td>
                                            <td><?= $l->OPD ?></td>
                                            <td><?= $l->kabkota ?></td>
                                            <td><?= $l->tahun ?></td>
                                            <td>
                                                <a href="<?= base_url();?>lelang/detail/<?= $l->id_lelang ?>" class="btn btn-primary btn-xs " data-id="<?= $l->id_lelang ?>"><i class="fa fa-fw  fas fa-eye"></i></a>
                                                <?php if ($this->session->userdata('level') == 'admin') {

                                                ?>
                                                <a href="<?= base_url();?>lelang/formubah/<?= $l->id_lelang ?>" class="btn btn-success btn-xs " data-id="<?= $l->id_lelang ?>"><i class="fa fa-fw  fas fa-pen-square"></i></a>
                                                <a href="<?= base_url();?>lelang/hapus/<?= $l->id_lelang ?>" class="btn btn-danger btn-xs " onclick="return confirm('yakin');"><i class="fa fa-fw  fas fa-trash"></i></a>
                                                <?php } ?>
                                                </td>

                                                </tr>
                                                <?php endforeach; ?>

                                                <tr>
                                                  <td colspan="7" ><br>
                                                    <nav aria-label="Page Naigation example"></nav>
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
