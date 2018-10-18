
<section class="content">
  <!-- <div class="text-center">
  <?php //$supplier_id = $this->session->userdata('user_id'); ?>
  <a href="<?php //echo site_url('supplier/public_supplier_detail_view?supplier_id=').$supplier_id ?>" class="text-center btn btn-info">
  <span class="glyphicon glyphicon-eye-open"></span> Preview Mini Site</a>
</div> -->

<div class="row">
  <div class="col-md-12">
    <div class="box box-info">
      <div class="box-header">
        <h2 class="box-title">Supplier Verification</h2>
      </div>

      <?php //echo $error;?>
      <div class="box-body">

        <!-- <a href="">                                                </a> -->









        <div class="row">
          <div class="col-sm-4">
            <!--left col-->


            <div class="text-center">
              <p>
                <img src="<?php if (empty($user[0]->ProfileImage)) {
                  echo base_url().'assets/icon/upload-icon.png';
                }else{
                  echo base_url().'assets/supplier_upload/'.$user[0]->ProfileImage;
                }?>" alt="" class="img-thumbnail image img-circle" alt="Cinque Terre" width="175" height="175">
              </p>
              <?php if ($user[0]->IsVerifiedSupplier == 1): ?>
                <p><img src="<?php echo base_url().'assets/supplier_upload/'.'verified.png' ?>" alt="" width="25"></p>
                <p style="font-style: oblique;font-weight: bold; margin-top: -12px; margin-bottom: 3px;">Verified Supplier</p>
              <?php else: ?>
                <p><img src="<?php echo base_url().'assets/supplier_upload/'.'unverified.png' ?>" alt="" width="25"></p>
                <p style="font-style: oblique;font-weight: bold; margin-top: -12px; margin-bottom: 3px;">Unverified Supplier</p>
              <?php endif; ?>


              <p>

                <a href="<?php echo site_url('User/supplier_mini_site_view?')."supplier_id=".$user[0]->Id ?>" class="text-center ">
                  <span class="glyphicon glyphicon-eye-open"></span> Preview Mini Site</a>
                </p>
                <div class="col-md-12">
                  <form class="" action="<?php echo base_url().'User/verify_supplier'; ?>" id="Verify" method="post">
                  <input type="hidden" name="user_id" value="<?php echo $user[0]->Id; ?>">
                  <div class="input-group">
                      <select class="form-control" name="is_verified_supplier">
                        <?php if ($user[0]->IsVerifiedSupplier == 1): ?>
                          <option value="0" >Unverify</option>
                          <option value="1" selected>Verify</option>
                        <?php else: ?>
                          <option value="0" selected>Unverify</option>
                          <option value="1" >Verify</option>
                        <?php endif; ?>
                      </select>
                      <span class="input-group-btn">
                        <button class="btn btn-success" id="btnVerify" type="submit">Save</button>
                      </span>
                  </div><!-- /input-group -->
                </form>
                </div>
                <br>
              </div>
            </hr>
            <br>


            <div class="panel panel-default">
              <div class="panel-heading">
                Company Profile
              </div>
              <div class="panel-body" style="display:block;height: unset;">
                <h5>
                  <b>First Name</b>
                </h5>
                <p>
                  <?php echo $user[0]->FirstName; ?>
                </p>
                <h5>
                  <b>Last Name</b>
                </h5>
                <p>
                  <?php echo $user[0]->LastName; ?>
                </p>
                <h5>
                  <b>Company Name</b>
                </h5>
                <p>
                  <?php echo $user[0]->CompanyName; ?>
                </p>
                <h5>
                  <b>Zip Code</b>
                </h5>
                <p>
                  <?php echo $user[0]->ZipCode; ?>
                </p>
                <h5>
                  <b>Company Address</b>
                </h5>
                <p>
                  <?php echo $user[0]->Address; ?>
                </p>
                <h5>
                  <b>City</b>
                </h5>
                <p>
                  <?php echo $user[0]->City; ?>
                </p>
                <h5>
                  <b>Province</b>
                </h5>
                <p>
                  <?php echo $user[0]->Province; ?>
                </p>
                <h5>
                  <b>State</b>
                </h5>
                <p>
                  <?php echo $user[0]->State; ?>
                </p>

                <h5>
                  <b>Phone Number</b>
                </h5>
                <p>
                  <?php echo $user[0]->Phone; ?>
                </p>
                <h5>
                  <b>Company Description</b>
                </h5>
                <p>
                  <?php echo $user[0]->CompanyDescription; ?>
                </p>
              </div>
            </div>

          </div>
          <!--/col-3-->
          <div class="col-sm-8">
            <ul class="nav nav-tabs">
              <li class="active">
                <a data-toggle="tab" href="#messages">Certificate & License</a>
              </li>
              <li>
                <a data-toggle="tab" href="#settings">Company Gallery</a>
              </li>
            </ul>


            <div class="tab-content">
              <h1></h1>
              <!--/tab-pane-->
              <div class="tab-pane active" id="messages">

                <form class="form" action="<?php echo base_url().'User/update_certificate_license'; ?>" enctype="multipart/form-data" method="post">
                  <div class="form-group col-lg-12 text-center">

                    <p  style="font-size: x-large;">Taxpayer Registration Number</p>
                    <p style="font-size: x-large;font-style: oblique;font-weight: bold;"><?php echo $user[0]->Npwp; ?></p>
                  </div>
                  <div class="form-group col-lg-6 text-center">
                    <label class="control-label">Trade Business License</label>
                    <br>
                    <!-- <img src="<?php //echo base_url().'assets/icon/upload-icon.png'?>" alt="" style="width: 100px"> -->
                    <div class="form-group text-center">
                      <!-- <label for="siup" class="btn"> -->
                      <img src="<?php if (empty($user[0]->Siup)) {
                        echo base_url().'assets/icon/upload-icon.png';
                      }else{
                        echo base_url().'assets/supplier_upload/'.$user[0]->Siup;
                      }?>" id="fotoview" alt="" class="img-thumbnail" alt="Cinque Terre" width="175" height="175">
                      <!-- </label> -->

                      <!-- _________________dropdown______________ -->
                      <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <span class="glyphicon glyphicon-camera"></span> <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1" style="margin-left: 50%; margin-right: 50%;">




                          <?php if (!empty($user[0]->Siup)): ?>
                            <li>
                              <a href="#" data-toggle="modal" data-target="#lightbox">
                                <img src="<?php echo base_url().'assets/supplier_upload/'.$user[0]->Siup;?>" style="display: none;" alt="">
                                View Profile Image
                              </a>
                            </li>
                          <?php endif; ?>

                        </ul>
                      </div>
                      <!-- _________________dropdown______________ -->
                    </div>


                    <!--  -->

                  </div>

                  <div class="form-group col-lg-6 text-center">
                    <label class="control-label">Company Registration Certificate</label>
                    <br>

                    <div class="form-group text-center">
                      <!-- <label for="tdp" class="btn"> -->
                      <img src="<?php if (empty($user[0]->Tdp)) {
                        echo base_url().'assets/icon/upload-icon.png';
                      }else{
                        echo base_url().'assets/supplier_upload/'.$user[0]->Tdp;
                      }?>" id="fotoedit" alt="" class="img-thumbnail" alt="Cinque Terre" width="175" height="175">
                      <!-- </label> -->
                      <!-- _________________dropdown______________ -->
                      <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <span class="glyphicon glyphicon-camera"></span> <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1" style="margin-left: 50%; margin-right: 50%;">

                          <?php if (!empty($user[0]->Tdp)): ?>
                            <li>
                              <a href="#" data-toggle="modal" data-target="#lightbox">
                                <img src="<?php echo base_url().'assets/supplier_upload/'.$user[0]->Tdp;?>" style="display: none;" alt="">
                                View Profile Image
                              </a>
                            </li>
                          <?php endif; ?>

                        </ul>
                      </div>
                      <!-- _________________dropdown______________ -->
                      <br>
                    </div>


                  </div>

                </form>

              </div>
              <!--/tab-pane-->
              <div class="tab-pane" id="settings">
                <h1></h1>
                <form class="form" action="<?php echo base_url().'User/update_supplier_gallery'; ?>" enctype="multipart/form-data" method="post" id="">

                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="control-label">Company Gallery</label>
                    </div>
                    <?php foreach ($supplier_gallery_pic as $sgp): ?>

                      <div id="<?php echo "div".$sgp->Id; ?>" class="form-group col-lg-3 text-center">
                        <!-- <img src="<?php //echo base_url().'assets/icon/upload-icon.png'?>" alt="" style="width: 100px"> -->
                        <div class="form-group text-center">

                          <img src="<?php if (empty($sgp->FileName)) {
                            echo base_url().'assets/icon/upload-icon.png';
                          }else{
                            echo base_url().'assets/supplier_upload/'.$sgp->FileName;
                          }?>" alt="" class="img-thumbnail" alt="Cinque Terre" height="300">
                          <div class="dropdown">
                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span class="glyphicon glyphicon-camera"></span> <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1" style="margin-right: 50%;">
                              <li>
                                <a href="#" data-toggle="modal" data-target="#lightbox">
                                  <img src="<?php echo base_url().'assets/supplier_upload/'.$sgp->FileName;?>" style="display: none;" alt="">
                                  View Profile Image
                                </a>
                              </li>

                            </ul>
                          </div>
                        </div>
                      </div>

                    <?php endforeach; ?>

                  </div>

                </form>
              </div>

            </div>
            <!--/tab-pane-->
          </div>
          <!--/tab-content-->

        </div>
        <!--/col-9-->
        <script type="text/javascript">
        $("#Verify").submit(function() {
          var category = $('#category').val();
          var description = $('#description').val();
          if (category == ''|| description==''){
            File_Kosong(); return false;
          }else{
            event.preventDefault();
            $.confirm({
              title: 'Confirmation',
              content: 'Are You Sure to Save?',
              type: 'green',
              buttons: {
                Save: function () {
                  $.LoadingOverlay("show");
                  $("#Verify").submit();
                },
                Cancel: function () {

                  $.alert('Data not saved...');
                },
              }
            });
          }

        });
        </script>
        <script>
        $(document).ready(function() {
          var $lightbox = $('#lightbox');

          $('[data-target="#lightbox"]').on('click', function(event) {
            var $img = $(this).find('img'),
            src = $img.attr('src'),
            alt = $img.attr('alt'),
            css = {
              'maxWidth': $(window).width() - 100,
              'maxHeight': $(window).height() - 100
            };

            $lightbox.find('.close').addClass('hidden');
            $lightbox.find('img').attr('src', src);
            $lightbox.find('img').attr('alt', alt);
            $lightbox.find('img').css(css);
          });

          $lightbox.on('shown.bs.modal', function (e) {
            var $img = $lightbox.find('img');

            $lightbox.find('.modal-dialog').css({'width': $img.width()});
            $lightbox.find('.close').removeClass('hidden');
          });
        });
        </script>
        <style>
        #lightbox .modal-content {
          display: inline-block;
          text-align: center;
        }

        #lightbox .close {
          opacity: 1;
          color: rgb(255, 255, 255);
          background-color: rgb(25, 25, 25);
          padding: 5px 8px;
          border-radius: 30px;
          border: 2px solid rgb(255, 255, 255);
          position: absolute;
          top: -15px;
          right: -55px;

          z-index:1032;
        }
        </style>
        <!-- ______________________lightbox_____________ -->
        <div id="lightbox" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog ">
            <button type="button" class="close hidden" data-dismiss="modal" aria-hidden="true">×</button>
            <div class="modal-content">
              <div class="modal-body">
                <img src="" alt="" />
              </div>
            </div>
          </div>
        </div>
        <!-- ______________________lightbox_____________ -->



      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  $("#btnVerify").click(function (event) {

      event.preventDefault();
      $.confirm({
        title: 'Confirmation',
        content: 'Are You Sure to verify?',
        type: 'green',
        buttons: {
          Save: function () {
            $.LoadingOverlay("show");
            setTimeout( function () {
              $("#Verify").submit();
            }, 2000);
          },
          Cancel: function () {
            $.alert('Data not saved...');
          },
        }
      });


  });
</script>
<script type="text/javascript">
$(document).ready(function(){
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
