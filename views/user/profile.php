<?php defined('SYSPATH') OR die('No direct script access.'); ?>

<div class="span4 vcard" itemscope itemtype="http://schema.org/Person">
	<div class="avatar">
		<div class="Photo">
			<?php echo User::getAvatar($user, array('size' => 220)); ?>
		</div>
		<h1>
			<span itemprop="name"><?php echo $user->nick; ?></span>
			<em itemprop="additionalName"><?php echo $user->name; ?></em>
		</h1>
		<div class="details">
			<?php if ($is_owner AND ( ! Config::get('site.use_gravatars', FALSE))): ?>
				<dl>
					<dt><i class="icon-upload"></i></dt>
					<dd><?php echo HTML::anchor('user/photo', __('Change Avatar'), array('id' => 'add-pic', 'title' => __('Change your avatar'), 'data-toggle' => 'popup')) ?></dd>
				</dl>
			<?php endif; ?>
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
							<span><?php echo Text::plain(ucfirst($role)); ?></span>
						<?php endforeach; ?>
					</dd>
				</dl>
			<?php endif; ?>
		</div>
	</div>
</div>
<div class="span8">
	<?php if ($is_owner OR ACL::check('administer users')): ?>
		<ul class="tabnav span12">
			<li>
				<?php echo HTML::anchor('user/edit', '<i class="icon-pencil"></i> '.__('Edit Account'), array('class' => 'btn')); ?>
			</li>
			<li>
				<?php echo HTML::anchor('user/password', '<i class="icon-cog"></i> '.__('Change Password'), array('class' => 'btn')); ?>
			</li>
		</ul>
	<?php endif; ?>
	<div class="span12">
		<?php if ($user->bio): ?>
			<div id="user-bio">
				<h4><?php echo __('Bio') ?></h4>
				<p>
					<?php echo Text::plain($user->bio); ?>
				</p>
			</div>
		<?php endif ?>
	</div>
</div>
