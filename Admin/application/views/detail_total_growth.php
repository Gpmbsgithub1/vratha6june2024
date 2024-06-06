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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
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
          <a class="nav-link text-white " href="<?php echo base_url('AdminController/display_ordering_products_admin');?>">
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
    <div class="container-fluid py-4">
     <?php $msg=$this->session->flashdata('msg');
                    if($msg!=""){ ?>
       <div class="alert alert-success alert-dismissible text-white" role="alert">
                <span class="text-sm"> <?php echo $msg;?></span>
                
      </div>
       <?php } ?>
         <?php $succ_msg=$this->session->flashdata('succ_msg');
                    if($succ_msg!=""){ ?>
       <div class="alert alert-success alert-dismissible text-white" role="alert">
                <span class="text-sm"> <?php echo $succ_msg;?></span>
                
      </div>
       <?php } ?>
           <?php $success_yr_msg=$this->session->flashdata('success_yr_msg');
                    if($success_yr_msg!=""){ ?>
       <div class="alert alert-success alert-dismissible text-white" role="alert">
                <span class="text-sm"> <?php echo $success_yr_msg;?></span>
                
      </div>
       <?php } ?>
           <?php $success_mth_msg=$this->session->flashdata('success_mth_msg');
                    if($success_mth_msg!=""){ ?>
       <div class="alert alert-success alert-dismissible text-white" role="alert">
                <span class="text-sm"> <?php echo $success_mth_msg;?></span>
                
      </div>
       <?php } ?>
           <?php $success_pt_msg=$this->session->flashdata('success_pt_msg');
                    if($success_pt_msg!=""){ ?>
       <div class="alert alert-success alert-dismissible text-white" role="alert">
                <span class="text-sm"> <?php echo $success_pt_msg;?></span>
                
      </div>
       <?php } ?>
           <?php $success_pc_msg=$this->session->flashdata('success_pc_msg');
                    if($success_pc_msg!=""){ ?>
       <div class="alert alert-success alert-dismissible text-white" role="alert">
                <span class="text-sm"> <?php echo $success_pc_msg;?></span>
                
      </div>
       <?php } ?><br>
       
      <div class="row">
        
        <div class="col-xl-2 col-sm-6 mb-xl-0 mb-4"></div>
        <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-primary  shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">money</i>
              </div>
              <div class="text-end pt-1">
                <h6 class="mb-0" style="font-size:20px;">Growth Yearly</h6><br>
                <div class="input-group input-group-outline mb-3 row">
                       <div class="col-md-5">
                      <h4 class="mb-0" style="font-size:25px;">₹</h4>
                      </div>
                       <div class="col-md-7">
                      <input type="text" class="form-control" id="year_amount" name="year_amount" value="">
                      </div>
                    </div>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
                 <div class="input-group input-group-outline mb-3 row">
                      <div class="col-md-5">
                      <label style="color:black;font-size:15px;">Year</label>&nbsp;&nbsp;
                      </div>
                       <div class="col-md-7">
                      <select name="year" class="form-control" id="year">
                          <h6 style="color:red;"><?php echo form_error('year');?></h6>      
                          <option>Select Year</option>
                           <?php $i=1;if(!empty($years)) { foreach ($years->result() as $row){ ?>
                          <option name="year" value="<?php echo $row->year;?>" data-id="<?php echo $row->id;?>"><?php echo $row->year;?></option>
                          <?php } }?>
                      </select>
                      </div>
                </div>
                <br><br>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">money</i>
              </div>
              <div class="text-end pt-1">
                <h6 class="mb-0 " style="font-size:20px;">Growth Monthly</h6><br>
                <div class="input-group input-group-outline mb-3 row">
                       <div class="col-md-5">
                      <h4 class="mb-0" style="font-size:25px;">₹</h4>
                      </div>
                       <div class="col-md-7">
                      <input type="text" class="form-control" id="month_amount" name="month_amount" value="">
                      </div>
                    </div>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
                <div class="input-group input-group-outline mb-3 row">
                      <div class="col-md-5">
                      <label style="color:black;font-size:15px;">Year</label>&nbsp;&nbsp;
                      </div>
                       <div class="col-md-7">
                      <select name="year" class="form-control" id="yr">
                          <h6 style="color:red;"><?php echo form_error('year');?></h6>      
                          <option>Select Year</option>
                           <?php $i=1;if(!empty($years)) { foreach ($years->result() as $row){ ?>
                          <option name="yr" value="<?php echo $row->year;?>" data-id="<?php echo $row->id;?>"><?php echo $row->year;?></option>
                          <?php } }?>
                      </select>
                      </div>
                </div>
               <div class="input-group input-group-outline mb-3 row">
                    <div class="col-md-5">
                      <label style="color:black;font-size:15px;">Month</label>&nbsp;&nbsp;
                     </div>
                   <div class="col-md-7">
                   <select name="month" class="form-control" id="month">
                        <h6 style="color:red;"><?php echo form_error('month');?></h6>
                          <option>Select Month</option>
                            <?php $i=1;if(!empty($months)) { foreach ($months->result() as $row){ ?>
                          <option name="month" value="<?php echo $row->month;?>" data-id="<?php echo $row->id;?>"><?php echo $row->month;?></option>
                          <?php } }?>
                    </select>
                    </div>
                </div>
            </div>
          </div>
        </div>
        </div>
     <br><br><br><br><br><br><br><br><br><br><br>
     
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
<script>

  $('select[name="year"]').on('change', function() {
    //var productid = $(this).val();
    var year=document.getElementById("year");
  console.log(year);
    var expenseid = year.options[year.selectedIndex].getAttribute('data-id');
    console.log(expenseid);
    var year_value=document.getElementById("year").value;
     console.log(year_value);
 if (expenseid) {
    $.ajax({
        type: "POST",
        url: "<?php echo base_url('AdminController/get_growth_data/');?>"+expenseid +'/'+year_value,
        dataType: 'json',
        success: function (response) {
                
                 console.log(response);
                 var res1=response.get_yrr.Amount;
                 var res2=response.get_yr.amount;
                 var result = parseInt(res1) - parseInt(res2);
                 if (!isNaN(result)) {
                     
                 document.getElementById("year_amount").value = result;
                 
                 }
                 //document.getElementById("year_amount").value = response.get_yr.amount;
                 //document.getElementById("factory_out_price").value= + get_dt.product_price;
            
                
      }
    });
 }
});

   

  </script>
      <script>

  $('select[name="month"]').on('change', function() {
    //var productid = $(this).val();
    var month=document.getElementById("month");
  console.log(month);
    var expenseid = month.options[month.selectedIndex].getAttribute('data-id');
    console.log(expenseid);
     var yr_value=document.getElementById("yr").value;
     console.log(yr_value);
    var month_value=document.getElementById("month").value;
     console.log(month_value);
   
 if (expenseid) {
    $.ajax({
        type: "POST",
        url: "<?php echo base_url('AdminController/get_growth_data_month/');?>"+expenseid +'/'+yr_value +'/'+month_value,
        dataType: 'json',
        success: function (response) {
                
                 console.log(response);
                 var res1=response.get_gmt.Amount;
                 var res2=response.get_mt.amount;
                 var result = parseInt(res1) - parseInt(res2);
                 if (!isNaN(result)) {
                     
                 document.getElementById("month_amount").value = result;
                 
                 }
                 //document.getElementById("factory_out_price").value= + get_dt.product_price;
            
        
      }
    });
 }
});

   

  </script>
  <script>
   $( document ).ready(function() {
    console.log( "ready!" );


       var total = document.getElementById('total').value;
       console.log(total);
       var total_export = document.getElementById('total_export').value;
       console.log(total_export);
       if (total == "")
           total = 0;
       if (total_export == "")
           total_export = 0;

       var result = parseInt(total) - parseInt(total_export);

       

       if (!isNaN(result)) {
           document.getElementById('total_dome').value = result;
       }
  });
</script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo base_url();?>assets/js/material-dashboard.min.js?v=3.1.0"></script>
</body>

</html>