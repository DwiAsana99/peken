<div class="wrapper">
    <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo site_url('Home/home_view/') ;?>" class="logo" style="position:fixed">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>D</b>L</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Dini</b>Laku</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar  ">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>

          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
            

              <!-- Notifications: style can be found in dropdown.less -->

              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <!--<img src="//<?php //echo base_url('assets/supplier_upload/').$this->session->userdata('profile_image') ?>" height="160" class="user-image" alt="User Image">-->
                  <img src="<?php if (empty($this->session->userdata('profile_image')) OR $this->session->userdata('profile_image') == "") {
                                echo base_url().'assets/icon/upload-icon.png';
                            }else{
                                echo base_url().'assets/supplier_upload/'.$this->session->userdata('profile_image');

                            }?>" height="22" class="img-circle" alt="User Image">
                  <span class="hidden-xs"><?php echo $this->session->userdata('company_name'); ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?php if (empty($this->session->userdata('profile_image')) OR $this->session->userdata('profile_image') == "") {
                                echo base_url().'assets/icon/upload-icon.png';
                            }else{
                                echo base_url().'assets/supplier_upload/'.$this->session->userdata('profile_image');

                            }?>" height="160" class="img-circle" alt="User Image">

                    <p>
                      <?php echo $this->session->userdata('first_name'); ?> - <b><?php echo $this->session->userdata('company_name'); ?></b>
                      <!-- <small>Member since Nov. 2012</small> -->
                    </p>
                  </li>
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="<?php echo site_url('Home/home_view/') ;?>" class="btn btn-default btn-flat">Visite Site</a>
                    </div>
                    <div class="pull-right">
                      <a href="<?php echo base_url().'User/logout';?>" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
