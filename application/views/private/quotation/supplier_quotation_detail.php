<style media="screen">
  .chat
  {
    list-style: none;
    margin: 0;
    padding: 0;
  }

  .chat li
  {
    margin-bottom: 10px;
    padding-bottom: 5px;
    border-bottom: 1px dotted #B3A9A9;
  }

  .chat li.left .chat-body
  {
    margin-left: 60px;
  }

  .chat li.right .chat-body
  {
    margin-right: 60px;
  }


  .chat li .chat-body p
  {
    margin: 0;
    color: #777777;
  }

  .panel .slidedown .glyphicon, .chat .glyphicon
  {
    margin-right: 5px;
  }

  .panel-body
  {
    overflow: auto;
    display: flex;
    flex-direction: column-reverse;
    /*=========Membuat  scroll mulai dari bawah===============*/
    height: 300px;
  }

  ::-webkit-scrollbar-track
  {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
    background-color: #F5F5F5;
  }

  ::-webkit-scrollbar
  {
    width: 12px;
    background-color: #F5F5F5;
  }

  ::-webkit-scrollbar-thumb
  {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
    background-color: #555;
  }

</style>
<section class="content-header">
  <div class="btn-group btn-breadcrumb">
    <a href="#" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-home"></i></a>
    <a href="<?php echo base_url('Quotation/supplier_quotation_list');?>" class="btn btn-default  btn-xs">Quotation List</a>
    <a  class="btn btn-default  btn-xs active">Quotation Detail</a>
  </div>
</section>
<section class="content">
  <div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Quotatio Detail</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <div class="col-md-6">
          <p><?php echo $product[0]->CompanyName; ?></p>
          <p><?php echo $quotation[0]->SendDate; ?></p>
          <p><?php echo $quotation[0]->Subject; ?></p>
          <p><?php echo $quotation[0]->Content; ?></p>
        </div>


        <!-- <div class="">
          <p id="hasil"></p> -->
          <div class="col-md-6">
            <div class="panel panel-default">
              <div class="panel-heading">
                <span class="glyphicon glyphicon-comment"></span> Chat

                <div class="panel-body" >
                  <ul class="chat" >
                    <?php foreach ($quotation_detail as $qd): ?>
                      <?php if (!empty($qd->ProfileImage)): ?>
                        <?php $profile_image = $qd->ProfileImage; ?>
                      <?php else: ?>
                        <?php $profile_image = "user_without_profile_image.png"; ?>
                      <?php endif; ?>
                      <?php if ($this->session->userdata('user_id') == $qd->MemberId): ?>
                        <li class="right clearfix"><span class="chat-img pull-right">
                          <img src="<?php echo base_url('assets/supplier_upload/').$profile_image; ?>" alt="User Avatar" width="45" class="img-circle" />
                        </span>
                        <div class="chat-body clearfix">
                          <div class="header">
                            <!-- <strong class="pull-right primary-font">ME</strong> -->
                            <small class=" text-muted"><span class="glyphicon glyphicon-time"></span><?php echo $qd->SendDate; ?></small>
                            <strong class="pull-right primary-font">Me</strong>
                          </div>
                          <p class="word-wrap"><?php echo $qd->Message; ?></p>
                        </div>
                      </li>
                    <?php else: ?>
                      <li class="left clearfix"><span class="chat-img pull-left">
                        <img src="<?php echo base_url('assets/supplier_upload/').$profile_image; ?>" alt="User Avatar" width="45" class="img-circle" />
                      </span>
                      <div class="chat-body clearfix">
                        <div class="header">
                          <strong class="primary-font"><?php echo $qd->CompanyName; ?></strong>
                          <small class="pull-right text-muted"><span class="glyphicon glyphicon-time"></span><?php echo $qd->SendDate; ?></small>
                          </div>
                          <p class="word-wrap"><?php echo $qd->Message; ?></p>
                        </div>
                      </li>
                    <?php endif; ?>
                  <?php endforeach; ?>
                  <div class="badan_chat word-wrap">
                  </div>
                </ul>
              </div>
              <div class="panel-footer">
                <!-- <form class="" id="Simpan" action="<?php //echo base_url().'Quotation/add_quotation_detail'; ?>" method="post" > -->
                <div class="input-group">
                  <input type="hidden" name="member_id" value="<?php echo $this->session->userdata('user_id'); ?>">
                  <input type="hidden" name="quotation_code" value="<?php echo $quotation[0]->Code;; ?>">
                  <input onkeypress="return runScript(event)" type="text" id="txt_message" name="message" class="form-control input-sm" placeholder="Type your message here..." />
                  <span class="input-group-btn">
                    <a type="submit" id="addPesan" class="btn btn-warning btn-sm" id="btn-chat" >
                      Send</a>
                    </span>
                  </div>
                  <!-- </form> -->
                </div>
              </div>
            </div>
          </div>
        <!-- </div> -->
        </div>
      </div>
    </div><!-- /.box-body -->
  </div><!-- /.box -->
