<?php include('header.php');?>
<!-- Form -->
<div class="row">
    <div class="col-lg-12">
        <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">Register new Student</h1>
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
        <?php echo form_open("Home/Save_student", ['class'=>"user"]);?>
        <li><a href='#' class="toggle_particulars">Student Informations</a></li>
        <div class="particulars">        
            <div class="form-group row">
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="First_name" id="First_name" placeholder="First Name">
                    <span class="text-danger" id="First_name_notification"></span>
                </div>
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="Middle_name" id="Middle_name" placeholder="Middle Name">
                    <span class="text-danger" id="Middle_name_notification"></span>
                </div>
                <div class="col-sm-4 mb-3 mb-sm-0">
                <input type="text" class="form-control form-control-user" name="Last_name" id="Last_name" placeholder="Last Name">
                <span class="text-danger" id="Last_name_notification"></span>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-4 mb-3 mb-sm-0">
                <select  id="sex" name="sex" class="form-control form-control-lg">
                    <option value="">select sex</option>                     
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
                <span class="text-danger" id="sex_notification"></span>
                </div>
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <input type="date" class="form-control form-control-user" name="DoB" id="DoB" placeholder="Date of Birth">
                    <span class="text-danger" id="DoB_notification"></span>
                </div>
                <div class="col-sm-4 mb-3 mb-sm-0">
                <input type="text" class="form-control form-control-user" name="Mobile_number" id="Mobile_number" placeholder="Mobile Number">
                <span class="text-danger" id="Mobile_number_notification"></span>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12 mb-3 mb-sm-0">
                    <textarea name="Description" class="form-control form-control-user"  id="Description" cols="10"  placeholder="More description if any" rows="1"></textarea>
                </div>
            </div>
        </div>
        <li><a href='#' class="toggle_address">Student Address</a></li>
        <div class="location"> 
            <div class="form-group row">
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <input type="text" name="ward" class="form-control form-control-user" id="ward" placeholder="Ward">
                    <span class="text-danger" id="ward_notification"></span>
                </div>
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <input type="text" name="District" class="form-control form-control-user" id="District" placeholder="District">
                    <span class="text-danger" id="District_notification"></span>
                </div>
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user"  name="Region" id="Region" placeholder="Region">
                    <span class="text-danger" id="Region_notification"></span>                  
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="Country" value="TANZANIA" id="Country" placeholder="Country">
                    <span class="text-danger" id="Country_notification"></span>
                </div>
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="Organization" id="Organization" placeholder="Organization if any">
                    <span class="text-danger" id="Organization_notification"></span>
                </div>
            </div>
        </div>
        <li><a href="#" class="toggle_parent">Parent/Guardian Informations</a></li>
        <div class="parent_info">
            <div class="form-group row">
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="Firstname" id="Firstname" placeholder="First name">
                    <span class="text-danger" id="Firstname_notification"></span>
                </div>
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="Middlename" id="Middlename" placeholder="Middle name">
                    <span class="text-danger" id="Middlename_notification"></span>
                </div>
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="Lastname" id="Lastname" placeholder="Last name">
                    <span class="text-danger" id="Lastname_notification"></span>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <input type="email" class="form-control form-control-user" name="Email" id="Email" placeholder="Email">
                    <span class="text-danger" id="Email_notification"></span>
                </div>
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="Mobilenumber" id="Mobilenumber" placeholder="Mobile number">
                    <span class="text-danger" id="Mobilenumber_notification"></span>
                </div>
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="Relationship" name="Relationship" placeholder="Relationship">
                    <span class="text-danger" id="Relationship_notification"></span>
                </div>
            </div>
        </div>
        <li><a href='#' class="toggle_education">Course and Resident Informations</a></li>
        <div class="education"> 
            <div class="form-group row">
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <select  id="Course_id" name="Course_id" class="form-control form-control-lg">
                    <option >Course  Name</option> 
                    <?php foreach($courses as $course ){?>                 
                        <option value="<?php echo $course->Course_id?>"><?php echo $course->Course_name?></option>
                    <?php } ?>
                    </select>
                    <span class="text-danger" id="Course_id_notification"></span>
                </div>
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <select  id="CourseNature" name="CourseNature" class="form-control form-control-lg">
                        <option >Course  Nature</option>                     
                        <option value="Normal">Normal</option>
                        <option value="Mama_Course">Elimu haina mwisho</option>
                    </select>
                    <span class="text-danger" id="CourseNature_notification"></span>
                </div>
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <select  id="Course_duration" name="Course_duration" class="form-control form-control-lg" >
                        <option >Course  Duration</option>                     
                        <option value="Short_course">Short Course</option>
                        <option value="Long_Course">Long Course</option>
                    </select>
                    <span class="text-danger" id="Course_duration_notification"></span>
                </div>
            </div>
            <div class="form-group row">
            <div class="col-sm-4 mb-3 mb-sm-0 level">
                    <select  id="level" name="Level" class="form-control form-control-lg">
                        <option >Course Level</option>                     
                        <option value="Level_I">Level I</option>
                        <option value="Level_II">Level II</option>
                    </select>
                    <span class="text-danger" id="level_notification"></span>
                </div>
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <select  id="Resident" name="Resident" class="form-control form-control-lg">
                        <option >Resident</option>                     
                        <option value="Day">Day</option>
                        <option value="Boarding">Boarding</option>
                    </select>
                    <span class="text-danger" id="Resident_notification"></span>
                </div>
                <div class="col-sm-4 mb-3 mb-sm-0 room_number">
                    <input type="text" name="Room_Number" class="form-control form-control-user" id="Room_Number" placeholder="Room number">
                    <span class="text-danger" id="Room_Number_notification"></span>
                </div>
            </div>
        </div>
        <li><a href="#" class="toggle_emergency">Emergency Contact</a></li>
        <div class="emergency">
        <div class="form-group row">
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="Full_name" id="Full_name" placeholder="Full name">
                </div>
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="Phone" name="Phone" placeholder="Phone number">
                </div>
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="Relation_ship" name="Relationships" placeholder="Relationship">
                </div>
            </div>
        </div>
        <li><a href="#" class="toggle_medical">Medical Informations</a></li>
        <div class="medical">
            <div class="form-group row">
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="Physician_name" id="Physician_name" placeholder="Physician name">
                </div>
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="Phonenumber" id="Phonenumber" placeholder="Phone number">
                </div>
                <div class="col-sm-4 mb-3 mb-sm-0">
                <input type="text" class="form-control form-control-user" name="Allegies" id="Allegies" placeholder="Allegies">      
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12 mb-3 mb-sm-0">
                    <textarea name="Medication" class="form-control form-control-user"  id="Medication" cols="10"  placeholder="Medication" rows="2"></textarea>
                </div>
            </div>
        </div>
        <div class="form-group row">
        <input type="submit" value="Register Student" class="btn btn-xl btn-primary">
        </div>
        </form>
    </div>
