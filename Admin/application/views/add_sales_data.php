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
    <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center" style="background-image: url(<?php echo base_url('assets/img/sale.png') ?>); background-size: cover;">
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
            
              <div class="card">
                <div class="card-header">
                    
                    <?php $error_msg=$this->session->flashdata('error_msg');
                      if($error_msg!=""){ ?>
                     <div class="alert alert-danger">
                     <?php echo $error_msg;?>
                    </div>
                     <?php } ?>
              <?php $success_msg=$this->session->flashdata('success_msg');
                      if($success_msg!=""){ ?>
                     <div class="alert alert-success">
                     <?php echo $success_msg;?>
                    </div>
                     <?php } ?>
                  <h4 class="font-weight-bolder">Add Domestic Sales Data Here</h4>
                  
                </div>
                <div class="card-body card-header">
                  <form enctype="multipart/form-data" action="<?php echo base_url('AdminController/add_sales_data_done');?>" method="post">
                    
                     <div class="input-group input-group-outline mb-3 row">
                       <div class="col-md-5">
                      <label style="color:black;font-size:15px;">User</label>&nbsp;&nbsp;
                      </div>
                       <div class="col-md-7">
                      <input type="text" class="form-control" name="user" value="<?php echo $user['username'];?>">
                      </div>
                    </div>
                        <h6 style="color:red;"><?php echo form_error('bill_to');?></h6>  
                     <div class="input-group input-group-outline mb-3 row">
                       <div class="col-md-5">
                      <label style="color:black;font-size:15px;">Bill To </label>&nbsp;&nbsp;
                      </div>
                       <div class="col-md-7">
                      <input type="text" class="form-control" id="bill_to" name="bill_to" value="<?php echo isset($_POST["bill_to"]) ? $_POST["bill_to"] : ''; ?>">
                      </div>
                    </div>
                    <h6 style="color:red;"><?php echo form_error('mycheck');?></h6>  
                    <div class="input-group input-group-outline mb-3 row">
                       <div class="col-md-3">
                      <label style="color:black;font-size:15px;">GST</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox"  name="mycheck" id="myCheck1" value="1" onclick="myFunction()">
                      
                      </div>
                      <div class="col-md-4">
                       
                      <label style="color:black;font-size:15px;">NON - GST</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="mycheck"  id="myCheck2" value="0">
                      </div>
                      <div class="col-md-5"><input type="text" placeholder="GST No" class="form-control" style="display:none" id="gstno" name="gstno" value="<?php echo isset($_POST["gstno"]) ? $_POST["gstno"] : ''; ?>"></div>
                       
                    </div>
                     <!-- <h6 style="color:red;"><?php echo form_error('category');?></h6>
                    <!-- <div class="input-group input-group-outline mb-3 row">
                       <!-- <div class="col-md-5">
                      <label style="color:black;font-size:15px;">Select Category</label>&nbsp;&nbsp;
                      </div>
                       <div class="col-md-7">
                      <select name="category" class="form-control" id="category">
                          
                          <option><?php echo isset($_POST["category"]) ? $_POST["category"] : ''; ?></option>
                           <?php $i=1;if(!empty($cat)) { foreach ($cat->result() as $row){ ?>
                          <option name="category" value="<?php echo $row->category;?>" data-id="<?php echo $row->id;?>"><?php echo $row->category;?></option>
                          <?php } }?>
                      </select>
                      </div>
                    </div>
                    <h6 style="color:red;"><?php echo form_error('subcategory');?></h6>
                    <div class="input-group input-group-outline mb-3 row">
                       <div class="col-md-5">
                      <label style="color:black;font-size:15px;">Select Subcategory</label>&nbsp;&nbsp;
                      </div>
                       <div class="col-md-7">
                      <select name="subcategory" class="form-control" id="subcategory">
                             
                          <option><?php echo isset($_POST["subcategory"]) ? $_POST["subcategory"] : ''; ?></option>
                           <?php $i=1;if(!empty($subcat)) { foreach ($subcat->result() as $row){ ?>
                          <option name="subcategory" value="<?php echo $row->subcategory;?>"><?php echo $row->subcategory;?></option>
                          <?php } }?>
                      </select>
                      </div>
                    </div>
                       <h6 style="color:red;"><?php echo form_error('material');?></h6>
                    <div class="input-group input-group-outline mb-3 row">
                       <div class="col-md-5">
                      <label style="color:black;font-size:15px;">Select Material</label>&nbsp;&nbsp;
                      </div>
                       <div class="col-md-7">
                      <select name="material" class="form-control">
                          
                          <option><?php echo isset($_POST["material"]) ? $_POST["material"] : ''; ?></option>
                           <?php $i=1;if(!empty($mat)) { foreach ($mat->result() as $row){ ?>
                          <option name="material" value="<?php echo $row->material;?>"><?php echo $row->material;?></option>
                          <?php } }?>
                      </select>
                      </div>
                    </div>
                      <h6 style="color:red;"><?php echo form_error('material_size');?></h6>
                    <div class="input-group input-group-outline mb-3 row">
                       <div class="col-md-5">
                      <label style="color:black;font-size:15px;">Select Material Size</label>&nbsp;&nbsp;
                      </div>
                       <div class="col-md-7">
                      <select name="material_size" class="form-control">
                          <h6 style="color:red;"><?php echo form_error('material_size');?></h6>      
                          <option><?php echo isset($_POST["material_size"]) ? $_POST["material_size"] : ''; ?></option>
                           <?php $i=1;if(!empty($mat_s)) { foreach ($mat_s->result() as $row){ ?>
                          <option name="material_size" value="<?php echo $row->material_size;?>"><?php echo $row->material_size;?></option>
                          <?php } }?>
                      </select>
                      </div>
                    </div>-->
                     <h6 style="color:red;"><?php echo form_error('product_code');?></h6>
                    <div class="input-group input-group-outline mb-3 row">
                       <div class="col-md-5">
                      <label style="color:black;font-size:15px;">Select Product Code</label>&nbsp;&nbsp;
                      </div>
                       <div class="col-md-7">
                      <select name="product_code" id="product_code" class="form-control">
                          <h6 style="color:red;"><?php echo form_error('product_code');?></h6>      
                           <option><?php echo isset($_POST["product_code"]) ? $_POST["product_code"] : ''; ?></option>
                           <?php if(!empty($product_codes)) { foreach ($product_codes->result() as $row){ ?>
                          
                          <option name="product_code" value="<?php echo isset($_POST["product_code"]) ? $_POST["product_code"] : ''; ?><?php echo $row->product_code;?>" data-id="<?php echo $row->id;?>"><?php echo $row->product_code;?></option>
                          <?php } }?>
                      </select>
                      </div>
                    </div>
            
                     <!--<h6 style="color:red;"><?php echo form_error('product_description');?></h6>-->  
                     <div class="input-group input-group-outline mb-3 row">
                       <div class="col-md-5">
                      <label style="color:black;font-size:15px;">Product Description </label>&nbsp;&nbsp;
                      </div>
                       <div class="col-md-7">
                      <input type="text" class="form-control" id="product_description" name="product_description" value="<?php echo isset($_POST["product_description"]) ? $_POST["product_description"] : ''; ?>" readonly>
                      </div>
                    </div>
                    <!--<h6 style="color:red;"><?php echo form_error('factory_out_price');?></h6> --> 
                     <div class="input-group input-group-outline mb-3 row">
                       <div class="col-md-5">
                      <label style="color:black;font-size:15px;">Factory Out Price </label>&nbsp;&nbsp;
                      </div>
                       <div class="col-md-7">
                      <input type="number" class="form-control" name="factory_out_price" id="factory_out_price" value="<?php echo isset($_POST["factory_out_price"]) ? $_POST["factory_out_price"] : ''; ?>" readonly>
                      </div>
                    </div>
                     <h6 style="color:red;"><?php echo form_error('sale_amount');?></h6>  
                     <div class="input-group input-group-outline mb-3 row">
                      <div class="col-md-5">
                      <label style="color:black;font-size:15px;">Sale Amount/Unit</label>&nbsp;&nbsp;
                      </div>
                       <div class="col-md-7">
                      <input type="number" class="form-control" name="sale_amount" id="sale_amount" value="<?php echo isset($_POST["sale_amount"]) ? $_POST["sale_amount"] : ''; ?>">
                      </div>
                     </div>
                     <div class="input-group input-group-outline mb-3 row">
                      <div class="col-md-5">
                      <label style="color:black;font-size:15px;">Available Stock</label>&nbsp;&nbsp;
                      </div>
                       <div class="col-md-7">
                      <input type="text" class="form-control" name="available_stock" id="available_stock" value="<?php echo isset($_POST["available_stock"]) ? $_POST["available_stock"] : ''; ?>" readonly>
                      </div>
                     </div>
                      <h6 style="color:red;"><?php echo form_error('product_quantity');?></h6>  
                    <div class="input-group input-group-outline mb-3 row">
                      <div class="col-md-5">
                      <label style="color:black;font-size:15px;">Product Quantity</label>&nbsp;&nbsp;
                      </div>
                       <div class="col-md-7">
                      <input type="text" class="form-control" name="product_quantity" id="product_quantity" value="<?php echo isset($_POST["product_quantity"]) ? $_POST["product_quantity"] : ''; ?>">
                      </div>
                     </div>
                      <div class="input-group input-group-outline mb-3 row">
                      <div class="col-md-5">
                      <label style="color:black;font-size:15px;">Taxable Amount</label>&nbsp;&nbsp;
                      </div>
                       <div class="col-md-7">
                      <input type="number" class="form-control" name="taxable_amount" id="taxable_amount" value="" onclick="taxable_amount_done()">
                      </div>
                     </div>
                    <h6 style="color:red;"><?php echo form_error('transportation_expense');?></h6>  
                    <div class="input-group input-group-outline mb-3 row">
                      <div class="col-md-5">
                      <label style="color:black;font-size:15px;">Transportation Expense</label>&nbsp;&nbsp;
                      </div>
                       <div class="col-md-7">
                      <input type="text" class="form-control" name="transportation_expense" id="transportation_expense" value="">
                      </div>
                     </div>
                     <h6 style="color:red;"><?php echo form_error('packaging_expense');?></h6>  
                      <div class="input-group input-group-outline mb-3 row">
                      <div class="col-md-5">
                      <label style="color:black;font-size:15px;">Packaging Expense</label>&nbsp;&nbsp;
                      </div>
                       <div class="col-md-7">
                      <input type="text" class="form-control" name="packaging_expense" id="packaging_expense" value="">
                      </div>
                     </div>
                      <div class="input-group input-group-outline mb-3 row">
                      <div class="col-md-5">
                      <label style="color:black;font-size:15px;">Total Amount</label>&nbsp;&nbsp;
                      </div>
                       <div class="col-md-7">
                      <input type="number" class="form-control" name="total_amount" id="total_amount" value="" onclick="total_amount_done()">
                      </div>
                     </div>
                      <h6 style="color:red;"><?php echo form_error('discount');?></h6>  
                     <div class="input-group input-group-outline mb-3 row">
                      <div class="col-md-5">
                      <label style="color:black;font-size:15px;">Discount</label>&nbsp;&nbsp;
                      </div>
                       <div class="col-md-7">
                      <input type="text" class="form-control" name="discount" id="discount" value="<?php echo isset($_POST["discount"]) ? $_POST["discount"] : ''; ?>">
                       
                      </div>
                     </div>
                      <div class="input-group input-group-outline mb-3 row">
                      <div class="col-md-5">
                      <label style="color:black;font-size:15px;">Total Taxable Amount</label>&nbsp;&nbsp;
                      </div>
                       <div class="col-md-7">
                      <input type="number" class="form-control" name="total_taxable_amount" id="total_taxable_amount" value="" onclick="total_taxable_amount_done()">
                      </div>
                     </div>
                     <div class="input-group input-group-outline mb-3 row" id="cgst_txt" style="display: none">
                      <div class="col-md-5">
                      <label style="color:black;font-size:15px;">CGST</label>&nbsp;&nbsp;
                      </div>
                       <div class="col-md-7">
                      <input type="text" class="form-control" name="cgst" id="cgst" value="" onclick="cgst_done();">
                      </div>
                     </div>
                     <div class="input-group input-group-outline mb-3 row" id="sgst_txt" style="display: none">
                      <div class="col-md-5">
                      <label style="color:black;font-size:15px;">SGST</label>&nbsp;&nbsp;
                      </div>
                       <div class="col-md-7">
                      <input type="text" class="form-control" name="sgst" id="sgst" value="" onclick="sgst_done();">
                      </div>
                     </div>
                     <div class="input-group input-group-outline mb-3 row">
                      <div class="col-md-5">
                      <label style="color:black;font-size:15px;">Amount</label>&nbsp;&nbsp;
                      </div>
                       <div class="col-md-7">
                      <input type="number" class="form-control" name="Amount" id="Amount" value="" onclick="Amount_done()">
                      </div>
                     </div>
                     <div class="input-group input-group-outline mb-3 row">
                      <div class="col-md-5">
                      <label style="color:black;font-size:15px;">Balance</label>&nbsp;&nbsp;
                      </div>
                       <div class="col-md-7">
                      <input type="number" class="form-control" name="balance" id="balance" value="" onclick="balance_done()">
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
  <script>
  
