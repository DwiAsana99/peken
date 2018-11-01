<div class="container">
  <div class="row">
    <div class="col-xs-12 col-md-6 col-md-offset-3">
      <div class="text-center" style="margin-bottom:7%;">
        <h2><img class=" text-center" src="<?php echo base_url('assets/front_end_assets/img/2Dinilaku_Logo.png') ?>" alt=""></h2>
        <h4>Registration</h4>
      </div>
      <?php echo validation_errors('<div id="login_alert" class="alert alert-danger" role="alert"><p id="login_error">','</p>
    </div>');?>
      <div id="login_alert" class="" role="alert">
        <p id="login_error"></p>
      </div>
       <?php echo form_open('User/registration','class="" id="register_email_form"'); ?>

        <div class="row">
          <div class="col-xs-12">
            <div class="form-group ">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" value="<?php echo set_value('email') ?>" id="email" required>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12 col-md-4">
            <!-- Contoh captcha -->
            <?php echo $image; ?>
          </div>
          <div class="col-xs-12 col-md-8">
            <div class="form-group">
              <label for="captcha_code">Captcha Code</label>
              <input type="text" class="form-control" name="captcha" id="captcha_code" required>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 text-right">
            <button type="submit" class="btn btn-default btn-lg" id="btnRegister" style="margin-bottom: 105px">Register</button>
          </div>
        </div>
      <?php echo form_close(); ?>
    </div>
  </div>
</div>
<script type="text/javascript">
  $("#btnRegister").click(function (event) {
    event.preventDefault();
    $.LoadingOverlay("show");
    setTimeout( function () {
      $("#register_email_form").submit();
    }, 2000);
  });
</script>
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
