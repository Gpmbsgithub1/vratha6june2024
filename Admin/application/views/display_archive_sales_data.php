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
   Domestic Sales Dashboard
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
      <a class="navbar-brand m-0" href="<?php echo base_url('AdminController/display_sales_data');?>">
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
          <a class="nav-link text-white " href="<?php echo base_url('AdminController/add_sales_data');?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">login</i>
            </div>
            <span class="nav-link-text ms-1">Add Domestic Sales Data</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="<?php echo base_url('AdminController/display_sales_data');?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">login</i>
            </div>
            <span class="nav-link-text ms-1">Display Domestic Sales Data</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="<?php echo base_url('AdminController/display_archival_sales_data');?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">login</i>
            </div>
            <span class="nav-link-text ms-1">Display Domestic Archival Sales Data</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="<?php echo base_url('AdminController/product_catalog');?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">login</i>
            </div>
            <span class="nav-link-text ms-1">Product Catalog</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="<?php echo base_url('AdminController/sales_logout');?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">login</i>
            </div>
            <span class="nav-link-text ms-1">Log Out</span>
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
          <a href="<?php echo base_url('AdminController/display_sales_data');?>"><h6 class="font-weight-bolder mb-0">Domestic Sales Dashboard</h6></a>
          
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
         <?php $success_sales_msg=$this->session->flashdata('success_sales_msg');
                    if($success_sales_msg!=""){ ?>
       <div class="alert alert-success alert-dismissible text-white" role="alert">
                <span class="text-sm"> <?php echo $success_sales_msg;?></span>
                
      </div>
       <?php } ?>
       <?php $update_msg=$this->session->flashdata('update_msg');
                    if($update_msg!=""){ ?>
       <div class="alert alert-success alert-dismissible text-white" role="alert">
                <span class="text-sm"> <?php echo $update_msg;?></span>
                
      </div>
       <?php } ?>
       <?php $del_msg=$this->session->flashdata('del_msg');
                    if($del_msg!=""){ ?>
       <div class="alert alert-danger alert-dismissible text-white" role="alert">
                <span class="text-sm"> <?php echo $del_msg;?></span>
                
      </div>
       <?php } ?>
      <?php $succ_act_msg=$this->session->flashdata('succ_act_msg');
                    if($succ_act_msg!=""){ ?>
       <div class="alert alert-success alert-dismissible text-white" role="alert">
                <span class="text-sm"> <?php echo $succ_act_msg;?></span>
                
      </div>
       <?php } ?><br>
       <center><div id="result"></div></center>
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Display Domestic Sales Data</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                 <table class="table align-items-center mb-0" id="mytable">
                  <thead>
                    <tr>
                      <th>Sr.No</th>
                      <th>User</th>
                      <th>Bill To</th>
                      <th>GST No</th>
                      <th>Date</th>
                      <th>Invoice No</th>
                     <!-- <th>Category</th>
                      <th>Subcategory</th>
                      <th>Material</th>
                      <th>Material Size</th>-->
                      <th>Item Name</th>
                      <th>Product Quantity</th>   
                      <th>Factory Out Price</th>
                      <th>Sale Amount/Unit</th>
                      <th>Taxable Amount</th>
                      <th>Transportation Expense </th>
                      <th>Packaging Expense</th>
                      <th>Total Amount</th>
                      <th>Discount</th>
                      <th>Total Taxable Amount</th>
                      <th>CGST</th>
                      <th>SGST</th>
                      <th>Amount</th>
                      <th>Received</th>
                      <th>Balance</th>
                      <th>Status</th>
                      <th>Generate</th>

                    </tr>
                  </thead>
                  <tbody>
                  <?php $i=1;if(!empty($archive_sales)) { foreach ($archive_sales->result() as $row){ ?>
                    <tr>
                      <td>
                          <center><h6 class="mb-0 text-sm"><?php echo $i++;?></h6></center>        
                      </td>
                      <td>
                          <center><h6 class="mb-0 text-sm"><?php echo $row->user;?></h6></center>        
                      </td>

                       <td>
                          <center><h6 class="mb-0 text-sm"><?php echo $row->bill_to;?></h6></center>        
                      </td>
                      <td>
                          <center><h6 class="mb-0 text-sm"><?php echo $row->gstno;?></h6></center>        
                      </td>
                       <td>
                          <center><h6 class="mb-0 text-sm"><?php echo $row->date;?></h6></center>        
                      </td>
                      <td>
                          <center><h6 class="mb-0 text-sm"><?php echo $row->invoice_no;?></h6></center>        
                      </td>
                      <!--<td>
                          <center><h6 class="mb-0 text-sm"><?php echo $row->category;?></h6></center>        
                      </td>
                      <td>
                          <center><h6 class="mb-0 text-sm"><?php echo $row->subcategory;?></h6></center>        
                      </td>
                      <td>
                          <center><h6 class="mb-0 text-sm"><?php echo $row->material;?></h6></center>        
                      </td><td>
                          <center><h6 class="mb-0 text-sm"><?php echo $row->material_size;?></h6></center>        
                      </td>-->
                      
                       <td>
                          <center><h6 class="mb-0 text-sm"><?php echo $row->product_code;?></h6></center>        
                      </td>
                        <td>
                          <center><h6 class="mb-0 text-sm"><?php echo $row->product_quantity;?></h6></center>        
                      </td>

                       <td>
                          <center><h6 class="mb-0 text-sm"><?php echo $row->factory_out_price;?></h6></center>        
                      </td>
                       <td>
                          <center><h6 class="mb-0 text-sm"><?php echo $row->sale_amount;?></h6></center>        
                      </td>
                       <td>
                          <center><h6 class="mb-0 text-sm"><?php 
                          $unit_price=$row->sale_amount;
                          $quantity=$row->product_quantity;
                          echo $taxable_amount=$unit_price*$quantity;?>
                          </h6></center>        
                      </td>
                       <td class="align-middle text-center text-sm">
                         <center><h6 class="mb-0 text-sm"><?php echo $row->transportation_expense;?></h6></center>            
                      </td>
                      <td class="align-middle text-center text-sm">
                         <center><h6 class="mb-0 text-sm"><?php echo $row->packaging_expense;?></h6></center>            
                      </td>
                      <td class="align-middle text-center text-sm">
                         <center><h6 class="mb-0 text-sm"><?php $total_amount=$taxable_amount+$row->transportation_expense+$row->packaging_expense;
                         echo $total_amount1 = number_format($total_amount, 2, '.', ''); ?></h6></center>           
                      </td>
                      <td>
                          <center><h6 class="mb-0 text-sm"><?php echo $row->discount;?></h6></center>        
                      </td>
                       <td class="align-middle text-center text-sm">
                         <center><h6 class="mb-0 text-sm"><?php $dis=$row->discount;$total_taxable_amount=$total_amount -$dis;
                         echo $dis1 = number_format($total_taxable_amount, 2, '.', ''); ?></h6></center>            
                      </td>
                      <td class="align-middle text-center text-sm">
                         <center><h6 class="mb-0 text-sm"><?php  
                         $CGST=$total_taxable_amount *6/100;
                       if($row->mycheck == 1 ){echo $CGST1 = number_format($CGST, 2, '.', '');}else{ echo $CGST1 =00;}?></h6></center>            
                      </td>
                      <td class="align-middle text-center text-sm">
                         <center><h6 class="mb-0 text-sm"><?php $SGST=$total_taxable_amount *6/100;
                          if($row->mycheck == 1 ){echo $SGST1 = number_format($SGST, 2, '.', '');}else{ echo $SGST1 =00;} ?></h6></center>            
                      </td>
                     <td class="align-middle text-center text-sm">
                         <center><h6 class="mb-0 text-sm"><?php $Amount1=$total_taxable_amount;
                       if($row->mycheck == 0 ){echo $Amount11 = number_format($Amount1, 2, '.', '');}else{ $Amount2=$total_taxable_amount + $CGST + $SGST; echo $Amount22 = number_format($Amount2, 2, '.', '');}?></h6></center>            
                      </td>
                       <td class="align-middle text-center text-sm">
                         <center><h6 class="mb-0 text-sm"><?php $received=$row->received;
                          echo $received1 = number_format($received, 2, '.', '');
                         
                         
                    ?></h6></center>            
                       </td>
                        <td class="align-middle text-center text-sm">
                         <center><h6 class="mb-0 text-sm"><?php $Amount1=$total_taxable_amount; $Amount11 = number_format($Amount1, 2, '.', ''); $balance1=$Amount11-$received;
                         if($row->mycheck == 0 ){ echo $bal=number_format($balance1, 2, '.', '');}else{$balance2=$Amount22-$received; echo $bal=number_format($balance2, 2, '.', '');}
                         
                       ?></h6></center>            
                       </td>
                        <td>
                       
                       <?php 
                      //$balance=$Amount-$received;
                      $Amount1=$total_taxable_amount; 
                      $Amount11 = number_format($Amount1, 2, '.', '');
                      $balance1=$Amount11-$received;
                      if($row->mycheck == 0 ){ 
                          $bal=intval($balance1);
                          
                      }else{$balance2=$Amount22-$received; 
                       $bal=intval($balance2);
                          
                      }
                       if($bal <= 1){ ?>

                       
                        <a class="btn btn-success user_status" href="">Completed</a>
                       <?php }else{ ?>
                        <a class="btn btn-danger user_status" href="">Open</a>
                       <?php } ?>
                      </td>
                     <td class="align-middle text-center text-sm">
                         <?php if($row->status == 1 &&  $row->mycheck == 1 ){ ?>
                        <a class="btn btn-primary" href="<?php echo base_url('AdminController/downloadinvoice/').$row->invoice_no.'/'.$row->received.'/'.$row->balance.'/'.$row->transportation_expense.'/'.$row->packaging_expense.'/'.$row->discount;?>">Bill</a>
                        <?php } ?>
                         <?php if($row->status == 1 &&  $row->mycheck == 0 ){ ?>
                        <a class="btn btn-primary" href="<?php echo base_url('AdminController/downloadinvoicenongst/').$row->invoice_no.'/'.$row->received.'/'.$row->balance.'/'.$row->transportation_expense.'/'.$row->packaging_expense.'/'.$row->discount;?>">Bill</a>
                        <?php } ?>

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

  
  <!--   Core JS Files   -->
  <script src="<?php echo base_url();?>assets/js/core/popper.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/core/bootstrap.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/plugins/chartjs.min.js"></script>



  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo base_url();?>assets/js/material-dashboard.min.js?v=3.1.0"></script>
</body>

</html>