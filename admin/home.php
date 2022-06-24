<h1 class=""><i class="fas fa-taxi"></i> <?php echo $_settings->info('name') ?></h1>
<hr>
<style>
  #cover_img_dash{
    width:100%;
    max-height:50vh;
    object-fit:cover;
    object-position:bottom center;
  }
</style>
<div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-gradient-purple elevation-1"><i class="fas fa-copyright"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Categories</span>
                <span class="info-box-number">
                  <?php 
                    $inv = $conn->query("SELECT count(id) as total FROM category_list where delete_flag = 0 ")->fetch_assoc()['total'];
                    echo number_format($inv);
                  ?>
                  <?php ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-gradient-warning elevation-1"><i class="fas fa-taxi"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Available Cabs</span>
                <span class="info-box-number">
                  <?php 
                    $inv = $conn->query("SELECT count(id) as total FROM cab_list where delete_flag = 0 ")->fetch_assoc()['total'];
                    echo number_format($inv);
                  ?>
                  <?php ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="shadow info-box mb-3">
              <span class="info-box-icon bg-gradient-primary elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Registered Clients</span>
                <span class="info-box-number">
                  <?php 
                    $mechanics = $conn->query("SELECT count(id) as total FROM `client_list` where delete_flag = 0 ")->fetch_assoc()['total'];
                    echo number_format($mechanics);
                  ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-gradient-info elevation-1"><i class="fas fa-bookmark"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Bookings Made</span>
                <span class="info-box-number">
                  <?php 
                    $inv = $conn->query("SELECT count(id) as total FROM booking_list ")->fetch_assoc()['total'];
                    echo number_format($inv);
                  ?>
                  <?php ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
       


        <div class="row">

          <div class="col-12 col-sm-6 col-md-3">
            <div class="shadow info-box mb-3">
              <span class="info-box-icon bg-gradient-gray elevation-1"><i class="fas fa-spinner"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Pending Bookings</span>
                <span class="info-box-number">
                <?php 
                    $services = $conn->query("SELECT count(id) as total FROM `booking_list` where status = 0 ")->fetch_assoc()['total'];
                    echo number_format($services);
                  ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>


          <div class="col-12 col-sm-6 col-md-3">
            <div class="shadow info-box mb-3">
              <span class="info-box-icon bg-gradient-red elevation-1"><i class="fas fa-times-circle"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Cancelled Bookings</span>
                <span class="info-box-number">
                <?php 
                    $services = $conn->query("SELECT count(id) as total FROM `booking_list` where status = 4 ")->fetch_assoc()['total'];
                    echo number_format($services);
                  ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="shadow info-box mb-3">
              <span class="info-box-icon bg-gradient-navy elevation-1"><i class="fas fa-road"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Ongoing Trips</span>
                <span class="info-box-number">
                <?php 
                    $services = $conn->query("SELECT count(id) as total FROM `booking_list` where status = 2 ")->fetch_assoc()['total'];
                    echo number_format($services);
                  ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>


          <div class="col-12 col-sm-6 col-md-3">
            <div class="shadow info-box mb-3">
              <span class="info-box-icon bg-gradient-green elevation-1"><i class="fas fa-tasks"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Trips Completed</span>
                <span class="info-box-number">
                <?php 
                    $services = $conn->query("SELECT count(id) as total FROM `booking_list` where status = 3 ")->fetch_assoc()['total'];
                    echo number_format($services);
                  ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>


          
        </div>

        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="shadow info-box mb-3">
              <span class="info-box-icon bg-gradient-maroon elevation-1"><i class="fas fa-users-cog"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">System Users</span>
                <span class="info-box-number">
                <?php 
                    $services = $conn->query("SELECT count(id) as total FROM `users` ")->fetch_assoc()['total'];
                    echo number_format($services);
                  ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
        </div>

        <hr>
    <!-- <div class="text-center">
      <img src="<?= validate_image($_settings->info('cover')) ?>" alt="System Cover" class="w-100 img-fluid img-thumnail border" id="cover_img_dash">
    </div> -->
