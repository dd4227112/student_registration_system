<?php include('header.php');?>
            <h4 class="text-center content-heading text-gray-900 mb-4">Elimu Haina Mwisho Students- <?php echo $current_year;?> Academic year</h4>
            <input type="hidden" name="Academic_year" value=" <?php echo $current_year;?>">
<!-- Page Heading -->
<button class=" editbtn btn btn-sm btn-secondary">Edit</button>
<button class=" closebtn btn btn-sm btn-secondary">Close</button>

 <!-- edit form --> 
 <?php echo form_open("Home/Edit_student", ['class'=>"edit_user"]);?>
        <li><a href='#' class="toggle_particulars">Student Informations</a></li>
        <div class="particulars">        
            <div class="form-group row">
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <input type="text"  readonly class="form-control form-control-user" name="First_name" id="First_name" placeholder="First Name">
                    <span class="text-danger" id="First_name_notification"></span>
                </div>
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <input type="text" readonly class="form-control form-control-user" name="Middle_name" id="Middle_name" placeholder="Middle Name">
                    <span class="text-danger" id="Middle_name_notification"></span>
                </div>
                <div class="col-sm-4 mb-3 mb-sm-0">
                <input type="text" readonly class="form-control form-control-user" name="Last_name" id="Last_name" placeholder="Last Name">
                <span class="text-danger" id="Last_name_notification"></span>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-3 mb-3 mb-sm-0">
                <select  id="sex" readonly name="sex" class="form-control form-control-lg">
                    <option value="">select sex</option>                     
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
                <span class="text-danger" id="sex_notification"></span>
                </div>
                <div class="col-sm-3 mb-3 mb-sm-0">
                    <input type="date" class="form-control form-control-user" readonly name="DoB" id="DoB" placeholder="Date of Birth">
                    <span class="text-danger" id="DoB_notification"></span>
                </div>
                <div class="col-sm-3 mb-3 mb-sm-0">
                <input type="text" class="form-control form-control-user" readonly name="Mobile_number" id="Mobile_number" placeholder="Mobile Number">
                <span class="text-danger" id="Mobile_number_notification"></span>
                </div>
                <div class="col-sm-3 mb-3 mb-sm-0">
                <select  id="Status" readonly name="Status" class="form-control form-control-lg">
                    <option value="">........</option>                     
                    <option value="Active">Active</option>
                    <option value="Inactive">Inactive</option>
                    <option value="Completed">Completed</option>
                </select>
                <span class="text-danger" id="status_notification"></span>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12 mb-3 mb-sm-0">
                    <textarea name="Description" readonly class="form-control form-control-user"  id="Description" cols="10"  placeholder="More description if any" rows="1"></textarea>
                </div>
            </div>
        </div>
        <li><a href='#' class="toggle_address">Student Address</a></li>
        <div class="location"> 
            <div class="form-group row">
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <input type="text" name="ward" readonly class="form-control form-control-user" id="ward" placeholder="Ward">
                    <input type=hidden name="Student_id">
                    <span class="text-danger" id="ward_notification"></span>
                </div>
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <input type="text" name="District" readonly class="form-control form-control-user" id="District" placeholder="District">
                    <span class="text-danger" id="District_notification"></span>
                </div>
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" readonly  name="Region" id="Region" placeholder="Region">
                    <span class="text-danger" id="Region_notification"></span>                  
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" readonly name="Country" value="TANZANIA" id="Country" placeholder="Country">
                    <span class="text-danger" id="Country_notification"></span>
                </div>
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" readonly name="Organization" id="Organization" placeholder="Organization if any">
                    <span class="text-danger" id="Organization_notification"></span>
                </div>
            </div>
        </div>
        <li><a href="#" class="toggle_parent">Parent/Guardian Informations</a></li>
        <div class="parent_info">
            <div class="form-group row">
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" readonly name="Firstname" id="Firstname" placeholder="First name">
                    <span class="text-danger" id="Firstname_notification"></span>
                </div>
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" readonly name="Middlename" id="Middlename" placeholder="Middle name">
                    <span class="text-danger" id="Middlename_notification"></span>
                </div>
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" readonly name="Lastname" id="Lastname" placeholder="Last name">
                    <span class="text-danger" id="Lastname_notification"></span>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <input type="email" class="form-control form-control-user" readonly name="Email" id="Email" placeholder="Email">
                    <span class="text-danger" id="Email_notification"></span>
                </div>
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" readonly name="Mobilenumber" id="Mobilenumber" placeholder="Mobile number">
                    <span class="text-danger" id="Mobilenumber_notification"></span>
                </div>
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" readonly id="Relationship" name="Relationship" placeholder="Relationship">
                    <span class="text-danger" id="Relationship_notification"></span>
                </div>
            </div>
        </div>
        <li><a href='#' class="toggle_education">Course and Resident Informations</a></li>
        <div class="education"> 
            <div class="form-group row">
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <select  id="Course_id" name="Course_id" readonly class="form-control form-control-lg">
                    <option >Course  Name</option> 
                    <?php foreach($courses as $course ){?>                 
                        <option value="<?php echo $course->Course_id?>"><?php echo $course->Course_name?></option>
                    <?php } ?>
                    </select>
                    <span class="text-danger" id="Course_id_notification"></span>
                </div>
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <select  id="CourseNature" name="CourseNature" readonly class="form-control form-control-lg">
                        <option >Course  Nature</option>                     
                        <option value="Normal">Normal</option>
                        <option value="Mama_Course">Mama Course</option>
                    </select>
                    <span class="text-danger" id="CourseNature_notification"></span>
                </div>
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <select  id="Course_duration" name="Course_duration" readonly class="form-control form-control-lg" >
                        <option >Course  Duration</option>                     
                        <option value="Short_course">Short Course</option>
                        <option value="Long_Course">Long Course</option>
                    </select>
                    <span class="text-danger" id="Course_duration_notification"></span>
                </div>
            </div>
            <div class="form-group row">
            <div class="col-sm-4 mb-3 mb-sm-0 level">
                    <select  id="level" name="Level" readonly class="form-control form-control-lg">
                        <option >Course Level</option>                     
                        <option value="Level_I">Level I</option>
                        <option value="Level_II">Level II</option>
                    </select>
                    <span class="text-danger" id="level_notification"></span>
                </div>
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <select  id="Resident" name="Resident" readonly class="form-control form-control-lg">
                        <option >Resident</option>                     
                        <option value="Day">Day</option>
                        <option value="Boarding">Boarding</option>
                    </select>
                    <span class="text-danger" id="Resident_notification"></span>
                </div>
                <div class="col-sm-4 mb-3 mb-sm-0 room_number">
                    <input type="text" name="Room_Number" class="form-control form-control-user" readonly id="Room_Number" placeholder="Room number">
                    <span class="text-danger" id="Room_Number_notification"></span>
                </div>
            </div>
        </div>
        <li><a href="#" class="toggle_emergency">Emergency Contact</a></li>
        <div class="emergency">
        <div class="form-group row">
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" readonly name="Full_name" id="Full_name" placeholder="Full name">
                </div>
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" readonly id="Phone" name="Phone" placeholder="Phone number">
                </div>
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" readonly id="Relation_ship" name="Relationships" placeholder="Relationship">
                </div>
            </div>
        </div>
        <li><a href="#" class="toggle_medical">Medical Informations</a></li>
        <div class="medical">
            <div class="form-group row">
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user"  readonly name="Physician_name" id="Physician_name" placeholder="Physician name">
                </div>
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" readonly name="Phonenumber" id="Phonenumber" placeholder="Phone number">
                </div>
                <div class="col-sm-4 mb-3 mb-sm-0">
                <input type="text" class="form-control form-control-user" readonly name="Allegies" id="Allegies" placeholder="Allegies">      
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12 mb-3 mb-sm-0">
                    <textarea name="Medication" class="form-control form-control-user" readonly  id="Medication" cols="10"  placeholder="Medication" rows="2"></textarea>
                </div>
            </div>
        </div>
        <div class="form-group row">
        <input type="submit" disabled="disabled" value="Update" class="btn btn-xl btn-primary">
        </div>
        </form>
