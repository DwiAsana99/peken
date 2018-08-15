<!DOCTYPE html>
<html class="uk-notouch" lang="en-GB">
<head>
  <title>Market Place</title>
  <meta charset="utf-8"/>
  <meta charset="UTF-8">
  <?php $this->load->view('template/front/css_front'); ?>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
</head>
<body>
  <div class="uk-container-center">
    <nav class="uk-navbar ">
      <div class="uk-container uk-container-center">
        <div class="uk-grid" data-uk-grid-margin>
          <div class="uk-width-medium-1-3">
            <ul class="uk-navbar-nav uk-hidden-small">
              <!--  <li class="">
              <a href="index.html">Logo Here</a>
            </li>
            <li class="">
            <a href="#"><i class="uk-icon-envelope-o  uk-icon-small "></i> notification</a>
          </li>-->
          <li class="">
            <a href="#"><i class="uk-icon-globe  uk-icon-small "></i> DINILAKU.COM </a>
          </li>

        </ul>
      </div>
      <div class="uk-width-medium-1-3 uk-hidden-small">
      </div>
      <div class="uk-width-medium-1-3 uk-hidden-small">
        <div class="uk-float-right">
          <ul class="uk-navbar-nav uk-hidden-small">
            <li>
              <a href="#" data-uk-modal><i class="uk-icon-facebook uk-icon-small"></i></a>
            </li>
            <li>
              <a href="#" data-uk-modal><i class="uk-icon-instagram uk-icon-small"></i></a>
            </li>
            <li>
              <a href="#" data-uk-modal><i class="uk-icon-twitter uk-icon-small"></i></a>
            </li>
            <li class="uk-parent" data-uk-dropdown="{mode:'click'}">
              <?php if (!empty($this->session->userdata('user_id'))): ?>

                  <!-- This is the element toggling the dropdown -->
                  <a href="#" data-uk-modal><span class="uk-icon-user"></span><?php echo $this->session->userdata('first_name'); ?></a>
                  <!-- This is the dropdown -->

                  <div class="uk-dropdown uk-dropdown-navbar">
                      <ul class="uk-nav uk-nav-dropdown" >
                        <li>
                          <a href="<?php echo base_url().'index.php/Buyer/buyer_account_view';?>">Profile</a>
                          <a href="<?php echo base_url().'index.php/Quotation/buyer_quotation_list';?>">Request for Quotation List</a>
                          <a href="<?php echo base_url().'index.php/Login/logout';?>" >Sign out</a>
                        </li>
                      </ul>
                  </div>

              <?php else: ?>
                <a href="#loginModal" data-uk-modal><span class="uk-icon-user"></span> Sign In</a>

              <?php endif; ?>

            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <a href="#offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a>
  <div class="uk-navbar-brand uk-navbar-center uk-visible-small">Logo</div>
</nav>
<!-- <nav class="uk-navbar">
<div class="uk-container uk-container-center">
<div class="uk-grid" data-uk-grid-margin>
<div class="uk-width-medium-1-1 uk-hidden-small">
<div class="uk-nav-header uk-text-center">
<h1 class="uk-h1">Market Place</h1>
</div>
</div>
</div>
</div>
</nav> -->

<div class="uk-grid" data-uk-grid-margin>
  <div class="uk-width-medium-1-3" style="height: 125px;">

    <div class="uk-vertical-align uk-text-left uk-margin-top">
      <div class="uk-grid-small">
        <div class="uk-width-1-2 uk-align-center uk-margin-right">
          <h1 class="uk-heading-large " style="color: #000;"><a href="<?php echo site_url('Home'); ?>" style="text-decoration:none; color:black;"><img src="<?php echo base_url().'assets/supplier_upload/dinilaku-logo.jpg'; ?>" width="350" alt=""></a></h1>
        </div>
      </div>
    </div>

  </div>
  <div class="uk-width-medium-2-3">
    <div class="uk-grid-small">
      <div class="uk-width-1-2">
        <form id="search_form" class="uk-search" method="get" action="<?php echo base_url().'index.php/Product/public_product_list_view'; ?>" style="margin-top:40px;margin-left: 50px;color:#000;">
          <ul class="uk-subnav uk-subnav-pill" data-uk-switcher="">

            <li class="uk-active" id="nav_product" ><a href="#">Product</a></li>
            <li  id="nav_supplier" ><a href="#">Supplier</a></li>

          </ul>
          <script type="text/javascript">
          function supplierClick() {
            var searchForm = document.getElementById('search_form');
            searchForm.setAttribute("action","<?php echo base_url().'index.php/Supplier/public_supplier_list_view'; ?>");
          }
          function productClick() {
            var searchForm = document.getElementById('search_form');
            searchForm.setAttribute("action","<?php echo base_url().'index.php/Product/public_product_list_view'; ?>");
          }
          var supplier = document.getElementById('nav_supplier');
          var product = document.getElementById('nav_product');
          supplier.addEventListener("click",supplierClick);
          product.addEventListener("click",productClick);
          </script>

          <input name="search_value" value="<?php echo $search_value = (isset($search_value)) ? $search_value : "" ;; ?>" class="uk-search-field search" type="search" placeholder=" search...">
          <!-- This is the dropdown, which is injected through JavaScript -->
          <div class="uk-dropdown uk-dropdown-search">
            <ul class="uk-nav uk-nav-search">...</ul>
          </div>

        </form>
      </div>
    </div>
  </div>

</div>
</div>
<!-- start login modal -->
<div id="loginModal" class="uk-modal">
  <div class="uk-modal-dialog bb-modal-dialog bb-login">
    <a class="uk-modal-close bb-modal-close uk-close"></a>
    <div class="uk-vertical-align-middle" style="width: 600px;">
      <h3 class="uk-text-center">Already a Member?</h3>

      <form class="uk-panel uk-panel-box uk-form" method="POST" action="<?php echo base_url().'index.php/Login/login';?>">
        <fieldset>
          <div class="uk-form-row">
            <input name="email" class="uk-width-1-1 uk-form-large" type="text" placeholder="E-mail">
          </div>
          <div class="uk-form-row">
            <input name="password" class="uk-width-1-1 uk-form-large" type="password" placeholder="Password">
          </div>
          <div class="uk-form-row">
            <button type="submit" name="submit" class="uk-width-1-1 uk-button uk-button-primary uk-button-large">Sign In</button>
          </div>
          <div class="uk-form-row uk-text-small">
            <label class="uk-float-left"><input type="checkbox"> Remember Me</label>
            <a class="uk-float-right uk-link uk-link-muted" href="#">Forgot Password?</a>
          </div>
        </fieldset>
      </form>
      <h3 class="uk-text-center">I have not registered</h3>
      <a class="uk-width-1-1 uk-button uk-button-primary uk-button-large" href="<?php echo base_url(); ?>index.php/Register">Register</a>
    </div>
  </div>
</div>
