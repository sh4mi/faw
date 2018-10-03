<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Create User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v2</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container ">
       
      <?php echo form_open('user/register/', array('class' => '' ));?>
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
  <div class="form-group"> 
    <input type="submit" name="signup" value="Create" class="btn btn-default">
  </div>
 
</form>
        <hr>
       
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 