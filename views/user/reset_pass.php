<?php echo Form::open($action, array('class' => 'col-md-8 form form-horizontal')) ?>

	<?php include Kohana::find_file('views', 'errors/partial'); ?>

	<div class="form-group <?php echo isset($errors['mail']) ? 'error': ''; ?>">
		<?php echo Form::label('mail', __('Email'), array('class' => 'control-label')); ?>
		<div class="controls">
			<div class="input-group">
				<span class="input-group-addon">@</span>
				<?php echo Form::input('mail', $post['mail'], array('class' => 'form-control input-lg')); ?>
			</div>
		</div>
	</div>

	<?php echo Form::submit('reset_pass', __('Reset'), array('class' => 'btn btn-danger')); ?>

<?php echo Form::close() ?>
