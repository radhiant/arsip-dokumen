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
                                </td>
                                
                                <td width="40%">
                                <form name='frmSearch' action='' method='GET'>
                                <div class="input-group">
                                <input type="text" class="form-control" placeholder="Cari Data..." aria-label="Recipient's username" aria-describedby="basic-addon2" name='keyword' value="<?php
                                   if (!empty($_GET['keyword'])) {
                                       echo $_GET['keyword'];
                                   }
                                   ?>" id='keyword' maxlength='25' autocomplete="off">
                                 <div class="input-group-append">
                                 <button class="btn btn-primary btn-sm" type="submit"><i class="fa fa-fw  fas fa-search"></i></button>
                                 </div>
                                </div>
                                </form>
                                 
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
                                                <th>Kode Buku</th>
                                                <th>Nama Dokumen</th>
                                                <th>Pembuat</th>
                                                <th>Nama Peminjam</th>
                                                <th>Tanggal Pinjam</th>
                                                <th>Tanggal Kembali</th>
                                                <th>Lama Pinjam</th>
                                                <th>Action</th>
                                                
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        
                                        foreach( $hasil as $p) : ?>
                                        <?php 
                                        @$nomer++;
                                        ?>
                                            <tr>
                                                <td><?= $nomer; ?></td>
                                                <td><?= $p->kode_buku ?></td>
                                                <td><?= $p->nama_dokumen ?></td>
                                                <td><?= $p->pembuat ?></td>
                                                <td><?= $p->peminjam ?></td>
                                                <td><?= $p->tgl_pinjam ?></td>
                                                <td><?= $p->tgl_kembali ?></td>
                                                <td><?= $p->lama_pinjam ?></td>
                                                
                                                <td>
                                            
                                                    <a href="<?= base_url();?>pengembalian/hapus/<?= $p->id_kembali ?>" class="btn btn-danger btn-sm " onclick="return confirm('yakin');"><i class="fa fa-fw  fas fa-trash"></i></a>
                                                    </td>
                                                    </tr>
                                                    <?php endforeach; ?>
                                                    <tr>
                                                        <td colspan="9" ><br>
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
       