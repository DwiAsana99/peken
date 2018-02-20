<!DOCTYPE html>
<html class="uk-notouch" lang="en-GB">
  <head>
    <meta charset="utf-8">
    <title>Register</title>
    <?php
    $this->load->view('template/front/css_front');
    $this->load->view('template/front/js_front');
    ?>
  </head>
  <body>
    <div class="uk-container uk-container-center uk-container-small">
      <div class="uk-width-medium-1-2 uk-container-center">
      <h1 class="uk-text-center">Marketplace Name</h1>
      <h2 class="uk-text-center">Register</h2>
      <?php echo validation_errors();?>

 <?php echo form_open('Register/index','class="uk-panel uk-panel-box uk-form"'); ?>

      <div class="uk-form-row ">
            <input name="email" value="<?php echo set_value('email') ?>" class="uk-input uk-form-large" type="text" placeholder="E-mail" required>
      </div>
      <div class="uk-form-row">
          <p><?php echo $image; ?></p>
      </div>
      <div class="uk-form-row ">
            <input name="captcha" class="uk-input uk-form-large" type="text" placeholder="Captcha" required>
      </div>
      <div class="uk-form-row">
        <button type="submit" class="uk-button uk-button-success">Register</button>
      </div>
      <?php echo form_close(); ?>
      </div>
    </div>
  </body>
</html>