</div>
<!-- End Form -->
<?php include('footer.php');?>
<script>
    $(document).ready(function(){
        $('.particulars').hide();
        $('.location').hide();
        $('.education').hide();
        $('.parent_info').hide();
        $('.emergency').hide();
        $('.medical').hide();

        $('.toggle_particulars').on('click', function(){
            $('.particulars').toggle(1000);
        });
        $('.toggle_address').on('click', function(){
            $('.location').toggle(1000);
        });
        $('.toggle_education').on('click', function(){
            $('.education').toggle(1000);
        });
        $('.toggle_parent').on('click', function(){
            $('.parent_info').toggle(1000);
        });
        $('.toggle_emergency').on('click', function(){
            $('.emergency').toggle(1000);
        });
        $('.toggle_medical').on('click', function(){
            $('.medical').toggle(1000);
        });
        $('#Resident').on('change', function(){
            var resident=document.getElementById('Resident').value;
            if(resident=="Day"){
                $('.room_number').hide();
            }
            if(resident=="Boarding"){
                $('.room_number').show();
            }
        })
        $('#Course_duration').on('change', function(){
            var duration=document.getElementById('Course_duration').value;
            if(duration=="Short_course"){
                $('.level').hide();
            }
            if(duration=="Long_Course"){
                $('.level').show();
            }
        })
        $('input[name=Mobile_number]').on('keypress', function(event){
            if(event.which<48 || event.which>57){
            $('#Mobile_number_notification').text('Enter number only');
            event.preventDefault();
            }
        });
        $('.user').on("submit", function(){
            var First_name= document.getElementById('First_name').value;
            var Middle_name=document.getElementById('Middle_name').value;
            var Last_name= document.getElementById('Last_name').value;
            var sex=document.getElementById('sex').value;
            var Mobile_number= document.getElementById('Mobile_number').value;
            var DoB=document.getElementById('DoB').value;
            var ward=document.getElementById('ward').value;
            var District=document.getElementById('District').value;
            var Region=document.getElementById('Region').value;
            var Country=document.getElementById('Country').value;
            var Organization=document.getElementById('Organization').value;
            if(First_name==""){
                $('#First_name_notification').text('Please enter first name');
                return false;
            }
            if(Last_name==""){
                $('#Last_name_notification').text('Please enter last name');
                return false;
            }
            if(sex==""){
                $('#sex_notification').text('Please select sex');
                return false;
            }
            if(DoB==""){
                $('#DoB_notification').text('Please enter date of birth');
                return false;
            }
            if(Mobile_number==""){
                $('#Mobile_number_notification').text('Please enter mobile/phone number');
                return false;
            }     
            if(Mobile_number!="" && Mobile_number.length!=10){
                $('#Mobile_number_notification').text('Mobile/phone number must be 10 digits');
                return false;
            }
            if (Mobile_number!="" && (Mobile_number.indexOf('0')!=0 &&(Mobile_number.indexOf('1')!=6 || Mobile_number.indexOf('1')!=7))){
                document.getElementById('Mobile_number_notification').innerHTML="Wrong phone number format, must start with 07 or 06";
                return false;
            } 


             if(ward==""){
                $('#ward_notification').text('Please enter ward name');
                return false;
            }
            if(District==""){
                $('#District_notification').text('Please enter district name');
                return false;
            }
            if(Region==""){
                $('#Region_notification').text('Please enter region name');
                return false;
            }
            if(Country==""){
                $('#Country_notification').text('Please enter country name');
                return false;
            }
            // var data= $('.user').serialize();
            // $.ajax({
            //     url:'<?php echo base_url();?>Home/Save_student',
            //     method:'POST',
            //     data:data,
            //     success:function(){
            //     // $('.user')[0].reset();
            //     alert(data);
            //     }
            // })      
        });

    });
</script>