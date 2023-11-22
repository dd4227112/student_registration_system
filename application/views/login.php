<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Ngara fdc-r management system</title>
  <link rel="icon" href="<?php echo base_url();?>img/ngara.jpg">
  <!-- Custom fonts for this template-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>vendor/fontawesome-free/css/all.min.css">
  <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"> -->
  <link href="<?php echo base_url();?>css/sb-admin-2.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <!-- <link href="<?php echo base_url();?>css/sb-admin-2.min.css" rel="stylesheet"> -->
</head>

<body class="bg-gradient-warning">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row ">
            <div class="col-lg-2">
            </div>
              <div class="col-lg-8">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Student's Registration System(SRS)</h1>
                  </div>
          <?php if ($message=$this->session->flashdata('message')){?>
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<?php echo $message;?>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
			<div class="col-md-2"></div>
			<?php } ?>
                <!-- <form class="user"> -->
                    <?php echo form_open("Home/Login", ["class"=>'user', "method"=>'POST']);?>
                    <div class="form-group">
                      <input type="text" name="Username" class="form-control form-control-user" id="exampleInputUsername" aria-describedby="emailHelp" placeholder="Enter Username">
                      <span class="text-danger" id="Username_notification"></span>
                    </div>
                    <div class="form-group">
                      <input type="password" name="Password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Enter Password">
                      <span class="text-danger" id="Password_notification"></span>
                    </div>
                   <input type="submit" value="Login"  class="btn btn-dark btn-user btn-block">
                  </form>
                  <div class="text-center">
                    <a class="small" href="<?php echo base_url();?>index.php/Home/Forget_Password">Forgot Password?</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-2">
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url();?>vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url();?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url();?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url();?>js/sb-admin-2.min.js"></script>

</body>

</html>
<script>
$(document).ready(function(){
  $('.btn-user').on('click', function(){
    var username=document.getElementById('exampleInputUsername').value;
    var password=document.getElementById('exampleInputPassword').value;
    if(username==""){
      $('#Username_notification').text("Please enter your username");
      return false;
    }
    if(password==""){
      $('#Password_notification').text("Please enter your password");
      return false;
    }
  })
});
</script>
