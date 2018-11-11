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
      <div class="col-md-6" align="right">
      <input type="button" class="form-control btn btn-my col-md-3" name="add_job" value="Add Puchases"  onclick="showCreateDialog()">
      
      <input type="button" class="form-control btn btn-my col-md-3" name="add_job" value="Add Loss"  onclick="showCreateDialog1()">
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
                  <th>Purchase Date</th>
                  <th>price</th>
                  <th>Quantity</th>
                  <th>Total</th>
                  <th>Bill </th>
                  <th>Loss Quantity</th>
                  
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
<?php
foreach($purchases as $p)
{
 //$medicine_id = $medicine['id'];
?>
                <tr>
                  <td><?php echo $sr; ?></td>
                  <td><?php echo $p['name']; ?></td>
                  <td><?php //echo $me['name']; ?></td>
                  <td><?php echo $p['amount']; ?></td>
                  <td><?php echo $p['quantity']; ?></td>
                  <td><?php echo $p['total']; ?></td>
                  
                  <td><?php echo $p['bill_no']; ?></td>
                  <td><?php //echo $medicine['name']; ?></td>
                  
                  <td><input type="button" name="edit" id="edit-btn" class="form-control btn btn-success btn-sm edit-btn" data-pid="<?php echo $p['id']; ?>"  data-url="<?php echo base_url()."purchases/search/".$p['id']; ?>"  Value="Edit"></td>
                  <td><input type="button" name="delete" class="form-control btn btn-danger btn-sm" onclick="showDeleteDialog('<?php //echo $user_id; ?>','<?php //echo $medicine_id; ?>')" Value="Delete"></td>

        </tr>
<?php $sr++; } ?>
                </tbody>
               
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
    <form class="form-horizontal" role="form" method="post"  action="<?php echo base_url().'purchases/add_purchase'; ?>">
      <div class="modal-content" id="editCityDialog">

        <div class="modal-header" style="background-color: #112139;color: white;border: 2px solid;" align="center">
          <button type="button" class="close" data-dismiss="modal"></button>
          <h4 class="modal-title">Add Purchase</h4>
        </div>
        <div class="modal-body">
      <div class="container">
      <div class="row">
        <div class="form-group" style="margin: 5px 10px;">
      <label for="cnic">Purchase Date</label>
      <input type="date" class="form-control" id="" placeholder="Choose Date" name="date">
    </div>
       <div class="form-group" style="margin: 5px 10px;">
      <label for="name">Product Name</label>
      <input type="text" class="form-control" id="" placeholder="Enter Product" name="name">
    </div>
  </div>
    
    <div class="row">
    <div class="form-group" style="margin: 5px 10px;">
      <label for="mob">Price</label>
      <input type="text" class="form-control" id="mob" placeholder="Enter Price" name="price">
    </div>
    
    <div class="form-group" style="margin: 5px 10px;">
      <label for="">Quantity</label>
      <input type="text" class="form-control" id="vehicle" placeholder="Enter Quantity" name="quantity">
    </div>
  </div>
<div class="row">
    <div class="form-group" style="margin: 5px 10px;">
      <label for="">Total</label>
      <input type="text" class="form-control disabled" id="vehicle" placeholder="Total" name="total">
    </div>
    <div class="form-group" style="margin: 5px 10px;">
      <label for="">Bill Number</label>
      <input type="text" class="form-control disabled" id="vehicle" placeholder="Bill Number" name="bill_no">
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
  
  
    <div class="modal fade" id="jobs_create_modal" role="dialog"  >
    <div class="modal-dialog" id="modal-dialog" style="width:100%;">
    
      <!-- Modal content-->
    <form class="form-horizontal" role="form" method="post"  action="<?php //echo base_url().'Welcome/medicines/create/'.$user_id; ?>">
      <div class="modal-content" id="editCityDialog">

        <div class="modal-header" style="background-color: #112139;color: white;border: 2px solid;"  align="center">
          <button type="button" class="close" data-dismiss="modal"></button>
          <h4 class="modal-title">Add Loss</h4>
        </div>
        <div class="modal-body">
      <div class="container">
      <div class="row">
      <div class="form-group" style="margin: 5px 10px;">
      <label for="name">Product</label>
      <input type="text" class="form-control" id="" placeholder="Enter Product" name="name">
    </div>
    
    
    <div class="form-group" style="margin: 5px 10px;">
      <label for="mob">Loss Quantity</label>
      <input type="text" class="form-control" id="mob" placeholder="Enter Loss Quantity" name="mob">
    </div>
  </div>
    
    <div class="form-group" style="margin: 5px 10px;">
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
  
  
   <div class="modal fade" id="purchases_edit_modal" role="dialog"  >
    <div class="modal-dialog" id="modal-dialog" style="width:100%;">
    
      <!-- Modal content-->
    <form class="form-horizontal" role="form" method="post"  action="<?php echo base_url().'purchases/add_purchase'; ?>">
      <div class="modal-content" id="editCityDialog">

        <div class="modal-header" style="background-color: #112139;color: white;border: 2px solid;" align="center">
          <button type="button" class="close" data-dismiss="modal"></button>
          <h4 class="modal-title">Edit Purchase</h4>
        </div>
        <div class="modal-body">
      <div class="container">
      <div class="row">
        <div class="form-group" style="margin: 5px 10px;">
      <label for="cnic">Purchase Date</label>
      <input type="date" class="form-control" id="" placeholder="Choose Date" name="date">
    </div>
       <div class="form-group" style="margin: 5px 10px;">
      <label for="name">Product Name</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Product" name="name">
    </div>
  </div>
    
    <div class="row">
    <div class="form-group" style="margin: 5px 10px;">
      <label for="mob">Price</label>
      <input type="text" class="form-control" id="amount" placeholder="Enter Price" name="price">
    </div>
    
    <div class="form-group" style="margin: 5px 10px;">
      <label for="">Quantity</label>
      <input type="text" class="form-control" id="quantity" placeholder="Enter Quantity" name="quantity">
    </div>
  </div>
<div class="row">
    <div class="form-group" style="margin: 5px 10px;">
      <label for="">Total</label>
      <input type="text" class="form-control disabled" id="total" placeholder="Total" name="total">
    </div>
    <div class="form-group" style="margin: 5px 10px;">
      <label for="">Bill Number</label>
      <input type="text" class="form-control disabled" id="bill_no" placeholder="Bill Number" name="bill_no">
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
  
  
 
  
  <script>
  function showCreateDialog1()
  {
    $("#jobs_create_modal").modal('show');
  }
   function showCreateDialog()
  {
    $("#product_loss_modal").modal('show');
  }

 $(document).ready(function(){

  $(".edit-btn").on("click", function(){

    $("#purchases_edit_modal").modal('show');
     var url = $(this).attr('data-url');
     //var cid = $(this).attr('data-cid');
     var pid = $(this).attr('data-pid');
    // var action = "<?php echo base_url(); ?>"+"bookings/update/"+bid+"/"+cid;
    // $("#edit-form").attr("action",action);
      console.log(url);
      $.ajax({
              url: url,
              type: 'POST',
              dataType: 'json',
              
              success: function (data) 
              {
                 //console.log(data.table[0].bid);
                 $("#amount").val(data.table[0].amount);
                 $("#name").val(data.table[0].name);
                 //purchase date pending 
                 $("#total").val(data.table[0].total);
                 $("#bill_no").val(data.table[0].bill_no);
                 $("#quantity").val(data.table[0].quantity);
                 
                
              },
              
          });

 



});

  });



 </script>