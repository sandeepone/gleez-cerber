<?php defined('SYSPATH') OR die('No direct script access.'); ?>
<?php Assets::css('user', 'media/css/user.css', array('weight' => 2)); ?>

<div class="account-container">
	<?php include Kohana::find_file('views', 'errors/partial'); ?>

	<div class="content clearfix">
		<?php echo Form::open($action, array('class' => 'row')); ?>
			<h1><?php echo $site_name ?></h1>

			<div class="login-fields">
				<p><?php echo __('Sign in using your registered account:'); ?></p>

				<div class="field">
					<div class="control-group <?php echo isset($errors['name']) ? 'error': ''; ?>">
						  <div class="controls">
							<div class="input-prepend">
							  <span class="add-on"><i class="icon-large icon-user"></i></span>
							  <?php echo Form::input('name', $post->name, array('placeholder' => __('Username/Email'))); ?>
							</div>
						  </div>
					</div>
				</div>

				<div class="field">
					<div class="control-group <?php echo isset($errors['password']) ? 'error': ''; ?>">
						<div class="controls">
							<div class="input-prepend">
								<span class="add-on"><i class="icon-large icon-key"></i></span>
								<?php echo Form::password('password', NULL, array('placeholder' => __('Password'))); ?>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="login-actions">
				<span class="login-checkbox">
					<input id="remember" name="remember" type="checkbox" class="field login-checkbox" value="TRUE" tabindex="4">
					<label class="choice" for="remember"><?php echo __('Stay Signed in'); ?></label>
				</span>
				<?php echo Form::button('login', __('Login'), array('class' => 'btn btn-primary pull-right', 'type' => 'submit')); ?>
				<div class="clearfix"></div><br>
				<ul>
					<li><?php echo HTML::anchor('user/reset/password', __('Forgot Password?')); ?></li>
			 		<?php if ($register): ?>
						<li><?php echo HTML::anchor('user/register', __("Don't have an account?")); ?></li>
					<?php endif; ?>
				</ul>
			</div>

			<?php if ($providers): ?>
				<div class="login-social">
					<hr>
					<p><?php echo __('Sign in using social network:')?></p>
					<?php foreach ($providers as $provider => $key): ?>
						<div class="<?php echo $provider?>">
							<?php
								$url = Route::get('user/oauth')->uri(array('controller' => $provider, 'action' => 'login'));
								echo HTML::anchor($url, ucfirst($provider), array('class' => 'btn-social', 'title' => __('Login with :provider', array(':provider' => ucfirst($provider)))));
							?>
						</div>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>

		<?php echo Form::close() ?>
	</div>
</div>
