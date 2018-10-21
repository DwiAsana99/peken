<div class="container">
  <h1>Pembelian Necklace Bahla</h1>
  <ol class="breadcrumb">
    <li>
      <a href="<?php echo site_url('Home/home_view/') ?>">Home</a>
    </li>
    <li>
      <a href="<?php echo site_url('Quotation/buyer_quotation_list/') ?>">Quotation List</a>
    </li>
    <li class="active">Quotation Detail</li>
  </ol>
  <div class="row">
    <div class="col-md-7 detail">
      <div class="block cover-container">
        <h2>Request for Quotation Code <b><?php echo $quotation[0]->Code; ?></b></h2>
        <?php foreach($product_pic as $pc){ ?>

        <img src="<?php echo base_url('assets/supplier_upload/').$pc->FileName;?>" alt="">
        <?php } ?>
      </div>
      <br>



      <div class="col-md-3">
      Date
      </div>
      <div class="col-md-9">
        : <?php echo $quotation[0]->SendDate; ?>
      </div>
      <div class="col-md-3">
        Supplier Name
      </div>
      <div class="col-md-9">
        : <?php echo $product[0]->CompanyName; ?>
      </div>
      <div class="col-md-3">
        Product Name
      </div>
      <div class="col-md-9">
        : <?php echo $product[0]->Name; ?>
      </div>
      <div class="col-md-3">
        Qty
      </div>
      <div class="col-md-9">
        : <?php echo $quotation[0]->Qty; ?>
      </div>
      <div class="col-md-3">
        Message
      </div>
      <div class="col-md-9">
        : <?php echo $quotation[0]->Content; ?>
      </div>

    </div>


    <div class="col-md-5">
      <div class="panel panel-default">
        <div class="panel-heading">
          <span class="glyphicon glyphicon-comment"></span> Chat

          <div class="panel-body">
            <ul class="chat">
              <?php foreach ($quotation_detail as $qd): ?>
              <?php if (!empty($qd->ProfileImage)): ?>
              <?php $profile_image = $qd->ProfileImage; ?>
              <?php else: ?>
              <?php $profile_image = "user_without_profile_image.png"; ?>
              <?php endif; ?>
              <?php if ($this->session->userdata('user_id') == $qd->MemberId): ?>
              <li class="right clearfix"><span class="chat-img pull-right">
                  <img src="<?php echo base_url('assets/supplier_upload/').$profile_image; ?>" alt="User Avatar" width="45"
                    class="img-circle" />
                </span>
                <div class="chat-body clearfix">
                  <div class="header">
                    <small class=" text-muted"><span class="glyphicon glyphicon-time"></span>
                      <?php echo $qd->SendDate; ?></small>
                    <strong class="pull-right primary-font">Me</strong>
                  </div>
                  <p class="word-wrap">
                    <?php echo $qd->Message; ?>
                  </p>
                </div>
              </li>
              <?php else: ?>
              <li class="left clearfix"><span class="chat-img pull-left">
                  <img src="<?php echo base_url('assets/supplier_upload/').$profile_image; ?>" width="45" class="img-circle" />
                </span>
                <div class="chat-body clearfix">
                  <div class="header">
                    <strong class="primary-font">
                      <?php echo $qd->CompanyName; ?></strong>
                    <small class="pull-right text-muted"><span class="glyphicon glyphicon-time"></span>
                      <?php echo $qd->SendDate; ?></small>
                  </div>
                  <p class="word-wrap">
                    <?php echo $qd->Message; ?>
                  </p>
                </div>
              </li>
              <?php endif; ?>
              <?php endforeach; ?>
              <div class="badan_chat word-wrap">

              </div>


            </ul>
          </div>
          <div class="panel-footer">
            <!-- <form class="" id="Simpan" action="<?php //echo base_url().'index.php/Quotation/add_quotation_detail'; ?>" method="post" > -->
            <div class="input-group">
              <input type="hidden" name="member_id" value="<?php echo $this->session->userdata('user_id'); ?>">
              <input type="hidden" name="quotation_code" value="<?php echo $quotation[0]->Code; ?>">
              <input id="txt_message" onkeypress="return runScript(event)" type="text" name="message" class="form-control input-sm "
                placeholder="Type your message here..." />
              <span class="input-group-btn">
                <a type="submit" id="addPesan" class="btn btn-warning btn-sm" id="btn-chat">
                  Send</a>
              </span>

            </div>
            <!-- </form> -->
          </div>
        </div>

      </div>
      <?php if ($quotation[0]->IsAccepted == 0 OR $quotation[0]->IsAccepted == 1): ?>
        <?php if ($quotation[0]->IsAccepted == 1): ?>
          <div class="col-md-12 text-center">
            <p style="font-size: large;">You Accept Supplier Quotation</p>
          </div>
        <?php else: ?>
          <div class="col-md-12 text-center">
            <p style="font-size: large;">You Reject Supplier Quotation</p>
          </div>
        <?php endif; ?>
      <?php else: ?>
        <div class="col-md-12 text-center">
          <p style="font-size: large;">Accept or Reject Quotation</p>
        </div>
        <div class="col-md-6 text-right">
          <form id="form_accept" action="<?php echo base_url().'Quotation/update_quotation_status'; ?>" method="post">
            <input type="hidden" name="quotation_code" value="<?php echo $quotation[0]->Code; ?>">
            <input type="hidden" name="status" value="1">
            <button id="btn_accept" type="submit" class="btn btn-success">Accept</button>
          </form>
        </div>
        <div class="col-md-6 text-left">
          <form id="form_reject" action="<?php echo base_url().'Quotation/update_quotation_status'; ?>" method="post">
            <input type="hidden" name="quotation_code" value="<?php echo $quotation[0]->Code; ?>">
            <input type="hidden" name="status" value="0">
            <button id="btn_reject" type="submit" class="btn btn-danger">Reject</button>
          </form>
        </div>
      <?php endif; ?>


    </div>

  </div>
