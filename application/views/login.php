<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>EEIS</title>

  <?php
$this->load->view('template/Css');
$this->load->view('template/Js');
?>


   

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    EE<b>IS</b>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Silahkan login untuk mengkases</p>
    <form action="<?php echo base_url(). 'index.php/Login/login'; ?>" method="post" id="login_form">
      <div class="form-group has-feedback">
        <input type="text" name="username" class="form-control" placeholder="Username" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat" id="sign">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <p>&nbsp;</p>
    <div id="form_result" style="display:none" class="alert alert-success"></div>
    <p>&nbsp;</p>
    <p><i>Note : Jika lupa password harap hubungi admin.</i></p>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->





</body>
</html>
<script type="text/javascript">
  $(document).ready(function(){
      $('#login_form').submit(function() {
        $("#form_result").removeClass().addClass("alert alert-info");
        $("#form_result").html("<i class='fa fa-hourglass-start'></i> Validasi user ...");
        $("#form_result").slideDown("fast");
        document.getElementById('sign').setAttribute('disabled','disabled');

        setTimeout(function () {
          $.ajax({
            type: 'POST',
            url: $("#login_form").attr('action'),
            data: $("#login_form").serialize(),
            dataType: "json",
            success: function(data_){
              var pesan = data_.errno;
              if(pesan=='0'){
                $("#form_result").removeClass().addClass("alert alert-success");;
                $("#form_result").html("<i class='fa fa-unlock'></i> Login berhasil ...");
                document.location=data_.message;
              }else if(pesan=='1'){
                $("#form_result").removeClass().addClass("alert alert-warning");
                $('#form_result').html("<i class='fa fa-warning'></i> Username atau Password salah!");
                $('input[type=password]').val("");
                document.getElementById('sign').removeAttribute('disabled');
                $('input[type=password]').focus();
              }
            }
          })
        }, 1000);
        return false;
      });
  });
</script>
<script type="text/javascript">
  function pesanError() {
    $('#warning-alert').fadeIn();
    //document.getElementById(idPesan).innerHTML = isi;
  }
</script>
