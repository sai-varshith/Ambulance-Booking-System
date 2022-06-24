<?php require_once('./config.php') ?>
<!DOCTYPE html>
<html lang="en" class="" style="height: auto;">
 <?php require_once('inc/header.php') ?>
<body class="hold-transition login-page">
  <script>
    start_loader()
  </script>
  <style>
      body{
          /* width:calc(100%);
          height:calc(100%);
          background-image:url('<?= validate_image($_settings->info('cover')) ?>');
          background-repeat: no-repeat;
          background-size:cover; */
      }
      .login-box{
        width:400px;
        margin-left: 150px;
        margin-top: 230px;
       }
       .btn-outline-success{
        width: 250px;
        margin-left:65px;
       }
       .back_icon{
        margin-left:-60px;
        margin-top:0px;
       }

  </style>
  <div class="container">
     <div class="col-8 back_icon">
            <a href="<?php echo base_url ?>" style="text-decoration:none;"><img src="images/arrow-left.png" width="5%"></a>
  </div>
    
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <div class="login-box">
<?php $page = isset($_GET['page']) ? $_GET['page'] : 'home';  ?>
     <?php if($_settings->chk_flashdata('success')): ?>
      <script>
        alert_toast("<?php echo $_settings->flashdata('success') ?>",'success')
      </script>
    <?php endif;?>
  <!-- /.login-logo -->
  <div class="clear-fix my-2"></div>
  <div class="card card-outline card-purple">
    <div class="card-header text-center">
      <a href="./" class="h4 text-decoration-none"><b>Customer Login</b></a>
    </div>
    <div class="card-body">
      <form id="clogin-frm" action="" method="post">
        <div class="input-group mb-3">
        <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
          <input type="email" class="form-control" name="email" placeholder="Email">
          
        </div>
        <div class="input-group mb-3">
        <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          <input type="password" class="form-control" name="password" placeholder="Password">
          
        </div>
        <div class="row align-items-center">
          <!-- /.col -->
          <div class="col-4" style="margin-top:10px">
            <button type="submit" class="btn btn-outline-success btn-sm btn-flat btn-block">Log In</button>
          </div>
          <!-- /.col -->
        </div>
        <div class="row" style="margin-top: 15px;">
            <div class="col-12 text-center">
             <p>Don't have account ?<a href="<?php echo base_url.'register.php' ?>" style="text-decoration:none;"> Create</a></p>
            </div>
        </div>
      </form>
      <!-- /.social-auth-links -->

      <!-- <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p> -->
      
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
        
      </div>
      <div class="col-sm-6">
        <img src="images/image.png" width="100%">
      </div>
      
    </div>
    
  </div>

<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<script>
  $(document).ready(function(){
    end_loader();
  })
</script>
</body>
</html>