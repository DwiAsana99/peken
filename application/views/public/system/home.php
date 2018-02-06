<div class="container">
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      <li data-target="#carousel-example-generic" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <a href="#" target="_blank">
          <img src="http://glimageurl.golocall.com/golocal-post/image/72114_fusionplus_1493037430.jpeg" alt="...">
        </a>
        <div class="carousel-caption">
          <h2>Heading</h2>
        </div>
      </div>
      <div class="item">
        <img src="https://ae01.alicdn.com/kf/HTB1ZhomHVXXXXXwXFXXq6xXFXXXb/Girl-jewelry-Golden-Plated-Blue-belive-it-back-R-N-fashion-Jewellry-sets-coupon-african-jewelry.jpg_640x640.jpg"
          alt="...">
        <div class="carousel-caption">
          <h2>Heading</h2>
        </div>
      </div>
      <div class="item">
        <img src="https://s-media-cache-ak0.pinimg.com/originals/e1/ee/ba/e1eeba10640b058ba881c55fcc1d45fb.jpg" alt="...">
        <div class="carousel-caption">
          <h2>Heading</h2>
        </div>
      </div>
      <div class="item">
        <img src="http://www.uniquejewells.co.uk/ekmps/shops/5da030/images/18k-gold-plated-stellux-crystal-phoenix-pendant-necklace-earrings-bridal-jewellry-73-p.jpg"
          alt="...">
        <div class="carousel-caption">
          <h2>Heading</h2>
        </div>
      </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
  </div>
</div>

<div class="container">
  <div class="row product-promo">
    <h2>Product Promo</h2>
    <div class="col-md-6">
      <img src="./assets/img/jumbroton.jpg" class="img-responsive" alt="">
      <div class="row">
        <div class="col-sm-8">
          <h3>Cincin Bagus</h3>
          <h4>Rp.1.500.000</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolor...</p>
        </div>
        <div class="col-sm-4 text-right">
          <div class="checkout">
            <a href="#" class="btn btn-default">Checkout</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <img src="./assets/img/jumbroton.jpg" class="img-responsive" alt="">
      <div class="row">
        <div class="col-sm-8">
          <h3>Cincin Bagus</h3>
          <h4>Rp.1.500.000</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolor...</p>
        </div>
        <div class="col-sm-4 text-right">
          <div class="checkout">
            <a href="#" class="btn btn-default">Checkout</a>
          </div>
        </div>
      </div>
    </div>
    <div class="text-right">
      <a href="#" class="btn btn-warning">See More Product Promo</a>
    </div>
  </div>
  <h2>Product Today</h2>
  <div class="product-today">
    <div class="my-container">
      <?php $i = 1; foreach($product as $p){ ?>
      <div class="tes-hover">
        <a href="<?php echo site_url('Product/public_product_detail_view/').$p->IdProduct ?>">
          <img class="img-responsive" src="<?php echo base_url('assets/supplier_upload/').$p->FileName?>" alt="">
        </a>
        <h4>Rp.
          <?php echo number_format($p->Price, 0, '.', '.'); ?>
        </h4>
        <h5>
          <?php echo $p->Name; ?>
        </h5>
        <div class="detail-display">
          <h6>
            <?php echo number_format($p->SupplyAbility, 0, '.', '.')." ".$p->Unit; ?> (Supply Ability)</h6>
          <h6>
            <?php echo $p->PeriodSupplyAbility; ?> (Period Ability)</h6>
        </div>
        <hr>
        <div class="text-center">
          <h6>Art Silver</h6>
          <a href="" class="btn btn-default">Contact Seller</a>
        </div>
      </div>
      <?php } ?>
    </div>
    <div class="text-right">
      <a href="<?php echo site_url('Product/public_product_list_view') ?>" class="btn btn-warning more">See More Product Today</a>
    </div>
  </div>
  <div class="row"></div>
  <div class="row"></div>
  <div class="row text-center seller">
    <div class="container">
      <h2>Seller</h2>
      <?php foreach($supplier as $s){ ?>
      <div class="col-xs-2">
        <img src="<?php echo base_url('assets/supplier_upload/').$s->ProfilImage; ?>" class="img-responsive" alt="">
      </div>
      <?php } ?>
    </div>
  </div>
</div>