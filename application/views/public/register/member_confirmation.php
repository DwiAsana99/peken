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
            <input type="email" readonly value="<?php echo $user[0]->Email; ?>" class="form-control" id="email" required>
          </div>
        </div>
      </div>
        <div class="row">
          <div class="col-xs-12 ">
            <div class="form-group">
              <label for="first_name">First Name</label>
              <input type="text" class="form-control" name="first_name" value="<?php echo $user[0]->FirstName; ?>" id="first_name" required>
            </div>
          </div>
          <div class="col-xs-12 ">
            <div class="form-group">
              <label for="last_name">Last Name</label>
              <input type="text" class="form-control" value="<?php echo $user[0]->LastName; ?>" name="last_name" id="last_name" required>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <div class="form-group">
              <label for="company_name">Company Name</label>
              <input type="text" class="form-control" value="<?php echo $user[0]->CompanyName; ?>" name="company_name" id="company_name" required>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <div class="form-group">
              <label for="company_name">Phone</label>
              <input type="text" class="form-control" value="" name="phone" id="phone" placeholder="" required>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" value="" name="password" id="password" required>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <div class="form-group">
              <label for="c_password">Confirm Password</label>
              <input type="password" class="form-control" value="" name="c_password" id="c_password" required>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <label for=""> I am a</label>
            <div class="radio">
              <label class="radio-inline">
                <input  value="1" type="radio" name="user_level" id="seller" checked required>Supplier
              </label>
              <label class="radio-inline">
                <input  value="2" type="radio" name="user_level" id="buyer" required>Buyer
              </label>
              <label class="radio-inline">
                <input  value="3" type="radio" name="user_level" id="buyer" required>Both
              </label>
            </div>
          </div>
        </div>
        <input type="hidden" name="user_id" value="<?php echo $user[0]->Id; ?>">
        <div class="row">
          <div class="col-xs-12 text-right">
            <button type="submit" class="btn btn-default btn-lg">Submit</button>
          </div>
        </div>
      <?php echo form_close(); ?>
    </div>
  </div>
</div>
