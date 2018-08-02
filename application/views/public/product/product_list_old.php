

<?php
$this->load->view('template/front/head_front');
?>

<div class="uk-container-center uk-container" >
        </div>
    <div class="uk-container-center uk-margin-top" style="background:#ddd;">
        <div class=" uk-grid uk-container-center tm-grid-truncate"  style="padding-top:30px; width: 1300px;" data-uk-grid-margin>

            <!-- <div class="uk-grid" data-uk-grid-margin>
                <ul class="uk-navbar-nav mp-nav">
                    <li><a class="uk-active" href="#">Product detail</a></li>
                    <li><a  href="#">Product detail</a></li>
                    <li><a  href="#">Product detail</a></li>
                    <li><a  href="#">Product detail</a></li>
                </ul>
            </div> -->
            <?php $i = 1; foreach($product as $p){ ?>
            <div class="uk-width-1-1 mp-product" style="background:#fff;padding-top:30px;padding-bottom: 30px; margin-top:0px;">

                <div class="uk-grid uk-grid-small">
                    <div class="uk-width-1-6" style=" padding-right: 10px;">
                        <div class="uk-grid">
                            <div class="uk-width-1-1">
                                 <a href="<?php echo site_url('Product/public_product_detail_view/').$p->IdProduct ?>"><img src= "<?php echo base_url('assets/supplier_upload/').$p->FileName?>" width="210" height="210" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-4-6">
                        <h2 class="uk-h2"><?php echo $p->Name; ?></h2>
                        <div class="uk-grid-small">
                            <div class="uk-width-1-1">
                                 <div class="uk-grid">
                                    <div class="uk-width-1-3">
                                        <h4 class="uk-h4"><strong>IDR  Rp.<?php echo number_format($p->Price, 0, '.', '.'); ?></strong>/ <?php echo $p->Unit; ?></h4>
                                        <p>  <strong><?php echo number_format($p->SupplyAbility, 0, '.', '.')." ".$p->Unit; ?></strong> (Supply Ability) </p>
                                        <p>  <strong><?php echo $p->PeriodSupplyAbility; ?></strong> (Period Supply Ability) </p>
                                    </div>
                                    <div class="uk-width-2-3">
                                        <p><?php echo $p->ProductDescription; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-6">
                        <div class="uk-grid-small">

                            <div class="uk-width-1-1 uk-text-center" >
                              <a href="<?php echo site_url('supplier/public_supplier_detail_view')."?supplier_id=".$p->IdSupplier ?>">
                                <p><img src="<?php echo base_url('assets/supplier_upload/').$p->ProfilImage;  ?>" width="100" height="100" alt=""></p>
                                <p><?php echo $p->CompanyName; ?></p>
                              </a>
                                <a class="uk-button uk-background-primary "> Contact Supplier </a>
                                <p><a href="#" data-uk-modal><i class="uk-icon-comment uk-icon-small"></i> Leave Messages</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>

            <div class="uk-width-1-1"style="background:#fff;padding-top:30px;padding-bottom: 30px; margin-top:0px;">
                <div class="uk-grid uk-grid-small">
                    <div class="uk-width-1-1">
                      <ul class="uk-pagination">
                          <!-- Show pagination links -->
                          <?php foreach ($links as $link) {
                              echo "<li class='uk-active'>". $link."</li>";
                          } ?>
                      </ul>
                        <!-- <ul class="uk-pagination mp-filter uk-align-left">
                            <li><span>Show    :</span></li>
                            <li class="uk-active"><span>5</span></li>
                            <li><a href="#">10</a></li>
                            <li><a href="#">15</a></li>
                        </ul>
                    </div>
                    <div class="uk-width-1-2">
                        <div class="uk-grid">
                            <div class="uk-width-2-3">
                                <ul class="uk-pagination">
                                    <li class="uk-disabled"><span><i class="uk-icon-angle-double-left"></i></span></li>
                                    <li class="uk-active"><span>1</span></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><span>...</span></li>
                                    <li><a href="#">20</a></li>
                                    <li><a href="#"><i class="uk-icon-angle-double-right"></i></a></li>
                                </ul>

                                <span class="uk-float-right" style="margin-top: -37px;"><strong>1</strong>/20</span>
                            </div>
                            <div class="uk-width-1-3">
                                <form class="uk-form">
                                    <label class="uk-form-label">Go to</label>
                                    <input type="text" placeholder="" style="width: 40px;">
                                    <label class="uk-form-label">Page</label>
                                    <button class="uk-button uk-button-primary">GO</button>
                                 </form>
                            </div>
                        </div> -->
                    </div>

                </div>
            </div>
        </div>
  </div>


<?php
$this->load->view('template/front/foot_front');

?>
