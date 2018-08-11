<?php
$this->load->view('template/back/head_back');
$this->load->view('template/back/sidebar_back');
?>


<section class="content">
    <div class="row">
        <div class="col-md-12">
             <div class="box box-info">
                <div class="box-header">
                  <h3 class="box-title">Suplier Profile</h3>
                </div>
                <?php //echo $error;?>
                <div class="box-body">

                    <form method="post" id="Simpan"  action="<?php echo base_url().'index.php/Suplier/edit_supplier_account'; ?>" enctype="multipart/form-data"  onfocusout="edit(event)">
                    <!-- <div class="form-group text-center">
                      <label  for="profile_image">Profil Image</label> <br>
                      <img src="<?php //echo base_url().'assets/suplier_upload/'.$user[0]->Gambar; ?>" id = "fotoview" alt="" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"><br>
                      <a href="#" data-target="#myModal" data-toggle='modal' class="btn btn-default text-center">Change</a>
                    </div> -->

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
                    </form>

                    <form action="<?php echo base_url().'index.php/Suplier/suplier_upload_siup'; ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group col-lg-6 text-center">
                            <label class="control-label">Trade Business License</label><br>
                             <!-- <img src="<?php //echo base_url().'assets/icon/upload-icon.png'?>" alt="" style="width: 100px"> -->
                             <div class="form-group text-center">
                                 <label for="siup" class="btn">
                               <img src="<?php if (empty($user[0]->Siup)) {
                                   echo base_url().'assets/icon/upload-icon.png';
                               }else{
                                   echo base_url().'assets/suplier_upload/'.$user[0]->Siup;
                               }?>" id = "fotoview" alt="" class="img-thumbnail" alt="Cinque Terre" width="300" ></label><br>
                             </div>

                             <div class="form-group">
                                 <input type="file" name="siup" value="" id="siup"  size='20' onchange="readURL(this);"  data-validation="mime size required"
                                 data-validation-allowing="jpg, png"
                                 data-validation-max-size="300kb"
                                 data-validation-error-msg-required="Gambar Belum Dipilih..." style="visibility:hidden;">
                             </div>
                             <!--  -->
                             <input type="hidden" name="siup_lama" id="siup_lama" value="<?php echo $user[0]->Siup; ?>">
                             <button type="submit" id="tambah_siup"> Upload</button>
                    </div>
                    </form>
                    <form action="<?php echo base_url().'index.php/Suplier/suplier_upload_tdp'; ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group col-lg-6 text-center">
                      <label class="control-label">Company Registration Certificate</label><br>

                      <div class="form-group text-center">
                          <label for="tdp" class="btn">
                        <img src="<?php if (empty($user[0]->Tdp)) {
                            echo base_url().'assets/icon/upload-icon.png';
                        }else{
                            echo base_url().'assets/suplier_upload/'.$user[0]->Tdp;
                        }?>" id = "fotoedit" alt="" class="img-thumbnail" alt="Cinque Terre" width="300" ></label><br>
                      </div>

                      <div class="form-group">
                          <input type="file" name="tdp" value="" id="tdp"  size='20' onchange="readUrlTdp(this);"  data-validation="mime size required"
                          data-validation-allowing="jpg, png"
                          data-validation-max-size="300kb"
                          data-validation-error-msg-required="Gambar Belum Dipilih..." style="visibility:hidden;">
                      </div>
                      <!--  -->
                      <input type="hidden" name="tdp_lama" id="tdp_lama" value="<?php echo $user[0]->Tdp; ?>">
                      <button type="submit" id="tambah_tdp"> Upload</button>
</div>
                      </form>




               </div>
         </div>
    </div>



</section>

<?php $this->load->view('template/back/foot_back'); ?>
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
</script>

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
