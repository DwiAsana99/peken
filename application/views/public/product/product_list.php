<?php $title['tit']  = "Dinilaku"; $this->load->view('template/front/head_front',$title); ?>
<?php $this->load->view('template/front/navigation'); ?>
  <div class="container">
  <ol class="breadcrumb">
      <li>
        <a href="#">Home</a>
      </li>
      <li>
        <a>Product List</a>
      </li>
    </ol>
    <div class="my-container">
      <?php $i = 1; foreach($product as $p){ ?>
      <div>
        <img class="img-responsive" src="<?php echo base_url('assets/supplier_upload/').$p->FileName?>" alt="">
        <h4>IDR Rp1.200.000 / pcs</h4>
        <h5>Kesslers Diamonds</h5>
        <h6>10 pcs (Supply Ability)</h6>
        <h6>Daily (Period Ability)</h6>
        <hr>
        <div class="text-center">
          <h6>Art Silver</h6>
          <a href="" class="btn btn-default">Contact Seller</a>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
<?php $this->load->view('template/front/foot_front'); ?>
