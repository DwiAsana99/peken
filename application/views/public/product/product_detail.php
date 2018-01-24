<?php $title['tit']  = $product[0]->Name; $this->load->view('template/front/head_front',$title); ?>
<?php $this->load->view('template/front/navigation'); ?>
<div class="container">
  <div id="detail">
    <div>
      <?php $i = 1; foreach($product as $p){
        if ($i == 1 ) { ?>
          <img src="<?php echo base_url('assets/supplier_upload/').$p->FileName;?>" id="image<?php echo $i ?>" class="image-toggle">
        <?php } elseif($i > 1 AND $i < 6) {?>
          <img src="<?php echo base_url('assets/supplier_upload/').$p->FileName;?>" title="image 2" alt="image 2" id="image<?php echo $i ?>" class="image-toggle" style="display:none;">
        <?php }
        $i++;
      }
      ?>
      <hr>
      <?php $i = 1; foreach($product as $p){ ?>
        <div class="col-xs-3">
          <img class="img-responsive image-toggler" data-image-id="#image<?php echo $i ?>" src="<?php echo base_url('assets/supplier_upload/').$p->FileName;?>" />
        </div>
        <?php $i++;  } ?>
      </div>
      <div>
        <h1><?php echo $product[0]->Name; ?></h1>
        <h2>Rp.<?php echo number_format($product[0]->Price, 0, '.', '.'); ?></h2>
        <p>Category : <?php echo $product[0]->ProductCategory; ?></p>
        <p>Sub Category : <?php echo $product[0]->ProductSubCategory; ?></p>
        <p>Supply Ability : <?php echo $product[0]->SupplyAbility; ?></p>
        <p>Period Supply Ability : <?php echo $product[0]->PeriodSupplyAbility; ?></p>
        <a class="btn btn-primary contact" href="#">Contact Supllier
          <i class="fa fa-arrow-right" aria-hidden="true"></i>
        </a>
        <ul class="nav nav-tabs">
          <li class="active">
            <a href="#1a" data-toggle="tab">Description</a>
          </li>
          <li>
            <a href="#2a" data-toggle="tab">Seller</a>
          </li>
        </ul>
        <div class="tab-content clearfix">
          <div class="tab-pane active" id="1a">
            <p><?php echo $product[0]->ProductDescription; ?></p>
          </div>
          <div class="tab-pane" id="2a">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus sapiente reprehenderit ut velit
              quas dignissimos voluptatem at, eius debitis facere. Amet nam eum iusto officia nesciunt repudiandae
              ullam nostrum odit. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus sapiente
              reprehenderit ut velit quas dignissimos voluptatem at, eius debitis facere. Amet nam eum iusto
              officia nesciunt repudiandae ullam nostrum odit.
            </p>
          </div>
        </div>
      </div>
    </div>
    <h2>Related products</h2>
    <div class="my-container">
      <div>
        <img class="img-responsive" src="https://img10.jd.id/Indonesia/s800x800_/nHBfsgAABwAAAAYAJwAZ9QAAy9I.jpg?_ga=2.31647994.598327110.1516764553-1000888939.1509532365" alt="">
        <h4>IDR Rp1.200.000 / pcs</h4>
        <h5>Kesslers Diamonds</h5>
        <h6>10 pcs (Supply Ability)</h6>
        <h6>Daily (Period Ability)</h6>
        <hr>
        <div class="text-center">
          <h6>Art Silver</h6>
          <a href="#" class="btn btn-default">Contact Seller</a>
        </div>
      </div>
      <div>
        <img class="img-responsive" src="https://img10.jd.id/Indonesia/s800x800_/nHBfsgAABwAAAAYAJwAZ9QAAy9I.jpg?_ga=2.31647994.598327110.1516764553-1000888939.1509532365" alt="">
        <h4>IDR Rp1.200.000 / pcs</h4>
        <h5>Kesslers Diamonds</h5>
        <h6>10 pcs (Supply Ability)</h6>
        <h6>Daily (Period Ability)</h6>
        <hr>
        <div class="text-center">
          <h6>Art Silver</h6>
          <a href="#" class="btn btn-default">Contact Seller</a>
        </div>
      </div>
      <div>
        <img class="img-responsive" src="https://img10.jd.id/Indonesia/s800x800_/nHBfsgAABwAAAAYAJwAZ9QAAy9I.jpg?_ga=2.31647994.598327110.1516764553-1000888939.1509532365" alt="">
        <h4>IDR Rp1.200.000 / pcs</h4>
        <h5>Kesslers Diamonds</h5>
        <h6>10 pcs (Supply Ability)</h6>
        <h6>Daily (Period Ability)</h6>
        <hr>
        <div class="text-center">
          <h6>Art Silver</h6>
          <a href="#" class="btn btn-default">Contact Seller</a>
        </div>
      </div>
      <div>
        <img class="img-responsive" src="https://img10.jd.id/Indonesia/s800x800_/nHBfsgAABwAAAAYAJwAZ9QAAy9I.jpg?_ga=2.31647994.598327110.1516764553-1000888939.1509532365" alt="">
        <h4>IDR Rp1.200.000 / pcs</h4>
        <h5>Kesslers Diamonds</h5>
        <h6>10 pcs (Supply Ability)</h6>
        <h6>Daily (Period Ability)</h6>
        <hr>
        <div class="text-center">
          <h6>Art Silver</h6>
          <a href="#" class="btn btn-default">Contact Seller</a>
        </div>
      </div>
    </div>
  </div>


  <script>
  $('.image-toggler').click(function () {
    $('.image-toggle').hide();
    $($(this).attr('data-image-id')).show();
  });
  </script>
<?php $this->load->view('template/front/foot_front'); ?>
