<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-md-6 col-md-offset-3">
      <div class="text-center" style="margin-bottom:7%;">
        <h4><img class="text-center" src="<?php echo base_url('assets/front_end_assets/img/2Dinilaku_Logo.png') ?>" alt=""></h4>
        <h4> <b> Registration</b> </h4>
      </div>
      <?php echo form_open('User/member_confirmation'); ?>
      <div class="row">
        <div class="col-xs-12">
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" readonly value="<?php echo $user[0]->Email; ?>" class="form-control" id="email" >
          </div>
        </div>
      </div>
        <div class="row">
          <div class="col-xs-12 ">
            <div class="form-group">
              <label for="first_name">First Name</label>
              <input type="text" class="form-control" name="first_name" value="<?php echo $user[0]->FirstName; ?>" id="first_name" data-validation="length" data-validation-length="min1" data-validation-error-msg="Please fill out first name...">
            </div>
          </div>
          <div class="col-xs-12 ">
            <div class="form-group">
              <label for="last_name">Last Name</label>
              <input type="text" class="form-control" value="<?php echo $user[0]->LastName; ?>" name="last_name" id="last_name" data-validation="length" data-validation-length="min1" data-validation-error-msg="Please fill out last name...">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <div class="form-group">
              <label for="company_name">Company Name</label>
              <input type="text" class="form-control" value="<?php echo $user[0]->CompanyName; ?>" name="company_name" id="company_name" data-validation="length" data-validation-length="min1" data-validation-error-msg="Please fill out company name...">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <div class="form-group">
              <label for="company_name">Phone</label>
              <input type="text" class="form-control" value="<?php echo $user[0]->Phone; ?>" name="phone" id="phone" placeholder="" data-validation="length" data-validation-length="min1" data-validation-error-msg="Please fill out phone...">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" value="" name="password" id="password" data-validation="length" data-validation-length="min1" data-validation-error-msg="Please fill out password...">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <div class="form-group">
              <label for="c_password">Confirm Password</label>
              <input type="password" class="form-control" value="" name="c_password" id="c_password" data-validation="length" data-validation-length="min1" data-validation-error-msg="Please fill out password...">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <label for=""> I am a</label>
            <div class="radio">
              <label class="radio-inline">
                <input  value="1" type="radio" name="user_level" id="seller" checked >Supplier
              </label>
              <label class="radio-inline">
                <input  value="2" type="radio" name="user_level" id="buyer" >Buyer
              </label>
              <label class="radio-inline">
                <input  value="3" type="radio" name="user_level" id="buyer" >Both
              </label>
            </div>
          </div>
        </div>
        <input type="hidden" name="user_id" value="<?php echo $user[0]->Id; ?>">
        <div class="row">
          <div class="col-xs-12 text-right">
            <button type="submit" value="Validate" class="btn btn-default btn-lg">Submit</button>
          </div>
        </div>
      <?php echo form_close(); ?>
    </div>
  </div>
</div>
<script>
  $.validate({
    lang: 'es'
  });
</script>
