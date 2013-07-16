<?php
$login = array(
	'name'	=> 'login',
	'id'	=> 'login',
	'value' => set_value('login'),
	'maxlength'	=> 80,
	'size'	=> 30,
);
if ($login_by_username AND $login_by_email) {
	$login_label = $this->lang->line('auth_email_or_login');
} else if ($login_by_username) {
	$login_label = $this->lang->line('auth_login');
} else {
	$login_label = $this->lang->line('auth_email');
}
$password = array(
	'name'	=> 'password',
	'id'	=> 'password',
	'size'	=> 30,
);
$remember = array(
	'name'	=> 'remember',
	'id'	=> 'remember',
	'value'	=> 1,
	'checked'	=> set_value('remember'),
	'style' => 'margin:0;padding:0',
);
$captcha = array(
	'name'	=> 'captcha',
	'id'	=> 'captcha',
	'maxlength'	=> 8,
);
?>
<?php echo form_open($this->uri->uri_string()); ?>
<table>
	<tr>
		<td><?php echo form_label($login_label, $login['id']); ?></td>
		<td><?php echo form_input($login); ?></td>
		<td style="color: red;"><?php echo form_error($login['name']); ?><?php echo isset($errors[$login['name']])?$errors[$login['name']]:''; ?></td>
	</tr>
	<tr>
		<td><?php echo form_label($this->lang->line('auth_password'), $password['id']); ?></td>
		<td><?php echo form_password($password); ?></td>
		<td style="color: red;"><?php echo form_error($password['name']); ?><?php echo isset($errors[$password['name']])?$errors[$password['name']]:''; ?></td>
	</tr>

	<?php if ($show_captcha) {
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
			<p><?php echo $this->lang->line('auth_captcha_instruction'); ?>:</p>
			<?php echo $captcha_html; ?>
		</td>
	</tr>
	<tr>
		<td><?php echo form_label($this->lang->line('auth_confirmation_code'), $captcha['id']); ?></td>
		<td><?php echo form_input($captcha); ?></td>
		<td style="color: red;"><?php echo form_error($captcha['name']); ?></td>
	</tr>
	<?php }
	} ?>

	<tr>
		<td colspan="3">
			<?php echo form_checkbox($remember); ?>
			<?php echo form_label($this->lang->line('auth_remember_me'), $remember['id']); ?>
			<?php echo anchor('/auth/forgot_password/', $this->lang->line('auth_forgot_password')); ?>
			<?php if ($this->config->item('allow_registration', 'tank_auth')) echo anchor('/auth/register/', $this->lang->line('auth_register')); ?>
		</td>
	</tr>
</table>
<?php echo form_submit('submit', $this->lang->line('auth_let_me_in')); ?>
<?php echo form_close(); ?>