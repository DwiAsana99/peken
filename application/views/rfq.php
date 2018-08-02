<!DOCTYPE html>
<html>
<head>
  <title>Market Place</title>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <?php
  $this->load->view('template/back/css_back');

  ?>

</head>

<body>
  <div class="container">
    <a href="<?php echo site_url('Home'); ?>" style="text-decoration:none; color:black;"><img src="<?php echo base_url().'assets/supplier_upload/dinilaku-logo.jpg'; ?>" width="350" alt=""></a>
    <form action="<?php echo base_url().'index.php/Quotation/add_quotation'; ?>" method="post">
      <!-- quick email widget -->
      <div class="box box-default">
        <div class="box-header">
          <i class="fa fa-envelope"></i>

          <h3 class="box-title"><?php echo $supplier[0]->CompanyName; ?></h3>
          <!-- tools box -->
          <div class="pull-right box-tools">
            <button type="button" class="btn btn-danger btn-sm" data-widget="remove" data-toggle="tooltip"
            title="Remove">
            <i class="fa fa-times"></i></button>
          </div>
          <!-- /. tools -->
        </div>
        <div class="box-body">

            <div class="form-group col-md-2">
              <img src="<?php echo base_url('assets/supplier_upload/').$product[0]->FileName;?>" width="100" alt="">
            </div>
            <div class="form-group col-md-8">
              <h4><?php echo $product[0]->Name; ?></h4>
            </div>
            <div class="form-group col-md-2">
              QTY :<input class="form-control" type="number" min="1"  name="qty" value=""><?php echo $product[0]->Unit;  ?>
            </div>
            <div class="form-group col-md-12">
              Pesan : Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
            </div>
            <div>
              <textarea  class="textarea" name="message" placeholder="Message" style="width: 100%; height: 125px; border: 1px solid #dddddd;"></textarea>
            </div>
            <input type="hidden" name="supplier_email" value="<?php echo $supplier[0]->Email; ?>">
            <input type="hidden" name="supplier_id" value="<?php echo $supplier[0]->IdSupplier; ?>">
            <input type="hidden" name="product_id" value="<?php echo $product[0]->IdProduct; ?>">

            <input type="hidden" name="product_name" value="<?php echo $product[0]->Name; ?>">
        </div>
        <div class="box-footer clearfix">
          <button type="submit" class="pull-right btn btn-default" id="sendEmail">Send
            <i class="fa fa-arrow-circle-right"></i></button>
          </div>
        </div>
      </form>
    </div>
  </body>
  </html>
  <script>
  var editor = new wysihtml5.Editor('editor', {
    toolbar: 'toolbar',
    parserRules:  wysihtml5ParserRules
  });
  </script>
  <?php $this->load->view('template/back/js_back'); ?>
