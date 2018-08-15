<?php
/**
*
*/
class M_user extends CI_Model{
  protected $other_table_columns;
  protected $join_table;
  protected $filter_value;
  protected $group_by;
  protected $order_by;
  protected $limit;
  protected $offset;
  // function get_member("0",$email, $password) {
  //   $query = $this->db->query("SELECT * FROM tbmember WHERE Email = '$email' AND Pwd = '$password'");
  //   return $query;
  //  }
  // mencari 10 supplier teratas
  function set_search_user($rules){
    $this->other_table_columns = !empty($rules['join']['other_table_columns']) ? $rules['join']['other_table_columns'] : "" ;
    $this->join_table = !empty($rules['join']['join_table']) ? $rules['join']['join_table'] : "" ;
    $this->group_by = !empty($rules['group_by']) ? " GROUP BY ".$rules['group_by'] : "" ;
    $this->order_by = !empty($rules['order_by']) ? " ORDER BY ".$rules['order_by'] : "" ;
    $this->limit = isset($rules['limit']) ? " LIMIT ".$rules['limit'] : "" ;
    $this->offset = isset($rules['offset'])  ? " OFFSET ".$rules['offset'] : "" ;
    $this->filter_value = isset($rules['filter_value']['user_level']) ? " AND user_tb.UserLevel = ".$rules['filter_value']['user_level'] : "" ;
    $this->filter_value .= isset($rules['filter_value']['user_id']) ? " AND user_tb.Id = ".$rules['filter_value']['user_id'] : "" ;
    $this->filter_value .= isset($rules['filter_value']['email']) ? " AND user_tb.Email = "."'".$rules['filter_value']['email']."'" : "" ;
    $this->filter_value .= isset($rules['filter_value']['password']) ? " AND user_tb.Password = "."'".$rules['filter_value']['password']."'" : "" ;
    $this->filter_value .= isset($rules['filter_value']['search_value']) ? " AND user_tb.CompanyName LIKE "."'%".$rules['filter_value']['search_value']."%'"  : "" ;
  }
  function get_user() {
    $query = "SELECT user_tb.* ".$this->other_table_columns."
    FROM user_tb ".$this->join_table."
    WHERE 1=1 ".$this->filter_value.$this->group_by.$this->order_by.$this->limit.$this->offset;
    //echo $query;exit();
    $query = $this->db->query($query);
    return $query;
  }
  //mencari data supplier berdasarkan $supplier_id atau $search_value dari form pencarian
  function get_member(
    $is_user = "",
    $is_supplier = "",
    $id_member = "",
    $search_value = "",
    $offset = "",
    $limit = "",
    $email = "",
    $password = "",
    $with_member_gallery= ""
  ){
    if (!is_numeric($is_supplier)) {
      $filter_value = "";
      $id_member_alias = "";
    }  elseif ($is_supplier == 1) {
      $filter_value = " AND tbmember.IsSupplier = 1 ";
      $id_member_alias = " AS IdSupplier ";
    } elseif($is_supplier == 0) {
      $filter_value = " AND tbmember.IsSupplier = 0 ";
      $id_member_alias = " AS IdBuyer ";
    }
    $filter_value .= ($is_user == 1) ? " AND tbmember.IsUser = 1 " : "" ;
    $filter_value .= !empty($id_member) ? " AND tbmember.IdMember = $id_member " : "" ;
    $filter_value .= !empty($search_value) ? " AND  CompanyName LIKE '%$search_value%' " : "" ;
    $filter_value .= !empty($email) ? " AND  Email = '$email' " : "" ;
    $filter_value .= !empty($password) ? " AND  Pwd = '$password' " : "" ;
    $limit = !empty($limit) ? " LIMIT $limit " : "" ;
    $offset = is_numeric($offset) ? " OFFSET $offset " : "" ;
    $member_gallery_join = "";
    $member_gallery_kolom = "";
    if ($with_member_gallery == "include") {
      $member_gallery_join = " INNER JOIN tbgallerypic ON tbmember.IdMember = tbgallerypic.IdMember ";
      $member_gallery_kolom = " ,tbgallerypic.IdGalleryPic,  tbgallerypic.FileName As GalleryPicFileName ";
    }

    $query = "SELECT
    tbmember.IdMember".$id_member_alias.",tbmember.Email,tbmember.Location,tbmember.ZipCode,tbmember.City,tbmember.IsUser,tbmember.IsSupplier,tbmember.FirstName,tbmember.LastName,tbmember.CompanyName,
    tbmember.Phone,tbmember.ProfilImage,tbmember.Tdp,tbmember.Siup,tbmember.Npwp,tbmember.CompanyAddress,tbmember.CompanyDescription
    ".$member_gallery_kolom."
    FROM tbmember ".$member_gallery_join."
    WHERE 1=1 ".$filter_value.$limit.$offset;
     //echo $query;exit();
    $query = $this->db->query($query);

    return $query;
  }
  function add_user($data){
    if ($this->db->insert("user_tb",$data)) {
      return TRUE;
    }
  }
  function update_user($data="",$id=""){
    $this->db->set($data);
    $this->db->where("Id",$id);
    $this->db->update("user_tb",$data);
    // if (!empty($supplier_gallery_pic)) {
    //   foreach ($supplier_gallery_pic as $row => $value) {
    //     $supplier_gallery_pic_data = array("Id" => $id,"FileName" => $value );
    //     $this->db->insert('tbgallerypic', $supplier_gallery_pic_data);
    //   }
    // }

  }
}

?>
