<style>
  img#user_avatar {
    width: 2em;
    height: 2em;
    object-fit: cover;
    object-position: center center;
}
.collapse .navbar-nav .nav-item a{
  margin-left:8px;
  color: #ffffff;
  font-weight: 350;
}
.text-reset{
   color: #ffffff;
  font-weight: 350;
}
.form-inline{
  margin-left: -50px;
}
#button-addon2{
  border: 1px solid #333;
}
</style>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark bg-gradient fixed-top" id="topNavBar" style="background: none;">
            <div class="container px-4 px-lg-5 ">
                <button class="navbar-toggler btn btn-sm" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <a class="navbar-brand" href="./">
                <img src="<?php echo validate_image($_settings->info('logo')) ?>" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
                <?php echo $_settings->info('short_name') ?>
                </a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin:10px;;margin-left: 20px;">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link <?= isset($page) && $page == 'home'? "active" : '' ?>" aria-current="page" href="./">Home</a></li>
                        <li class="nav-item"><a class="nav-link <?= isset($page) && $page == 'about'? "active" : '' ?>" href="./?p=about">About Us</a></li>
                        <li class="nav-item"><a class="nav-link <?= isset($page) && $page == 'contact'? "active" : '' ?>" href="./?p=contact">Contact</a></li>
                        <li class="nav-item"><a class="nav-link <?= isset($page) && $page == 'cab_available'? "active" : '' ?>" href="./?p=cab_available">Available Ambulances</a></li>
                    </ul>
                    <div class="d-flex align-items-center">
                    </div>
                </div>
                <div >
                  
                  <?php if($_settings->userdata('id') > 0 && $_settings->userdata('login_type') == 2): ?>
                    <div class="d-flex align-items-end">
                      <div class="navbar-nav nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           Hello, <?= $_settings->userdata('firstname') ?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-item" href="./?p=booking_list">My Bookings</a>
                          <a class="dropdown-item" href="./?p=manage_account">Manage Account</a>
                          <a class="dropdown-item" href="./classes/Login.php?f=logout_client">Logout</a>
                        </div>
                      </div>
                    </div>
                  <?php else: ?>
                    <a href="./login.php" class="text-reset text-decoration-none mx-2" >Login</a> 
                    <a href="./register.php" class="text-reset text-decoration-none mx-2">Sign Up</a>
                   <!--  <a href="./driver/login.php" class="text-reset text-decoration-none mx-2"><b>Driver Panel</b></a> -->
                    <!-- <a href="./admin/login.php" class="text-reset text-decoration-none mx-2"><b>Admin</b></a> -->
                  <?php endif; ?>
                </div>
            </div>
            <!-- <form class="form-inline" id="search-form">
                  <div class="input-group" >
                    <input class="form-control form-control-sm form " type="search" placeholder="Search" aria-label="Search" name="search"  value="<?php echo isset($_GET['search']) ? $_GET['search'] : "" ?>"  aria-describedby="button-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-sm m-0" type="submit" id="button-addon2"><i class="fa fa-search" style="color: #ffffff !important;"></i></button>
                    </div>
                  </div>
                </form> -->
        </nav>
<script>
  $(function(){
    $('#login-btn').click(function(){
      uni_modal("","login.php")
    })
    $('#navbarResponsive').on('show.bs.collapse', function () {
        $('#mainNav').addClass('navbar-shrink')
    })
    $('#navbarResponsive').on('hidden.bs.collapse', function () {
        if($('body').offset.top == 0)
          $('#mainNav').removeClass('navbar-shrink')
    })
  })

  $('#search-form').submit(function(e){
    e.preventDefault()
     var sTxt = $('[name="search"]').val()
     if(sTxt != '')
      location.href = './?p=products&search='+sTxt;
  })
</script>
