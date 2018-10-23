<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/select2/select2.min.css') ?>" rel="stylesheet" type="text/css" />
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/select2/select2.full.min.js') ?>" type="text/javascript"></script>
<div class="container" style="">

  <form method="post" id="Simpan"  action="<?php echo base_url().'User/edit_buyer_account'; ?>" enctype="multipart/form-data">
    <!-- <div class=" ">
    <label  for="profile_image">Profil Image</label> <br>
    <img src="<?php //echo base_url().'assets/suplier_upload/'.$buyer[0]->Gambar; ?>" id = "fotoview" alt="" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"><br>
    <a href="#" data-target="#myModal" data-toggle='modal' class="btn btn-default ">Change</a>
  </div> -->
  <div class="form-group col-md-12 text-center">
      <label class="control-label">Profile Image</label><br>

      <div class="form-group text-center" >
        <!-- <label for="profile_image" class="btn"> -->
        <img src="<?php if (empty($buyer[0]->ProfileImage)) {
          echo base_url().'assets/icon/upload-icon.png';
        }else{
          echo base_url().'assets/supplier_upload/'.$buyer[0]->ProfileImage;
        }?>" id="fotoprofile" alt="" class="img-thumbnail" alt="Cinque Terre" width="175" height="175">
        <!-- </label> -->


        <!-- _________________dropdown______________ -->
        <div class="dropdown">
          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="glyphicon glyphicon-camera"></span> <span class="caret"></span>
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1" style="margin-left: 50%; margin-right: 50%;">
            <li><a href="#"><label for="profile_image" class="" style="font-weight:400">Change Profile Image</label></a></li>



            <?php if (!empty($buyer[0]->ProfileImage)): ?>
              <li>
                <a href="#" data-toggle="modal" data-target="#lightbox">
                  <img src="<?php echo base_url().'assets/supplier_upload/'.$buyer[0]->ProfileImage;?>" style="display: none;" alt="">
                  View Profile Image
                </a>
              </li>
            <?php endif; ?>

          </ul>
        </div>
        <!-- _________________dropdown______________ -->



        <br>
      </div>

      <?php if (empty($buyer[0]->ProfileImage)): ?>
        <div class="form-group">
          <input type="file" name="profile_image" value="" id="profile_image" size='20' onchange="readUrlProfileImage(this);" data-validation="mime size required"
          data-validation-allowing="jpg, png" data-validation-max-size="300kb" data-validation-error-msg-required="Gambar Belum Dipilih..."
          style="visibility:hidden;">

        </div>
      <?php else: ?>
        <div class="form-group">
          <input type="file" name="profile_image" value="" id="profile_image" size='20' onchange="readUrlProfileImage(this);" data-validation="mime size required"
          data-validation-allowing="jpg, png" data-validation-max-size="300kb" data-validation-error-msg-required="Gambar Belum Dipilih..."
          style="visibility:hidden;">
          <input type="hidden" name="profile_image_lama" id="profile_image_lama" value="<?php echo $buyer[0]->ProfileImage; ?>">
          <!-- <button type="submit" class="btn btn-danger" id="tambah_tdp">Delete</button> -->
        </div>
      <?php endif; ?>

          <h4><b>Member Level</b></h4>
          <h4>
            <i>
            <?php
              if ($buyer[0]->UserLevel == 2) {
                echo "Buyer Only";
              }elseif ($buyer[0]->UserLevel == 3){
                echo "Supplier & Buyer";
              }
            ?>
          </i>
          <a href="#" data-toggle="popover"  title="Member Level" data-content=" To change member level you can contact Dinilaku Admin in the following email dinilaku@gmail.com">
            <span class="glyphicon glyphicon-info-sign"></span>
          </a>
          </h4>
      </div>
    <div class="form-group">
      <label class="">Email</label>
      <input class="form-control" type="text" name="email" id="email" value="<?php echo $buyer[0]->Email; ?>" disabled >
    </div>
    <div class="form-group " id="form_group_first_name">
      <label class="control-label">First Name</label>
      <input class="form-control" type="text" name="first_name" id="first_name" value="<?php echo $buyer[0]->FirstName; ?>" placeholder="" >
      <span id="span_first_name" class=""></span>
    </div>
    <div class="form-group " id="form_group_last_name">
      <label class="control-label">Last Name</label>
      <input class="form-control" type="text" name="last_name" id="last_name" value="<?php echo $buyer[0]->LastName; ?>" placeholder="" >
      <span id="span_last_name" class=""></span>
    </div>
    <div class="form-group " id="form_group_company_name">
      <label class="control-label">Company Name</label>
      <input class="form-control" type="text" name="company_name" id="company_name" value="<?php echo $buyer[0]->CompanyName; ?>" placeholder="" >
      <span id="span_company_name" class=""></span>
    </div>
    <div class="form-group " id="form_group_zip_code">
      <label class="control-label">Zip Code</label>
      <input class="form-control" type="text" name="zip_code" id="zip_code" value="<?php echo $buyer[0]->ZipCode; ?>" placeholder="" >
      <span id="span_zip_code" class=""></span>
    </div>
    <div class="form-group " id="form_group_address">
      <label class="control-label">Address</label>
      <input class="form-control" type="text" name="address" id="address" value="<?php echo $buyer[0]->Address; ?>"  placeholder="" >
      <span id="span_address" class=""></span>
    </div>
    <div class="form-group " id="form_group_city">
      <label class="control-label">City</label>
      <input class="form-control" type="text" name="city" id="city" value="<?php echo $buyer[0]->City; ?>" placeholder="" >
      <span id="span_city" class=""></span>
    </div>
    <div class="form-group " id="form_group_province">
      <label class="control-label">Province</label>
      <input class="form-control" type="text" name="province" id="province" value="<?php echo $buyer[0]->Province; ?>" placeholder="" >
      <span id="span_province" class=""></span>
    </div>
    <div class="form-group " id="form_group_state">
      <label class="control-label">State</label>
      <select class="form-control select2" name="state"   id="state"  >
        <option selected value="<?php echo $buyer[0]->State; ?>"><?php echo $buyer[0]->State; ?></option>
      </select>
      <span id="span_state" class=""></span>
    </div>
    <div class="form-group " id="form_group_phone">
      <label class="control-label">Phone</label>
      <input class="form-control" type="number" name="phone" id="phone" value="<?php echo $buyer[0]->Phone; ?>" placeholder="" >
      <span id="span_phone" class=""></span>
    </div>
    <button type="submit" class="btn btn-primary " id="btnSimpan" value="Validate" name="button">Save</button>
  </form>

