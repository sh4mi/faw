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
      <div class="container">
       
      <?php echo form_open('user/register/') ;?>
  <div class="form-group">
      <label >First Name</label>
      <input type="text" class="form-control" name="fname">
  </div>
  <div class="form-group">
      <label >Last name</label>
      <input type="text" class="form-control" name="lname">
  </div>
  <div class="form-group">
      <label >Username</label>
      <input type="text" class="form-control" name="username">
  </div>
  <div class="form-group">
      <label >Email</label>
      <input type="email" class="form-control" name="email">
  </div>
  <div class="form-group">
      <label >Password</label>
      <input type="password" class="form-control" name="password">
  </div>
  <div class="form-group">
      <label >Confirm Password</label>
      <input type="password" class="form-control" name="password2">
  </div>
  <input type="radio" name="gender" value="male"> Male<br>
  <input type="radio" name="gender" value="female"> Female<br>
  <input type="radio" name="gender" value="other"> Other <br>
  <input type="submit" name="signup" value="Create" class="btn btn-success">
</form>
        
       
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 