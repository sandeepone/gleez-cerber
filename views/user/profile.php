<?php defined('SYSPATH') OR die('No direct script access.'); ?>

<div class="span4 vcard" itemscope itemtype="http://schema.org/Person">
	<div class="avatar">
		<?php if ($is_owner): ?>
			<a href="/user/photo" id="add-pic" rel="tooltip" data-placement="bottom" title="<?php echo __('Change your avatar') ?>">
				<?php echo ( ! empty($user->picture)) ? HTML::resize($user->picture, array('alt' => $user->nick, 'height' => 210, 'width' => 210, 'type' => 'resize', 'itemprop' => 'image')) : '<div class="empty-photo"><i class="icon-camera-retro icon-4x"></i></div>'; ?>
			</a>
		<?php else: ?>
			<?php echo ( ! empty($user->picture)) ? HTML::resize($user->picture, array('alt' => $user->nick, 'height' => 210, 'width' => 210, 'type' => 'resize', 'itemprop' => 'image')) : '<div class="empty-photo"><i class="icon-camera-retro icon-4x"></i></div>'; ?>
		<?php endif; ?>
		<h1>
			<span itemprop="name"><?php echo $user->nick; ?></span>
			<em itemprop="additionalName"><?php echo $user->name; ?></em>
		</h1>
		<div class="details">
			<dl>
				<dt><i class="icon-signin"></i></dt>
				<dd><span class="caption-label"><?php echo __('Joined on') ?></span><?php echo date('M d, Y', $user->created) ?></dd>
			</dl>
			<dl>
				<dt><i class="icon-off"></i></dt>
				<dd><span class="caption-label"><?php echo __('Visits') ?></span><?php echo $user->logins ?></dd>
			</dl>
			<dl title="<?php echo __('Last Active') ?>">
				<dt><i class="icon-fire"></i></dt>
				<dd><?php echo date('M d, Y', $user->login) . __(' @ ') .  date('h:i a', $user->login) ?></dd>
			</dl>
			<?php if ($is_owner OR User::is_admin()): ?>
				<dl title="<?php echo __('Email') ?>">
					<dt><i class="icon-envelope"></i></dt>
					<dd><a class="email" data-email="<?php echo $user->mail ?>" href="mailto:<?php echo $user->mail ?>"><?php echo $user->mail ?></a></dd>
				</dl>
			<?php endif; ?>
			<?php if ($user->homepage): ?>
				<dl title="<?php echo __('Home Page') ?>">
					<dt><i class="icon-link"></i></dt>
					<dd><?php echo HTML::anchor($user->homepage, $user->homepage, array('itemprop' => 'url')); ?></dd>
				</dl>
			<?php endif; ?>
			<dl title="<?php echo __('Birthday') ?>">
				<dt><i class="icon-calendar"></i></dt>
				<dd itemprop="birthDate"><?php echo date('M d, Y', $user->dob) ?></dd>
			</dl>
			<?php if (User::is_admin()): ?>
				<dl>
					<dt><i class="icon-group"></i></dt>
					<dd class="tagcloud">
						<?php foreach ($user->roles() as $role): ?>
							<span><?php echo Text::plain(ucfirst($role->name)); ?></span>
						<?php endforeach; ?>
					</dd>
				</dl>
			<?php endif; ?>
		</div>
	</div>
</div>
<div class="span8">
	<ul class="tabnav">
		<li>
			<?php echo HTML::anchor('user/edit', '<i class="icon-pencil"></i> '.__('Edit Account'), array('class' => 'btn')); ?>
		</li>
		<li>
			<?php echo HTML::anchor('user/password', '<i class="icon-cog"></i> '.__('Change Password'), array('class' => 'btn')); ?>
		</li>
	</ul>
</div>
<div class="modal hide fade in" id="upload-photo" role="dialog" tabindex="-1" aria-hidden="true">
	<div class="modal-header">
		<?php echo Form::button('close_window', '&times;', array('class' => 'close', 'data-dismiss' => 'modal', 'aria-hidden' => 'true')); ?>
		<h3><?php echo __('Uploading Photos'); ?></h3>
	</div>
	<div class="modal-data"></div>
</div>

<?php
	Assets::js('user', 'media/js/user.js', array('jquery'), FALSE, array('weight' => 15));
	Assets::js('user/form', 'media/js/jquery.form-3.27.js', array('jquery'), FALSE, array('weight' => 10));
?>