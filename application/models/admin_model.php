<?php
class Admin_model extends CI_Model{
    public function __construct() {
        $this->userTbl = 'administrator';
    }
    /*
     * get rows from the users table
     */
      function getRows($params = array()){
        $this->db->select('*');
        $this->db->from($this->userTbl);
        
        //fetch data by conditions
        if(array_key_exists("conditions",$params)){
            foreach ($params['conditions'] as $key => $value) {
                $this->db->where($key,$value);
            }
        }
        
        if(array_key_exists("id",$params)){
            $this->db->where('id',$params['id']);
            $query = $this->db->get();
            $result = $query->row_array();
        }else{
            //set start and limit
            if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit'],$params['start']);
            }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit']);
            }
            $query = $this->db->get();
            if(array_key_exists("returnType",$params) && $params['returnType'] == 'count'){
                $result = $query->num_rows();
            }elseif(array_key_exists("returnType",$params) && $params['returnType'] == 'single'){
                $result = ($query->num_rows() > 0)?$query->row_array():FALSE;
            }else{
                $result = ($query->num_rows() > 0)?$query->result_array():FALSE;
            }
        }

        //return fetched data
        return $result;
    }
    /**
     * Function to add A pair of earings to the database
     * @param type $images
     * @return type
     */
    public function insert_pair_of_earings($formdata) {
        return $this->db->insert('products',$formdata); 
    }
    
    /**
     * Function To Retrieve All Ear Rings
     * @param type $id
     * @return type
     */
    public function fetchMemberEarings($id = null) 
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
        
    public function get_single_pair($id){
        $query = $this->db->get_where('products', array('id' => $id));
        if($query -> num_rows() > 0){
              return $query->row(); 
         }
      
    } 

	
     public function update_pair($data,$id){
        
       return $this->db->where('id', $id)->update('products', $data);
       
    }
    /**
     * Function to Delete Pair 
    * @param type $id
     * @return type
     */
     public function delete_pair($id){
       return $this->db->where('id', $id)->delete('products');
    }
   /******************************************************************
    * /******************** BAGS        ********************************
    * /******************************************************************
    * /******************************************************************
    */
     /**
     * Function to add A pair of earings to the database
     * @param type $images
     * @return type
     */
    public function insert_bag($formdata) {
        return $this->db->insert('bags',$formdata); 
    }
    
    /**
     * Function To Retrieve All Ear Rings
     * @param type $id
     * @return type
     */
    public function fetch_bags($id = null) 
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
        
     public function get_single_bag($id){
        $query = $this->db->get_where('bags', array('id' => $id));
        if($query -> num_rows() > 0){
              return $query->row(); 
         }
      
    }
    /**
     * Function to update bag information
     * @param type $data
     * @param type $id
     * @return type
     */
    
     public function update_bag($data,$id){
        
       return $this->db->where('id', $id)->update('bags', $data);
       
    }
    
     /**
     * Function to Delete Pair 
    * @param type $id
     * @return type
     */
     public function delete_bag($id){
       return $this->db->where('id', $id)->delete('bags');
    }
    
    /******************************************************************
    * /******************** BEST SELLERS       ********************************
    * /******************************************************************
    * /******************************************************************
    */
     /**
     * Function to add A pair of earings to the database
     * @param type $images
     * @return type
     */
    public function insert_best_seller($formdata) {
        return $this->db->insert('best_sellers',$formdata); 
    }
    
    /**
     * Function To Retrieve All Ear Rings
     * @param type $id
     * @return type
     */
    public function fetch_best_sellers($id = null) 
	{
		if($id) {
			$sql = "SELECT * FROM best_sellers WHERE id = ?";
			$query = $this->db->query($sql, array($id));
			return $query->row_array();
		}

		$sql = "SELECT * FROM best_sellers";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
        /**
         * Function to get a single best seller
         * @param type $id
         * @return type
         */
      public function get_single_best_seller($id){
        $query = $this->db->get_where('best_sellers', array('id' => $id));
        if($query -> num_rows() > 0){
              return $query->row(); 
         }
      
    }
    
       public function update_best_seller($data,$id){
        
       return $this->db->where('id', $id)->update('best_sellers', $data);
       
    }
    
    /**
     * Function to Delete Pair 
    * @param type $id
     * @return type
     */
     public function delete_best_sellers($id){
       return $this->db->where('id', $id)->delete('best_sellers');
    }
        
}