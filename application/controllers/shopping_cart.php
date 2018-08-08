<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Shopping_cart extends CI_Controller {
      public function __construct()
        {
        parent::__construct();
        //Load Library and model.
        $this->load->library('cart');
        //$this->load->model('billing_model');
        }
        
        public function index() {
            $this->load->view('shopping_view');
        }
        /**
         * Function to Add Items to Curt
         */
        public function add_to_cart() {
           
            $price = intval($this->input->post('product_price'));
            $quantity = intval($this->input->post('quantity'));
            $sub_total = $price * $quantity;
            //$this->load->library('cart');
            $data = array(
                'id'            => $this->input->post('product_id'),
                'name'          => $this->input->post('product_name'),
                'price'         => $price,
                'qty'           => $quantity
               
            );
            
            // This function add items into cart.
            $this->cart->insert($data);
            
            redirect('jep_controller');
           
        }
        
        /**
         * Function to show items in the cart
         */
       /* public function show_cart() {
            //$this->load->library('cart');
            $cart = $this->cart->contents();
            echo '<prev>';
              print_r($cart);
            echo '</prev>';
            
           echo  $this->cart->total_items();
        }
        * /
        */
        /**
         * Function to destroy cart
         */
        public function destroy_cart() {
            $this->cart->destroy(); 
            
            redirect('jep_controller');
        }
        /**
         * Function to remove an item in a cart
         */
        public function remove($rowid) {
            $this->cart->update(array(
                'rowid' => $rowid,
                'qty'   => 0
            ));
            
            redirect('jep_controller');
        }
        
        function update_cart(){

        // Recieve post values,calcute them and update
        $cart_info = $_POST['cart'] ;
        foreach( $cart_info as $id => $cart)
        {
        $rowid = $cart['rowid'];
        $price = $cart['price'];
        $amount = $price * $cart['qty'];
        $qty = $cart['qty'];

        $data = array(
        'rowid' => $rowid,
        'price' => $price,
        'amount' => $amount,
        'qty' => $qty
        );

        $this->cart->update($data);
        }
         redirect('jep_controller');
        }
        
        
        public function billing_view(){
            // Load "billing_view".
            $this->load->view('shopping_view');
            
        }
        
        public function save_order()
       {
        // This will store all values which inserted from user.
        $customer = array(
        'custormer_name' => $this->input->post('name'),
        'email' => $this->input->post('email'),
        'address' => $this->input->post('address'),
        'phone' => $this->input->post('phone')
        );
        $this->load->model('billing_model');
        // And store user information in database.
        $cust_id = $this->billing_model->insert_customer($customer);

        $order = array(
        'date' => date('Y-m-d'),
        'customerid' => $cust_id
        );

        $ord_id = $this->billing_model->insert_order($order);

        if ($cart = $this->cart->contents()):
        foreach ($cart as $item):
        $order_detail = array(
        'customerid' => $cust_id,
        'productid'  => $item['id'],
        'quantity'   => $item['qty'],
        'name'       => $item['name'],
        'price' => $item['price'],
        'subtotal' => $item['subtotal']
        );

        // Insert product imformation with order detail, store in cart also store in database.

        $cust_id = $this->billing_model->insert_order_detail($order_detail);
        endforeach;
        endif;

        // After storing all imformation in database load "billing_success".
        $this->load->view('billing_success');
        
        $this->cart->destroy();
        
        }
        
}
