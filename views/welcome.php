<div class="container">
	<div class="masthead">
			<h1><?php _e('Gleez CMS'); ?></h1>
			<p class="lead">Open source, extensible Content Management System that is built on the Kohana Framework.</p>
			<p>
				<?php echo HTML::anchor('https://github.com/gleez/cms/', 'Download on GitHub', array('class' => 'btn btn-success btn-large')); ?>
				<?php
					if (Module::is_active('userguide'))
						echo HTML::anchor('/guide/gleez/gleez.introduction/', 'Get started &rarr;', array('class' => 'btn btn-large'));
				?>
			</p>
	</div>

	<div class="gleez-links">
		<div class="masthead-social">
			<ul class="social-buttons">
				<li><iframe src="//ghbtns.com/github-btn.html?user=gleez&repo=cms&type=watch&count=true" allowtransparency="true" frameborder="0" scrolling="0" width="100" height="20"></iframe></li>
				<li><iframe src="//ghbtns.com/github-btn.html?user=gleez&repo=cms&type=fork&count=true" allowtransparency="true" frameborder="0" scrolling="0" width="100" height="20"></iframe></li>
				<li><iframe src="//ghbtns.com/github-btn.html?user=sandeepone&type=follow&count=true" allowtransparency="true" frameborder="0" scrolling="0" width="200" height="20"></iframe></li>
			</ul>
		</div>
		<ul class="masthead-links">
			<li><?php echo HTML::anchor('https://demo.gleezcms.org', 'Demo Site'); ?></li>
			<li><?php echo HTML::anchor('https://github.com/gleez/cms/wiki', 'Gleez Wiki'); ?></li>
			<li><?php echo HTML::anchor('https://www.facebook.com/gleezcms', 'Facebook'); ?></li>
			<li><?php echo HTML::anchor('https://plus.google.com/communities/111605254519349265711', 'Google Plus'); ?></li>
		</ul>
	</div>

	<div class="dochead">
		<p>We hate reinventing the wheel. But when the wheel doesn't exist, or is square, we're not afraid to invent a round one.</p>
	</div>

	<div class="docbody">
		<h3>What Is Gleez CMS?</h3>
		<p>Gleez is an open source, <a href="http://en.wikipedia.org/wiki/Content_management_system">extensible Content Management System</a> that is built on the <a href="http://kohanaframework.org">Kohana Framework</a>. Gleez is the fusion of many good concepts from the 4 most popular systems: Joomla, Drupal, Wordpress and Ruby Rails. With years of experience using these, we've gathered great ideas and in some cases, improved on them.</p>
		<p>With an emphasis on security and functionality, Gleez is a professional and robust system suitable for any business or organization. Built on the PHP programming language and the MySQL database, Gleez delivers superb performance on any size application.</p>

		<div class="features">
			<div class="row">
				<div class="col-md-4">
					<span class="fa-stack fa-3x">
						<i class="fa fa-circle fa-stack-2x"></i>
						<i class="fa fa-cogs fa-stack-1x fa-inverse"></i>
					</span>
					<h4>Modules</h4>
					<p>Modules - Code that extends the functionality of Gleez. We just call them "Modules", others call it "Plugins"(Wordpress) or "Modules"(Drupal), but it's a more general term. Everything you can use for Gleez is an Extension.</p>
				</div>

				<div class="col-md-4">
					<span class="fa-stack fa-3x">
						<i class="fa fa-circle fa-stack-2x"></i>
						<i class="fa fa-camera fa-stack-1x fa-inverse"></i>
					</span>
					<h4>Themes</h4>
					<p>Themes - the look and layout of a Gleez. A theme consists of one or more PHP files that define the HTML output of your site's pages, along with one or more CSS files that define the layout, fonts, colors, and other styles.</p>
				</div>

				<div class="col-md-4">
					<span class="fa-stack fa-3x">
						<i class="fa fa-circle fa-stack-2x"></i>
						<i class="fa fa-columns fa-stack-1x fa-inverse"></i>
					</span>
					<h4>Widgets</h4>
					<p>Widgets - the mini content boxes of a page. Others call it "Modules"(Joomla), "Blocks"(Drupal), and also "Widgets"(Wordpress). Extend the functionality by themes using unlimited regions.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<span class="fa-stack fa-3x">
						<i class="fa fa-circle fa-stack-2x"></i>
						<i class="fa fa-group fa-stack-1x fa-inverse"></i>
					</span>
					<h4>Users & Groups</h4>
					<p>Users, Roles, and Permissions. Users on your site can be assigned permissions via roles. Permissions are quite flexible -- you are allowed to assign permission for any task to any role, depending on the needs of your site. </p>
				</div>
				<div class="col-md-4">
					<span class="fa-stack fa-3x">
						<i class="fa fa-circle fa-stack-2x"></i>
						<i class="fa fa-folder-open fa-stack-1x fa-inverse"></i>
					</span>
					<h4>Taxonomy & Tags</h4>
					<p>Gleez uses <a href="http://www.sitepoint.com/hierarchical-data-database-2/">MPTT</a> system for classifying content, which is known as taxonomy and implemented in the core. You can define your own vocabularies (groups of taxonomy terms), and add terms to each vocabulary.</p>
				</div>
				<div class="col-md-4 seo">
					<span class="fa-stack fa-3x">
						<i class="fa fa-circle fa-stack-2x"></i>
						<i class="fa fa-globe fa-stack-1x fa-inverse"></i>
					</span>
					<h4>SEO</h4>
					<p> Canonical URL: the search engine friendly URL that you want the search engines to treat as authoritative. Clean url's, canocial & shortlinks are in core for SEO. Gleez adds meta tags support and url aliases handled by path class.</p>
				</div>
			</div>
		</div>
	</div>
</div>