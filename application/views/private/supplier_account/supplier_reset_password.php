<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="btn-group btn-breadcrumb">
    <a href="#" class="btn btn-default btn-xs">
      <i class="glyphicon glyphicon-home"></i>
    </a>
    <a href="#" class="btn btn-default  btn-xs">Reset Password</a>
    <!-- <a  class="btn btn-default  btn-xs active">Add Product Category</a> -->
  </div>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-info">
        <div class="box-header">
          <h3 class="box-title">Reset Password</h3>
        </div>
        <div class="box-body">
          <div class="form-group" id="form_group_old_password">
            <label class="control-label">Old Password</label>
            <div class="input-group">
              <input  class="form-control" type="password" name="old_password" id="old_password">
              <span class="input-group-btn">
                <button id="BtnOldPass" class="btn btn-default" type="button">Submit</button>
              </span>
            </div><!-- /input-group -->
            <span id="span_old_password" class=""></span>
          </div>
          <form method="post" name="reset_password_form" id="reset_password_form" action="<?php echo base_url().'User/update_password'; ?>">

            <div class="form-group" id="form_group_new_password">
              <label class="control-label">New Password</label>
              <input disabled type="password" name="new_password" id="new_password" class="form-control"
              placeholder="">
              <span id="span_new_password" class=""></span>
            </div>
            <div class="form-group" id="form_group_c_new_password">
              <label class="control-label">Confirm New Password</label>
              <input disabled type="password" name="c_new_password" id="c_new_password" class="form-control"
              placeholder="">
              <span id="span_c_new_password" class=""></span>
            </div>

            <div class="form-group">

              <button disabled type="submit" id="btn_save" value="Validate" class="btn btn-default">
                <i class='glyphicon glyphicon-ok'></i> Save</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script type="text/javascript">
  $(function(){
    $('#BtnOldPass').click(function(event){
      var old_password = $('#old_password').val();
      var data = {
        'old_password': old_password
      };
      $.ajax({
        type: 'POST',
        dataType: 'html',
        url: "<?php echo base_url().'User/get_user_password'; ?>",
        cache: false,
        data: data,
        success: function (response) {
          //console.log(response);
          if (old_password.trim() == "") {
            $("#span_old_password").html("Please fill out old password...");
            span_old_password.className = "help-block";
            form_group_old_password.className = "form-group has-error";

          } else if (response == 0 ) {
            $("#span_old_password").html("your pasword wrong");
            span_old_password.className = "help-block";
            form_group_old_password.className = "form-group has-error";
            $("#new_password").attr("disabled", true);
            $("#c_new_password").attr("disabled", true);
            $("#btn_save").attr("disabled", true);
          } else if (response == 1 ){
            $("#span_old_password").html("");
            form_group_old_password.className = "form-group has-success";
            $("#new_password").removeAttr("disabled");
            $("#c_new_password").removeAttr("disabled");
            $("#btn_save").removeAttr("disabled");
          }

        }

      });
    });
  })
</script>
<script type="text/javascript">
// $("#reset_password_form").submit(function () {
//
//         event.preventDefault();
//
//
//
// });
</script>
<script type="text/javascript">

// function oldPasswordValidation(e) {
//     var old_password = $('#old_password').val();
//     // var data = {
//     //     'old_password': old_password
//     // };
//     $.ajax({
//         type: 'POST',
//         dataType: 'html',
//         url: "<?php// echo base_url().'User/get_user_password'; ?>",
//         cache: false,
//         data: {old_password:old_password},
//         success: function (response) {
//             console.log(response);
//             if (response == "0" ) {
//                 $("#span_old_password").html("your pasword wrong");
//                 e.preventDefault();
//             } else {

//             }
//         }
//     });
// }
// reset_password_form.addEventListener("submit", oldPasswordValidation);
</script>

<script>
var reset_password_form = document.getElementById("reset_password_form");
var new_password = document.getElementById("new_password");
// var old_password = document.getElementById("old_password");
var c_new_password = document.getElementById("c_new_password");

var form_group_c_new_password = document.getElementById("form_group_c_new_password");
var span_c_new_password = document.getElementById("span_c_new_password");
var form_group_new_password = document.getElementById("form_group_new_password");
var span_new_password = document.getElementById("span_new_password");
var btn_save = document.getElementById("btn_save");


function validation(e) {

  //===== Untuk Validasi username ==== //
  var new_password_error = "";

  if (new_password.value.trim() === "") {
    new_password_error = "Please fill out new password...";
  }

  if (new_password_error !== "") {
    span_new_password.innerHTML = new_password_error;
    span_new_password.className = "help-block";
    form_group_new_password.className = "form-group has-error";
    // e.preventDefault();
    // console.log(response);
    e.preventDefault();
  } else {
    form_group_new_password.className = "form-group has-success";
  }

  //===== Untuk Validasi Konfirmasi Password ==== //
  var c_new_password_error = "";
  if (c_new_password.value.trim() === "") {
    c_new_password_error = "Please retype new password...";
  } else if (c_new_password.value !== new_password.value) {
    c_new_password_error = "the password you entered is not the same";
  }

  if (c_new_password_error !== "") {
    span_c_new_password.innerHTML = c_new_password_error;
    span_c_new_password.className = "help-block";
    form_group_c_new_password.className = "form-group has-error";
    // c_new_password.style.border = "2px solid red";
    e.preventDefault();
  } else {
    form_group_c_new_password.className = "form-group has-success";
  }

  if (c_new_password_error == "" && new_password_error == "") {
    e.preventDefault();
    $.confirm({
        title: 'Confirmation',
        content: 'Are You Sure to Save?',
        type: 'blue',
        buttons: {
            Save: function () {
                $.LoadingOverlay("show");
                setTimeout( function () {
                  $("#reset_password_form").submit();
                }, 2000);
            },
            Cancel: function () {

                $.alert('data not saved...');
            },
        }
    });
  }
}

function deleteNewPaswwordError(e) {
  span_new_password.innerHTML = "";
  form_group_new_password.className = "form-group";
}

function deleteConfirmNewPaswwordError(e) {
  span_c_new_password.innerHTML = "";
  form_group_c_new_password.className = "form-group";
}
function deleteOldPaswwordError(e) {
  span_old_password.innerHTML = "";
  form_group_old_password.className = "form-group";
}

reset_password_form.addEventListener("submit", validation);
new_password.addEventListener("focus", deleteNewPaswwordError);
c_new_password.addEventListener("focus", deleteConfirmNewPaswwordError);
old_password.addEventListener("focus", deleteOldPaswwordError);

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
