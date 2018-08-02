
<div class="container" style="">

  <form method="post" id="Simpan"  action="<?php echo base_url().'User/edit_buyer_account'; ?>" enctype="multipart/form-data"  onfocusout="edit(event)">
    <!-- <div class=" ">
    <label  for="profile_image">Profil Image</label> <br>
    <img src="<?php //echo base_url().'assets/suplier_upload/'.$user[0]->Gambar; ?>" id = "fotoview" alt="" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"><br>
    <a href="#" data-target="#myModal" data-toggle='modal' class="btn btn-default ">Change</a>
  </div> -->
  <div class="form-group col-md-12 text-center">
      <label class="control-label">Profile Image</label><br>

      <div class="form-group text-center">
          <label for="profile_image" class="btn">
              <img src="<?php if (empty($buyer[0]->ProfileImage)) {
                  echo base_url().'assets/icon/upload-icon.png';
              }else{
                  echo base_url().'assets/supplier_upload/'.$buyer[0]->ProfileImage;
              }?>" id = "fotoprofile" alt="" class="img-thumbnail" alt="Cinque Terre" width="175" height="175" ></label><br>
          </div>

          <?php if (empty($buyer[0]->ProfileImage)): ?>
              <div class="form-group">
                  <input type="file" name="profile_image" value="" id="profile_image"  size='20' onchange="readUrlProfileImage(this);"  data-validation="mime size required"
                  data-validation-allowing="jpg, png"
                  data-validation-max-size="300kb"
                  data-validation-error-msg-required="Gambar Belum Dipilih..." style="visibility:hidden;">

              </div>
          <?php else: ?>
              <div class="form-group">
                  <input type="file" name="profile_image" value="" id="profile_image"  size='20' onchange="readUrlProfileImage(this);"  data-validation="mime size required"
                  data-validation-allowing="jpg, png"
                  data-validation-max-size="300kb"
                  data-validation-error-msg-required="Gambar Belum Dipilih..." style="visibility:hidden;">
                  <input type="hidden" name="profile_image_lama" id="profile_image_lama" value="<?php echo $buyer[0]->ProfileImage; ?>">
                  <!-- <button type="submit" class="btn btn-danger" id="tambah_tdp">Delete</button> -->
              </div>
          <?php endif; ?>
          <!--  -->

      </div>
    <div class="form-group">
      <label class="">Email</label>
      <input class="form-control" type="text" name="first_name" id="category" value="<?php echo $buyer[0]->Email; ?>" disabled placeholder="">
    </div>
    <div class="form-group ">
      <label class="">First Name</label>
      <input class="form-control" type="text" name="first_name" id="category" value="<?php echo $buyer[0]->FirstName; ?>" data-validation="length" data-validation-length="min4" data-validation-error-msg="Please fill out category name..."    placeholder="">
    </div>
    <div class="form-group ">
      <label class="">Last Name</label>
      <input class="form-control" type="text" name="last_name" id="description" value="<?php echo $buyer[0]->LastName; ?>" data-validation="length" data-validation-length="min4" data-validation-error-msg="Please fill out category description..."    placeholder="">
    </div>
    <div class="form-group ">
      <label class="">Company Name</label>
      <input class="form-control" type="text" name="company_name" id="description" value="<?php echo $buyer[0]->CompanyName; ?>" data-validation="length" data-validation-length="min4" data-validation-error-msg="Please fill out category description..."    placeholder="">
    </div>
    <div class="form-group ">
      <label class="">Zip Code</label>
      <input class="form-control" type="text" name="zip_code" id="description" value="<?php echo $buyer[0]->ZipCode; ?>" data-validation="length" data-validation-length="min4" data-validation-error-msg="Please fill out category description..."    placeholder="">
    </div>
    <div class="form-group ">
      <label class="">Address</label>
      <input class="form-control" type="text" name="address" id="" value="<?php echo $buyer[0]->Address; ?>" data-validation="length" data-validation-length="min4" data-validation-error-msg="Please fill out category description..."    placeholder="">
    </div>
    <div class="form-group ">
      <label class="">City</label>
      <input class="form-control" type="text" name="city" id="description" value="<?php echo $buyer[0]->City; ?>" data-validation="length" data-validation-length="min4" data-validation-error-msg="Please fill out category description..."    placeholder="">
    </div>
    <div class="form-group ">
      <label class="">Province</label>
      <input class="form-control" type="text" name="province" id="description" value="<?php echo $buyer[0]->Province; ?>" data-validation="length" data-validation-length="min4" data-validation-error-msg="Please fill out category description..."    placeholder="">
    </div>
    <div class="form-group ">
      <label class="">State</label>
      <select class="form-control" name="State" data-validation-error-msg="Please fill out category description..."  >
        <option value="indonesia">Indonesia</option>
      </select>
    </div>
    <div class="form-group ">
      <label class="">Phone</label>
      <input class="form-control" type="number" name="phone" id="description" value="<?php echo $buyer[0]->Phone; ?>" data-validation="length" data-validation-length="min4" data-validation-error-msg="Please fill out category description..."  class=""  placeholder="">
    </div>
    <button type="submit" class="btn btn-primary " name="button">Save</button>
  </form>

</div>
<script type="text/javascript">
function readUrlProfileImage(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#fotoprofile')
            .attr('src', e.target.result)
            .width(300)
            ;
        };

        reader.readAsDataURL(input.files[0]);
    }
}
</script>
<div class='col-md-3'>

</div>
<div class='col-md-9'>

</div>
