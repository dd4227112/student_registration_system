<?php include('header.php');?>
<div class="row">
    <div class="col-lg-12">
        <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">Change Password</h1>
        </div>
        <!-- Success alert -->

        <?php if ($message=$this->session->flashdata('message')){?>
            <div class="row">
                <div class="col-md-3"></div>
                    <div class="col-6">
                        <div class="alert alert-success alert-dismissible fade show  hide" role="alert">
                            <?php echo $message;?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                <div class="col-md-3"></div>
            </div>
		<?php } ?>
				<?php echo form_open('Home/Save_Password', ['class'=>'change_password']);?>
						<div class="form-group">
							<div class="form-label-group">
                     <label for="Current_Password">Current Password</label>
								<input type="password" id="Current_Password" class="form-control" name="Current_Password" placeholder="Enter your current password" autofocus="autofocus">
								<span id="Current_Password_alert" class="text-danger"></span>
							</div>
						</div>
						<div class="form-group">
							<div class="form-label-group">
								<label for="New_Password"> New Password</label>
								<input type="password" id="New_Password" class="form-control" name="New_Password" placeholder="Enter new password">
								<span id="New_Password_alert" class="text-danger"> </span>			    
							</div>
						</div>
                  <div class="form-group">
							<div class="form-label-group">
								<label for="Confirm_Password"> Confirm Password</label>
								<input type="password" id="Confirm_Password" class="form-control" name="Confirm_Password" placeholder="Confirm new password">
								<span id="Confirm_Password_alert" class="text-danger"> </span>			    
							</div>
						</div>
						<div class="form-group">
						<input type="submit" class="btn btn-success btn-sm" value="Save ">
						</div>
				  </form>
				</div>
			</div>
<?php include('footer.php');?>
<script>
   $(document).ready(function(){
      $(".alert").alert();
      $('.change_password').on('submit', function(){
         var currentPass=document.getElementById('Current_Password').value;
         var newPass=document.getElementById('New_Password').value;
         var confPass=document.getElementById('Confirm_Password').value;
         if (currentPass=="") {
            $('#Current_Password_alert').text("Enter your current password");
            return false;
         }
         if (newPass=="") {
            $('#New_Password_alert').text("Enter new password");
            return false;
         }
         if (confPass=="") {
            $('#Confirm_Password_alert').text("Please your password");
            return false;
         }
         if (newPass!=confPass) {
            $('#Confirm_Password_alert').text("Your passwords don't password");
            return false;
         }
      });
   });
</script>