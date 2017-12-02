<?php
/**
 *
 */
class M_product_category extends CI_Model{
  function get_product_category(){
    $query = $this->db->query('SELECT * FROM tbproductcategory');
    return $query;
  }

  function add_product_category_db($table,$data) {
			 $this->db->insert($table,$data);
	}

  function edit_product_category_view($code) {
		$query = $this->db->query("SELECT *
															FROM tbproductcategory
															WHERE ProductCategoryCode = $code
		");
	 	return $query->result();
	}


	function edit_product_category_db($data,$code) {
 			 $this->db->where('ProductCategoryCode',$code );
 			 $this->db->update("tbproductcategory",$data);
  }
}

?>
