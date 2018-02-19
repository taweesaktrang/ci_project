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
   <link rel="stylesheet" href="<?php echo base_url();?>/assets/AdminLTE/bower_components/bootstrap-validator/vendor/bootstrap/css/bootstrap.css"/>
   <link rel="stylesheet" href="<?php echo base_url();?>/assets/AdminLTE/bower_components/bootstrap-validator/dist/css/bootstrapValidator.css"/>

    <script type="text/javascript" src="<?php echo base_url();?>/assets/AdminLTE/bower_components/bootstrap-validator/vendor/jquery/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/assets/AdminLTE/bower_components/bootstrap-validator/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/assets/AdminLTE/bower_components/bootstrap-validator/dist/js/bootstrapValidator.js"></script>
</head>

 <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body>
<div class="container">
        <div class="row">
			<div class="col-sm-1 col-md-2 col-lg-3 "></div>
            <div class="col-xs-12 col-sm-10 col-md-8 col-lg-6 ">
			  <div class="page-header" align="center">
					<img src="<?php echo base_url();?>/assets/AdminLTE/dist/img/logo_vec.gif" width="30%">
					  <h4>ระบบจัดการข้อมูลบุคลากรอาชีวศึกษา</h4>
					  <h5>System of Vocational Personnel Management</h5>
			  </div>

                <form id="defaultForm"  class="form-horizontal">
                    <div class="form-group">
                        <label class="col-xs-3 col-sm-4 col-md-4 col-lg-4 control-label">ชื่อบัญชีผู้ใช้</label>
                         <div class="col-xs-9 col-sm-8 col-md-8 col-lg-8  input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input type="text" class="form-control" id="username" name="username" placeholder="ชื่อบัญชีผู้ใช้" />
                        </div>
                    </div>

                    <div class="form-group">
                       <label class="col-xs-3 col-sm-4 col-md-4 col-lg-4 control-label">รหัสผ่าน</label>
                        <div class="col-xs-9 col-sm-8 col-md-8 col-lg-8 input-group">
							    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input type="password" class="form-control" id="userpass" name="userpass" placeholder="รหัสผ่าน" />
                            </div>
                    </div>

					  <div class="form-group">
					    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" align="center"></div>
              <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" align="center">
				          <button type="submit" class="btn  btn-primary btn-block">เข้าสู่ระบบ</button>
              </div>
              <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" align="center">
                <a href="<?php echo base_url()?>"><button type="button" class="btn  btn-warning btn-block">ลองใหม่</button></a>
              </div>

						<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1" align="center"></div>
                    </div>
                </form>
            </div>
			<div class="col-sm-1 col-md-2 col-lg-3 "></div>
	    </div>

		<div class="row">
			<div class="col-sm-1 col-md-2 col-lg-3 "></div>
            <div class="col-xs-12 col-sm-10 col-md-8 col-lg-6 ">
					 <div class="page-header" align="center">

              <div id="msg" class="alert alert-danger alert-dismissible" role="alert">
        				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
        					<span aria-hidden="true">x</span>
        				</button>
        				<span id="showmsg"></span>
        			</div>

           </div>
			 </div>
			<div class="col-sm-1 col-md-2 col-lg-3 "></div>
		</div>

		<div class="row">
			<div class="col-sm-1 col-md-2 col-lg-3 "></div>
			 <div class="col-xs-12 col-sm-10 col-md-8 col-lg-6" align="center">
								<h4  >พัฒนาโดย สำนักอำนวยการ</h4>
								<h5 >สำนักงานคณะกรรมการการอาชีวศึกษา กระทรวงศึกษาธิการ</h5>
			 </div>
			<div class="col-sm-1 col-md-2 col-lg-3 "></div>
		</div>
      </div>
    </div>


<script type="text/javascript">
window.onload = function() {
document.getElementById('msg').style.display = 'none';
};

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
                            message: 'กรุณากรอกชื่อบัญชีผู้ใช้'
                        }
                    }
                },
                userpass: {
                    validators: {
                        notEmpty: {
                            message: 'กรุณากรอกรหัสผ่าน'
                        }
                    }
                },
            }
        });

      $('#defaultForm').submit(function(event){
        event.preventDefault();
        $.ajax({
          url:'<?php echo base_url(); ?>index.php/main/do_login',
          type:'POST',
          data:{
            username : $("#username").val(),
            userpass : $("#userpass").val()
          },

          success:function(data){
            if(data=='pass'){
              window.location.href='<?php echo base_url(); ?>main/init_session';
            }else if(data=='fail'){
              document.getElementById('msg').style.display = 'block';
              document.getElementById("showmsg").innerHTML = "มีบางอย่างผิดพลาด Username หรือ รหัสผ่านของคุณอาจไม่ถูกต้อง";
            }
          }
        });
    });
});

</script>
</body>
</html>