</div>

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
<script>

$("#btnSimpan").click(function(event) {
  // var productImage ="x";
  // $('input[name^="file"]').each(function() {
  //    productImage = "ada";
  // });
  var first_name_error = "";
  if ($("#first_name").val().trim() === "") {
    first_name_error = "Please fill out first name...";
  }
  if (first_name_error !== "") {
    $("#span_first_name").html(first_name_error);
    $("#span_first_name").addClass("help-block");
    $("#form_group_first_name").addClass("has-error").removeClass( "has-success" );
    event.preventDefault();
  } else {
    $("#span_first_name").html("");
    $("#form_group_first_name").addClass("has-success").removeClass( "has-error" );
  }
  // ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
  var last_name_error = "";
  if ($("#last_name").val().trim() === "") {
    last_name_error = "Please fill out last name...";
  }
  if (last_name_error !== "") {
    $("#span_last_name").html(last_name_error);
    $("#span_last_name").addClass("help-block");
    $("#form_group_last_name").addClass("has-error").removeClass( "has-success" );
    event.preventDefault();
  } else {
    $("#span_last_name").html("");
    $("#form_group_last_name").addClass("has-success").removeClass( "has-error" );
  }
  // ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
  var zip_code_error = "";
  if ($("#zip_code").val().trim() === "") {
    zip_code_error = "Please fill out zip code...";
  }
  if (zip_code_error !== "") {
    $("#span_zip_code").html(zip_code_error);
    $("#span_zip_code").addClass("help-block");
    $("#form_group_zip_code").addClass("has-error").removeClass( "has-success" );
    event.preventDefault();
  } else {
    $("#span_zip_code").html("");
    $("#form_group_zip_code").addClass("has-success").removeClass( "has-error" );
  }
  // ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
  var address_error = "";
  if ($("#address").val().trim() === "") {
    address_error = "Please fill out company address...";
  }
  if (address_error !== "") {
    $("#span_address").html(address_error);
    $("#span_address").addClass("help-block");
    $("#form_group_address").addClass("has-error").removeClass( "has-success" );
    event.preventDefault();
  } else {
    $("#span_address").html("");
    $("#form_group_address").addClass("has-success").removeClass( "has-error" );
  }
  // ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
  var city_error = "";
  if ($("#city").val().trim() === "") {
    city_error = "Please fill out city...";
  }
  if (city_error !== "") {
    $("#span_city").html(city_error);
    $("#span_city").addClass("help-block");
    $("#form_group_city").addClass("has-error").removeClass( "has-success" );
    event.preventDefault();
  } else {
    $("#span_city").html("");
    $("#form_group_city").addClass("has-success").removeClass( "has-error" );
  }
  // ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
  var province_error = "";
  if ($("#province").val().trim() === "") {
    province_error = "Please fill out province...";
  }
  if (province_error !== "") {
    $("#span_province").html(province_error);
    $("#span_province").addClass("help-block");
    $("#form_group_province").addClass("has-error").removeClass( "has-success" );
    event.preventDefault();
  } else {
    $("#span_province").html("");
    $("#form_group_province").addClass("has-success").removeClass( "has-error" );
  }
  // ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
  var state_error = "";
  if ($("#state").val().trim() === "") {
    state_error = "Please fill out state...";
  }
  if (state_error !== "") {
    $("#span_state").html(state_error);
    $("#span_state").addClass("help-block");
    $("#form_group_state").addClass("has-error").removeClass( "has-success" );
    event.preventDefault();
  } else {
    $("#span_state").html("");
    $("#form_group_state").addClass("has-success").removeClass( "has-error" );
  }
  // ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
  var company_name_error = "";
  if ($("#company_name").val() === "") {
    company_name_error = "Please fill out company name...";
  }
  if (company_name_error !== "") {
    $("#span_company_name").html(company_name_error);
    $("#span_company_name").addClass("help-block");
    $("#form_group_company_name").addClass("has-error").removeClass( "has-success" );
    event.preventDefault();
  } else {
    $("#span_company_name").html("");
    $("#form_group_company_name").addClass("has-success").removeClass( "has-error" );
  }
  // ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
  var phone_error = "";
  if ($("#phone").val().trim() === "") {
    phone_error = "Please fill out phone number...";
  }
  if (phone_error !== "") {
    $("#span_phone").html(phone_error);
    $("#span_phone").addClass("help-block");
    $("#form_group_phone").addClass("has-error").removeClass( "has-success" );
    event.preventDefault();
  } else {
    $("#span_phone").html("");
    $("#form_group_phone").addClass("has-success").removeClass( "has-error" );
  }
  // ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


  var all_error = "";
  all_error += first_name_error;
  all_error += last_name_error;
  all_error += zip_code_error;
  all_error += address_error;
  all_error += city_error;
  all_error += province_error;
  all_error += state_error;
  all_error += company_name_error;
  all_error += phone_error;


  // console.log(all_error);
  // event.preventDefault();

  if (all_error == "" ) {
    event.preventDefault();
    $.confirm({
      title: 'Confirmation',
      content: 'Are You Sure to Save?',
      type: 'blue',
      buttons: {
        Save: function () {
          $.LoadingOverlay("show");
          setTimeout( function () {
            $("#Simpan").submit();
          }, 2000);
        },
        Cancel: function () {

          $.alert('Data not saved...');
        },
      }
    });
  }
});
$("#first_name").focus(function() {
  $("#span_first_name").html("");
  $("#form_group_first_name").removeClass("has-success").removeClass("has-error");
});
$("#last_name").focus(function() {
  $("#span_last_name").html("");
  $("#form_group_last_name").removeClass("has-success").removeClass("has-error");
});
$("#zip_code").focus(function() {
  $("#span_zip_code").html("");
  $("#form_group_zip_code").removeClass("has-success").removeClass("has-error");
});
$("#address").focus(function() {
  $("#span_address").html("");
  $("#form_group_address").removeClass("has-success").removeClass("has-error");
});
$("#city").focus(function() {
  $("#span_city").html("");
  $("#form_group_city").removeClass("has-success").removeClass("has-error");
});
$("#province").focus(function() {
  $("#span_province").html("");
  $("#form_group_province").removeClass("has-success").removeClass("has-error");
});
$("#state").focus(function() {
  $("#span_state").html("");
  $("#form_group_state").removeClass("has-success").removeClass("has-error");
});
$("#company_name").focus(function() {
  $("#span_company_name").html("");
  $("#form_group_company_name").removeClass("has-success").removeClass("has-error");
});
$("#phone").focus(function() {
  $("#span_phone").html("");
  $("#form_group_phone").removeClass("has-success").removeClass("has-error");
});
$("#company_description").focus(function() {
  $("#span_company_description").html("");
  $("#form_group_company_description").removeClass("has-success").removeClass("has-error");
});
</script>
<script>
  // $.validate({
  //   lang: 'es'
  // });
