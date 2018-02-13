<style>
  body{
    margin-top:0;
  }
  p {
    font-size: 16px;
  }

  .margin {
    margin-bottom: 45px;
  }

  .bg-1 {
    background-color: #333333;
    /* Green */
    color: #ffffff;
  }

  h4 a{
    text-decoration: none;
    color: #fff;
  }

  h4 a:hover{
    color: #ff9d00;
  }


  .container-fluid {
      padding-top: 70px;
      padding-bottom: 70px;
  }
</style>

<div class="container-fluid bg-1 text-center">
  <h3 class="margin">KFC Jewellery</h3>
  <img src="https://www.w3schools.com/bootstrap/bird.jpg" class="img-responsive img-circle margin" style="display:inline" width="250" height="250">
  <h3><em>"Jewelry is something that has todo wtih emotion"</em></h3>
  <h4>Indonesia</h4>
  <h4><a href="mailto:someone@example.com?Subject=Hello%20again">premawaisnawa@gmail.com</a></h4>
  <h4>+62 81 234 567 890</h4>
  <h4><a href="#">Twitter</a> | <a href="#">Facebook</a> | <a href="#">Instagram</a></h4>

</div>

<div class="container">
<h2 class="text-center" style="font-size:3em;margin: 30px auto;">Our Products</h2>
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
</div>