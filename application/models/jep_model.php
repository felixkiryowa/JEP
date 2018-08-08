<?php
class Jep_model extends CI_Model{
    /**
     * Function to get All best seller Images
     * @return type
     */
    public function get_best_seller_images() {
          $query = $this->db->get('best_sellers');
         if($query -> num_rows() > 0){
              return $query->result(); 
         }
    } 
    /*
     * Function to get all earings products
     */
     public function get_earings_images() {
          $query = $this->db->get('products');
         if($query -> num_rows() > 0){
              return $query->result(); 
         }
    } 
     /*
      * Function to get all bags from the data base
      */
     public function get_bags_images() {
          $query = $this->db->get('bags');
         if($query -> num_rows() > 0){
              return $query->result(); 
         }
    }
    
     /**
     * Function To get a single  Ring
     * @param type $id
     * @return type
     */
    public function fetch_earing($id = null) 
	{
		if($id) {
			$sql = "SELECT * FROM products WHERE id = ?";
			$query = $this->db->query($sql, array($id));
			return $query->row_array();
		}

		$sql = "SELECT * FROM products";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
        
         /**
     * Function To get a single  Ring
     * @param type $id
     * @return type
     */
    public function fetch_bag($id = null) 
	{
		if($id) {
			$sql = "SELECT * FROM bags WHERE id = ?";
			$query = $this->db->query($sql, array($id));
			return $query->row_array();
		}

		$sql = "SELECT * FROM bags";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
        
            public function all_bags() 
	{
		
		$sql = "SELECT * FROM customers";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
}

