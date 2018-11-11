<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Salable</h1>
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
      <input type="button" class="form-control btn btn-my" name="add_job" value="Add Sales"  onclick="showCreateDialog()">
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
                  <th>Booking number</th>
                  <th>Color</th>
                  <th>Chassis number</th>
                  <th>Engine number</th>
                  <th>Amount</th>
                  <th>Sale</th>
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
  // if($b['booking_no'] != '')
  // {
?>
                <tr>
                  <td><?php echo $sr; ?></td>
                  <td><?php echo $b['name']; ?></td>
                  <td><?php echo $b['cnic']; ?></td>
                  <td><?php echo $b['phone']; ?></td>
                  <td><?php echo $b['car_name']; ?></td>
                  <td><?php echo $b['booking_no']; ?></td>
                  <td><?php echo $b['color']; ?></td>
                  <td><?php echo $b['engine_no']; ?></td>
                  <td><?php echo $b['chases_no']; ?></td>
                  <td><?php echo $b['amount']; ?></td>
               
                   <?php if($b['engine_no'] != '' && $b['chases_no'] != '' ) { ?>
                   <td><a class="btn btn-success btn-sm" href="<?php echo base_url()."sales/booking_to_sale/".$b['bid'];?>">Sale</a></td>
                 <?php } 
                 else { echo "<td>incomplete</td>"; } ?>
                  <td><a class="edit-btn-b" data-bid="<?php echo $b['bid']; ?>" href="#">edit </a>|<a href="#" class="del-btn" data-bid="<?php echo $b['bid']; ?>" > delete </a></td>

                 
                 
        </tr>
<?php $sr++; } ?>
<?php
 //echo "<pre>";
 // print_r($car_inventory);
 // echo "</pre>";
