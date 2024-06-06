				
<?php
				class AdminModel extends CI_Model {


				public function check_admin_login($username,$password){

						  //$sha_password = md5($password);
      
					      $user_type="Admin";
                         $this->db->where('user_type', $user_type);
					      $this->db->where('username', $username);
					      
					     $this->db->where('password', $password);

					      return $query = $this->db->get('tbl_admin')->row_array(); 
					     

					 }
			  public function check_manufacturing_login($username,$password){

						  //$sha_password = md5($password);
      
					       
					       $this->db->where('Manufacturing', 1); 

					      $this->db->where('username', $username);
					      
					     $this->db->where('password', $password);

					      return $query = $this->db->get('tbl_admin')->row_array(); 
					     

					 }
		     public function check_ordering_login($username,$password){

						  //$sha_password = md5($password);
      
					       
					       $this->db->where('Ordering', 1); 

					      $this->db->where('username', $username);
					      
					     $this->db->where('password', $password);

					      return $query = $this->db->get('tbl_admin')->row_array(); 
					     

					 }
			public function check_expense_login($username,$password){

						  //$sha_password = md5($password);
      
					       
					       $this->db->where('Expense', 1); 

					      $this->db->where('username', $username);
					      
					     $this->db->where('password', $password);

					      return $query = $this->db->get('tbl_admin')->row_array(); 
					     

					 }
		  public function check_sales_login($username,$password){

						  //$sha_password = md5($password);
      
					      
					       $this->db->where('Sales', 1); 

					      $this->db->where('username', $username);
					      
					     $this->db->where('password', $password);

					      return $query = $this->db->get('tbl_admin')->row_array(); 
					     

					 }
			public function check_available_stock_login($username,$password){

						  //$sha_password = md5($password);
      
					      
					       $this->db->where('Available_Stock', 1); 

					      $this->db->where('username', $username);
					      
					     $this->db->where('password', $password);

					     return $query = $this->db->get('tbl_admin')->row_array(); 
					     

					 }
					 public function add_product_done_now($formarray){

				  	                      
				                	return $this->db->insert('tbl_products',$formarray);
				    }
				    public function display_products_Data()
					{
						$this->db->select('*');
						return $result=$this->db->get('tbl_products');
						//print_r($result);
					}
					public function edit_product_data($id)
					{
						$this->db->select('*');
						$this->db->where('id',$id);
						$row=$this->db->get('tbl_products');
						return $row->row_array();
					}
					public function place_order_done($id)
					{
						$this->db->select('*');
						$this->db->where('id',$id);
						$row=$this->db->get('tbl_products');
						return $row->row_array();
					}
					function update_product_data($id,$formarray)
					{
						    
						    $this->db->where('id',$id);
							$this->db->update('tbl_products',$formarray);
					}
					function delete_product_data($id){
						$this->db->where('id',$id);
						$this->db->delete('tbl_products');
					}
					function place_order_done_now_success($formarray)
					{
						    
						    return $this->db->insert('tbl_orders',$formarray);
					}
					 public function display_orders_Data()
					{
						$this->db->select('*');
						return $result=$this->db->get('tbl_orders');
						//print_r($result);
					}
					function delete_order_data($id){
						$this->db->where('id',$id);
						$this->db->delete('tbl_orders');
					}
					public function edit_order_data($id)
					{
						$this->db->select('*');
						$this->db->where('id',$id);
						$row=$this->db->get('tbl_orders');
						return $row->row_array();
					}
					public function edit_order_ordering_admin_data($id)
					{
						$this->db->select('*');
						$this->db->where('id',$id);
						$row=$this->db->get('tbl_orders');
						return $row->row_array();
					}
					function update_order_data($id,$formarray)
					{
						    
						    $this->db->where('id',$id);
							$this->db->update('tbl_orders',$formarray);
					}
				   function update_order_ordering_admin_data($id,$formarray)
					{
						    
						    $this->db->where('id',$id);
							$this->db->update('tbl_orders',$formarray);
					}
					function update_status($id,$formarray)
					{
						    
						    $this->db->where('id',$id);
							$this->db->update('tbl_orders',$formarray);
					}
					public function add_expense_data_done_now($formarray){

				  	                      
				                	return $this->db->insert('tbl_expense',$formarray);
				    }
				    public function display_expense_Data_done()
					{
						$month=date('M');
						$this->db->select('*');
						$this->db->where('month',$month);
						$this->db->order_by('expense_date', "desc");
						return $result=$this->db->get('tbl_expense');
						//print_r($result);
					}
					 public function display_expense_Data_user($user1)
					{
						$month=date('M');
						$this->db->select('*');
						$this->db->where('month',$month);
					    $this->db->where('user',$user1);
						$this->db->order_by('expense_date', "desc");
						return $result=$this->db->get('tbl_expense');
						//print_r($result);
					}
					  public function display_archival_data_done()
					{
						
						$month=date('M');
						$this->db->select('*');
						$this->db->where_not_in('month', $month);
						$this->db->order_by('expense_date', "desc");
						return $result=$this->db->get('tbl_expense');
						//print_r($result);
					}
				    public function display_archival_sales_data_done($user1)
					{
						
						$date=date("Y-m-d");
						$this->db->select('*');
						$this->db->where_not_in('date', $date);
						$this->db->where('balance',0);
						$this->db->where('user',$user1);
						$this->db->order_by('date', "desc");
						return $result=$this->db->get('tbl_sales');
						//print_r($result);
					}
					 public function display_archival_sales_data_done_admin()
					{
						
					    $date=date("Y-m-d");
						$this->db->select('*');
						$this->db->where_not_in('date', $date);
						$this->db->where('balance',0);
						$this->db->order_by('date', "desc");
						return $result=$this->db->get('tbl_sales');
						//print_r($result);
					}
					  public function display_archival_data_user($user1)
					{
						
						$month=date('M');
						$this->db->select('*');
						$this->db->where_not_in('month', $month);
						$this->db->where('user',$user1);
						$this->db->order_by('expense_date', "desc");
						return $result=$this->db->get('tbl_expense');
						//print_r($result);
					}
					public function edit_expense_data_done($id)
					{
						$this->db->select('*');
						$this->db->where('id',$id);
						$row=$this->db->get('tbl_expense');
						return $row->row_array();
					}
					function update_expense_data_done($id,$formarray)
					{
						    
						    $this->db->where('id',$id);
							$this->db->update('tbl_expense',$formarray);
					}
					function delete_expense_data($id){
						$this->db->where('id',$id);
						$this->db->delete('tbl_expense');
					}

				   public function add_user_done_now($formarray){

				  	                      
				                	return $this->db->insert('tbl_admin',$formarray);
				    }
				    public function display_users_Data_done()
					{
						$this->db->select('*');
						return $result=$this->db->get('tbl_admin');
						//print_r($result);
					}
					function delete_user_data($id){
						$this->db->where('id',$id);
						$this->db->delete('tbl_admin');
					}
					public function edit_user_data_done($id)
					{
						$this->db->select('*');
						$this->db->where('id',$id);
						$row=$this->db->get('tbl_admin');
						return $row->row_array();
					}
					function update_user_done_now($id,$formarray)
					{
						    
						    $this->db->where('id',$id);
							$this->db->update('tbl_admin',$formarray);
					}
					public function change_password_done_now($new_password,$id){
					 	 $data = array(
								           'password' => $new_password
								        );
								    $this->db->where('id',$id);
								    $this->db->update('tbl_admin', $data);
								    return true;


					 }
					 public function get_old_password($id)
					{
						$this->db->select('*');
						$this->db->where('id',$id);
						$row=$this->db->get('tbl_admin');
						return $row->row_array();
					}
					public function old_password_done($password,$id){
					 	$this->db->where('password',$password);
					 	$this->db->where('id',$id);
					 	return $query = $this->db->get('tbl_admin')->row_array(); 

					 }
					  public function add_year_data_done_now($formarray){

				  	                      
				                	return $this->db->insert('tbl_years',$formarray);
				    }
				      public function add_month_data_done_now($formarray){

				  	                      
				                	return $this->db->insert('tbl_months',$formarray);
				    }
				    public function add_product_type_done_now($formarray){

				  	                      
				                	return $this->db->insert('tbl_product_types',$formarray);
				    }
				    public function add_product_code_done_now($formarray){

				  	                      
				                	return $this->db->insert('tbl_product_codes',$formarray);
				    }
				     public function add_category_done_now($formarray){

				  	                      
				                	return $this->db->insert('tbl_category',$formarray);
				    }
				      public function add_subcategory_done_now($formarray){

				  	                      
				                	return $this->db->insert('tbl_subcategory',$formarray);
				    }
				     public function add_material_done_now($formarray){

				  	                      
				                	return $this->db->insert('tbl_material',$formarray);
				    }
				     public function add_material_size_done_now($formarray){

				  	                      
				                	return $this->db->insert('tbl_material_size',$formarray);
				    }
				     public function display_years()
					{
						$this->db->select('*');
						return $result=$this->db->get('tbl_years');
						//print_r($result);
					}
					   public function display_months()
					{
						$this->db->select('*');
						return $result=$this->db->get('tbl_months');
						//print_r($result);
					}
					   public function display_product_types()
					{
						$this->db->select('*');
						return $result=$this->db->get('tbl_product_types');
						//print_r($result);
					}
					   public function display_product_codes()
					{
						$this->db->select('*');
						return $result=$this->db->get('tbl_product_codes');
						//print_r($result);
					}
					 public function display_product_codes_search()
					{
						$this->db->select('*');
						return $result=$this->db->get('tbl_products');
						print_r($result);
					}
						public function display_category()
					{
						$this->db->select('*');
						return $result=$this->db->get('tbl_category');
						//print_r($result);
					}
							public function display_subcategory()
					{
						$this->db->select('*');
						return $result=$this->db->get('tbl_subcategory');
						//print_r($result);
					}
						public function display_material()
					{
						$this->db->select('*');
						return $result=$this->db->get('tbl_material');
						//print_r($result);
					}
						public function display_material_size()
					{
						$this->db->select('*');
						return $result=$this->db->get('tbl_material_size');
						//print_r($result);
					}
					public function add_sales_data_now($formarray){

				  	                      
				                	return $this->db->insert('tbl_sales',$formarray);
				    }
				       public function display_sales_data_done()
					{
					    //$date=date("Y-m-d");
						$this->db->select('*');
						//$this->db->where('date',$date);
						$this->db->where_not_in('balance',0);
						$this->db->order_by('date', "desc");
						return $result=$this->db->get('tbl_sales');
						//print_r($result);
					}
					   public function display_sales_data_user($user1)
					{
						//$date=date("Y-m-d");
						$this->db->select('*');
						//$this->db->where('date',$date);
						//$this->db->where('status',1);
						$this->db->where('user',$user1);
						$this->db->where_not_in('balance',0);
						$this->db->order_by('date', "desc");
						return $result=$this->db->get('tbl_sales');
						//print_r($result);
					}
					public function edit_sales_data_done($id)
					{
						$this->db->select('*');
						$this->db->where('id',$id);
						$row=$this->db->get('tbl_sales');
						return $row->row_array();
					}
					function update_sales_data_now($id,$formarray)
					{
						    
						    $this->db->where('id',$id);
							$this->db->update('tbl_sales',$formarray);
					}
					
						function update_received_data($id,$formarray)
					{
						    
						    $this->db->where('id',$id);
							$this->db->update('tbl_sales',$formarray);
					}
					function delete_sales_data($id){
						$this->db->where('id',$id);
						$this->db->delete('tbl_sales');
					}

					
					public function get_product_data_done($id)
					{
						$this->db->select('*');
						$this->db->where('id',$id);
						$row=$this->db->get('tbl_products');
						return $row->row_array();
					}
					public function get_product_data_new_done($id)
					{
						$this->db->select('*');
						$this->db->where('id',$id);
						$row=$this->db->get('tbl_product_codes');
						return $row->row_array();
					}
						public function get_subcategory_data_done($id)
					{
						$this->db->select('*');
						$this->db->where('category_id',$id);
						$query=$this->db->get('tbl_subcategory');
						return $query1=$query->result();
					}

					   public function display_products_codes()
					{
						$this->db->select('*');
						return $result=$this->db->get('tbl_products');
						//print_r($result);
					}
					
					/*public function get_product_type($product_type)
					{
					    $this->db->select('*');
						$this->db->like('product_type',$product_type);
				        $query = $this->db->get('tbl_products');
                        return $query->result();
						
					}*/
						
					public function total_expense_done()
					{
						 $this->db->select_sum('amount');
						 $this->db->where('expense_date',date("Y-m-d"));
				         $query = $this->db->get('tbl_expense');
                         return $query->row_array();
						
					}
					public function pending_sales_collection_amount()
					{
						 $this->db->select_sum('balance');
				         $query = $this->db->get('tbl_sales');
                         return $query->row_array();
						
					}
						public function total_sales_done()
					{
						 $this->db->select_sum('Amount');
						 $this->db->where('date',date("Y-m-d"));
				         $query = $this->db->get('tbl_sales');
                         return $query->row_array();
						
					}
						public function total_stock_done()
					{
						 $this->db->select_sum('available_stock');
				         $query = $this->db->get('tbl_products');
                         return $query->row_array();
						
					}
					
						public function total_expense_till_now()
					{
						 $this->db->select_sum('amount');
				         $query = $this->db->get('tbl_expense');
                         return $query->row_array();
						
					}
						public function total_sales_till_now()
					{
						 $this->db->select_sum('Amount');
				         $query = $this->db->get('tbl_sales');
                         return $query->row_array();
						
					}
						public function total_dom_expense_till_now()
					{
						 $this->db->select_sum('amount');
						 $this->db->where('payment_type','Export');
				         $query = $this->db->get('tbl_expense');
                         return $query->row_array();
						
					}
						public function get_expense_data_done($id,$year_value)
					{
						 $this->db->select_sum('amount');
						 $this->db->where('year',$year_value);
				         $query = $this->db->get('tbl_expense');
                         return $query->row_array();
					}
						public function get_sales_data_done($id,$year_value)
					{
						 $this->db->select_sum('Amount');
						 $this->db->where('year',$year_value);
				         $query = $this->db->get('tbl_sales');
                         return $query->row_array();
					}
					public function get_stock_data_done($category_value)
					{
						 $this->db->select_sum('available_stock');
						 $this->db->where('category',$category_value);
				         $query = $this->db->get('tbl_products');
                         return $query->row_array();
					}
					
					public function get_subcat_stock_data_done($category_value,$subcategory_value)
					{
						 $this->db->select_sum('available_stock');
						 $this->db->where('category',$category_value);
						 $this->db->where('subcategory',$subcategory_value);
				         $query = $this->db->get('tbl_products');
                         return $query->row_array();
					}
					public function get_material_stock_data_done($material_value)
					{
						 $this->db->select_sum('available_stock');
						 $this->db->where('material',$material_value);
				         $query = $this->db->get('tbl_products');
                         return $query->row_array();
					}
						public function get_expense_data_month_done($id,$year_value,$month_value)
					{
						 $this->db->select_sum('amount');
						 $this->db->where('year',$year_value);
						 $this->db->where('month',$month_value);
				         $query = $this->db->get('tbl_expense');
                         return $query->row_array();
					}
					public function get_sales_data_month_done($id,$year_value,$month_value)
					{
						 $this->db->select_sum('Amount');
						 $this->db->where('year',$year_value);
						 $this->db->where('month',$month_value);
				         $query = $this->db->get('tbl_sales');
                         return $query->row_array();
					}
					 public function add_payment_type_done_now($formarray){

				  	     return $this->db->insert('tbl_payment_type',$formarray);
				    }
				       public function display_payment_type()
					{
						$this->db->select('*');
						return $result=$this->db->get('tbl_payment_type');
						//print_r($result);
					}
					public function save_products_data_done($data){

				  	                      
				                	return $this->db->insert('tbl_sales',$data);
				    }
				   public function get_multiple_invoice($invoice_no)
					{
						$this->db->select('*');
						$this->db->where('invoice_no',$invoice_no);
						$query=$this->db->get('tbl_sales');
						return $query1=$query->result();
					}
					   public function get_added_products($invoice_no)
					{
						$this->db->select('*');
						$this->db->where('invoice_no',$invoice_no);
						return $result=$this->db->get('tbl_sales');
						//print_r($result);
					}
					public function edit_available_stock_data($id)
					{
						$this->db->select('*');
						$this->db->where('id',$id);
						$row=$this->db->get('tbl_products');
						return $row->row_array();
					}
					function update_available_stock_data($id,$formarray)
					{
						    
						    $this->db->where('id',$id);
							$this->db->update('tbl_products',$formarray);
					}
						public function get_stock_data($id)
					{
						$this->db->select('*');
						$this->db->where('id',$id);
						$row=$this->db->get('tbl_products');
						return $row->row_array();
					}
}