</script>
<script type="text/javascript">
  $("[data-toggle=popover]").popover();
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




<!-- ______________________lightbox_____________ -->
<div id="lightbox" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <button type="button" class="close hidden" data-dismiss="modal" aria-hidden="true">×</button>
    <div class="modal-content">
      <div class="modal-body">
        <img src="" alt="" />
      </div>
    </div>
  </div>
</div>
<!-- ______________________lightbox_____________ -->
<script>
$(document).ready(function() {
  var $lightbox = $('#lightbox');

  $('[data-target="#lightbox"]').on('click', function(event) {
    var $img = $(this).find('img'),
    src = $img.attr('src'),
    alt = $img.attr('alt'),
    css = {
      'maxWidth': $(window).width() - 100,
      'maxHeight': $(window).height() - 100
    };

    $lightbox.find('.close').addClass('hidden');
    $lightbox.find('img').attr('src', src);
    $lightbox.find('img').attr('alt', alt);
    $lightbox.find('img').css(css);
  });

  $lightbox.on('shown.bs.modal', function (e) {
    var $img = $lightbox.find('img');

    $lightbox.find('.modal-dialog').css({'width': $img.width()});
    $lightbox.find('.close').removeClass('hidden');
  });
});
</script>
<style>
#lightbox .modal-content {
  display: inline-block;
  text-align: center;
}

#lightbox .close {
  opacity: 1;
  color: rgb(255, 255, 255);
  background-color: rgb(25, 25, 25);
  padding: 5px 8px;
  border-radius: 30px;
  border: 2px solid rgb(255, 255, 255);
  position: absolute;
  top: -15px;
  right: -55px;

  z-index:1032;
}
</style>
<?php if($this->session->flashdata('msg')): ?>
  <script type="text/javascript">
  $(function(){
    new PNotify({
      title: 'Success!',
      text: ' <?php echo $this->session->flashdata('msg'); ?>',
      delay: 5000,
      type: 'success'
    });
  });
  </script>
<?php endif; ?>
<script type="text/javascript">
$(document).ready(function(){
$.LoadingOverlaySetup({
  color           : "rgba(255, 255, 255, 0.8)" ,
  image           : "<?php echo base_url('assets/image-sistem/loading.gif') ?>",
  maxSize         : "230px",
  minSize         : "230px",
  resizeInterval  : 0,
  size            : "100%"
});
});
</script>
