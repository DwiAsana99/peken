<?php $this->load->view('template/front/head_front');?>
<div class="uk-container-center uk-margin-top" style="background:#ddd;">
  <div class=" uk-grid uk-container-center tm-grid-truncate"  style="padding-top:30px; width: 1300px;" data-uk-grid-margin>
    <div class="uk-width-1-1 " style="background:#fff;padding-top:20px;padding-bottom: 20px;"  data-uk-grid-margin>
      <div class="uk-grid uk-grid-small">
        <div class="uk-width-1-6 " style="">
          <img  src="<?php echo base_url('assets/supplier_upload/').$supplier[0]->ProfilImage; ?>" height="190" width="190" alt="">
        </div>
        <div class="uk-width-5-6">
          <div class="uk-grid">
            <div class="uk-width-1-1">
              <h1  class=""><?php echo $supplier[0]->CompanyName; ?></h1>
              <p>Email :<?php echo $supplier[0]->Email; ?></p>
              <p>Location :<?php echo $supplier[0]->Location; ?></p>
              <p>Phone :<?php echo $supplier[0]->Phone; ?></p>
              <p>Company Address :<?php echo $supplier[0]->CompanyAddress; ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="">
      <div class="uk-width-1-1">
        <?php $i = 1; $array_length  = count($product); foreach($product as $u){

          if ($i % 5 == 1) { ?>
            <div class="uk-flex">
              <div class="uk-width-1-4 uk-panel uk-panel-box uk-margin-left uk-margin-bottom uk-text-center" style="height: 300px;width:227px;  ">
                <a href="<?php echo site_url('Product/public_product_detail_view/').$u->IdProduct ?>">
                  <img style="height: 200px; width: 200px;" src="<?php echo base_url('assets/supplier_upload/').$u->FileName; ?>" alt="">
                  <p><?php echo $u->Name ; ?></p>
                  <p><b>Rp<?php echo number_format($u->Price, 0, '.', '.'); ?></b></p>
                </a>
              </div>
            <?php } elseif(($i % 5 !== 1 AND $i % 5 !== 0) AND ($i !== $array_length)) {?>
              <div class="uk-width-1-4 uk-panel uk-panel-box uk-margin-left uk-margin-bottom uk-text-center" style="height: 300px;width:227px;  ">
                <a href="<?php echo site_url('Product/public_product_detail_view/').$u->IdProduct ?>">
                  <img style="height: 200px; width: 200px;" src="<?php echo base_url('assets/supplier_upload/').$u->FileName; ?>" alt="">
                  <p><?php echo $u->Name ; ?></p>
                  <p><b>Rp<?php echo number_format($u->Price, 0, '.', '.'); ?></b></p>
                </a>
              </div>
            <?php } elseif (($i % 5 == 0) OR ($i == $array_length)) { ?>
              <div class="uk-width-1-4 uk-panel uk-panel-box uk-margin-left uk-margin-bottom uk-text-center" style="height: 300px;width:227px;  ">
                <a href="<?php echo site_url('Product/public_product_detail_view/').$u->IdProduct ?>">
                  <img style="height: 200px; width: 200px;" src="<?php echo base_url('assets/supplier_upload/').$u->FileName; ?>" alt="">
                  <p><?php echo $u->Name ; ?></p>
                  <p><b>Rp<?php echo number_format($u->Price, 0, '.', '.'); ?></b></p>
                </a>
              </div>
            </div>
          <?php }
          $i++;
        }
        ?>
      </div>
    </div>
    <div class="uk-width-1-1"style="background:#fff;padding-top:30px;padding-bottom: 30px; margin-top:0px;">
    <div class="uk-grid uk-grid-small">
      <div class="uk-width-1-1">
        <ul class="uk-pagination">
          <!-- Show pagination links -->
          <?php foreach ($links as $link) {
            echo "<li class='uk-active'>". $link."</li>";
          } ?>
        </ul>





        
      </div>
    </div>

  </div>


</div>
</div>

<?php
$this->load->view('template/front/Foot_front');

?>
