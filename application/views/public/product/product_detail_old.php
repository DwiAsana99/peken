<?php
$this->load->view('template/front/head_front');
?>

<div class="uk-container-center uk-margin-top" style="background:#ddd;">
  <nav class="uk-navbar"></nav>
  <div class=" uk-grid uk-container-center"  style="padding-top:30px; width: 1300px;" data-uk-grid-margin>
    <div class="uk-width-2-6" style="background:#fff;padding-top:30px;padding-bottom: 30px; " data-uk-grid-margin uk-grid>
      <?php $i = 1; foreach($product as $p){
        if ($i == 1 ) { ?>
          <a href="<?php echo base_url('assets/supplier_upload/').$p->FileName;?>" data-lightbox-type="image" data-uk-lightbox="{group:'group'}" title="<?php echo $product[0]->Name; ?>">
            <img src= "<?php echo base_url('assets/supplier_upload/').$p->FileName;?>" style="height: 300px; widht: 300px; "   alt="">
          </a><br>
        <?php } elseif($i > 1 AND $i < 6) {?>
          <a href="<?php echo base_url('assets/supplier_upload/').$p->FileName;?>" data-lightbox-type="image" data-uk-lightbox="{group:'group'}" title="<?php echo $product[0]->Name; ?>"> <img src= "<?php echo base_url('assets/supplier_upload/').$p->FileName;?>" style="height: 75px; widht: 75px; "  alt=""></a>

        <?php }
        $i++;
      }
      ?>

    </div>
    <div class="uk-width-3-6" style="background:#fff;padding-top:30px;padding-bottom: 30px;  border-right: 30px solid #ddd;" data-uk-grid-margin >

      <h2 class=""><strong><?php echo $product[0]->Name; ?></strong></h2>
      <p> <strong>Rp.<?php echo number_format($product[0]->Price, 0, '.', '.'); ?></strong>/<?php echo $product[0]->Unit; ?></p>

      <p class="">Category: <?php echo $product[0]->ProductSubCategory; ?></p>
      <p class="">Supply Ability : <?php echo number_format($product[0]->SupplyAbility, 0, '.', '.')." ".$product[0]->Unit; ?></p>
      <p class="">Period Supply Ability: <?php echo $product[0]->PeriodSupplyAbility; ?></p>

      <!-- This is a button toggling the modal -->
      <a href="<?php echo site_url('Quotation/rfq_view?')."product_id=".$product[0]->IdProduct."&"."supplier_id=".$p->IdSupplier ?>"
        class="uk-button" >
        Contact Supplier
      </a>




    </div>

    <div class="uk-width-1-6" style="background:#fff;padding-top:30px;padding-bottom: 30px;"  data-uk-grid-margin>
      <div class="uk-grid uk-grid-small uk-text-center">
        <div class="uk-width-1-1" style="padding-right: 30px;">
          <a href="<?php echo site_url('supplier/public_supplier_detail_view?')."supplier_id=".$p->IdSupplier ?>">
          <p><img src="<?php echo base_url('assets/supplier_upload/').$p->ProfilImage;  ?>" width="100" height="100" alt=""></p>
          <p><?php echo $p->CompanyName; ?></p>
          </a>
        </div>
      </div>
    </div>

    <div class="uk-width-medium-5-6" style="margin-left: -35px;">
      <ul class="uk-tab bb-tab">
        <li><a class="uk-h2 uk-active" href="#">Product Detail</a></li>


        <li class="uk-tab-responsive uk-active uk-hidden" aria-haspopup="true" aria-expanded="false"><a>TAB ONE</a><div class="uk-dropdown uk-dropdown-small"><ul class="uk-nav uk-nav-dropdown"></ul><div></div></div></li>
      </ul>
      <div class="uk-switcher uk-tab-container uk-animation-slide-bottom">
        <div class="uk-active" style="background: #fff!important;">
          <div class="uk-tab-p">
            <hr class="uk-hr">
            <h3 class="">Product Description</h3>
            <div class="uk-grid uk-margin uk-margin-bottom uk-bb-member">
              <h4><?php echo $p->ProductDescription; ?></h4>
            </div>
            <hr class="uk-hr">
            <h3 class="">Packaging & Delivery</h3>
            <div class="uk-grid uk-margin uk-margin-bottom uk-bb-member">
              <div class="uk-width-1-2">
                <h4><?php echo $p->PkgDelivery; ?></h4>
              </div>
            </div>
            <!-- <hr class="uk-hr">
            <div class="uk-grid">
              <div class="uk-width-medium-5-6">
                <div style="background:#ddd;color:#212121;padding:10px;">
                  <h3 class="uk-h3">About Factory</h3>
                </div>
                <div style="padding:20px;">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                </div>
              </div>
            </div>
            <div class="uk-grid">
              <div class="uk-width-medium-5-6">
                <div style="background:#ddd;color:#212121;padding:10px;">
                  <h3 class="uk-h3">Certifications</h3>
                </div>
                <div style="padding:20px;">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                </div>
              </div>
            </div>
            <div class="uk-grid">
              <div class="uk-width-medium-5-6">
                <div style="background:#ddd;color:#212121;padding:10px;">
                  <h3 class="uk-h3">FAQ</h3>
                </div>
                <div style="padding:20px;">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                </div>
              </div>
            </div>
            <div class="uk-grid">
              <div class="uk-width-medium-5-6">
                <div style="background:#ddd;color:#212121;padding:10px;">
                  <h3 class="uk-h3">Exhibition</h3>
                </div>
                <div style="padding:20px;">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                </div>
              </div>
            </div> -->







          </div>
        </div>
      </div>
    </div>
  </div>
</div>


</div>
</div>


<?php

$this->load->view('template/front/Foot_front');

?>
