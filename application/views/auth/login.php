
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Laundry</b> | Sign In</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Masukan Email dan Password</p>

        <?= $this->session->flashdata('message');?>
        
      <form action="#" method="post">
        <div class="input-group mb-3">
          <input type="text" name="email" id="email" class="form-control" placeholder="Email" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
            <div class="col-8">
                </div>
                <div class="col-4">
                    <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                </div>
            </div>
            <hr>
        </form>
        <!-- /.social-auth-links -->
        <a href="<?= base_url('AuthController/register')?>" class="text-center">Register</a>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
