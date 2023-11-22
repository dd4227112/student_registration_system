<?php   include('header.php');?>


          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><?= $current_year;?>- Academic Year</h1> 
            <a href="#" class="d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Download Report</a>
          </div>
          <!-- Content Row -->
          <div class="row">

            <!-- All Registered card -->
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <a style="text-decoration:none;" href="<?=base_url();?>index.php/Home/All">
                      <div class="font-weight-bold text-primary text-center text-uppercase mb-1">All Registered</div>
                      <div class="h5 mb-0 font-weight-bold text-center text-gray-800"><?php echo $AllStudent->TOTAL; ?></div>
                    </a>
                    <!-- <span class="align-items-center">Active: | Inactive: | Completed:</span>   -->
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Long course card-->
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <a style="text-decoration:none;" href="<?=base_url();?>index.php/Home/Longcourse">
                      <div class="font-weight-bold text-success text-center text-uppercase mb-1">Long Course</div>
                      <div class="h5 mb-0 font-weight-bold text-center text-gray-800"><?php echo $LongCourseStudent->TOTAL?></div>
                    </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Short Course card -->
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <a style=" text-decoration:none;" href="<?php echo base_url();?>index.php/Home/Shortcourse">
                      <div class="font-weight-bold text-success text-center text-uppercase mb-1">Short Course</div>
                      <div class="h5 mb-0 font-weight-bold text-center text-gray-800"><?php echo $ShortCourseStudent->TOTAL?></div>
                   </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- Mama course card -->
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <a style=" text-decoration:none;" href="<?php echo base_url();?>index.php/Home/Mamacourse">
                      <div class="font-weight-bold text-info text-center text-uppercase mb-1">EHM</div>
                      <div class="h5 mb-0 font-weight-bold text-center text-gray-800"><?php echo $MamaCourseStudent->TOTAL?></div>
                    </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
               <!-- Day Card-->
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <a style=" text-decoration:none;" href="<?php echo base_url();?>index.php/Home/Mormalcourse">
                      <div class="font-weight-bold text-info text-center text-uppercase mb-1">Normal</div>
                      <div class="h5 mb-0 font-weight-bold text-center text-gray-800"><?php echo $NormalCourseStudent->TOTAL?></div>
                    </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Boarding card -->
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-warning  shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <a style=" text-decoration:none;" href="<?php echo base_url();?>index.php/Home/Boarding">
                      <div class="font-weight-bold text-center text-warning text-uppercase mb-1">Boarding</div>
                      <div class="h5 mb-0 font-weight-bold text-center text-gray-800"><?php echo $BoardingStudent->TOTAL?></div>
                    </a>
                    </div>                 
                  </div>
                </div>
              </div>
            </div>
            <!-- Day Card-->
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <a style=" text-decoration:none;" href="<?php echo base_url();?>index.php/Home/Day">
                      <div class="font-weight-bold text-warning text-center text-uppercase mb-1">Day</div>
                      <div class="h5 mb-0 font-weight-bold text-center text-gray-800"><?php echo $DayStudent->TOTAL?></div>
                    </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
<!-- footer -->
<?php include('footer.php');?>