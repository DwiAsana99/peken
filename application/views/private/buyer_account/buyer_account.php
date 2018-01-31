
<div class="container" style="">

  <form method="post" id="Simpan"  action="<?php echo base_url().'index.php/Buyer/edit_buyer_account'; ?>" enctype="multipart/form-data"  onfocusout="edit(event)">
    <!-- <div class=" ">
    <label  for="profil_image">Profil Image</label> <br>
    <img src="<?php //echo base_url().'assets/suplier_upload/'.$user[0]->Gambar; ?>" id = "fotoview" alt="" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"><br>
    <a href="#" data-target="#myModal" data-toggle='modal' class="btn btn-default ">Change</a>
  </div> -->

    <div class="form-group">
      <label class="">Email</label>
      <input class="form-control" type="text" name="first_name" id="category" value="<?php echo $user[0]->Email; ?>" disabled placeholder="">
    </div>
    <div class="form-group ">
      <label class="">First Name</label>
      <input class="form-control" type="text" name="first_name" id="category" value="<?php echo $user[0]->FirstName; ?>" data-validation="length" data-validation-length="min4" data-validation-error-msg="Please fill out category name..."    placeholder="">
    </div>
    <div class="form-group ">
      <label class="">Last Name</label>
      <input class="form-control" type="text" name="last_name" id="description" value="<?php echo $user[0]->LastName; ?>" data-validation="length" data-validation-length="min4" data-validation-error-msg="Please fill out category description..."    placeholder="">
    </div>
    <div class="form-group ">
      <label class="">Company Name</label>
      <input class="form-control" type="text" name="company_name" id="description" value="<?php echo $user[0]->CompanyName; ?>" data-validation="length" data-validation-length="min4" data-validation-error-msg="Please fill out category description..."    placeholder="">
    </div>
    <div class="form-group ">
      <label class="">Company Address</label>
      <input class="form-control" type="text" name="company_address" id="" value="<?php echo $user[0]->CompanyAddress; ?>" data-validation="length" data-validation-length="min4" data-validation-error-msg="Please fill out category description..."    placeholder="">
    </div>
    <div class="form-group ">
      <label class="">City</label>
      <input class="form-control" type="text" name="city" id="description" value="<?php echo $user[0]->City; ?>" data-validation="length" data-validation-length="min4" data-validation-error-msg="Please fill out category description..."    placeholder="">
    </div>
    <div class="form-group ">
      <label class="">Zip Code</label>
      <input class="form-control" type="text" name="zip_code" id="description" value="<?php echo $user[0]->ZipCode; ?>" data-validation="length" data-validation-length="min4" data-validation-error-msg="Please fill out category description..."    placeholder="">
    </div>
    <div class="form-group ">
      <label class="">Location</label>
      <select class="form-control" name="location" data-validation-error-msg="Please fill out category description..."  >
        <option value="indonesia">Indonesia</option>
      </select>
    </div>
    <div class="form-group ">
      <label class="">Phone</label>
      <input class="form-control" type="number" name="phone" id="description" value="<?php echo $user[0]->Phone; ?>" data-validation="length" data-validation-length="min4" data-validation-error-msg="Please fill out category description..."  class=""  placeholder="">
    </div>
    <button type="submit" class="btn btn-primary " name="button">Save</button>
  </form>

</div>
