<heading>
  <div class="container">
    <div class="jumbotron">
      <h1>Dinilaku</h1>
      <h1></h1>
      <div id="text-slog">"Love is Fragile"</div>
      <a class="btn btn-default btn-lg">Shop Now</a>
    </div>
  </div>
</heading>

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
      <h4>IDR Rp1.200.000 / pcs</h4>
      <h5>Kesslers Diamonds</h5>
      <div class="detail-display">
        <h6>10 pcs (Supply Ability)</h6>
        <h6>Daily (Period Ability)</h6>
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
