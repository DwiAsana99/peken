<?php
$this->load->view('template/front/head_front');
?>
<div class="uk-container-center uk-margin-top" style="background:#ddd;">
  <nav class="uk-navbar"></nav>
  <div class=" uk-grid uk-container-center tm-grid-truncate"  style="padding-top:30px; width: 1300px;" data-uk-grid-margin>
    <div class="uk-width-1-1 " style="background:#fff;padding-top:30px;padding-bottom: 30px;"  data-uk-grid-margin>
      <div class="uk-container">

        <form method="post" id="Simpan"  action="<?php echo base_url().'index.php/Buyer/edit_buyer_account'; ?>" enctype="multipart/form-data"  onfocusout="edit(event)">
          <!-- <div class=" ">
          <label  for="profil_image">Profil Image</label> <br>
          <img src="<?php //echo base_url().'assets/suplier_upload/'.$user[0]->Gambar; ?>" id = "fotoview" alt="" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"><br>
          <a href="#" data-target="#myModal" data-toggle='modal' class="btn btn-default ">Change</a>
        </div> -->
        <div class="  ">
          <div class=" ">
            <label class="">Email</label>
            <input type="text" name="first_name" id="category" value="<?php echo $user[0]->Email; ?>" disabled class=" "  placeholder="">
          </div>
          <div class=" ">
            <label class="">First Name</label>
            <input type="text" name="first_name" id="category" value="<?php echo $user[0]->FirstName; ?>" data-validation="length" data-validation-length="min4" data-validation-error-msg="Please fill out category name..."  class=" "  placeholder="">
          </div>
          <div class=" ">
            <label class="">Last Name</label>
            <input type="text" name="last_name" id="description" value="<?php echo $user[0]->LastName; ?>" data-validation="length" data-validation-length="min4" data-validation-error-msg="Please fill out category description..."  class=""  placeholder="">
          </div>
          <div class=" ">
            <label class="">Company Name</label>
            <input type="text" name="company_name" id="description" value="<?php echo $user[0]->CompanyName; ?>" data-validation="length" data-validation-length="min4" data-validation-error-msg="Please fill out category description..."  class=""  placeholder="">
          </div>
          <div class=" ">
            <label class="">Company Address</label>
            <input type="text" name="company_address" id="" value="<?php echo $user[0]->CompanyAddress; ?>" data-validation="length" data-validation-length="min4" data-validation-error-msg="Please fill out category description..."  class=""  placeholder="">
          </div>
          <div class=" ">
            <label class="">City</label>
            <input type="text" name="city" id="description" value="<?php echo $user[0]->City; ?>" data-validation="length" data-validation-length="min4" data-validation-error-msg="Please fill out category description..."  class=""  placeholder="">
          </div>
          <div class=" ">
            <label class="">Zip Code</label>
            <input type="text" name="zip_code" id="description" value="<?php echo $user[0]->ZipCode; ?>" data-validation="length" data-validation-length="min4" data-validation-error-msg="Please fill out category description..."  class=""  placeholder="">
          </div>
          <div class=" ">
            <label class="">Location</label>
            <select name="location" data-validation-error-msg="Please fill out category description..."  class="">
              <option value="indonesia">Indonesia</option>
            </select>
          </div>
          <div class=" ">
            <label class="">Phone</label>
            <input type="number" name="phone" id="description" value="<?php echo $user[0]->Phone; ?>" data-validation="length" data-validation-length="min4" data-validation-error-msg="Please fill out category description..."  class=""  placeholder="">
          </div>
          <button type="submit" class=" " name="button">Save</button>
        </form>




      </div>
    </div>
  </div>
</div>
<?php

$this->load->view('template/front/Foot_front');

?>
