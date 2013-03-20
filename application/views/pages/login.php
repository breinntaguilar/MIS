<div class="row">
		<div class="span6 offset3">
			<?php 
				$attributes = array('class' => 'form-horizontal well', 'id' => 'myform');
			 	echo form_open('auth/authenticate', $attributes);
			?>
			<div class="page-header">
				<h1>Login</h1>
				<p class="lead">Moriah Information System</p>
				<hr>
			</div>
			<?php if( isset($flash_message) )
			{
				echo '<div class="alert alert-error alert fade in">
						<a class="close" data-dismiss="alert" href="#">&times;</a>
						<strong>ERROR: </strong>' . $flash_message .
					 '</div>';
			}
			?>
            <?php echo form_error('username'); ?>
            <?php echo form_error('password'); ?>
			
			<div class="control-group">
			<?php
				$attributes = array('class' => 'control-label');
				echo form_label('Username', 'username', $attributes);
			?>
				<div class="controls">
				<?php
					$data = array( 
							'class' => 'input-large',
							'name' => 'username',
							'id' => 'username',
							'value' => set_value('username')
							);
					echo form_input($data);
				?>
				</div>
			</div>
				
			<div class="control-group">
			<?php
				$attributes = array('class' => 'control-label');
				echo form_label('Password', 'password', $attributes);
			?>
				<div class="controls">
				<?php
					$data = array( 
							'class' => 'input-large',
							'name' => 'password',
							'id' => 'password',
							);
					echo form_password($data);
				?>
				</div>
			</div>
				
			<div class="control-group">
				<p class="offset2">
				<?php
				echo form_button(array('id' => 'submit', 'value' => 'Login', 'name' => 'submit', 'type' => 'submit', 'content' => 'Login','class' => 'btn btn-primary btn-large'));
				?>
				<!--a class="btn btn-success btn-large" href="<?php //echo site_url('user/registeraccount'); ?>">Register Account</a-->
				</p>
			</div>
			<?php echo form_close(); ?>
			<p>New occupant in Mt. Moriah? No Account Yet? Sign Up <a href="<?php echo site_url('user/registeraccount'); ?>">Here</a></p>
		</div>
		
</div>

<script>
$(".alert").alert('close')
</script>