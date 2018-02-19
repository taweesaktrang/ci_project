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
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
   <link rel="stylesheet" href="<?php echo base_url();?>/assets/AdminLTE/bower_components/bootstrap/dist/css/bootstrap.css"/>

</head>
</head>

<body>
<div class="container">
	<div class="row">
		<div class="col-sm-1 col-md-2 col-lg-3 "></div>
				<div class="col-xs-12 col-sm-10 col-md-8 col-lg-6 ">
						<div class="page-header" align="center">
								<div id="msg" class="alert alert-success" role="alert">
					       				<span id="showmsg"><?php echo $success_msg;?></span>
        						</div>
						</div>
				</div>
				<div class="col-sm-1 col-md-2 col-lg-3 "></div>
		</div>
  </div>
</body>
</html>
