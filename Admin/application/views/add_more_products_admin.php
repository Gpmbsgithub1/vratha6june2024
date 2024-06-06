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
          <a class="nav-link text-white " href="<?php echo base_url('AdminController/add_sales_data');?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">login</i>
            </div>
            <span class="nav-link-text ms-1">Add Domestic Sales Data</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="<?php echo base_url('AdminController/display_sales_data_admin');?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">login</i>
            </div>
            <span class="nav-link-text ms-1">Display Domestic Sales Data</span>
          </a>
        </li>
         <li class="nav-item">
          <a class="nav-link text-white " href="<?php echo base_url('AdminController/product_catalog_admin');?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">login</i>
            </div>
            <span class="nav-link-text ms-1">Product Catalog</span>
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
          <a href="<?php echo base_url('AdminController/display_sales_data');?>"><h6 class="font-weight-bolder mb-0">Domestic Domestic Sales Dashboard</h6></a>
          
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
                  <table class="table align-items-center mb-0" id="mytable1">
                  <thead>
                    <tr>
                      

                    </tr>
                  </thead>
                  <tbody>
                   <?php if(!empty($code_data)) { foreach ($code_data->result() as $row2){ ?> 
                    <tr>
                      <td><div class="input-group input-group-outline mb-3 row">
                       <div class="col-md-12">
                      <label style="color:black;font-size:15px;">Invoice No </label>&nbsp;&nbsp;
                      </div>
                       <div class="col-md-12">
                      <input type="text" class="form-control" name="invoice_no[]" id="invoice_no" value="<?php echo $invoice_no;?>">
                      </div>
                    </div>
                   </td>
                      <td>
                      <span id="product_code_error" class="text-danger"></span>  
                     <div class="input-group input-group-outline mb-3 row">
                       <div class="col-md-12">
                      <label style="color:black;font-size:15px;">Select Product Code</label>&nbsp;&nbsp;
                      </div>
                       <div class="col-md-12">
                      <select name="product_code[]" class="form-control">
                         <option><?php echo isset($_POST["product_code"]) ? $_POST["product_code"] : ''; ?></option>
                           <?php if(!empty($product_codes)) { foreach ($product_codes->result() as $row1){ ?>   
                           <option value="<?php echo $row1->product_code;?>" <?php if($row1->product_code == $row2->product_code) { ?> selected="selected"<?php } ?> data-id="<?php echo $row1->id;?>"><?php echo $row1->product_code;?></option>
                           <?php } }?>
                      </select>
                      </div>
                    </div>
                   </td>
                   <td><div class="input-group input-group-outline mb-3 row text-center"><div class="col-md-12"><label style="color:black;font-size:15px;">Product Description </label></div><div class="col-md-12"><input type="text" class="form-control" name="product_description[]" value="<?php echo $row2->product_description;?>"></div></div></td>
                    <td><div class="input-group input-group-outline mb-3 row">
                       <div class="col-md-12">
                      <label style="color:black;font-size:15px;">Factory Out Price </label>&nbsp;&nbsp;
                      </div>
                       <div class="col-md-12">
                      <input type="text" class="form-control" name="factory_out_price[]" value="<?php echo $row2->factory_out_price;?>">
                      </div>
                    </div>
                   </td>
                   <td><div class="input-group input-group-outline mb-3 row">
                       <div class="col-md-12">
                      <label style="color:black;font-size:15px;">Sale Amount </label>&nbsp;&nbsp;
                      </div>
                       <div class="col-md-12">
                      <input type="text" class="form-control" name="sale_amount[]" value="<?php echo $row2->sale_amount;?>">
                      </div>
                    </div>
                   </td>
                     <td>
                    <span id="product_quantity_error" class="text-danger"></span>   
                    <div class="input-group input-group-outline mb-3 row">
                      <div class="col-md-12">
                      <label style="color:black;font-size:15px;">Product Quantity</label>&nbsp;&nbsp;
                      </div>
                       <div class="col-md-12">
                      <input type="text" class="form-control" name="product_quantity[]" value="<?php echo $row2->product_quantity;?>">
                      </div>
                     </div>
                     </td> 
                     <td><button type="button" class="btn btn-danger remove1">Remove</button>
                      </td>
    
                      
                      </tr>
                    <?php } } ?> 

                  </tbody>

                </table>
                 <form id="add_form">
                 <table class="table align-items-center mb-0" id="mytable">
                  <thead>
                    <tr>
                      

                    </tr>
                  </thead>
                  <tbody>
                     <tr>
                      <td><div class="input-group input-group-outline mb-3 row">
                       <div class="col-md-12">
                      <label style="color:black;font-size:15px;">Invoice No </label>&nbsp;&nbsp;
                      </div>
                       <div class="col-md-12">
                      <input type="text" class="form-control" name="invoice_no[]" id="invoice_no" value="<?php echo $invoice_no;?>">
                      <input type="hidden" class="form-control" name="usname[]" value="<?php echo $usname;?>">
                      <input type="hidden" class="form-control" name="bill_to[]" value="<?php echo $bill_to;?>">
                      <input type="hidden" class="form-control" name="transportation_expense[]" value="<?php echo $transportation_expense;?>">
                      <input type="hidden" class="form-control" name="packaging_expense[]" value="<?php echo $packaging_expense;?>">
                      <input type="hidden" class="form-control" name="sale_amount[]" value="<?php echo $sale_amount;?>">
                       <input type="hidden" class="form-control" name="gstno[]" value="<?php echo $gstno;?>">
                      <input type="hidden" class="form-control" name="discount[]" value="<?php echo $discount;?>">
                      </div>
                    </div>
                   </td>
                      <td>
                      <span id="product_code_error" class="text-danger"></span>  
                     <div class="input-group input-group-outline mb-3 row">
                       <div class="col-md-12">
                      <label style="color:black;font-size:15px;">Select Product Code</label>&nbsp;&nbsp;
                      </div>
                       <div class="col-md-12">
                      <select name="product_code[]" id="product_code" onchange="myFunction()" class="form-control">
                         <option><?php echo isset($_POST["product_code"]) ? $_POST["product_code"] : ''; ?></option>
                           <?php if(!empty($product_codes)) { foreach ($product_codes->result() as $row1){ ?>   
                           <option value="<?php echo $row1->product_code;?>" data-id="<?php echo $row1->id;?>"><?php echo $row1->product_code;?></option>
                           <?php } }?>
                      </select>
                      </div>
                    </div>
                   </td>
                   <td><div class="input-group input-group-outline mb-3 row text-center"><div class="col-md-12"><label style="color:black;font-size:15px;">Product Description </label></div><div class="col-md-12"><input type="text" class="form-control" id="product_description" name="product_description[]" value=""></div></div></td>
                    <td><div class="input-group input-group-outline mb-3 row">
                       <div class="col-md-12">
                      <label style="color:black;font-size:15px;">Factory Out Price </label>&nbsp;&nbsp;
                      </div>
                       <div class="col-md-12">
                      <input type="text" class="form-control" name="factory_out_price[]" id="factory_out_price" value="">
                      </div>
                    </div>
                   </td>
                   <td><div class="input-group input-group-outline mb-3 row">
                       <div class="col-md-12">
                      <label style="color:black;font-size:15px;">Sale Amount </label>&nbsp;&nbsp;
                      </div>
                       <div class="col-md-12">
                      <input type="number" class="form-control" name="sale_amount[]" id="sale_amount" value="" required>
                      </div>
                    </div>
                   </td>
                     <td>
                    <span id="product_quantity_error" class="text-danger"></span>   
                    <div class="input-group input-group-outline mb-3 row">
                      <div class="col-md-12">
                      <label style="color:black;font-size:15px;">Product Quantity</label>&nbsp;&nbsp;
                      </div>
                       <div class="col-md-12">
                      <input type="number" class="form-control" name="product_quantity[]" value="" required>
                      </div>
                     </div>
                     </td>      
                    
                      <td><button type="button" id="addRow" class="btn btn-primary">Add More</button>
                      </td>
                      
                       <td><button type="button" class="btn btn-danger remove">Remove</button>
                      </td>

                       
                      
                      </tr>
                    

                  </tbody>

                </table>
                <center><input class="btn btn-md btn-primary" type="submit" name="add_btn" id="add_btn" value="Submit"></center>
                </form>
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
    $(function(){
      $("#add_form").submit(function(){
          dataString = $("#add_form").serialize();

          var productcode=document.getElementById("product_code").value;
          console.log(productcode);
          var productdescription=document.getElementById("product_description").value;
          var productdescription = encodeURI(document.getElementById("product_description").value); 
          console.log(productdescription);
          var factoryoutprice=document.getElementById("factory_out_price").value;
          console.log(factoryoutprice);
           var sale_amount=document.getElementById("sale_amount").value;
          console.log(sale_amount);
          $.ajax({
              type: "POST",
              url:"<?php echo base_url('AdminController/save_products_data/');?>",
              data: dataString,
              success: function(data){
                  // alert('Successful!');
                 console.log(data);
                   
                 
                  // $("#result").html('Successfully updated record!'); 
                   //$("#result").addClass("alert alert-success");
                    alert("Successfully updated record!");
                    window.location = "https://vratha.co.in/Admin/AdminController/display_sales_data_admin";
              }

          });

          return false;  //stop the actual form post !important!

      });

      
  });
  
