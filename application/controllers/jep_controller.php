<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jep_controller extends CI_Controller {
       
        public function __construct()
        {
        parent::__construct();
        //Load Library and model.
        $this->load->library('cart');
        //$this->load->model('billing_model');
        }
	public function index()
	{
		
                $this->load->model('jep_model');
                $images = $this->jep_model->get_best_seller_images();
                $earings = $this->jep_model->get_earings_images();
                $bags = $this->jep_model->get_bags_images();
                $this->load->view('jep',array('images' => $images,'earings' => $earings,'bags' => $bags));
	}
        /*
         * Function to get a single earing from the data base
         */
        public function get_selected_earing($id) 
	{
		if($id) {
                    $this->load->model('jep_model');
			$data = $this->jep_model->fetch_earing($id);
			echo json_encode($data);
		}
	}
        
         /*
         * Function to get a single bag from the data base
         */
        public function get_selected_bag($id) 
	{
		if($id) {
                    $this->load->model('jep_model');
			$data = $this->jep_model->fetch_bag($id);
			echo json_encode($data);
		}
	}
        
                        
         /*
          * Function to retrieve inserted data into the database
          */
       public function orders() 
	{
		$result = array('data' => array());
                $this->load->model('jep_model');
		$data = $this->jep_model->all_bags();
                $x = 1;
		foreach ($data as $key => $value) {

			$result['data'][$key] = array(
                                $x,
				$value['custormer_name'],
                $value['orders']
				
			);
                                
                           $x ++;
		} // /foreach

		echo json_encode($result);
	}
        
        
}
