
<?php foreach ($legalitas as $l): ?>

   <!-- ============================================================== -->
   <!-- basic form  -->
   <!-- ============================================================== -->
   <div class="row">

       <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-9" >
         <div style="width:100%; overflow:auto;">
           <div class="card">

               <div class="card-body">
                   <form action="<?= base_url(); ?>/legalitas/ubah" method="POST">
                   <table class="table table-bordered">
                     <tr>
                       <td colspan="3"> <?= $this->session->flashdata('Pesan') ?></td>
                     </tr>
                     <tr>
                     <td width="30%"><label for="nmdokumen" class="col-form-label">Nama Legalitas</label></td>
                     <td colspan="2">
                     <div class="form-group">
                       <input id="nmdokumen" type="hidden" name="id" value="<?= $l->id_legalitas ?>">
                         <textarea name="namaL" rows="4" class="form-control form-control-sm" cols="80" readonly><?= $l->nama_legalitas ?></textarea>
                     </div>
                     </td>
                     </tr>
                       <tr>
                       <td ><label for="nmdokumen" class="col-form-label">Nomor</label></td>
                       <td colspan="2">
                       <div class="form-group">
                           <input id="nmdokumen" type="text" class="form-control form-control-sm" value="<?= $l->nomor ?>" name="nomor" readonly>
                       </div>
                       </td>
                       </tr>

                       <tr>
                       <td ><label for="pembuat" class="col-form-label">Tanggal Legalitas</label></td>
                       <td colspan="2">
                       <div class="form-group">
                           <input id="pembuat" type="text" class="form-control form-control-sm" name="berlaku" value="<?= $l->tgl_legalitas ?>" readonly>
                       </div>
                       </td>
                       </tr>

                       <tr>
                       <td ><label for="pembuat" class="col-form-label">Masa Berlaku</label></td>
                       <td colspan="2">
                       <div class="form-group">
                           <input id="pembuat" type="text" class="form-control form-control-sm" name="berlaku" value="<?= $l->masa_berlaku ?>" readonly>
                       </div>
                       </td>
                       </tr>

                       <tr>
                       <td ><label for="tahun" class="col-form-label">Waktu Proses</label></td>
                       <td >
                       <div class="form-group">
                           <input id="date" type="number" class="form-control form-control-sm" name="wkproses"  value="<?= $l->waktu_proses ?>" readonly>
                       </div>
                     </td>
                     <td> <h4>Hari</h4> </td>

                       </tr>

                       <tr>
                         <td ><label for="pembuat" class="col-form-label">Persyaratan</label></td>
                         <td colspan="3">
                           <div class="form-group">
                               <input id="nmdokumen" type="text" class="form-control form-control-sm" name="syarat" value="<?= $l->persyaratan ?>" readonly>
                           </div>
                         </td>
                       </tr>
                       <tr>
                         <td ><label for="pembuat" class="col-form-label">Instansi Pengurusan</label></td>
                         <td colspan="3">
                           <div class="form-group">
                               <input id="nmdokumen" type="text" class="form-control form-control-sm" name="lokasipengurus" value="<?= $l->lokasi_pengurusan ?>" readonly>
                           </div>
                         </td>
                       </tr>
                       <tr>
                         <td ><label for="pembuat" class="col-form-label">PIC/No.Telepon</label></td>
                         <td colspan="3">
                           <div class="form-group">
                               <input id="nmdokumen" type="text" class="form-control form-control-sm" name="pic" value="<?= $l->pic ?>" readonly>
                           </div>
                         </td>
                       </tr>
                       <tr>
                        <td>Cara Pengurusan</td>
                         <td colspan="3">

                           <div class="col-md-12 p-0">
                           <div class="form-group">
                               <?= $l->cara_pengurusan ?>
                           </div>
                       </div>

                         </td>
                       </tr>



                       <tr>
                         <td width="10%"> <label>File yang di upload</label></td>
                         <td colspan="2">
                           <?= $l->file_upload ?>
                           <?php if ($l->file_upload == "tidak ada"){ ?>
                             <a href="<?= base_url(); ?>legalitas/upload/<?= $l->id_legalitas ?>" class="btn btn-success float-right"><i class="fa fa-fw  fas fa-upload"></i></a>
                           <?php } else{ ?>
                              <a href="<?= base_url(); ?>legalitas/proseshapusfile/<?= $l->id_legalitas ?>/<?= $l->file_upload ?>" class="btn btn-danger float-right"><i class="fa fa-fw  fas fa-trash"></i></a>
                              <a href="<?= base_url(); ?>legalitas/dfilelegalitas/<?= $l->file_upload ?>" class="btn btn-primary float-right"> <i class="fa fa-fw  fas fa-download"></i> </a>
                              <a href="<?= base_url(); ?>legalitas/ubahupload/<?= $l->id_legalitas ?>" class="btn btn-success float-right">Ubah File</a>
                         <?php } ?>


                         </td>

                       </tr>

                       <tr>
                       <td colspan="4">
                       <a href="<?= base_url(); ?>legalitas/index" class="btn btn-primary"><i class="fa fa-fw fas fa-arrow-circle-left"></i> Kembali</a>


                       </td>
                       </tr>

                   </table>

                   </form>
               </div>

             </div>
           </div>

       </div>
       <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3">
        <div class="card">
          <div class="card-body">
            Log Aktifitas
          </div>
        </div>
         <div style="height:600px;  overflow:auto; background-color: ">

           <?php if ($jumlah_log > 0){ ?>
             <?php foreach ($log_legalitas as $log ): ?>
               <div class="card bg-success" style="width:175px;">
                 <div class="card-body text-white">
                <?= $log->tgl ?> <br> <?= $log->username ?> mengubah record <?= $log->field_legalitas ?> Menjadi <?= $log->keterangan ?>
                 </div>

               </div>
             <?php endforeach; ?>
           <?php } else{ ?>
             <div class="card bg-default" style="width:175px;">
               <div class="card-body ">
            Belum ada aktivitas
               </div>

             </div>
          <?php } ?>






        </div>
   </div>

   </div>
   <!-- ============================================================== -->
   <!-- end basic form  -->
   <!-- ============================================================== -->

      <?php endforeach; ?>
