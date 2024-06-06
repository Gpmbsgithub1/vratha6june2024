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
          <a class="nav-link text-white " href="<?php echo base_url('AdminController/display_orders_admin');?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">login</i>
            </div>
            <span class="nav-link-text ms-1">Display Orders</span>
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
       <?php $place_msg=$this->session->flashdata('place_msg');
                    if($place_msg!=""){ ?>
       <div class="alert alert-success alert-dismissible text-white" role="alert">
                <span class="text-sm"> <?php echo $place_msg;?></span>
                
      </div>
       <?php } ?><br>
       <?php $update_order_msg=$this->session->flashdata('update_order_msg');
                    if($update_order_msg!=""){ ?>
       <div class="alert alert-success alert-dismissible text-white" role="alert">
                <span class="text-sm"> <?php echo $update_order_msg;?></span>
                
      </div>
       <?php } ?><br>
        <?php $del_order_msg=$this->session->flashdata('del_order_msg');
                    if($del_order_msg!=""){ ?>
       <div class="alert alert-danger alert-dismissible text-white" role="alert">
                <span class="text-sm"> <?php echo $del_order_msg;?></span>
                
      </div>
       <?php } ?><br>
         <?php $status_update=$this->session->flashdata('status_update');
                    if($status_update!=""){ ?>
       <div class="alert alert-success alert-dismissible text-white" role="alert">
                <span class="text-sm"> <?php echo $status_update;?></span>
                
      </div>
       <?php } ?><br>
    <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Display Orders</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                 <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th>Sr.No.</th>
                      <th>Order Id</th>
                       <th>User</th>
                      <th>Bill For</th>
                      <th>Order Date</th>
                      <th>Need Date</th>
                      <th>Product Code</th>
                      <th>Product Description </th>
                      <th>Domestic/Export</th>
                      <th>Order Quantity </th>
                      <th>Completed Quantity </th>
                      <th>Remaining Quantity </th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $i=1;if(!empty($fetch)) { foreach ($fetch->result() as $row){ ?>
                    <tr>
                       <td>
                          <center><h6 class="mb-0 text-sm"><?php echo $i++;?></h6></center>        
                      </td>
                      <td>
                          <center><h6 class="mb-0 text-sm"><?php echo $row->order_id;?></h6></center>        
                      </td>
                       <td>
                          <center><h6 class="mb-0 text-sm"><?php echo $row->user;?></h6></center>        
                      </td>
                      <td>
                          <center><h6 class="mb-0 text-sm"><?php echo $row->bill_for;?></h6></center>        
                      </td>
                      <td>
                          <center><h6 class="mb-0 text-sm"><?php echo $row->order_date;?></h6></center>        
                      </td>
                       <td>
                          <center><h6 class="mb-0 text-sm"><?php echo $row->need_date;?></h6></center>        
                      </td>
                       <td>
                          <center><h6 class="mb-0 text-sm"><?php echo $row->product_code;?></h6></center>        
                      </td>
                      <td>
                          <center><h6 class="mb-0 text-sm"><?php echo $row->product_description;?></h6></center>        
                      </td>
                      <td>
                        <center><h6 class="mb-0 text-sm"><?php echo $row->domex;?></h6></center>     
                      </td>
                      <td>
                        <center><h6 class="mb-0 text-sm"><?php echo $row->order_quantity;?></h6></center>
                      </td>
                       <td>
                          <center><h6 class="mb-0 text-sm"><?php echo $row->completed_quantity;?></h6></center>        
                      </td>
                       <td>
                          <center><h6 class="mb-0 text-sm"><?php echo $row->remaining_quantity;?></h6></center>        
                      </td>
                      <!--<td>
                        <center><img src="<?php echo base_url("upload/".$row->product_image);?>" width="60px;"height="60px;" style="border-radius:10px;" alt="user1"></center>
                      </td>-->
                      <td>
                       
                       <?php if($row->status == '1'){ ?>

                       
                        <a class="btn btn-info user_status" href="">In Progress</a>
                               
                      <?php }elseif($row->status == '2'){ ?>

                        <a class="btn btn-success user_status" href="">Completed</a>

                      <?php }else{ ?>
                      <a class="btn btn-danger user_status" href="">Not Started</a>
                      <?php } ?>
                      </td>
                      <td class="align-middle">
                        <a class="btn btn-link text-dark px-3 mb-0" href="<?php echo base_url('AdminController/edit_order/').$row->id;?>"><i class="material-icons text-sm me-2">edit</i></a>
                      <a class="btn btn-link text-danger text-gradient px-3 mb-0" onclick="return confirm('Are you sure you want to delete this item')" href="<?php echo base_url('AdminController/delete_order/').$row->id;?>"><i class="material-icons text-sm me-2">delete</i></a>
                      </td>

                        
                    </tr>
              <?php } }?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      
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
   <script>
    function myFunction(v)
{
  var index=$(v).parent().parent().index();
    var quantity1 = document.getElementsByName("total_quantity")[index].value;
    //alert(quantity1);
    var quantity2 = document.getElementsByName("completed_quantity")[index].value;
    //alert(quantity2);
    var remaining_quantity = quantity1 - quantity2;
    document.getElementsByName("remaining_quantity")[index].value = remaining_quantity;
    //alert(remaining_quantity);
} 
  </script>
 
  <!--   Core JS Files   -->
  <script src="<?php echo base_url();?>assets/js/core/popper.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/core/bootstrap.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/plugins/chartjs.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
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