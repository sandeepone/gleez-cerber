<?php defined("SYSPATH") OR die("No direct script access."); ?>

<?php if (isset($items)): ?>
	<div class="blogs-list">
		<?php foreach($items as $item) : ?>
			<div class="blogs-announce clearfix" id='blogs-announce-'<?php echo $item['id'] ?>>
				<p><?php echo HTML::anchor($item['url'], $item['title']) ?></p>
				<em><?php echo HTML::anchor($item['user_url'], Text::plain($item['user'])); ?>: <?php echo Date::date_format($item['date']) ?></em>
			</div>
		<?php endforeach; ?>
	</div>
<?php endif; ?>