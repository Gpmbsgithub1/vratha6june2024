<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('dashboard');
	}
	public function admin_login()
	{
		$this->load->view('admin_login');
	}
	public function manufacturing_login()
	{
		$this->load->view('manufacturing_login');
	}
	public function ordering_login()
	{
		$this->load->view('ordering_login');
	}
	public function expense_login()
	{
		$this->load->view('expense_login');
	}
	public function sales_login()
	{
		$this->load->view('sales_login');
	}
		public function available_stock_login()
	{
		$this->load->view('available_stock_login');
	}
	public function admin_dashboard()
	{
		$user=$this->session->userdata('user');
        $data['user']=$user;
        $data['total_ex']=$this->AdminModel->total_expense_done();
        $data['total_sl']=$this->AdminModel->total_sales_done();
        $data['total_st']=$this->AdminModel->total_stock_done();
        $data['total_sl_till']=$this->AdminModel->total_sales_till_now();
        $data['total_ex_till']=$this->AdminModel->total_expense_till_now();
        $data['pending_sl']=$this->AdminModel->pending_sales_collection_amount();
		$this->load->view('admin_dashboard',$data);
	}
		public function admin_login_done()
	{
	          
              $this->form_validation->set_rules('username', 'Username', 'trim|required');
              $this->form_validation->set_rules('password', 'Password', 'trim|required'); 
              if($this->form_validation->run()==true)
              {
              	  $username = $this->input->post('username');
              	  $password=$this->input->post('password');
              	  $user=$this->AdminModel->check_admin_login($username,$password);
              	  //print_r($user);
              	  if(!empty($user)){
              	  	$sessArray['id']=$user['id'];
              	  	$sessArray['username']=$user['username'];
              	  	//print_r($sessArray);
              	  	//$data['fetch_dt']=$this->AdminModel->displayUserData();
              	  	$this->session->set_userdata('user',$sessArray);
              	  	$user=$this->session->userdata('user');
              	    $data['user']=$user;
              	    $data['total_ex']=$this->AdminModel->total_expense_done();
              	    $data['total_sl']=$this->AdminModel->total_sales_done();
              	    $data['total_st']=$this->AdminModel->total_stock_done();
              	    $data['total_sl_till']=$this->AdminModel->total_sales_till_now();
                    $data['total_ex_till']=$this->AdminModel->total_expense_till_now();
                    $data['pending_sl']=$this->AdminModel->pending_sales_collection_amount();
              	  	$this->session->set_flashdata('msg','Admin Login Successfully');
              	  	$this->load->view('admin_dashboard',$data);
              	  	}else{
              	  	$this->session->set_flashdata('error_msg','Invalid Email or Password');
              	  	$this->load->view('admin_login');
              	  }
              }
            
		      
		      
  }
  public function add_product()
	{
		$user=$this->session->userdata('user');
        $data['user']=$user;
        $data['types']=$this->AdminModel->display_product_types();
        $data['codes']=$this->AdminModel->display_product_codes();
        $data['cat']=$this->AdminModel->display_category();
        $data['subcat']=$this->AdminModel->display_subcategory();
        $data['mat']=$this->AdminModel->display_material();
        $data['mat_s']=$this->AdminModel->display_material_size();
		$this->load->view('add_product',$data);
	}
  public function add_product_done()
	{
						
						 $this->form_validation->set_rules('category', 'Category is', 'required');
						 $this->form_validation->set_rules('subcategory', 'Subcategory is', 'required');
						 $this->form_validation->set_rules('product_price', 'Product Price', 'required');
						 $this->form_validation->set_rules('sale_amount', 'Sale Amount', 'required');
						 $this->form_validation->set_rules('factory_out_price', 'Factory Out Price ', 'required');
	                    $this->form_validation->set_rules('product_description', 'Product Description', 'required');
	                    $this->form_validation->set_rules('product_code', 'product code is', 'required');
	                    /*if (empty($_FILES['product_image']['name']))
                            {
                                $this->form_validation->set_rules('product_image', 'Product Image', 'required');
                            }*/
	                    if($this->form_validation->run()){  
						//$config['upload_path'] = './upload/';
						//$config['allowed_types'] = 'gif|jpg|png';
						//$config['max_size'] = '100';
						//$config['max_width'] = '1024';
						//$config['max_height'] = '768';
						//$product_type=$this->input->post('product_type');
						//$data['get_product']=$this->AdminModel->get_product_type($product_type);
						//print_r($data);
						//die();
						//if ($query = $this->AdminModel->get_product_type($product_type))
                        //  {
                        
                         //    $search['searches'] = $query;
                         // }
						//$this->load->library('upload',$config);
						//$this->upload->initialize($config);
						//$this->upload->do_upload('product_image');
					//	$img=$this->upload->data();
						//$product_image=$img['file_name'];
					    $cat_id=$this->input->post('cat_id'); 
						$subcat_id=$this->input->post('subcat_id'); 
					
                         //$this->get_cat_subcat($category_id,$subcategory_id);
                	     $formarray=array(
                	                        'category_id'=>$cat_id,
                	                        'subcategory_id'=>$subcat_id,
                	                        'category' => $this->input->post('category'),
				  	       					'subcategory'  =>$this->input->post('subcategory'),
				  	       					'product_code'  =>$this->input->post('product_code'),
				  	       					'product_description' => $this->input->post('product_description'),
				  	       					'material'  =>$this->input->post('material'),
				  	       					'material_size'  =>$this->input->post('material_size'),
				  	       					'product_price'  =>$this->input->post('product_price'),
							    	        'sale_amount' => $this->input->post('sale_amount'),
							    	         'selling_price' => $this->input->post('factory_out_price')
							    	         
			
							    	             	);
                	       
                	      
                	        
                            $this->AdminModel->add_product_done_now($formarray);
                			$this->session->set_flashdata('success_msg','Product Added Successfully');
                			$user=$this->session->userdata('user');
        					$data['user']=$user;
			               	$data['fetch']=$this->AdminModel->display_products_Data();
							$this->load->view('display_products',$data);
			             
                		}else{
                	        $user=$this->session->userdata('user');
                            $data['user']=$user; 
                	        $data['types']=$this->AdminModel->display_product_types();
                            $data['codes']=$this->AdminModel->display_product_codes();
			               $this->load->view('add_product',$data);
						 }   
                			

                
		
	}
	public function display_products()
	{
		$user=$this->session->userdata('user');
        $data['user']=$user;
		$data['fetch']=$this->AdminModel->display_products_Data();
		$this->load->view('display_products',$data);
	}
	public function edit_product()
	{

					 $selling_price=$this->uri->segment('4');
					 $user=$this->session->userdata('user');
                     $data['user']=$user;
					 $data['selling']=$selling_price;
					 $data['edit']=$this->AdminModel->edit_product_data($this->uri->segment('3'));
					 $data['types']=$this->AdminModel->display_product_types();
					 $data['codes']=$this->AdminModel->display_product_codes();
					 $data['cat']=$this->AdminModel->display_category();
                     $data['subcat']=$this->AdminModel->display_subcategory();
                     $data['mat']=$this->AdminModel->display_material();
                     $data['mat_s']=$this->AdminModel->display_material_size();
		    	     $this->load->view('edit_product',$data);
	}
	public function update_product()
	{
	    
	                   	      $formarray=array('category' => $this->input->post('category'),
				  	       					'subcategory'  =>$this->input->post('subcategory'),
				  	       					'product_code'  =>$this->input->post('product_code'),
				  	       					'product_description' => $this->input->post('product_description'),
				  	       					'material'  =>$this->input->post('material'),
				  	       					'material_size'  =>$this->input->post('material_size'),
				  	       					'product_price'  =>$this->input->post('product_price'),
							    	        'sale_amount' => $this->input->post('sale_amount'),
							    	         'selling_price' => $this->input->post('factory_out_price'),
							    	          
			
							    	             	);
						$this->AdminModel->update_product_data($this->uri->segment('3'),$formarray);
    			        $this->session->set_flashdata('update_msg','Product Updated Successfully');
    			        $user=$this->session->userdata('user');
            			$data['user']=$user;
    			        $data['fetch']=$this->AdminModel->display_products_Data();
    			        $data['types']=$this->AdminModel->display_product_types();
    					$data['codes']=$this->AdminModel->display_product_codes();
    					$this->load->view('display_products',$data);

						
						
					   /* $config['upload_path'] = './upload/';
						$config['allowed_types'] = 'gif|jpg|png';
						//$config['max_size'] = '100';
						//$config['max_width'] = '1024';
						//$config['max_height'] = '768';

						$this->load->library('upload',$config);
						$this->upload->initialize($config);
						$this->upload->do_upload('product_image');
						$img=$this->upload->data();
						$old_product_image=$this->input->post('old_image_name');

						$new_product_image=$img['file_name'];

						if($new_product_image !='')
						{
							    $sell=$this->input->post('selling_price');
						        $price=$this->input->post('product_price');
						
						        $total_selling_price=$sell + $price;
								$update_filename=$img['file_name'];
								$formarray=array('category' => $this->input->post('category'),
				  	       					'subcategory'  =>$this->input->post('subcategory'),
				  	       					'product_code'  =>$this->input->post('product_code'),
				  	       					'product_description' => $this->input->post('product_description'),
				  	       					'material'  =>$this->input->post('material'),
				  	       					'material_size'  =>$this->input->post('material_size'),
				  	       					'product_price'  =>$this->input->post('product_price'),
							    	        'sale_amount' => $this->input->post('sale_amount'),
							    	         'selling_price' => $total_selling_price,
							    	          'product_image' => $update_filename
			
							    	             	);
								 if(file_exists("./upload/".$old_product_image))
								 {
								 	unlink("./upload/".$old_product_image);
								 }

						}else{
							    $sell=$this->input->post('selling_price');
						        $price=$this->input->post('product_price');
						
						        $total_selling_price=$sell + $price;
								$update_filename=$old_product_image;
								$formarray=array('category' => $this->input->post('category'),
				  	       					'subcategory'  =>$this->input->post('subcategory'),
				  	       					'product_code'  =>$this->input->post('product_code'),
				  	       					'product_description' => $this->input->post('product_description'),
				  	       					'material'  =>$this->input->post('material'),
				  	       					'material_size'  =>$this->input->post('material_size'),
				  	       					'product_price'  =>$this->input->post('product_price'),
							    	        'sale_amount' => $this->input->post('sale_amount'),
							    	         'selling_price' => $total_selling_price,
							    	          'product_image' => $update_filename
			
							    	             	);
						}

					   
				
			        $this->AdminModel->update_product_data($this->uri->segment('3'),$formarray);
			        $this->session->set_flashdata('update_msg','Product Updated Successfully');
			        $user=$this->session->userdata('user');
        			$data['user']=$user;
			        $data['fetch']=$this->AdminModel->display_products_Data();
			        $data['types']=$this->AdminModel->display_product_types();
					$data['codes']=$this->AdminModel->display_product_codes();
					$this->load->view('display_products',$data);*/
	}
	public function delete_product()
	{
					
			        $this->AdminModel->delete_product_data($this->uri->segment('3'));
			        $this->session->set_flashdata('del_msg','Product Deleted Successfully');
			        $user=$this->session->userdata('user');
        			$data['user']=$user;
			        $data['fetch']=$this->AdminModel->display_products_Data();
					$this->load->view('display_products',$data);

	}
	
	public function admin_logout(){
				$this->session->unset_userdata('user');
				$this->load->view('dashboard');
			}
    		public function manufacturing_login_done()
	{
	          
              $this->form_validation->set_rules('username', 'Username', 'trim|required');
              $this->form_validation->set_rules('password', 'Password', 'trim|required'); 
              if($this->form_validation->run()==true)
              {
              	  $username = $this->input->post('username');
              	  $password=$this->input->post('password');
              	  $user=$this->AdminModel->check_manufacturing_login($username,$password);
              	  //print_r($user);
              	  if(!empty($user)){
              	  	$sessArray['id']=$user['id'];
              	  	$sessArray['username']=$user['username'];
              	  	//print_r($sessArray);
              	  	//$data['fetch_dt']=$this->AdminModel->displayUserData();
              	  	$this->session->set_userdata('user',$sessArray);
              	  	$user=$this->session->userdata('user');
              	    $data['user']=$user;
              	    $data['fetch']=$this->AdminModel->display_orders_Data();
              	  	$this->session->set_flashdata('succ_man_msg','Manufacturer Login Successfully');
              	    $this->load->view('display_orders',$data);
              	  	}else{
              	  	$this->session->set_flashdata('error_msg','Invalid Email or Password');
              	  	$this->load->view('manufacturing_login');
              	  }
              }
            
		      
		      
  }
  public function display_ordering_products()
	{
		
		$user=$this->session->userdata('user');
        $data['user']=$user;
        $data['fetch']=$this->AdminModel->display_products_Data();
		$this->load->view('display_ordering_products',$data);
	}
	public function display_ordering_products_admin()
	{
		$user=$this->session->userdata('user');
        $data['user']=$user;
		$data['fetch']=$this->AdminModel->display_products_Data();
		$this->load->view('display_ordering_products_admin',$data);
	}
		public function product_catalog_admin()
	{
		$user=$this->session->userdata('user');
        $data['user']=$user;
		$data['fetch']=$this->AdminModel->display_products_Data();
		$this->load->view('product_catalog_admin',$data);
	}
			public function product_catalog()
	{
		$user=$this->session->userdata('user');
        $data['user']=$user;
		$data['fetch']=$this->AdminModel->display_products_Data();
		$this->load->view('product_catalog',$data);
	}
 
  public function place_order()
	{
					 
					 $user=$this->session->userdata('user');
                     $data['user']=$user;
					 $data['place']=$this->AdminModel->place_order_done($this->uri->segment('3'));
					 $data['product_codes']=$this->AdminModel->display_product_codes_search();
		    	     $this->load->view('place_order',$data);
	}
	 public function place_order_admin()
	{
					 
					 $user=$this->session->userdata('user');
                     $data['user']=$user;
					 $data['place']=$this->AdminModel->place_order_done($this->uri->segment('3'));
					 $data['product_codes']=$this->AdminModel->display_product_codes_search();
		    	     $this->load->view('place_order_admin',$data);
	}
  
	
	public function place_order_done_now()
	{
						 $user=$this->session->userdata('user');
                         $data['user']=$user;
					     //$id=$this->uri->segment('3');
					      $query = $this->db->query("SELECT id FROM tbl_orders ORDER BY id DESC LIMIT 1");
                          $i = $query->row()->id;

					 	//$config['upload_path'] = './upload/';
						//$config['allowed_types'] = 'gif|jpg|png';
						//$config['max_size'] = '100';
						//$config['max_width'] = '1024';
						//$config['max_height'] = '768';

						//$this->load->library('upload',$config);
						//$this->upload->initialize($config);
						//$this->upload->do_upload('product_image');
						//$img=$this->upload->data();
						//$old_product_image=$this->input->post('old_image_name');

						//$new_product_image=$img['file_name'];

						//if($new_product_image !='')
						//{
								//$update_filename=$img['file_name'];
								  $formarray=array(
								            'order_id'=>'ORD'.$i++,
								 			'user' => $this->input->post('user'),
				  	       					'bill_for'  =>$this->input->post('bill_for'),
				  	       					'order_date'  =>$this->input->post('order_date'),
				  	       					'need_date'  =>$this->input->post('need_date'),
							    	        'product_code' => $this->input->post('product_code'),
							    	         'product_description' => $this->input->post('product_description'),
							    	         'domex'=>$this->input->post('domex'),
							    	         'order_quantity' => $this->input->post('order_quantity')
							    	         
			
							    	             	);
								 /*if(file_exists("./upload/".$old_product_image))
								 {
								 	unlink("./upload/".$old_product_image);
								 }

						}else{
								$update_filename=$old_product_image;
								 $formarray=array(
								 	        'product_id'=>$id,
								 	        'product_name' => $this->input->post('product_name'),
				  	       					'product_size'  =>$this->input->post('product_size'),
				  	       					'product_price'  =>$this->input->post('product_price'),
				  	       					'product_quantity'  =>$this->input->post('product_quantity'),
							    	        'product_description' => $this->input->post('product_description'),
							    	         'product_type' => $this->input->post('product_type'),
							    	         'product_code' => $this->input->post('product_code'),
							    	          'product_image' => $update_filename,
							    	           'status'=>0
			
							    	             	);
						}*/

					   
				
			        $this->AdminModel->place_order_done_now_success($formarray);
			        $this->session->set_flashdata('place_msg','Order Placed Successfully');
			        $data['fetch']=$this->AdminModel->display_orders_Data();
					$this->load->view('display_orders_ordering',$data);
	}
	public function place_order_done_now_admin()
	{
						 $user=$this->session->userdata('user');
                         $data['user']=$user;
                          //$invoice_no='VA00';
					      $query = $this->db->query("SELECT id FROM tbl_orders ORDER BY id DESC LIMIT 1");
                          $i = $query->row()->id;
					     //$id=$this->uri->segment('3');

					 	//$config['upload_path'] = './upload/';
						//$config['allowed_types'] = 'gif|jpg|png';
						//$config['max_size'] = '100';
						//$config['max_width'] = '1024';
						//$config['max_height'] = '768';

						//$this->load->library('upload',$config);
						//$this->upload->initialize($config);
						//$this->upload->do_upload('product_image');
						//$img=$this->upload->data();
						//$old_product_image=$this->input->post('old_image_name');

						//$new_product_image=$img['file_name'];

						//if($new_product_image !='')
						//{
								//$update_filename=$img['file_name'];
								 $formarray=array(
								            'order_id'=>'ORD'.$i++,
								 			'user' => $this->input->post('user'),
				  	       					'bill_for'  =>$this->input->post('bill_for'),
				  	       					'order_date'  =>$this->input->post('order_date'),
				  	       					'need_date'  =>$this->input->post('need_date'),
							    	        'product_code' => $this->input->post('product_code'),
							    	         'product_description' => $this->input->post('product_description'),
							    	         'domex'=>$this->input->post('domex'),
							    	         'order_quantity' => $this->input->post('order_quantity')
							    	         
			
							    	             	);
								 //if(file_exists("./upload/".$old_product_image))
								 //{
								 	//unlink("./upload/".$old_product_image);
								 //}

						//}else{
								//$update_filename=$old_product_image;
								 //$formarray=array(
								 	       // 'product_id'=>$id,
								 	        //'product_name' => $this->input->post('product_name'),
				  	       					//'product_size'  =>$this->input->post('product_size'),
				  	       					//'product_price'  =>$this->input->post('product_price'),
				  	       					//'product_quantity'  =>$this->input->post('product_quantity'),
							    	        //'product_description' => $this->input->post('product_description'),
							    	         //'product_type' => $this->input->post('product_type'),
							    	         //'product_code' => $this->input->post('product_code'),
							    	         // 'product_image' => $update_filename,
							    	           //'status'=>0
			
							    	            // 	);
						//}

					   
				
			        $this->AdminModel->place_order_done_now_success($formarray);
			        $this->session->set_flashdata('place_msg','Order Placed Successfully');
			        $data['fetch']=$this->AdminModel->display_orders_Data();
					$this->load->view('display_orders_ordering_admin',$data);
	}
	public function display_orders()
	{
		$user=$this->session->userdata('user');
        $data['user']=$user;
		$data['fetch']=$this->AdminModel->display_orders_Data();
		$this->load->view('display_orders',$data);
	}
	public function display_orders_admin()
	{
		$user=$this->session->userdata('user');
        $data['user']=$user;
		$data['fetch']=$this->AdminModel->display_orders_Data();
		$this->load->view('display_orders_admin',$data);
	}
	
	
	public function delete_order()
	{
					
					 $user=$this->session->userdata('user');
                     $data['user']=$user;
			        $this->AdminModel->delete_order_data($this->uri->segment('3'));
			        $this->session->set_flashdata('del_order_msg','Order Deleted Successfully');
			        $data['fetch']=$this->AdminModel->display_orders_Data();
					$this->load->view('display_orders_admin',$data);

	}
		public function delete_order_ordering()
	{
					
					 $user=$this->session->userdata('user');
                     $data['user']=$user;
			        $this->AdminModel->delete_order_data($this->uri->segment('3'));
			        $this->session->set_flashdata('del_order_msg','Order Deleted Successfully');
			        $data['fetch']=$this->AdminModel->display_orders_Data();
					$this->load->view('display_orders_ordering_admin',$data);

	}
	public function edit_order()
	{  	
					 $id=$this->uri->segment('3');
					 $data['order']=$this->AdminModel->edit_order_data($this->uri->segment('3'));
					 $user=$this->session->userdata('user');
        			 $data['user']=$user;
        			 $data['product_codes']=$this->AdminModel->display_product_codes_search();
		    	     $this->load->view('edit_order',$data);
	}
		public function edit_completed_order()
	{  	
					 $id=$this->uri->segment('3');
					 $data['order']=$this->AdminModel->edit_order_data($this->uri->segment('3'));
					 $user=$this->session->userdata('user');
       				 $data['user']=$user;
		    	     $this->load->view('edit_completed_order',$data);
	}
	public function edit_order_ordering_admin()
	{  	
					 $id=$this->uri->segment('3');
					 $data['order']=$this->AdminModel->edit_order_ordering_admin_data($this->uri->segment('3'));
					 $user=$this->session->userdata('user');
                     $data['user']=$user;
                     $data['product_codes']=$this->AdminModel->display_product_codes_search();
		    	     $this->load->view('edit_order_ordering_admin',$data);
	}
	public function update_order()
	{
						 $user=$this->session->userdata('user');
                         $data['user']=$user;
					    //$config['upload_path'] = './upload/';
						//$config['allowed_types'] = 'gif|jpg|png';
						//$config['max_size'] = '100';
						//$config['max_width'] = '1024';
						//$config['max_height'] = '768';

						//$this->load->library('upload',$config);
						//$this->upload->initialize($config);
						//$this->upload->do_upload('product_image');
					//	$img=$this->upload->data();
						//$old_product_image=$this->input->post('old_image_name');

						//$new_product_image=$img['file_name'];

						//if($new_product_image !='')
					//	{
					             $total_quantity=0;
						         $completed_quantity=0;
						         $remaining_quantity=0;
					              $pre=0;
            	                  $pos=0;
            					  $pre=$this->input->post('pre_completed_quantity');	
                                  $pos=$this->input->post('completed_quantity');
                                  $completed_quantity=$pre+$pos;
						        
						        $total_quantity=$this->input->post('order_quantity');
						        //$completed_quantity=$this->input->post('completed_quantity');
						        $remaining_quantity=$total_quantity-$completed_quantity;
						       
						        if($total_quantity - $completed_quantity > 0){
						            $status=1;
						           
						           
						        }elseif($total_quantity - $completed_quantity == 0){
						            $status=2;
						           
						        }else{
						            $status=3;
						            
						            
						        }
						       
								 //$update_filename=$img['file_name'];
								 $formarray=array(
								 			'user' => $this->input->post('user'),
				  	       					'bill_for'  =>$this->input->post('bill_for'),
				  	       					'order_date'  =>$this->input->post('order_date'),
				  	       					'need_date'  =>$this->input->post('need_date'),
							    	        'product_code' => $this->input->post('product_code'),
							    	         'product_description' => $this->input->post('product_description'),
							    	         'domex'=>$this->input->post('domex'),
							    	         'order_quantity' => $this->input->post('order_quantity'),
							    	         'completed_quantity'  =>$completed_quantity,
				  	       					 'remaining_quantity'  =>$remaining_quantity,
				  	       					 'status'=>$status
							    );
								 //if(file_exists("./upload/".$old_product_image))
								 //{
								 //	unlink("./upload/".$old_product_image);
								// }

					/*	}else{
						           $total_quantity="";
						           $completed_quantity="";
						           $remaining_quantity="";
						         $total_quantity=$this->input->post('product_quantity');
						         $completed_quantity=$this->input->post('completed_quantity');
						         $remaining_quantity=$total_quantity-$completed_quantity;
						        if($total_quantity - $completed_quantity > 0){
						            $status=1;
						        }elseif($total_quantity - $completed_quantity == 0){
						            $status=2;
						        }else{
						            $status=3;
						        }
								 $update_filename=$old_product_image;
								 $formarray=array('product_name' => $this->input->post('product_name'),
				  	       					'product_size'  =>$this->input->post('product_size'),
				  	       					'product_price'  =>$this->input->post('product_price'),
				  	       					'completed_quantity'  =>$completed_quantity,
				  	       					'remaining_quantity'  =>$remaining_quantity,
				  	       					'product_quantity'  =>$this->input->post('product_quantity'),
							    	        'product_description' => $this->input->post('product_description'),
							    	         'product_type' => $this->input->post('product_type'),
							    	         'product_code' => $this->input->post('product_code'),
							    	          'product_image' => $update_filename,
							    	           'status'=>$status
				
							    	             	);
						}*/

					   
				
			        $this->AdminModel->update_order_data($this->uri->segment('3'),$formarray);
			        $this->session->set_flashdata('update_order_msg','Order Updated Successfully');
			        $user=$this->session->userdata('user');
        			$data['user']=$user;
			       	$data['fetch']=$this->AdminModel->display_orders_Data();
					$this->load->view('display_orders_admin',$data);
	}
		public function update_completed_order()
	{
						 $user=$this->session->userdata('user');
                         $data['user']=$user;
                                  $total_quantity=0;
						          $completed_quantity=0;
						          $remaining_quantity=0;
					              $pre=0;
            	                  $pos=0;
            					  $pre=$this->input->post('pre_completed_quantity');	
                                  $pos=$this->input->post('completed_quantity');
                                  $completed_quantity=$pre+$pos;
						        
						        $total_quantity=$this->input->post('order_quantity');
						        //$completed_quantity=$this->input->post('completed_quantity');
						        $remaining_quantity=$total_quantity-$completed_quantity;
						       
						        if($total_quantity - $completed_quantity > 0){
						            $status=1;
						           
						           
						        }elseif($total_quantity - $completed_quantity == 0){
						            $status=2;
						           
						        }else{
						            $status=3;
						            
						            
						        }
						       
								
								 $formarray=array(
				  	       					'completed_quantity'  =>$completed_quantity,
				  	       					'remaining_quantity'  =>$remaining_quantity,
				  	       					'status'=>$status
			
							    	             	);
								 
			        $this->AdminModel->update_order_data($this->uri->segment('3'),$formarray);
			        $this->session->set_flashdata('update_order_msg','Status Updated Successfully');
			       	$data['fetch']=$this->AdminModel->display_orders_Data();
					$this->load->view('display_orders',$data);
	}
		public function update_order_ordering_admin()
	{
						 $user=$this->session->userdata('user');
                         $data['user']=$user;
					    //$config['upload_path'] = './upload/';
						//$config['allowed_types'] = 'gif|jpg|png';
						//$config['max_size'] = '100';
						//$config['max_width'] = '1024';
						//$config['max_height'] = '768';

						//$this->load->library('upload',$config);
						//$this->upload->initialize($config);
						//$this->upload->do_upload('product_image');
						//$img=$this->upload->data();
						//$old_product_image=$this->input->post('old_image_name');

						//$new_product_image=$img['file_name'];

						//if($new_product_image !='')
						//{
						       
						       
								 //$update_filename=$img['file_name'];
								$formarray=array(
								 			'user' => $this->input->post('user'),
				  	       					'bill_for'  =>$this->input->post('bill_for'),
				  	       					'order_date'  =>$this->input->post('order_date'),
				  	       					'need_date'  =>$this->input->post('need_date'),
							    	        'product_code' => $this->input->post('product_code'),
							    	         'product_description' => $this->input->post('product_description'),
							    	         'domex'=>$this->input->post('domex'),
							    	         'order_quantity' => $this->input->post('order_quantity')
							    );
								 //if(file_exists("./upload/".$old_product_image))
								 //{
								 //	unlink("./upload/".$old_product_image);
								 //}

						//}else{
						         //$update_filename=$old_product_image;
								 //$formarray=array('product_name' => $this->input->post('product_name'),
				  	       					//'product_size'  =>$this->input->post('product_size'),
				  	       					//'product_price'  =>$this->input->post('product_price'),
				  	       					//'product_quantity'  =>$this->input->post('product_quantity'),
							    	        //'product_description' => $this->input->post('product_description'),
							    	         //'product_type' => $this->input->post('product_type'),
							    	         //'product_code' => $this->input->post('product_code'),
							    	          //'product_image' => $update_filename
							    	         
			
							    	             //	);
						//}

					   
				
			        $this->AdminModel->update_order_ordering_admin_data($this->uri->segment('3'),$formarray);
			        $this->session->set_flashdata('update_order_msg','Order Updated Successfully');
			       	$data['fetch']=$this->AdminModel->display_orders_Data();
					$this->load->view('display_orders_ordering_admin',$data);
	}
	  public function  change_status()

			 { 
			 		  $user=$this->session->userdata('user');
        			  $data['user']=$user;
			          $order_id=$this->uri->segment('3');
				      $status=$this->uri->segment('4');
			 	 	  $formarray=array('status' => $status);
				      $this->AdminModel->update_status($order_id,$formarray);
				      $this->session->set_flashdata('status_update','Status Updated Successfully');
				      $data['fetch']=$this->AdminModel->display_orders_Data();
					  $this->load->view('display_orders',$data);
			 }
	public function manufacturer_logout(){
				$this->session->unset_userdata('user');
				$this->load->view('dashboard');
			}


     		public function ordering_login_done()
	{
	          
              $this->form_validation->set_rules('username', 'Username', 'trim|required');
              $this->form_validation->set_rules('password', 'Password', 'trim|required'); 
              if($this->form_validation->run()==true)
              {
              	  $username = $this->input->post('username');
              	  $password=$this->input->post('password');
              	  $user=$this->AdminModel->check_ordering_login($username,$password);
              	  //print_r($user);
              	  if(!empty($user)){
              	  	$sessArray['id']=$user['id'];
              	  	$sessArray['username']=$user['username'];
              	  	$this->session->set_userdata('user',$sessArray);
              	  	$user=$this->session->userdata('user');
              	    $data['user']=$user;
              	    $data['fetch']=$this->AdminModel->display_products_Data();
              	  	$this->session->set_flashdata('ord_log_msg','Ordering Login Successfully');
              	    $this->load->view('display_ordering_products',$data);
              	  	}else{
              	  	$this->session->set_flashdata('error_msg','Invalid Email or Password');
              	  	$this->load->view('ordering_login');
              	  }
              }
            
		      
		      
  }
  public function display_orders_ordering()
	{
		$user=$this->session->userdata('user');
        $data['user']=$user;
		$data['fetch']=$this->AdminModel->display_orders_Data();
		$this->load->view('display_orders_ordering',$data);
	}
  public function display_orders_ordering_admin()
	{
		$user=$this->session->userdata('user');
        $data['user']=$user;
		$data['fetch']=$this->AdminModel->display_orders_Data();
		$this->load->view('display_orders_ordering_admin',$data);
	}
  


	public function ordering_logout(){
				$this->session->unset_userdata('user');
				$this->load->view('dashboard');
			}



   	public function expense_login_done()
	{
	          
              $this->form_validation->set_rules('username', 'Username', 'trim|required');
              $this->form_validation->set_rules('password', 'Password', 'trim|required'); 
              if($this->form_validation->run()==true)
              {
              	  $username = $this->input->post('username');
              	  $password=$this->input->post('password');
              	  $user=$this->AdminModel->check_expense_login($username,$password);
              	  //print_r($user);
              	  if(!empty($user)){
              	  	$sessArray['id']=$user['id'];
              	  	$sessArray['username']=$user['username'];
              	  	//print_r($sessArray);
              	  	//$data['fetch_dt']=$this->AdminModel->displayUserData();
              	  	$this->session->set_userdata('user',$sessArray);
              	  	$user=$this->session->userdata('user');
              	    $data['user']=$user;
              	    $user1=$user1=$user['username'];
		            $data['expense']=$this->AdminModel->display_expense_Data_user($user1);
              	  	$this->session->set_flashdata('succ_act_msg','Accountant Login Successfully');
              	  	$this->load->view('display_expense_data',$data);
              	  	}else{
              	  	$this->session->set_flashdata('error_msg','Invalid Email or Password');
              	  	$this->load->view('expense_login');
              	  }
              }
            
  }
   public function add_expense_data()
	{
		$user=$this->session->userdata('user');
        $data['user']=$user;
        $data['years']=$this->AdminModel->display_years();
        $data['months']=$this->AdminModel->display_months();
        $data['payment_type_add']=$this->AdminModel->display_payment_type();
		$this->load->view('add_expense_data',$data);

	}
	 public function add_expense_data_admin()
	{
		$user=$this->session->userdata('user');
        $data['user']=$user;
        $data['years']=$this->AdminModel->display_years();
        $data['months']=$this->AdminModel->display_months();
        $data['payment_type_add']=$this->AdminModel->display_payment_type();
		$this->load->view('add_expense_data_admin',$data);
	}
  public function add_expense_data_done()
	{
					
					 
		            $this->form_validation->set_rules('expense_date', 'Expense Date', 'required');
		            $this->form_validation->set_rules('year', 'Year', 'required');
			 		   $this->form_validation->set_rules('month', 'Month', 'required');
			 		   $this->form_validation->set_rules('amount', 'Amount', 'required');
			 		   $this->form_validation->set_rules('payment_type', 'Payment Type', 'required');
	                $this->form_validation->set_rules('purpose', 'Purpose', 'required');
	                $this->form_validation->set_rules('status', 'Status', 'required');
	                $this->form_validation->set_rules('spend_by', 'Spend By', 'required');
	                if($this->form_validation->run()){  
						
                	    $formarray=array(  'user'=>$this->input->post('user'),
                	                       'expense_date' =>$this->input->post('expense_date'),
                	                       'year' =>$this->input->post('year'),
                	                       'month' =>$this->input->post('month'),
				  	       					'amount'  =>$this->input->post('amount'),
				  	       					'payment_type'  =>$this->input->post('payment_type'),
							    	         'purpose' => $this->input->post('purpose'),
							    	         'status' => $this->input->post('status'),
							    	          'spend_by' => $this->input->post('spend_by')
			
							    	             	);
                	       
                	       
                	        
                           $this->AdminModel->add_expense_data_done_now($formarray);
                			$this->session->set_flashdata('success_msg','Expense Data Added Successfully');
			                 $user=$this->session->userdata('user');
        				      $data['user']=$user;
        				      $user1=$user1=$user['username'];
		                      $data['expense']=$this->AdminModel->display_expense_Data_user($user1);
						      $this->load->view('display_expense_data',$data);
			             
                		}else{
                	       //$this->session->set_flashdata('error_msg','Invalid Details'); 
                	       //$data['img_error'] =$this->upload->display_errors(); 
                	       $user=$this->session->userdata('user');
        				       $data['user']=$user; 
        				       $data['payment_type_add']=$this->AdminModel->display_payment_type();       
			                $this->load->view('add_expense_data',$data);
						 }   
                			

                
		
	}
	public function add_expense_data_done_admin()
	{
						
		        
			 	    $this->form_validation->set_rules('year', 'Year', 'required');
			 		$this->form_validation->set_rules('month', 'Month', 'required');
			 		$this->form_validation->set_rules('amount', 'Amount', 'required');
			 		$this->form_validation->set_rules('payment_type', 'Payment Type', 'required');
	                $this->form_validation->set_rules('purpose', 'Purpose', 'required');
	                $this->form_validation->set_rules('status', 'Status', 'required');
	                $this->form_validation->set_rules('spend_by', 'Spend By', 'required');
	                if($this->form_validation->run()){  
						
                	    $formarray=array(
                	                       'user'=>$this->input->post('user'),
                	                       'expense_date' =>$this->input->post('expense_date'),
                	                       'year' =>$this->input->post('year'),
                	                       'month' =>$this->input->post('month'),
				  	       					'amount'  =>$this->input->post('amount'),
				  	       					'payment_type'  =>$this->input->post('payment_type'),
							    	         'purpose' => $this->input->post('purpose'),
							    	         'status' => $this->input->post('status'),
							    	          'spend_by' => $this->input->post('spend_by')
			
							    	             	);
                	       
                	       
                	        
                            $this->AdminModel->add_expense_data_done_now($formarray);
                			$this->session->set_flashdata('success_msg','Expense Data Added Successfully');
			               $data['expense']=$this->AdminModel->display_expense_Data_done();
			               $user=$this->session->userdata('user');
        				   $data['user']=$user;
						   $this->load->view('display_expense_data_admin',$data);
			             
                		}else{
                	       //$this->session->set_flashdata('error_msg','Invalid Details'); 
                	       //$data['img_error'] =$this->upload->display_errors();  
                	       $user=$this->session->userdata('user');
        				   $data['user']=$user;       
			               $this->load->view('add_expense_data_admin',$data);
						 }   
                			

                
		
	}      
	public function display_expense_data()
	{
		$user=$this->session->userdata('user');
        $data['user']=$user;
        $user1=$user1=$user['username'];
		$data['expense']=$this->AdminModel->display_expense_Data_user($user1);
		$this->load->view('display_expense_data',$data);
	}  
	public function display_expense_data_admin()
	{
		$data['expense']=$this->AdminModel->display_expense_Data_done();
		$user=$this->session->userdata('user');
        $data['user']=$user;  
		$this->load->view('display_expense_data_admin',$data);
	}  
	public function display_archival_data()
	{
		$user=$this->session->userdata('user');
        $data['user']=$user;  
        $user1=$user['username'];
		$data['archive']=$this->AdminModel->display_archival_data_user($user1);
		$this->load->view('display_archive_data',$data);
	}
	public function display_archival_data_admin()
	{
		$user=$this->session->userdata('user');
        $data['user']=$user;  
		$data['archive']=$this->AdminModel->display_archival_data_done();
		$this->load->view('display_archive_data_admin',$data);
	}
	public function display_archival_sales_data()
	{
		$user=$this->session->userdata('user');
        $data['user']=$user;  
        $user1=$user['username'];
		$data['archive_sales']=$this->AdminModel->display_archival_sales_data_done($user1);
		$this->load->view('display_archive_sales_data',$data);
	}
	public function display_archival_sales_data_admin()
	{
		$user=$this->session->userdata('user');
        $data['user']=$user;  
		$data['archive_sales_admin']=$this->AdminModel->display_archival_sales_data_done_admin();
		$this->load->view('display_archive_sales_data_admin',$data);
	}
	public function edit_expense_data()
	{
					 $data['expense']=$this->AdminModel->edit_expense_data_done($this->uri->segment('3'));
					 $user=$this->session->userdata('user');
        			 $data['user']=$user;  
        			 $data['years']=$this->AdminModel->display_years();
                     $data['months']=$this->AdminModel->display_months();
		    	     $this->load->view('edit_expense_data',$data);
	}
	public function edit_expense_data_admin()
	{
					 $data['expense']=$this->AdminModel->edit_expense_data_done($this->uri->segment('3'));
					 $user=$this->session->userdata('user');
        			 $data['user']=$user;
        			 $data['years']=$this->AdminModel->display_years();
                     $data['months']=$this->AdminModel->display_months();
		    	     $this->load->view('edit_expense_data_admin',$data);
	}
	 public function update_expense_data()
	{
						
		        
			 	    $this->form_validation->set_rules('year', 'Year', 'required');
			 		$this->form_validation->set_rules('month', 'Month', 'required');
			 		$this->form_validation->set_rules('amount', 'Amount', 'required');
			 		$this->form_validation->set_rules('payment_type', 'Payment Type', 'required');
	                $this->form_validation->set_rules('purpose', 'Purpose', 'required');
	                $this->form_validation->set_rules('status', 'Status', 'required');
	                $this->form_validation->set_rules('spend_by', 'Spend By', 'required');
	                if($this->form_validation->run()){  
						
                	    $formarray=array(
                	                       'user' =>$this->input->post('user'),
                	                       'expense_date' =>$this->input->post('expense_date'),
                	                       'year' =>$this->input->post('year'),
                	                       'month' =>$this->input->post('month'),
				  	       					'amount'  =>$this->input->post('amount'),
				  	       					'payment_type'  =>$this->input->post('payment_type'),
							    	         'purpose' => $this->input->post('purpose'),
							    	         'status' => $this->input->post('status'),
							    	          'spend_by' => $this->input->post('spend_by')
			
							    	             	);
                	       
                	       
                	       
                	        
                            $this->AdminModel->update_expense_data_done($this->uri->segment('3'),$formarray);
                			$this->session->set_flashdata('success_msg','Expense Data Updated Successfully');
			                $user=$this->session->userdata('user');
        				   $data['user']=$user;
        				   $user1=$user1=$user['username'];
        				   $data['expense']=$this->AdminModel->display_expense_Data_user($user1);
						   $this->load->view('display_expense_data',$data);
			             
                		}else{
                	       //$this->session->set_flashdata('error_msg','Invalid Details'); 
                	       //$data['img_error'] =$this->upload->display_errors(); 
                	       $user=$this->session->userdata('user');
        				   $data['user']=$user;          
			               $this->load->view('edit_expense_data',$data);
						 }   
                			

                
		
	}  
	 public function update_expense_data_admin()
	{
						
		        
			 	    $this->form_validation->set_rules('year', 'Year', 'required');
			 		$this->form_validation->set_rules('month', 'Month', 'required');
			 		$this->form_validation->set_rules('amount', 'Amount', 'required');
			 		$this->form_validation->set_rules('payment_type', 'Payment Type', 'required');
	                $this->form_validation->set_rules('purpose', 'Purpose', 'required');
	                $this->form_validation->set_rules('status', 'Status', 'required');
	                $this->form_validation->set_rules('spend_by', 'Spend By', 'required');
	                if($this->form_validation->run()){  
						
                	    $formarray=array(
                	                        'user' =>$this->input->post('user'),
                	                       'expense_date' =>$this->input->post('expense_date'),
                	                       'year' =>$this->input->post('year'),
                	                       'month' =>$this->input->post('month'),
				  	       					'amount'  =>$this->input->post('amount'),
				  	       					'payment_type'  =>$this->input->post('payment_type'),
							    	         'purpose' => $this->input->post('purpose'),
							    	         'status' => $this->input->post('status'),
							    	          'spend_by' => $this->input->post('spend_by')
			
							    	             	);
                	       
                	       
                	        
                            $this->AdminModel->update_expense_data_done($this->uri->segment('3'),$formarray);
                			$this->session->set_flashdata('success_msg','Expense Data Updated Successfully');
			               $data['expense']=$this->AdminModel->display_expense_Data_done();
			               $user=$this->session->userdata('user');
        				   $data['user']=$user;  
						   $this->load->view('display_expense_data_admin',$data);
			             
                		}else{
                	       //$this->session->set_flashdata('error_msg','Invalid Details'); 
                	       //$data['img_error'] =$this->upload->display_errors();
                	       $user=$this->session->userdata('user');
        				   $data['user']=$user;           
			               $this->load->view('edit_expense_data_admin',$data);
						 }   
                			

                
		
	}   
		public function delete_expense()
	{
					
			        $this->AdminModel->delete_expense_data($this->uri->segment('3'));
			        $this->session->set_flashdata('del_msg','Expense Deleted Successfully');
			        $user=$this->session->userdata('user');
        			$data['user']=$user;  
			        $data['expense']=$this->AdminModel->display_expense_Data_done();
				    $this->load->view('display_expense_data',$data);

	}
			public function delete_expense_acct()
	{
					
			        $this->AdminModel->delete_expense_data($this->uri->segment('3'));
			        $this->session->set_flashdata('del_msg','Expense Deleted Successfully');
			        $data['expense']=$this->AdminModel->display_expense_Data_done();
			        $user=$this->session->userdata('user');
        			$data['user']=$user;  
				    $this->load->view('display_expense_data_admin',$data);

	}
	public function expense_logout(){
				$this->session->unset_userdata('user');
				$this->load->view('dashboard');
			}
    public function add_user()
	{ 
		$user=$this->session->userdata('user');
        $data['user']=$user; 
		$this->load->view('add_user',$data);
	}
	  public function add_user_done()
	{
						
		        
					
		               $this->form_validation->set_rules('username', 'username which trying to add is already present', 'required|is_unique[tbl_admin.username]');
			 		   $this->form_validation->set_rules('password', 'Password', 'required');
			 		   $this->form_validation->set_rules('user_type', 'User Type', 'required');
			 		   $user_type = implode(',', $_POST['user_type']);
			 		    //die();
	               // if($this->form_validation->run()){ 
                      
                       
                	       if($user_type='Ordering' and 'Manufacturing' and 'Expense' and 'Sales'){
                        	   $user_type = implode(',', $_POST['user_type']);                    	
                              $formarray=array('username' =>$this->input->post('username'),
                	                       'password' =>$this->input->post('password'),
				  	       					'user_type'  =>$user_type,
				  	       					'Ordering'=>1,
				  	       					'Manufacturing'=>1,
				  	       					'Expense'=>1,
				  	       					'Sales'=>1,
				  	       					'Available Stock'=>1
				  	       				
				  
				  	       			);
                	       
                	        }elseif($user_type='Ordering' and $user_type='Manufacturing'){
                	             $user_type = implode(',', $_POST['user_type']);                    	
                                 $formarray=array('username' =>$this->input->post('username'),
                	                       'password' =>$this->input->post('password'),
				  	       					'user_type'  =>$user_type,
				  	       					'Ordering'=>1,
				  	       					'Manufacturing'=>1
				  	       				
				  
				  	       			);
                	        }elseif($user_type='Ordering' and $user_type='Expense'){
                	             $user_type = implode(',', $_POST['user_type']);                    	
                                 $formarray=array('username' =>$this->input->post('username'),
                	                       'password' =>$this->input->post('password'),
				  	       					'user_type'  =>$user_type,
				  	       					'Ordering'=>1,
				  	       				'Expense'=>1
				  	       					
                	          );  
                	        }else{
                	             $user_type = implode(',', $_POST['user_type']);                    	
                                 $formarray=array('username' =>$this->input->post('username'),
                	                       'password' =>$this->input->post('password'),
				  	       					'user_type'  =>$user_type,
				  	       					'Ordering'=>1,
				  	       				'Expense'=>1
				  	       				);
                	            
                	        }
                	       
                            $this->AdminModel->add_user_done_now($formarray);
                			$this->session->set_flashdata('success_msg','User Added Successfully');
			               $data['users']=$this->AdminModel->display_users_Data_done();
			               $user=$this->session->userdata('user');
        				   $data['user']=$user;
						   $this->load->view('display_users_data',$data);
			             
                		//}else{
                	       //$this->session->set_flashdata('error_msg','Invalid Details'); 
                	       //$data['img_error'] =$this->upload->display_errors(); 
                	       //$user=$this->session->userdata('user');
        				   //$data['user']=$user;        
			               //$this->load->view('add_expense_data',$data);
						 //}   
                			

                
		
	}
	  public function update_user_done()
	{
						
		        
					
		            $this->form_validation->set_rules('username', 'Username', 'required');
			 		$this->form_validation->set_rules('password', 'Password', 'required');
			 		$this->form_validation->set_rules('user_type', 'User Type', 'required');
			 		$user_type = implode(',', $_POST['user_type']);
	               // if($this->form_validation->run()){ 

                	    $formarray=array('username' =>$this->input->post('username'),
                	                       'password' =>$this->input->post('password'),
				  	       					'user_type'  =>$user_type
				  	       			);
                	       
                	       
                	        
                            $this->AdminModel->update_user_done_now($this->uri->segment('3'),$formarray);
                			$this->session->set_flashdata('success_msg','User Updated Successfully');
			               $data['users']=$this->AdminModel->display_users_Data_done();
			               $user=$this->session->userdata('user');
        				   $data['user']=$user;
						   $this->load->view('display_users_data',$data);
			             
                		//}else{
                	       //$this->session->set_flashdata('error_msg','Invalid Details'); 
                	       //$data['img_error'] =$this->upload->display_errors(); 
                	       //$user=$this->session->userdata('user');
        				   //$data['user']=$user;        
			               //$this->load->view('add_expense_data',$data);
						 //}   
                			

                
		
	}
	public function display_users_data()
	{
		$user=$this->session->userdata('user');
        $data['user']=$user;  
		$data['users']=$this->AdminModel->display_users_Data_done();
		$this->load->view('display_users_data',$data);
	}  
	public function delete_user()
	{
					
			        $this->AdminModel->delete_user_data($this->uri->segment('3'));
			        $this->session->set_flashdata('del_msg','User Deleted Successfully');
			        $user=$this->session->userdata('user');
        			$data['user']=$user;
			        $data['users']=$this->AdminModel->display_users_Data_done();
					$this->load->view('display_users_data',$data);

	}
	public function edit_user_data()
	{

					 
					 $user=$this->session->userdata('user');
                     $data['user']=$user;
					 $data['edit_user']=$this->AdminModel->edit_user_data_done($this->uri->segment('3'));
		    	     $this->load->view('edit_user',$data);
	}
	public function change_password(){
		 		  $user=$this->session->userdata('user');
         		  $data['user']=$user;
         		  $data['get_pass']=$this->AdminModel->get_old_password($this->uri->segment('3'));
                  $this->load->view('change_password',$data);
	}
	public function change_password_done()
	{ 
		
				$this->old_password();
				$this->form_validation->set_rules('old_password', 'Old Password', 'trim|required');
                $this->form_validation->set_rules('new_password', 'New Password', 'trim|required'); 
                $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|matches[new_password]'); 
                
                 $new_password = $this->input->post('new_password');
                 $pswd=$this->AdminModel->change_password_done_now($new_password,$this->uri->segment('3'));
                  $user=$this->session->userdata('user');
         		  $data['user']=$user;
         		  $data['users']=$this->AdminModel->display_users_Data_done();
         		  $this->session->set_flashdata('ch_msg','Password Changed Successfully');
                  $this->load->view('display_users_data',$data);

			  

			  	  //$user=$this->session->userdata('user');
         		  //$data['user']=$user;
         		  //$this->session->set_flashdata('err_msg','Password Not Matches');
         		   //$data['get_pass']=$this->AdminModel->get_old_password($this->uri->segment('3'));
                  //$this->load->view('change_password',$data);
			  
	}
	public function old_password(){
 
			      $password = $this->input->post('password');
              	  $pswd=$this->AdminModel->old_password_done($password,$this->uri->segment('3'));
              	  if($pswd>0){
              	  	return true;
              	  }else{
              	  	return false;
              	  }            	  

			}
   public function controls()
	{

					 
					 $user=$this->session->userdata('user');
                     $data['user']=$user;
					
		    	     $this->load->view('controls',$data);
	}
	 public function add_year(){
	 	$user=$this->session->userdata('user');
        $data['user']=$user;
		$this->load->view('add_year',$data);
	 }
	 public function add_year_done()
	{
		$this->form_validation->set_rules('year', ' year which trying to add is already present', 'required|is_unique[tbl_years.year]');
			 		
	                if($this->form_validation->run()){  
						
                	    $formarray=array('year' =>$this->input->post('year')
                	                      
			
							    	             	);
                	       
                	       
                	        
                            $this->AdminModel->add_year_data_done_now($formarray);
                			$this->session->set_flashdata('success_yr_msg','Year Added Successfully');
			               
			               $user=$this->session->userdata('user');
        				   $data['user']=$user;
						   $this->load->view('controls',$data);
			             
                		}else{
                	       
                	       $user=$this->session->userdata('user');
        				   $data['user']=$user;       
			               $this->load->view('add_year',$data);
						 }   
                			


	}
	 public function add_month(){
	 	$user=$this->session->userdata('user');
        $data['user']=$user;
		$this->load->view('add_month',$data);
	 }
	 public function add_month_done()
	{
		$this->form_validation->set_rules('month', 'month which trying to add is already present', 'required|is_unique[tbl_months.month]');
			 		
	                if($this->form_validation->run()){  
						
                	    $formarray=array('month' =>$this->input->post('month')
                	                      
			
							    	             	);
                	       
                	       
                	        
                            $this->AdminModel->add_month_data_done_now($formarray);
                			$this->session->set_flashdata('success_mth_msg','Month Added Successfully');
			               
			               $user=$this->session->userdata('user');
        				   $data['user']=$user;
						   $this->load->view('controls',$data);
			             
                		}else{
                	       
                	       $user=$this->session->userdata('user');
        				   $data['user']=$user;       
			               $this->load->view('add_month',$data);
						 }   
                			


	}
	 public function add_product_type(){
	 	$user=$this->session->userdata('user');
        $data['user']=$user;
		$this->load->view('add_product_type',$data);
	 }
	 public function add_product_type_done()
	{
		$this->form_validation->set_rules('product_type', 'product type which trying to add is already present', 'required|is_unique[tbl_product_types.product_type]');
			 		
	                if($this->form_validation->run()){  
						
                	    $formarray=array('product_type' =>$this->input->post('product_type')
                	                      
			
							    	             	);
                	       
                	       
                	        
                            $this->AdminModel->add_product_type_done_now($formarray);
                			$this->session->set_flashdata('success_pt_msg','Product Type Added Successfully');
			               
			               $user=$this->session->userdata('user');
        				   $data['user']=$user;
						   $this->load->view('controls',$data);
			             
                		}else{
                	       
                	       $user=$this->session->userdata('user');
        				   $data['user']=$user;       
			               $this->load->view('add_product_type',$data);
						 }   
                			


	}
	 public function add_product_code(){
	 	$user=$this->session->userdata('user');
        $data['user']=$user;
		$this->load->view('add_product_code',$data);
	 }
	 public function add_product_code_done()
	{
		$this->form_validation->set_rules('product_code', 'product code which trying to add is already present', 'required|is_unique[tbl_product_codes.product_code]');
		$this->form_validation->set_rules('product_description', 'Product Description', 'required');
			 		
	                if($this->form_validation->run()){  
						
                	    $formarray=array('product_code' =>$this->input->post('product_code'),
                	                     'product_description' =>$this->input->post('product_description')
                	                      
		
							    	             	);
                	       
                	       
                	        
                            $this->AdminModel->add_product_code_done_now($formarray);
                			$this->session->set_flashdata('success_pc_msg','Product Code Added Successfully');
			               
			               $user=$this->session->userdata('user');
        				   $data['user']=$user;
						   $this->load->view('controls',$data);
			             
                		}else{
                	       
                	       $user=$this->session->userdata('user');
        				   $data['user']=$user;       
			               $this->load->view('add_product_code',$data);
						 }   
                			


	}
	 public function add_payment_type(){
	 	$user=$this->session->userdata('user');
      $data['user']=$user;
      $data['payment_type_add']=$this->AdminModel->display_payment_type();
		$this->load->view('add_payment_type',$data);
	 }
	 public function add_payment_type_done()
	{
		$this->form_validation->set_rules('payment_type_add', 'Payment type which trying to add is already present', 'required|is_unique[tbl_payment_type.payment_type_add]');
			 		
	                if($this->form_validation->run()){  
						
                	    $formarray=array('payment_type_add' =>$this->input->post('payment_type_add')
                	                     
                	                     );
                	       
                	       
                	        
                            $this->AdminModel->add_payment_type_done_now($formarray);
                			    $this->session->set_flashdata('success_pt_msg','Payment Type Added Successfully');
			               
			               $user=$this->session->userdata('user');
        				      $data['user']=$user;
        				      $data['payment_type_add']=$this->AdminModel->display_payment_type();
						      $this->load->view('controls',$data);
			             
                		}else{
                	       
                	       $user=$this->session->userdata('user');
        				   	 $data['user']=$user;  
        				   	 $data['payment_type_add']=$this->AdminModel->display_payment_type();     
			               $this->load->view('add_payment_type',$data);
						   }   
                			


	}
	 public function add_category(){
	 	$user=$this->session->userdata('user');
        $data['user']=$user;
		$this->load->view('add_category',$data);
	 }
	 	 public function add_category_done()
	{
		$this->form_validation->set_rules('category', 'Category which trying to add is already present', 'required|is_unique[tbl_category.category]');
		
			 		
	                if($this->form_validation->run()){  
						
                	    $formarray=array('category' =>$this->input->post('category')
                	                     
                	                      
		
							    	             	);
                	       
                	       
                	        
                            $this->AdminModel->add_category_done_now($formarray);
                			$this->session->set_flashdata('success_ct_msg','Category Added Successfully');
			               
			               $user=$this->session->userdata('user');
        				   $data['user']=$user;
						   $this->load->view('controls',$data);
			             
                		}else{
                	       
                	       $user=$this->session->userdata('user');
        				   $data['user']=$user;       
			               $this->load->view('add_category',$data);
						 }   
                			


	}
	 public function add_subcategory(){
	 	$user=$this->session->userdata('user');
        $data['user']=$user;
        $data['cat']=$this->AdminModel->display_category();
		$this->load->view('add_subcategory',$data);
	 }
	 	 	 public function add_subcategory_done()
	{
		$this->form_validation->set_rules('category', 'Category', 'required');
		$this->form_validation->set_rules('subcategory', 'Subcategory which trying to add is already present', 'required|is_unique[tbl_subcategory.subcategory]');
		
			 		
	                if($this->form_validation->run()){  
						
                	    $formarray=array('category_id' =>$this->input->post('category'),
                	                     'subcategory' =>$this->input->post('subcategory')
                	                     
                	                      
		
							    	             	);
                	       
                	       
                	        
                            $this->AdminModel->add_subcategory_done_now($formarray);
                			$this->session->set_flashdata('success_sct_msg','Subcategory Added Successfully');
			               
			               $user=$this->session->userdata('user');
        				   $data['user']=$user;
						   $this->load->view('controls',$data);
			             
                		}else{
                	       
                	       $user=$this->session->userdata('user');
        				   $data['user']=$user;       
			               $this->load->view('add_subcategory',$data);
						 }   
                			


	}
	 public function add_material(){
	 	$user=$this->session->userdata('user');
        $data['user']=$user;
		$this->load->view('add_material',$data);
	 }
	 	 	 public function add_material_done()
	{
		$this->form_validation->set_rules('material', 'Material','required|is_unique[tbl_material.material]');
		
		
			 		
	                if($this->form_validation->run()){  
						
                	    $formarray=array('material' =>$this->input->post('material')
                	                     
                	                      
		
							    	             	);
                	       
                	       
                	        
                            $this->AdminModel->add_material_done_now($formarray);
                			$this->session->set_flashdata('success_mct_msg','Material Added Successfully');
			               
			               $user=$this->session->userdata('user');
        				   $data['user']=$user;
						   $this->load->view('controls',$data);
			             
                		}else{
                	       
                	       $user=$this->session->userdata('user');
        				   $data['user']=$user;       
			               $this->load->view('add_material',$data);
						 }   
                			


	}
	 public function add_material_size(){
	 	$user=$this->session->userdata('user');
        $data['user']=$user;
		$this->load->view('add_material_size',$data);
	 }
	 	 	 public function add_material_size_done()
	{
		$this->form_validation->set_rules('material_size', 'Material size', 'required|is_unique[tbl_material_size.material_size]');
		
		
			 		
	                if($this->form_validation->run()){  
						
                	    $formarray=array('material_size' =>$this->input->post('material_size')
                	                     
                	                      
		
							    	             	);
                	       
                	       
                	        
                            $this->AdminModel->add_material_size_done_now($formarray);
                			$this->session->set_flashdata('success_msct_msg','Material Size Added Successfully');
			               
			               $user=$this->session->userdata('user');
        				   $data['user']=$user;
						   $this->load->view('controls',$data);
			             
                		}else{
                	       
                	       $user=$this->session->userdata('user');
        				   $data['user']=$user;       
			               $this->load->view('add_material_size',$data);
						 }   
                			


	}
	   	public function sales_login_done()
	{
	          
              $this->form_validation->set_rules('username', 'Username', 'trim|required');
              $this->form_validation->set_rules('password', 'Password', 'trim|required'); 
              if($this->form_validation->run()==true)
              {
              	  $username = $this->input->post('username');
              	  $password=$this->input->post('password');
              	  $user=$this->AdminModel->check_sales_login($username,$password);
              	  //print_r($user);
              	  if(!empty($user)){
              	  	$sessArray['id']=$user['id'];
              	  	$sessArray['username']=$user['username'];
              	  	//print_r($sessArray);
              	  	$this->session->set_userdata('user',$sessArray);
              	  	$user=$this->session->userdata('user');
              	    $data['user']=$user;
              	    $user1=$user['username'];
		            $data['sales']=$this->AdminModel->display_sales_data_user($user1);
              	  	$this->session->set_flashdata('succ_sal_msg','Sales Person Login Successfully');
              	  	$this->load->view('display_sales_data',$data);
              	  	}else{
              	  	$this->session->set_flashdata('error_msg','Invalid Email or Password');
              	  	$this->load->view('sales_login');
              	  }
              }
            
  }
  public function add_sales_data()
	{ 
		//$this->get_product_data();
		$user=$this->session->userdata('user');
        $data['user']=$user; 
        $data['product_codes']=$this->AdminModel->display_products_codes();
        //$data['cat']=$this->AdminModel->display_category();
        //$data['subcat']=$this->AdminModel->display_subcategory();
        //$data['mat']=$this->AdminModel->display_material();
        //$data['mat_s']=$this->AdminModel->display_material_size();
		$this->load->view('add_sales_data',$data);
	}
	public function add_sales_data_admin()
	{ 
		$user=$this->session->userdata('user');
        $data['user']=$user; 
        $data['product_codes']=$this->AdminModel->display_products_codes();
        $data['cat']=$this->AdminModel->display_category();
        $data['subcat']=$this->AdminModel->display_subcategory();
        $data['mat']=$this->AdminModel->display_material();
        $data['mat_s']=$this->AdminModel->display_material_size();
		$this->load->view('add_sales_data_admin',$data);
	}
	 public function add_sales_data_done()
	{
	    //$this->form_validation->set_rules('category', 'Category is', 'required');
		//$this->form_validation->set_rules('subcategory', 'Subcategory is', 'required');
		//$this->form_validation->set_rules('material', 'Material is', 'required');
	    //$this->form_validation->set_rules('material_size', 'Material size is', 'required');
	    
	    $this->form_validation->set_rules('mycheck', 'GST/NON-GST', 'required');
	    $this->form_validation->set_rules('bill_to', 'Bill To', 'required');
		$this->form_validation->set_rules('product_code', 'Product Code', 'required');
		$this->form_validation->set_rules('sale_amount', 'Sale Amount', 'required|greater_than[tbl_sales.factory_out_price]');
		$this->form_validation->set_rules('product_quantity', 'Product Quantity', 'required|greater_than[0]');
		$this->form_validation->set_rules('transportation_expense', 'Transportation Expense', 'required');
		$this->form_validation->set_rules('packaging_expense', 'Packaging Expense', 'required');
		$this->form_validation->set_rules('sale_amount', 'Sale Amount', 'required');
		$this->form_validation->set_rules('discount', 'Discount', 'required');
	
						
	                if($this->form_validation->run()){  
						  $invoice_no='VA00';
					      $query = $this->db->query("SELECT id FROM tbl_sales ORDER BY id DESC LIMIT 1");
                          $i = $query->row()->id;
                          $month=date("M");
                          $year=date("Y");

						
                	    $formarray=array(
                	                     'month'=>$month,
                	                     'year'=>$year,
                	                     'invoice_no' =>'VA00'.$i++,
                	                     'user' =>$this->input->post('user'),
                	                     'bill_to' =>$this->input->post('bill_to'),
                	                     'mycheck' =>$this->input->post('mycheck'),
                	                     'gstno' =>$this->input->post('gstno'),
                	                     //'category' => $this->input->post('category'),
				  	       				 //'subcategory'  =>$this->input->post('subcategory'),
                	                     //'material'  =>$this->input->post('material'),
				  	       				 //'material_size'  =>$this->input->post('material_size'),
                	    				 'product_code' =>$this->input->post('product_code'),
                	    	             'product_description' =>$this->input->post('product_description'),
                	    				'factory_out_price' =>$this->input->post('factory_out_price'),
                	    				'sale_amount' =>$this->input->post('sale_amount'),
                	    				'product_quantity' =>$this->input->post('product_quantity'),
                	    				'taxable_amount' =>$this->input->post('taxable_amount'),
                	    				'transportation_expense' =>$this->input->post('transportation_expense'),
                	    				'packaging_expense' =>$this->input->post('packaging_expense'),
                	    				'total_amount' =>$this->input->post('total_amount'),
                	    				'discount' =>$this->input->post('discount'),
                	    				'total_taxable_amount' =>$this->input->post('total_taxable_amount'),
                	    				'CGST' =>$this->input->post('cgst'),
                	    				'SGST' =>$this->input->post('sgst'),
                	    				'Amount' =>$this->input->post('Amount'),
                	    				'balance'=>$this->input->post('balance'),
                	    				'status'=>1
                	                      
			
							    	             	);
                	       

                	        
                            $this->AdminModel->add_sales_data_now($formarray);
                			$this->session->set_flashdata('success_sales_msg','Sales Data Added Successfully');
			               
			               $user=$this->session->userdata('user');
        				   $data['user']=$user;
        				   $user1=$user['username'];
		                   $data['sales']=$this->AdminModel->display_sales_data_user($user1);
						   $this->load->view('display_sales_data',$data);
			             
                		}else{
                	       
                	       $user=$this->session->userdata('user');
        				   $data['user']=$user;       
			               $this->load->view('add_sales_data',$data);
						 }   
                			


	}
	 public function add_sales_data_done_admin()
	{
		$this->form_validation->set_rules('bill_to', 'Bill To', 'required');
		$this->form_validation->set_rules('mycheck', 'GST/NON - GST', 'required');
		//$this->form_validation->set_rules('category', 'Category is', 'required');
		//$this->form_validation->set_rules('subcategory', 'Subcategory is', 'required');
		//$this->form_validation->set_rules('material', 'Material is', 'required');
	    //$this->form_validation->set_rules('material_size', 'Material size is', 'required');
		$this->form_validation->set_rules('product_code', 'Product Code', 'required');
		$this->form_validation->set_rules('sale_amount', 'Sale Amount', 'required');
		//$this->form_validation->set_rules('product_description', 'Product Description', 'required');
		//$this->form_validation->set_rules('factory_out_price', 'Unit Price', 'required');
		$this->form_validation->set_rules('product_quantity', 'Product Quantity', 'required|greater_than[0]');
		$this->form_validation->set_rules('transportation_expense', 'Transportation Expense', 'required');
		$this->form_validation->set_rules('packaging_expense', 'Packaging Expense', 'required');
		$this->form_validation->set_rules('discount', 'Discount', 'required');
	
						
	                if($this->form_validation->run()){  
						 $invoice_no='VA00';
					    $query = $this->db->query("SELECT id FROM tbl_sales ORDER BY id DESC LIMIT 1");
                        $i = $query->row()->id;
                        $month=date("M");
                        $year=date("Y");
                	    $formarray=array(
                	                     'month'=>$month,
                	                     'year'=>$year,
                	                     'invoice_no' =>'VA00'.$i++,
                	                     'user' =>$this->input->post('user'),
                	                     'bill_to' =>$this->input->post('bill_to'),
                	                     'mycheck' =>$this->input->post('mycheck'),
                	                     'gstno' =>$this->input->post('gstno'),
                	                     //'category' => $this->input->post('category'),
				  	       				 //'subcategory'  =>$this->input->post('subcategory'),
                	                     //'material'  =>$this->input->post('material'),
				  	       				 //'material_size'  =>$this->input->post('material_size'),
                	    				 'product_code' =>$this->input->post('product_code'),
                	    	             'product_description' =>$this->input->post('product_description'),
                	    				'factory_out_price' =>$this->input->post('factory_out_price'),
                	    				'sale_amount' =>$this->input->post('sale_amount'),
                	    				'product_quantity' =>$this->input->post('product_quantity'),
                	    				'taxable_amount' =>$this->input->post('taxable_amount'),
                	    				'transportation_expense' =>$this->input->post('transportation_expense'),
                	    				'packaging_expense' =>$this->input->post('packaging_expense'),
                	    				'total_amount' =>$this->input->post('total_amount'),
                	    				'discount' =>$this->input->post('discount'),
                	    				'total_taxable_amount' =>$this->input->post('total_taxable_amount'),
                	    				'CGST' =>$this->input->post('cgst'),
                	    				'SGST' =>$this->input->post('sgst'),
                	    				'Amount' =>$this->input->post('Amount'),
                	    				'balance'=>$this->input->post('balance'),
                	    				'status'=>1
                	                      
			
							    	             	);
                	       

                	        
                            $this->AdminModel->add_sales_data_now($formarray);
                			$this->session->set_flashdata('success_sales_msg','Sales Data Added Successfully');
			               
			               $user=$this->session->userdata('user');
        				   $data['user']=$user;
        				   $data['sales']=$this->AdminModel->display_sales_data_done();
						   $this->load->view('display_sales_data_admin',$data);
			             
                		}else{
                	       
                	       $user=$this->session->userdata('user');
        				   $data['user']=$user;       
			               $this->load->view('add_sales_data_admin',$data);
						 }   
                			


	}
	public function display_sales_data()
	{
		$user=$this->session->userdata('user');
        $data['user']=$user;
        $user1=$user['username'];
		$data['sales']=$this->AdminModel->display_sales_data_user($user1);
		$this->load->view('display_sales_data',$data);
	}
	public function display_sales_data_admin()
	{
		$user=$this->session->userdata('user');
        $data['user']=$user;
		$data['sales']=$this->AdminModel->display_sales_data_done();
		$this->load->view('display_sales_data_admin',$data);
	}
	public function edit_received()
	{
	                    $user=$this->session->userdata('user');
        			    $data['user']=$user; 
        			    $Amt = $this->uri->segment('4'); 
        			    $Balance = $this->uri->segment('6'); 
        			    $data['Balance']=$Balance;
        			    $data['Amt']=$Amt;
                        $data['sales_dt']=$this->AdminModel->edit_sales_data_done($this->uri->segment('3'));
		    	        $this->load->view('edit_received',$data);
	}
	public function edit_received_admin()
	{
	                    $user=$this->session->userdata('user');
        			    $data['user']=$user; 
        			    $Amt = $this->uri->segment('4'); 
        			    $Balance = $this->uri->segment('6'); 
        			    $data['Balance']=$Balance;
        			    $data['Amt']=$Amt;
                        $data['sales_dt']=$this->AdminModel->edit_sales_data_done($this->uri->segment('3'));
		    	        $this->load->view('edit_received_admin',$data);
	}
	public function edit_sales_data()
	{
	                    $user=$this->session->userdata('user');
        			    $data['user']=$user;  
					    $UnitPrice = $this->uri->segment('4');
						$total_taxable_amount = $this->uri->segment('5');
						$CGST = $this->uri->segment('6');
						$SGST = $this->uri->segment('7');
						$Amt = $this->uri->segment('8');
					    $received = $this->uri->segment('9');
						$Balance=$this->uri->segment('10');
						//die();
						$data['UnitPrice']=$UnitPrice;
						$data['total_taxable_amount']=$total_taxable_amount;
						$data['Balance']=$Balance;
						$data['Amt']=$Amt;
					    
					   
        			    $data['product_codes']=$this->AdminModel->display_products_codes();
        			    //$data['cat']=$this->AdminModel->display_category();
                        //$data['subcat']=$this->AdminModel->display_subcategory();
                        //$data['mat']=$this->AdminModel->display_material();
                        //$data['mat_s']=$this->AdminModel->display_material_size();
                        $data['sales_dt']=$this->AdminModel->edit_sales_data_done($this->uri->segment('3'));
		    	        $this->load->view('edit_sales_data',$data);
	}
	public function edit_sales_data_admin()
	{
	                    $user=$this->session->userdata('user');
        			    $data['user']=$user;  
	                    $UnitPrice = $this->uri->segment('4');
						$total_taxable_amount = $this->uri->segment('5');
						$CGST = $this->uri->segment('6');
						$SGST = $this->uri->segment('7');
						$Amt = $this->uri->segment('8');
					    $received = $this->uri->segment('9');
						$Balance=$this->uri->segment('10');
						$data['UnitPrice']=$UnitPrice;
						$data['total_taxable_amount']=$total_taxable_amount;
						$data['Balance']=$Balance;
						$data['Amt']=$Amt;
					 
					 
        			 $data['product_codes']=$this->AdminModel->display_products_codes();
        			 //$data['cat']=$this->AdminModel->display_category();
                     //$data['subcat']=$this->AdminModel->display_subcategory();
                     //$data['mat']=$this->AdminModel->display_material();
                     //$data['mat_s']=$this->AdminModel->display_material_size();
                     $data['sales_dt']=$this->AdminModel->edit_sales_data_done($this->uri->segment('3'));
		    	     $this->load->view('edit_sales_data_admin',$data);
	}
	public function update_received_amount(){
	    	          $pre=0;
	                  $pos=0;
					  $pre=$this->input->post('pre_received');	
                      $pos=$this->input->post('received');
                      $received=$pre+$pos;
                      $balance=$this->input->post('balance');
                      $Amount=$this->input->post('Amount');

                      //$status='';
                      //if($balance==0)
	                  //{
	                  //	$status=1;
	                  //}
                	    $formarray=array(
                	    				'received'=>$received,
                	    				'balance'=>$Amount-$received,
                	    				'Amount'=>$Amount
                	    				//'status'=>$status
                	    			
                	                      );
			
								    
                	   
                            $this->AdminModel->update_received_data($this->uri->segment('3'),$formarray);
                			$this->session->set_flashdata('success_sales_msg','Recived Amount Updated Successfully');
			               
			               $user=$this->session->userdata('user');
        				   $data['user']=$user;
        				   $user1=$user['username'];
        				   $data['sales']=$this->AdminModel->display_sales_data_user($user1);
        				   $data['codes']=$this->AdminModel->display_product_codes();
        				   //$data['cat']=$this->AdminModel->display_category();
                           //$data['subcat']=$this->AdminModel->display_subcategory();
                           //$data['mat']=$this->AdminModel->display_material();
                           //$data['mat_s']=$this->AdminModel->display_material_size();
						   $this->load->view('display_sales_data',$data);

}

