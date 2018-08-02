<style>
  @media screen and (max-width: 480px) {
    .detail-display{
      height: auto;
      opacity: 1;
    }

    .my-container {
      grid-gap: 0;
    }
}
</style>
<?php //echo $_SERVER['SCRIPT_NAME']  ;?>
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
  <!-- <div class="row product-promo">
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
  </div> -->
  <div class="flex_shadow seller_list">
      <h2>Product Today</h2>
    <div class="my-container">
      <?php $i = 1; foreach($product as $p){ ?>
      <div class="tes-hover">
        <a href="<?php echo site_url('Product/public_product_detail_view/').$p->ProductId ?>">
          <img class="img-responsive" src="<?php echo base_url('assets/supplier_upload/').$p->FileName?>" alt="">
        </a>
        <h4>Rp.
          <?php echo number_format($p->MinPrice, 0, '.', '.'); ?>
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
          <h6><?php echo $p->CompanyName; ?></h6>
          <a href="<?php echo site_url('Quotation/rfq_view?')."product_id=".$p->ProductId."&"."supplier_id=".$p->SupplierId ?>" class="btn btn-default">Contact Supplier</a>
        </div>
      </div>
      <?php } ?>
    </div>
    <div class="text-right">
      <a href="<?php echo site_url('Product/public_product_list_view') ?>" class="btn btn-warning more">See More Product Today</a>
    </div>
  </div>
  <!-- <div class="row"> -->
  <div class="divider" style="margin: 10% 0"></div>
    <div class="flex_shadow seller">
      <h2>Seller</h2>
      <div class="my-container seller_column">
        <?php foreach($supplier as $s){ ?>
        <div class="tes-hover text-center">
          <a
          href="<?php echo site_url('user/supplier_mini_site_view?supplier_id=').$s->Id ?>">
            <img
              src="<?php echo base_url('assets/supplier_upload/').$s->ProfileImage; ?>"
              class="sellerImg"
              alt="">
          </a>
          <div class="detail-display">
            <h6><b>
            <?php $lengt = strlen($s->CompanyName);
            if ($lengt>14) {
            echo trim(substr($s->CompanyName,0,12))." <b>...</b>";
            } else {
              echo $s->CompanyName;
            }
             ?>
           </b> </h6>

          </div>
        </div>
        <?php } ?>
      </div>
      <div class="text-right">
        <a href="<?php echo site_url('user/public_supplier_list_view') ?>" class="btn btn-warning more">See More Supplier</a>
      </div>
    </div>
  <!-- </div> row comment -->
  <!-- <div class="row text-center seller">
    <div class="container">
      <h2>Seller</h2>
      <?php //foreach($supplier as $s){ ?>
      <div class="col-xs-2">
        <a
        href="<?php //echo site_url('supplier/public_supplier_detail_view?supplier_id=').$s->IdSupplier ?>">
          <img
            src="<?php //echo base_url('assets/supplier_upload/').$s->ProfilImage; ?>" class="img-responsive"
            alt="">
        </a>
      </div>
      <?php //} ?>
    </div>
  </div> -->
</div>
