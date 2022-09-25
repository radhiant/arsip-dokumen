<?php foreach ($lelang as $l): ?>

   <!-- ============================================================== -->
   <!-- basic form  -->
   <!-- ============================================================== -->
   <div class="row">
   <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1">
   </div>
       <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10">
           <div class="card">

               <div class="card-body">
                   <form action="<?= base_url(); ?>/lelang/tambah" method="POST">
                   <table class="table table-bordered">
                     <tr>
                       <td colspan="6"><?= $this->session->flashdata('Pesan') ?></td>
                     </tr>
                     <tr>
                     <td width="5%"><label for="nmdokumen" class="col-form-label">Nama Projek</label></td>
                     <td colspan="3">
                     <div class="form-group">
                         <textarea name="namaP" rows="4" class="form-control" cols="80" readonly><?= $l->projek ?></textarea>
                     </div>
                     </td>
                     </tr>
                       <tr>
                       <td width="5%"><label for="nmdokumen" class="col-form-label">OPD</label></td>
                       <td colspan="3">
                       <div class="form-group">
                           <textarea name="opd" rows="4" class="form-control" cols="80" readonly><?= $l->OPD ?></textarea>
                       </div>
                       </td>
                       </tr>

                       <tr>
                       <td width="5%"><label for="pembuat" class="col-form-label">Kabupaten/Kota</label></td>
                       <td colspan="3">
                       <div class="form-group">
                           <input id="pembuat" type="text" class="form-control form-control-sm" name="kabkota" value="<?= $l->kabkota ?>" readonly>
                       </div>
                       </td>
                       </tr>

                       <tr>
                       <td width="5%"><label for="tahun" class="col-form-label">Tahun</label></td>
                       <td width="15%" colspan="3">
                       <div class="form-group">
                           <input id="date" type="number" class="form-control form-control-sm" name="tahun" value="<?= $l->tahun ?>" readonly>
                       </div>
                     </td>

                       </tr>

                       <tr>
                       <td width="5%" colspan="3">
                         <label class="col-form-label">List File yang diUpload</label>
                         <a href="<?= base_url(); ?>lelang/index" class="btn btn-primary float-right"><i class="fa fa-fw fas fa-arrow-circle-left"></i> Kembali</a>
                         <a href="<?= base_url(); ?>lelang/upload/<?= $l->id_lelang ?>" class="btn btn-success float-right"><i class="fa fa-fw fas fa-plus"></i>Upload File</a>
                       </td>
                       </tr>
                       <?php $no = 1; foreach ($file as $f): ?>
                        <tr>
                          <td><?= $no++; ?>. <?= $f->nama_file ?></td>
                          <td>
                            <label class="col-form-label">Di upload pada <b> <?= $f->tgl_upload ?> </b></label>
                            <a href="<?= base_url(); ?>lelang/hapusupload/<?= $f->id_file_lelang ?>/<?= $f->id_lelang ?>/<?= $f->nama_file ?>" class="btn btn-danger float-right"> <i class="fa fa-fw fas fa-trash"></i></a>
                            <a href="<?= base_url(); ?>lelang/dfilelelang/<?= $f->nama_file ?>"  class="btn btn-success float-right"> <i class="fa fa-fw fas fa-download"></i></a>
                          </td>
                        </tr>
                       <?php endforeach; ?>

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
   <?php endforeach; ?>
