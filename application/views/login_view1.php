<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/AdminLTE/bower_components/bootstrap/dist/css/bootstrap.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/AdminLTE/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/AdminLTE/bower_components/Ionicons/css/ionicons.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/AdminLTE/plugins/iCheck/square/blue.css">

  <link rel="stylesheet" href="<?php echo base_url();?>/assets/AdminLTE/dist/css/AdminLTE.min.css">

    <link rel="stylesheet" href="<?php echo base_url();?>/assets/AdminLTE/bower_components/bootstrap-validator/dist/css/bootstrapValidator.css"/>



 <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
	<img src="<?php echo base_url();?>/assets/AdminLTE/dist/img/logo_vec.gif" width="30%">
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">ระบบจัดการข้อมูลบุคลากรอาชีวศึกษา</p>

    <form id="defaultForm"  method="post"   action="target.php">
      <div class="form-group has-feedback">
        <input type="text" name="username" class="form-control" placeholder="ชื่อบัญชีผู้ใช้">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="userpass" class="form-control" placeholder="รหัสผ่าน">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
        </div>

        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary">เข้าสู่ระบบ</button>
        </div>
      </div>
    </form>

      <div class="row">
        <div class="col-xs-12">
		 <p class="login-box-msg" align="center">
		 <br>
				พัฒนาโดย สำนักอำนวยการ 
				<br>สำนักงานคณะกรรมการการอาชีวศึกษา
				<br>กระทรวงศึกษาธิการ
			</p>
        </div>
      </div>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

    <script type="text/javascript" src="<?php echo base_url();?>/assets/AdminLTE/bower_components/bootstrap-validator/dist/js/bootstrapValidator.js"></script>

<script src="<?php echo base_url();?>/assets/AdminLTE/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>/assets/AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url();?>/assets/AdminLTE/plugins/iCheck/icheck.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	      $('#defaultForm')
        .bootstrapValidator({
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
               username: {
                    validators: {
                        notEmpty: {
                            message: 'The first name is required and cannot be empty'
                        }
                    }
                },

              userpass: {
                    validators: {
                        notEmpty: {
                            message: 'The Password is required and cannot be empty'
                        }
                    }
                },
            }
        })
        .on('success.form.bv', function(e) {
            // Prevent submit form
            e.preventDefault();

            var $form     = $(e.target),
                validator = $form.data('bootstrapValidator');



            $form
                .bootstrapValidator('disableSubmitButtons', false)  // Enable the submit buttons
                .bootstrapValidator('resetForm', true);             // Reset the form
        });
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
