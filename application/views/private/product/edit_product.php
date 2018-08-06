
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
        
        //function get_product_sub_category_dropdown() {
        //   $(document).ready(function () { 
        //     get_product_category();
        // });
        $(function(){
        $("#product_category_code").change(function(){

        var code=$(this).val();
        get_product_sub_category(code)
        

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
          <form method="post"  enctype="multipart/form-data" id="Simpan"  action="<?php echo base_url().'Product/update_product'; ?>">
            <div class="form-group">
              <label class="control-label">Product Name</label>
              <input type="text" value="<?php echo $product[0]->Name ?>" name="product_name" id="product_name"  data-validation="length" data-validation-length="min4" data-validation-error-msg="Please fill out category name..."  class="form-control"  placeholder="">
            </div>
            <div class="form-group">
              <label for="">Product Category</label>
              <select class="form-control" name="product_category_code" id="product_category_code">
                <option value='0'>--Choose Product Category--</pilih>
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
              </div>
              <div class="form-group">
                <label for="">Product Sub Category</label>
                <select class="form-control" name="product_sub_category_code" id="product_sub_category_code">
                  <option value='0'>--Choose Product Sub Category--</pilih>
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
              </div>
              <div class="form-group">
                <label for="">Unit</label>
                <input type="text" value="<?php echo $product[0]->Unit ?>" name="unit" class="form-control" value="">
              </div>
              <div class="form-group">
                <label class="control-label">Min Price</label>
                <input type="text" value="<?php echo $product[0]->MinPrice ?>" name="min_price1" id="min_price1" onkeyup="doMathPrice()" data-validation="length" data-validation-length="min1" data-validation-error-msg="Please fill out product price..."  class="form-control input-1"  placeholder="">
                <input type="hidden"  value="<?php echo $product[0]->MinPrice ?>" name="min_price" id="min_price" onkeyup="doMathPrice()" class="form-control"  placeholder="">
              </div>
              <div class="form-group">
                <label class="control-label">Max Price</label>
                <input type="text" value="<?php echo $product[0]->MaxPrice ?>" name="max_price1" id="max_price1" onkeyup="doMathPrice()" data-validation="length" data-validation-length="min1" data-validation-error-msg="Please fill out product price..."  class="form-control input-2"  placeholder="">
                <input type="hidden" value="<?php echo $product[0]->MaxPrice ?>" name="max_price" id="max_price" onkeyup="doMathPrice()" class="form-control"  placeholder="">
              </div>
              <div class="form-group">
                <label class="control-label">Supply Ability</label>
                <input type="text" value="<?php echo $product[0]->SupplyAbility ?>" name="supply_ability1" id="supply_ability1" onkeyup="doMathPrice()" data-validation="length" data-validation-length="min1" data-validation-error-msg="Please fill out supply ability..."  class="form-control input-3"  placeholder="">
                <input type="hidden" value="<?php echo $product[0]->SupplyAbility ?>" name="supply_ability" id="supply_ability" onkeyup="doMathPrice()"   class="form-control"  placeholder="">
              </div>
              <div class="form-group">
                <label for="">Period Supply Ability</label>
                <select class="form-control" name="period_supply_ability">
                  <option value="daily">Daily</option>
                  <option value="weekly">Weekly</option>
                  <option value="monthly">Monthly</option>
                  <option value="yearly">Yearly</option>
                </select>
              </div>
              <div class="form-group">
                <label for="">Product Description</label>
                <textarea class="form-control" rows="5" name="product_description" ><?php echo $product[0]->ProductDescription ?></textarea>
              </div>
              <div class="form-group">
                <label for="">Packaging & Delivery</label>
                <textarea class="form-control" rows="5" name="pkg_delivery" ><?php echo $product[0]->PkgDelivery ?></textarea>
              </div>
              <div class="form-group">
                <label for="">Product Status</label>
                <select class="form-control" name="status">
                  <?php if ($product[0]->IsPublished == 1): ?>
                    <option selected value="1">Published</option>
                    <option value="0">Do not publish</option>
                  <?php else: ?>
                    <option value="1">Published</option>
                    <option selected value="0">Do not publish</option>
                  <?php endif; ?>
                </select>
              </div>
              <div class="co-md-12 "><label class="control-label ">Product Pictures</label></div>
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
                <div class="form-group col-md-12">
                  <!-- <label class="control-label">Product Image</label> -->
                  <div class="dropzone" >
                    <div class="dz-message">
                      <h4> Click or Drop product picture here..<br>Max File Size 1,8 MB</h4>
                    </div>
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
          <input type="text" name="description" id="description"  data-validation="length" data-validation-length="min4" data-validation-error-msg="Please fill out category description..."  class="form-control"  placeholder="">
        </div> -->
        <div class="form-group text-right col-md-12">
          <input type="hidden" name="product_id" value="<?php echo $product[0]->ProductId ?>">
          <button type="submit" value="Validate" class="btn btn-default "><i class='glyphicon glyphicon-ok'></i> Save</button>
        </div>
      </form>
    </div>
  </div>
</div>
</div>


</section>



<script src= "<?php echo base_url('assets/dropzone/js/dropzone.min.js') ?>" ></script>
<script src= "<?php echo base_url('assets/dropzone/js/dropzone-amd-module.min.js') ?>" ></script>
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
  console.log(value);
  $.ajax({
   type:"POST",
   url: "<?php echo base_url('Product/remove_product_picture_edit') ?>",
   data:{product_id_pic:value},
   success: function(respond){
    var divPic = "#div"+value;
    $(divPic).remove();
   }
  })
 });
})
</script>
<script type="text/javascript">
// $(function(){

// $.ajaxSetup({
// type:"POST",
// url: "<?php //echo base_url('index.php/Product/generate_product_sub_category') ?>",
// cache: false,
// });

// $("#product_category_code").change(function(){

// var value=$(this).val();

// $.ajax({
// data:{product_category_code:value},
// success: function(respond){
// $("#product_sub_category_code").html(respond);
// }
// })


// });
// })
// var productCategoryNode = document.getElementById("product_category_code");
// var productSubCategoryNode = document.getElementById("product_sub_category_code");
// console.log(productCategoryNode);
// console.log(productSubCategoryNode);
//   function getProductSubCategory() {
//     var request = new XMLHttpRequest();
//
//     request.open("GET", "<?php //echo base_url()."index.php/Product/get_product_sub_category"; ?>", false);
//     request.send();request.responseText;
//     console.log(request.responseText);
//     // productSubCategoryNode.innerHTML = request.responseText;
//     // request.onreadystatechange = function() {
//     //   if (request.readyState == 4 && request.status == 200) {
//     //     productSubCategoryNode.innerHTML = request.responseText;
//     //   }
//     //  };
//   }
//   productCategoryNode.addEventListener("change",getProductSubCategory);
</script>
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
<script type="text/javascript">
$(document).ready(function(){
  var i = 1;
  Dropzone.autoDiscover = false;
  var accept = ".pdf,.png,.jpg,.JPEG";
  var foto_upload= new Dropzone(".dropzone",{
    url: "<?php echo base_url('index.php/Product/add_product_picture') ?>",
    maxFilesize: 2000,
    method:"post",
    acceptedFiles:accept,
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
});
</script>
