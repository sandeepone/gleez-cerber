<div class="content-container">
	<div class="row">

		<div class="col-md-3 col-sm-4">
			<?php include Kohana::find_file('views', 'user/edit_link'); ?>
		</div>

	<div class="col-md-9 col-sm-8">

		<?php include Kohana::find_file('views', 'errors/partial'); ?>

		<div class="content clearfix">
			<?php echo Form::open(Route::get('user')->uri($params).URL::query(array('destination' => Request::initial()->uri($destination))), array('class' => 'row form-password')); ?>
				<div class="login-fields sl stacked-content">
					<div class="field">
						<div class="form-group <?php echo isset($errors['_external']['old_pass']) ? 'has-error': ''; ?>">
							<?php echo Form::label('old_pass', __('Current password'), array('class' => 'control-label')) ?>
							<div class="controls">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-key"></i></span>
									<?php echo Form::password('old_pass', NULL, array('class' => 'form-control', 'placeholder' => __('************'))); ?>
								</div>
							</div>
						</div>

						<div class="form-group <?php echo isset($errors['_external']['pass']) ? 'has-error': ''; ?>">
							<?php echo Form::label('pass', __('New password'), array('class' => 'control-label')) ?>
							<div class="controls">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-key"></i></span>
									<?php echo Form::password('pass', NULL, array('class' => 'form-control')); ?>
								</div>
								<span class="help-block"><?php echo __('Minimum password length &mdash; :count characters', array(':count' => 4)) ?></span>
							</div>
						</div>

						<div class="form-group <?php echo isset($errors['_external']['pass_confirm']) ? 'has-error': ''; ?>">
							<?php echo Form::label('pass_confirm', __('New password (again)'), array('class' => 'control-label')) ?>
							<div class="controls">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-key"></i></span>
									<?php echo Form::password('pass_confirm', NULL, array('class' => 'form-control')); ?>
								</div>
								<span class="help-block"><?php echo __('Confirm new password') ?></span>
							</div>
						</div>
					</div>
					<hr>

					<div class="form-group">
						<div class="col-sm-12">
							<div class="row">
								<div class="col-xs-6">
									<?php echo HTML::anchor('user/profile', '<i class="fa fa-arrow-left"></i> '.__('Profile'), array('class' => 'btn pull-left')); ?>
								</div>
								<div class="col-xs-6">
									<?php echo Form::submit('change_pass', __('Save'), array('class' => 'btn btn-info pull-right')); ?>
								</div>
							</div>
						</div>
					</div>
				</div>

			<?php echo Form::close(); ?>
		</div>
	</div>
</div>
</div>
