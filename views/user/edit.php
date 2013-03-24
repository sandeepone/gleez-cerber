<?php defined('SYSPATH') OR die('No direct script access.'); ?>

<?php include Kohana::find_file('views', 'errors/partial'); ?>

<div class="span12">

	<div class="widget">
		<!-- ########## Widget Header start ########## -->
		<div class="widget-header">
			<span class="icon-user"></span>
			<h3><?php echo __('User Account')?></h3>
		</div>
		<!-- ########## Widget Header end ########## -->
		<!-- ########## Widget Content start ########## -->
		<div class="widget-content">
			<div class="tabbable">
				<ul class="nav nav-tabs" id="profile-tabs">
					<li class="active">
						<?php echo HTML::anchor('#profile', __('Profile'), array('data-toggle' => 'tab')) ?>
					</li>
					<li>
						<?php echo HTML::anchor('#settings', __('Settings'), array('data-toggle' => 'tab')) ?>
					</li>
				</ul>
				<br>
				<?php echo Form::open($action, array('class' => 'form-horizontal')); ?>
				<div class="tab-content" id="profile-tabs-content">
					<div class="tab-pane fade in active" id="profile">
						<div class="control-group <?php echo isset($errors['name']) ? 'error': ''; ?>">
							<?php echo Form::label('name', __('Username'), array('class' => 'control-label')) ?>
							<div class="controls">
								<div class="input-prepend">
									<span class="add-on"><i class="icon-lock"></i></span>
									<?php echo Form::input('name', $user->name, array('class' => 'input-xlarge disabled', 'disabled')); ?>
								</div>
								<span class="help-block"><?php echo __('Username for logging in can\'t be changed.') ?></span>
							</div>
						</div>
						<div class="control-group <?php echo isset($errors['nick']) ? 'error': ''; ?>">
							<?php echo Form::label('nick', __('Display Name'), array('class' => 'control-label')) ?>
							<div class="controls">
								<div class="input-prepend">
									<span class="add-on"><i class="icon-user"></i></span>
									<?php echo Form::input('nick', $user->nick, array('class' => 'input-xlarge')); ?>
								</div>
							</div>
						</div>
						<div class="control-group <?php echo isset($errors['gender']) ? 'error': ''; ?>">
							<?php echo Form::label('gender', __('Gender'), array('class' => 'control-label')) ?>
							<div class="controls">
								<?php echo Form::label('gender1', Form::radio('gender', 1, $male).__('Male'), array('class' => 'radio')) ?>
								<?php echo Form::label('gender2', Form::radio('gender', 2, $female).__('Female'), array('class' => 'radio')) ?>
							</div>
						</div>

						<div class="control-group <?php echo isset($errors['dob']) ? 'error': ''; ?>">
							<?php echo Form::label('dob', __('Birthday'), array('class' => 'control-label')) ?>
							<div class="controls">
								<?php echo Form::select('month', Date::months(Date::MONTHS_SHORT), date('n', $user->dob), array('class' => 'span2')); ?>
								<?php echo Form::select('days',  Date::days(Date::DAY), date('j', $user->dob), array('class' => 'span2')); ?>
								<?php echo Form::select('years', Date::years(date('Y') - 95,date('Y') - 5), date('Y', $user->dob), array('class' => 'span2')); ?>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="settings">
						<div class="control-group <?php echo isset($errors['mail']) ? 'error': ''; ?>">
							<?php echo Form::label('mail', __('Mail'), array('class' => 'control-label')) ?>
							<div class="controls">
								<?php echo Form::input('mail', $user->mail, array('class' => 'input-large')); ?>
							</div>
						</div>
					</div>
				</div>
				<?php echo Form::button('user_edit', '<i class="icon-ok-circle"></i> '.__('Save'), array('class' => 'btn pull-right', 'type' => 'submit'))?>
				<div class="clearfix"></div><br>
				<?php echo Form::close() ?>
			</div>
		</div>
		<!-- ########## Widget Content End ########## -->
	</div>
</div>