$(document).ready(function(){
    $("#addRow").click(function(){
        var newRow = `  
                      <tr>
                      <td><div class="input-group input-group-outline mb-3 row">
                       <div class="col-md-12">
                      <label style="color:black;font-size:15px;">Invoice No </label>&nbsp;&nbsp;
                      </div>
                       <div class="col-md-12">
                       <input type="text" class="form-control" name="invoice_no[]" id="invoice_no" value="<?php echo $invoice_no;?>">
                      <input type="hidden" class="form-control" name="usname[]" value="<?php echo $usname;?>">
                      <input type="hidden" class="form-control" name="bill_to[]" value="<?php echo $bill_to;?>">
                      <input type="hidden" class="form-control" name="transportation_expense[]" value="<?php echo $transportation_expense;?>">
                      <input type="hidden" class="form-control" name="packaging_expense[]" value="<?php echo $packaging_expense;?>">
                      <input type="hidden" class="form-control" name="sale_amount[]" value="<?php echo $sale_amount;?>">
                       <input type="hidden" class="form-control" name="gstno[]" value="<?php echo $gstno;?>">
                      <input type="hidden" class="form-control" name="discount[]" value="<?php echo $discount;?>">
                      </div>
                    </div>
                   </td><td>
                          
                     <div class="input-group input-group-outline mb-3 row">
                       <div class="col-md-12">
                      <label style="color:black;font-size:15px;">Select Product Code</label>&nbsp;&nbsp;
                      </div>
                       <div class="col-md-12">
                      <select name="product_code[]" id="product_code1" onchange="myFunction1()" class="form-control">
                         <option><?php echo isset($_POST["product_code"]) ? $_POST["product_code"] : ''; ?></option>
                           <?php 
                           if(!empty($product_codes)) { foreach ($product_codes->result() as $row1){ ?>   
                           <option value="<?php echo $row1->product_code;?>" data-id="<?php echo $row1->id;?>"><?php echo $row1->product_code;?></option>
                           <?php } }?>
                      </select>
                      </div>
                    </div>
                   </td>
                   <td><div class="input-group input-group-outline mb-3 row text-center"><div class="col-md-12"><label style="color:black;font-size:15px;">Product Description </label></div><div class="col-md-12"><input type="text" class="form-control" id="product_description1" name="product_description[]" value=""></div></div></td>
                    <td><div class="input-group input-group-outline mb-3 row">
                       <div class="col-md-12">
                      <label style="color:black;font-size:15px;">Factory Out Price </label>&nbsp;&nbsp;
                      </div>
                       <div class="col-md-12">
                      <input type="text" class="form-control" name="factory_out_price[]" id="factory_out_price1" value="">
                      </div>
                    </div>
                   </td>
                   <td><div class="input-group input-group-outline mb-3 row">
                       <div class="col-md-12">
                      <label style="color:black;font-size:15px;">Sale Amount </label>&nbsp;&nbsp;
                      </div>
                       <div class="col-md-12">
                      <input type="number" class="form-control" name="sale_amount[]" id="sale_amount" value="" required>
                      </div>
                    </div>
                   </td>
                   <td>
                    <div class="input-group input-group-outline mb-3 row">
                      <div class="col-md-12">
                      <label style="color:black;font-size:15px;">Product Quantity</label>&nbsp;&nbsp;
                      </div>
                       <div class="col-md-12">
                      <input type="number" class="form-control" name="product_quantity[]" value="" required>
                      </div>
                     </div>
                     </td>      
                      
                      <td><button type="button" class="btn btn-danger remove">Remove</button>
                      </td>

                    </tr>
                    `;
        $("#mytable tbody").append(newRow);

  });

    $("#mytable").on("click", ".remove", function(){
        $(this).closest("tr").remove();
    });



});
 $("#mytable1").on("click", ".remove1", function(){
        $(this).closest("tr").remove();
    });
  
function myFunction() {
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
                  
        
      }
    });
 }
}
function myFunction1() {
    //var productid = $(this).val();
    var productcode=document.getElementById("product_code1");
  console.log(productcode);
    var productid = productcode.options[productcode.selectedIndex].getAttribute('data-id');
    console.log(productid);
    var productcode1=document.getElementById("product_code1").value;
     console.log(productcode1);
 if (productid) {
    $.ajax({
        type: "POST",
        url: "<?php echo base_url('AdminController/get_product_data/');?>"+productid,
        dataType: 'json',
        success: function (response) {
                
                 console.log(response);
                 
                 document.getElementById("product_description1").value = response.get_dt.product_description;
                 document.getElementById("factory_out_price1").value = response.get_dt.selling_price;
                  
        
      }
    });
 }
}

</script>
  
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