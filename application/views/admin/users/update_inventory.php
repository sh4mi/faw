<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?php echo $title?></h1>
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
      <div class="container  col-sm-6">
       
      <?php echo form_open('user/register/') ;?>
       <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="" placeholder="Enter name" name="name">
    </div>
    <div class="form-group">
      <label for="CNIC">CNIC</label>
      <input type="text" class="form-control" id="" placeholder="Enter CNIC #" name="cnic">
    </div>
    <div class="form-group">
      <label for="mob">Mobile</label>
      <input type="number" class="form-control" id="mob" placeholder="Enter Mobile #" name="mob">
    </div>
    <div class="form-group">
      <label for="">Vehicle</label>
      <input type="text" class="form-control" id="vehicle" placeholder="Enter Vehicle" name="vehicle">
    </div>
      <div class="form-group">
      <label for="">Booking Number</label>
      <input type="text" class="form-control" id="vehicle" placeholder="Enter Booking" name="vehicle">
    </div>
    
    <div class="form-group">
      <label for="sel1">Color</label>
      <select class="form-control" id="sel1">
        <option>White</option>
        <option>Misty Silver</option>
        <option>Grey Metallic</option>
        </select>
</div>
     <div class="form-group">
      <label for="">Chassis Number</label>
      <input type="text" class="form-control" id="vehicle" placeholder="Enter Charges" name="vehicle">
    </div>
     <div class="form-group">
      <label for="">Engine Number</label>
      <input type="text" class="form-control" id="vehicle" placeholder="Enter Engine No." name="vehicle">
    </div>
     <div class="form-group">
      <label for="">Amount</label>
      <input type="text" class="form-control" id="vehicle" placeholder="Enter Amount" name="">
    </div>
    <button type="submit" class="btn btn-default">Update</button>
  </form>
        <hr>
       
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 