public function update_received_amount_admin(){
	    	          $pre=0;
	                  $pos=0;
					  $pre=$this->input->post('pre_received');	
                      $pos=$this->input->post('received');
                      $received=$pre+$pos;
                      $balance=$this->input->post('balance');
                      $Amount=$this->input->post('Amount');

                      //$status='';
                      //if($balance==0)
	                  //{
	                  //	$status=1;
	                  //}
                	    $formarray=array(
                	    				'received'=>$received,
                	    				'balance'=>$Amount-$received,
                	    				'Amount'=>$Amount
                	    				//'status'=>$status
                	    			
                	                      );
			
								    
                	   
                            $this->AdminModel->update_received_data($this->uri->segment('3'),$formarray);
                			$this->session->set_flashdata('success_sales_msg','Recived Amount Updated Successfully');
			               
			               $user=$this->session->userdata('user');
        				   $data['user']=$user;
        				   $user1=$user['username'];
        				   $data['sales']=$this->AdminModel->display_sales_data_done();
        				   $data['codes']=$this->AdminModel->display_product_codes();
        				   //$data['cat']=$this->AdminModel->display_category();
                           //$data['subcat']=$this->AdminModel->display_subcategory();
                           //$data['mat']=$this->AdminModel->display_material();
                           //$data['mat_s']=$this->AdminModel->display_material_size();
						   $this->load->view('display_sales_data_admin',$data);

}
	 public function update_sales_data()
	{
		
		//die();
	    $this->form_validation->set_rules('bill_to', 'Bill To', 'required');
		//$this->form_validation->set_rules('category', 'Category is', 'required');
		//$this->form_validation->set_rules('subcategory', 'Subcategory is', 'required');
		//$this->form_validation->set_rules('material', 'Material is', 'required');
	    //$this->form_validation->set_rules('material_size', 'Material size is', 'required');
		$this->form_validation->set_rules('product_code', 'Product Code', 'required');
		$this->form_validation->set_rules('product_description', 'Product Description', 'required');
		$this->form_validation->set_rules('product_quantity', 'Product Quantity', 'required');
		$this->form_validation->set_rules('transportation_expense', 'Transportation Expense', 'required');
		$this->form_validation->set_rules('packaging_expense', 'Packaging Expense', 'required');
		$this->form_validation->set_rules('discount', 'Discount', 'required');
	
	                  $UnitPrice=$this->input->post('UnitPrice');
	                  $pre=0;
	                  $pos=0;
					  $pre=$this->input->post('pre_received');	
                      $pos=$this->input->post('received');
                      $received=$pre+$pos;
                    
                     $month=date("M");
                     $year=date("Y");
	                if($this->form_validation->run()){  
                	    $formarray=array(
                	                     'month'=>$month,
                	                     'year'=>$year,
                	                     'user' =>$this->input->post('user'),
                	                     'bill_to' =>$this->input->post('bill_to'),
                	                     //'category' => $this->input->post('category'),
				  	       				 //'subcategory'  =>$this->input->post('subcategory'),
                	                     //'material'  =>$this->input->post('material'),
				  	       				 //'material_size'  =>$this->input->post('material_size'),
                	    				 'product_code' =>$this->input->post('product_code'),
                	    	             'product_description' =>$this->input->post('product_description'),
                	    				'factory_out_price' =>$this->input->post('factory_out_price'),
                	    				'sale_amount' =>$this->input->post('sale_amount'),
                	    				'product_quantity' =>$this->input->post('product_quantity'),
                	    				'taxable_amount' =>$this->input->post('taxable_amount'),
                	    				'transportation_expense' =>$this->input->post('transportation_expense'),
                	    				'packaging_expense' =>$this->input->post('packaging_expense'),
                	    				'total_amount' =>$this->input->post('total_amount'),
                	    				'discount' =>$this->input->post('discount'),
                	    				'total_taxable_amount' =>$this->input->post('total_taxable_amount'),
                	    				'CGST' =>$this->input->post('cgst'),
                	    				'SGST' =>$this->input->post('sgst'),
                	    				'Amount' =>$this->input->post('Amount'),
                	    				'balance'=>$this->input->post('balance')
                	    				//'balance'=>$balance
                	                      
			
							    	    );//
                	       

                	        
                            $this->AdminModel->update_sales_data_now($this->uri->segment('3'),$formarray);
                			$this->session->set_flashdata('success_sales_msg','Sales Data Updated Successfully');
			               
			               $user=$this->session->userdata('user');
        				   $data['user']=$user;
        				   $user1=$user['username'];
        				   $data['sales']=$this->AdminModel->display_sales_data_user($user1);
        				   $data['codes']=$this->AdminModel->display_product_codes();
        				   //$data['cat']=$this->AdminModel->display_category();
                           //$data['subcat']=$this->AdminModel->display_subcategory();
                           //$data['mat']=$this->AdminModel->display_material();
                           //$data['mat_s']=$this->AdminModel->display_material_size();
						   $this->load->view('display_sales_data',$data);
			             
                		}else{
                	       
                	       $user=$this->session->userdata('user');
        				   $data['user']=$user; 
        				   $data['product_codes']=$this->AdminModel->display_products_codes();
        			 //$data['cat']=$this->AdminModel->display_category();
                     //$data['subcat']=$this->AdminModel->display_subcategory();
                     //$data['mat']=$this->AdminModel->display_material();
                     //$data['mat_s']=$this->AdminModel->display_material_size();
                     $data['sales_dt']=$this->AdminModel->edit_sales_data_done($this->uri->segment('3'));
			               $this->load->view('edit_sales_data',$data);
						 }   
                			


	}
	 public function update_sales_data_admin()
	{
		$this->form_validation->set_rules('bill_to', 'Bill To', 'required');
		//$this->form_validation->set_rules('category', 'Category is', 'required');
		//$this->form_validation->set_rules('subcategory', 'Subcategory is', 'required');
		//$this->form_validation->set_rules('material', 'Material is', 'required');
	    //$this->form_validation->set_rules('material_size', 'Material size is', 'required');
		$this->form_validation->set_rules('product_code', 'Product Code', 'required');
		$this->form_validation->set_rules('product_description', 'Product Description', 'required');
		$this->form_validation->set_rules('factory_out_price', 'Factory Out Price', 'required');
		$this->form_validation->set_rules('product_quantity', 'Product Quantity', 'required');
		$this->form_validation->set_rules('transportation_expense', 'Transportation Expense', 'required');
		$this->form_validation->set_rules('packaging_expense', 'Packaging Expense', 'required');
		$this->form_validation->set_rules('discount', 'Discount', 'required');
	                  $pre=0;
	                  $pos=0;
					  $pre=$this->input->post('pre_received');	
                      $pos=$this->input->post('received');
                      $received=$pre+$pos;
                     
					$month=date("M");
                    $year=date("Y");	
	                if($this->form_validation->run()){  
						
                	    $formarray=array(
                	                     'month'=>$month,
                	                     'year'=>$year,
                	                     'user' =>$this->input->post('user'),
                	                     'bill_to' =>$this->input->post('bill_to'),
                	                     //'category' => $this->input->post('category'),
				  	       				 //'subcategory'  =>$this->input->post('subcategory'),
                	                     //'material'  =>$this->input->post('material'),
				  	       				 //'material_size'  =>$this->input->post('material_size'),
                	    				 'product_code' =>$this->input->post('product_code'),
                	    	             'product_description' =>$this->input->post('product_description'),
                	    				'factory_out_price' =>$this->input->post('factory_out_price'),
                	    				'sale_amount' =>$this->input->post('sale_amount'),
                	    				'product_quantity' =>$this->input->post('product_quantity'),
                	    				'taxable_amount' =>$this->input->post('taxable_amount'),
                	    				'transportation_expense' =>$this->input->post('transportation_expense'),
                	    				'packaging_expense' =>$this->input->post('packaging_expense'),
                	    				'total_amount' =>$this->input->post('total_amount'),
                	    				'discount' =>$this->input->post('discount'),
                	    				'total_taxable_amount' =>$this->input->post('total_taxable_amount'),
                	    				'CGST' =>$this->input->post('cgst'),
                	    				'SGST' =>$this->input->post('sgst'),
                	    				'Amount' =>$this->input->post('Amount'),
                	    				'balance'=>$this->input->post('balance')
                	                      
                	                      
			
							    	             	);
                	       

                	        
                            $this->AdminModel->update_sales_data_now($this->uri->segment('3'),$formarray);
                			$this->session->set_flashdata('success_sales_msg','Sales Data Updated Successfully');
			               
			               $user=$this->session->userdata('user');
        				   $data['user']=$user;
        				   $data['sales']=$this->AdminModel->display_sales_data_done();
        				   $data['codes']=$this->AdminModel->display_product_codes();
        				   //$data['cat']=$this->AdminModel->display_category();
                           //$data['subcat']=$this->AdminModel->display_subcategory();
                           //$data['mat']=$this->AdminModel->display_material();
                           //$data['mat_s']=$this->AdminModel->display_material_size();
						   $this->load->view('display_sales_data_admin',$data);
			             
                		}else{
                	       
                	       $user=$this->session->userdata('user');
        				   $data['user']=$user;  
        				   $data['product_codes']=$this->AdminModel->display_products_codes();
        			       //$data['cat']=$this->AdminModel->display_category();
                           //$data['subcat']=$this->AdminModel->display_subcategory();
                           //$data['mat']=$this->AdminModel->display_material();
                           //$data['mat_s']=$this->AdminModel->display_material_size();
                           $data['sales_dt']=$this->AdminModel->edit_sales_data_done($this->uri->segment('3'));
			               $this->load->view('edit_sales_data_admin',$data);
						 }   
                			


	}
			public function delete_sales()
	{ 
					
			        $this->AdminModel->delete_sales_data($this->uri->segment('3'));
			        $this->session->set_flashdata('del_msg','Sales Deleted Successfully');
			        $user=$this->session->userdata('user');
        			  $data['user']=$user;  
			        $data['sales']=$this->AdminModel->display_sales_data_done();
				    $this->load->view('display_sales_data_admin',$data);

	}
	public function downloadinvoice(){
           	   $multiple_invoice=$this->AdminModel->get_multiple_invoice($this->uri->segment('3'));
           	   //print_r($multiple_invoice);
               

               
               	require_once(APPPATH.'helpers/tcpdf/tcpdf.php');
	// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('Invoice');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('helvetica', 11);

// add a page
$pdf->AddPage();
$pdf->SetFont('helvetica','B',11);  
$pdf->Cell(0, 5, 'VRATHA AGENCIES', 0, 1, 'R');
$pdf->SetFont('helvetica', 9);
$pdf->Cell(0, 5, 'Perumannur(PO) Palakkad,Kerala,India', 0, 1, 'R');
$pdf->Cell(0, 5, 'Phone no.: 9895800370 Email: sales@vratha.co.in', 0, 1, 'R');
$pdf->Cell(0, 5, 'GSTIN: 32AAXFV9176H1ZC, State: 32-Kerala', 0, 1, 'R');
$pdf->Cell(0, 5, 'Website: https://vratha.co.in', 0, 1, 'R');

$pdf->Image('assets/img/logo1.png', 20, 20, 40, '', '', '', '', false, 300);



$pdf->SetFont('helvetica', '', 10);
//print_r($multiple_invoice);
//die();


foreach ($multiple_invoice as $row){
	$count=count($multiple_invoice);







// -----------------------------------------------------------------------------
//$VisaApp = $rows['visa_app'];




$html = '<table cellspacing="0" cellpadding="1" border="1">
    <tr>
        <td style="text-align:left;background-color:#8457cd;color:white;font-weight:bold;">Bill To</td>
        <td style="text-align:right;background-color:#8457cd;color:white;font-weight:bold;">Invoice Details</td>
    </tr>
    <tr>
        <td>&nbsp;&nbsp;'.$row->bill_to.'<br>&nbsp;&nbsp;GST No :'.$row->gstno.'</td>
        <td style="text-align:right">Invoice No :'.$row->invoice_no.'<br>Date : '.$row->date.
 '</td>
    </tr>
    </table>
    <table cellspacing="0" cellpadding="1" border="1">
    <tr>
        <td style="text-align:left;background-color:#8457cd;color:white;font-weight:bold;">Sr.No</td>
        <td colspan="2" style="text-align:left;background-color:#8457cd;color:white;font-weight:bold;">Item name</td>
       
        <td style="text-align:left;background-color:#8457cd;color:white;font-weight:bold;">Quantity</td>
        <td style="text-align:left;background-color:#8457cd;color:white;font-weight:bold;">Price/ Unit</td>
        <td style="text-align:left;background-color:#8457cd;color:white;font-weight:bold;">Taxable
			amount</td>
		<td style="text-align:left;background-color:#8457cd;color:white;font-weight:bold;">CGST(6%)</td>
        <td style="text-align:left;background-color:#8457cd;color:white;font-weight:bold;">SGST(6%)</td>
        <td style="text-align:left;background-color:#8457cd;color:white;font-weight:bold;">Amount</td>
    </tr>';
    $i=1;
    $total_taxable_amount =0;
    $total_amount=0;
    foreach($multiple_invoice as $key => $row) {
    $unit_price=$row->sale_amount;
    $quantity=$row->product_quantity;
    $taxable_amount=$unit_price*$quantity;
    $taxable_amount1 = number_format($taxable_amount, 2, '.', '');
    $CGST=$taxable_amount *6/100;
    $CGST1 = number_format($CGST, 2, '.', '');
    $SGST=$taxable_amount *6/100;
    $SGST1 = number_format($SGST, 2, '.', '');
    $Amount=$taxable_amount + $CGST1 + $SGST1;
    $Amount1 = number_format($Amount, 2, '.', '');
    $total_taxable_amount+= $taxable_amount;
    $total_taxable_amount1=number_format($total_taxable_amount, 2, '.', '');
    $total_amount+=$Amount1;
    $total_amount1=number_format($total_amount, 2, '.', '');
    $received = $this->uri->segment('4');
    $received1=number_format($received, 2, '.', '');
    
    //$balance = $this->uri->segment('5');
    $transportation_expense = $this->uri->segment('5');
    $transportation_expense1=number_format($transportation_expense, 2, '.', '');
    $packaging_expense = $this->uri->segment('6');
    $packaging_expense1=number_format($packaging_expense, 2, '.', '');
    $discount = $this->uri->segment('7');
    $discount1=number_format($discount, 2, '.', '');
    $Total_amount=$total_amount1 + $transportation_expense1 + $packaging_expense1 - $discount1;
   
    $Total_amount1=number_format($Total_amount, 2, '.', '');
    $balance = $Total_amount1-$received1;
    $balance1=number_format($balance, 2, '.', '');
    $product_quantity=$row->product_quantity;
    $total_product_quantity+=$product_quantity;
    
  
    $html .= '<tr>
    	  
        <td style="text-align:center;">'.$i++.'</td>
        <td colspan="2" style="text-align:left;">'.$row->product_code.'</td>
        
        <td style="text-align:center;">'.$row->product_quantity.'</td>
        <td style="text-align:center;">'.$row->sale_amount.'</td>
        <td style="text-align:right;">'.$taxable_amount1.'</td>
        <td style="text-align:right;">'.$CGST1.'</td>
        <td style="text-align:right;">'.$SGST1.'</td>
        <td style="text-align:right;">'.$Amount1.'</td>
    </tr>';
       
     }
    
     $html .= '<tr>
    	  
        <td></td>
        <td colspan="2" style="text-align:left;"><b>Total</b></td>
       
        <td style="text-align:center;">'.$total_product_quantity.'</td>
        <td></td>
        <td style="text-align:right;"><b>'.$total_taxable_amount1.'</b></td>
        <td></td>
        <td></td>
        <td style="text-align:right;"><b>'.$total_amount1.'</b></td>
    </tr>';
    $html .='</table>
    <table cellspacing="0" cellpadding="1" border="1">
    <tr>
        <td colspan="2" style="text-align:left;background-color:#8457cd;color:white;font-weight:bold;">Amount</td>
        
       
        
        
    </tr>
    <tr>
        <td rowspan="2">&nbsp;&nbsp;Transportation Expense: '.$transportation_expense1.'<br>&nbsp;&nbsp;Packaging Expense: '.$packaging_expense1.'<br>&nbsp;&nbsp;Discount: '.$discount1.'</td>
        <td rowspan="2">&nbsp;&nbsp;Total Amount: '.$Total_amount1.'<br>&nbsp;&nbsp;Received: '.$received1.'<br>&nbsp;&nbsp;Balance:'.$balance1.'</td>
        
    </tr>';
    

   $html .='</table><table cellspacing="0" cellpadding="1" border="1">
    <tr>
        <td style="text-align:left;background-color:#8457cd;color:white;font-weight:bold;">Account Details </td>
        <td style="text-align:left;background-color:#8457cd;color:white;font-weight:bold;">For : VRATHA AGENCIES</td>
        
    </tr>
    <tr>
        <td>&nbsp;&nbsp;Name of Account : Vratha Agencies LLP<br>
            Account  Number : 570901010050319<br>
            Bank : Union Bank<br>
            Branch : Pattambi Branch<br>
            IFSC Code :UBIN0557099<br></td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="assets/img/signature.png" width="100" height="60" ><br>&nbsp;&nbsp;Thanks for doing business with us !<br></td>
        
</tr>';
    

$html .='</table>';   
  





$pdf->writeHTML($html, true, false, false, false, '');
	ob_end_clean(); 
	$pdf->Output('Invoice.pdf', 'I');

}    }  

	public function downloadinvoicenongst(){
           	   $multiple_invoice=$this->AdminModel->get_multiple_invoice($this->uri->segment('3'));
           	   //print_r($multiple_invoice);
               

               
               	require_once(APPPATH.'helpers/tcpdf/tcpdf.php');
	// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('Invoice');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('helvetica', 11);

// add a page
$pdf->AddPage();
$pdf->SetFont('helvetica','B',11);  
$pdf->Cell(0, 5, 'VRATHA AGENCIES', 0, 1, 'R');
$pdf->SetFont('helvetica', 9);
$pdf->Cell(0, 5, 'Perumannur(PO) Palakkad,Kerala,India', 0, 1, 'R');
$pdf->Cell(0, 5, 'Phone no.: 9895800370 Email: sales@vratha.co.in', 0, 1, 'R');
$pdf->Cell(0, 5, 'Website: https://vratha.co.in', 0, 1, 'R');

$pdf->Image('assets/img/logo1.png', 20, 20, 40, '', '', '', '', false, 300);



$pdf->SetFont('helvetica', '', 10);
//print_r($multiple_invoice);
//die();


foreach ($multiple_invoice as $row){
	$count=count($multiple_invoice);







// -----------------------------------------------------------------------------
//$VisaApp = $rows['visa_app'];




$html = '<table cellspacing="0" cellpadding="1" border="1">
    <tr>
        <td style="text-align:left;background-color:#8457cd;color:white;font-weight:bold;">Bill To</td>
        <td style="text-align:right;background-color:#8457cd;color:white;font-weight:bold;">Invoice Details</td>
    </tr>
    <tr>
        <td>&nbsp;&nbsp;'.$row->bill_to.'</td>
        <td style="text-align:right">Invoice No :'.$row->invoice_no.'<br>Date : '.$row->date.
 '</td>
    </tr>
    </table>
    <table cellspacing="0" cellpadding="1" border="1">
    <tr>
        <td style="text-align:left;background-color:#8457cd;color:white;font-weight:bold;">Sr.No</td>
        <td colspan="2" style="text-align:left;background-color:#8457cd;color:white;font-weight:bold;">Item name</td>
       
        <td style="text-align:left;background-color:#8457cd;color:white;font-weight:bold;">Quantity</td>
        <td style="text-align:left;background-color:#8457cd;color:white;font-weight:bold;">Price/ Unit</td>
        <td style="text-align:left;background-color:#8457cd;color:white;font-weight:bold;">Amount
			</td>
		 </tr>';
    $i=1;
    $total_taxable_amount =0;
    $total_amount=0;
    foreach($multiple_invoice as $key => $row) {
    $unit_price=$row->sale_amount;
    $quantity=$row->product_quantity;
    $taxable_amount=$unit_price*$quantity;
    $taxable_amount1 = number_format($taxable_amount, 2, '.', '');
    $total_amount+=$taxable_amount1;
    $total_amount1 = number_format($total_amount, 2, '.', '');
    $received = $this->uri->segment('4');
    $received1=number_format($received, 2, '.', '');
   
    //$balance = $this->uri->segment('5');
    $transportation_expense = $this->uri->segment('5');
    $transportation_expense1=number_format($transportation_expense, 2, '.', '');
    $packaging_expense = $this->uri->segment('6');
    $packaging_expense1=number_format($packaging_expense, 2, '.', '');
    $discount = $this->uri->segment('7');
    $discount1=number_format($discount, 2, '.', '');
    $Total_amount=$total_amount + $transportation_expense1 + $packaging_expense1 - $discount1;
    $Total_amount1=number_format($Total_amount, 2, '.', '');
     $balance = $Total_amount1-$received1;
     $balance1=number_format($balance, 2, '.', '');
    $product_quantity=$row->product_quantity;
    $total_product_quantity+=$product_quantity;
    
  
    $html .= '<tr>
    	  
        <td style="text-align:center;">'.$i++.'</td>
        <td colspan="2" style="text-align:left;">'.$row->product_code.'</td>
        
        <td style="text-align:center;">'.$row->product_quantity.'</td>
        <td style="text-align:center;">'.$row->sale_amount.'</td>
        <td style="text-align:right;">'.$taxable_amount1.'</td>
    </tr>';
       
     }
    
     $html .= '<tr>
    	  
        <td></td>
        <td colspan="2" style="text-align:left;"><b>Total</b></td>
       
        <td style="text-align:center;">'.$total_product_quantity.'</td>
        <td></td>
        <td style="text-align:right;"><b>'.$total_amount1.'</b></td>
    </tr>';
    $html .='</table>
    <table cellspacing="0" cellpadding="1" border="1">
    <tr>
        <td colspan="2" style="text-align:left;background-color:#8457cd;color:white;font-weight:bold;">Amount</td>
        
       
        
        
    </tr>
    <tr>
        <td rowspan="2">&nbsp;&nbsp;Transportation Expense: '.$transportation_expense1.'<br>&nbsp;&nbsp;Packaging Expense: '.$packaging_expense1.'<br>&nbsp;&nbsp;Discount: '.$discount1.'</td>
        <td rowspan="2">&nbsp;&nbsp;Total Amount: '.$Total_amount1.'<br>&nbsp;&nbsp;Received: '.$received1.'<br>&nbsp;&nbsp;Balance:'.$balance1.'</td>
        
    </tr>';
    

   $html .='</table><table cellspacing="0" cellpadding="1" border="1">
    <tr>
        <td style="text-align:left;background-color:#8457cd;color:white;font-weight:bold;">Account Details </td>
        <td style="text-align:left;background-color:#8457cd;color:white;font-weight:bold;">For : VRATHA AGENCIES</td>
        
    </tr>
    <tr>
        <td>&nbsp;&nbsp;Name of Account : Vratha Agencies LLP<br>
            Account  Number : 570901010050319<br>
            Bank : Union Bank<br>
            Branch : Pattambi Branch<br>
            IFSC Code :UBIN0557099<br></td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="assets/img/signature.png" width="100" height="60" ><br>&nbsp;&nbsp;Thanks for doing business with us !<br></td>
        
</tr>';
    

$html .='</table>';   
  





$pdf->writeHTML($html, true, false, false, false, '');
	ob_end_clean(); 
	$pdf->Output('Invoice.pdf', 'I');

}    }  


	public function sales_logout(){
				$this->session->unset_userdata('user');
				$this->load->view('dashboard');
			}
    public function get_product_data(){
           
            //$product_id=$this->input->post('product_id');
            //echo $product_id;
            $data['get_dt']=$this->AdminModel->get_product_data_done($this->uri->segment('3'));
    	    //print_r($data);
    	    echo json_encode($data);
            
		    //$this->load->view('add_sales_data',$data);


    }
     public function get_product_data_new(){
           
            $data['get_dtt']=$this->AdminModel->get_product_data_new_done($this->uri->segment('3'));
    	    //print_r($data);
    	    echo json_encode($data);
		    //$this->load->view('add_sales_data',$data);


    }
    public function get_subcategory_data(){
           
            $id=$this->input->post('category_id');
            
            $data = $this->AdminModel->get_subcategory_data_done($id);
    	    echo json_encode($data);
		    //$this->load->view('add_sales_data',$data);


    }
     public function get_expense_data(){
           
            $year_value=$this->uri->segment('4');
            
            $data['get_yr']=$this->AdminModel->get_expense_data_done($this->uri->segment('3'),$year_value);
    	   
    	    echo json_encode($data);
		    //$this->load->view('add_sales_data',$data);


    }
    public function get_sales_data(){
           
            $year_value=$this->uri->segment('4');
            
            $data['get_yr']=$this->AdminModel->get_sales_data_done($this->uri->segment('3'),$year_value);
    	   
    	    echo json_encode($data);
		    //$this->load->view('add_sales_data',$data);


    }
    public function get_growth_data(){
           
            $year_value=$this->uri->segment('4');
            
            $data['get_yrr']=$this->AdminModel->get_sales_data_done($this->uri->segment('3'),$year_value);
            
            $data['get_yr']=$this->AdminModel->get_expense_data_done($this->uri->segment('3'),$year_value);
    	   
    	    echo json_encode($data);
		    //$this->load->view('add_sales_data',$data);


    }
     public function get_stock_data(){
           
            $category_value=$this->uri->segment('4');
            
            $data['get_ct']=$this->AdminModel->get_stock_data_done($category_value);
    	   
    	    echo json_encode($data);
		    //$this->load->view('add_sales_data',$data);


    }
    public function get_subcat_stock(){
           
            //$category_id=$this->uri->segment('3');
            //$subcategory_id=$this->uri->segment('4');
            $category_value=$this->uri->segment('4');
            $subcategory_value=$this->uri->segment('5');
            
            $data['get_sct']=$this->AdminModel->get_subcat_stock_data_done($category_value,$subcategory_value);
    	   
    	    echo json_encode($data);
		    //$this->load->view('add_sales_data',$data);


    }
     public function get_material_stock_data(){
           
            $material_value=$this->uri->segment('4');
            
            
            $data['get_mct']=$this->AdminModel->get_material_stock_data_done($material_value);
    	   
    	    echo json_encode($data);
		    //$this->load->view('add_sales_data',$data);


    }
    
    public function get_expense_data_month(){
           
            $year_value=$this->uri->segment('4');
            $month_value=$this->uri->segment('5');
            
            $data['get_mt']=$this->AdminModel->get_expense_data_month_done($this->uri->segment('3'),$year_value,$month_value);
    	  // print_r($data);
    	    echo json_encode($data);
		    //$this->load->view('add_sales_data',$data);


    }

   public function get_sales_data_month(){
           
            $year_value=$this->uri->segment('4');
            $month_value=$this->uri->segment('5');
            
            $data['get_mt']=$this->AdminModel->get_sales_data_month_done($this->uri->segment('3'),$year_value,$month_value);
    	  // print_r($data);
    	    echo json_encode($data);
		    //$this->load->view('add_sales_data',$data);


    }
    public function get_growth_data_month(){
           
            $year_value=$this->uri->segment('4');
            $month_value=$this->uri->segment('5');
            
         $data['get_gmt']=$this->AdminModel->get_sales_data_month_done($this->uri->segment('3'),$year_value,$month_value);
            $data['get_mt']=$this->AdminModel->get_expense_data_month_done($this->uri->segment('3'),$year_value,$month_value);
    	  // print_r($data);
    	    echo json_encode($data);
		    //$this->load->view('add_sales_data',$data);


    }
    public function total_expense(){
        $data['total_ex']=$this->AdminModel->total_expense_done();
        $user=$this->session->userdata('user');
        $data['user']=$user;  
        $this->load->view('admin_dashboard',$data);
    }
     public function total_sales(){
        $data['total_sl']=$this->AdminModel->total_sales_done();
        $user=$this->session->userdata('user');
        $data['user']=$user;  
        $this->load->view('admin_dashboard',$data);
    }
     public function detail_total_expense(){
         $this->AdminModel->total_expense_done();
         $data['years']=$this->AdminModel->display_years();
         $data['months']=$this->AdminModel->display_months();
         $data['expense']=$this->AdminModel->display_expense_Data_done();
         $data['total_dom_till']=$this->AdminModel->total_dom_expense_till_now();
         $data['total_ex_till']=$this->AdminModel->total_expense_till_now();
         $user=$this->session->userdata('user');
         $data['user']=$user;  
         $this->load->view('detail_total_expense',$data);
    }
     public function detail_total_sales(){
         $this->AdminModel->total_sales_done();
          $data['years']=$this->AdminModel->display_years();
          $data['months']=$this->AdminModel->display_months();
         //$data['expense']=$this->AdminModel->display_expense_Data_done();
         //$data['total_dom_till']=$this->AdminModel->total_dom_expense_till_now();
          $data['total_sl_till']=$this->AdminModel->total_sales_till_now();
         $user=$this->session->userdata('user');
         $data['user']=$user;  
         $this->load->view('detail_total_sales',$data);
    }
     public function detail_total_stock(){
         $data['total_st']=$this->AdminModel->total_stock_done();
         $data['cat']=$this->AdminModel->display_category();
         $data['subcat']=$this->AdminModel->display_subcategory();
         $data['mat']=$this->AdminModel->display_material();
         //$data['expense']=$this->AdminModel->display_expense_Data_done();
         //$data['total_dom_till']=$this->AdminModel->total_dom_expense_till_now();
         //$data['total_ex_till']=$this->AdminModel->total_expense_till_now();
         $data['fetch']=$this->AdminModel->display_products_Data();
         $user=$this->session->userdata('user');
         $data['user']=$user;  
         $this->load->view('detail_total_stock',$data);
    }
        public function save_products_data(){
    	$product_code=$this->input->post('product_code');
    	
	    for ($i = 0; $i < count($product_code); $i++) 
		{
		 echo $count=count($product_code);
		 
		 $invoice_no=$this->input->post('invoice_no');
		 $usname=$this->input->post('usname');
		 $bill_to=$this->input->post('bill_to');
		 $transportation_expense=$this->input->post('transportation_expense');
		 $packaging_expense=$this->input->post('packaging_expense');
		 $discount=$this->input->post('discount');
		 $gstno=$this->input->post('gstno');
		 $month=date("M");
         $year=date("Y");
		 $product_code=$this->input->post('product_code');
		 $product_description=$this->input->post('product_description');
		 $factory_out_price=$this->input->post('factory_out_price');
		 $sale_amount=$this->input->post('sale_amount');
		 $product_quantity=$this->input->post('product_quantity');
         $data = array(
                'month'=>$month,
                'year'=>$year,
               'invoice_no'=>$invoice_no[$i],
         	   'user'=>$usname[$i],
         	   'bill_to'=>$bill_to[$i],
         	   'gstno'=>$gstno[$i],
         	   'transportation_expense'=>$transportation_expense[$i],
         	   'packaging_expense'=>$packaging_expense[$i],
         	   'discount'=>$discount[$i],
         	   'product_code' =>$product_code[$i],
    			'product_description' =>$product_description[$i],
				'factory_out_price' =>$factory_out_price[$i],
				'sale_amount' =>$sale_amount[$i],
    			'product_quantity' =>$product_quantity[$i]

                 );
           
           
	    	$result = $this->AdminModel->save_products_data_done($data);
	    
	        print_r($result);
	        
	        
	     }
      
    }
    public function add_more_products(){
         $this->form_validation->set_rules('product_code', 'Product Code', 'required');
		 $this->form_validation->set_rules('product_quantity', 'Product Quantity', 'required|numeric');
    	 $invoice_no=$this->uri->segment('3');
    	 $usname=$this->uri->segment('4');
    	 $bill_to=$this->uri->segment('5');
    	 $transportation_expense=$this->uri->segment('6');
    	 $packaging_expense=$this->uri->segment('7');
    	 $discount=$this->uri->segment('8');
    	 $sale_amount=$this->uri->segment('9');
    	 $gstno=$this->uri->segment('10');
    	 $data['invoice_no']=$invoice_no;
    	 $data['usname']=$usname;
    	 $data['bill_to']=$bill_to;
    	 $data['transportation_expense']=$transportation_expense;
    	 $data['packaging_expense']=$packaging_expense;
    	 $data['sale_amount']=$sale_amount;
    	 $data['gstno']=$gstno;
    	 $data['discount']=$discount;
    	 $user=$this->session->userdata('user');
         $data['user']=$user;  
         $data['code_data']=$this->AdminModel->get_added_products($invoice_no); 
         $data['product_codes']=$this->AdminModel->display_products_codes();
    	 $this->load->view('add_more_products',$data);
    }
    public function add_more_products_admin(){
    	 $invoice_no=$this->uri->segment('3');
    	 $usname=$this->uri->segment('4');
    	 $bill_to=$this->uri->segment('5');
    	 $transportation_expense=$this->uri->segment('6');
    	 $packaging_expense=$this->uri->segment('7');
    	 $discount=$this->uri->segment('8');
    	 $sale_amount=$this->uri->segment('9');
    	 $gstno=$this->uri->segment('10');
    	 $data['invoice_no']=$invoice_no;
    	 $data['usname']=$usname;
    	 $data['bill_to']=$bill_to;
    	 $data['transportation_expense']=$transportation_expense;
    	 $data['packaging_expense']=$packaging_expense;
    	 $data['sale_amount']=$sale_amount;
    	 $data['gstno']=$gstno;
    	 $data['discount']=$discount;
    	 $user=$this->session->userdata('user');
         $data['user']=$user;  
         $data['code_data']=$this->AdminModel->get_added_products($invoice_no); 
         $data['product_codes']=$this->AdminModel->display_products_codes();
    	 $this->load->view('add_more_products_admin',$data);
    }
    
    		public function available_stock_login_done()
	{
	          
              $this->form_validation->set_rules('username', 'Username', 'trim|required');
              $this->form_validation->set_rules('password', 'Password', 'trim|required'); 
              if($this->form_validation->run()==true)
              {
              	  $username = $this->input->post('username');
              	  $password=$this->input->post('password');
              	  $user=$this->AdminModel->check_available_stock_login($username,$password);
              	  //print_r($user);
              	  if(!empty($user)){
              	  	$sessArray['id']=$user['id'];
              	  	$sessArray['username']=$user['username'];
              	  	//print_r($sessArray);
              	  	//$data['fetch_dt']=$this->AdminModel->displayUserData();
              	  	$this->session->set_userdata('user',$sessArray);
              	  	$user=$this->session->userdata('user');
              	    $data['user']=$user;
              	    $data['total_ex']=$this->AdminModel->total_expense_done();
              	    $data['total_sl']=$this->AdminModel->total_sales_done();
              	  	$this->session->set_flashdata('msg','Stock Person Login Successfully');
              	  	$data['fetch']=$this->AdminModel->display_products_Data();
              	  	$this->load->view('display_available_stock_data',$data);
              	  	}else{
              	  	$this->session->set_flashdata('error_msg','Invalid Email or Password');
              	  	$this->load->view('available_stock_login');
              	  }
              }
            
		      
		      
  }
    public function display_available_stock_data()
	{
		$user=$this->session->userdata('user');
        $data['user']=$user;
		$data['fetch']=$this->AdminModel->display_products_Data();
		$this->load->view('display_available_stock_data',$data);
	}
  	public function display_available_stock_data_admin()
	{
		$user=$this->session->userdata('user');
        $data['user']=$user;
		$data['fetch']=$this->AdminModel->display_products_Data();
		$this->load->view('display_available_stock_data_admin',$data);
	}
			public function edit_available_stock()
	{

					 
					 $user=$this->session->userdata('user');
                     $data['user']=$user;
					 $data['edit']=$this->AdminModel->edit_available_stock_data($this->uri->segment('3'));
					 $data['types']=$this->AdminModel->display_product_types();
					 $data['codes']=$this->AdminModel->display_product_codes();
					 $data['cat']=$this->AdminModel->display_category();
                     $data['subcat']=$this->AdminModel->display_subcategory();
                     $data['mat']=$this->AdminModel->display_material();
                     $data['mat_s']=$this->AdminModel->display_material_size();
		    	     $this->load->view('edit_available_stock',$data);
	}
		public function edit_available_stock_admin()
	{

					 
					 $user=$this->session->userdata('user');
                     $data['user']=$user;
					 $data['edit']=$this->AdminModel->edit_available_stock_data($this->uri->segment('3'));
					 $data['types']=$this->AdminModel->display_product_types();
					 $data['codes']=$this->AdminModel->display_product_codes();
					 $data['cat']=$this->AdminModel->display_category();
                     $data['subcat']=$this->AdminModel->display_subcategory();
                     $data['mat']=$this->AdminModel->display_material();
                     $data['mat_s']=$this->AdminModel->display_material_size();
		    	     $this->load->view('edit_available_stock_admin',$data);
	}
		public function update_available_stock()
	{
	    
	                   	      $formarray=array('category' => $this->input->post('category'),
				  	       					'subcategory'  =>$this->input->post('subcategory'),
				  	       					'product_code'  =>$this->input->post('product_code'),
				  	       					'product_description' => $this->input->post('product_description'),
				  	       					'material'  =>$this->input->post('material'),
				  	       					'material_size'  =>$this->input->post('material_size'),
				  	       					'product_price'  =>$this->input->post('product_price'),
							    	        'available_stock' => $this->input->post('available_stock')
							    	         
							    	          
			
							    	             	);
						$this->AdminModel->update_available_stock_data($this->uri->segment('3'),$formarray);
    			        $this->session->set_flashdata('update_stck_msg','Available Stock Updated Successfully');
    			        $user=$this->session->userdata('user');
            			$data['user']=$user;
    			        $data['fetch']=$this->AdminModel->display_products_Data();
    			        $data['types']=$this->AdminModel->display_product_types();
    					$data['codes']=$this->AdminModel->display_product_codes();
    					$this->load->view('display_available_stock_data',$data);

						
						
					   
	}
		public function update_available_stock_admin()
	{
	    
	                   	      $formarray=array('category' => $this->input->post('category'),
				  	       					'subcategory'  =>$this->input->post('subcategory'),
				  	       					'product_code'  =>$this->input->post('product_code'),
				  	       					'product_description' => $this->input->post('product_description'),
				  	       					'material'  =>$this->input->post('material'),
				  	       					'material_size'  =>$this->input->post('material_size'),
				  	       					'product_price'  =>$this->input->post('product_price'),
							    	        'available_stock' => $this->input->post('available_stock')
							    	         
							    	          
			
							    	             	);
						$this->AdminModel->update_available_stock_data($this->uri->segment('3'),$formarray);
    			        $this->session->set_flashdata('update_stck_msg','Available Stock Updated Successfully');
    			        $user=$this->session->userdata('user');
            			$data['user']=$user;
    			        $data['fetch']=$this->AdminModel->display_products_Data();
    			        $data['types']=$this->AdminModel->display_product_types();
    					$data['codes']=$this->AdminModel->display_product_codes();
    					$this->load->view('display_available_stock_data_admin',$data);

						
						
					   
	}
	public function search_stock()
	{
	    $user=$this->session->userdata('user');
        $data['user']=$user;
        $data['product_codes']=$this->AdminModel->display_product_codes_search();
		$this->load->view('search_stock',$data);
	}
	public function search_stock_admin()
	{
	    $user=$this->session->userdata('user');
        $data['user']=$user;
        $data['product_codes']=$this->AdminModel->display_product_codes_search();
		$this->load->view('search_stock_admin',$data);
	}
	 public function get_stock(){
           
           
            $data['get_st']=$this->AdminModel->get_stock_data($this->uri->segment('3'));
    	   
    	    echo json_encode($data);
		    //$this->load->view('add_sales_data',$data);


    }
    public function get_cat_subcat($category_id,$subcategory_id){
           
           
                        echo $category_id=$this->uri->segment('3');
                        echo $subcategory_id=$this->uri->segment('4');
                        


    }
   
    public function display_year_data(){
           
            $user=$this->session->userdata('user');
            $data['user']=$user;
            $data['years']=$this->AdminModel->display_years();
            $data['payment_type_add']=$this->AdminModel->display_payment_type();
            $data['cat']=$this->AdminModel->display_category();
            $data['subcat']=$this->AdminModel->display_subcategory();
            $data['mat']=$this->AdminModel->display_material();
            $data['mat_s']=$this->AdminModel->display_material_size();
            $data['codes']=$this->AdminModel->display_product_codes();
		    $this->load->view('display_years',$data);


    }
}	
