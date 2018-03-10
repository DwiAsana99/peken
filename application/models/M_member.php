<?php
/**
*
*/
class M_member extends CI_Model{
  // function get_member("0",$email, $password) {
  //   $query = $this->db->query("SELECT * FROM tbmember WHERE Email = '$email' AND Pwd = '$password'");
  //   return $query;
  //  }
  // mencari 10 supplier teratas
  function get_top10_supplier(){
    $query = $this->db->query("SELECT IdMember AS IdSupplier, ProfilImage,CompanyName,Location,Email,Phone FROM tbmember WHERE IsSupplier = 1 LIMIT 8");
    return $query->result();
  }
  //mencari data supplier berdasarkan $id_supplier atau $search_value dari form pencarian
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
    if (empty($is_supplier)) {
      $filter_value = "";
      $id_member_alias = "";
    }  elseif ($is_supplier == 1) {
      $filter_value = " AND tbmember.IsSupplier = 1 ";
      $id_member_alias = " AS IdSupplier ";
    } elseif($is_supplier == 0) {
      $filter_value = " AND tbmember.IsSupplier = 0 ";
      $id_member_alias = " AS IdBuyer ";
    }
    $filter_value .= ($is_user == 1) ? " AND tbmember.IsUser = 1 " : " AND tbmember.IsUser = 0 " ;
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
  public function add_member($data){
    if ($this->db->insert("tbmember",$data)) {
      return TRUE;
    }
  }
  public function edit_member($data,$id,$supplier_gallery_pic){
    $this->db->set($data);
    $this->db->where("IdMember",$id);
    $this->db->update("tbmember",$data);
    foreach ($supplier_gallery_pic as $row => $value) {
      $supplier_gallery_pic_data = array("IdMember" => $id,"FileName" => $value );
      $this->db->insert('tbgallerypic', $supplier_gallery_pic_data);
    }
  }
}

?>
