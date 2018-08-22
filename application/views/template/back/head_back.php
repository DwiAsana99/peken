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
                  <!-- Messages: style can be found in dropdown.less-->
                  <li class="dropdown messages-menu" id="supplier_unread_quotation_notification_bell">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <i class="glyphicon glyphicon-envelope"></i>
                      <span class="label label-warning"><?php //echo $unread_quotation_num_rows; ?></span>
                    </a>
                    <ul class="dropdown-menu">
                      <li class="header">You have <?php //echo $unread_quotation_num_rows; ?> unread quotation</li>
                      <li>
                        <!-- inner menu: contains the actual data -->
                        <ul class="menu">
                            <?php// foreach($unread_quotation as $uq){ ?>
                          <li><!-- start message -->
                            <a href="<?php //echo base_url().'index.php/Quotation/supplier_quotation_detail?id_quotation='.$uq->IdQuotation; ?>">
                              <div class="pull-left">
                                <img src="" />
                              </div>
                              <h4>
                                <?php //echo $uq->CompanyName; ?><br>
                                <small><i class="fa fa-clock-o"></i> <?php //echo $uq->DateSend; ?></small>
                              </h4>
                              <span class="badge" style="background-color:red;">new</span> <span class="label label-info"> quotation</span>
                            </a>
                          </li>
                          <?php //} ?>
                        </ul>
                      </li>
                      <li class="footer"><a href="#">See All Notifications</a></li>
                    </ul>
                  </li>
                  <script type="text/javascript">
                    // function reload_unread_quotation_notification_bell() {
                    //   var data = {
                    //     'id_quotation'              : 1
                    //   };
                    //   $.ajax({
                    //       type        : 'POST',
                    //       dataType:'html',
                    //       url         : "<?php //echo base_url().'index.php/Quotation/get_unread_quotation_notification_bell'; ?>",
                    //       cache: false,
                    //       data        :  data,
                    //       success: function(response) {
                    //           $("#supplier_unread_quotation_notification_bell").html(response);
                    //       }
                    //   });
                    // }
                  </script>
                  <script type="text/javascript">
                  // $(document).ready(function(){
                  //   // alert('tes');
                  //     setInterval(
                  //       reload_unread_quotation_notification_bell
                  //       , 1000000000 //10000
                  //     );
                  //     });
                  </script>
                  <!-- Messages: style can be found in dropdown.less-->
                  <li class="dropdown messages-menu" id="supplier_unread_chat_notification_bell">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <i class="glyphicon glyphicon-comment"></i>
                      <span class="label label-warning"><?php //echo $unread_quotation_detail_num_rows; ?></span>
                    </a>
                    <ul class="dropdown-menu">
                      <li class="header">You have unread comment in <?php //echo $unread_quotation_detail_num_rows; ?> quotation</li>
                      <li>
                        <!-- inner menu: contains the actual data -->
                        <ul class="menu">
                            <?php// foreach($unread_quotation_detail as $uqd){ ?>
                          <li><!-- start message -->
                            <a href="<?php //echo base_url().'index.php/Quotation/supplier_quotation_detail?id_quotation='.$uqd->IdQuotation; ?>">
                              <div class="pull-left">
                                <img src="https://dummyimage.com/vga" />
                              </div>
                              <h4>
                                <?php //echo $uqd->CompanyName; ?><br>
                                <small><i class="fa fa-clock-o"></i> <?php //echo $qd->DateSend; ?></small>
                              </h4>
                              <span class="badge" style="background-color:red;"><?php //echo $uqd->UnreadCount; ?></span> <span class="label label-info"> unread comment</span>
                            </a>
                          </li>
                          <?php// } ?>
                        </ul>
                      </li>
                      <li class="footer"><a href="#">See All Notifications</a></li>
                    </ul>
                  </li>
                  <script type="text/javascript">
                    function reload_unread_chat_notification_bell() {
                      var data = {
                        'id_quotation'              : 1
                      };
                      $.ajax({
                          type        : 'POST',
                          dataType:'html',
                          url         : "<?php echo base_url().'index.php/Quotation/get_chat_notification_bell'; ?>",
                          cache: false,
                          data        :  data,
                          success: function(response) {
                              $("#supplier_unread_chat_notification_bell").html(response);
                          }
                      });
                    }
                  </script>
                  <script type="text/javascript">
                  $(document).ready(function(){
                    // alert('tes');
                      setInterval(
                        reload_unread_chat_notification_bell
                        , 1000000000 //10000
                      );
                      });
                  </script>
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
                      <!-- Menu Body -->
                      <!-- <li class="user-body">
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
                        </div> -->
                        <!-- /.row -->
                      <!-- </li> -->
                      <!-- Menu Footer-->
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
