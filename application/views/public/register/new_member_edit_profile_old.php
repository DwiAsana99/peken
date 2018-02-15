<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php
    $this->load->view('template/front/Css_front');
    $this->load->view('template/front/Js_front');
    ?>
  </head>
  <body>
    <div class="uk-container uk-container-center uk-container-small">
      <div class="uk-width-medium-1-2 uk-container-center">
        <h1 class="uk-text-center">Marketplace Name</h1>
        <h2 class="uk-text-center">Information</h2>
        <?php echo form_open('Register/edit_new_member_profile','class="uk-panel uk-panel-box uk-form"'); ?>

          <div class="uk-form-row ">
                <label for="">Username </label>
                <input readonly value="<?php echo $user[0]->Email; ?>" class="uk-input uk-form" type="text" placeholder="">
          </div>
          <div class="uk-form-row ">
                <label for="">Password</label>
                <input name="password" value="" class="uk-input uk-form" type="password" placeholder="">
          </div>
          <div class="uk-form-row ">
                <label for="">Confirm Password</label>
                <input name="c_password" value="" class="uk-input uk-form" type="password" placeholder="">
          </div>
          <div class="uk-form-row ">
                <label for="">Location</label>
                <select class="uk-input" name="location">
                  <option value="indonesia">Indonesia</option>
                </select>
          </div>
          <div class="uk-form-row ">
            <label for=""> I am a</label><br>
            <input type="radio" name="is_supplier" value="1">Suplier
            <input type="radio" name="is_supplier" value="0">Buyer
          </div>
          <div class="uk-form-row ">
                <label for="">Full Name</label>
                <div class="uk-grid">
                  <div class="uk-width-1-2">
                  <input name="first_name" value="<?php echo $user[0]->FirstName; ?>" class="uk-input uk-form" type="text" placeholder="First Name">
                </div>
                  <div class="uk-width-1-2">
                <input name="last_name" value="<?php echo $user[0]->LastName; ?>" class="uk-input uk-form" type="text" placeholder="Last Name">
              </div>
            </div>
          </div>
          <div class="uk-form-row ">
                <label for="">Company Name </label>
                <input name="company_name" value="<?php echo $user[0]->CompanyName; ?>" class="uk-input uk-form" type="text" placeholder="">
          </div>
          <div class="uk-form-row ">
                <label for="">Telp</label><div class="uk-grid">
                  <div class="uk-width-2-10">
                  <input disabled  value="+62" class="uk-input uk-form" type="text" placeholder="First Name">
                </div>
                  <div class="uk-width-8-10">
                <input name="phone" value="" class="uk-input uk-form" type="text" placeholder="Telp">
              </div>
            </div>
          </div>
          <input type="hidden" name="id_member" value="<?php echo $user[0]->IdMember; ?>">
          <button type="submit" name="button"> submit</button>
        <?php echo form_close(); ?>
      </div>
    </div>
  </body>
</html>