foreach($car_inventory as $b)
{
  //$medicine_id = $medicine['id'];
?>
                <tr>
                  <td><?php echo $sr; ?></td>
                  <td><?php //echo $b['name']; ?></td>
                  <td><?php //echo $b['cnic']; ?></td>
                  <td><?php //echo $b['phone']; ?></td>
                  <td><?php echo $b['car_name']; ?></td>
                  <td><?php //echo $b['booking_no']; ?></td>
                  <td><?php echo $b['color']; ?></td>
                  <td><?php echo $b['engine_no']; ?></td>
                  <td><?php echo $b['chases_no']; ?></td>
                  <td><?php echo $b['amount']; ?></td>
                  
                   <td><input type="button" name="edit" id="customer_info_btn" class="form-control btn btn-success btn-sm edit-btn customer_info_btn"  data-cid="<?php echo $b['bid']?>"  Value="update"></td>

                  <td><a href="#" class="del-btn-inventory" data-bid="<?php echo $b['bid']; ?>">delete </a>|<a href="#">hold</a></td>

                 
                 
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
   
      <div class="modal-content" id="editCityDialog">

        <div class="modal-header" style="background-color: #112139;color: white;border: 2px solid;" align="center">
          <button type="button" class="close" data-dismiss="modal"></button>
          <h4 class="modal-title">Add Sales</h4>
        </div>
        <div class="modal-body">
      <div class="container">
         <div class="row">
          
       <!--  <label class="radio-inline" style="margin: 5px 10px;">
        <input type="radio" class="checkbox" name="optradio" checked >Booking
        </label> -->
        <label class="radio-inline" style="margin: 5px 10px;">
        <input type="radio" class="checkbox" value="new" checked name="optradio" >New
        </label>

        </div>
         <form class="form-horizontal" id="booked" role="form" method="post"  action="<?php //echo base_url().'Welcome/medicines/create/'.$user_id; ?>">
        <div class="booking" style="display: none;">
        <div class="form-group">
      <label for="name">Search by Booking details or Customer details</label>
      <input type="text" class="form-control" id="search" placeholder="Search.." name="search">

    </div>

    <table id="b-users" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>CNIC</th>
                <th>Vehicle</th>
                <th>Color</th>
                <th>Booking No.</th>
                
            </tr>
        </thead>
        <tbody id="b-customers">
            
           
           
            
           
           
        </tbody>
        <tfoot>
         
        </tfoot>
    </table>
    <div class="sub-menu" style="display: none;">
    <div class="row">
    <div class="form-group" style="margin: 5px 10px;">
      <label for="name">Chassis Number</label>
      <input type="text" class="form-control" id="" placeholder="chassis" name="chases_number">
    </div>

    <div class="form-group" style="margin: 5px 10px;">
      <label for="name">Engine Number</label>
      <input type="text" class="form-control" id="" placeholder="Engine" name="engine_number">
    </div>
</div>
<hr>
</div>
 <div class="row">
    
    <div class="col-md-3" align="right" style="padding:0px;">
    <input type="submit" name="save" id="save" class="form-control btn btn-success" value="Save">
    </div>
    <div class="col-md-3">
    <input type="button" name="cancel" id="cancel" class="form-control btn btn-danger" value="Cancel" data-dismiss="modal">

    </div>
  </div>
     </div>
     
</form>
 <form class="form-horizontal" id="new-form" role="form" method="post"  action="<?php echo base_url().'sales/add_new/'; ?>">
     <div class="new" style="display: block;">
       
        <div class="row">
    <div class="form-group" style="margin: 5px 10px; width: 202px;">
            <label for="sel1">Vehicle</label>
            <select class="form-control cars" id="sel1" name="cars">
          <?php foreach ($cars as $c):?> 
        <option value="<?=$c['id']?>"><?=$c['car_name']?></option>
    

<?php endforeach; ?>
    </select>
</div>
    <div class="form-group" style="margin: 5px 10px;width: 202px;">
      <label for="sel1">Color</label>
     <select class="form-control colors" id="colors" name="colors" id="sel1">
        <option>Select Car First</option>
        
        </select>
    </div>
    
</div>


        <div class="row">
    <div class="form-group" style="margin: 5px 10px;">
      <label for="name">Chassis Number</label>
      <input type="text" class="form-control" id="" placeholder="chassis" name="chases_number">
    </div>

    <div class="form-group" style="margin: 5px 10px;">
      <label for="name">Engine Number</label>
      <input type="text" class="form-control" id="" placeholder="Engine" name="engine_number">
    </div>
</div>
<div class="row">
     <div class="form-group" style="margin: 5px 10px;">
      <label for="name">Total Amount</label>
      <input type="text" class="form-control" id="" placeholder="amount" name="amount">
    </div>

    <div class="form-group" style="margin: 5px 10px;">
      <label for="name">Date</label>
      <input type="date" class="form-control" id="" placeholder="Date" name="date">
    </div>


</div>
<hr>
 <div class="row">
    
    <div class="col-md-3" align="right" style="padding:0px;">
    <input type="submit" name="save" id="save" class="form-control btn btn-success" value="Save">
    </div>
    <div class="col-md-3">
    <input type="button" name="cancel" id="cancel" class="form-control btn btn-danger" value="Cancel" data-dismiss="modal">

    </div>
  </div>
     </div>
   </form>
</div>
      
      
      
        </div>
    
    <div class="modal-footer">
   
    </div>
        
      </div>
      
    </div>
  </div> 
  
  
  

  <!-- update car_inventory customer information -->
  
  <div class="modal fade" id="customer_info_modal" role="dialog"  >
    <div class="modal-dialog" id="modal-dialog" style="width:100%;">
    
      <!-- Modal content-->
    <form class="form-horizontal" role="form" method="post"  action="<?php echo base_url();?>sales/inventory_to_booking">
      <div class="modal-content" id="editCityDialog">

        <div class="modal-header" style="background-color: #112139;color: white;border: 2px solid;" align="center">
          <button type="button" class="close" data-dismiss="modal"></button>
          <h4 class="modal-title">Customer Information</h4>
        </div>
        <div class="modal-body">
      <div class="container">
      <div class="row">
          <div class="form-group" style="margin: 5px 10px;">
            <label for="name">Customer Name</label>
            <input type="text" class="form-control" id="" placeholder="Enter Customer name" name="name">
          </div>
          <div class="form-group" style="margin: 5px 10px;">
            <label for="cnic">CNIC</label>
            <input type="text" class="form-control" id="" placeholder="Enter CNIC #" name="cnic">
          </div>
      </div>
    <div class="row">   
    <div class="form-group" style="margin: 5px 10px;">
      <label for="mob">Mobile</label>
      <input type="number" class="form-control" id="mob" placeholder="Enter Mobile #" name="mob">
    </div>

    <div class="form-group" style="margin: 5px 10px;">
      <label for="name">Date</label>
      <input type="date" class="form-control" id="" placeholder="Date" name="search">
    </div> 
    <input type="hidden" name="cid" value="" id="cid_inventory">
    
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
  

  <div class="modal fade" id="booking_edit_modal" role="dialog"  >
    <div class="modal-dialog" id="modal-dialog" style="width:100%;">
    
      <!-- Modal content-->
    <form class="form-horizontal" id="edit-form" role="form" method="post"  action="">
      <div class="modal-content" id="editCityDialog">

        <div class="modal-header" style="background-color: #112139;color: white;border: 2px solid;" align="center">
          <button type="button" class="close" data-dismiss="modal"></button>
          <h4 class="modal-title">Edit Booking</h4>
        </div>
        <div class="modal-body">
      <div class="container">
     
   <div class="row">
    <div class="form-group" style="margin: 5px 10px;">
      <label for="name">Chassis Number</label>
      <input type="text" class="form-control" id="" placeholder="chassis" name="chases_number">
    </div>

    <div class="form-group" style="margin: 5px 10px;">
      <label for="name">Engine Number</label>
      <input type="text" class="form-control" id="" placeholder="Engine" name="engine_number">
    </div>
    <hr>
    <p>*You can change customer booking information from bookings.</p>
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
  


  <div class="modal fade" id="inventory_edit_modal" role="dialog"  >
    <div class="modal-dialog" id="modal-dialog" style="width:100%;">
    
      <!-- Modal content-->
    <form class="form-horizontal" id="edit-form" role="form" method="post"  action="">
      <div class="modal-content" id="editCityDialog">

        <div class="modal-header" style="background-color: #112139;color: white;border: 2px solid;" align="center">
          <button type="button" class="close" data-dismiss="modal"></button>
          <h4 class="modal-title">Edit Booking</h4>
        </div>
        <div class="modal-body">
      <div class="container">
     
   <div class="row">
    <div class="form-group" style="margin: 5px 10px; width: 202px;">
            <label for="sel1">Vehicle</label>
            <select class="form-control cars" id="sel1" name="cars">
          <?php foreach ($cars as $c):?> 
        <option value="<?=$c['id']?>"><?=$c['car_name']?></option>
    

<?php endforeach; ?>
    </select>
</div>
    <div class="form-group" style="margin: 5px 10px;width: 202px;">
      <label for="sel1">Color</label>
     <select class="form-control colors" id="colors" name="colors" id="sel1">
        <option>Select Car First</option>
        
        </select>
    </div>
    
</div>


        <div class="row">
    <div class="form-group" style="margin: 5px 10px;">
      <label for="name">Chassis Number</label>
      <input type="text" class="form-control" id="" placeholder="chassis" name="chases_number">
    </div>

    <div class="form-group" style="margin: 5px 10px;">
      <label for="name">Engine Number</label>
      <input type="text" class="form-control" id="" placeholder="Engine" name="engine_number">
    </div>
</div>
<div class="row">
     <div class="form-group" style="margin: 5px 10px;">
      <label for="name">Total Amount</label>
      <input type="text" class="form-control" id="" placeholder="amount" name="amount">
    </div>

    <div class="form-group" style="margin: 5px 10px;">
      <label for="name">Date</label>
      <input type="date" class="form-control" id="" placeholder="Date" name="date">
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
  
  
<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                Confirm Delete
            </div>
            <div class="modal-body">
                Are you sure to delete this ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger btn-ok del-btn-ok" href="#" >Delete</a>
            </div>
        </div>
    </div>
</div>


 
  
  <script>
  function showCreateDialog()
  {
    $("#jobs_create_modal").modal('show');
  }
$(document).ready(function(){


  $(".customer_info_btn").on("click", function(){
    
   var cid = $(this).attr("data-cid");
   $("#cid_inventory").val(cid);
    $("#customer_info_modal").modal('show');
});
    
 $('input:radio[name="optradio"]').change(
    function(){
        if (this.checked && this.value == 'new') 
        {
           $(".booking").hide();
           $(".new").show();
        }
        else
        {
          $(".booking").show();
           $(".new").hide();
        }
    });

 $('#search').on("input", function() {
    var dInput = this.value;
    console.log(dInput);
    //console.log("worked");

    // <tr>
    //             <td>Tiger Nixon</td>
    //             <td>61101-1234567-8</td>
    //             <td>V2</td>
    //             <td>White</td>
    //             <td>13-oct-2018</td>
                
    //         </tr>

    url = "<?php echo base_url(); ?>"+"bookings/search_by_name/"+dInput;
                      $.ajax({
                        url: url,
                        type: 'POST',
                        dataType: 'json',
                        
                        success: function (data) 
                        {
                           console.log(data);
                           $('#b-customers').html('');
                           data.table.forEach(function(item) {
                              console.log(item);
                               $('#b-customers').append("<tr class='rows' data-bid='"+item.bid+"'><td>"+item.name+"</td><td>"+item.cnic+"</td><td>"+item.car_name+"</td><td>"+item.color+"</td><td>"+item.booking_no+"</td></tr>");
                          });

                           
                          
                        },
                        
                      });
    
});



   $("#b-users").delegate("tr.rows", "click", function(){
        //alert("Click!");
        var bid =  $(this).attr('data-bid');
        $(this).attr("class","selectedRow");
        $(".rows").remove();
        console.log(bid);
        $(".sub-menu").show();
        url = "<?php echo base_url(); ?>"+"sales/add_booking/"+bid;
        $("#booked").attr("action",url);

        //set form id booked form
        //

    });


   $('.cars').on('change', function() {
  var url = "<?php echo base_url();?>bookings/get_color/"+this.value;
  //alert( url );


  //var url = $(this).attr('data-url');
      console.log(url);
      $.ajax({
              url: url,
              type: 'POST',
             // data: {title:title, body:body,category:category},
              dataType: 'json',
              
              success: function (data) 
              {
                  
                  console.log(data);
                 $('.colors').html('');
                 data.table.forEach(function(item) {
                    console.log(item);
                    $('.colors').append("<option value='"+item.id+"'>"+item.color+"</option>");
                });
                 
                 
                 
              },
              
          });

});



   $(".edit-btn-b").on("click", function(){

    $("#booking_edit_modal").modal('show');
     var url = $(this).attr('data-url');
     var cid = $(this).attr('data-cid');
     var bid = $(this).attr('data-bid');
     var action = "<?php echo base_url(); ?>"+"sales/add_booking/"+bid;
     $("#edit-form").attr("action",action);
     

//edit-btn end  
});
 

$(".del-btn").on("click", function(){
    
    $("#confirm-delete").modal('show');
    var bid = $(this).attr("data-bid");
    var url = "<?php echo base_url(); ?>"+"bookings/delete/"+bid;
    $(".del-btn-ok").attr("href",url);
});

$(".del-btn-inventory").on("click", function(){
    
    $("#confirm-delete").modal('show');
    var bid = $(this).attr("data-bid");
    var url = "<?php echo base_url(); ?>"+"sales/delete_inventory/"+bid;
    $(".del-btn-ok").attr("href",url);
})

$(".del-btn-ok").on("click", function(){
    
   
}); 

$(".edit-btn-i").on("click", function(){

    $("#inventory_edit_modal").modal('show');
     var url = $(this).attr('data-url');
     var cid = $(this).attr('data-cid');
     var bid = $(this).attr('data-bid');
     var action = "<?php echo base_url(); ?>"+"bookings/update/"+bid+"/"+cid;
     $("#edit-form").attr("action",action);
      console.log(url);
      $.ajax({
              url: url,
              type: 'POST',
              dataType: 'json',
              
              success: function (data) 
              {
                 console.log(data.table[0].bid);
                 $("#amount").val(data.table[0].amount);
                 $("#name").val(data.table[0].name);
                 $("#cnic").val(data.table[0].cnic);
                 $("#phone").val(data.table[0].phone);
                 $("#booking_no").val(data.table[0].booking_no);
                 $("#engine_no").val(data.table[0].engine_no);
                 $("#chases_no").val(data.table[0].chases_no);
                 var car_color=data.table[0].color;
                 //$("#").val(data.table[0].name);
                 //select fields
                 $("#car_name option").each(function(){
                  
                  if($(this).text() == data.table[0].car_name)
                  {
                    $(this).attr("selected","selected");
                    var cid = $(this).attr("value");
                    url = "<?php echo base_url(); ?>"+"bookings/get_color/"+cid;
                      $.ajax({
                        url: url,
                        type: 'POST',
                        dataType: 'json',
                        
                        success: function (data) 
                        {
                           console.log(data);
                           $('.colors').html('');
                           data.table.forEach(function(item) {
                              console.log(item);
                              $('.colors').append("<option value='"+item.id+"'>"+item.color+"</option>");
                          });

                           $(".colors option").each(function(){
                              console.log("here");
                              console.log($(this).text());
                             $(this).removeAttr("selected");
                            if($(this).text() == car_color)
                            {
                              $(this).attr("selected","selected");
                              
                               
                            }

                           });
                          
                        },
                        
                      });
                  }

                 });
                 //car select option 


              },
              
          });

//edit-btn-i end  
}); 
  
});
 </script>