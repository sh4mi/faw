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
      <label for="name">Car Name</label>
      <input type="text" class="form-control" id="car" placeholder="Enter car name" name="name">
</div>

<div class="form-group">
      <label for="sel1">Color</label>
      <select class="form-control" id="sel1">
        <option>White</option>
        <option>Misty Silver</option>
        <option>Grey Metallic</option>
        </select>
</div>
    
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
        
       
      </div>
      <!-- /.container -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 