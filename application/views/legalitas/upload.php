<?php foreach ($legalitas as $l): ?>

   <!-- ============================================================== -->
   <!-- basic form  -->
   <!-- ============================================================== -->
   <div class="row">
   <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1">
   </div>
       <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10">
           <div class="card">

               <div class="card-body">
                   <form action="<?= base_url(); ?>legalitas/prosesupload" method="POST" enctype="multipart/form-data">
                   <table class="table table-bordered">
                     <tr>
                       <td colspan="6">
                         <div class="col-sm-12 float-right">
                         <?= $this->session->flashdata('Pesan') ?>
                       </div>
                         <div class="col-sm-12 float-left">
                         <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <i class="fa fa fas fa-exclamation"></i>  Nama file Tidak Boleh ada tanda '(, ), {, }, [, ]' dan Ukuran Max File 20MB.

                      </div>
                    </div>
                       </td>
                     </tr>

                    <tr>
                      <td> <label>Upload File</label> </td>
                      <input type="hidden" name="id" value="<?= $l->id_legalitas ?>">
                    </tr>  <div class="col-xs-2">

                    <tr>
                      <td colspan="4">
                        <input type="file" class="form-control" name="file">
                      </td>
                    </tr>
                    <tr>
                      <td colspan="4">
                        <a href="<?= base_url(); ?>legalitas/detail/<?= $l->id_legalitas ?>" class="btn btn-primary">Kembali</a>
                        <button type="submit" class="btn btn-success">Upload</button>
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
   <?php endforeach; ?>
