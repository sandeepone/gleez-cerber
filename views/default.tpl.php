<?php defined('SYSPATH') OR die('No direct script access.');?>
<?php
	$top            = Widgets::instance()->render('top');
	$bottom         = Widgets::instance()->render('bottom');
	$content_top    = Widgets::instance()->render('content_top', 'html');
	$content_bottom = Widgets::instance()->render('content_top', 'html');
?>
<?php if ($messages): ?>
	<!-- ########## Messages start ########## -->
	<div id="messages" class="messages span8 offset2">
		<?php echo $messages ?>
	</div>
	<!-- ########## Messages end ########## -->
<?php endif; ?>

<?php if ($top AND ! empty($top)): ?>
	<!-- ########## Top start ########## -->
	<div class="row-fluid">
		<div class="span12">
			<?php echo $top; ?>
		</div>
	</div>
	<!-- ########## Top end ########## -->
<?php endif;?>
<div class="row-fluid">
	<?php if ($sidebar_left): ?>
		<!-- ########## Sidebar left start ########## -->
		<div class="span3">
			<div id="left">
				<?php echo $sidebar_left; ?>
			</div>
		</div>
		<!-- ########## Sidebar left end ########## -->
	<?php endif; ?>
	<!-- ########## Content start ############# -->
	<div class="span<?php echo $main_column?>">
		<?php if ($content_top AND ! empty($content_top)): ?>
			<?php echo $content_top; ?>
		<?php endif; ?>
		<?php if ($title): ?>
		<div class="page-header">
			<h1><?php echo $title;?></h1>
		</div>
		<?php endif; ?>
		<?php if ($tabs): ?>
			<div id="tabs-actions">
				<div id="tabs"><?php echo $tabs; ?></div>
			</div>
		<?php endif;?>
		<div id="content" class="<?php echo $tabs ? 'with-tabs' : 'without-tabs'?>">
			<?php echo $content; ?>
		</div>
		<?php if ($content_bottom AND ! empty($content_bottom)): ?>
			<?php echo $content_bottom; ?>
		<?php endif; ?>
	</div>
	<!-- ########## Content end ############### -->
	<?php if ($sidebar_right): ?>
		<!-- ########## Sidebar right start ########## -->
		<div class="span3">
			<div id="right">
				<?php echo $sidebar_right; ?>
			</div>
		</div>
		<!-- ########## Sidebar right end ########## -->
	<?php endif; ?>
</div>
<?php if ($bottom AND ! empty($bottom)): ?>
	<!-- ########## Bottom start ########## -->
	<div class="row-fluid">
		<div class="span12">
			<?php echo $bottom; ?>
		</div>
	</div>
	<!-- ########## Bottom end ########## -->
<?php endif;?>