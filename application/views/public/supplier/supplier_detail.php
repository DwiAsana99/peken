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
  <img src="<?php echo base_url('assets/supplier_upload/').$supplier[0]->ProfilImage; ?>" class="img-responsive " style="display:inline" width="250" height="250">
  <!-- Semboyan <h3><em>"Jewelry is something that has todo wtih emotion"</em></h3>-->
  <h2 class="margin"><b><?php echo $supplier[0]->CompanyName?></b</h2>
  <h4><?php echo ucwords($supplier[0]->Location)?></h4>
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
          <h6><?php echo $p->CompanyName; ?></h6>
          <a href="<?php echo site_url('Quotation/rfq_view?')."id_product=".$p->IdProduct."&"."id_supplier=".$p->IdSupplier ?>" class="btn btn-default">Contact Supplier</a>
        </div>
      </div>
      <?php } ?>
    </div>
      </div>
      <div id="about" class="tab-pane fade">
        <h3>Menu 1</h3>
        <div class="container">
          <h2>Carousel Example</h2>  
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="https://upload.wikimedia.org/wikipedia/commons/8/89/PS1_Dual_Analog_with_Box.jpg" alt="Los Angeles" style="width:100%;">
              </div>

              <div class="item">
                <img src="https://upload.wikimedia.org/wikipedia/commons/8/89/PS1_Dual_Analog_with_Box.jpg" alt="Chicago" style="width:100%;">
              </div>
            
              <div class="item">
                <img src="https://upload.wikimedia.org/wikipedia/commons/8/89/PS1_Dual_Analog_with_Box.jpg" alt="New york" style="width:100%;">
              </div>
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
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
      </div>
    </div>
  </div>

</div>