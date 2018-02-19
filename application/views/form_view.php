<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
  <style>
    input{
        width:300px;
    }
  </style>
<html>
<head>
  <meta charset="utf-8">
  <title>AdminLTE 2 | Dashboard</title>
  </head>
<body>
    <div class="jsError"></div>
    <h3>Please give us a valid website URL</h3>
    <?php echo form_open('website/submission',array('name'=>'jsform'));?>
    <p><input type="text" name="website"></p>
    <p><input type="submit" value="Check website"></p>
    <?php echo form_close();?>
</body>
<script src="<?php echo base_url();?>/assets/AdminLTE/bower_components/jquery/dist/jquery.min.js"></script>
<script>
  $(document).ready(function(){
    $('form.jsform').on('submit',function(form){
      form.preventDefault();
      $.post('/index.php/website/submission',$('form.jsform').serialize(),function(data){
        $('div.jsError').html(data);
      });
    });
  });
</script>

</html>
