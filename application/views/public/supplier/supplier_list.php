<style>
  @media screen and (max-width: 480px) {
    .detail-display{
      height: auto;
      opacity: 1;
    }

    .seller > .my-container {
      grid-gap: 0;
    }
}
</style>

    <div class="container">
    <h2>Seller List</h2>
    <ol class="breadcrumb">
      <?php if (isset($breadcrumb)): ?>
      <?php echo $breadcrumb ?>
    <?php endif; ?>
    </ol>
        <!-- <div class="row text-center seller">
          <?php //$i = 1; foreach($supplier as $s){ ?>
            <div class="col-xs-3">
                <a href="<?php //echo site_url('supplier/public_supplier_detail_view?id_supplier=').$s->IdSupplier ?>">
                <img src="<?php //echo base_url('assets/supplier_upload/').$s->ProfilImage?>" class="img-responsive" alt="" width="100">
                </a>
            </div>
            <?php //} ?>
        </div> -->
    <div class="seller">
      <div class="my-container seller_column">
        <?php foreach($supplier as $s){ ?>
        <div class="tes-hover text-center">
          <a
          href="<?php echo site_url('supplier/public_supplier_detail_view?id_supplier=').$s->IdSupplier ?>">
            <img
              src="<?php echo base_url('assets/supplier_upload/').$s->ProfilImage; ?>"
              class="sellerImg"
              alt="">
          </a>
          <div class="detail-display">
            <h3><b><?php echo $s->CompanyName; ?></b> </h3>
            <h4><?php echo $s->Location; ?></h4>
            <h4><?php echo $s->Email; ?></h4>
            <h4><?php echo $s->Phone; ?></h4>
          </div>
        </div>
        <?php } ?>
      </div>
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
