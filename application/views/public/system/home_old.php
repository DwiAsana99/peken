<?php $this->load->view('template/front/head_front');?>
<div class="uk-container-center uk-margin-top" style="background:#ddd;">
  <nav class="uk-navbar"></nav>
  <div class=" uk-grid uk-container-center tm-grid-truncate"  style="padding-top:30px; width: 1300px;" data-uk-grid-margin>
    <div class="uk-width-1-1 " style="background:#fff;padding-top:30px;padding-bottom: 30px;"  data-uk-grid-margin>
      <div class="uk-grid uk-grid-small">
        <div class="uk-width-1-6" style="margin-left: -10px;">
          <h3 class=""> Product Category </h3>
          <ul>
            <?php  foreach($product_category as $pc){?>
            <li class=" kategori">
              <h4>
                <a href="<?php echo site_url('Product/public_product_list_view?')."product_category_code=".$pc->Code; ?>">
                  <?php echo $pc->ProductCategory ; ?>
                </a>
              </h4>
            </li>
          <?php }?>
          </ul>
        </div>
        <div class="uk-width-5-6">
          <div class="uk-grid">
            <div class="uk-width-1-1">
              <div class="uk-slidenav-position" data-uk-slideshow="{animation: 'slice-down'}">
                <ul class="uk-slideshow">
                  <li><img src= "<?php echo base_url('assets/front/images/placeholder_800x400_1.jpg')?>" width="300" height="200" alt=""></li>
                  <li><img src= "<?php echo base_url('assets/front/images/placeholder_800x400_2.jpg')?>"  width="300" height="200" alt=""></li>
                  <li><img src= "<?php echo base_url('assets/front/images/placeholder_800x400_3.jpg')?>"  width="300" height="200" alt=""></li>
                </ul>
                <a href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous" style="color: rgba(255,255,255,0.4)"></a>
                <a href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next" style="color: rgba(255,255,255,0.4)"></a>
                <ul class="uk-dotnav uk-dotnav-contrast uk-position-bottom uk-flex-center">
                  <li data-uk-slideshow-item="0"><a href=""></a></li>
                  <li data-uk-slideshow-item="1"><a href=""></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- <div class="uk-width-1-6 uk-row-first">
          <div class="uk-panel" style="padding-bottom:10px; border-bottom: 1px solid #ddd;">
            <div class="uk-padding">
              <a class="content" href="" target="_blank">
                <div class="uk-article-title" style="font-size: 25px;">lourem ipsum</div>
                <div class="uk-nav-sub" style="margin-top:20px;">lourem ipsum</div>
                <div class="uk-button uk-background-primary " style="margin-top:15px;">view more</div>
                <div class="" style="position: absolute;right: 5px;bottom: 5px;">
                  <img src="">
                </div>
              </a>
            </div>
          </div>
          <div class="uk-panel" style="padding-bottom:10px; border-bottom: 1px solid #ddd;">
            <div class="uk-padding">
              <a class="content" href="" target="_blank">
                <div class="uk-article-title"  style="font-size: 25px;">lourem ipsum</div>
                <div class="uk-nav-sub" style="margin-top:20px;">lourem ipsum</div>
                <div class="uk-button uk-background-primary " style="margin-top:15px;">view more</div>
                <div class="" style="position: absolute;right: 5px;bottom: 5px;">
                  <img src="">
                </div>
              </a>
            </div>
          </div>
        </div> -->
      </div>
    </div>
    <div class="uk-width-1-1 " style="background:#fff;padding-top:30px;padding-bottom: 20px;"  data-uk-grid-margin>
      <div class="uk-grid uk-grid-small">
        <div class="uk-width-1-6" style="margin-left: -10px;">
          <h2 class="uk-h2"> Product </h2>
          <ul>
            <li class=" kategori"><a href="#"> lorem ipsum </a></li>
            <li class=" kategori"><a href="#"> lorem ipsum </a></li>
            <li class=" kategori"><a href="#"> lorem ipsum </a></li>
            <li class=" kategori"><a href="#"> lorem ipsum </a></li>
          </ul>
          <h2 class="uk-h2"> Supplier </h2>
          <ul>
            <li class=" kategori"><a href="#"> lorem ipsum </a></li>
            <li class=" kategori"><a href="#"> lorem ipsum </a></li>
            <li class=" kategori"><a href="#"> lorem ipsum </a></li>
            <li class=" kategori"><a href="#"> lorem ipsum </a></li>
          </ul>
        </div>
        <div class="uk-width-5-6" style="padding-right: 20px; border-left:2px solid #ddd;">
          <div class="uk-grid">
            <div class="uk-width-1-1">
              <h2 class="uk-h2 uk-text-center"> Product </h2>


              <?php $i = 1; $array_length  = count($product); foreach($product as $u){

                if ($i % 4 == 1) { ?>
                  <div class="uk-flex">
                    <div class="uk-width-1-4 uk-panel uk-panel-box uk-margin-left uk-margin-bottom uk-text-center" style="height: 300px;  ">
                      <a href="<?php echo site_url('Product/public_product_detail_view/').$u->IdProduct ?>">
                        <img style="height: 200px; width: 200px;" src="<?php echo base_url('assets/supplier_upload/').$u->FileName; ?>" alt="">
                        <p><?php echo $u->Name ; ?></p>
                        <p><b>Rp<?php echo number_format($u->Price, 0, '.', '.'); ?></b></p>
                      </a>
                    </div>
                  <?php } elseif(($i % 4 !== 1 AND $i % 4 !== 0) AND ($i !== $array_length)) {?>
                    <div class="uk-width-1-4 uk-panel uk-panel-box uk-margin-left uk-margin-bottom uk-text-center" style="height: 300px;  ">
                      <a href="<?php echo site_url('Product/public_product_detail_view/').$u->IdProduct ?>">
                        <img style="height: 200px; width: 200px;" src="<?php echo base_url('assets/supplier_upload/').$u->FileName; ?>" alt="">
                        <p><?php echo $u->Name ; ?></p>
                        <p><b>Rp<?php echo number_format($u->Price, 0, '.', '.'); ?></b></p>
                      </a>
                    </div>
                  <?php } elseif (($i % 4 == 0) OR ($i == $array_length)) { ?>
                    <div class="uk-width-1-4 uk-panel uk-panel-box uk-margin-left uk-margin-bottom uk-text-center" style="height: 300px;  ">
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
              <a href="<?php echo site_url('Product/public_product_list_view') ?>"><button class="uk-button uk-background-primary uk-float-right" style="margin-top:20px;">view More</button></a>
            </div>
            <div class="uk-width-1-1">
              <hr class="uk-grid-divider">
            </div>
            <div class="uk-width-1-1">
              <h2 class="uk-h2 uk-text-center"> Supplier </h2>
              <?php $i = 1; $array_length = count($supplier); foreach($supplier as $s){

                if ($i % 5 == 1) { ?>
                  <div class="uk-flex">
                    <div class="uk-width-1-4 uk-panel uk-panel-box uk-margin-left uk-margin-bottom uk-text-center" style="height: 250px;width:190px;  ">
                      <a href="<?php echo site_url('supplier/public_supplier_detail_view?supplier_id=').$s->IdSupplier ?>">
                        <img style="height: 150px; width: 150px;" src="<?php echo base_url('assets/supplier_upload/').$s->ProfilImage; ?>" alt="">
                        <p><?php echo $s->CompanyName ; ?></p>
                      </a>
                    </div>
                  <?php } elseif(($i % 5 !== 1 AND $i % 5 !== 0) AND ($i !== $array_length)) {?>
                    <div class="uk-width-1-4 uk-panel uk-panel-box uk-margin-left uk-margin-bottom uk-text-center" style="height: 250px;width:190px;  ">
                      <a href="<?php echo site_url('supplier/public_supplier_detail_view?supplier_id=').$s->IdSupplier ?>">
                        <img style="height: 150px; width: 150px;" src="<?php echo base_url('assets/supplier_upload/').$s->ProfilImage; ?>" alt="">
                        <p><?php echo $s->CompanyName ; ?></p>
                      </a>
                    </div>
                  <?php } elseif (($i % 5 == 0) OR ($i == $array_length)) { ?>
                    <div class="uk-width-1-4 uk-panel uk-panel-box uk-margin-left uk-margin-bottom uk-text-center" style="height: 250px;width:190px;  ">
                      <a href="<?php echo site_url('supplier/public_supplier_detail_view?supplier_id=').$s->IdSupplier ?>">
                        <img style="height: 150px; width: 150px;" src="<?php echo base_url('assets/supplier_upload/').$s->ProfilImage; ?>" alt="">
                        <p><?php echo $s->CompanyName ; ?></p>
                      </a>
                    </div>
                  </div>
                <?php }
                $i++;
              }
              ?>
              <a href="<?php echo site_url('Supplier/public_supplier_list_view') ?>"><button class="uk-button uk-background-primary uk-float-right" style="margin-top:20px;">View More</button></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div id="offcanvas" class="uk-offcanvas">
  <div class="uk-offcanvas-bar">
    <ul class="uk-nav uk-nav-offcanvas">
      <li class="uk-active">
        <a href="layouts_frontpage.html">Frontpage</a>
      </li>
    </ul>
  </div>
</div>
<!-- start login modal -->
<!-- <div id="loginModal" class="uk-modal">
<div class="uk-modal-dialog bb-modal-dialog bb-login">
<a class="uk-modal-close bb-modal-close uk-close"></a>
<div class="uk-vertical-align-middle" style="width: 600px;">
<h3 class="uk-text-center">Already a Member?</h3>

<form class="uk-panel uk-panel-box uk-form">
<fieldset>
<div class="uk-form-row">
<input class="uk-width-1-1 uk-form-large" type="text" placeholder="Username">
</div>
<div class="uk-form-row">
<input class="uk-width-1-1 uk-form-large" type="text" placeholder="Password">
</div>
<div class="uk-form-row">
<a class="uk-width-1-1 uk-button uk-button-primary uk-button-large" href="#">Login</a>
</div>
<div class="uk-form-row uk-text-small">
<label class="uk-float-left"><input type="checkbox"> Remember Me</label>
<a class="uk-float-right uk-link uk-link-muted" href="#">Forgot Password?</a>
</div>
</fieldset>
</form>
<h3 class="uk-text-center">I have not registered</h3>
<a class="uk-width-1-1 uk-button uk-button-primary uk-button-large" href="step-01.html">Register</a>
</div>
</div>
</div> -->


<?php
$this->load->view('template/front/foot_front');

?>
