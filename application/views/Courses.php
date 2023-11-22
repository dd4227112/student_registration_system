<?php include('header.php');?> 
<div class="card shadow mb-4">
<div class="row">
<div class="col-sm-12">
<a href="#" class="float-right btn btn-sm add-btn course_modal"> Add Course</a>
</div>
</div>
<div class="card-body">
  <div class="table-responsive">
    <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
      <thead>
      <tr style="font-family:'Monospace';font-style:italic;color:rgb(241, 163, 18);">
          <th>No.</th>
          <th>Course ID</th>
          <th>Course Name</th>
          <th>Course Instructor</th>
          <th>Actions</th>
          <th></th>

        </tr>
      </thead>
      <tbody>
        <?php 
        $no=1;
        foreach($All_course->result() as $course):?>
        <tr >
        <td ><?=$no;?></td>
          <td ><?=$course->Course_id;?></td>
          <td><?=$course->Course_name;?></td>
          <td><?=$course->Course_Instructor;?></td>
          <td style="font-family:'Monospace';font-style:italic;color:blue;"><a  style="text-decoration:none" class="Editcourse" id=<?php echo $course->Course_id;?> href="#">Edit</a></td>
          <td style="font-family:'Monospace';font-style:italic;color:red;"><a  style="text-decoration:none" class="Deletecourse text-danger " id=<?php echo $course->Course_id;?> href="#">Delete</a></td>
       </tr>
        <?php
    $no++;
     endforeach;?>
      </tbody>
    </table>
  </div>
</div>
</div>    
<?php include('footer.php');?>
<!-- Add Modal  -->
<div class="modal fade" id="addmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header
      ">
        <h5 class="modal-title" id="exampleModalLabel">Add new Course</h5>
      </div>
      <div class="modal-body">
       <form class='addcourse' method='POST'>
			<div class="form-group">
				<div class="row">
				    <div class="col-md-12">
				        <label for="Course_id" class="col-form-label">Course ID</label>
				        <input type="text" class="form-control"  id="Course_id" name="Course_id" placeholder="Enter course id">
                <span id="Course_id_notification" class="text-danger "></span>
					</div>
				</div>
			</div>
        <div class="form-group">
				<div class="row">
				    <div class="col-md-12">
				        <label for="Course_name" class="col-form-label">Course name</label>
				        <input type="text" class="form-control"  id="Course_name" name="Course_name" placeholder="Enter course name">
                <span id="Course_name_notification" class="text-danger "></span>
					</div>
				</div>
			</div>
        <div class="form-group">
        <div class="row">
            <div class="col-md-12">
                <label for="Course_Instructor" class="col-form-label">Course Instructor(s)</label>
                <input type="text" class="form-control"  id="Course_Instructor" name="Course_Instructor" placeholder="Enter Instructor name">
                <span id="Course_Instructor_notification" class="text-danger "></span>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <span class="text-danger" id="notification"></span>
        </div>
      </div>
			<div>
				<input type="submit"  class=" btn btn-sm btn-info" value="Save">
			</div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn close-btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
	</div>
</div>
</div>
<!-- update modal -->
<div class="modal fade" id="updatemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header
      ">
        <h5 class="modal-title" id="exampleModalLabel">Update Course</h5>
      </div>
      <div class="modal-body">
       <form class='updatecourse' method='POST'>
			<div class="form-group">
				<div class="row">
				    <div class="col-md-12">
				        <label for="Courseid" class="col-form-label">Course ID</label>
				        <input type="text" class="form-control"  id="Courseid" name="Course_id" placeholder="Enter course id">
                <span id="Courseid_notification" class="text-danger "></span>
					</div>
				</div>
			</div>
        <div class="form-group">
				<div class="row">
				    <div class="col-md-12">
				        <label for="Coursename" class="col-form-label">Course name</label>
				        <input type="text" class="form-control"  id="Coursename" name="Course_name" placeholder="Enter course name">
                <span id="Coursename_notification" class="text-danger "></span>
					</div>
				</div>
			</div>
        <div class="form-group">
        <div class="row">
            <div class="col-md-12">
                <label for="Course_Instructor" class="col-form-label">Course Instructor(s)</label>
                <input type="text" class="form-control"  id="CourseInstructor" name="Course_Instructor" placeholder="Enter Instructor name">
                <span id="CourseInstructor_notification" class="text-danger "></span>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <span class="text-danger" id="notification"></span>
        </div>
      </div>
			<div>
				<input type="submit" value="Update"  class=" btn btn-sm btn-info">
			</div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn close-btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
	</div>
</div>
</div>
<script>
$(document).ready(function(){
    $('.course_modal').on('click', function(){
      $('#addmodal').modal('show');
    });  
    $('.addcourse').on('submit', function(){
    var course_id=document.getElementById('Course_id').value;
    var course_name=document.getElementById('Course_name').value;
    var Course_Instructor=document.getElementById('Course_Instructor').value;

      if(course_id==""){
        $('#Course_id_notification').text('Please fill this field');
        return false;
      }
      if(course_name==""){
        $('#Course_name_notification').text('Please fill this field');
        return false;
      }
       if(Course_Instructor==""){
        $('#Course_Instructor_notification').text('Please fill this field');
        return false;
      }
      $.ajax({
        method: 'post',
        url: '<?php echo base_url();?>index.php/Home/AddCourse',
        data: {course_id:course_id, course_name:course_name, Course_Instructor:Course_Instructor},
        async:'false',
        dataType:'json',
        success:function(data){
            alert(data);
            $('#addmodal').modal('close');
            window.location="<?php echo base_url();?>index.php/Home/Courses";
          }
      });
    });
    $('.Editcourse').on('click', function(){
        var course_id=$(this).attr('id');
        $.ajax({
        method: 'post',
        url: '<?php echo base_url();?>index.php/Home/SelectCourse',
        data: {course_id:course_id},
        async:'false',
        dataType:'json',
        success:function(data){         
            $('input[name=Course_id]').val(data.Course_id);
            $('input[name=Course_name]').val(data.Course_name);
            $('input[name=Course_Instructor]').val(data.Course_Instructor);
            $('#updatemodal').modal('show');
          }
      });
    });

    $('.updatecourse').on('submit', function(){
    var course_id=document.getElementById('Courseid').value;
    var course_name=document.getElementById('Coursename').value;
    var Course_Instructor=document.getElementById('CourseInstructor').value;
      if(course_id==""){
        $('#Courseid_notification').text('Please ');
        return false;
      }
      if(course_name==""){
        $('#Coursename_notification').text('Please ');
        return false;
      }
        if(Course_Instructor==""){
        $('#CourseInstructor_notification').text('Please ');
        return false;
      }


      $.ajax({
        method: 'post',
        url: '<?php echo base_url();?>index.php/Home/UpdateCourse',
        data: {course_id:course_id, course_name:course_name, Course_Instructor:Course_Instructor},
        async:'false',
        dataType:'json',
        success:function(data){          
            alert(data);
            window.location="<?php echo base_url();?>index.php/Home/Courses";
            $('#updatemodal').modal('close');
          }
      });
    });
    $(".Deletecourse").click(function(){
        var id=$(this).attr("id");
        if (confirm("Do you want to delete this course?? ")) {
          $.ajax({
            method: 'get',
            url: '<?php echo base_url();?>index.php/Home/deleteCourse',
            data:{id:id},
            success:function(data){
              alert(data);
                  window.location="<?php echo base_url();?>index.php/Home/Courses";
                }

          });
        } else {
          return false;
        }
      });
  });
</script>