<!-- end edit form -->

 <button class=" editbtn btn btn-sm btn-secondary">Edit</button>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                  <tr style="font-family:'Monospace';font-style:italic;color:rgb(241, 163, 18);">
                      <th>Full name</th>
                      <th>Sex</th>
                      <th>Date of Birth</th>
                      <th>Mobile number</th>
                      <th>Course</th>
                      <th>Level</th>
                      <th>Resident</th>
                      <th>Status</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($All as $student):?>
                    <tr >
                      <td ><?=$student->First_name. " ".$student->Middle_name. " ".$student->Last_name;?></td>
                      <td><?=$student->sex;?></td>
                      <td><?=$student->DoB;?></td>
                      <td><?=$student->Mobile_number;?></td>
                      <td><?=$student->Course_name;?></td>
                      <td><?=$student->Level;?></td>
                      <td><?=$student->Resident;?></td>
                    <?php if($student->Status=="Active"){?>
                      <td class="text-success"><?=$student->Status;?></td> 
                    <?php }else{?>
                      <td class="text-danger"><?=$student->Status;?></td>
                    <?php }?>
                      
                      <td style="font-family:'Monospace';font-style:italic;color:blue;"><a  style="text-decoration:none" class="moreInformation" id=<?php echo $student->Student_id;?> href="#">More Informations</a></td>
                   </tr>
                    <?php endforeach;?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <button class=" closebtn btn btn-sm btn-secondary">Close</button>
