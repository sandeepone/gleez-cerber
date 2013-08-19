<div class="account-container">
	<?php include Kohana::find_file('views', 'errors/partial'); ?>

	<div class="content clearfix">
		<?php echo Form::open(Route::get('user')->uri($params).URL::query(array('destination' => Request::initial()->uri($destination))), array('class' => 'row-fluid form-password')); ?>
			<h1><?php echo __('Change Password') ?></h1>

			<div class="login-fields">
				<div class="field">
					<div class="control-group <?php echo isset($errors['_external']['old_pass']) ? 'error': ''; ?>">
						<?php echo Form::label('old_pass', __('Current password'), array('class' => 'control-label')) ?>
						<div class="controls">
							<div class="input-prepend">
								<span class="add-on"><i class="icon-large icon-key"></i></span>
								<?php echo Form::password('old_pass', NULL, array('placeholder' => __('************'))); ?>
							</div>
						</div>
					</div>

					<div class="control-group <?php echo isset($errors['_external']['pass']) ? 'error': ''; ?>">
						<?php echo Form::label('pass', __('New password'), array('class' => 'control-label')) ?>
						<div class="controls">
							<div class="input-prepend">
								<span class="add-on"><i class="icon-large icon-key"></i></span>
								<?php echo Form::password('pass', NULL); ?>
							</div>
							<span class="help-block"><?php echo __('Minimum password length &mdash; :count characters', array(':count' => 4)) ?></span>
						</div>
					</div>

					<div class="control-group <?php echo isset($errors['_external']['pass_confirm']) ? 'error': ''; ?>">
						<?php echo Form::label('pass_confirm', __('New password (again)'), array('class' => 'control-label')) ?>
						<div class="controls">
							<div class="input-prepend">
								<span class="add-on"><i class="icon-large icon-key"></i></span>
								<?php echo Form::password('pass_confirm', NULL); ?>
							</div>
							<span class="help-block"><?php echo __('Confirm new password') ?></span>
						</div>
					</div>
				</div>
				<hr>
				<?php echo HTML::anchor('user/profile', '<i class="icon-arrow-left"></i> '.__('Profile'), array('class' => 'btn pull-left')); ?>
				<?php echo Form::submit('change_pass', __('Save'), array('class' => 'btn btn-inverse pull-right')); ?>
			</div>
		<?php echo Form::close(); ?>
	</div>
</div>