function taxable_amount_done() {

       var product_quantity = document.getElementById('product_quantity').value;
       console.log(product_quantity);
       var sale_amount = document.getElementById('sale_amount').value;
       console.log(sale_amount);
       if (product_quantity == "")
           product_quantity = 0;
       if (sale_amount == "")
           sale_amount = 0;

       var result = parseInt(product_quantity) * parseInt(sale_amount);

       
       if (!isNaN(result)) {
           document.getElementById('taxable_amount').value = result;
       }
   }
   function total_amount_done() {

       var product_quantity = document.getElementById('product_quantity').value;
       console.log(product_quantity);
       var sale_amount = document.getElementById('sale_amount').value;
       console.log(sale_amount);
       var transportation_expense = document.getElementById('transportation_expense').value;
       console.log(transportation_expense);
       var packaging_expense = document.getElementById('packaging_expense').value;
       console.log(packaging_expense);
       if (product_quantity == "")
           product_quantity = 0;
       if (sale_amount == "")
           sale_amount = 0;
       if (transportation_expense == "")
           transportation_expense = 0;
       if (packaging_expense == "")
           packaging_expense = 0;

       var result = parseInt(product_quantity) * parseInt(sale_amount) + parseInt(transportation_expense) + parseInt(packaging_expense);

       
       if (!isNaN(result)) {
           document.getElementById('total_amount').value = result;
       }
   }
   function total_taxable_amount_done() {

       var product_quantity = document.getElementById('product_quantity').value;
       console.log(product_quantity);
       var sale_amount = document.getElementById('sale_amount').value;
       console.log(sale_amount);
       var transportation_expense = document.getElementById('transportation_expense').value;
       console.log(transportation_expense);
       var packaging_expense = document.getElementById('packaging_expense').value;
       console.log(packaging_expense);
        var discount = document.getElementById('discount').value;
       console.log(discount);
       if (product_quantity == "")
           product_quantity = 0;
       if (sale_amount == "")
           sale_amount = 0;
       if (transportation_expense == "")
           transportation_expense = 0;
       if (packaging_expense == "")
           packaging_expense = 0;
       if (discount == "")
           discount = 0;

       var result = parseInt(product_quantity) * parseInt(sale_amount) + parseInt(transportation_expense) + parseInt(packaging_expense) - parseInt(discount) ;

       
       if (!isNaN(result)) {
           document.getElementById('total_taxable_amount').value = result;
       }
   }
   function cgst_done() {

       var total_taxable_amount = document.getElementById('total_taxable_amount').value;
       console.log(product_quantity);
       
       if (total_taxable_amount == "")
           total_taxable_amount = 0;

       var result = parseInt(total_taxable_amount) * 6 /100;

       
       if (!isNaN(result)) {
           document.getElementById('cgst').value = result;
       }
   }
   function sgst_done() {

       var total_taxable_amount = document.getElementById('total_taxable_amount').value;
       console.log(product_quantity);
       
       if (total_taxable_amount == "")
           total_taxable_amount = 0;

       var result = parseInt(total_taxable_amount) * 6 /100;

       
       if (!isNaN(result)) {
           document.getElementById('sgst').value = result;
       }
   }
   function Amount_done() {

       var total_taxable_amount = document.getElementById('total_taxable_amount').value;
       console.log(total_taxable_amount);
       var cgst = document.getElementById('cgst').value;
       console.log(cgst);
       var sgst = document.getElementById('sgst').value;
       console.log(sgst);
       
       if (total_taxable_amount == "")
           total_taxable_amount = 0;
       if (cgst == "")
           cgst = 0;
       if (sgst == "")
           sgst = 0;

       var result = parseInt(total_taxable_amount) + parseInt(cgst) + parseInt(sgst);

       
       if (!isNaN(result)) {
           document.getElementById('Amount').value = result;
       }
   }
      function balance_done() {

       var Amount = document.getElementById('Amount').value;
       console.log(Amount);
       if (Amount) {
           document.getElementById('balance').value = Amount;
       }
   }
  
  $(document).ready(function() {
  $("#sale_amount").on("input", function() {
    verify()
  });
   $("#product_quantity").on("input", function() {
    verify1()
  });
});

