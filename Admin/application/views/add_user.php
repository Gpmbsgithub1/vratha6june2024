<!--
=========================================================
* Material Dashboard 2 - v3.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url();?>assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/img/logo1.png">
  <title>
   Admin Dashboard
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="<?php echo base_url();?>assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

<body class="g-sidenav-show  bg-gray-200">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="<?php echo base_url('AdminController/admin_dashboard');?>">
        <img src="<?php echo base_url();?>assets/img/logo1.png" class="navbar-brand-img h-100" style="width:60px;height:140px; border-radius:5px;" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white"><?php echo $user['username'];?></span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">

        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
        </li>
<li class="nav-item">
          <a class="nav-link text-white " href="<?php echo base_url('AdminController/add_product');?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">login</i>
            </div>
            <span class="nav-link-text ms-1">Add Product</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="<?php echo base_url('AdminController/display_products');?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">login</i>
            </div>
            <span class="nav-link-text ms-1">Display Products</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="<?php echo base_url('AdminController/add_user');?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">login</i>
            </div>
            <span class="nav-link-text ms-1">Add User Access</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="<?php echo base_url('AdminController/display_users_data');?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">login</i>
            </div>
            <span class="nav-link-text ms-1">Display User Access</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="<?php echo base_url('AdminController/display_orders_admin');?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">login</i>
            </div>
            <span class="nav-link-text ms-1">Manufacturing</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="<?php echo base_url('AdminController/display_orders_ordering_admin');?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">login</i>
            </div>
            <span class="nav-link-text ms-1">Ordering</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="<?php echo base_url('AdminController/display_expense_data_admin');?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">login</i>
            </div>
            <span class="nav-link-text ms-1">Expense</span>
          </a>
        </li>
         <li class="nav-item">
          <a class="nav-link text-white " href="<?php echo base_url('AdminController/display_available_stock_data_admin');?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">login</i>
            </div>
            <span class="nav-link-text ms-1">Available Stock</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="<?php echo base_url('AdminController/display_sales_data_admin');?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">login</i>
            </div>
            <span class="nav-link-text ms-1">Domestic Sales</span>
          </a>
        </li>
         <li class="nav-item">
          <a class="nav-link text-white " href="<?php echo base_url('AdminController/controls');?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">login</i>
            </div>
            <span class="nav-link-text ms-1">Add Controls Data</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="<?php echo base_url('AdminController/display_year_data');?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">login</i>
            </div>
            <span class="nav-link-text ms-1">Display Controls Data</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="<?php echo base_url('AdminController/admin_logout');?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">login</i>
            </div>
            <span class="nav-link-text ms-1">Logout</span>
          </a>
        </li>
      </ul>
    </div>
  
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <a href="<?php echo base_url('AdminController/admin_dashboard');?>"><h6 class="font-weight-bolder mb-0">Admin Dashboard</h6></a>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          
          <ul class="navbar-nav  justify-content-end">
          <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
          </ul>
       </div>
        
      </div>
    </nav>
    <!-- End Navbar -->
    <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-5 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center" style="background-image: url(<?php echo base_url('assets/img/user.jpg') ?>); background-size: cover;">
              </div>
            </div>
            <div class="col-xl-7 col-lg-7 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
            
              <div class="card">
                <div class="card-header">
                    
                    <?php $error_msg=$this->session->flashdata('error_msg');
                      if($error_msg!=""){ ?>
                     <div class="alert alert-danger">
                     <?php echo $error_msg;?>
                    </div>
                     <?php } ?>
            <h4 class="font-weight-bolder">Add User Here</h4>
                  
                </div>
                <div class="card-body card-header">
                  <form enctype="multipart/form-data" action="<?php echo base_url('AdminController/add_user_done');?>" method="post">
                     <h6 style="color:red;"><?php echo form_error('username');?></h6>
                    <div class="input-group input-group-outline mb-3 row">
                      <div class="col-md-5">
                      <label style="color:black;font-size:15px;">User Name</label>&nbsp;&nbsp;
                      </div>
                       <div class="col-md-7">
                      <input type="text" class="form-control" name="username" value="">
                      </div>
                     </div>
                     <h6 style="color:red;"><?php echo form_error('password');?></h6>
                    <div class="input-group input-group-outline mb-3 row">
                     <div class="col-md-5">
                      <label style="color:black;font-size:15px;">Password</label>&nbsp;&nbsp;
                      </div>
                       <div class="col-md-7">
                      <input type="text" class="form-control" name="password" value="">
                      </div>
                    </div>
                    <div class="input-group input-group-outline mb-3 row">
                     <div class="col-md-5">
                      <label style="color:black;font-size:15px;">Select User Type</label>&nbsp;&nbsp;
                      </div>
                       <div class="col-md-7">
                      <input type="checkbox" id="user_type"  name="user_type[]" value="Ordering" />&nbsp;&nbsp;&nbsp;<label style="color:black;font-size:15px;">Ordering</label>&nbsp;&nbsp;&nbsp;
                      <input type="checkbox" id="user_type" name="user_type[]" value="Manufacturing"/>&nbsp;&nbsp;&nbsp;<label style="color:black;font-size:15px;">Manufacturing</label>&nbsp;&nbsp;&nbsp;<br>
                      <input type="checkbox" id="user_type" name="user_type[]" value="Expense" />&nbsp;&nbsp;&nbsp;<label style="color:black;font-size:15px;">Expense</label>&nbsp;&nbsp;&nbsp;
                      <input type="checkbox" id="user_type" name="user_type[]" value="Available Stock" />&nbsp;&nbsp;&nbsp;<label style="color:black;font-size:15px;">Available Stock</label>&nbsp;&nbsp;&nbsp;<br>
                      <input type="checkbox" id="user_type" name="user_type[]" value="Dispatch Division" />&nbsp;&nbsp;&nbsp;<label style="color:black;font-size:15px;">Dispatch Division</label>&nbsp;&nbsp;&nbsp;
                      <input type="checkbox" id="user_type" name="user_type[]" value="Domestic Sales" />&nbsp;&nbsp;&nbsp;<label style="color:black;font-size:15px;">Domestic Sales</label>&nbsp;&nbsp;&nbsp;<br>
                      <input type="checkbox" id="user_type" name="user_type[]" value="Export Division Sales" />&nbsp;&nbsp;&nbsp;<label style="color:black;font-size:15px;">Export Division</label>&nbsp;&nbsp;&nbsp;
                      <input type="checkbox" id="user_type" name="user_type[]" value="Customer Database Sales" />&nbsp;&nbsp;&nbsp;<label style="color:black;font-size:15px;">Customer Database</label>
                      <input type="checkbox" id="user_type" name="user_type[]" value="GST Filling" />&nbsp;&nbsp;&nbsp;<label style="color:black;font-size:15px;">GST Filling Database</label>&nbsp;&nbsp;&nbsp;
                      <input type="checkbox" id="user_type" name="user_type[]" value="Sample1" />&nbsp;&nbsp;&nbsp;<label style="color:black;font-size:15px;">Sample1</label>&nbsp;&nbsp;&nbsp;<br>
                       <input type="checkbox" id="user_type" name="user_type[]" value="Sample2" />&nbsp;&nbsp;&nbsp;<label style="color:black;font-size:15px;">Sample2</label>&nbsp;&nbsp;&nbsp;
                      </div>
                    </div>
                     
  
                  
                    <div class="text-center">
                       <input type="submit" name="signin" value="Add" class="btn bg-gradient-primary w-100 my-4 mb-2">
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
    
   <footer class="footer py-4  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center font-weight-bold" style="color:black;">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
               Vratha Agencies, All Right Reserved.Powered By 
                <a href="https://gpmbs.com/" class="font-weight-bold" target="_blank">GPMBS</a>
                
              </div>
            </div>

          </div>
        </div>
      </footer>
       
  </div>
  </main>
  
  <!--   Core JS Files   -->
  <script src="<?php echo base_url();?>assets/js/core/popper.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/core/bootstrap.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/plugins/chartjs.min.js"></script>
  
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo base_url();?>assets/js/material-dashboard.min.js?v=3.1.0"></script>
</body>

</html>