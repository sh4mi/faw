<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Purchases</h1>
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
      <input type="button" class="form-control btn btn-info" name="add_job" value="Add Puchases"  onclick="showCreateDialog()">
      <br><br>
      <input type="button" class="form-control btn btn-info" name="add_job" value="Add Loss"  onclick="showCreateDialog1()">
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
  
  
  
  
  
       <div class="modal fade" id="product_loss_modal" role="dialog"  >
    <div class="modal-dialog" id="modal-dialog" style="width:100%;">
    
      <!-- Modal content-->
    <form class="form-horizontal" role="form" method="post"  action="<?php //echo base_url().'Welcome/medicines/create/'.$user_id; ?>">
      <div class="modal-content" id="editCityDialog">

        <div class="modal-header" style="background-color: #3c8dbc;" align="center">
          <button type="button" class="close" data-dismiss="modal"></button>
          <h4 class="modal-title">Add Purchase</h4>
        </div>
        <div class="modal-body">
      <div class="container">
        <div class="form-group">
      <label for="cnic">Purchase Date</label>
      <input type="date" class="form-control" id="" placeholder="Choose Date" name="cnic">
    </div>
       <div class="form-group">
      <label for="name">Product</label>
      <input type="text" class="form-control" id="" placeholder="Enter Product" name="name">
    </div>
    
    
    <div class="form-group">
      <label for="mob">Price</label>
      <input type="text" class="form-control" id="mob" placeholder="Enter Price" name="mob">
    </div>
    
    <div class="form-group">
      <label for="">Quantity</label>
      <input type="text" class="form-control" id="vehicle" placeholder="Enter Quantity" name="vehicle">
    </div>

    <div class="form-group">
      <label for="">Total</label>
      <input type="text" class="form-control disabled" id="vehicle" placeholder="Total" name="vehicle">
    </div>
    <div class="form-group">
      <label for="">Bill Number</label>
      <input type="text" class="form-control disabled" id="vehicle" placeholder="Bill Number" name="vehicle">
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
  
  
    <div class="modal fade" id="jobs_create_modal" role="dialog"  >
    <div class="modal-dialog" id="modal-dialog" style="width:100%;">
    
      <!-- Modal content-->
    <form class="form-horizontal" role="form" method="post"  action="<?php //echo base_url().'Welcome/medicines/create/'.$user_id; ?>">
      <div class="modal-content" id="editCityDialog">

        <div class="modal-header" style="background-color: #3c8dbc;" align="center">
          <button type="button" class="close" data-dismiss="modal"></button>
          <h4 class="modal-title">Add Loss</h4>
        </div>
        <div class="modal-body">
      <div class="container">
      
      <div class="form-group">
      <label for="name">Product</label>
      <input type="text" class="form-control" id="" placeholder="Enter Product" name="name">
    </div>
    
    
    <div class="form-group">
      <label for="mob">Loss Quantity</label>
      <input type="text" class="form-control" id="mob" placeholder="Enter Loss Quantity" name="mob">
    </div>
    
    <div class="form-group">
      <label for="mob">Remarks</label>
      <textarea type="text" class="form-control" id="mob" placeholder="Enter Loss Remarks" name="mob"></textarea>
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
  function showCreateDialog1()
  {
    $("#jobs_create_modal").modal('show');
  }
   function showCreateDialog()
  {
    $("#product_loss_modal").modal('show');
  }
 </script>