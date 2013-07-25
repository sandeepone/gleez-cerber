<?php defined('SYSPATH') OR die('No direct script access.'); ?>

<?php include Kohana::find_file('views', 'errors/partial'); ?>

<!-- ######### Sign Up start -->
<div id="signup">
	<div class="title">
		<?php echo __('Fill in the information below to register'); ?>
	</div>
	<?php echo Form::open($action, array('class' => 'form-horizontal')); ?>
		<fieldset>
			<?php if ($config->username): ?>
				<div class="control-group <?php echo isset($errors['name']) ? 'error': ''; ?>">
					<?php echo Form::label('name', __('Username'), array('class' => 'control-label')) ?>
					<div class="controls">
						<?php echo Form::input('name', $post->name, array('class' => 'input-large',  'rel' => 'tooltip', 'data-placement' => 'right', 'title' => __('Username for login'))); ?>
					</div>
				</div>
			<?php endif ?>

			<div class="control-group <?php echo isset($errors['mail']) ? 'error': ''; ?>">
				<?php echo Form::label('mail', __('E-mail'), array('class' => 'control-label')) ?>
				<div class="controls">
					<?php echo Form::input('mail', $post->mail, array('class' => 'input-large',  'rel' => 'tooltip', 'data-placement' => 'right', 'title' => __('Will be private'))); ?>
				</div>
			</div>

			<div class="control-group <?php echo isset($errors['pass']) ? 'error': ''; ?>">
				<?php echo Form::label('pass', __('Password'), array('class' => 'control-label')); ?>
				<div class="controls">
					<?php echo Form::password('pass', NULL, array('class' => 'input-large',  'rel' => 'tooltip', 'data-placement' => 'right', 'title' => __('Try to come up with a complex password'))); ?>
				</div>
			</div>

			<?php if ($config->confirm_pass): ?>
				<div class="control-group <?php echo isset($errors['pass_confirm']) ? 'error': ''; ?>">
					<?php echo Form::label('pass_confirm', __('Confirm Password'), array('class' => 'control-label')) ?>
					<div class="controls">
						<?php echo Form::password('pass_confirm', NULL, array('class' => 'input-large',  'rel' => 'tooltip', 'data-placement' => 'right', 'title' => __('Repeat entered password'))); ?>
					</div>
				</div>
			<?php endif; ?>

			<?php if ($config->use_nick): ?>
				<div class="control-group <?php echo isset($errors['nick']) ? 'error': ''; ?>">
					<?php echo Form::label('nick', __('Display Name'), array('class' => 'control-label')) ?>
					<div class="controls">
						<?php echo Form::input('nick', $post->nick, array('class' => 'input-large',  'rel' => 'tooltip', 'data-placement' => 'right', 'title' => __('Will be public'))); ?>
					</div>
				</div>
			<?php endif ?>

			<div class="control-group <?php echo isset($errors['gender']) ? 'error': ''; ?>">
				<?php echo Form::label('gender', __('Gender'), array('class' => 'control-label')) ?>
				<div class="controls">
					<?php echo Form::label('gender1', Form::radio('gender', 1, $male) . __('Male'), array('class' => 'radio')); ?>
					<?php echo Form::label('gender2', Form::radio('gender', 2, $female) . __('Female'), array('class' => 'radio')); ?>
				</div>
			</div>

			<div class="control-group <?php echo isset($errors['dob']) ? 'error': ''; ?>">
				<?php echo Form::label('dob', __('Birthday'), array('class' => 'control-label')) ?>
				<div class="controls">
					<?php echo Form::select('month', Date::months(Date::MONTHS_SHORT), '', array('class' => 'input-small inline')); ?>
					<?php echo Form::select('days',  Date::days(Date::DAY), '', array('class' => 'span2 inline')); ?>
					<?php echo Form::select('years', Date::years(date('Y') - 95, date('Y') - 5), date('Y') - 5, array('class' => 'input-small inline')); ?>
				</div>
			</div>

			<?php if ($config->use_captcha  AND ! $captcha->promoted()) : ?>
				<div class="control-group captcha <?php echo isset($errors['captcha']) ? 'error': ''; ?>">
					<?php echo Form::label('_captcha', __('Security code'), array('class' => 'control-label') ) ?>
					<div class="controls">
						<?php echo Form::input('_captcha', '', array('class' => 'input-medium')); ?>
						<br><span class="captcha-image"><?php echo $captcha; ?></span>
					</div>
					<div class="clearfix"></div><br>
				</div>
			<?php endif; ?>

			<div class="actions">
				<?php echo Form::button('register', __('Register new account'), array('class' => 'btn btn-large', 'tabindex' => 11, 'type' => 'submit')) ?>
			</div>
		</fieldset>
	<?php echo Form::close(); ?>
</div>
<!-- ######### Sign Up end -->

<!-- ######### Sign In start -->
<div id="signin">
	<div class="title">
		<?php echo __('Already have an account? Choose how you would like to sign in'); ?>
	</div>
	<div class="signin-wrapper">
		<p><?php echo __('You can sign in from any of the following services:'); ?></p>
		<ul id="providers">
			<?php $providers = array_filter($config->providers); ?>
			<li class="provider base">
				<?php
				$url = Route::get('user')->uri(array('action' => 'login'));
				echo HTML::anchor($url, $site_name, array('class' => 'picon-base', 'title' =>__('Login with :provider', array(':provider' => $site_name)), 'rel' => 'tooltip', 'data-placement' => 'right'));
				?>
			</li>
			<?php foreach($providers as $provider => $key): ?>
				<li class="provider <?php echo $provider; ?>">
					<?php
					$url = Route::get('user/oauth')->uri(array('controller' => $provider, 'action' => 'login'));
					echo HTML::anchor($url, ucfirst($provider), array('class' => 'picon-'.$provider, 'title' =>__('Login with :provider', array(':provider' => ucfirst($provider))), 'rel' => 'tooltip', 'data-placement' => 'right'));
					?>
				</li>
			<?php endforeach ?>
		</ul>
		<p class="help-signin">
			<?php echo __("If you don't use any of these services, you can create an account."); ?>
			<?php echo __('Fast, safe & secure way!'); ?>
		</p>
	</div>
</div>
<!-- ######### Sign In end -->