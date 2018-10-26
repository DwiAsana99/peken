
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/dropzone/css/dropzone.min.css') ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/dropzone/css/basic.min.css') ?>" />
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script src="<?php echo base_url('assets/js/accounting.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/cleave.min.js') ?>" type="text/javascript"></script>

<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="btn-group btn-breadcrumb">
    <a href="#" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-home"></i></a>
    <a href="<?php echo base_url('index.php/Product/product_view');?>" class="btn btn-default  btn-xs">Product</a>
    <a  class="btn btn-default  btn-xs active">Update Product</a>
  </div>
</section>
<script type="text/javascript" >

$(function(){
  $("#product_category_code").change(function(){

    var code=$(this).val();
    get_product_sub_category(code);


  });
})
</script>
<script type="text/javascript">
function get_product_category(){
  //$("#product_category_code").empty();
  //var xx = "";
  //var service_category_code_request = $("#service_category_code_request").val();
  $.getJSON( "<?php echo base_url().'Product_category/get_product_category/'; ?>/", function( data ) {
    console.log(data);
    // return data.responseJSON;
    for (var key in data) {
      $("#product_category_code").append("<option value='"+data[key].Code+"'>"+data[key].ProductCategory+"</option>");
      console.log(data[key].Code);
    }

  })

}
function get_product_sub_category(code){
  $("#product_sub_category_code").empty();
  $.getJSON( "<?php echo base_url().'Product_sub_category/get_product_sub_category'; ?>/"+code, function( data ) {
    console.log(data);


    $("#product_sub_category_code").append("<option value='0'>--Choose Product Sub Category--</option>");
    for (var key in data) {
      console.log( data[key].ProductCategoryCode);
      $("#product_sub_category_code").append("<option value='"+data[key].Code+"'>"+data[key].ProductSubCategory+"</option>");
    }
  })
}
</script>
<script type="text/javascript">
function doMathPrice()
{
  var min_price = document.getElementById('min_price1').value;
  min_price = min_price.replace(/\,/g, "");
  document.getElementById('min_price').value =  min_price;

  var max_price = document.getElementById('max_price1').value;
  max_price = max_price.replace(/\,/g, "");
  document.getElementById('max_price').value =  max_price;

  var supply_ability = document.getElementById('supply_ability1').value;
  supply_ability = supply_ability.replace(/\,/g, "");
  document.getElementById('supply_ability').value =  supply_ability;

  // price = parseFloat(price);
  // var service = price * 0.1;
  // var tax = (service + price) * 0.1;
  // var finalprice = price + tax + service;
  // document.getElementById('tax1').value = tax.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
  // document.getElementById('tax').value = tax;
  // document.getElementById('service1').value = service.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
  // document.getElementById('service').value = service;
  // document.getElementById('fp1').value = finalprice.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
  // document.getElementById('fp').value = finalprice;
}
$(document).ready(function () {
  doMathPrice();
});
</script>
<script type="text/javascript">
jQuery(document).ready(function($) {
  new Cleave('.input-1', {
    numeral: true,
    numeralDecimalMark: '.',
    delimiter: ','
  });
  new Cleave('.input-2', {
    numeral: true,
    numeralDecimalMark: '.',
    delimiter: ','
  });
  new Cleave('.input-3', {
    numeral: true,
    numeralDecimalMark: '.',
    delimiter: ','
  });
  //   new Cleave('.input-4', {
  //      numeral: true,
  //      numeralDecimalMark: ',',
  //      delimiter: '.'
  // });
});
</script>
<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-info">
        <div class="box-header">
          <h3 class="box-title">Update Product</h3>
        </div>
        <div class="box-body">
          <form method="post"  enctype="multipart/form-data" id="EditProduct"  action="<?php echo base_url().'Product/update_product'; ?>">
            <div class="form-group" id="formGroupProductName">
              <label class="control-label">Product Name</label>
              <input type="text" value="<?php echo $product[0]->Name ?>" name="product_name" id="product_name" class="form-control" placeholder="">
              <span id="spanProductName" class=""></span>
            </div>
            <div class="form-group" id="formGroupProductCategory">
              <label for="">Product Category</label>
              <select class="form-control" name="product_category_code" id="product_category_code">
              <option value=''>--Choose Product Category--</option>
                <?php $i = 1; foreach($product_category as $pc){
                  if ($product[0]->ProductCategoryCode == $pc->Code) {
                    ?>
                    <option selected value="<?php echo $pc->Code?>"><?php echo $pc->ProductCategory?></option>
                    <?php
                  }else{
                    ?>
                    <option value="<?php echo $pc->Code?>"><?php echo $pc->ProductCategory?></option>
                    <?php
                  }
                  ?>
                <?php } ?>
              </select>
              <span id="spanProductCategory" class=""></span>
            </div>
            <div class="form-group" id="formGroupProductSubCategory">
              <label for="">Product Sub Category</label>
              <select class="form-control" name="product_sub_category_code" id="product_sub_category_code">
              <option value=''>--Choose Product Sub Category--</pilih>
                <?php $i = 1; foreach($product_sub_category as $psc){
                  if ($product[0]->ProductSubCategoryCode == $psc->Code) {
                    ?>
                    <option selected value="<?php echo $psc->Code?>"><?php echo $psc->ProductSubCategory?></option>
                    <?php
                  }else{
                    ?>
                    <option value="<?php echo $psc->Code?>"><?php echo $psc->ProductSubCategory?></option>
                    <?php
                  }
                  ?>
                <?php } ?>
              </select>
              <span id="spanProductSubCategory" class=""></span>
            </div>
            <div class="form-group" id="formGroupUnit">
              <label for="">Unit</label>
              <input type="text" value="<?php echo $product[0]->Unit ?>" name="unit" id="unit" class="form-control" value="">
              <span id="spanUnit" class=""></span>
            </div>
            <div class="form-group" id="formGroupMinPrice">
              <label class="control-label">Min Price</label>
              <input type="text" value="<?php echo $product[0]->MinPrice ?>" name="min_price1" id="min_price1"
                onkeyup="doMathPrice()" class="form-control input-1"  placeholder="">
              <input type="hidden"  value="<?php echo $product[0]->MinPrice ?>" name="min_price" id="min_price"
                onkeyup="doMathPrice()" class="form-control"  placeholder="">
              <span id="spanMinPrice" class=""></span>
            </div>
            <div class="form-group" id="formGroupMaxPrice">
              <label class="control-label">Max Price</label>
              <input type="text" value="<?php echo $product[0]->MaxPrice ?>" name="max_price1" id="max_price1" onkeyup="doMathPrice()"
                class="form-control input-2"  placeholder="">
              <input type="hidden" value="<?php echo $product[0]->MaxPrice ?>" name="max_price" id="max_price" onkeyup="doMathPrice()"
                class="form-control"  placeholder="">
              <span id="spanMaxPrice" class=""></span>
            </div>
            <div class="form-group" id="formGroupSupplyAbility">
              <label class="control-label">Supply Ability</label>
              <input type="text" value="<?php echo number_format($product[0]->SupplyAbility, 0, '.', ','); ?>" name="supply_ability1" id="supply_ability1"
                onkeyup="doMathPrice()" class="form-control input-3"  placeholder="">
              <input type="hidden" value="<?php echo $product[0]->SupplyAbility ?>" name="supply_ability" id="supply_ability"
                onkeyup="doMathPrice()"   class="form-control"  placeholder="">
              <span id="spanSupplyAbility" class=""></span>
            </div>
            <div class="form-group" id="formGroupPeriodSupplyAbility">
              <label for="">Period Supply Ability</label>
              <select class="form-control" name="period_supply_ability" id="period_supply_ability">

                <?php if ($product[0]->PeriodSupplyAbility == "daily"){ ?>
                  <option value="daily" selected>Daily</option>
                  <option value="weekly">Weekly</option>
                  <option value="monthly">Monthly</option>
                  <option value="yearly">Yearly</option>
                <?php }elseif($product[0]->PeriodSupplyAbility == "weekly"){ ?>
                  <option value="daily" >Daily</option>
                  <option value="weekly" selected>Weekly</option>
                  <option value="monthly">Monthly</option>
                  <option value="yearly">Yearly</option>
                <?php }elseif($product[0]->PeriodSupplyAbility == "monthly"){ ?>
                  <option value="daily" >Daily</option>
                  <option value="weekly">Weekly</option>
                  <option value="monthly" selected>Monthly</option>
                  <option value="yearly">Yearly</option>
                <?php }elseif($product[0]->PeriodSupplyAbility == "yearly"){ ?>
                  <option value="daily" >Daily</option>
                  <option value="weekly">Weekly</option>
                  <option value="monthly">Monthly</option>
                  <option value="yearly" selected>Yearly</option>
                <?php } ?>

              </select>
              <span id="spanPeriodSupplyAbility" class=""></span>
            </div>
            <div class="form-group" id="formGroupProductDescription">
              <label for="">Product Description</label>
              <textarea class="form-control" rows="5" name="product_description" id="product_description"><?php echo $product[0]->ProductDescription ?></textarea>
              <span id="spanProductDescription" class=""></span>
            </div>
            <div class="form-group" id="formGroupPkgDelivery">
              <label for="">Packaging & Delivery</label>
              <textarea class="form-control" rows="5" name="pkg_delivery" id="pkg_delivery"><?php echo $product[0]->PkgDelivery ?></textarea>
              <span id="spanPkgDelivery" class=""></span>
            </div>
            <div class="form-group" id="formGroupStatus">
              <label for="">Product Status</label>
              <select class="form-control" name="status" id="status">
                <?php if ($product[0]->IsPublished == 1): ?>
                  <option selected value="1">Published</option>
                  <option value="0">Do not publish</option>
                <?php else: ?>
                  <option value="1">Published</option>
                  <option selected value="0">Do not publish</option>
                <?php endif; ?>
              </select>
              <span id="spanStatus" class=""></span>
            </div>
            <!-- <div id="product_image_div" class="co-md-12 "><label class="control-label">Product Image</label></div> -->
            <div id="formGroupProductImage" class="co-md-12 "><label class="control-label">Product Image</label></div>
            <?php foreach ($product_pic as $pp): ?>
              <div id="<?php echo "div".$pp->Id; ?>" class="form-group col-lg-2 text-center">
                <!-- <img src="<?php //echo base_url().'assets/icon/upload-icon.png'?>" alt="" style="width: 100px"> -->
                <div class="form-group text-center">

                  <img src="<?php if (empty($pp->FileName)) {
                    echo base_url().'assets/icon/upload-icon.png';
                  }else{
                    echo base_url().'assets/supplier_upload/'.$pp->FileName;
                  }?>"  alt="" class="img-thumbnail" alt="Cinque Terre" width="200" >
                </div>
                <!--  -->
                <!-- <input type="hidden" name="product_id_pic" id="product_id_pic" value="<?php //echo $pp->IdProductPic; ?>"> -->

                <button type="button" class="btn btn-danger" id="delete_pic" value="<?php echo $pp->Id; ?>">Delete</button>
              </div>

            <?php endforeach; ?>
            <div class="form-group col-md-12" >
              <!-- <label class="control-label">Product Image</label> -->
              <div class="dropzone" >
                <div class="dz-message">
                  <h4> Click or Drop product picture here..<br>Max File Size 1,8 MB <br>Max File Upload is 5 pcs</h4>
                </div>
              </div>
              <button type="button" style="margin-bottom: 10px"  class="btn btn-info col-md-12" id="BtnUpload">
                <i class='glyphicon glyphicon-ok'></i> Upload Image
              </button>
              <div id="product_image_alert" class="" role="alert" style="margin-bottom: 0px">
                <p id="product_image_error"></p>
              </div>
              <div id="max_upload_product_image_alert" class="" role="alert">
                <p id="max_upload_product_image_error"></p>
              </div>
            </div>
            <!-- <div class="form-group",>
            <label class="control-label">Product Image</label>
            <div class="dropzone">
            <div class="dz-message">
            <h4> Click or Drop product image here..</h4>
          </div>
        </div>
      </div> -->

      <!-- <div class="form-group">
      <label class="control-label">Description</label>
      <input type="text" name="description" id="description"  data-validation="length" data-validation-length="min1" data-validation-error-msg="Please fill out category description..."  class="form-control"  placeholder="">
    </div> -->
    <div class="form-group text-right col-md-12">
      <input type="hidden" name="product_id" value="<?php echo $product[0]->ProductId ?>">
      <button type="submit" id="btn_submit_edit" value="Validate" class="btn btn-default "><i class='glyphicon glyphicon-ok'></i> Save</button>
    </div>
  </form>
