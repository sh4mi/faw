<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Invoices</h1>
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
      <input type="button" class="form-control btn btn-info" name="add_job" value="Add Invoice"  onclick="showCreateDialog()">
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
                  <td><input type="button" name="edit" class="form-control btn btn-success btn-sm" onclick="showDialog('<?php //echo $user_id; ?>','<?php //echo $medicine_id; ?>')" Value="Edit"></td>
                  <td><input type="button" name="delete" class="form-control btn btn-danger btn-sm" onclick="showDeleteDialog('<?php //echo $user_id; ?>','<?php //echo $medicine_id; ?>')" Value="Delete"></td>

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
          <h4 class="modal-title">Add Invoice</h4>
        </div>
        <div class="modal-body">
      <div class="container">
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
      <label for="name">Invoice Number</label>
      <input type="text" class="form-control" id="" placeholder="Invoice" name="search">
    </div>
     <div class="form-group">
      <label for="name">Date</label>
      <input type="date" class="form-control" id="" placeholder="Date" name="search">
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