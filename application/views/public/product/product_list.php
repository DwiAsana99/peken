
  <div class="container">
  <ol class="breadcrumb">
      <li>
        <a href="#">Home</a>
      </li>
      <li>
        <a>Product List</a>
      </li>
    </ol>
    <div class="my-container">
      <?php $i = 1; foreach($product as $p){ ?>
      <div class="tes-hover">
        <a href="<?php echo site_url('Product/public_product_detail_view/').$p->IdProduct ?>">
          <img class="img-responsive" src="<?php echo base_url('assets/supplier_upload/').$p->FileName?>" alt="">
        </a>
        <h4>Rp.<?php echo number_format($p->Price, 0, '.', '.'); ?></h4>
        <h5><?php echo $p->Name; ?></h5>
        <div class="detail-display">
          <h6><?php echo number_format($p->SupplyAbility, 0, '.', '.')." ".$p->Unit; ?> (Supply Ability)</h6>
          <h6><?php echo $p->PeriodSupplyAbility; ?> (Period Ability)</h6>
        </div>
        <hr>
        <div class="text-center">
          <h6>Art Silver</h6>
          <a href="" class="btn btn-default">Contact Seller</a>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
