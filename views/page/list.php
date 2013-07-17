<?php defined('SYSPATH') OR die('No direct script access.'); ?>

<div class="row">
	<div class="span1 pull-right">
		<?php echo HTML::icon($rss_link, 'icon-rss', array('title' => 'RSS 2.0', 'class' => 'pull-right')); ?>
	</div>
</div>
<?php foreach($posts as $i => $post): ?>
	<div id="post-<?php echo $post->id; ?>" class="post-list post-<?php echo $post->status; ?>">
		<div class="title-holder">
			<h2 class="post-title">
				<?php echo HTML::anchor($post->url, $post->title); ?>
			</h2>
		</div>
		<?php if ($post->promote): ?>
			<i class="post-bookmark clearfix"></i>
		<?php endif; ?>
		<?php
			echo View::factory($post->type.'/teaser')
				->set('post',       $post)
				->set('config',     $config)
				->set('page_title', TRUE);
		?>
	</div>
<?php endforeach; ?>

<?php echo $pagination; ?>