function verify() {
  var secondvalue = parseInt($("#sale_amount").val());
  var firstValue = parseInt($("#factory_out_price").val());
  if (secondvalue <= firstValue) {
    alert("Sale amount is greater than factory out price.");
  } 
} 

function verify1() {
  var secondvalue = parseInt($("#product_quantity").val());
  var firstValue = parseInt($("#available_stock").val());
  if (secondvalue >= firstValue) {
    alert("Stock is not available for this product");
  } 
} 

$(function() {
    $('input[name="mycheck"]').on('click', function() {
        if ($(this).val() == 1) {
            $('#cgst_txt').show();
        }
        else {
            $('#cgst_txt').hide();
        }
    });
});
$(function() {
    $('input[name="mycheck"]').on('click', function() {
        if ($(this).val() == 1) {
            $('#sgst_txt').show();
        }
        else {
            $('#sgst_txt').hide();
        }
    });
});

  
  
  function myFunction() {
  var checkBox = document.getElementById("myCheck1");
  var gstno = document.getElementById("gstno");
  if (checkBox.checked == true){
    gstno.style.display = "block";
    }else {
     gstno.style.display = "none";
  }
  
}

  $('select[name="product_code"]').on('change', function() {
    //var productid = $(this).val();
    var productcode=document.getElementById("product_code");
  console.log(productcode);
    var productid = productcode.options[productcode.selectedIndex].getAttribute('data-id');
    console.log(productid);
    var productcode1=document.getElementById("product_code").value;
     console.log(productcode1);
 if (productid) {
    $.ajax({
        type: "POST",
        url: "<?php echo base_url('AdminController/get_product_data/');?>"+productid,
        dataType: 'json',
        success: function (response) {
                
                 console.log(response);
                 
                 document.getElementById("product_description").value = response.get_dt.product_description;
                 document.getElementById("factory_out_price").value = response.get_dt.selling_price;
                 document.getElementById("available_stock").value = response.get_dt.available_stock;
            
        
      }
    });
 }
});


   

  </script>
    <script>

  $('select[name="category"]').on('change', function() {
    //var productid = $(this).val();
    var category=document.getElementById("category");
  console.log(category);
    var categoryid = category.options[category.selectedIndex].getAttribute('data-id');
    console.log(categoryid);
    var productcode1=document.getElementById("product_code").value;
     console.log(productcode1);
 if (productid) {
    $.ajax({
        type: "POST",
        url: "<?php echo base_url('AdminController/get_product_data/');?>"+categoryid,
        dataType: 'json',
        success: function (response) {
                
                 //console.log(response.get_dt.product_description);
                 
                 document.getElementById("subcategory").value = response.get_dt.subcategory;
                 
            
        
      }
    });
 }
});

   

  </script>
  
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