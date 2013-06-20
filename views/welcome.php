<?php defined('SYSPATH') OR die('No direct script access.'); ?>

<div id="frontpage-region">
    <!-- Frontpage Region Start -->
    <?php $widgets = Widgets::instance()->render('top', 'html'); ?>
	<?php if ( ! $widgets or empty($widgets)): ?>
		<div class="span8 offset2">
			<div class="row-desktop">
				<h1>Welcome to GleezCMS - Content Management System!</h1>
				<h3>What Is GleezCMS?</h3>
				<p>GleezCMS is a user-friendly website content management system.  With GleezCMS you can easily build dynamic websites within a matter of minutes with just the click of your mouse!  Maintain your web content, navigation and even limit what groups or specific users can access, from anywhere in the world with just a web browser!  With an emphasis on security and functionality, GleezCMS is a professional and robust system suitable for any business or organization website.  Built on the PHP programming language and the MySQL database, GleezCMS delivers superb performance on any size website.</p>
			</div>
		</div>
	<?php endif; ?>
    <!-- Frontpage Region End -->
</div>