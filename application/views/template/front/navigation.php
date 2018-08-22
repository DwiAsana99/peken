<!-- CSS dropdown login -->
<style media="screen">
  .logo {
    width: 100px;
    margin-top: -5px;
  }

  #login-dp {
    min-width: 250px;
    padding: 14px 14px 0;
    overflow: hidden;
    background-color: rgba(255, 255, 255, .8);
  }

  #login-dp .help-block {
    font-size: 12px
  }

  #login-dp .bottom {
    background-color: rgba(255, 255, 255, .8);
    border-top: 1px solid #ddd;
    clear: both;
    padding: 14px;
  }

  #login-dp .social-buttons {
    margin: 12px 0
  }

  #login-dp .social-buttons a {
    width: 49%;
  }

  #login-dp .form-group {
    margin-bottom: 10px;
  }

  .btn-fb {
    color: #fff;
    background-color: #3b5998;
  }

  .btn-fb:hover {
    color: #fff;
    background-color: #496ebc
  }

  .btn-tw {
    color: #fff;
    background-color: #55acee;
  }

  .btn-tw:hover {
    color: #fff;
    background-color: #59b5fa;
  }

  .tes {
    top: -3px;
    left: 100%;
  }

  .tes a {
    margin-left: 0px;

  }

  select {
    height: 45px;
    margin: 0;
    background-color: #ff6e00;
    color: white;
    border: none;
  }

  select option {
    background-color: #fff;
    color: #000;
  }

  #search_form {
    position: absolute;
    width: 100%;
    text-align: center;
    margin: auto;
    margin-top: 3px;
  }

  .cont-top {
    position: relative;
  }

  .z-index1 {
    position: relative;
    z-index: 1;
  }

  input[name="search_value"] {
    width: 30vw !important;
  }

  /* notification */

  .navbar-default .dropdown-menu.notify-drop a {
    text-decoration: none;
    display: block;
    width: 100%;
    height: 100%;
  }

  .navbar-default .dropdown-menu.notify-drop {
    min-width: 330px;
    background-color: #fff;
    min-height: 360px;
    max-height: 360px;
  }

  .navbar-default .dropdown-menu.notify-drop .notify-drop-title {
    border-bottom: 1px solid #e2e2e2;
    padding: 5px 15px 10px 15px;
  }

  .navbar-default .dropdown-menu.notify-drop .drop-content {
    min-height: 280px;
    max-height: 280px;
    overflow-y: scroll;
  }

  .navbar-default .dropdown-menu.notify-drop .drop-content::-webkit-scrollbar-track {
    background-color: #F5F5F5;
  }

  .navbar-default .dropdown-menu.notify-drop .drop-content::-webkit-scrollbar {
    width: 8px;
    background-color: #F5F5F5;
  }

  .navbar-default .dropdown-menu.notify-drop .drop-content::-webkit-scrollbar-thumb {
    background-color: #ccc;
  }

  .navbar-default .dropdown-menu.notify-drop .drop-content>li {
    border-bottom: 1px solid #e2e2e2;
    padding: 10px 0px 5px 0px;
  }

  .navbar-default .dropdown-menu.notify-drop .drop-content>li:nth-child(2n+0) {
    background-color: #fafafa;
  }

  .navbar-default .dropdown-menu.notify-drop .drop-content>li:after {
    content: "";
    clear: both;
    display: block;
  }

  .navbar-default .dropdown-menu.notify-drop .drop-content>li:hover {
    background-color: #fcfcfc;
  }

  .navbar-default .dropdown-menu.notify-drop .drop-content>li:last-child {
    border-bottom: none;
  }

  .navbar-default .dropdown-menu.notify-drop .drop-content>li .notify-img {
    float: left;
    display: inline-block;
    width: 45px;
    height: 45px;
    margin: 0px 0px 8px 0px;
  }

  .navbar-default .dropdown-menu.notify-drop .allRead {
    margin-right: 7px;
  }

  .navbar-default .dropdown-menu.notify-drop .rIcon {
    float: right;
    color: #999;
  }

  .navbar-default .dropdown-menu.notify-drop .rIcon:hover {
    color: #333;
  }

  .navbar-default .dropdown-menu.notify-drop .drop-content>li a {
    font-size: 12px;
    font-weight: normal;
  }

  .navbar-default .dropdown-menu.notify-drop .drop-content>li {
    font-weight: bold;
    font-size: 11px;
  }

  .navbar-default .dropdown-menu.notify-drop .drop-content>li hr {
    margin: 5px 0;
    width: 70%;
    border-color: #e2e2e2;
  }

  .navbar-default .dropdown-menu.notify-drop .drop-content .pd-l0 {
    padding-left: 0;
  }

  .navbar-default .dropdown-menu.notify-drop .drop-content>li p {
    font-size: 11px;
    color: #666;
    font-weight: normal;
    margin: 3px 0;
  }

  .navbar-default .dropdown-menu.notify-drop .drop-content>li p.time {
    font-size: 10px;
    font-weight: 600;
    top: -6px;
    margin: 8px 0px 0px 0px;
    padding: 0px 3px;
    border: 1px solid #e2e2e2;
    position: relative;
    background-image: linear-gradient(#fff, #f2f2f2);
    display: inline-block;
    border-radius: 2px;
    color: #B97745;
  }

  .navbar-default .dropdown-menu.notify-drop .drop-content>li p.time:hover {
    background-image: linear-gradient(#fff, #fff);
  }

  .navbar-default .dropdown-menu.notify-drop .notify-drop-footer {
    border-top: 1px solid #e2e2e2;
    bottom: 0;
    position: relative;
    padding: 8px 15px;
  }

  .navbar-default .dropdown-menu.notify-drop .notify-drop-footer a {
    color: #777;
    text-decoration: none;
  }

  .navbar-default .dropdown-menu.notify-drop .notify-drop-footer a:hover {
    color: #333;
  }

  /* ini komen bagian akhir notfikasi :) */

  @media(max-width:768px) {
    #login-dp {
      background-color: inherit;
      color: #fff;
    }
    #login-dp .bottom {
      background-color: inherit;
      border-top: 0 none;
    }
    .tes a {
      margin-left: 30px;
      font-style: italic;
    }

    .logo {
      width: 100px;
      margin-top: -8px;
    }

    #search_form {
      position: initial;
      width: inital;
      text-align: left;
      margin: inital;
    }

    .cont-top {
      position: relative;
    }

    .z-index1 {
      position: relative;
      z-index: 1;
    }

    input[name="search_value"] {
      width: 100% !important;
    }
  }
