<?php foreach ($legalitas as $l): ?>

  <?php

  if ($l->tgl_legalitas == '--') {
    $tglL = '';
  }else{
    $pecah = explode('-', $l->tgl_legalitas);
    $tglL = $pecah[1].'/'.$pecah[2].'/'.$pecah[0];
  }


  if ($l->masa_berlaku == '--') {
    $tglL1 = '';
  }else{
    $pecah1 = explode('-', $l->masa_berlaku);
    $tglL1 = $pecah1[1].'/'.$pecah1[2].'/'.$pecah1[0];
  }


  ?>

   <!-- ============================================================== -->
   <!-- basic form  -->
   <!-- ============================================================== -->
   <div class="row">
   <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1">
   </div>
       <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10">
           <div class="card">

               <div class="card-body">
                   <form action="<?= base_url(); ?>/legalitas/ubah" method="POST" class="form">
                   <table class="table table-bordered">
                     <tr>
                     <td width="5%"><label for="nmdokumen" class="col-form-label">Nama Legalitas</label></td>
                     <td colspan="5">
                     <div class="form-group">
                       <input id="nmdokumen" type="hidden" name="id" value="<?= $l->id_legalitas ?>">
                         <input id="nmdokumen" type="text" value="<?= $l->nama_legalitas ?>" class="form-control form-control-sm" name="namaL" required>
                     </div>
                     </td>
                     </tr>
                       <tr>
                       <td width="5%"><label for="nmdokumen" class="col-form-label">Nomor</label></td>
                       <td colspan="5">
                       <div class="form-group">
                           <input id="nmdokumen" type="text" class="form-control form-control-sm" value="<?= $l->nomor ?>" name="nomor" >
                       </div>
                       </td>
                       </tr>

                       <tr>
                       <td width="5%"><label for="pembuat" class="col-form-label">Tanggal Legalitas</label></td>
                       <td colspan="5">
                       <div class="form-group">
                         <div class="form-group">
                             <input id="datepicker1" type="text" class="form-control form-control-sm" name="tglLegal"  value="<?= $tglL; ?>" >
                         </div>
                       </div>
                       </td>
                       </tr>

                       <tr class="pesan">
                         <td colspan="5">
                           <div class="alert alert-warning alert-dismissible fade show" role="alert">
                          <i class="fa fa fas fa-exclamation"></i> Perhatian <strong>mengisi form Masa berlaku harus juga mengisi waktu prosesnya atau sebaliknya</strong>
                          <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </a>
                      </div>
                    </td>
                       </tr>

                       <tr>
                       <td width="5%"><label for="pembuat" class="col-form-label">Masa Berlaku</label></td>
                       <td colspan="2">

                         <div class="form-group">
                           <div class="form-group">
                               <input id="datepicker2" type="text" class="form-control form-control-sm" name="berlaku" id="berlaku"  value="<?= $tglL1; ?>" >
                           </div>
                         </div>
                       </td>
                       <td >
                       <div class="form-group">
                           <input id="waktu" type="number" class="form-control form-control-sm" name="wkproses" placeholder="waktu proses" value="<?= $l->waktu_proses ?>">
                       </div>
                     </td>
                     <td> <h4>Hari</h4> </td>
                       </tr>


                       <tr>
                         <td ><label for="pembuat" class="col-form-label">Persyaratan</label></td>
                         <td colspan="5">
                           <div class="form-group">
                               <input id="nmdokumen" type="text" class="form-control form-control-sm" name="syarat" value="<?= $l->persyaratan ?>">
                           </div>
                         </td>
                       </tr>
                       <tr>
                         <td ><label for="pembuat" class="col-form-label">Instansi Penerbit</label></td>
                         <td colspan="5">
                           <div class="form-group">
                               <input id="nmdokumen" type="text" class="form-control form-control-sm" name="lokasipengurus" value="<?= $l->lokasi_pengurusan ?>">
                           </div>
                         </td>
                       </tr>
                       <tr>
                         <td ><label for="pembuat" class="col-form-label">PIC/No.Telepon</label></td>
                         <td colspan="5">
                           <div class="form-group">
                               <input id="nmdokumen" type="text" class="form-control form-control-sm" name="pic" value="<?= $l->pic ?>">
                           </div>
                         </td>
                       </tr>
                       <tr>
                        <td>Cara Pengurusan</td>
                         <td colspan="5">

                           <div class="col-md-12 p-0">
                           <div class="form-group">
                               <label class="control-label sr-only" for="summernote">Descriptions </label>
                               <textarea class="form-control" id="summernote" name="carapengurusan" rows="1" placeholder=""><?= $l->cara_pengurusan ?></textarea>
                           </div>
                       </div>

                         </td>
                       </tr>

                       <tr>
                       <td colspan="5">
                       <a href="<?= base_url(); ?>legalitas/index" class="btn btn-primary"><i class="fa fa-fw fas fa-arrow-circle-left"></i> Kembali</a>
                       <button type="submit" class="btn btn-success"><i class="fa fa-fw fas fa-save"></i> Ubah</button>

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

      <script type="text/javascript">
    $(document).ready(function() {
       $(".pesan").hide();
      $('.form').submit(function() {

        var masa_berlaku = $("[name='berlaku']").val().length;
        var berlaku = $("[name='berlaku']").val();
         var waktu_proses = $('#waktu').val();
          var proses = $('#waktu').val().length;

        if (masa_berlaku > 0 && waktu_proses == '') {

           $(".pesan").show();
           return false;
        }
        else if(berlaku == '--' && waktu_proses != ''){
          $(".pesan").show();
          return false;
        }
      });
    });
   </script>
