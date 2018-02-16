<!DOCTYPE html>
<html>
    <head>
        <title>Market Place</title>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

         <?php $this->load->view('template/back/css_back'); ?>
        <!-- bootstrap wysihtml5 - text editor -->


    </head>
    <body class="hold-transition skin-blue sidebar-mini" >
    <div class="wrapper">
        <header class="main-header">
            <!-- Logo -->
            <a href="index2.html" class="logo" style="position:fixed">
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
                  <!-- Messages: style can be found in dropdown.less-->
                  <li class="dropdown messages-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <i class="fa fa-bell-o"></i>
                      <span class="label label-warning">4</span>
                    </a>
                    <ul class="dropdown-menu">
                      <li class="header">You have 4 notifications</li>
                      <li>
                        <!-- inner menu: contains the actual data -->
                        <ul class="menu">
                            <?php foreach($quotation as $q){ ?>
                          <li><!-- start message -->
                            <a href="#">
                              <div class="pull-left">
                                <img src="<?php echo base_url('assets/supplier_upload/').$this->session->userdata('profil_image') ?>" height="160" class="img-circle" alt="User Image">
                              </div>
                              <h4>
                                <?php echo $q->CompanyName; ?><br>
                                <small><i class="fa fa-clock-o"></i> <?php echo $q->DateSend; ?></small>
                              </h4>
                              <p><?php echo $q->Subject; ?></p>
                            </a>
                          </li>
                          <?php } ?>
                        </ul>
                      </li>
                      <li class="footer"><a href="#">See All Notifications</a></li>
                    </ul>
                  </li>
                  <!-- Notifications: style can be found in dropdown.less -->

                  <!-- User Account: style can be found in dropdown.less -->
                  <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <img src="<?php echo base_url('assets/supplier_upload/').$this->session->userdata('profil_image') ?>" height="160" class="user-image" alt="User Image">
                      <span class="hidden-xs"><?php echo $this->session->userdata('company_name'); ?></span>
                    </a>
                    <ul class="dropdown-menu">
                      <!-- User image -->
                      <li class="user-header">
                        <img src="<?php echo base_url('assets/supplier_upload/').$this->session->userdata('profil_image') ?>" height="160" class="img-circle" alt="User Image">

                        <p>
                          <?php echo $this->session->userdata('first_name'); ?> - <b><?php echo $this->session->userdata('company_name'); ?></b>
                          <small>Member since Nov. 2012</small>
                        </p>
                      </li>
                      <!-- Menu Body -->
                      <li class="user-body">
                        <div class="row">
                          <div class="col-xs-4 text-center">
                            <a href="#">Followers</a>
                          </div>
                          <div class="col-xs-4 text-center">
                            <a href="#">Sales</a>
                          </div>
                          <div class="col-xs-4 text-center">
                            <a href="#">Friends</a>
                          </div>
                        </div>
                        <!-- /.row -->
                      </li>
                      <!-- Menu Footer-->
                      <li class="user-footer">
                        <div class="pull-left">
                          <a href="#" class="btn btn-default btn-flat">Profile</a>
                        </div>
                        <div class="pull-right">
                          <a href="<?php echo base_url().'index.php/Login/logout';?>" class="btn btn-default btn-flat">Sign out</a>
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
