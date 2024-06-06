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
    <div class="container-fluid py-4">
         <?php $success_msg=$this->session->flashdata('success_msg');
                    if($success_msg!=""){ ?>
       <div class="alert alert-success alert-dismissible text-white" role="alert">
                <span class="text-sm"> <?php echo $success_msg;?></span>
                
      </div>
       <?php } ?><br>
       <?php $update_msg=$this->session->flashdata('update_msg');
                    if($update_msg!=""){ ?>
       <div class="alert alert-success alert-dismissible text-white" role="alert">
                <span class="text-sm"> <?php echo $update_msg;?></span>
                
      </div>
       <?php } ?><br>
       <?php $del_msg=$this->session->flashdata('del_msg');
                    if($del_msg!=""){ ?>
       <div class="alert alert-danger alert-dismissible text-white" role="alert">
                <span class="text-sm"> <?php echo $del_msg;?></span>
                
      </div>
       <?php } ?><br>
      <div class="row">
       
        <div class="col-4">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Display Years</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th style="padding-left:50px;">Sr.No</th>
                      <th>Year</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $i=1;if(!empty($years)) { foreach ($years->result() as $row){ ?>
                    <tr>
                      <td style="padding-left:50px;">
                          <h6 class="mb-0 text-sm"><?php echo $i++;?></h6>        
                      </td>
                      <td>
                         <h6 class="mb-0 text-sm"><?php echo $row->year;?></h6>       
                      </td>
                      <!--<td class="align-middle text-center text-sm">
                        <a class="btn btn-link text-dark px-3 mb-0" href="<?php echo base_url('AdminController/edit_product/').$row->id.'/'.$selling_price;?>"><i class="material-icons text-sm me-2">edit</i></a>
                      <a class="btn btn-link text-danger text-gradient px-3 mb-0" onclick="return confirm('Are you sure you want to delete this item')" href="<?php echo base_url('AdminController/delete_product/').$row->id;?>"><i class="material-icons text-sm me-2">delete</i></a>
                        
                      </td>-->

                    
                    </tr>
              <?php } }?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Display Payement Type</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th style="padding-left:50px;">Sr.No</th>
                      <th>Payment Type</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $i=1;if(!empty($payment_type_add)) { foreach ($payment_type_add->result() as $row){ ?>
                    <tr>
                      <td style="padding-left:50px;">
                          <h6 class="mb-0 text-sm"><?php echo $i++;?></h6>        
                      </td>
                      <td>
                         <h6 class="mb-0 text-sm"><?php echo $row->payment_type_add;?></h6>       
                      </td>
                      <!--<td class="align-middle text-center text-sm">
                        <a class="btn btn-link text-dark px-3 mb-0" href="<?php echo base_url('AdminController/edit_product/').$row->id.'/'.$selling_price;?>"><i class="material-icons text-sm me-2">edit</i></a>
                      <a class="btn btn-link text-danger text-gradient px-3 mb-0" onclick="return confirm('Are you sure you want to delete this item')" href="<?php echo base_url('AdminController/delete_product/').$row->id;?>"><i class="material-icons text-sm me-2">delete</i></a>
                        
                      </td>-->

                    
                    </tr>
              <?php } }?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
         <div class="col-4">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Display Categories</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th style="padding-left:50px;">Sr.No</th>
                      <th>Category</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $i=1;if(!empty($cat)) { foreach ($cat->result() as $row){ ?>
                    <tr>
                      <td style="padding-left:50px;">
                          <h6 class="mb-0 text-sm"><?php echo $i++;?></h6>        
                      </td>
                      <td>
                         <h6 class="mb-0 text-sm"><?php echo $row->category;?></h6>       
                      </td>
                      <!--<td class="align-middle text-center text-sm">
                        <a class="btn btn-link text-dark px-3 mb-0" href="<?php echo base_url('AdminController/edit_product/').$row->id.'/'.$selling_price;?>"><i class="material-icons text-sm me-2">edit</i></a>
                      <a class="btn btn-link text-danger text-gradient px-3 mb-0" onclick="return confirm('Are you sure you want to delete this item')" href="<?php echo base_url('AdminController/delete_product/').$row->id;?>"><i class="material-icons text-sm me-2">delete</i></a>
                        
                      </td>-->

                    
                    </tr>
              <?php } }?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-2"></div>
        <div class="col-4">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Display Subcategories</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th style="padding-left:50px;">Sr.No</th>
                      <th>Subcategory</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $i=1;if(!empty($subcat)) { foreach ($subcat->result() as $row){ ?>
                    <tr>
                      <td style="padding-left:50px;">
                          <h6 class="mb-0 text-sm"><?php echo $i++;?></h6>        
                      </td>
                      <td>
                         <h6 class="mb-0 text-sm"><?php echo $row->subcategory;?></h6>       
                      </td>
                      <!--<td class="align-middle text-center text-sm">
                        <a class="btn btn-link text-dark px-3 mb-0" href="<?php echo base_url('AdminController/edit_product/').$row->id.'/'.$selling_price;?>"><i class="material-icons text-sm me-2">edit</i></a>
                      <a class="btn btn-link text-danger text-gradient px-3 mb-0" onclick="return confirm('Are you sure you want to delete this item')" href="<?php echo base_url('AdminController/delete_product/').$row->id;?>"><i class="material-icons text-sm me-2">delete</i></a>
                        
                      </td>-->

                    
                    </tr>
              <?php } }?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Display Materials</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th style="padding-left:50px;">Sr.No</th>
                      <th>Material</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $i=1;if(!empty($mat)) { foreach ($mat->result() as $row){ ?>
                    <tr>
                      <td style="padding-left:50px;">
                          <h6 class="mb-0 text-sm"><?php echo $i++;?></h6>        
                      </td>
                      <td>
                         <h6 class="mb-0 text-sm"><?php echo $row->material;?></h6>       
                      </td>
                      <!--<td class="align-middle text-center text-sm">
                        <a class="btn btn-link text-dark px-3 mb-0" href="<?php echo base_url('AdminController/edit_product/').$row->id.'/'.$selling_price;?>"><i class="material-icons text-sm me-2">edit</i></a>
                      <a class="btn btn-link text-danger text-gradient px-3 mb-0" onclick="return confirm('Are you sure you want to delete this item')" href="<?php echo base_url('AdminController/delete_product/').$row->id;?>"><i class="material-icons text-sm me-2">delete</i></a>
                        
                      </td>-->

                    
                    </tr>
              <?php } }?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
       <div class="row">
       
        <div class="col-6">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Display Product Code & Product Description.</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th style="padding-left:50px;">Sr.No</th>
                      <th>Product Code</th>
                      <th>Product Description</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $i=1;if(!empty($codes)) { foreach ($codes->result() as $row){ ?>
                    <tr>
                      <td style="padding-left:50px;">
                          <h6 class="mb-0 text-sm"><?php echo $i++;?></h6>        
                      </td>
                      <td>
                         <h6 class="mb-0 text-sm"><?php echo $row->product_code;?></h6>       
                      </td>
                      <td>
                         <h6 class="mb-0 text-sm"><?php echo $row->product_description;?></h6>       
                      </td>
                      <!--<td class="align-middle text-center text-sm">
                        <a class="btn btn-link text-dark px-3 mb-0" href="<?php echo base_url('AdminController/edit_product/').$row->id.'/'.$selling_price;?>"><i class="material-icons text-sm me-2">edit</i></a>
                      <a class="btn btn-link text-danger text-gradient px-3 mb-0" onclick="return confirm('Are you sure you want to delete this item')" href="<?php echo base_url('AdminController/delete_product/').$row->id;?>"><i class="material-icons text-sm me-2">delete</i></a>
                        
                      </td>-->

                    
                    </tr>
              <?php } }?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6">
                  <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Display Materials size</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th style="padding-left:50px;">Sr.No</th>
                      <th>Material Size(In Inch)</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $i=1;if(!empty($mat_s)) { foreach ($mat_s->result() as $row){ ?>
                    <tr>
                      <td style="padding-left:50px;">
                          <h6 class="mb-0 text-sm"><?php echo $i++;?></h6>        
                      </td>
                      <td>
                         <h6 class="mb-0 text-sm"><?php echo $row->material_size;?></h6>       
                      </td>
                      <!--<td class="align-middle text-center text-sm">
                        <a class="btn btn-link text-dark px-3 mb-0" href="<?php echo base_url('AdminController/edit_product/').$row->id.'/'.$selling_price;?>"><i class="material-icons text-sm me-2">edit</i></a>
                      <a class="btn btn-link text-danger text-gradient px-3 mb-0" onclick="return confirm('Are you sure you want to delete this item')" href="<?php echo base_url('AdminController/delete_product/').$row->id;?>"><i class="material-icons text-sm me-2">delete</i></a>
                        
                      </td>-->

                    
                    </tr>
              <?php } }?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br><br><br><br><br>
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
    var ctx = document.getElementById("chart-bars").getContext("2d");

    new Chart(ctx, {
      type: "bar",
      data: {
        labels: ["M", "T", "W", "T", "F", "S", "S"],
        datasets: [{
          label: "Sales",
          tension: 0.4,
          borderWidth: 0,
          borderRadius: 4,
          borderSkipped: false,
          backgroundColor: "rgba(255, 255, 255, .8)",
          data: [50, 20, 10, 22, 50, 10, 40],
          maxBarThickness: 6
        }, ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              suggestedMin: 0,
              suggestedMax: 500,
              beginAtZero: true,
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
              color: "#fff"
            },
          },
          x: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });


    var ctx2 = document.getElementById("chart-line").getContext("2d");

    new Chart(ctx2, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Mobile apps",
          tension: 0,
          borderWidth: 0,
          pointRadius: 5,
          pointBackgroundColor: "rgba(255, 255, 255, .8)",
          pointBorderColor: "transparent",
          borderColor: "rgba(255, 255, 255, .8)",
          borderColor: "rgba(255, 255, 255, .8)",
          borderWidth: 4,
          backgroundColor: "transparent",
          fill: true,
          data: [50, 40, 300, 320, 500, 350, 200, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });

    var ctx3 = document.getElementById("chart-line-tasks").getContext("2d");

    new Chart(ctx3, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Mobile apps",
          tension: 0,
          borderWidth: 0,
          pointRadius: 5,
          pointBackgroundColor: "rgba(255, 255, 255, .8)",
          pointBorderColor: "transparent",
          borderColor: "rgba(255, 255, 255, .8)",
          borderWidth: 4,
          backgroundColor: "transparent",
          fill: true,
          data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#f8f9fa',
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>
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