</section>
<script type="text/javascript">
function runScript(e) {
    if (e.keyCode == 13) {
      // alert("test");
    e.preventDefault();
    var data = {
      'quotation_code'              : $('input[name=quotation_code]').val(),
        'member_id'              : $('input[name=member_id]').val(),
        'message'             : $('input[name=message]').val()
    };
    // lakukan proses ajax
    $.ajax({
        type        : 'POST',
        dataType:'html',
        url         : "<?php echo base_url().'Quotation/add_quotation_detail'; ?>",
        cache: false,
        data        :  data,
        success: function(response) {

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
      'quotation_code'              : $('input[name=quotation_code]').val()
    };
    $.ajax({
        type        : 'POST',
        dataType:'html',
        url         : "<?php echo base_url().'Quotation/get_quotation_detail_chat'; ?>",
        cache: false,
        data        :  data,
        success: function(response) {
            $(".badan_chat").append(response);
        }
    });
  }
</script>
<script type="text/javascript">
  $(document).ready(function(){
    // alert('tes');
    reload_chat();
      setInterval(
        reload_chat
        , 1000
      );
     $("#addPesan").click(function(e){
      //  alert("test");
      // var url = $('#Simpan').attr('action');
       // ambil inputannya
       e.preventDefault();
       var data = {
         'quotation_code'              : $('input[name=quotation_code]').val(),
           'member_id'              : $('input[name=member_id]').val(),
           'message'             : $('input[name=message]').val()
       };
       // lakukan proses ajax
       $.ajax({
           type        : 'POST',
           dataType:'html',
           url         : "<?php echo base_url().'Quotation/add_quotation_detail'; ?>",
           cache: false,
           data        :  data,
           success: function(response) {

               $(".badan_chat").append(response);
               $("#txt_message").val("");
           }

       });
    });
  });
</script>
<!-- <script type="text/javascript">
function runScript(e) {

  if (e.keyCode == 13) {
    // alert("test");
    e.preventDefault();
    var data = {
      'quotation_code'              : $('input[name=quotation_code]').val(),
      'member_id'              : $('input[name=member_id]').val(),
      'message'             : $('input[name=message]').val()
    };
    // lakukan proses ajax
    $.ajax({
      type        : 'POST',
      dataType:'html',
      url         : "<?php //echo base_url().'Quotation/add_quotation_detail'; ?>",
      cache: false,
      data        :  data,
      success: function(response) {
        $(".badan_chat").append(response);
      }
    });
    return false;
  }
}
</script>
<script type="text/javascript">
$(document).ready(function(){
  setTimeout(
    // $.ajax({
    //   type        : 'POST',
    //   dataType:'html',
    //   url         : "<?php// echo base_url().'Quotation/add_quotation_detail'; ?>",
    //   cache: false,
    //   data        :  data,
    //   success: function(response) {
    //     $(".badan_chat").append(response);
    //   }
    // });
    alert('tes');
    , 6000
  );

  $("#addPesan").click(function(e){
    //  alert("test");
    // var url = $('#Simpan').attr('action');
    // ambil inputannya
    e.preventDefault();
    var data = {
      'quotation_code'              : $('input[name=quotation_code]').val(),
      'member_id'              : $('input[name=member_id]').val(),
      'message'             : $('input[name=message]').val()
    };
    // lakukan proses ajax
    $.ajax({
      type        : 'POST',
      dataType:'html',
      url         : "<?php //echo base_url().'Quotation/add_quotation_detail'; ?>",
      cache: false,
      data        :  data,
      success: function(response) {

        $(".badan_chat").append(response);

      }

    });


  });
});
</script> -->
<!-- _________________________________________________________ -->
<!-- <script type="text/javascript">
function add(e){
e.preventDefault();
// ambil url pada atribute form action
var url = $('#Simpan').attr('action');
// ambil inputannya
var data = {
'quotation_code'              : $('input[name=quotation_code]').val(),
'member_id'              : $('input[name=member_id]').val(),
'message'             : $('input[name=message]').val()
};
// lakukan proses ajax
$.ajax({
type        : 'POST',
dataType:'html',
url         : ,
cache: false,
data        :  data,
success: function(response) {
$("#message").val()= "";
alert("ok");
$("#badan_chat").html(response);

}

});

return false;
}
</script> -->
