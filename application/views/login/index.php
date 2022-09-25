<!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container ">
        <?= $this->session->flashdata('Pesan') ?>
        <div class="card">
            <div class="card-header text-center bg-primary">
            <h2 style="color:white;">LOGIN</h2>
            </div>
            <div class="card-body">

                <form action="<?= base_url(); ?>/login/aksi_login" method="POST">
                    <div class="form-group">

                    <div class="input-group mb-3"><span class="input-group-prepend"><span class="input-group-text"><i class="fa fa fas fa-user"></i></span></span>
                    <input type="text" placeholder="Username" class="form-control form-control-lg" id="username"  autocomplete="off" name="user">
                    </div>
                        
                    </div>
                    <div class="form-group">
                        
                    <div class="input-group mb-3"><span class="input-group-prepend"><span class="input-group-text"><i class="fa fa fas fa-key"></i></span></span>
                    <input type="password" placeholder="password" class="form-control form-control-lg" id="password"  autocomplete="off" name="pwd">
                    </div>

                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-lg btn-block" id="button"><i class="fa fa fas fa-unlock-alt"></i> Login</button>
                </form>
            </div>

            <div class="card-footer text-center">
               
            </div>
            
        </div>
    </div>
  
    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->