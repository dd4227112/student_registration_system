<?php include('header.php');?> 
<div class="card shadow mb-4">
<div class="row">
<div class="col-sm-12">
<a href="<?php echo base_url();?>index.php/Home/AddUser" class="float-right btn btn-sm add-btn"> Add User</a>
</div>
</div>
<div class="card-body">
  <div class="table-responsive">
    <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
      <thead>
      <tr style="font-family:'Monospace';font-style:italic;color:rgb(241, 163, 18);">
          <th>No.</th>
          <th>First name</th>
          <th>Last name</th>
          <th>Username</th>
          <th></th>
          <th>Actions</th>
          <th></th>

        </tr>
      </thead>
      <tbody>
        <?php 
        $no=1;
        foreach($All_user->result() as $user):?>
        <tr >
        <td ><?=$no;?></td>
          <td ><?=$user->First_name;?></td>
          <td><?=$user->Last_name;?></td>
          <td><?=$user->Username;?></td>
          <td style="font-family:'Monospace';font-style:italic;color:blue;"><a  style="text-decoration:none" class="edituser" id=<?php echo $user->user_id;?> href="#">Edit</a></td>
          <td style="font-family:'Monospace';font-style:italic;color:red;"><a  style="text-decoration:none" class="deleteUser text-danger " id=<?php echo $user->user_id;?> href="#">Delete</a></td>
          <td style="font-family:'Monospace';font-style:italic;color:red;"><a  style="text-decoration:none" class="passreset text-warning " id=<?php echo $user->user_id;?> href="#">Reset Password</a></td>
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
<script>
  $(document).ready(function(){
    // Edit user
    $('.edituser').on('click', function(){
      var user=$(this).attr('id');
      $.ajax({
        url:"<?php echo base_url();?>index.php/Home/getUser",
        method: 'POST',
        data:{user:user},
        dataType:'json',
        success:function(data){
        $('input[name=First_name]').val(data.First_name);
        $('input[name=Last_name]').val(data.Last_name);
        $('input[name=Username]').val(data.Username);
        $('input[name=user_id]').val(data.user_id);
        $('h5').text(data.First_name +"  "+data.Last_name);
        $('#Userprofile').modal('show');
        }
      });
    });

    // delete user
    $('.deleteUser').on('click', function(){
      var userid= $(this).attr('id');
      if(confirm('Are you sure, you want to delete this user??')){

      
      $.ajax({
        url:'<?php echo base_url();?>index.php/Home/deleteUser',
        method:'POST',
        data:{ userid:userid},
        success: function(data){
          alert(data);
          window.location="<?php echo base_url();?>index.php/Home/Settings"
        }
      });
      }
      else{
        return false;
      }
    });
  });
</script>
