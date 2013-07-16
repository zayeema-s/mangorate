<?php
if ($use_username) {
	$username = array(
		'name'	=> 'username',
		'id'	=> 'username',
		'value' => set_value('username'),
		'maxlength'	=> $this->config->item('username_max_length', 'tank_auth'),
		'size'	=> 30,
	);
}
$fname = array(
	'name'	=> 'fname',
	'id'	=> 'fname',
	'value'	=> set_value('fname'),
	'maxlength'	=> 80,
	'size'	=> 30,
);
$lname = array(
	'name'	=> 'lname',
	'id'	=> 'lname',
	'value'	=> set_value('lname'),
	'maxlength'	=> 80,
	'size'	=> 30,
);
$email = array(
	'name'	=> 'email',
	'id'	=> 'email',
	'value'	=> set_value('email'),
	'maxlength'	=> 80,
	'size'	=> 30,
);
$password = array(
	'name'	=> 'password',
	'id'	=> 'password',
	'value' => set_value('password'),
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size'	=> 30,
);
$zip = array(
	'name'	=> 'zip',
	'id'	=> 'zip',
	'value'	=> set_value('zip'),
	'maxlength'	=> 80,
	'size'	=> 30,
);
$birthday = array(
	'name'	=> 'birthday',
	'id'	=> 'birthday',
	'value'	=> set_value('birthday'),
	'maxlength'	=> 80,
	'size'	=> 30,
);
$captcha = array(
	'name'	=> 'captcha',
	'id'	=> 'captcha',
	'maxlength'	=> 8,
);
?>
<?php echo form_open($this->uri->uri_string()); ?>
<table>
	<?php if ($use_username) { ?>
	<tr>
		<td><?php echo form_label('Username', $username['id']); ?></td>
		<td><?php echo form_input($username); ?></td>
		<td style="color: red;"><?php echo form_error($username['name']); ?><?php echo isset($errors[$username['name']])?$errors[$username['name']]:''; ?></td>
	</tr>
	<?php } ?>
	<tr>
		<td><?php echo form_label('First Name', $fname['id']); ?></td>
		<td><?php echo form_input($fname); ?></td>
		<td style="color: red;"><?php echo form_error($fname['name']); ?><?php echo isset($errors[$fname['name']])?$errors[$fname['name']]:''; ?></td>
	</tr>
	<tr>
		<td><?php echo form_label('Last Name', $lname['id']); ?></td>
		<td><?php echo form_input($lname); ?></td>
		<td style="color: red;"><?php echo form_error($lname['name']); ?><?php echo isset($errors[$lname['name']])?$errors[$lname['name']]:''; ?></td>
	</tr>
	<tr>
		<td><?php echo form_label('Email Address', $email['id']); ?></td>
		<td><?php echo form_input($email); ?></td>
		<td style="color: red;"><?php echo form_error($email['name']); ?><?php echo isset($errors[$email['name']])?$errors[$email['name']]:''; ?></td>
	</tr>
	<tr>
		<td><?php echo form_label('Password', $password['id']); ?></td>
		<td><?php echo form_password($password); ?></td>
		<td style="color: red;"><?php echo form_error($password['name']); ?></td>
	</tr>
	<tr>
		<td><?php echo form_label('Zip Code', $zip['id']); ?></td>
		<td><?php echo form_input($zip); ?></td>
		<td style="color: red;"><?php echo form_error($zip['name']); ?><?php echo isset($errors[$zip['name']])?$errors[$zip['name']]:''; ?></td>
	</tr>
	<tr>
		<td><?php echo form_label('Birth Day', $birthday['id']); ?></td>
		<td><?php echo form_input($birthday); ?></td>
		<td style="color: red;"><?php echo form_error($birthday['name']); ?><?php echo isset($errors[$birthday['name']])?$errors[$birthday['name']]:''; ?></td>
	</tr>	

	<?php if ($captcha_registration) {
		if ($use_recaptcha) { ?>
	<tr>
		<td colspan="2">
			<?php echo $recaptcha_html; ?>
		</td>
		<td style="color: red;"><?php echo form_error('recaptcha_response_field'); ?></td>		
	</tr>
	<?php } else { ?>
	<tr>
		<td colspan="3">
			<p>Enter the code exactly as it appears:</p>
			<?php echo $captcha_html; ?>
		</td>
	</tr>
	<tr>
		<td><?php echo form_label('Confirmation Code', $captcha['id']); ?></td>
		<td><?php echo form_input($captcha); ?></td>
		<td style="color: red;"><?php echo form_error($captcha['name']); ?></td>
	</tr>
	<?php }
	} ?>
</table>
<?php echo form_submit('register', 'Register'); ?>
<?php echo form_close(); ?>