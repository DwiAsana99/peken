<!-- CSS dropdown login -->
<style media="screen">
  .logo{
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

  .tes{
    top: -3px;
    left: 100%;
  }

  .tes a{
    margin-left: 0px;

  }

  select{
    height: 45px;
    margin: 0;
    background-color: #ff6e00;
    color: white;
    border: none;
  }

  select option{
    background-color: #fff;
    color: #000;
  }


  @media(max-width:768px) {
    #login-dp {
      background-color: inherit;
      color: #fff;
    }
    #login-dp .bottom {
      background-color: inherit;
      border-top: 0 none;
    }
    .tes a{
      margin-left: 30px;
      font-style: italic;
    }

    .logo{
      width: 100px;
      margin-top: -8px;
    }
  }
</style>
<script>
  $(document).ready(function () {
    $('.dropdown-submenu a.test').on("click", function (e) {
      $(this).next('ul').toggle();
      e.stopPropagation();
      e.preventDefault();
    });
  });
</script>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo site_url('Home'); ?>">
      <img class="img-responsive logo" src="<?php echo base_url('assets/front_end_assets/img/2Dinilaku_Logo.png') ?>" alt="">
      </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active">
          <div class="dropdown">
            <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" style="margin-top: 5px;">Categories
              <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
              <?php  foreach($product_category as $pc){?>

              <li class="dropdown-submenu">
                <a class="test" tabindex="-1" href="#"><?php echo $pc->ProductCategory ; ?>
                  <span class="caret"></span>
                </a>
                <ul class="dropdown-menu tes">
                  <?php  foreach($product_sub_category as $psc){?>
                    <?php if ($pc->Code == $psc->ProductCategoryCode): ?>
                  <li>
                    <a tabindex="-1" href="#"><?php echo $psc->ProductSubCategory ; ?></a>
                  </li>
                  <?php endif; ?>
                  <?php }?>
                </ul>
              </li>
              <?php }?>
              <!-- <li class="dropdown-submenu">
                <a class="test" tabindex="-1" href="#">Necklace
                  <span class="caret"></span>
                </a>
                <ul class="dropdown-menu tes">
                  <li>
                    <a tabindex="-1" href="#">Necklace Red</a>
                  </li>
                  <li>
                    <a tabindex="-1" href="#">Necklace Yellow</a>
                  </li>
                </ul>
              </li>
              <li class="dropdown-submenu">
                <a class="test" tabindex="-1" href="#">Bracelet
                  <span class="caret"></span>
                </a>
                <ul class="dropdown-menu tes">
                  <li>
                    <a tabindex="-1" href="#">Bracelet Red</a>
                  </li>
                  <li>
                    <a tabindex="-1" href="#">Bracelet Yellow</a>
                  </li>
                </ul>
              </li>
              <li class="dropdown-submenu">
                <a class="test" tabindex="-1" href="#">Earing
                  <span class="caret"></span>
                </a>
                <ul class="dropdown-menu tes">
                  <li>
                    <a tabindex="-1" href="#">Earing Red</a>
                  </li>
                  <li>
                    <a tabindex="-1" href="#">Earing Red</a>
                  </li>
                  <li>
                    <a tabindex="-1" href="#">Earing Red</a>
                  </li>
                  <li>
                    <a tabindex="-1" href="#">Earing Yellow</a>
                  </li>
                </ul>
              </li> -->
            </ul>
          </div>
        </li>
      </ul>
      <form  id="search_form" class="navbar-form navbar-left" method="get" action="<?php echo base_url().'index.php/Product/public_product_list_view'; ?>">
        <div class="form-group">
          <input style="margin-bottom: 3px;" type="text" name="search_value" value="<?php echo $search_value = (isset($search_value)) ? $search_value : "" ; ?>" class="form-control" placeholder="Search">
        </div>
        <select id="search_option">
            <option id="nav_product" value="product">Product</option>
            <option  id="nav_supplier" value="seller">Seller</option>

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
              searchForm.setAttribute("action","<?php echo base_url().'index.php/Product/public_product_list_view'; ?>");
            } else {
              var searchForm = document.getElementById('search_form');
              searchForm.setAttribute("action","<?php echo base_url().'index.php/Supplier/public_supplier_list_view'; ?>");
            }
          }
          // var supplier = document.getElementById('nav_supplier');
          // var product = document.getElementById('nav_product');
          // supplier.addEventListener("change",supplierClick);
          // product.addEventListener("change",productClick);

          search_option.addEventListener("change",change_action);
          </script>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="#">
            <span class="glyphicon glyphicon-user"></span> Sign Up</a>
        </li>

        <!--  -->

        <li class="dropdown">
          <?php if (empty($this->session->userdata('id_buyer'))): ?>
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <span class="glyphicon glyphicon-log-in"></span> Login</a>
          <ul id="login-dp" class="dropdown-menu">
            <li>
              <div class="row">
                <div class="col-md-12">
                  <form class="form" role="form" method="post" action="<?php echo base_url().'index.php/Login/login';?>" accept-charset="UTF-8"
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
          <?php else: ?>
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <span class=""></span>
            <?php echo $this->session->userdata('first_name'); ?>
          </a>
          <ul class="dropdown-menu">
            <li>
              <a href="<?php echo base_url().'index.php/Buyer/buyer_account_view';?>">Profile</a>
            </li>
            <li>
              <a href="<?php echo base_url().'index.php/Quotation/buyer_quotation_list';?>">Request for Quotation List</a>
            </li>
            <li>
              <a href="<?php echo base_url().'index.php/Login/logout';?>">Sign Out</a>
            </li>
          </ul>
          <?php endif; ?>
        </li>








        <!--  -->

    </div>
  </div>
</nav>
