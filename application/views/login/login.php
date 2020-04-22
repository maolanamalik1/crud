
<body class="hold-transition login-page">
<div class="login-box">
<title><?php echo $judul;?></title>
  <div class="login-logo">
    <a href="#"><b>Data </b>Sekolah</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg"></p> 
      <?php if (validation_errors() ) : ?>
          <?= validation_errors(); ?>
          <?php endif; ?>

      <form action="<?=base_url(); ?>Auth/login" method="post">
        <div class="input-group mb-3">
          <input type="username" class="form-control" placeholder="username" name="username"value="<?=set_value('username');?>" autocomplete="off">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="passwod"value="<?=set_value('passwod');?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mb-1">
        <p>admin <br>username:admin<br>pw:admin<br>user<br>username:adam<br>pw:adam</p>
      </p>
      <p class="mb-0">
        <a href="<?=base_url(); ?>Auth/register/" class="text-center">Register</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->


