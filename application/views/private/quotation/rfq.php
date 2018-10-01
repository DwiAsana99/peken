<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<style>
  #info {
    margin-bottom: 15vh;
  }

  @media screen and (max-width: 480px) {
    #info {
      text-align: center;
      margin-bottom: 15vh;
    }
    #info img {
      margin: 0 auto;
    }
  }
</style>
<script>
  $(document).ready(function () {
    $('#summernote').summernote({
      height: 300, // set editor height
      minHeight: null, // set minimum height of editor
      maxHeight: null, // set maximum height of editor
      focus: true // set focus to editable area after initializing summernote
    });
  });
</script>
<form action="<?php echo base_url().'Quotation/add_quotation'; ?>" method="post">
  <div id="info" class="container">
    <ol class="breadcrumb">
      <?php if (isset($breadcrumb)): ?>
      <?php echo $breadcrumb ?>
      <?php endif; ?>
    </ol>
    <div class="col-md-4">
      <img class="img-responsive" src="<?php echo base_url('assets/supplier_upload/').$product[0]->FileName;?>" alt="" srcset="">
    </div>
    <div class="col-md-4">
      <h2>
        <?php echo $product[0]->Name; ?>
      </h2>
      <h5>
        <?php echo $supplier[0]->CompanyName; ?>
      </h5>
      <br>
      <div class="form-group">
        <label for="qty">Quantity(
          <?php echo $product[0]->Unit; ?>)</label>
        <input name="qty" type="number" class="form-control" id="qty" data-validation="number" data-validation-allowing="range[1;1000000]" data-validation-error-msg="Please fill out quantity...">
      </div>
    </div>
  </div>

  <div class="container">
    <textarea name="message" rows="10" cols="160"  data-validation="length" data-validation-length="min1"
    data-validation-error-msg="Please fill out message..."></textarea>
    <input type="hidden" name="supplier_email" value="<?php echo $supplier[0]->Email; ?>">
    <input type="hidden" name="supplier_id" value="<?php echo $supplier[0]->Id; ?>">
    <input type="hidden" name="product_id" value="<?php echo $product[0]->ProductId; ?>">

    <input type="hidden" name="product_name" value="<?php echo $product[0]->Name; ?>">

    <!-- "Editor Text" Untuk Request for Quotation dipending  -->
    <!-- <textarea name="name" id="summernote" rows="8" cols="80"></textarea> -->


    <button class="btn btn-warning pull-right" type="submit" value="Validate">Send RFQ</button>

  </div>
</form>
<script>
$.validate({
  lang: 'es'
});
</script>