<?php include('footer.php');?>
<script>
  $(document).ready(function(){
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

    $('.closebtn').hide();
    var currentyear=$('input[name=Academic_year').val();
    $('.editbtn').hide();
    $('.edit_user').hide();
    $('.moreInformation').on("click", function(){
      var Id=$(this).attr('id');
      $.ajax({
        url:'<?php echo base_url();?>index.php/Home/FetchStudent',
        method:'POST',
        data:{Id:Id},
        dataType:'json',
        success:function(data){
          $('h4').text(data.First_name+ " "+data.Middle_name+" "+data.Last_name);
          $('.card').hide();
          $('input[name=First_name]').val(data.First_name);
          $('input[name=Middle_name]').val(data.Middle_name);
          $('input[name=Last_name]').val(data.Last_name);
          $('select[name=sex]').val(data.sex);
          $('input[name=DoB]').val(data.DoB);
          $('input[name=Mobile_number]').val(data.Mobile_number);
          $('select[name=Status]').val(data.Status);
          $('input[name=ward]').val(data.ward);
          $('input[name=District]').val(data.District);
          $('input[name=Region]').val(data.Region);
          $('input[name=Country]').val(data.Country);
          $('input[name=Organization]').val(data.Organization);
          $('input[name=Room_Number]').val(data.Room_number);
          $('select[name=Level]').val(data.Level);
          $('select[name=Course_id]').val(data.Course_id);
          $('select[name=CourseNature]').val(data.CourseNature);
          $('select[name=Course_duration]').val(data.Course_duration);
          $('select[name=Resident]').val(data.Resident);
          $('textarea[name=Description]').val(data.Description);
          $('input[name=Firstname]').val(data.Firstname);
          $('input[name=Middlename]').val(data.Middlename);
          $('input[name=Lastname]').val(data.Lastname);
          $('input[name=Email]').val(data.Email);
          $('input[name=Mobilenumber]').val(data.Mobilenumber);
          $('input[name=Relationship]').val(data.Relationship);
          $('input[name=Phone]').val(data.Phone);
          $('input[name=Relationships]').val(data.Relationships);
          $('input[name=Full_name]').val(data.Full_name);
          $('input[name=Physician_name]').val(data.Physician_name);
          $('input[name=Phonenumber]').val(data.Phonenumber);
          $('input[name=Allegies]').val(data.Allegies);
          $('textarea[name=Medication]').val(data.Medication);

          $('input[name=Student_id]').val(data.Student_id);


          $('.closebtn').show();
          $('.editbtn').show();
          $('.edit_user').show();  
        },
        error:function(){
          alert('Error!!!!!');
        }
      });
    });
    $('.closebtn').on('click', function(){
      $('.card').show();
      $('.closebtn').hide();
      $('.editbtn').hide();
      $('.edit_user').hide();
      $('h4').text("Elimu Haina Mwisho Students- "+currentyear+" Academic year");
      $('input[name=First_name], input[name=Middle_name], input[name=Last_name] ' ).attr("readonly", "readonly");
      $('select[name=sex]').attr("readonly", "readonly");
      $('input[name=DoB]').attr("readonly", "readonly");
      $('input[name=Mobile_number]').attr("readonly", "readonly");
      $('input[name=ward]').attr("readonly", "readonly");
      $('input[name=District]').attr("readonly", "readonly");
      $('input[name=Region]').attr("readonly", "readonly");
      $('input[name=Country]').attr("readonly", "readonly");
      $('input[name=Organization]').attr("readonly", "readonly");
      $('input[name=Room_Number]').attr("readonly", "readonly");
      $('select[name=Level]').attr("readonly", "readonly");
      $('select[name=CourseNature]').attr("readonly", "readonly");
      $('select[name=Course_id]').attr("readonly", "readonly");
      $('select[name=Course_duration]').attr("readonly", "readonly");
      $('select[name=Resident]').attr("readonly");
      $('textarea[name=Description]').attr("readonly", "readonly");
      $('input[name=Firstname]').attr("readonly", "readonly");
      $('input[name=Lastname]').attr("readonly", "readonly");
      $('input[name=Middlename]').attr("readonly", "readonly");
      $('input[name=Email]').attr("readonly", "readonly");
      $('input[name=Mobilenumber]').attr("readonly", "readonly");
      $('input[name=Relationship]').attr("readonly", "readonly");
      $('input[name=Full_name]').attr("readonly", "readonly");
      $('input[name=Phone]').attr("readonly", "readonly");
      $('input[name=Relationships]').attr("readonly", "readonly");
      $('input[name=Physician_name]').attr("readonly", "readonly");
      $('input[name=Phonenumber]').attr("readonly", "readonly");
      $('input[name=Allegies]').attr("readonly", "readonly");
      $('textarea[name=Medication]').attr("readonly", "readonly");
      $('input[type=submit]').attr("disabled", "disabled");
    });
    $('.editbtn').on('click', function(){
      $('input[name=First_name]').removeAttr("readonly");
      $('input[name=Middle_name]').removeAttr("readonly");
      $('input[name=Last_name]').removeAttr("readonly");
      $('select[name=sex]').removeAttr("readonly");
      $('input[name=DoB]').removeAttr("readonly");
      $('input[name=Mobile_number]').removeAttr("readonly");
      $('input[name=ward]').removeAttr("readonly");
      $('input[name=District]').removeAttr("readonly");
      $('input[name=Region]').removeAttr("readonly");
      $('input[name=Country]').removeAttr("readonly");
      $('input[name=Organization]').removeAttr("readonly");
      $('input[name=Room_Number]').removeAttr("readonly");
      $('select[name=Level]').removeAttr("readonly");
      $('select[name=CourseNature]').removeAttr("readonly");
      $('select[name=Course_id]').removeAttr("readonly");
      $('select[name=Course_duration]').removeAttr("readonly");
      $('select[name=Resident]').removeAttr("readonly");
      $('textarea[name=Description]').removeAttr("readonly");
      $('input[name=Firstname]').removeAttr("readonly");
      $('input[name=Lastname]').removeAttr("readonly");
      $('input[name=Middlename]').removeAttr("readonly");
      $('input[name=Email]').removeAttr("readonly");
      $('input[name=Mobilenumber]').removeAttr("readonly");
      $('input[name=Relationship]').removeAttr("readonly");
      $('input[name=Full_name]').removeAttr("readonly");
      $('input[name=Phone]').removeAttr("readonly");
      $('input[name=Relationships]').removeAttr("readonly");
      $('input[name=Physician_name]').removeAttr("readonly");
      $('input[name=Phonenumber]').removeAttr("readonly");
      $('input[name=Allegies]').removeAttr("readonly");
      $('textarea[name=Medication]').removeAttr("readonly");
      $('input[type=submit]').removeAttr("disabled");
    });
    // Display field description as mouse enter certain field
    $('input[name=First_name]').on("mouseenter", function(){
      $('#First_name_notification').text("Student's first name");
    });
    $('input[name=First_name]').on("mouseleave", function(){
      $('#First_name_notification').text("");
    });
    $('input[name=Middle_name]').on("mouseenter", function(){
      $('#Middle_name_notification').text("Student's middle name");
    });
    $('input[name=Middle_name]').on("mouseleave", function(){
      $('#Middle_name_notification').text("");
    });
    $('input[name=Last_name]').on("mouseenter", function(){
      $('#Last_name_notification').text("Student's last name");
    });
    $('input[name=Last_name]').on("mouseleave", function(){
      $('#Last_name_notification').text("");
    });
    $('.edit_user').on('submit', function(){
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

    });
  });
</script>
