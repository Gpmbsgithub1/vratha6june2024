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
   Available Stock Dashboard
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
        <li class="nav-item">
          <a class="nav-link text-white " href="<?php echo base_url('AdminController/display_available_stock_data_admin');?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">login</i>
            </div>
            <span class="nav-link-text ms-1">Available Stock</span>
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
         <a href="<?php echo base_url('AdminController/admin_dashboard');?>"><h6 class="font-weight-bolder mb-0">Available Stock Dashboard</h6></a>
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
              <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center" style="background-image: url(<?php echo base_url('assets/img/i5.png') ?>); background-size: cover;">
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
                  <h4 class="font-weight-bolder">Update Available Stock Here</h4>
                  
                </div>
                <div class="card-body card-header">
                   <?php extract($edit);?>
            <form enctype="multipart/form-data" action="<?php echo base_url('AdminController/update_available_stock/').$id;?>" method="post">
                     <h6 style="color:red;"><?php echo form_error('category');?></h6>
                    <div class="input-group input-group-outline mb-3 row">
                       <div class="col-md-5">
                      <label style="color:black;font-size:15px;">Select Category</label>&nbsp;&nbsp;
                      </div>
                       <div class="col-md-7">
                      <select name="category" class="form-control" id="category">
                          <option value="">Select</option>
                           <?php $i=1;if(!empty($cat)) { foreach ($cat->result() as $row){ ?>
                          <option name="category" value="<?php echo $row->category;?>" <?php if($edit['category'] == $row->category) { ?> selected="selected"<?php } ?> data-id="<?php echo $row->id;?>"><?php echo $row->category;?></option>
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
                      <option><?php echo $edit['subcategory'];?></option>
                          
                      </select>
                      </div>
                    </div>
                     <h6 style="color:red;"><?php echo form_error('product_code');?></h6>
                    <div class="input-group input-group-outline mb-3 row">
                       <div class="col-md-5">
                      <label style="color:black;font-size:15px;">Select Product Code</label>&nbsp;&nbsp;
                      </div>
                       <div class="col-md-7">
                      <select name="product_code" class="form-control" id="product_code">
                          <option><?php echo isset($_POST["product_code"]) ? $_POST["product_code"] : ''; ?></option>
                           <?php $i=1;if(!empty($codes)) { foreach ($codes->result() as $row){ ?>
                          <option name="product_code" value="<?php echo $row->product_code;?>" <?php if($edit['product_code'] == $row->product_code) { ?> selected="selected"<?php } ?> data-id="<?php echo $row->id;?>"><?php echo $row->product_code;?></option>
                         <?php } }?>
                      </select>
                      </div>
                    </div>
                     <h6 style="color:red;"><?php echo form_error('product_description');?></h6>
                    <div class="input-group input-group-outline mb-3 row">
                       <div class="col-md-5">
                      <label style="color:black;font-size:15px;">Product Description</label>&nbsp;&nbsp;
                      </div>
                       <div class="col-md-7">
                      <input type="text" class="form-control" name="product_description" value="<?php echo $product_description;?>" id="product_description">
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
                          <option name="material" value="<?php echo $row->material;?>" <?php if($edit['material'] == $row->material) { ?> selected="selected"<?php } ?>><?php echo $row->material;?></option>
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
                          
                          <option><?php echo isset($_POST["material_size"]) ? $_POST["material_size"] : ''; ?></option>
                           <?php $i=1;if(!empty($mat_s)) { foreach ($mat_s->result() as $row){ ?>
                          <option name="material_size" value="<?php echo $row->material_size;?>" <?php if($edit['material_size'] == $row->material_size) { ?> selected="selected"<?php } ?>><?php echo $row->material_size;?></option>
                          <?php } }?>
                      </select>
                      </div>
                    </div>
                     <h6 style="color:red;"><?php echo form_error('product_price');?></h6>
                    <div class="input-group input-group-outline mb-3 row">
                       <div class="col-md-5">
                      <label style="color:black;font-size:15px;">Product Price</label>&nbsp;&nbsp;
                      </div>
                      <div class="col-md-7">
                      <input type="text" class="form-control" name="product_price" value="<?php echo $product_price;?>" id="product_price">
                      </div>
                    </div>
                     <h6 style="color:red;"><?php echo form_error('available_stock');?></h6>
                    <div class="input-group input-group-outline mb-3 row">
                       <div class="col-md-5">
                      <label style="color:black;font-size:15px;">Available Stock</label>&nbsp;&nbsp;
                      </div>
                      <div class="col-md-7">
                      <input type="text" class="form-control" name="available_stock" value="">
                      </div>
                    </div>
                     <!--<h6 style="color:red;"><?php echo form_error('product_image');?></h6>
                     <!--<div class="input-group input-group-outline mb-3 row">
                       <!--<input type="hidden" name="old_image_name" value="<?php echo $product_image;?>">
                        <!--<div class="col-md-5">
                      <label style="color:black;font-size:15px;">Product Image</label>&nbsp;&nbsp;
                      </div>
                       <div class="col-md-7">
                      <input type="file" class="form-control" name="product_image">
                      </div>
                    </div>-->
                    <div class="text-center">
                       <input type="submit" name="signin" value="Update" class="btn bg-gradient-primary w-100 my-4 mb-2">
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
  <script>
   function factory_price() {

       var product_price = document.getElementById('product_price').value;
       console.log(product_price);
       var sale_amount = document.getElementById('sale_amount').value;
       console.log(sale_amount);
       if (product_price == "")
           product_price = 0;
       if (sale_amount == "")
           sale_amount = 0;

       var result = parseInt(product_price) * parseInt(sale_amount) / 100;

       var result1= parseInt(product_price)+result;

       if (!isNaN(result)) {
           document.getElementById('factory_out_price').value = result1;
       }
   }
</script>
 
  
      <script>

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
        url: "<?php echo base_url('AdminController/get_product_data_new/');?>"+productid,
        dataType: 'json',
        success: function (response) {
                
                 //console.log(response.get_dt.product_description);
                 
                 document.getElementById("product_description").value = response.get_dt.product_description;
            
        
      }
    });
 }
});

   

  </script>

  <script>
$(document).ready(function() {
	$('#category').on('change', function() {
	     var category=document.getElementById("category");
         console.log(category);
         var category_id = category.options[category.selectedIndex].getAttribute('data-id');
         console.log(category_id);
			//var category_id = this.value;
			//console.log(category_id);
			$.ajax({
				url: "<?php echo base_url('AdminController/get_subcategory_data');?>",
				type: "POST",
				data: {
					category_id: category_id
				},
				dataType: 'json',
				success: function(dataResult){
				    var options = '';
            //options +='<option value="">Select Subcategory</option>';
            for (var i = 0; i < dataResult.length; i++) {
                options += '<option value="' + dataResult[i].subcategory + '">' + dataResult[i].subcategory + '</option>';
            }
            
				    console.log(dataResult);
					$("#subcategory").html(options);
				}
			});
		
		
	});
});
</script>
    
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo base_url();?>assets/js/material-dashboard.min.js?v=3.1.0"></script>
</body>

</html>