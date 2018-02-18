<html>
<head>
<title>สมัครสมาชิก</title>
</head>
<body>
	<?php echo form_open('register/validate'); ?>
	<table>
    	<tr>
        	<td>First Name : </td>
            <td><input type="text" name="first_name"/></td>
            <td><?php echo form_error('first_name', '<div class="error">', '</div>'); ?></td>
        </tr>
        <tr>
        	<td>Last Name : </td>
            <td><input type="text" name="last_name"/></td>
            <td><?php echo form_error('last_name', '<div class="error">', '</div>'); ?></td>
        </tr>
        <tr>
        	<td>Email : </td>
            <td><input type="text" name="email"/></td>
            <td><?php echo form_error('email', '<div class="error">', '</div>'); ?></td>
        </tr>
        <tr>
        	<td colspan="1"></td>
            <td><input type="submit" value="Register Now"/></td>
        </tr>
    </table>
    </form>
</body>
</html>