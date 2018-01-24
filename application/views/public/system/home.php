<?php $title['tit']  = "Dinilaku"; $this->load->view('template/front/head_front',$title); ?>
<?php $this->load->view('template/front/navigation'); ?>
<heading>
  <div class="container">
    <div class="jumbotron">
      <h1>Dinilaku</h1>
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
  <div class="row"></div>
  <div class="row"></div>
  <div class="row product-today">
    <div class="">
      <h2>Product Today</h2>
      <?php foreach($product as $u){
        //if ($i % 4 == 1) { ?>
      <div class="col-md-3">
        <a href="<?php echo site_url('Product/public_product_detail_view/').$u->IdProduct ?>">
        <img src="<?php echo base_url('assets/supplier_upload/').$u->FileName; ?>" class="img-responsive" alt="">
        <div class="row">
          <h4 class="text-center"><b><?php echo $u->Name ?> </b></h3>
          <h4 class="text-center">Rp<?php echo number_format($u->Price, 0, '.', '.'); ?></h4>
          <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolor...</p> -->
          <div class="row text-right">
            <div class="checkout">
              <a href="#" class="btn btn-default">Checkout</a>
            </div>
          </div>
        </div>
        </a>
      </div>
    <?php } ?>

      <div class="text-right">
        <a href="#" class="btn btn-warning">See More Product Today</a>
      </div>
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
<?php $this->load->view('template/front/foot_front'); ?>
