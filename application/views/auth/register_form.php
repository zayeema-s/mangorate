<?php
echo $css;

echo $js;

if ($use_username) {
	$username = array(
		'name'	=> 'username',
		'id'	=> 'username',
		'value' => set_value('username'),
		'maxlength'	=> $this->config->item('username_max_length', 'tank_auth'),
		'placeholder'	=> 'Enter Username',
		'required' => 'required'
	);
}
$fname = array(
	'name'	=> 'fname',
	'id'	=> 'fname',
	'value'	=> set_value('fname'),
	'placeholder'	=> 'Enter First Name',
	'required' => 'required'
);
$lname = array(
	'name'	=> 'lname',
	'id'	=> 'lname',
	'value'	=> set_value('lname'),
	'placeholder'	=> 'Enter Last Name',
	'required' => 'required'
);
$email = array(
	'name'	=> 'email',
	'id'	=> 'email',
	'value'	=> set_value('email'),
	'type' => 'email',
	'placeholder'	=> 'Enter Email Address',
	'required' => 'required'
);
$password = array(
	'name'	=> 'password',
	'id'	=> 'password',
	'type' => 'password',
	'value' => set_value('password'),
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'placeholder'	=> 'Enter Password',
	'required' => 'required'
);
$zip = array(
	'name'	=> 'zip',
	'id'	=> 'zip',
	'value'	=> set_value('zip'),
	'placeholder'	=> 'Enter Zip Code',
	'required' => 'required',
);
$birthday = array(
	'name'	=> 'birthday',
	'id'	=> 'birthday',
	'value'	=> set_value('birthday'),
	'placeholder'	=> 'Enter Birth Day',
	'required' => 'required',
	'id' => 'datepicker',
	'data-date-format' => 'yyyy-mm-dd'
);
$agree = array(
	'name'	=> 'agree',
	'id'	=> 'agree',
	'value'	=> 1,
	'checked'	=> set_value('agree'),
	'required' => 'required'
);
$captcha = array(
	'name'	=> 'captcha',
	'id'	=> 'captcha',
	'placeholder'	=> 'Enter Code',
	'required' => 'required'
);
?>
	<div class="facebook-signup-link">	
		<form class="form-horizontal">			
		<div class="control-group">
			<label class="control-label" for="">Facebook</label>
			<div class="controls">
				<a href=""><img src="<?php echo $this->config->item('img_url'); ?>facebook.png" /></a>		
			</div>
		</div>	
		</form>				
	</div>
	<span class="or">OR</span>	
<?php 
	$attributes = array('id' => 'myform', 'class' => 'form-horizontal'); 
	echo form_open($this->uri->uri_string(), $attributes); ?>

	<?php if ($use_username) { ?>
	<div class="control-group">
		<label class="control-label" for="<?php echo $username['id']; ?>"><?php echo $this->lang->line('auth_username'); ?></label>
		<div class="controls">
			<?php echo form_input($username); ?>
			<div class="error">
				<?php echo form_error($username['name']); ?><?php echo isset($errors[$username['name']])?$errors[$username['name']]:''; ?>
			</div>		
		</div>
	</div>
	<?php } ?>

	<div class="control-group">
		<label class="control-label" for="<?php echo $fname['id']; ?>"><?php echo $this->lang->line('auth_fname'); ?></label>
		<div class="controls">
			<?php echo form_input($fname); ?>
			<div class="error">
				<?php echo form_error($fname['name']); ?>
			</div>		
		</div>
	</div>

	<div class="control-group">
		<label class="control-label" for="<?php echo $lname['id']; ?>"><?php echo $this->lang->line('auth_lname'); ?></label>
		<div class="controls">
			<?php echo form_input($lname); ?>
			<div class="error">
				<?php echo form_error($lname['name']); ?>
			</div>		
		</div>
	</div>

	<div class="control-group">
		<label class="control-label" for="<?php echo $email['id']; ?>"><?php echo $this->lang->line('auth_email'); ?></label>
		<div class="controls">
			<?php echo form_input($email); ?>
			<div class="error">
				<?php echo form_error($email['name']); ?><?php echo isset($errors[$email['name']])?$errors[$email['name']]:''; ?>
			</div>		
		</div>
	</div>

	<div class="control-group">
		<label class="control-label" for="<?php echo $password['id']; ?>"><?php echo $this->lang->line('auth_password'); ?></label>
		<div class="controls">
			<?php echo form_input($password); ?>
			<div class="error">
				<?php echo form_error($password['name']); ?>
			</div>		
		</div>
	</div>

	<div class="control-group">
		<label class="control-label" for="<?php echo $zip['id']; ?>"><?php echo $this->lang->line('auth_zip'); ?></label>
		<div class="controls">
			<?php echo form_input($zip); ?>
			<div class="error">
				<?php echo form_error($zip['name']); ?>	
			</div>		
		</div>
	</div>

	<div class="control-group">
		<label class="control-label" for="<?php echo $birthday['id']; ?>"><?php echo $this->lang->line('auth_birthday'); ?></label>
		<div class="controls">
			<?php echo form_input($birthday); ?>
			<div class="error">
				<?php echo form_error($birthday['name']); ?>
			</div>		
		</div>
	</div>

	<?php 
	if ($captcha_registration) { ?>
	<div class="control-group">
		<?php
		if ($use_recaptcha) { ?>
		<div class="controls">
			<?php echo $recaptcha_html; ?>
			<div class="error">
				<?php echo form_error('recaptcha_response_field'); ?>
			</div>
		</div>
		<?php } else {?>
		<label class="control-label" for="<?php echo $captcha['id']; ?>"><?php echo $this->lang->line('auth_captcha_instruction'); ?></label>
		<div class="controls">
			<?php echo $captcha_html; ?>
			<div class="captcha-input">
				<?php echo form_input($captcha); ?>	
			</div>
			<div class="error">
				<?php echo form_error($captcha['name']); ?>	
			</div>
		</div>
		<?php } ?>
	</div>
	<?php
	} ?>

	<div class="control-group">
		<div class="controls">
			<label class="checkbox">
			<?php echo form_checkbox($agree); ?><?php echo $this->lang->line('auth_agree_terms'); ?>
			</label>
		</div>
	</div>

	<div class="control-group">		
		<div class="controls login-button-box">
			<div class="left"></div>
			<div class="right"><button class="btn btn-inverse login-button" type="submit"><?php echo $this->lang->line('auth_signup'); ?></button></div>	
			<div class="clear"></div>
		</div>
	</div>

<?php echo form_close(); ?>

	<script type="text/javascript">    
      $(document).ready(function(){

      	  $('#datepicker').datepicker({
				autoclose: true
		  });

          $('.form-horizontal').submit(function(event) {
              var $form = $(this);
              var $target = $($form.attr('data-target'));

              $('#signup .modal-body').html('<?php echo $this->config->item("loading_img"); ?>');
               
              $.ajax({
                type: $form.attr('method'),
                url: $form.attr('action'),
                data: $form.serialize(),
                 
                success: function(data, status) {
                  $('#signup .modal-body').html(data);
                }
              });
               
              event.preventDefault();
          });
      }); 
      </script>