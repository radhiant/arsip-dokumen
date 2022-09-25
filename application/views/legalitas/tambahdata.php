

   <!-- ============================================================== -->
   <!-- basic form  -->
   <!-- ============================================================== -->
   <div class="row">
   <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1">
   </div>
       <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10">
           <div class="card">

               <div class="card-body">
                   <form action="<?= base_url(); ?>/legalitas/tambah" method="POST" class="form">
                   <table class="table table-bordered">
                     <tr>
                     <td width="5%"><label for="nmdokumen" class="col-form-label">Nama Legalitas</label></td>
                     <td colspan="5">
                     <div class="form-group">
                         <input id="nmdokumen" type="text" class="form-control form-control-sm" name="namaL" required>
                     </div>
                     </td>
                     </tr>
                       <tr>
                       <td width="5%"><label for="nmdokumen" class="col-form-label">Nomor</label></td>
                       <td colspan="5">
                       <div class="form-group">
                           <input id="nmdokumen" type="text" class="form-control form-control-sm" name="nomor" >
                       </div>
                       </td>
                       </tr>

                       <tr>
                       <td width="5%"><label for="pembuat" class="col-form-label">Tanggal Legalitas</label></td>
                       <td colspan="5">
                       <div class="form-group">
                                        <div class="input-group date" id="datetimepicker1" data-target-input="nearest">
                                            <input type="text"  class="form-control datepicker" name="tglLegal"  data-target="#datetimepicker1" >
                                            <div class="input-group-append" data-target="#datetimepicker1" data-toggle="datepicker">
                                                <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                            </div>
                                        </div>
                                    </div>
                       </td>
                       </tr>

                       <tr class="pesan">
                         <td colspan="5">
                           <div class="alert alert-warning alert-dismissible fade show" role="alert">
                          <i class="fa fa fas fa-exclamation"></i> Perhatian <strong>mengisi form Masa berlaku harus juga mengisi waktu prosesnya</strong>
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
                                        <div class="input-group date" id="datetimepicker2" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" name="berlaku" id="berlaku" data-target="#datetimepicker2"  >
                                            <div class="input-group-append" data-target="#datetimepicker2" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                            </div>
                                        </div>
                                    </div>
                       </td>
                       <td >
                       <div class="form-group">
                           <input type="number" class="form-control form-control-sm" name="wkproses" id="waktu" placeholder="waktu proses">
                       </div>
                     </td>
                     <td> <h4>Hari</h4> </td>
                       </tr>


                       <tr>
                         <td ><label for="pembuat" class="col-form-label">Persyaratan</label></td>
                         <td colspan="5">
                           <div class="form-group">
                               <input id="nmdokumen" type="text" class="form-control form-control-sm" name="syarat" >
                           </div>
                         </td>
                       </tr>
                       <tr>
                         <td ><label for="pembuat" class="col-form-label">Instansi Penerbit</label></td>
                         <td colspan="5">
                           <div class="form-group">
                               <input id="nmdokumen" type="text" class="form-control form-control-sm" name="lokasipengurus" >
                           </div>
                         </td>
                       </tr>
                       <tr>
                         <td ><label for="pembuat" class="col-form-label">PIC/No.Telepon</label></td>
                         <td colspan="5">
                           <div class="form-group">
                               <input id="nmdokumen" type="text" class="form-control form-control-sm" name="pic" >
                           </div>
                         </td>
                       </tr>
                       <tr>
                        <td colspan="5">Cara Pengurusan <b>(Hanya berupa Text)</b></td>
                      </tr>
                      <tr>
                         <td colspan="5">

                           <div class="col-md-12 p-0">
                           <div class="form-group">
                               <label class="control-label sr-only" for="summernote">Descriptions </label>
                               <textarea class="form-control" id="summernote" name="carapengurusan" rows="1" placeholder=""></textarea>
                           </div>
                       </div>

                         </td>
                       </tr>

                       <tr>
                       <td colspan="4">
                       <a href="<?= base_url(); ?>legalitas/index" class="btn btn-primary"><i class="fa fa-fw fas fa-arrow-circle-left"></i> Kembali</a>
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

   <script type="text/javascript">
	$(document).ready(function() {
    $(".pesan").hide();
		$('.form').submit(function() {
			var masa_berlaku = $('#berlaku').val().length;
      var waktu_proses = $('#waktu').val();

			if (masa_berlaku > 0 && waktu_proses == '') {

        $(".pesan").show();
        return false;
			}
		});
	});
</script>