</style>
<script>
  $(document).ready(function () {
    $('.dropdown-submenu a.test').on("click", function (e) {
      $(this).next('ul').toggle();
      $('.dropdown-submenu a.test').not(this).each(function () {
        $(this).next('ul').css('display', 'none')
      });
      e.stopPropagation();
      e.preventDefault();
    });
    $('#signOut').click(function () {
      $("#myNavbar").animate({
        scrollTop: $('#myNavbar').prop("scrollHeight")
      }, 1000);
    });
  });
</script>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container cont-top">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo site_url('Home'); ?>">
        <img class="img-responsive logo z-index1" src="<?php echo base_url('assets/front_end_assets/img/2Dinilaku_Logo.png') ?>"
          alt="">
      </a>
    </div>

    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav z-index1">
        <li class="active">
          <div class="dropdown">
            <button  class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" style="margin-top: 5px;" >Categories
              <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" id="product_sub_category_dropdown">
            <?php  foreach($product_category as $pc){?>
              <li class="dropdown-submenu">
                <a class="test" tabindex="-1" href="">
                  <?php echo $pc->ProductCategory ; ?>
                  <span class="caret"></span>
                </a>
                <ul class="dropdown-menu tes">
                  <?php  foreach($product_sub_category as $psc){?>
                  <?php if ($pc->Code == $psc->ProductCategoryCode): ?>
                  <li>
                    <a tabindex="-1" href="<?php echo site_url('Product/public_product_list_view?')." product_sub_category_code=".$psc->Code; ?>">
                      <?php echo $psc->ProductSubCategory ; ?>
                    </a>
                  </li>
                  <?php endif; ?>
                  <?php }?>
                </ul>
              </li>
              <?php }?>
            </ul>
          </div>
        </li>
      </ul>



      <form id="search_form" role="search" class="navbar-form navbar-left" method="get" action="<?php echo base_url().'Product/public_product_list_view'; ?>">
        <div class="form-group">
          <input style="margin-bottom:3px;" type="text" name="search_value" value="<?php echo $search_value = (isset($search_value)) ? $search_value : "" ; ?>" class="form-control" placeholder="Search">
        </div>
        <select id="search_option">
          <option id="nav_product" value="product">Product</option>
          <option id="nav_supplier" value="seller">Seller</option>

        </select>

        <script type="text/javascript">
          var search_option = document.getElementById('search_option');
          // function supplierClick() {
          //   var searchForm = document.getElementById('search_form');
          //   searchForm.setAttribute("action","<?php //echo base_url().'index.php/Supplier/public_supplier_list_view'; ?>");
          // }
          // function productClick() {
          //   var searchForm = document.getElementById('search_form');
          //   searchForm.setAttribute("action","<?php //echo base_url().'index.php/Product/public_product_list_view'; ?>");
          // }
          function change_action() {
            //var search_option = document.getElementById('search_option');
            if (search_option.value == "product") {
              var searchForm = document.getElementById('search_form');
              searchForm.setAttribute("action",
                "<?php echo base_url().'Product/public_product_list_view'; ?>");
            } else {
              var searchForm = document.getElementById('search_form');
              searchForm.setAttribute("action",
                "<?php echo base_url().'User/public_supplier_list_view'; ?>");
            }
          }
          // var supplier = document.getElementById('nav_supplier');
          // var product = document.getElementById('nav_product');
          // supplier.addEventListener("change",supplierClick);
          // product.addEventListener("change",productClick);

          search_option.addEventListener("change", change_action);
        </script>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <?php if (empty($this->session->userdata('user_id')) AND empty($this->session->userdata('user_id'))): ?>
        <li>
          <a href="<?php echo base_url().'User/registration';?>">
            <span class="glyphicon glyphicon-user"></span> Sign Up</a>
        </li>

        <li class="dropdown">

          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <span class="glyphicon glyphicon-log-in"></span> Login</a>
          <ul id="login-dp" class="dropdown-menu">
            <li>
              <div class="row">
                <div class="col-md-12">
                  <form class="form" role="form" method="post" action="<?php echo base_url().'user/login';?>" accept-charset="UTF-8"
                    id="login-nav">
                    <div class="form-group">
                      <label class="sr-only" for="exampleInputEmail2">Email address</label>
                      <input type="email" name="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
                    </div>
                    <div class="form-group">
                      <label class="sr-only" for="exampleInputPassword2">Password</label>
                      <input type="password" name="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                    </div>
                  </form>
                </div>
                <!-- <div class="bottom text-center">
                New here ? <a href="#"><b>Join Us</b></a>
              </div> -->
              </div>
            </li>
          </ul>
        </li>
        <?php elseif (!empty($this->session->userdata('user_id'))): ?>
        <!-- _____________||_____________ -->
        <li class="dropdown" id="unread_chat_notification_bell">
          <!-- <li class="dropdown"> -->
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <i class="glyphicon glyphicon-comment"></i>
            <span style="" class="badge">
              <?php// echo $unread_quotation_detail_num_rows; ?>
            </span>
          </a>
          <ul class="dropdown-menu notify-drop">
            <div class="notify-drop-title">
              <div class="row">
                <div class="col-md-12 col-sm-6 col-xs-6">You have unread comment in
                  <?php //echo $unread_quotation_detail_num_rows; ?> quotation</div>
              </div>
            </div>
            <div class="drop-content">
              <?php //foreach($unread_quotation_detail as $uqd){ ?>
              <li>
                <a href="<?php //echo base_url().'index.php/Quotation/buyer_quotation_detail?id_quotation='.$uqd->IdQuotation; ?>">
                  <div class="col-md-3 col-sm-3 col-xs-3">
                    <div class="notify-img">
                      <img src="<?php //echo base_url().'assets/supplier_upload/'.$uqd->ProfilImage ?>" height="50" width="50" class="img-circle"
                        alt="">
                    </div>
                  </div>
                  <div class="col-md-9 col-sm-9 col-xs-9 pd-l0">
                    <h5>
                      <b>
                        <?php //echo $uqd->CompanyName; ?>
                      </b>
                    </h5>
                    <hr>
                    <span class="badge" style="background-color:orange;">
                      <?php //echo $uqd->UnreadCount; ?>
                    </span>
                    <span class="label label-info"> unread comment</span>
                  </div>
                </a>
              </li>
              <?php// } ?>
            </div>
            <div class="notify-drop-footer text-center">
              <a href="">
                <i class="fa fa-eye"></i> See All Notifications</a>
            </div>
          </ul>
          <!-- </li> -->
        </li>
        <script type="text/javascript">
          // function reload_unread_chat_notification_bell() {
          //   var data = {
          //     'id_quotation': 1
          //   };
          //   $.ajax({
          //     type: 'POST',
          //     dataType: 'html',
          //     url: "<?php// echo base_url().'index.php/Quotation/get_chat_notification_bell'; ?>",
          //     cache: false,
          //     data: data,
          //     success: function (response) {
          //       $("#unread_chat_notification_bell").html(response);
          //     }
          //   });
          // }
        </script>
        <script type="text/javascript">
          // $(document).ready(function () {
          //   // alert('tes');
          //   setInterval(
          //     reload_unread_chat_notification_bell, 10000
          //   );
          // });
        </script>
        <!-- __________________________ -->
        <li class="dropdown">
          <a href="#" id="signOut" class="dropdown-toggle" data-toggle="dropdown">
            <span class="glyphicon glyphicon-user"></span>
            <?php echo $this->session->userdata('first_name'); ?>
            <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li>
              <a href="<?php echo base_url().'User/buyer_account_view';?>">
                <span class="glyphicon glyphicon-user"></span> Profile</a>
            </li>
            <li>
              <a href="<?php echo base_url().'index.php/Quotation/buyer_quotation_list';?>">
                <span class="glyphicon glyphicon-th-list"></span> Request for Quotation List</a>
            </li>
            <!-- <li>
            <a href="<?php //echo base_url().'index.php/Support/buyer_support_list_view';?>"><span class="glyphicon glyphicon-phone-alt"></span> Support</a>
          </li> -->
            <li>
              <a href="<?php echo base_url().'User/logout';?>">
                <span class="glyphicon glyphicon-log-out"></span> Sign Out</a>
            </li>
          </ul>

        </li>
        <?php elseif (!empty($this->session->userdata('user_id'))): ?>
        <!--<li><a href="#" >Back to admin supplier page</a>-->
        <!--</li>-->
        <li class="dropdown">
          <a href="#" id="signOut" class="dropdown-toggle" data-toggle="dropdown">
            <span class="glyphicon glyphicon-user"></span>
            <?php echo $this->session->userdata('company_name'); ?>
            <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li>
              <a href="<?php echo base_url().'User/dashboard_supplier_view';?>">Back to admin supplier page</a>
            </li>
            <li>
              <a href="<?php echo base_url().'User/logout';?>">Sign Out</a>
            </li>
          </ul>

        </li>
        <?php endif; ?>
      </ul>
      <!--  -->
      <script>
        $(function () {
          $('[data-tooltip="tooltip"]').tooltip()
        });
      </script>
    </div>
  </div>
</nav>