<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Users</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v2</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
    
      <div class="row">
      <div class="col-md-10"></div>
      <div class="col-md-2" align="right">
      <input type="button" class="form-control btn btn-info" name="add_job" value="Add New User"  onclick="showCreateDialog()">
      </div>
      </div>
    
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container  col-sm-6">
    
  <?php $sr = 1; ?>
          <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sr No.</th>
                  <th>Name</th>
          <th>Edit</th>
          <th>Delete</th>
                </tr>
                </thead>
                <tbody>
<?php
//foreach($medicines as $medicine)
//{
  //$medicine_id = $medicine['id'];
?>
                <tr>
                  <td><?php echo $sr; ?></td>
                  <td><?php //echo $medicine['name']; ?></td>
                  <td><input type="button" name="edit" class="form-control btn btn-success" onclick="showDialog('<?php //echo $user_id; ?>','<?php //echo $medicine_id; ?>')" Value="Edit"></td>
                  <td><input type="button" name="delete" class="form-control btn btn-danger" onclick="showDeleteDialog('<?php //echo $user_id; ?>','<?php //echo $medicine_id; ?>')" Value="Delete"></td>

        </tr>
<?php $sr++; //} ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Sr No.</th>
                  <th>Name</th>
          <th>Edit</th>
          <th>Delete</th>
                </tr>
                </tfoot>
              </table>
   
 



       
      </div>
      <!-- /.container -->
    </section>
    <!-- /.content -->
  
  </div>
  <!-- /.content-wrapper -->
  
  
  
  
  
       <div class="modal fade" id="jobs_create_modal" role="dialog"  >
    <div class="modal-dialog" id="modal-dialog" style="width:100%;">
    
      <!-- Modal content-->
    <form class="form-horizontal" role="form" method="post"  action="<?php //echo base_url().'Welcome/medicines/create/'.$user_id; ?>">
      <div class="modal-content" id="editCityDialog">

        <div class="modal-header" style="background-color: #3c8dbc;" align="center">
          <button type="button" class="close" data-dismiss="modal"></button>
          <h4 class="modal-title">Add New User</h4>
        </div>
        <div class="modal-body">
      <div class="container">
         <div class="form-group">
      <label class="control-label "  >First Name</label>
      <input type="text" class="form-control" placeholder="First Name" name="fname">
  </div>
  <div class="form-group">
      <label  class="control-label ">Last name</label>
      <input type="text" class="form-control" placeholder="Last name" name="lname">
  </div>
  <div class="form-group">
      <label class="control-label ">Username</label>
      <input type="text" class="form-control" placeholder="Username" name="username">
  </div>
  <div class="form-group">
      <label class="control-labelv" >Email</label>
      <input type="email" class="form-control" placeholder="email" name="email">
  </div>
  <div class="form-group">
      <label class="control-label ">Password</label>
      <input type="password" class="form-control" placeholder="Password" name="password">
  </div>
  <div class="form-group">
      <label class="control-label ">Confirm Password</label>
      <input type="password" class="form-control" placeholder="Confirm Password" name="password2">
  </div>
  <div class="form-group">
    <label class="control-label ">Gender</label>
  <input type="radio" name="gender" value="male"> Male
  <input type="radio" name="gender" value="female"> Female
  </div>
  <div class="form-group">
      <label for="sel1">Demo Role</label>
      <select class="form-control" id="sel1">
        <option>Admin</option>
        <option>Editor</option>
        <option>Customer</option>
        </select>
</div>
      </div>
      
      
      
        </div>
    
    <div class="modal-footer">
    <div class="row">
    
    <div class="col-md-5" align="right" style="padding:0px;">
    <input type="submit" name="save" id="save" class="form-control btn btn-success" value="Save">
    </div>
    <div class="col-md-7">
    <input type="button" name="cancel" id="cancel" class="form-control btn btn-danger" value="Cancel" data-dismiss="modal">

    </div>
    </div>
    </div>
        
      </div>
      </form>
    </div>
  </div> 
  
  
  
  
  
  
  
  
 
  
  <script>
  function showCreateDialog()
  {
    $("#jobs_create_modal").modal('show');
  }
 </script>