<?php defined('SYSPATH') OR die('No direct script access.'); ?>

<div class="account-container">
	<?php include Kohana::find_file('views', 'errors/partial'); ?>
	<div class="content clearfix">
		<?php echo Form::open($action) ?>
			<legend><?php echo __('Reset password'); ?></legend>
			<div class="control-group <?php echo isset($errors['mail']) ? 'error': ''; ?>">
				<?php echo Form::label('mail', __('Email')); ?>
				<div class="input-prepend">
					<span class="add-on">@</span>
					<?php echo Form::input('mail', $post['mail'], array('class' => 'input-xlarge')); ?>
				</div>
			</div>

			<hr>
			<?php echo Form::button('reset_pass', __('Reset'), array('class' => 'btn btn-danger pull-right', 'type' => 'submit')); ?>
			<div class="clearfix"></div>

		<?php echo Form::close(); ?>
	</div>
</div>