</div>
<script type="text/javascript">
  $("#btn_reject").click(function (event) {

      event.preventDefault();
      $.confirm({
        title: 'Confirmation',
        content: 'Are You Sure to Reject Supplier Quotation?',
        type: 'red',
        buttons: {
          Reject: function () {
            $.LoadingOverlay("show");
          setTimeout( function () {
            $("#form_reject").submit();
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
  $("#btn_accept").click(function (event) {

      event.preventDefault();
      $.confirm({
        title: 'Confirmation',
        content: 'Are You Sure to Accept Supplier Quotation?',
        type: 'green',
        buttons: {
          Accept: function () {
            $.LoadingOverlay("show");
            setTimeout( function () {
              $("#form_accept").submit();
            }, 2000);
          },
          Cancel: function () {

            $.alert('Data not saved...');
          },
        }
      });


  });
</script>
<script>
  // $(document).ready(function () {
  //   var a = $(".chat-room")[0].scrollHeight;
  //   $(".chat-room").delay(800).animate({
  //     scrollTop: a
  //   }, 500);
  // });
</script>
<script type="text/javascript">
  function runScript(e) {
    if (e.keyCode == 13) {
      // alert("test");
      e.preventDefault();
      var data = {
        'quotation_code': $('input[name=quotation_code]').val(),
        'member_id': $('input[name=member_id]').val(),
        'message': $('input[name=message]').val()
      };
      // lakukan proses ajax
      $.ajax({
        type: 'POST',
        dataType: 'html',
        url: "<?php echo base_url().'Quotation/add_quotation_detail'; ?>",
        cache: false,
        data: data,
        success: function (response) {

          $(".badan_chat").append(response);
          $("#txt_message").val("");

        }

      });

      return false;
    }
  }
</script>
<script type="text/javascript">
  function reload_chat() {
    var data = {
      'quotation_code': $('input[name=quotation_code]').val()
    };
    $.ajax({
      type: 'POST',
      dataType: 'html',
      url: "<?php echo base_url().'Quotation/get_quotation_detail_chat'; ?>",
      cache: false,
      data: data,
      success: function (response) {
        $(".badan_chat").append(response);
      }
    });
  }
</script>
<script type="text/javascript">
  $(document).ready(function () {
    // alert('tes');
    reload_chat();
    setInterval(
      reload_chat, 1000
    );
    $("#addPesan").click(function (e) {
      //  alert("test");
      // var url = $('#Simpan').attr('action');
      // ambil inputannya
      e.preventDefault();
      var data = {
        'quotation_code': $('input[name=quotation_code]').val(),
        'member_id': $('input[name=member_id]').val(),
        'message': $('input[name=message]').val()
      };
      // lakukan proses ajax
      $.ajax({
        type: 'POST',
        dataType: 'html',
        url: "<?php echo base_url().'Quotation/add_quotation_detail'; ?>",
        cache: false,
        data: data,
        success: function (response) {

          $(".badan_chat").append(response);
          $("#txt_message").val("");

        }

      });
    });
  });
</script>
<?php if($this->session->flashdata('msg')): ?>
  <script type="text/javascript">
  $(function(){
    new PNotify({
      title: 'Success!',
      text: ' <?php echo $this->session->flashdata('msg'); ?>',
      delay: 5000,
      type: 'success'
    });
  });
  </script>
<?php endif; ?>
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
