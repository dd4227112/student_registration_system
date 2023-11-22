</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
  <div class="container my-1">
    <div class="copyright text-center my-auto">
      <span>Copyright &copy; SRMS-Ngara FDC 2020</span>
    </div>
  </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>
<!-- Logout Modal -->

<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ready to exit?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Once you click "Logout", username and password will be required to login again.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" href="<?php echo base_url(); ?>index.php/Home/Logout">Logout</a>
      </div>
    </div>
  </div>
</div>
<!--End Logout Modal-->
<!-- Modal  -->
<div class="modal fade" id="CurrentYearModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header
      ">
        <h5 class="modal-title" id="exampleModalLabel">Set Current Academic Year</h5>
      </div>
      <div class="modal-body">
        <form class='currentYear' method='POST'>
          <div class="form-group">
            <div class="row">
              <div class="col-md-12">
                <label for="date_report" class="col-form-label">Academic Year</label>
                <input type="text" class="form-control" id="CurrentYear" name="Current_Academic_Year" placeholder="Enter current academic  year">
                <span id="Current_Academic_Year" class="text-danger "></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <span class="text-danger" id="notification"></span>
            </div>
          </div>
          <div>
            <input type="submit" value="Save" class=" btn btn-sm btn-info">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>

<!-- Modal  -->
<div class="modal fade" id="Userprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header
      ">
        <h5 class="modal-title heading text-success" id="exampleModalLabel"></h5>
      </div>
      <div class="modal-body">
        <form class='Profile' method='POST'>
          <div class="form-group">
            <div class="row">
              <div class="col-md-12">
                <label for="First_name" class="col-form-label">First name</label>
                <input type="text" class="form-control" id="First_name" name="First_name" placeholder="Enter first name">
                <span id="First_name_note" class="text-danger "></span>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-md-12">
                <label for="Last_name" class="col-form-label">Last name</label>
                <input type="text" class="form-control" id="Last_name" name="Last_name" placeholder="Enter last name">
                <span id="Last_name_note" class="text-danger "></span>
              </div>
            </div>
          </div>
          <input type="hidden" class="form-control" id="User_id" name="user_id">
          <div class="form-group">
            <div class="row">
              <div class="col-md-12">
                <label for="Username" class="col-form-label">Username</label>
                <input type="text" class="form-control" id="Username" name="Username" placeholder="Enter username">
                <span id="Username_note" class="text-danger "></span>
              </div>
            </div>
          </div>
          <div>
            <input type="submit" value="Update" class=" btn btn-sm btn-info">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url(); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo base_url('vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo base_url('js/sb-admin-2.min.js'); ?>"></script>
<!-- Datatable plugin -->
<script src="<?php echo base_url(); ?>vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Page level custom scripts -->
<!-- <script src="<?php echo base_url(); ?>js/demo/datatables-demo.js"></script> -->

</body>

</html>
<script>
  $(document).ready(function() {
    $('#dataTable').DataTable({
      "sorting": true,
      "paging": true
    });
    $('.profilemodal').on('click', function() {
      var user = $(this).attr('id');
      $.ajax({
        url: "<?php echo base_url(); ?>index.php/Home/getUser",
        method: 'POST',
        data: {
          user: user
        },
        dataType: 'json',
        success: function(data) {
          $('input[name=First_name]').val(data.First_name);
          $('input[name=Last_name]').val(data.Last_name);
          $('input[name=Username]').val(data.Username);
          $('input[name=user_id]').val(data.user_id);
          $('h5').text(data.First_name + "  " + data.Last_name);
          $('#Userprofile').modal('show');
        }
      });

    });
    $('.show-modal').on('click', function() {
      $.ajax({
        url: "<?php echo base_url(); ?>index.php/Home/getCurrentYear",
        method: 'POST',
        dataType: 'json',
        success: function(data) {
            $('input[name=Current_Academic_Year]').val(data.Current_Academic_year);
          $('#CurrentYearModal').modal('show');
        }

      });
    });
    $('.currentYear').on('submit', function() {
      var year = document.getElementById('CurrentYear').value;
      if (year == "") {
        $('#Current_Academic_Year').text('Please fill this field');
        return false;
      }
      if (isNaN(year)) {
        $('#Current_Academic_Year').text('Only numbers are required');
        return false;
      }
      if (year.length != 4) {
        $('#Current_Academic_Year').text('Incorrect number');
        return false;
      }
      $.ajax({
        method: 'post',
        url: '<?php echo base_url(); ?>index.php/Home/Save_currentyear',
        data: {
          year: year
        },
        async: 'false',
        dataType: 'json',
        success: function(data) {
          alert(data);
          $('#CurrentYearModal').modal('hide');
        }
      });
    });

    // on click password reset button
    $('.passreset').on('click', function() {
      var user = $(this).attr('id');
      if (confirm('Are you sure, you want to reset password')) {
        $.ajax({
          method: 'post',
          url: '<?php echo base_url(); ?>index.php/Home/resetPassword',
          data: {
            user: user
          },
          async: 'false',
          dataType: 'json',
          success: function(data) {
            alert(data);
            window.location = '<?php echo base_url(); ?>index.php/Home/Settings';
          }
        });
      } else {
        return false;
      }
    });
    $('.Profile').on('submit', function() {
      var First_name = document.getElementById('First_name').value;
      var Last_name = document.getElementById('Last_name').value;
      var Username = document.getElementById('Username').value;
      if (First_name == "") {
        $('#First_name_note').text('Please enter first name');
        return false;
      }
      if (Last_name == "") {
        $('#Last_name_note').text('Please enter last name');
        return false;
      }
      if (Username == "") {
        $('#Username_note').text('Please enter username');
        return false;
      }
      var data = $('.Profile').serialize();
      $.ajax({
        method: 'post',
        url: '<?php echo base_url(); ?>index.php/Home/Updateuser',
        data: data,
        async: 'false',
        dataType: 'json',
        success: function(data) {
          alert(data);
          window.location = '<?php echo base_url(); ?>index.php/Home/Settings';
        }
      });
    });
  });
</script>