<div class="gleez-masthead">
	<div class="container-fluid">
		<h1><?php _e('Gleez CMS'); ?></h1>
		<p class="lead">Open source, extensible Content Management System that is built on the Kohana Framework.</p>
		<p>
			<?php echo HTML::anchor('https://github.com/gleez/cms/', 'Download on GitHub', array('class' => 'btn btn-success btn-large')); ?>
			<?php echo HTML::anchor('/guide/gleez/gleez.introduction/', 'Get started &rarr;', array('class' => 'btn btn-large')); ?>
		</p>
	</div>
</div>

<div class="container-fluid">
	<div class="gleez-social">
		<ul class="gleez-social-buttons">
			<li><iframe src="http://ghbtns.com/github-btn.html?user=gleez&repo=cms&type=watch&count=true" allowtransparency="true" frameborder="0" scrolling="0" width="100" height="20"></iframe></li>
			<li><iframe src="http://ghbtns.com/github-btn.html?user=gleez&repo=cms&type=fork&count=true" allowtransparency="true" frameborder="0" scrolling="0" width="100" height="20"></iframe></li>
			<li><iframe src="http://ghbtns.com/github-btn.html?user=sandeepone&type=follow&count=true" allowtransparency="true" frameborder="0" scrolling="0" width="200" height="20"></iframe></li>
		</ul>
	</div>
	<ul class="gleez-masthead-links">
		<li><?php echo HTML::anchor('http://demo.gleezcms.org', 'Demo Site'); ?></li>
		<li><?php echo HTML::anchor('https://github.com/gleez/cms/wiki', 'Gleez Wiki'); ?></li>
		<li><?php echo HTML::anchor('https://www.facebook.com/gleezcms', 'Facebook'); ?></li>
		<li><?php echo HTML::anchor('https://plus.google.com/communities/111605254519349265711', 'Google Plus'); ?></li>
	</ul>
</div>

<div class="gleez-dochead">
	<div class="container-fluid">
		<p>We hate reinventing the wheel. But when the wheel doesn't exist, or is square, we're not afraid to invent a round one.</p>
	</div>
</div>

<div class="gleez-docbody">
	<div class="container-fluid">
		<h3>What Is Gleez CMS?</h3>
		<p>Gleez is an open source, <a href="http://en.wikipedia.org/wiki/Content_management_system">extensible Content Management System</a> that is built on the <a href="http://kohanaframework.org">Kohana Framework</a>. Gleez is the fusion of many good concepts from the 3 most popular CMS: Joomla, Drupal, Wordpress and Ruby Rails. With years of experience using these, we've gathered great ideas and in some cases, improved on them.</p>
		<p>With an emphasis on security and functionality, Gleez is a professional and robust system suitable for any business or organization. Built on the PHP programming language and the MySQL database, Gleez delivers superb performance on any size application.</p>
		<div class="gleez-features">
			<div class="row-fluid">
				<div class="span4">
					<i class="icon-cogs icon-3x"></i>
					<h4>Modules</h4>
					<p>Modules - Code that extends the functionalities of Gleez. We just call them "Modules", others call it "Plugins"(Wordpress) or "Modules"(Drupal), but it's a more general term. Everything you can use for Gleez is an Extension.</p>
				</div>

				<div class="span4">
					<i class="icon-picture icon-3x"></i>
					<h4>Themes</h4>
					<p>Themes - the look and layout of a Gleez. A theme consists of one or more PHP files that define the HTML output of your site's pages, along with one or more CSS files that define the layout, fonts, colors, and other styles.</p>
				</div>

				<div class="span4">
					<i class="icon-columns icon-3x"></i>
					<h4>Widgets</h4>
					<p>Widgets - the mini content boxes of a page. Others call it "Modules"(Joomla), "Blocks"(Drupal), and also "Widgets"(Wordpress). Extend the functionality by themes using unlimited regions.</p>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span4">
					<i class="icon-group icon-3x"></i>
					<h2>Users & Groups</h2>
					<p>Users, Roles, and Permissions. Users on your site can be assigned permissions via roles. Permissions are quite flexible -- you are allowed to assign permission for any task to any role, depending on the needs of your site. </p>
				</div>
				<div class="span4">
					<i class="icon-folder-open icon-3x"></i>
					<h2>Taxonomy & Tags</h2>
					<p>Gleez uses <a href="http://www.sitepoint.com/hierarchical-data-database-2/">MPTT</a> system for classifying content, which is known as taxonomy and implemented in the core. You can define your own vocabularies (groups of taxonomy terms), and add terms to each vocabulary.</p>
				</div>
				<div class="span4 seo">
					<i class="icon-globe icon-3x"></i>
					<h2>SEO</h2>
					<p> Canonical URL: the search engine friendly URL that you want the search engines to treat as authoritative. Clean url's, canocial & shortlinks are in core for SEO. Gleez adds meta tags support and url aliases handled by path class.</p>
				</div>
			</div>
		</div>
	</div>
</div>