</div>
</div>
</div>
</div>


</section>



<script src= "<?php echo base_url('assets/dropzone/js/dropzone.min.js') ?>" ></script>
<script>
$.validate({
  lang: 'es'
});
</script>
<script type="text/javascript">
function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
      $('#fotoview')
      .attr('src', e.target.result)
      .width(250);
    };

    reader.readAsDataURL(input.files[0]);
  }
}
</script>
<script type="text/javascript">
$(function(){
  $(document).click(function(event){
    var value=$(event.target).val();
    var id = event.target.id;
    // console.log(event.target.id);
    // console.log($(event.target).val());
    if (id == "delete_pic") {
      event.preventDefault();
      $.confirm({
        title: 'Confirmation',
        content: 'Are You Sure to delete this product image?',
        type: 'red',
        buttons: {
          Delete: function () {
            //$(event.target).click();
            var divPic = "#div"+value;
            $(divPic).remove();
            $('<input>').attr({
              type: 'hidden',
              id: value,
              name: 'deleted_image['+value+']',
              value: value
            }).appendTo('form');
          },
          Cancel: function () {
            $.alert('product image not deleted...');
          },
        }
      });
    }
  });
})
</script>

<script type="text/javascript">
$(document).ready(function(){
  var i = 1;
  Dropzone.autoDiscover = false;
  var accept = ".pdf,.png,.jpg,.JPEG";
  var foto_upload= new Dropzone(".dropzone",{
    url: "<?php echo base_url('Product/add_product_picture') ?>",
    maxFilesize: 2000,
    method:"post",
    acceptedFiles:accept,
    parallelUploads:5,
    autoProcessQueue: false,
    paramName:"userfiles",
    dictInvalidFileType:"Type file ini tidak dizinkan",
    addRemoveLinks:true,
    success: function(file,data){

      var data_array = data.split(',');
      var nama =data_array[0];
      var namafile =  nama.replace('"', '');
      var token =data_array[1];
      var tokenfile =  token.replace('"', '');
      var str = String(tokenfile);
      var res = str.substring(3, 10);
      $('<input>').attr({
        type: 'hidden',
        id: res,//a.token,
        class:tokenfile,
        name: 'file['+i+']',
        value: namafile
      }).appendTo('form');
      i++;
    }
  });
  $("#BtnUpload").click(function() {
    var qty_dropzone_preview_image = 0;
    var qty_productImageAfter = 0 ;
    var qty_all_upload = 0;
    $('div[class^="dz-preview dz-image-preview"]').each(function() {
      qty_dropzone_preview_image = qty_dropzone_preview_image+1;
    });
    $('div[id^="div"]').each(function() {
      qty_productImageAfter = qty_productImageAfter+1;
    });
    qty_all_upload = qty_dropzone_preview_image+qty_productImageAfter;
    console.log(qty_dropzone_preview_image);
    console.log(qty_productImageAfter);
    console.log(qty_all_upload);
    if (qty_all_upload < 6) {
      foto_upload.processQueue();
      setTimeout( function () {
        var productImage ="x";
        var productImageAfter ="x after";
        $('input[name^="file"]').each(function() {
          productImage = "ada";
        });
        $('div[id^="div"]').each(function() {
          productImageAfter = "ada after";
        });
        if (productImage == "ada" || productImageAfter == "ada after") {
          $("#product_image_alert").removeAttr("class");
          $("#product_image_error").html('');
          $("#max_upload_product_image_alert").removeAttr("class");
          $("#max_upload_product_image_error").html('');
          $("#formGroupProductImage").addClass("has-success").removeClass( "has-error" );
        }
      }, 500);
    }else {
      $("#formGroupProductImage").addClass("has-error").removeClass( "has-success" );
      $("#max_upload_product_image_alert").addClass('alert alert-danger');
      $("#max_upload_product_image_error").html('One product can only have five images');
    }
  });
  $("#btn_submit_edit").click(function(event) {
    // event.preventDefault();
    var productImage ="x";
    var productImageAfter ="x after";
    $('input[name^="file"]').each(function() {
      productImage = "ada";
    });
    $('div[id^="div"]').each(function() {
      productImageAfter = "ada after";
    });

    var product_name_error = "";
    if ($("#product_name").val().trim() === "") {
      product_name_error = "Please fill out product name...";
    }
    if (product_name_error !== "") {
      $("#spanProductName").html(product_name_error);
      $("#spanProductName").addClass("help-block");
      $("#formGroupProductName").addClass("has-error").removeClass( "has-success" );
      event.preventDefault();
    } else {
      $("#spanProductName").html("");
      $("#formGroupProductName").addClass("has-success").removeClass( "has-error" );
    }
    // ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    var product_category_code_error = "";
    if ($("#product_category_code").val() == "0") {
      product_category_code_error = "Please fill out product category...";
    }
    if (product_category_code_error !== "") {
      $("#spanProductCategory").html(product_category_code_error);
      $("#spanProductCategory").addClass("help-block");
      $("#formGroupProductCategory").addClass("has-error").removeClass( "has-success" );
      event.preventDefault();
    } else {
      $("#spanProductCategory").html("");
      $("#formGroupProductCategory").addClass("has-success").removeClass( "has-error" );
    }
    // ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    var product_sub_category_code_error = "";
    if ($("#product_sub_category_code").val() == "0") {
      product_sub_category_code_error = "Please fill out product sub category...";
    }
    if (product_sub_category_code_error !== "") {
      $("#spanProductSubCategory").html(product_sub_category_code_error);
      $("#spanProductSubCategory").addClass("help-block");
      $("#formGroupProductSubCategory").addClass("has-error").removeClass( "has-success" );
      event.preventDefault();
    } else {
      $("#spanProductSubCategory").html("");
      $("#formGroupProductSubCategory").addClass("has-success").removeClass( "has-error" );
    }
    // ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    var unit_error = "";
    if ($("#unit").val().trim() === "") {
      unit_error = "Please fill out unit...";
    }
    if (unit_error !== "") {
      $("#spanUnit").html(unit_error);
      $("#spanUnit").addClass("help-block");
      $("#formGroupUnit").addClass("has-error").removeClass( "has-success" );
      event.preventDefault();
    } else {
      $("#spanUnit").html("");
      $("#formGroupUnit").addClass("has-success").removeClass( "has-error" );
    }
    // ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    var min_price_error = "";
    if ($("#min_price").val().trim() === "") {
      min_price_error = "Please fill out min price...";
    }
    if (min_price_error !== "") {
      $("#spanMinPrice").html(min_price_error);
      $("#spanMinPrice").addClass("help-block");
      $("#formGroupMinPrice").addClass("has-error").removeClass( "has-success" );
      event.preventDefault();
    } else {
      $("#spanMinPrice").html("");
      $("#formGroupMinPrice").addClass("has-success").removeClass( "has-error" );
    }
    // ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    var max_price_error = "";
    if ($("#max_price").val().trim() === "") {
      max_price_error = "Please fill out max price...";
    }
    if (max_price_error !== "") {
      $("#spanMaxPrice").html(max_price_error);
      $("#spanMaxPrice").addClass("help-block");
      $("#formGroupMaxPrice").addClass("has-error").removeClass( "has-success" );
      event.preventDefault();
    } else {
      $("#spanMaxPrice").html("");
      $("#formGroupMaxPrice").addClass("has-success").removeClass( "has-error" );
    }
    // ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    var supply_ability_error = "";
    if ($("#supply_ability").val().trim() === "") {
      supply_ability_error = "Please fill out supply ability...";
    }
    if (supply_ability_error !== "") {
      $("#spanSupplyAbility").html(supply_ability_error);
      $("#spanSupplyAbility").addClass("help-block");
      $("#formGroupSupplyAbility").addClass("has-error").removeClass( "has-success" );
      event.preventDefault();
    } else {
      $("#spanSupplyAbility").html("");
      $("#formGroupSupplyAbility").addClass("has-success").removeClass( "has-error" );
    }
    // ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    var period_supply_ability_error = "";
    if ($("#period_supply_ability").val() === "") {
      period_supply_ability_error = "Please fill out period supply ability...";
    }
    if (period_supply_ability_error !== "") {
      $("#spanPeriodSupplyAbility").html(period_supply_ability_error);
      $("#spanPeriodSupplyAbility").addClass("help-block");
      $("#formGroupPeriodSupplyAbility").addClass("has-error").removeClass( "has-success" );
      event.preventDefault();
    } else {
      $("#spanPeriodSupplyAbility").html("");
      $("#formGroupPeriodSupplyAbility").addClass("has-success").removeClass( "has-error" );
    }
    // ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    var product_description_error = "";
    if ($("#product_description").val().trim() === "") {
      product_description_error = "Please fill out product description...";
    }
    if (product_description_error !== "") {
      $("#spanProductDescription").html(product_description_error);
      $("#spanProductDescription").addClass("help-block");
      $("#formGroupProductDescription").addClass("has-error").removeClass( "has-success" );
      event.preventDefault();
    } else {
      $("#spanProductDescription").html("");
      $("#formGroupProductDescription").addClass("has-success").removeClass( "has-error" );
    }
    // ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    var pkg_delivery_error = "";
    if ($("#pkg_delivery").val().trim() === "") {
      pkg_delivery_error = "Please fill out pkg delivery...";
    }
    if (pkg_delivery_error !== "") {
      $("#spanPkgDelivery").html(pkg_delivery_error);
      $("#spanPkgDelivery").addClass("help-block");
      $("#formGroupPkgDelivery").addClass("has-error").removeClass( "has-success" );
      event.preventDefault();
    } else {
      $("#spanPkgDelivery").html("");
      $("#formGroupPkgDelivery").addClass("has-success").removeClass( "has-error" );
    }
    // ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    var status_error = "";
    if ($("#status").val() === "") {
      status_error = "Please fill out product status...";
    }
    if (status_error !== "") {
      $("#spanStatus").html(status_error);
      $("#spanStatus").addClass("help-block");
      $("#formGroupStatus").addClass("has-error").removeClass( "has-success" );
      event.preventDefault();
    } else {
      $("#spanStatus").html("");
      $("#formGroupStatus").addClass("has-success").removeClass( "has-error" );
    }
    // ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    var all_error = "";
    all_error += product_name_error;
    all_error += product_category_code_error;
    all_error += product_sub_category_code_error;
    all_error += unit_error;
    all_error += min_price_error;
    all_error += max_price_error;
    all_error += supply_ability_error;
    all_error += period_supply_ability_error;
    all_error += product_description_error;
    all_error += pkg_delivery_error;
    all_error += status_error;

    console.log(productImage);
    console.log(productImageAfter);
    if ((productImage == "ada" || productImageAfter == "ada after") && all_error == "") {
      console.log('silahkan masuk');
      event.preventDefault();
      $("#product_image_alert").removeAttr("class");
      $("#product_image_error").html('');
      $("#formGroupProductImage").addClass("has-success").removeClass( "has-error" );
      $.confirm({
        title: 'Confirmation',
        content: 'Are You Sure to Save?',
        type: 'blue',
        buttons: {
          Save: function () {
            $.LoadingOverlay("show");
            console.log('silahkan masuk');
            setTimeout( function () {
              $("#EditProduct").submit();
            }, 2000);
          },
          Cancel: function () {
            $.alert('Data not saved...');
          },
        }
      });
    } else if(productImage == "x" && productImageAfter == "x after"){
      event.preventDefault();
      console.log('tidak bisa masuk');
      $("#formGroupProductImage").addClass("has-error").removeClass( "has-success" );
      $("#product_image_alert").addClass('alert alert-danger');
      $("#product_image_error").html('You must fill in the product image');
    } else if(productImage == "ada" || productImageAfter == "ada after"){
      event.preventDefault();
      console.log('tidak bisa masuk');
      $("#formGroupProductImage").addClass("has-success").removeClass( "has-error" );
      $("#product_image_alert").removeAttr("class");
      $("#product_image_error").html('');
    }
  });


  $("#product_name").focus(function() {
    $("#spanProductName").html("");
    $("#formGroupProductName").removeClass("has-success").removeClass("has-error");
  });
  $("#product_category_code").focus(function() {
    $("#spanProductCategory").html("");
    $("#formGroupProductCategory").removeClass("has-success").removeClass("has-error");
  });
  $("#product_sub_category_code").focus(function() {
    $("#spanProductSubCategory").html("");
    $("#formGroupProductSubCategory").removeClass("has-success").removeClass("has-error");
  });
  $("#unit").focus(function() {
    $("#spanUnit").html("");
    $("#formGroupUnit").removeClass("has-success").removeClass("has-error");
  });
  $("#min_price1").focus(function() {
    $("#spanMinPrice").html("");
    $("#formGroupMinPrice").removeClass("has-success").removeClass("has-error");
  });
  $("#max_price1").focus(function() {
    $("#spanMaxPrice").html("");
    $("#formGroupMaxPrice").removeClass("has-success").removeClass("has-error");
  });
  $("#supply_ability1").focus(function() {
    $("#spanSupplyAbility").html("");
    $("#formGroupSupplyAbility").removeClass("has-success").removeClass("has-error");
  });
  $("#period_supply_ability").focus(function() {
    $("#spanPeriodSupplyAbility").html("");
    $("#formGroupPeriodSupplyAbility").removeClass("has-success").removeClass("has-error");
  });
  $("#product_description").focus(function() {
    $("#spanProductDescription").html("");
    $("#formGroupProductDescription").removeClass("has-success").removeClass("has-error");
  });
  $("#pkg_delivery").focus(function() {
    $("#spanPkgDelivery").html("");
    $("#formGroupPkgDelivery").removeClass("has-success").removeClass("has-error");
  });
  $("#status").focus(function() {
    $("#spanStatus").html("");
    $("#formGroupStatus").removeClass("has-success").removeClass("has-error");
  });


  foto_upload.on("addedfile", function(file) {
    if (!file.type.match(/image.*/)) {
      foto_upload.emit("thumbnail", file, "<?php echo base_url('assets/img/pdf.png') ?>");
    }
  });

  // mengupload
  foto_upload.on("sending",function(a,b,c){
    a.token=Math.random();
    var str = String(a.token);
    var res = str.substring(3, 10);
    c.append("token_foto",a.token); //Menmpersiapkan token untuk masing masing foto
  });

  //hapus
  foto_upload.on("removedfile",function(a){
    var token=a.token;
    var str = String(a.token);
    var res = str.substring(3, 10);
    var namafile = $('#'+res).val();
    $('#'+res).remove();
    $.ajax({
      type:"post",
      data:{nama:namafile},
      url:"<?php echo base_url('index.php/Product/remove_product_picture') ?>",
      cache:false,
      dataType: 'json',
      success: function(){
        console.log("Foto terhapus");
      },
      error: function(){
        console.log("Error");

      }
    });
  });
  $.LoadingOverlaySetup({
    color           : "rgba(255, 255, 255, 0.8)" ,
    image           : "<?php echo base_url('assets/image-sistem/loading.gif') ?>",
    maxSize         : "230px",
    minSize         : "230px",
    resizeInterval  : 0,
    size            : "100%"
  });
});
</script>
<script type="text/javascript">
</script>
