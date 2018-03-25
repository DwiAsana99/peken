<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/dropzone/css/dropzone.min.css') ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/dropzone/css/basic.min.css') ?>" />
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">Suplier Profile</h3>
                </div>
                <?php //echo $error;?>
                <div class="box-body">

                    <form method="post" id="Simpan"  action="<?php echo base_url().'index.php/Supplier/edit_supplier_account'; ?>" enctype="multipart/form-data"  onfocusout="edit(event)">
                        <!-- <div class="form-group text-center">
                        <label  for="profil_image">Profil Image</label> <br>
                        <img src="<?php //echo base_url().'assets/suplier_upload/'.$user[0]->Gambar; ?>" id = "fotoview" alt="" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"><br>
                        <a href="#" data-target="#myModal" data-toggle='modal' class="btn btn-default text-center">Change</a>
                    </div> -->
                    <div class="form-group col-md-12 text-center">
                        <label class="control-label">Profile Image</label><br>

                        <div class="form-group text-center">
                            <label for="profil_image" class="btn">
                                <img src="<?php if (empty($user[0]->ProfilImage)) {
                                    echo base_url().'assets/icon/upload-icon.png';
                                }else{
                                    echo base_url().'assets/supplier_upload/'.$user[0]->ProfilImage;
                                }?>" id = "fotoprofile" alt="" class="img-thumbnail" alt="Cinque Terre" width="175" height="175" ></label><br>
                            </div>

                            <?php if (empty($user[0]->ProfilImage)): ?>
                                <div class="form-group">
                                    <input type="file" name="profil_image" value="" id="profil_image"  size='20' onchange="readUrlProfilImage(this);"  data-validation="mime size required"
                                    data-validation-allowing="jpg, png"
                                    data-validation-max-size="300kb"
                                    data-validation-error-msg-required="Gambar Belum Dipilih..." style="visibility:hidden;">

                                </div>
                            <?php else: ?>
                                <div class="form-group">
                                    <input type="file" name="profil_image" value="" id="profil_image"  size='20' onchange="readUrlProfilImage(this);"  data-validation="mime size required"
                                    data-validation-allowing="jpg, png"
                                    data-validation-max-size="300kb"
                                    data-validation-error-msg-required="Gambar Belum Dipilih..." style="visibility:hidden;">
                                    <input type="hidden" name="profil_image_lama" id="profil_image_lama" value="<?php echo $user[0]->ProfilImage; ?>">
                                    <!-- <button type="submit" class="btn btn-danger" id="tambah_tdp">Delete</button> -->
                                </div>
                            <?php endif; ?>
                            <!--  -->

                        </div>
                    <div class="form-group col-lg-6">
                        <label class="control-label">First Name</label>
                        <input type="text" name="first_name" id="category" value="<?php echo $user[0]->FirstName; ?>" data-validation="length" data-validation-length="min4" data-validation-error-msg="Please fill out category name..."  class="form-control "  placeholder="">
                    </div>
                    <div class="form-group col-lg-6">
                        <label class="control-label">Last Name</label>
                        <input type="text" name="last_name" id="description" value="<?php echo $user[0]->LastName; ?>" data-validation="length" data-validation-length="min4" data-validation-error-msg="Please fill out category description..."  class="form-control"  placeholder="">
                    </div>
                    <div class="form-group col-lg-12">
                        <label class="control-label">Company Name</label>
                        <input type="text" name="company_name" id="description" value="<?php echo $user[0]->CompanyName; ?>" data-validation="length" data-validation-length="min4" data-validation-error-msg="Please fill out category description..."  class="form-control"  placeholder="">
                    </div>
                    <div class="form-group col-lg-12">
                        <label class="control-label">Company Address</label>
                        <input type="text" name="company_address" id="" value="<?php echo $user[0]->CompanyAddress; ?>" data-validation="length" data-validation-length="min4" data-validation-error-msg="Please fill out category description..."  class="form-control"  placeholder="">
                    </div>
                    <div class="form-group col-lg-12">
                        <label class="control-label">City</label>
                        <input type="text" name="city" id="description" value="<?php echo $user[0]->City; ?>" data-validation="length" data-validation-length="min4" data-validation-error-msg="Please fill out category description..."  class="form-control"  placeholder="">
                    </div>
                    <div class="form-group col-lg-12">
                        <label class="control-label">Zip Code</label>
                        <input type="text" name="zip_code" id="description" value="<?php echo $user[0]->ZipCode; ?>" data-validation="length" data-validation-length="min4" data-validation-error-msg="Please fill out category description..."  class="form-control"  placeholder="">
                    </div>
                    <div class="form-group col-lg-12">
                        <label class="control-label">Location</label>
                        <select name="location" data-validation-error-msg="Please fill out category description..."  class="form-control">
                            <option value="indonesia">Indonesia</option>
                        </select>
                    </div>
                    <div class="form-group col-lg-12">
                        <label class="control-label">Taxpayer Registration Number</label>
                        <input type="text" name="npwp" id="description" value="<?php echo $user[0]->Npwp; ?>" data-validation="length" data-validation-length="min4" data-validation-error-msg="Please fill out category description..."  class="form-control"  placeholder="">
                    </div>
                    <div class="form-group col-lg-12">
                        <label class="control-label">Phone Number</label>
                        <input type="text" name="phone" id="phone" value="<?php echo $user[0]->Phone; ?>" data-validation="length" data-validation-length="min4" data-validation-error-msg="Please fill out category description..."  class="form-control"  placeholder="">
                    </div>
                    <div class="form-group col-lg-12">
                        <label class="control-label">Company Description</label>
                        <textarea name="company_description" rows="6" class="form-control"><?php echo $user[0]->CompanyDescription; ?></textarea>
                    </div>

                    <div class="form-group col-lg-6 text-center">
                        <label class="control-label">Trade Business License</label><br>
                        <!-- <img src="<?php //echo base_url().'assets/icon/upload-icon.png'?>" alt="" style="width: 100px"> -->
                        <div class="form-group text-center">
                            <label for="siup" class="btn">
                                <img src="<?php if (empty($user[0]->Siup)) {
                                    echo base_url().'assets/icon/upload-icon.png';
                                }else{
                                    echo base_url().'assets/supplier_upload/'.$user[0]->Siup;
                                }?>" id = "fotoview" alt="" class="img-thumbnail" alt="Cinque Terre" width="175" height="175" >
                            </label>
                        </div>
                            <?php if (empty($user[0]->Siup)): ?>
                                <div class="form-group">
                                    <input type="file" name="siup" value="" id="siup"  size='20' onchange="readURL(this);"  data-validation="mime size required"
                                    data-validation-allowing="jpg, png"
                                    data-validation-max-size="300kb"
                                    data-validation-error-msg-required="Gambar Belum Dipilih..." style="visibility:hidden;">
                                </div>
                            <?php else: ?>
                                <div class="form-group">
                                    <input type="file" name="siup" value="" id="siup"  size='20' onchange="readURL(this);"  data-validation="mime size required"
                                    data-validation-allowing="jpg, png"
                                    data-validation-max-size="300kb"
                                    data-validation-error-msg-required="Gambar Belum Dipilih..." style="visibility:hidden;">
                                    <input type="hidden" name="siup_lama" id="siup_lama" value="<?php echo $user[0]->Siup; ?>">
                                    <!-- <button type="submit" class="btn btn-danger" id="tambah_siup">Delete</button> -->
                                </div>
                            <?php endif; ?>

                            <!--  -->

                        </div>

                        <div class="form-group col-lg-6 text-center">
                            <label class="control-label">Company Registration Certificate</label><br>

                            <div class="form-group text-center">
                                <label for="tdp" class="btn">
                                    <img src="<?php if (empty($user[0]->Tdp)) {
                                        echo base_url().'assets/icon/upload-icon.png';
                                    }else{
                                        echo base_url().'assets/supplier_upload/'.$user[0]->Tdp;
                                    }?>" id = "fotoedit" alt="" class="img-thumbnail" alt="Cinque Terre" width="175" height="175" ></label><br>
                                </div>

                                <?php if (empty($user[0]->Tdp)): ?>
                                    <div class="form-group">
                                        <input type="file" name="tdp" value="" id="tdp"  size='20' onchange="readUrlTdp(this);"  data-validation="mime size required"
                                        data-validation-allowing="jpg, png"
                                        data-validation-max-size="300kb"
                                        data-validation-error-msg-required="Gambar Belum Dipilih..." style="visibility:hidden;">

                                    </div>
                                <?php else: ?>
                                    <div class="form-group">
                                        <input type="file" name="tdp" value="" id="tdp"  size='20' onchange="readUrlTdp(this);"  data-validation="mime size required"
                                        data-validation-allowing="jpg, png"
                                        data-validation-max-size="300kb"
                                        data-validation-error-msg-required="Gambar Belum Dipilih..." style="visibility:hidden;">
                                        <input type="hidden" name="tdp_lama" id="tdp_lama" value="<?php echo $user[0]->Tdp; ?>">
                                        <!-- <button type="submit" class="btn btn-danger" id="tambah_tdp">Delete</button> -->
                                    </div>
                                <?php endif; ?>
                                <!--  -->

                            </div>
                            <div class="form-group">
                              <label class="control-label"></label>
                              <div class="dropzone">
                                <div class="dz-message">
                                  <h4> Click or Drop gallery picture here..<br>Max File Size 1,8 MB</h4>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                              <label class="control-label">Company Gallery</label>
                              </div>
                              <?php foreach ($user as $us): ?>
                                
                                <div id="<?php echo "div".$us->IdGalleryPic; ?>" class="form-group col-lg-2 text-center">
                                  <!-- <img src="<?php //echo base_url().'assets/icon/upload-icon.png'?>" alt="" style="width: 100px"> -->
                                  <div class="form-group text-center">

                                    <img src="<?php if (empty($us->GalleryPicFileName)) {
                                      echo base_url().'assets/icon/upload-icon.png';
                                    }else{
                                      echo base_url().'assets/supplier_upload/'.$us->GalleryPicFileName;
                                    }?>"  alt="" class="img-thumbnail" alt="Cinque Terre" width="200" >
                                  </div>
                                  <!--  -->
                                  <!-- <input type="hidden" name="id_product_pic" id="id_product_pic" value="<?php //echo $p->IdProductPic; ?>"> -->

                                  <button type="button" class="btn btn-danger" id="delete_pic" value="<?php echo $us->IdGalleryPic; ?>">Delete</button>
                                </div>

                              <?php endforeach; ?>

                            </div>
                            <button type="submit" class="btn btn-primary col-md-12" name="button">Save</button>
                        </form>




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
           url: "<?php echo base_url('index.php/Supplier/remove_supplier_gallery_pic_button') ?>",
           data:{id_gallery_pic:value},
           success: function(respond){
            var divPic = "#div"+value;
            $(divPic).remove();
           }
          })
         });
        })
        </script>
        <script type="text/javascript">
        function readUrlTdp(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#fotoedit')
                    .attr('src', e.target.result)
                    .width(300)
                    ;
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
        </script>
        <script type="text/javascript">
        function readUrlProfilImage(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#fotoprofile')
                    .attr('src', e.target.result)
                    .width(300)
                    ;
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
        </script>
        <!-- <script type="text/javascript">
        function edit(e){
        e.preventDefault();
        // ambil url pada atribute form action
        var url = $('#Simpan').attr('action');
        // ambil inputannya
        var data = {
        'first_name'              : $('input[name=first_name]').val(),
        'last_name'              : $('input[name=last_name]').val(),
        'company_name'             : $('input[name=company_name]').val(),
        'company_address'    : $('input[name=company_address]').val(),
        'city'          : $('input[name=city]').val(),
        'zip_code'    : $('input[name=zip_code]').val(),
        'location'           : $('textarea[name=location]:checked').val(),
        'npwp'           : $('input[name=npwp]').val()
    };
    // lakukan proses ajax
    $.ajax({
    type        : 'POST',
    url         : url,
    data        :  data,
    success: function(response) {
    $('#Simpan').find('input').val();
}

});

return false;
}
</script> -->

<script>
$(document).on('click','#tambah_siup',function(e){
    e.preventDefault();
    var file_data = $('#siup').prop('files')[0];
    var form_data = new FormData();

    form_data.append('siup', file_data);
    $.ajax({
        url: '<?php echo base_url().'index.php/Suplier/suplier_upload_siup'; ?>', // point to server-side PHP script
        dataType: 'json',  // what to expect back from the PHP script, if anything
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        type: 'post',
        success: function(data,status){
            alert(php_script_response); // display response from the PHP script, if any
            if (data.status!='error') {
                $('#siup').val('');
                alert(data.msg);
            }else{
                alert(data.msg);
            }
        }
    });
})
</script>

<script>
$(document).on('click','#tambah_tdp',function(e){
    e.preventDefault();
    var file_data = $('#tdp').prop('files')[0];
    var form_data = new FormData();

    form_data.append('tdp', file_data);
    $.ajax({
        url: '<?php echo base_url().'index.php/Suplier/suplier_upload_tdp'; ?>', // point to server-side PHP script
        dataType: 'json',  // what to expect back from the PHP script, if anything
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        type: 'post',
        success: function(data,status){
            alert(php_script_response); // display response from the PHP script, if any
            if (data.status!='error') {
                $('#tdp').val('');
                alert(data.msg);
            }else{
                alert(data.msg);
            }
        }
    });
})
</script>
<script type="text/javascript">
$(document).ready(function(){
  var i = 1;
  Dropzone.autoDiscover = false;
  autoProcessQueue: false;
  var accept = ".png,.jpg,.JPEG";
  var foto_upload= new Dropzone(".dropzone",{
    url: "<?php echo base_url('index.php/Supplier/add_supplier_gallery_pic') ?>",
    maxFilesize: 2000,
    method:"post",
    acceptedFiles:accept,
    paramName:"userfiles",
    maxFiles: 5,
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
      url:"<?php echo base_url('index.php/Supplier/remove_supplier_gallery_pic') ?>",
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
