    <div class="container">
    <h2>Seller List</h2>
    <ol class="breadcrumb">
      <?php if (isset($breadcrumb)): ?>
      <?php echo $breadcrumb ?>
    <?php endif; ?>
    </ol>
        <div class="row text-center seller">
          <?php $i = 1; foreach($supplier as $s){ ?>
            <div class="col-xs-3">
                <a href="<?php echo site_url('supplier/public_supplier_detail_view?id_supplier=').$s->IdSupplier ?>">
                <img src="<?php echo base_url('assets/supplier_upload/').$s->ProfilImage?>" class="img-responsive" alt="" width="100">
                </a>
            </div>
            <?php } ?>

        </div>
    </div>
