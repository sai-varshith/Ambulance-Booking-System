<?php require_once('./config.php') ?>
<!DOCTYPE html>
<html lang="en">
 <?php require_once('inc/header.php') ?>
<body class="">
  <script>
    start_loader()
  </script>
  <style>
    html, body{
      width:calc(100%);
      height:calc(100%);
    }
      .pass_type{
        cursor: pointer;
      }
      .main{
        margin-top:10px;
      }
      .btn-outline-success{
        width:200%;
        margin-left:100px;
        margin-top: 15px;
        margin-bottom: 15px;
       }
       .back_icon{
        margin-left:50px;
        margin-top:20px;
       }
  </style>
  <div class="col-8 back_icon">
            <a href="<?php echo base_url ?>" style="text-decoration:none;"><img src="images/arrow-left.png" width="4%"></a>
  </div>
<div class="d-flex align-items-center justify-content-center main ">
  <div class="d-flex  justify-content-center align-items-center col-lg-7  text-dark">
    <div class="card card-outline card-purple w-75">
      <div class="card-header text-center">
        <h2><a href="./" class="text-decoration-none text-dark"><b>Sign Up</b></a></h2>
      </div>
      <div class="card-body">
        <form id="register-frm" action="" method="post">
          <input type="hidden" name="id">
          <div class="row">
            <div class="form-group col-md-6">
                <input type="text" name="firstname" id="firstname" placeholder="Enter First Name" class="form-control form-control-sm form-control-border" required>
                <small class="ml-3">First Name</small>
            </div>
            <div class="form-group col-md-6">
                <input type="text" name="middlename" id="middlename" placeholder="Enter Middle Name (optional)" class="form-control form-control-sm form-control-border">
                <small class="ml-3">Middle Name</small>
            </div>
            <div class="form-group col-md-6">
                <input type="text" name="lastname" id="lastname" placeholder="Enter Last Name" class="form-control form-control-sm form-control-border" required>
                <small class="ml-3">Last Name</small>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-6">
                  <select name="gender" id="gender" class="custom-select custom-select-sm form-control-border" required>
                    <option>Male</option>
                    <option>Female</option>
                  </select>
                  <small class="ml-3">Gender</small>
            </div>
            <div class="form-group col-md-6">
                <input type="text" name="contact" id="contact" placeholder="Enter Contact" class="form-control form-control-sm form-control-border" required>
                <small class="ml-3">Contact Number</small>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              <small class="ml-3">Address</small>
              <textarea name="address" id="address" rows="3" class="form-control form-control-sm rounded-0" placeholder="Enter Your Full Address"></textarea>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="form-group col-md-6">
                <input type="email" name="email" id="email" placeholder="harryden@mail.com" class="form-control form-control-sm form-control-border" required>
                <small class="ml-3">Email</small>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-6">
                <div class="input-group">
                  <input type="password" name="password" id="password" placeholder="" class="form-control form-control-sm form-control-border" required>
                  <div class="input-group-append border-bottom border-top-0 border-left-0 border-right-0">
                    <span class="input-append-text text-sm"><i class="fa fa-eye-slash text-muted pass_type" data-type="password"></i></span>
                  </div>
                </div>
                <small class="ml-3">Password</small>
            </div>
            <div class="form-group col-md-6">
                <div class="input-group">
                  <input type="password" id="cpassword" placeholder="" class="form-control form-control-sm form-control-border" required>
                  <div class="input-group-append border-bottom border-top-0 border-left-0 border-right-0">
                    <span class="input-append-text text-sm"><i class="fa fa-eye-slash text-muted pass_type" data-type="password"></i></span>
                  </div>
                </div>
                <small class="ml-3">Confirm Password</small>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-6">
              <label for="" class="control-label">Avatar</label>
              <div class="custom-file">
                      <input type="file" class="custom-file-input rounded-0 form-control form-control-sm form-control-border" id="customFile" name="img" onchange="displayImg(this,$(this))">
                      <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
            </div>
          <div class="row">
          </div>
            <div class="form-group col-md-6 d-flex justify-content-center">
              <img src="<?php echo validate_image(isset($image_path) ? $image_path : "") ?>" alt="" id="cimg" class="img-fluid img-thumbnail">
            </div>
          </div>
          <div class="row align-items-center">
            
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-outline-success btn-sm btn-flat btn-block" >Register</button>
            </div>
            <!-- /.col -->
          </div>
          <div class="row">
              <div class="col-12 text-center">
              <p>Already have an Account <a href="<?php echo base_url.'login.php' ?>" style="text-decoration:none;"> Login</a></p>
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

<script src="<?= base_url ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<!-- <script src="<?= base_url ?>dist/js/adminlte.min.js"></script> -->

<script>
  window.displayImg = function(input,_this) {
	    if (input.files && input.files[0]) {
	        var reader = new FileReader();
	        reader.onload = function (e) {
	        	$('#cimg').attr('src', e.target.result);
	        	_this.siblings('.custom-file-label').html(input.files[0].name)
	        }

	        reader.readAsDataURL(input.files[0]);
	    }else{
            $('#cimg').attr('src', "<?php echo validate_image(isset($image_path) ? $image_path : "") ?>");
            _this.siblings('.custom-file-label').html("Choose file")
        }
	}
  $(document).ready(function(){
    end_loader();
    $('.pass_type').click(function(){
      var type = $(this).attr('data-type')
      if(type == 'password'){
        $(this).attr('data-type','text')
        $(this).closest('.input-group').find('input').attr('type',"text")
        $(this).removeClass("fa-eye-slash")
        $(this).addClass("fa-eye")
      }else{
        $(this).attr('data-type','password')
        $(this).closest('.input-group').find('input').attr('type',"password")
        $(this).removeClass("fa-eye")
        $(this).addClass("fa-eye-slash")
      }
    })
    $('#register-frm').submit(function(e){
      e.preventDefault()
      var _this = $(this)
			 $('.err-msg').remove();
       var el = $('<div>')
            el.hide()
      if($('#password').val() != $('#cpassword').val()){
        el.addClass('alert alert-danger err-msg').text('Password does not match.');
        _this.prepend(el)
        el.show('slow')
        return false;
      }
			start_loader();
			$.ajax({
				url:_base_url_+"classes/Users.php?f=save_client",
				data: new FormData($(this)[0]),
                cache: false,
                contentType: false,
                processData: false,
                method: 'POST',
                type: 'POST',
                dataType: 'json',
				error:err=>{
					console.log(err)
					alert_toast("An error occured",'error');
					end_loader();
				},
				success:function(resp){
					if(typeof resp =='object' && resp.status == 'success'){
						location.href = "./login.php";
					}else if(resp.status == 'failed' && !!resp.msg){   
              el.addClass("alert alert-danger err-msg").text(resp.msg)
              _this.prepend(el)
              el.show('slow')
          }else{
						alert_toast("An error occured",'error');
						end_loader();
                        console.log(resp)
					}
          $('html, body').scrollTop(0)
				}
			})
    })
  })
</script>
</body>
</html>