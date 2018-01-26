<!-- CSS dropdown login -->
<style media="screen">
#login-dp{
  min-width: 250px;
  padding: 14px 14px 0;
  overflow:hidden;
  background-color:rgba(255,255,255,.8);
}
#login-dp .help-block{
  font-size:12px
}
#login-dp .bottom{
  background-color:rgba(255,255,255,.8);
  border-top:1px solid #ddd;
  clear:both;
  padding:14px;
}
#login-dp .social-buttons{
  margin:12px 0
}
#login-dp .social-buttons a{
  width: 49%;
}
#login-dp .form-group {
  margin-bottom: 10px;
}
.btn-fb{
  color: #fff;
  background-color:#3b5998;
}
.btn-fb:hover{
  color: #fff;
  background-color:#496ebc
}
.btn-tw{
  color: #fff;
  background-color:#55acee;
}
.btn-tw:hover{
  color: #fff;
  background-color:#59b5fa;
}
@media(max-width:768px){
  #login-dp{
    background-color: inherit;
    color: #fff;
  }
  #login-dp .bottom{
    background-color: inherit;
    border-top:0 none;
  }
}
</style>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo site_url('Home'); ?>">DINILAKU</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Ring
            <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li>
              <a href="#">Page 1-1</a>
            </li>
            <li>
              <a href="#">Page 1-2</a>
            </li>
            <li>
              <a href="#">Page 1-3</a>
            </li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Necklace
            <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li>
              <a href="#">Page 1-1</a>
            </li>
            <li>
              <a href="#">Page 1-2</a>
            </li>
            <li>
              <a href="#">Page 1-3</a>
            </li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Bracelet
            <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li>
              <a href="#">Page 1-1</a>
            </li>
            <li>
              <a href="#">Page 1-2</a>
            </li>
            <li>
              <a href="#">Page 1-3</a>
            </li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Earring
            <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li>
              <a href="#">Page 1-1</a>
            </li>
            <li>
              <a href="#">Page 1-2</a>
            </li>
            <li>
              <a href="#">Page 1-3</a>
            </li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" method="get" action="<?php echo base_url().'index.php/Product/public_product_list_view'; ?>">
        <div class="form-group">
          <input type="text" name="search_value" value="<?php echo $search_value = (isset($search_value)) ? $search_value : "" ; ?>" class="form-control" placeholder="Search">
        </div>
        <div class="btn-group">
          <a class="btn btn-warning dropdown-toggle" data-toggle="dropdown" href="#">Seller
            <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li>
              <a href="#">Product</a>
            </li>
          </ul>
        </div>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="#">
            <span class="glyphicon glyphicon-user"></span> Sign Up</a>
          </li>

          <!--  -->

        <li class="dropdown">
          <?php if (empty($this->session->userdata('id_buyer'))): ?>
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">  <span class="glyphicon glyphicon-log-in"></span> Login</a>
          <ul id="login-dp" class="dropdown-menu">
            <li>
              <div class="row">
                <div class="col-md-12">
                  <form class="form" role="form" method="post" action="<?php echo base_url().'index.php/Login/login';?>" accept-charset="UTF-8" id="login-nav">
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
              <a href="#"  class="dropdown-toggle" data-toggle="dropdown" ><span class=""></span><?php echo $this->session->userdata('first_name'); ?></a>
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
