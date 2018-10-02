<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<section class="content-header">
  <div class="btn-group btn-breadcrumb">
    <a href="#" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-home"></i></a>
    <a href="<?php echo base_url('User/member_view');?>" class="btn btn-default  btn-xs">Member List</a>
    <a  class="btn btn-default  btn-xs active">Edit Member Account</a>
  </div>
</section>

<!-- Main content -->
<section class="content">
 <div class="row">
  <div class="col-xs-12">
   <div class="box">
    <div class="box-header">
     <h3 class="box-title">Edit Member Account</h3>

    </div>
    <!-- /.box-header -->
    <div class="box-body">

  <form method="post" id="Simpan"  action="<?php echo base_url().'User/edit_member_account/'.$member[0]->Id; ?>" enctype="multipart/form-data"  >
    <!-- <div class=" ">
    <label  for="profile_image">Profil Image</label> <br>
    <img src="<?php //echo base_url().'assets/suplier_upload/'.$member[0]->Gambar; ?>" id = "fotoview" alt="" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"><br>
    <a href="#" data-target="#myModal" data-toggle='modal' class="btn btn-default ">Change</a>
  </div> -->
  <div class="form-group col-md-12 text-center">
      <label class="control-label">Profile Image</label><br>

      <div class="form-group text-center" >
        <!-- <label for="profile_image" class="btn"> -->
        <img src="<?php if (empty($member[0]->ProfileImage)) {
          echo base_url().'assets/icon/upload-icon.png';
        }else{
          echo base_url().'assets/supplier_upload/'.$member[0]->ProfileImage;
        }?>" id="fotoprofile" alt="" class="img-thumbnail" alt="Cinque Terre" width="175" height="175">
        <!-- </label> -->






        <br>
      </div>




      </div>
    <div class="form-group">
      <label class="">Email</label>
      <input class="form-control" type="text" name="first_name" id="category" value="<?php echo $member[0]->Email; ?>" disabled placeholder="">
    </div>
    <div class="form-group ">
      <label class="">First Name</label>
      <input class="form-control" type="text" name="first_name" id="category" value="<?php echo $member[0]->FirstName; ?>" data-validation="length" data-validation-length="min2" data-validation-error-msg="Please fill out category name..."    placeholder="">
    </div>
    <div class="form-group ">
      <label class="">Last Name</label>
      <input class="form-control" type="text" name="last_name" id="description" value="<?php echo $member[0]->LastName; ?>" data-validation="length" data-validation-length="min2" data-validation-error-msg="Please fill out category description..."    placeholder="">
    </div>
    <div class="form-group ">
      <label class="">Company Name</label>
      <input class="form-control" type="text" name="company_name" id="description" value="<?php echo $member[0]->CompanyName; ?>" data-validation="length" data-validation-length="min2" data-validation-error-msg="Please fill out category description..."    placeholder="">
    </div>
    <div class="form-group ">
      <label class="">Zip Code</label>
      <input class="form-control" type="text" name="zip_code" id="description" value="<?php echo $member[0]->ZipCode; ?>" data-validation="length" data-validation-length="min2" data-validation-error-msg="Please fill out category description..."    placeholder="">
    </div>
    <div class="form-group ">
      <label class="">Address</label>
      <input class="form-control" type="text" name="address" id="" value="<?php echo $member[0]->Address; ?>" data-validation="length" data-validation-length="min2" data-validation-error-msg="Please fill out category description..."    placeholder="">
    </div>
    <div class="form-group ">
      <label class="">City</label>
      <input class="form-control" type="text" name="city" id="description" value="<?php echo $member[0]->City; ?>" data-validation="length" data-validation-length="min2" data-validation-error-msg="Please fill out category description..."    placeholder="">
    </div>
    <div class="form-group ">
      <label class="">Province</label>
      <input class="form-control" type="text" name="province" id="description" value="<?php echo $member[0]->Province; ?>" data-validation="length" data-validation-length="min2" data-validation-error-msg="Please fill out category description..."    placeholder="">
    </div>
    <div class="form-group ">
      <label class="">State</label>
      <select class="form-control select2" id="state" name="state" data-validation-error-msg="Please fill out category description..."  >
        <option selected value="<?php echo $member[0]->State; ?>"><?php echo $member[0]->State; ?></option>
      </select>
    </div>
    <div class="form-group ">
      <label class="">Phone</label>
      <input class="form-control" type="number" name="phone" id="description" value="<?php echo $member[0]->Phone; ?>" data-validation="length" data-validation-length="min2" data-validation-error-msg="Please fill out category description..."  class=""  placeholder="">
    </div>
    <div class="radio">
      <?php if ($member[0]->UserLevel == 1){ ?>
        <label class="radio-inline">
          <input  value="1" type="radio" name="user_level" checked >Supplier
        </label>
        <label class="radio-inline">
          <input  value="2" type="radio" name="user_level" >Buyer
        </label>
        <label class="radio-inline">
          <input  value="3" type="radio" name="user_level" >Both
        </label>
      <?php }elseif($member[0]->UserLevel == 2){ ?>
        <label class="radio-inline">
          <input  value="1" type="radio" name="user_level"  >Supplier
        </label>
        <label class="radio-inline">
          <input  value="2" type="radio" name="user_level" checked>Buyer
        </label>
        <label class="radio-inline">
          <input  value="3" type="radio" name="user_level" >Both
        </label>
      <?php }elseif($member[0]->UserLevel == 3){ ?>
        <label class="radio-inline">
          <input  value="1" type="radio" name="user_level"  >Supplier
        </label>
        <label class="radio-inline">
          <input  value="2" type="radio" name="user_level" >Buyer
        </label>
        <label class="radio-inline">
          <input  value="3" type="radio" name="user_level" checked>Both
        </label>
      <?php } ?>



    </div>
    <button type="submit" class="btn btn-primary " name="button">Save</button>
  </form>
</div><!-- /.box-body -->
</div><!-- /.box -->
</div><!-- /.col -->
</div><!-- /.row -->
<!-- Modal -->

</section><!-- /.content -->

<script>
  $.validate({
    lang: 'es'
  });
</script>
<script type="text/javascript">

$(document).ready(function(){
  $('.select2').select2();
  let state = $('#state');
  //state.empty();
  //console.log(state.val());
  $.getJSON( "<?php echo base_url().'assets/country_json/state.json'; ?>", function( data ) {
    //console.log(data);
    $.each(data, function (key, entry) {
      if (state.val() != entry.name) {
        state.append($('<option></option>').attr('value', entry.name).text(entry.name));
      }

    })

  });
});
</script>
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
