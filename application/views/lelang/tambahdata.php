

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
                     <td width="5%"><label for="nmdokumen" class="col-form-label">Nama Projek</label></td>
                     <td colspan="3">
                     <div class="form-group">
                         <textarea name="namaP" rows="4" class="form-control" cols="80" required></textarea>
                     </div>
                     </td>
                     </tr>
                       <tr>
                       <td width="5%"><label for="nmdokumen" class="col-form-label">OPD</label></td>
                       <td colspan="3">
                       <div class="form-group">
                           <textarea name="opd" rows="4" class="form-control" cols="80" required></textarea>
                       </div>
                       </td>
                       </tr>

                       <tr>
                       <td width="5%"><label for="pembuat" class="col-form-label">Kabupaten/Kota</label></td>
                       <td colspan="3">
                       <div class="form-group">
                           <input id="pembuat" type="text" class="form-control form-control-sm" name="kabkota" required>
                       </div>
                       </td>
                       </tr>

                       <tr>
                       <td width="5%"><label for="tahun" class="col-form-label">Tahun</label></td>
                       <td width="15%">
                       <div class="form-group">
                           <input id="date" type="number" class="form-control form-control-sm" name="tahun" required>
                       </div>
                     </td>

                       </tr>

                       <tr>
                       <td colspan="4">
                       <a href="<?= base_url(); ?>lelang/index" class="btn btn-primary"><i class="fa fa-fw fas fa-arrow-circle-left"></i> Kembali</a>
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
