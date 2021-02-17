<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b>Laundry</b> | Sign Up</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Masukan Email dan Password</p>

      <form action="<?= base_url('AuthController/create') ?>" method="post">
        <div class="input-group mb-3">
          <input type="text" name="email" id="email" class="form-control" placeholder="Email" value="<?= set_value('email') ?>" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" id="password" class="form-control" placeholder="Password" required minlength="6">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-8">
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
          </div>
          <!-- /.col -->
        </div>
        <hr>
      </form>
      <a href="<?= base_url('AuthController')?>" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->
