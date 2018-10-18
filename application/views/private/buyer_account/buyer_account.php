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
      <input class="form-control" type="text" name="first_name" id="category" value="<?php echo $buyer[0]->Email; ?>" disabled >
    </div>
    <div class="form-group ">
      <label class="">First Name</label>
      <input class="form-control" type="text" name="first_name" id="category" value="<?php echo $buyer[0]->FirstName; ?>"
        data-validation="length" data-validation-length="min4" data-validation-error-msg="Please fill out category name..." placeholder="" required>
    </div>
    <div class="form-group ">
      <label class="">Last Name</label>
      <input class="form-control" type="text" name="last_name" id="description" value="<?php echo $buyer[0]->LastName; ?>"
        data-validation="length" data-validation-length="min4" data-validation-error-msg="Please fill out category description..." placeholder="" required>
    </div>
    <div class="form-group ">
      <label class="">Company Name</label>
      <input class="form-control" type="text" name="company_name" id="description" value="<?php echo $buyer[0]->CompanyName; ?>"
        data-validation="length" data-validation-length="min4" data-validation-error-msg="Please fill out category description..." placeholder="" required>
    </div>
    <div class="form-group ">
      <label class="">Zip Code</label>
      <input class="form-control" type="text" name="zip_code" id="description" value="<?php echo $buyer[0]->ZipCode; ?>"
        data-validation="length" data-validation-length="min4" data-validation-error-msg="Please fill out category description..." placeholder="" required>
    </div>
    <div class="form-group ">
      <label class="">Address</label>
      <input class="form-control" type="text" name="address" id="" value="<?php echo $buyer[0]->Address; ?>"
        data-validation="length" data-validation-length="min4" data-validation-error-msg="Please fill out category description..." placeholder="" required>
    </div>
    <div class="form-group ">
      <label class="">City</label>
      <input class="form-control" type="text" name="city" id="description" value="<?php echo $buyer[0]->City; ?>"
        data-validation="length" data-validation-length="min4" data-validation-error-msg="Please fill out category description..." placeholder="" required>
    </div>
    <div class="form-group ">
      <label class="">Province</label>
      <input class="form-control" type="text" name="province" id="description" value="<?php echo $buyer[0]->Province; ?>"
        data-validation="length" data-validation-length="min4" data-validation-error-msg="Please fill out category description..." placeholder="" required>
    </div>
    <div class="form-group ">
      <label class="">State</label>
      <select class="form-control select2" name="state"   id="state" data-validation-error-msg="Please fill out category description..."  >
        <option selected value="<?php echo $buyer[0]->State; ?>"><?php echo $buyer[0]->State; ?></option>
      </select>
    </div>
    <div class="form-group ">
      <label class="">Phone</label>
      <input class="form-control" type="number" name="phone" id="description" value="<?php echo $buyer[0]->Phone; ?>"
        data-validation="length" data-validation-length="min4" data-validation-error-msg="Please fill out category description..."  placeholder="" required>
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
<script type="text/javascript">
  $("#btnSimpan").click(function (event) {

      event.preventDefault();
      $.confirm({
        title: 'Confirmation',
        content: 'Are You Sure to save?',
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
