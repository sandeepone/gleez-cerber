<?php if($post->taxonomy OR $config->use_submitted): ?>
	<section class="post-meta row">
		<?php if ($config->use_submitted): ?>
			<div class="col-md-7">
				<span class="post-created">
					<i class="fa fa-calendar"></i>
					<?php echo Date::date_format($post->created); ?>
				</span>
				<span class="post-author">
					<i class="fa fa-user"></i>
					<?php echo HTML::anchor($post->user->url, $post->user->nick, array('title' => $post->user->nick)); ?>
				</span>
			</div>
		<?php endif;?>
		<?php if ($post->taxonomy): ?>
			<div class="col-md-5 pull-right">
				<span class="post-taxonomy"><?php echo $post->taxonomy; ?></span>
			</div>
		<?php endif;?>
	</section>
<?php endif;?>

<section class="post-entry">
	<?php echo $post->teaser; ?>
	<?php if ($post->tagcloud): ?>
		<section class="post-tags row">
			<?php echo $post->teaser; ?>
		</section>
	<?php endif;?>
	<div class="post-postarea">
		<?php echo HTML::anchor($post->url, __('Read More'), array('title' => __('Read more about :title', array(':title' => $post->title)), 'class' => 'readmore btn btn-default btn-xs')); ?>
	</div>
</section>
