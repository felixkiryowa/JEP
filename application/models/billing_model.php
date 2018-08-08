<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Billing_model extends CI_Model
{
    
    // Insert customer details in "customer" table in database.
    public function insert_customer($data)
    {
        $this->db->insert('customers', $data);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
    
    // Insert order date with customer id in "orders" table in database.
    public function insert_order($data)
    {
        $this->db->insert('orders', $data);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
    
    // Insert ordered product detail in "order_detail" table in database.
    public function insert_order_detail($data)
    {
        $this->db->insert('order_detail', $data);
    }
    
    /**
     * Function To Retrieve All Ear Rings
     * @param type $id
     * @return type
     */
    public function get_all_orders($id = null) 
	{
		if($id) {
			$sql = "SELECT * FROM  order_detail WHERE id = ?";
			$query = $this->db->query($sql, array($id));
			return $query->row_array();
		}

		$sql = "SELECT * FROM  order_detail";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
    
   // public function get_all_orders() {
    //    $this->db->select('*');
    //    $this->db->from('customers');
        //$this->db->join('orders', 'orders.customerid = customers.id ','left');
        //$this->db->join('order_detail', 'order_detail.customerid = orders.customerid');
     //   $query = $this->db->get();
        
      //  return $query->result_array();
        
    //}
}



?>