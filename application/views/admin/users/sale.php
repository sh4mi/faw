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
      <label for="name">Search by Chases/Booking #</label>
      <input type="text" class="form-control" id="" placeholder="Search.." name="search">

    </div>

    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>CNIC</th>
                <th>Vehicle</th>
                <th>Color</th>
                <th>Engine#</th>
                <th>Chasis</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>61101-1234567-8</td>
                <td>V2</td>
                <td>White</td>
                <td>4e3b42</td>
                <td>12345678</td>
            </tr>
           
           
            
           
           
        </tbody>
        <tfoot>
         
        </tfoot>
    </table>
    <div class="form-group">
      <label for="name">chassis Number</label>
      <input type="text" class="form-control" id="" placeholder="chassis" name="search">
    </div>
     <div class="form-group">
      <label for="name">Total Amount</label>
      <input type="text" class="form-control" id="" placeholder="amount" name="search">
    </div>
   
    <button type="submit" class="btn btn-default">Add Sale</button>
  </form>
        <hr>
       
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 