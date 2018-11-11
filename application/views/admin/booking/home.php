

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Bookings</h1>
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
      <input type="button" class="form-control btn btn-my" id="add_btn" name="add_job" value="Add Booking">
      </div>
      </div>
    
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container  col-sm-12">
    
  <?php $sr = 1; ?>
          <table  class="table table-bordered table-striped datatable-button-html5-basic">
                <thead>
                 <tr>
                  <th>Sr No.</th>
                  <th>Name</th>
                  <th>CNIC</th>
                  <th>Mobile</th>
                  <th>Vehicle</th>
                  <th>Booking number</th>
                  <th>Color</th>
                 
                  <th>Amount</th>
                  <th>Edit</th>
                  <th>Delete</th>
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
                  <td><?php echo $b['booking_no']; ?></td>
                  <td><?php echo $b['color']; ?></td>
                  
                  <td><?php echo $b['amount']; ?></td>
                  <td><input type="button" name="edit" id="edit-btn" class="form-control btn btn-success btn-sm edit-btn" data-cid="<?php echo $b['cid']; ?>" data-bid="<?php echo $b['bid']; ?>" data-url="<?php echo base_url()."bookings/search/".$b['bid']; ?>"  Value="Edit"></td>
                  <td><input type="button" name="delete" class="form-control btn btn-danger btn-sm del-btn" data-bid="<?php echo $b['bid']; ?>" Value="Delete"></td>

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
    <form class="form-horizontal" role="form" method="post"  action="<?php echo base_url();?>bookings/add">
      <div class="modal-content" id="editCityDialog">

        <div class="modal-header" style="background-color: #112139;color: white;border: 2px solid;" align="center">
          <button type="button" class="close" data-dismiss="modal"></button>
          <h4 class="modal-title">Add New Booking</h4>
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
    <div class="form-group" style="margin: 5px 10px; width: 202px;">
            <label for="sel1">Vehicle</label>
            <select class="form-control cars" id="sel1" name="cars">
          <?php foreach ($cars as $c):?> 
        <option value="<?=$c['id']?>"><?=$c['car_name']?></option>
    

<?php endforeach; ?>
    </select>
</div>
  </div>
  <div class="row">
    <!--
     <div class="form-group" style="margin: 5px 10px;">
      <label for="">Booking Number</label>
      <input type="text" class="form-control" id="vehicle" placeholder="Enter Booking" name="vehicle">
    </div>
  -->
    <div class="form-group" style="margin: 5px 10px;width: 202px;">
      <label for="sel1">Color</label>
     <select class="form-control colors" id="colors" name="colors" id="sel1">
        <option>Select Car First</option>
        
        </select>
    </div>
    <div class="form-group" style="margin: 5px 10px;">
      <label for="">Amount</label>
      <input type="text" class="form-control" id="vehicle" placeholder="Enter Amount" name="amount">
    </div>
</div>
<!--
<div class="row">
  
     <div class="form-group" style="margin: 5px 10px;">
      <label for="">Chassis Number</label>
      <input type="text" class="form-control" id="vehicle" placeholder="Enter Charges" name="vehicle">
    </div>

     <div class="form-group" style="margin: 5px 10px;">
      <label for="">Engine Number</label>
      <input type="text" class="form-control" id="vehicle" placeholder="Enter Engine No." name="vehicle">
    </div>
  </div>
  -->
    <div class="row">
      
    <!--
    <div class="form-group">
      <label for="name">Date</label>
      <input type="date" class="form-control" id="" placeholder="Date" name="search">
    </div> -->
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
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
          </div>
          <div class="form-group" style="margin: 5px 10px;">
            <label for="cnic">CNIC</label>
            <input type="text" class="form-control" id="cnic" placeholder="Enter CNIC #" name="cnic">
          </div>
      </div>
    <div class="row">   
    <div class="form-group" style="margin: 5px 10px;">
      <label for="mob">Mobile</label>
      <input type="number" class="form-control" id="phone" placeholder="Enter Mobile #" name="mob">
    </div>
    <div class="form-group" style="margin: 5px 10px;">
            <label for="sel1">Vehicle</label>
            <select class="form-control cars" id="car_name"  name="cars">
          <?php foreach ($cars as $c):?> 
        <option  value="<?=$c['id']?>"><?=$c['car_name']?></option>
    

<?php endforeach; ?>
    </select>
</div>
  </div>
  <div class="row">
     <div class="form-group" style="margin: 5px 10px;">
      <label for="">Booking Number</label>
      <input type="text" class="form-control" id="booking_no" placeholder="Enter Booking" name="booking_number">
    </div>
    <div class="form-group" style="margin: 5px 10px;">
      <label for="sel1">Color</label>
      <select class="form-control colors" id="color" name="color">
      </select>
</div>
</div>

    <div class="row">
      <div class="form-group" style="margin: 5px 10px;">
      <label for="">Amount</label>
      <input type="text" class="form-control" id="amount" placeholder="Enter Amount" name="amount">
    </div>
    <div class="form-group" style="margin: 5px 10px;">
      <label for="name">Date</label>
      <input type="date" class="form-control" id="booking_date" placeholder="Date" name="date">
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

  $(document).ready(function(){
   
   
$(".del-btn").on("click", function(){
    
    $("#confirm-delete").modal('show');
    var bid = $(this).attr("data-bid");
    var url = "<?php echo base_url(); ?>"+"bookings/delete/"+bid;
    $(".del-btn-ok").attr("href",url);
});

$(".del-btn-ok").on("click", function(){
    
   
});


$("#add_btn").on("click", function(){
    
    $("#jobs_create_modal").modal('show');
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

 
$(".edit-btn").on("click", function(){

    $("#booking_edit_modal").modal('show');
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

 



});



});
 </script>

  <!--checkbox-->
     

        <!--/checkbox-->
