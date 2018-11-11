 
 <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img style="background: white;" src="<?php echo base_url();?>assets/images/faw_logo.png" alt="Faw_Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">FAW</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      
 <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         
          
         
          
         
         
          <li class="nav-header">Dashboard</li>
                <li class="nav-item">
                  <a href="<?php echo base_url();?>bookings/" class="nav-link">
                    <i class="fa fa-automobile nav-icon"></i>
                    <p>Booking</p>
                  </a>
                </li>
               
                 <li class="nav-item">
                <a href="<?php echo base_url();?>invoices/" class="nav-link">
                  <i class="fa fa-clone nav-icon"></i>
                  <p>Invoice</p>
                </a>
              </li>
                 <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fa fa-area-chart nav-icon"></i>
              <p>
                Sales
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url();?>sales/" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Salable</p>
                </a>
              </li>
             
             
              <li class="nav-item">
                <a href="<?php echo base_url();?>sales/sold" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Sold</p>
                </a>
                <hr>
              </li>
             
              
              
              
            </ul>

          </li>

               <li class="nav-item">
                <a href="<?php echo base_url();?>purchases/" class="nav-link">
                  <i class="fa fa-bar-chart nav-icon"></i>
                  <p>Purchases</p>
                </a>
              </li>
             
              <li class="nav-item">
                <a href="<?php echo base_url();?>inventory/" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Inventory</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="<?php echo base_url();?>accounts/" class="nav-link">
                  <i class="fa fa-address-card-o nav-icon"></i>
                  <p>Accounts</p>
                </a>
              </li>


               <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-calendar-check-o"></i>
              <p>
                Delivery
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url();?>delivery/" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Vehicle Delivery</p>
                </a>
              </li>
             
             
              <li class="nav-item">
                <a href="<?php echo base_url();?>accounts/gatepass" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Gatepass</p>
                </a>
              </li>
             
              
              
              
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-gavel"></i>
              <p>
                Jobs
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url();?>jobs/" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Job Card</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url();?>jobs/" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Add Parts</p>
                </a>
              </li>
             
             
              <li class="nav-item">
                <a href="<?php echo base_url();?>accounts/print_account" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Job Receipt</p>
                </a>
              </li>
             
              
              
              
            </ul>
          </li>
               
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-cog"></i>
              <p>
                Settings
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url();?>users/manage" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Users</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url();?>cars" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Cars</p>
                </a>
              </li>
            
             
               <li class="nav-item">
                <a href="<?php echo base_url();?>roles/" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Roles</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="<?php echo base_url();?>roles/permissions" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Permissions</p>
                </a>
             
              
              
              
            </ul>
          </li>
          
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>