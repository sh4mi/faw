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
    
    <!--   <div class="row">
      <div class="col-md-10"></div>
      <div class="col-md-2" align="right">
      <input type="button" class="form-control btn btn-my" name="add_job" value="Add Invoice"  onclick="showCreateDialog()">
      </div>
      </div> -->
    
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
                  <th>Invoice</th>
                  <th>Amount</th>
                  <th>Deliver</th>
                  <th>Actions</th>
                  
                </tr>
                </thead>
                <tbody>
<?php
 // echo "<pre>";
 // print_r($bookings);
 // echo "</pre>";
foreach($bookings as $b)
{
  //$medicine_id = $medicine['id'];
?>
                <tr>
                  <td><?php echo $sr; ?></td>
                  <td><?php echo $b['name']; ?></td>
                  <td><?php echo $b['cnic']; ?></td>
                  <td><?php echo $b['phone']; ?></td>
                  <td><?php echo $b['car_name']; ?></td>
                  <td><?php echo $b['color']; ?></td>
                  <td><?php echo $b['chases_no']; ?></td>
                  <td><?php echo $b['engine_no']; ?></td>
                  <td><?php echo $b['invoice_no']; ?></td> 
                  <td>
                    <a class="btn btn-success btn-sm deliver-btn" data-cid="<?php echo $b['cid']; ?>" data-bid="<?php echo $b['bid']; ?>" href="#">Deliver</a></td>
                   <td><?php echo $b['amount']; ?></td>
               <!--  <?php if($b['delivered'] == '0')
                  { ?> -->

                  
               <!--  <?php  } else{  ?><td>Delivered</td> <?php } ?>
 -->
                  <td><a class="edit-btn-b" data-bid="<?php echo $b['bid']; ?>"  href="#">edit </a></td>

                 
                 
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
  
  
  
  <div class="modal fade" id="invoice_edit_modal" role="dialog"  >
    <div class="modal-dialog" id="modal-dialog" style="width:100%;">
    
      <!-- Modal content-->
    <form class="form-horizontal" id="edit-form" role="form" method="post"  action="">
      <div class="modal-content" id="editCityDialog">

        <div class="modal-header" style="background-color: #112139;color: white;border: 2px solid;" align="center">
          <button type="button" class="close" data-dismiss="modal"></button>
          <h4 class="modal-title">Add Invoice</h4>
        </div>
        <div class="modal-body">
      <div class="container">
     
   <div class="row">
    <div class="form-group" style="margin: 5px 10px;">
      <label for="name">Invoice Number</label>
      <input type="text" class="form-control" id="" placeholder="Invoice Number" name="invoice_number">
    </div>

    <div class="form-group" style="margin: 5px 10px;">
      <label for="name">Date</label>
      <input type="date" class="form-control" id="" name="engine_number">
    </div>
    <hr>
   
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
  
  <div class="modal fade" id="delivery_modal" role="dialog"  >
    <div class="modal-dialog" id="modal-dialog" style="width:100%;">
    
      <!-- Modal content-->
    <form class="form-horizontal" role="form" method="post" id="myform" action="<?php //echo base_url().'Welcome/medicines/create/'.$user_id; ?>">
      <div class="modal-content" id="editCityDialog">

        <div class="modal-header" style="background-color: #112139;color: white;border: 2px solid;" align="center">
          <button type="button" class="close" data-dismiss="modal"></button>
          <h4 class="modal-title">Invoice Delivery</h4>
        </div>
        <div class="modal-body">
      <div class="container">
      <div class="row">
          
      <label class="radio-inline" style="margin: 5px 10px;">
      <input type="radio" name="optradio" checked value="new" >Customer Delivery
    </label>
    <label class="radio-inline" style="margin: 5px 10px;">
      <input type="radio" name="optradio" >Other Person Receiving
    </label>

        </div>
        <div class="existing">
       <div class="row">
        <div class="form-group"  style="margin: 5px 10px;">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
    <div class="form-group"  style="margin: 5px 10px;">
      <label for="CNIC">CNIC</label>
      <input type="text" class="form-control" id="cnic" placeholder="Enter CNIC #" name="cnic">
    </div>
  </div>
<div class="row">
    <div class="form-group"  style="margin: 5px 10px;">
      <label for="mob">Mobile</label>
      <input type="number" class="form-control" id="phone" placeholder="Enter Mobile #" name="phone">
    </div>
   <div class="form-group"  style="margin: 5px 10px;">
      <label for="">Date</label>
      <input type="date" class="form-control" id="vehicle"  name="vehicle">
    </div>
    </div>
</div>
    <div class="new" style="display:none;">
        
        <div class="row">
        <div class="form-group"  style="margin: 5px 10px;">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="" placeholder="Enter name" name="name">
    </div>
    <div class="form-group"  style="margin: 5px 10px;">
      <label for="CNIC">CNIC</label>
      <input type="text" class="form-control" id="" placeholder="Enter CNIC #" name="cnic">
    </div>
  </div>
<div class="row">
    <div class="form-group"  style="margin: 5px 10px;">
      <label for="mob">Mobile</label>
      <input type="number" class="form-control" id="" placeholder="Enter Mobile #" name="phone">
    </div>
   <div class="form-group"  style="margin: 5px 10px;">
      <label for="">Date</label>
      <input type="date" class="form-control" id="vehicle"  name="vehicle">
    </div>
    <input type="hidden" name="cid" data-bid="" id="hbid">
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
  function showCreateDialog()
  {
    $("#jobs_create_modal").modal('show');
  }


  $(document).ready(function(){


  $(".edit-btn-b").on("click", function(){

    $("#invoice_edit_modal").modal('show');
     // var url = $(this).attr('data-url');
     // var cid = $(this).attr('data-cid');
    var bid = $(this).attr('data-bid');
    var action = "<?php echo base_url(); ?>"+"invoices/add_invoice/"+bid;
    $("#edit-form").attr("action",action);

  });

  $('input:radio[name="optradio"]').change(
    function(){
        if (this.checked && this.value == 'new') 
        {
           $(".new").hide();
           $(".existing").show();
           var furl = "<?php echo base_url(); ?>"+"sales/car_deliver_to/";
          $("#myform").attr("action",furl);
        }
        else
        {
          $(".new").show();
          $(".existing").hide();
          var bid = $("#hbid").attr('data-bid');
          var furl = "<?php echo base_url(); ?>"+"sales/car_deliver_new/"+bid;
          $("#myform").attr("action",furl);
        }
    });

  $(".deliver-btn").on("click", function(){

    $("#delivery_modal").modal('show');
     var cid = $(this).attr('data-cid');
     var bid = $(this).attr('data-bid');
     $("#hbid").attr('data-bid',bid);
     console.log(cid+" "+bid);
     var furl = "<?php echo base_url(); ?>"+"sales/car_deliver_to/"+cid+"/"+bid;
     $("#myform").attr("action",furl); 
     var url = "<?php echo base_url(); ?>"+"sales/get_customer/"+cid;
     //$("#edit-form").attr("action",action);
      console.log(url);
      $.ajax({
              url: url,
              type: 'POST',
              dataType: 'json',
              
              success: function (data) 
              {
                 console.log(data);
                // $("#amount").val(data.table[0].amount);
                 $("#name").val(data.table[0].name);
                 $("#cnic").val(data.table[0].cnic);
                 $("#phone").val(data.table[0].phone);
                  $("#name").prop('disabled', true);
                 $("#cnic").prop('disabled', true);
                 $("#phone").prop('disabled', true);
                 


              },
              
          });

//deliver end  
});


  });
 </script>