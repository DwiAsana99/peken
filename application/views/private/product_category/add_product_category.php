<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="btn-group btn-breadcrumb">
    <a href="#" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-home"></i></a>
    <a href="<?php echo base_url('Product_category/product_category_view');?>" class="btn btn-default  btn-xs">Product Category</a>
    <a  class="btn btn-default  btn-xs active">Add Product Category</a>
  </div>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-info">
        <div class="box-header">
          <h3 class="box-title">Add New Product Category</h3>
        </div>
        <div class="box-body">
          <form method="post" id="Simpan"  action="<?php echo base_url().'Product_category/add_product_category'; ?>">
            <div class="form-group">
              <label class="control-label">Product Category</label>
              <input type="text" name="product_category" id="product_category"  data-validation="length" data-validation-length="min4" data-validation-error-msg="Please fill out category name..."  class="form-control"  placeholder="">
            </div>
            <!-- <div class="form-group">
            <label class="control-label">Description</label>
            <input type="text" name="description" id="description"  data-validation="length" data-validation-length="min4" data-validation-error-msg="Please fill out category description..."  class="form-control"  placeholder="">
          </div> -->
          <div class="form-group">
            <button type="submit" value="Validate" class="btn btn-default"><i class='glyphicon glyphicon-ok'></i> Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</section>
<script type="text/javascript">
$("#Simpan").submit(function() {
  var category = $('#category').val();
  var description = $('#description').val();
  if (category == ''|| description==''){
    File_Kosong(); return false;
  }else{
    event.preventDefault();
    $.confirm({
      title: 'Confirmation',
      content: 'Are You Sure to Save?',
      type: 'blue',
      buttons: {
        Simpan: function () {
          $.LoadingOverlay("show");
          $("#Simpan").submit();
        },
        Batal: function () {

          $.alert('Data Tidak Disimpan...');
        },
      }
    });
  }

});
</script>
