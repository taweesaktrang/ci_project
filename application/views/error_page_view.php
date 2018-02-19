<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <META HTTP-EQUIV="Refresh" CONTENT="5;URL=<?php echo $redirect_url;?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title;?></title>
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
              <div id="msg" class="alert alert-danger alert-dismissible" role="alert">
        				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
        					<span aria-hidden="true">x</span>
        				</button>
        				<span id="showmsg"><?php echo $error_msg;?></span>
        			</div>

           </div>
			 </div>
			<div class="col-sm-1 col-md-2 col-lg-3 "></div>
		</div>
  </div>
</body>
</html>
