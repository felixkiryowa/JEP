<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Best_sellers_controller extends CI_Controller {
	public function index()
	{
		$this->load->view('admin/best_sellers');
	}
        
         public function add_best_seller() {
            
            /**
             * Form Validations
             */
            $this->form_validation->set_rules('title','Title','trim|required');
            $this->form_validation->set_rules('price','Price','trim|required');
            $this->form_validation->set_rules('description','Description','trim|required');
            $this->form_validation->set_rules('userfile','Image','trim|required');
             /**
            $th
            * Configurations
            */
            $config['upload_path'] = './featured_images/best_seller/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']	= '1024';
            //$config['max_width']  = '1024';
            //$config['max_height']  = '768';
            /**
             * Loading a library
             */
            $this->load->library('upload',$config);
            if($this->form_validation->run() == FALSE and empty($_FILES['userfile']['name'][0])){
              
                 $this->session->set_flashdata('error_with_fields','One or more Input fields are empty');
                 redirect('best_sellers_controller');
                
            }
            else{
               $this->upload->do_upload();   
               $data = array('upload_data' => $this->upload->data());
               $this->image_resize($data['upload_data']['full_path'],$data['upload_data']['file_name']);
               
               $formdata = array(
                   'title'     => $this->input->post('title'),
                   'price'  => $this->input->post('price'),
                   'image' => $data['upload_data']['file_name'],
                   'description'  => $this->input->post('description')
               );
               $this->load->model('admin_model');
               if($this->admin_model->insert_best_seller($formdata)){
                 $this->session->set_flashdata('pair_added','Successfully Added an Item');  
               }else{
                 $this->session->set_flashdata('adding_pair_failed','Item Is Not Successfully Added');   
               }
               
               return redirect('best_sellers_controller');
            
        }
        
     }
     
       public function image_resize($path,$file){
                $config_resize = array();
                $config_resize['image_library'] = 'gd2';
                $config_resize['source_image']	= $path;
                //$config_resize['create_thumb'] = TRUE;
                $config_resize['maintain_ratio'] = TRUE;
                $config_resize['width']	= '225';
                $config_resize['height'] = '225';
                $config_resize['new_image']	= './featured_images/best_seller/'.$file;
                $this->load->library('image_lib', $config_resize); 
                $this->image_lib->resize();
                
            }
            
             /*
          * Function to retrieve inserted data into the database
          */
       public function fetch_best_sellers() 
	{
		$result = array('data' => array());
                $this->load->model('admin_model');
		$data = $this->admin_model->fetch_best_sellers();
                $x = 1;
		foreach ($data as $key => $value) {
			// button
			$buttons = '
			<div class="btn-group">
			  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			    Action <span class="caret"></span>
			  </button>
			  <ul class="dropdown-menu">
			    <li><a type="button"  href="best_sellers_controller/update_best_sellers/'.$value['id'].'">Edit</a></li>
			    <li><a type="button" href="best_sellers_controller/delete_best_sellers/'.$value['id'].'">Delete</a></li>			    
			  </ul>
			</div>
			';
                        $image = '<button class="btn btn-info" data-toggle="modal" data-target="#given_image" onclick="ViewBestSellers('.$value['id'].')"> <span class="glyphicon glyphicon-eye-open"></span> View Image</a>';

			$result['data'][$key] = array(
                                $x,
				$value['title'],
				$value['price'],
				$image,
				$value['description'],
				$buttons
			);
                                
                           $x ++;
		} // /foreach

		echo json_encode($result);
	}
        
         /**
         * Function to get all data about a given record
         * @param type $id
         */
         public function update_best_sellers($id) {
             $this->load->model('admin_model');
             $best_seller = $this->admin_model->get_single_best_seller($id);
             $this->load->view('admin/update_best_seller',array('best_seller' => $best_seller));
            }
            
                       /*
         * Function to save Edited Data
         */
        public function save_editted_best_seller_info($id = null) 
	{
                $this->form_validation->set_rules('edit_title', 'Title', 'required');
	        $this->form_validation->set_rules('edit_description', 'Description', 'required');
                $this->form_validation->set_rules('edit_price', 'Price', 'required');
                  
			
                if ($this->form_validation->run() == TRUE)
                {
                    $data = array(
				'title' => $this->input->post('edit_title'),
				'price' => $this->input->post('edit_price'),
				'description' => $this->input->post('edit_description'),
				
			);
                     //Unset the data Submit
                   unset($data['submit']);
                   $this->load->model('admin_model');
                   if($this->admin_model->update_best_seller($data,$id)){
                       //set a flash message
                       $this->session->set_flashdata('pair_updated', 'Pair Updated Successfuly');
                   }
                   else{
                       $this->session->set_flashdata('update_failed', 'Failed to Update a Pair'); 
                   }
                   
                      return redirect('best_sellers_controller');
                }else{
                     $this->session->set_flashdata('field_missing', 'One or More Fields were empty Please Try Again...Update Failed');
                      return redirect('best_sellers_controller');
                }
                    
			
	}
        
         /**
            * Function To Delete A Bag
            * @param type $id
            * @return type
            */     
        public function delete_best_sellers($id){
            $this->load->model('admin_model');
            if( $this->admin_model->delete_best_sellers($id)){
                $this->session->set_flashdata('pair_deleted','Successfully deleted an Item');
            }
            else{
                $this->session->set_flashdata('failed_to_delete','Failed to deleted an Item'); 
            }
            
             return redirect('best_sellers_controller'); 
        }
        
        
         /*
         * Function To Get One best Seller
         */
    	public function get_selected_best_seller($id) 
	{
		if($id) {
                    $this->load->model('admin_model');
			$data = $this->admin_model->fetch_best_sellers($id);
			echo json_encode($data);
		}
	}
        
}