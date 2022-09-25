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
                                <a href="<?= base_url(); ?>anggota/formtambah" class="btn btn-success"><i class="fa fa-fw  fas fa-user-plus"></i> Tambah Data</a>
                                
                                </td>
                                
                                <td width="40%">
                                <form name='frmSearch' action='' method='GET'>
                                <div class="input-group">
                                <input type="text" class="form-control" placeholder="Cari Anggota..." aria-label="Recipient's username" aria-describedby="basic-addon2" name='keyword' value="<?php
                                   if (!empty($_GET['keyword'])) {
                                       echo $_GET['keyword'];
                                   }
                                   ?>" id='keyword' maxlength='25' autocomplete="off">
                                 <div class="input-group-append">
                                 <button class="btn btn-primary btn-sm" type="submit"><i class="fa fa-fw  fas fa-search"></i></button>
                                 </div>
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
                                                <th>NIM</th>
                                                <th>Nama</th>
                                                <th>Prodi</th>
                                                <th>Tahun Masuk</th>
                                                <th>Aksi</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        
                                        foreach( $hasil as $bk) : ?>
                                        <?php 
                                        @$nomer++;
                                        ?>
                                            <tr>
                                                <td><?= $nomer; ?></td>
                                                <td><?= $bk->nim ?></td>
                                                <td><?= $bk->nama_anggota ?></td>
                                                <td><?= $bk->prodi ?></td>
                                                <td><?= $bk->thn_masuk ?></td>
                                                <td>
                                                <a href="<?= base_url();?>anggota/detail/<?= $bk->id_anggota ?>" class="btn btn-primary btn-sm " data-id="<?= $bk->id_anggota ?>"><i class="fa fa-fw  fas fa-eye"></i></a>
                                                <?php if ($this->session->userdata('level') == 'admin') { ?>
                                                    
                                                    <a href="<?= base_url();?>anggota/formubah/<?= $bk->id_anggota ?>" class="btn btn-success btn-sm " data-id="<?= $bk->id_anggota ?>"><i class="fa fa-fw  fas fa-pen-square"></i></a>
                                                    <a href="<?= base_url();?>anggota/hapus/<?= $bk->id_anggota ?>" class="btn btn-danger btn-sm " onclick="return confirm('yakin');"><i class="fa fa-fw  fas fa-user-times"></i></a>
                                                <?php } ?> 
                                                    </td>
                                                    </tr>
                                                    <?php endforeach; ?>
                                                    <tr>
                                                    	<td colspan="6" ><br>
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
                                   
                                  
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end basic table  -->
                    <!-- ============================================================== -->
               