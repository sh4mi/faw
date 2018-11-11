<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Jobs</h1>
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
      <div class="col-md-6" align="right">
      <input type="button" class="form-control btn btn-my col-md-3" name="add_job" value="Job Card"  onclick="showCreateDialog()">
      <input type="button" class="form-control btn btn-my col-md-3" name="add_job" value="Add Part to Job"  onclick="showCreateDialog2()">
      </div>
   
      </div>
    
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container  col-sm-12">
    
  <?php $sr = 1; ?>
          <table id="example1" class="table table-bordered table-striped datatable-button-html5-basic">
                <thead>
                <tr>
                  <th>Sr No.</th>
                  <th>Name</th>
                  <th>CNIC</th>
                  <th>Mobile</th>
                  <th>Vehicle</th>
                  
                  <th>Color</th>
                  <th>Chassis number</th>
                  <th>Engine number</th>
                  <th>Job</th>
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
                  <td><?php //echo $medicine['name']; ?></td>
                  <td><?php //echo $medicine['name']; ?></td>
                  <td><?php //echo $medicine['name']; ?></td>
                  <td><?php //echo $medicine['name']; ?></td>
                  <td><?php //echo $medicine['name']; ?></td>
                  <td><?php //echo $medicine['name']; ?></td>
                  <td><?php //echo $medicine['name']; ?></td>
                  <td><input type="button" name="edit" class="form-control btn btn-success btn-sm" onclick="showDialog('<?php //echo $user_id; ?>','<?php //echo $medicine_id; ?>')" Value="Edit"></td>
                  <td><input type="button" name="delete" class="form-control btn btn-danger btn-sm" onclick="showDeleteDialog('<?php //echo $user_id; ?>','<?php //echo $medicine_id; ?>')" Value="Delete"></td>

        </tr>
<?php $sr++; //} ?>
                </tbody>
               
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

        <div class="modal-header" style="background-color: #112139;color: white;border: 2px solid;" align="center">
          <button type="button" class="close" data-dismiss="modal"></button>
          <h4 class="modal-title">Job Card</h4>
        </div>
        <div class="modal-body">
      <div class="container">
        <div class="row">
        <div class="form-group" style="margin: 5px 10px;">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="" placeholder="Enter name" name="name">
    </div>
    <div class="form-group" style="margin: 5px 10px;">
      <label for="CNIC">CNIC</label>
      <input type="text" class="form-control" id="" placeholder="Enter CNIC #" name="cnic">
    </div>
  </div>
<div class="row">
    <div class="form-group" style="margin: 5px 10px;">
      <label for="mob">Mobile</label>
      <input type="number" class="form-control" id="mob" placeholder="Enter Mobile #" name="mob">
    </div>
   <div class="form-group" style="margin: 5px 10px;">
      <label for="">Vehicle</label>
      <input type="text" class="form-control" id="vehicle" placeholder="Enter Vehicle" name="vehicle">
    </div>
  </div>
  
     <div class="form-group" style="margin: 5px 10px;">
      <label for="sel1">Color</label>
      <select class="form-control" id="sel1">
        <option>White</option>
        <option>Misty Silver</option>
        <option>Grey Metallic</option>
        </select>
</div>

<div class="row">
     <div class="form-group" style="margin: 5px 10px;">
      <label for="">Chassis Number</label>
      <input type="text" class="form-control" id="vehicle" placeholder="Enter Chassis" name="vehicle">
    </div>
  
  
     <div class="form-group" style="margin: 5px 10px;">
      <label for="">Engine Number</label>
      <input type="text" class="form-control" id="vehicle" placeholder="Enter Engine No." name="vehicle">
    </div>
</div>
<div class="row">
     <div class="form-group" style="margin: 5px 10px;">
      <label for="sel1">Select Job</label>
      <select class="form-control" id="sel1">
        <option>Service</option>
        <option>Misty Silver</option>
        <option>Grey Metallic</option>
        </select>
      </div>
  
      <div class="form-group" style="margin: 5px 10px;">
      <label for="">Description</label>
      <textarea rows="1" class="form-control" id="vehicle" placeholder="Job Description" name="vehicle"></textarea>
    </div>
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
  
  
  <div class="modal fade" id="jobs_parts_modal" role="dialog"  >
    <div class="modal-dialog" id="modal-dialog" style="width:100%;">
    
      <!-- Modal content-->
    <form class="form-horizontal" role="form" method="post"  action="<?php //echo base_url().'Welcome/medicines/create/'.$user_id; ?>">
      <div class="modal-content" id="editCityDialog">

        <div class="modal-header" style="background-color: #112139;color: white;border: 2px solid;"  align="center">
          <button type="button" class="close" data-dismiss="modal"></button>
          <h4 class="modal-title">Add parts to Job</h4>
        </div>
        <div class="modal-body">
      <div class="container">
        <div class="form-group">
      <label for="name">Description</label>
      <textarea class="form-control" rows="1" id="" placeholder="Enter Info" name="name" ></textarea>
    </div>
    <div class="row">
    <div class="form-group" style="margin: 5px 10px;">
      <label for="CNIC">Part name</label>
      <input type="text" class="form-control" id="" placeholder="Enter Part " name="cnic">
    </div>
    <div class="form-group" style="margin: 5px 10px;">
      <label for="mob">quantity</label>
      <input type="number" class="form-control" id="mob" placeholder="Enter Quantity" name="mob">
    </div>
    </div>
    <div class="form-group">
      <button class="btn btn-default">Add more</button>
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
  function showCreateDialog2()
  {
    $("#jobs_parts_modal").modal('show');
  }
 </script>