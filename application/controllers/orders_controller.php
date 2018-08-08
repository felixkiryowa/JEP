<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Orders_controller extends CI_Controller {
    
    public function index() {
        $this->load->view('admin/orders');
        
    }

	public function fetch_all_orders()
	{
            $this->load->model('billing_model');
            $data = $this->billing_model->get_all_orders();
            
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

			$result['data'][$key] = array(
                                $x,
				$value['custormer_name'],
				$value['email'],
				$value['address'],
                                $value['phone'],
                                $value['date'],
                                $value['quantity'],
                                $value['name'],
                                $value['price'],
                                $value['subtotal']
				//$buttons
			);
                                
                           $x ++;
		} // /foreach

		echo json_encode($result);
         
            
	}
}

