<style>
  body{
    margin-top:0;
  }
  p {
    font-size: 16px;
  }
  .carousel{
    -webkit-box-shadow: 0;
    -moz-box-shadow: 0;
    box-shadow: 0;
    border-radius: 15px;
  }
  #myCarousel{
    margin-bottom: 50px;
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
  .nav-center {
    text-align: center;
  }
  .nav-center ul.nav {
    display: inline-block;
  }
  .nav-center ul.nav li {
    display: inline a;
    display-float: left;
  }

  .nav-tabs li {
    font-size: 2em;
    font-weight: lighter;
  }

  .tab-pane p {
    font-weight: lighter;
  }

  @media screen and (max-width: 480px) {
    .nav-tabs li {
      font-size: 1em;
    }
  }
</style>

<div class="container-fluid bg-1 text-center">
  <img src="<?php echo base_url('assets/supplier_upload/').$supplier[0]->ProfileImage; ?>" class="img-responsive " style="display:inline" width="250" height="250">
  <!-- Semboyan <h3><em>"Jewelry is something that has todo wtih emotion"</em></h3>-->
  <h2 class="margin"><b><?php echo $supplier[0]->CompanyName?></b</h2>
    <h4><?php echo ucwords($supplier[0]->State)?></h4>
    <h4><a href="mailto:<?php echo $supplier[0]->Email?>?Subject="><?php echo $supplier[0]->Email?></a></h4>
    <h4><a href="tel:<?php echo $supplier[0]->Phone?>"><?php echo $supplier[0]->Phone?></a></h4>
    <h4><a href="#">Twitter</a> | <a href="#">Facebook</a> | <a href="#">Instagram</a></h4>
  </div>

  <div class="container">
    <div class="nav-center">
      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">Our Products</a></li>
        <li><a data-toggle="tab" href="#about">About Us</a></li>
      </ul>
    </div>
  </div>

  <div class="container">
    <div class="tab-content">
      <div id="home" class="tab-pane fade in active">
        <!-- <h2 class="text-center" style="font-size:3em;margin: 30px auto;">Our Products</h2> -->
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
            <div class="text-center ">
              <ul class="pagination pagination-large">
                <?php
                // print_r($links);exit();
                foreach ($links as $link) {
                  echo $link;
                } ?>
              </ul>
            </div>
          </div>
          <div id="about" class="tab-pane fade">

            <div class="container">
              <h2>Our Gallery</h2>
              <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <?php $x =0; foreach ($supplier_gallery_pic as $s): ?>
                    <?php if ($x == 0): ?>
                      <li data-target="#myCarousel" data-slide-to="<?php echo $x ?>" class="active"></li>
                    <?php else: ?>
                      <li data-target="#myCarousel" data-slide-to="<?php echo $x ?>"></li>
                    <?php endif; ?>
                    <?php $x++; ?>
                  <?php endforeach; ?>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                  <?php $o =1; foreach ($supplier_gallery_pic as $s): ?>
                    <?php if ($o == 1): ?>
                      <div class="item active">
                        <img src="<?php echo base_url('assets/supplier_upload/').$s->FileName?>" alt="Los Angeles" style="width:100%;">
                      </div>
                    <?php else: ?>
                    <div class="item">
                      <img src="<?php echo base_url('assets/supplier_upload/').$s->FileName?>" alt="Los Angeles" style="width:100%;">
                    </div>
                    <?php endif; ?>
                    <?php $o++; ?>
                  <?php endforeach; ?>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        <p><?php echo $supplier[0]->CompanyDescription ?></p>
      </div>
    </div>
  </div>

</div>
