<?php include('header.php');?>
<!-- Form -->
<div class="row">
    <div class="col-lg-12">
        <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">Add New User</h1>
        </div>
        <!-- Success alert -->

        <?php if ($success_message=$this->session->flashdata('success_message')){?>
            <div class="row">
                <div class="col-md-3"></div>
                    <div class="col-6">
                        <div class="alert alert-success alert-dismissible fade show  hide" role="alert">
                            <?php echo $success_message;?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                <div class="col-md-3"></div>
            </div>
		<?php } ?>
        <!-- End Success alert -->
        <?php echo form_open("Home/Save_User", ['class'=>"user"]);?>
        <div class="particulars">        
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="First_name" id="First_name" placeholder="First Name">
                    <span class="text-danger" id="First_name_notification"></span>
                </div>
                <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="text" class="form-control form-control-user" name="Last_name" id="Last_name" placeholder="Last Name">
                <span class="text-danger" id="Last_name_notification"></span>
                </div>
            </div>
            <div class="form-group row">

                <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="Username" id="Username" placeholder="Username">
                    <span class="text-danger" id="Username_notification"></span>
                </div>
                <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="text" class="form-control form-control-user" name="Password" id="Password" placeholder="Password">
                <span class="text-danger" id="Password_notification"></span>
                </div>
            </div>
    
        </div>
        <div class="form-group row">
        <input type="submit" value="Save" class="btn btn-xl btn-primary">
        </div>
        </form>
    </div>
</div>
<!-- End Form -->
<?php include('footer.php');?>
<script>
    $(document).ready(function(){
        $('.user').on("submit", function(){
            var First_name= document.getElementById('First_name').value;
            var Last_name= document.getElementById('Last_name').value;
            var Username=document.getElementById('Username').value;
            var Password= document.getElementById('Password').value;
            if(First_name==""){
                $('#First_name_notification').text('Please enter first name');
                return false;
            }
            if(Last_name==""){
                $('#Last_name_notification').text('Please enter last name');
                return false;
            }
            if(Username==""){
                $('#Username_notification').text('Please enter username');
                return false;
            }
            if(Password==""){
                $('#Password_notification').text('Please enter date of birth');
                return false;
            }
            if(Password.length<4){
                $('#Password_notification').text('Password must be atleast 5 characters');
                return false;
            }
 
        });   
    });   
</script>