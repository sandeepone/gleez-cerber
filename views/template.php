<?php defined('SYSPATH') OR die('No direct script access.'); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
	<title><?php echo $head_title ?></title>
	<?php echo Meta::tags(); ?>
	<?php echo Meta::links(); ?>
	<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<?php echo Assets::css(); ?>
	<!-- link href="/media/css/bootstrap-responsive.min.css" rel="stylesheet" media="all" -->
	<!--[if lt IE 8]>
		<link type="text/css" href="/media/css/font-awesome-ie7.css" rel="stylesheet" media="all" />
	<![endif]-->
</head>
<body id="<?php echo $page_id; ?>" class="<?php echo $page_class; ?>">
	<!-- ########## Navbar start ########## -->
	<div class="navbar navbar-fixed-top navbar-inverse">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="<?php echo $site_url ?>" title="<?php echo $site_slogan ?>"><?php echo $site_name ?></a>

				<div class="nav-collapse collapse">
					<?php echo $primary_menu; ?>

					<ul class="nav pull-right">
						<?php if (User::is_guest()): ?>
							<li><a href="<?php echo URL::site('/user/register'); ?>"><?php echo __('Sign Up')?></a></a></li>
							<li><a href="<?php echo URL::site('/user/login'); ?>"><i class="icon-white icon-chevron-left"></i><?php echo __('Sign In') ?></a></li>
						<?php else:  ?>
						<li class="dropdown">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-user"></i>
								<?php echo $_user->nick; ?>
								<b class="caret"></b>
							</a>

							<ul class="dropdown-menu">
								<?php if (User::is_admin()): ?>
									<li><a href="<?php echo URL::site('/admin') ?>"><i class="icon-dashboard"></i> <?php echo __('Dashboard') ?></a></li>
									<li class="divider"></li>
								<?php endif; ?>
								<li><a href="<?php echo URL::site('/user/profile') ?>"><i class="icon-cog"></i> <?php echo __('Profile') ?></a></li>
								<li><a href="<?php echo URL::site("/user/edit") ?>"><i class="icon-pencil"></i> <?php echo __('Account') ?></a></li>
								<li class="divider"></li>
								<li><a href="<?php echo URL::site('/user/logout'); ?>"><i class="icon-off"></i> <?php echo __('Sign Out') ?></a></li>
							</ul>
						</li>
						<?php endif; ?>
					</ul>
				</div>

			</div>
		</div>
	</div>
	<!-- ########## Navbar end ########## -->

	<!-- ########## Container start ########## -->
	<div class="container main">
		<?php
			$tpl = $is_admin ? 'admin' : 'default';
			include Kohana::find_file('views', $tpl.'.tpl');
		?>
	</div>
	<!-- ########## Container end ########## -->

	<!-- ########## Footer start ########## -->
	<footer class="footer">
		<div class="container">
			<div class="row" id="footer-region">
				<?php echo Widgets::instance()->render('footer', 'footer'); ?>
			</div>
		</div>
	</footer>
	<!-- ########## Footer end ########## -->

	<?php echo Assets::js(FALSE); ?>
	<?php echo Assets::codes(FALSE); ?>
	<?php echo $profiler; ?>
</body>
</html>