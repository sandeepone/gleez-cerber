<div id="content-container">
	<div class="row vcard">
		<div class="col-md-9" itemscope itemtype="http://schema.org/Person">
			<div class="col-md-4 col-sm-5">
				<div class="thumbnail vcard-avatar">
					<?php echo User::getAvatar($user, array('size' => 150)); ?>
				</div>

				<div class="list-group">  
					<a href="javascript:;" class="list-group-item">
						<i class="fa fa-asterisk"></i> <?php echo __('Activity Feed'); ?>
						<i class="fa fa-chevron-right list-group-chevron"></i>
					</a> 
					<a href="javascript:;" class="list-group-item">
						<i class="fa fa-group"></i> <?php echo __('Friends'); ?>
						<i class="fa fa-chevron-right list-group-chevron"></i>
						<span class="badge">7</span>
					</a> 
					<?php echo HTML::anchor('user/edit', '<i class="fa fa-cog"></i> '.__('Settings') .'<i class="fa fa-chevron-right list-group-chevron"></i>' , array('class' => 'list-group-item')); ?>
				</div> <!-- /.list-group -->
			</div> <!-- /.col -->
	
			<div class="col-md-8 col-sm-7">
				<h2 class="vcard-names">
					<span itemprop="name"><?php echo $user->nick; ?></span>
					<em itemprop="additionalName"><h4><?php echo $user->name; ?></h4></em>
				</h2>

				<div class="vcard-details">
					<?php if ($is_owner OR User::is_admin()): ?>
						<dl title="<?php echo __('Email') ?>">
							<dt><i class="fa fa-envelope"></i></dt>
							<dd><a class="email" data-email="<?php echo $user->mail ?>" href="mailto:<?php echo $user->mail ?>"><?php echo $user->mail ?></a></dd>
						</dl>
					<?php endif; ?>
					<?php if ($user->homepage): ?>
						<dl title="<?php echo __('Home Page') ?>">
							<dt><i class="fa fa-link"></i></dt>
							<dd><?php echo HTML::anchor($user->homepage, $user->homepage, array('itemprop' => 'url')); ?></dd>
						</dl>
					<?php endif; ?>
					
					<dl title="<?php echo __('Birthday') ?>">
						<dt><i class="fa fa-calendar"></i></dt>
						<dd itemprop="birthDate"><?php echo date('M d, Y', $user->dob) ?></dd>
					</dl>
					<?php if (User::is_admin()): ?>
						<dl>
							<dt><i class="fa fa-group"></i></dt>
							<dd class="tagcloud">
								<?php foreach ($user->roles() as $role): ?>
									<span><?php echo Text::plain(ucfirst($role)); ?></span>
								<?php endforeach; ?>
							</dd>
						</dl>
					<?php endif; ?>
				</div>

				<div class="col-md-12 bio">
					<?php if ($user->bio): ?>
						<div class="widget">
							<div class="widget-header">
								<h4><?php echo __('Bio'); ?></h4>
							</div>
							<div class="widget-content">
								<?php echo Text::plain($user->bio); ?>
							</div>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>

		<div class="col-md-3 col-sm-6 col-sidebar-right">
			<div class="list-group">  
				<a href="#" class="list-group-item"><h3 class="pull-right"><i class="fa fa-sign-in"></i></h3>
					<h4 class="list-group-item-heading"><?php echo date('M d, Y', $user->created); ?></h4>
					<p class="list-group-item-text"><?php echo __('Joined on'); ?></p>
				</a>
				<a href="#" class="list-group-item"><h3 class="pull-right"><i class="fa fa-power-off"></i></h3>
					<h4 class="list-group-item-heading"><?php echo $user->logins; ?></h4>
					<p class="list-group-item-text"><?php echo __('Visits'); ?></p>
				</a>
				<a href="#" class="list-group-item"><h3 class="pull-right"><i class="fa fa-fire"></i></h3>
					<h4 class="list-group-item-heading"><?php echo date('M d, Y', $user->login); ?></h4>
					<p class="list-group-item-text"><?php echo  __(' @ ') .  date('h:i a', $user->login); ?></p>
				</a>
			</div> <!-- /.list-group -->
		</div>
	</div> <!-- /.row -->
</div> <!-- /#content-container -->

	
<?php
	Assets::js('user', 'media/js/user.js', array('jquery'), FALSE, array('weight' => 15));
	Assets::js('user/form', 'media/js/jquery.form.min.js', array('jquery'), FALSE, array('weight' => 10));
?>