<?php
	$top            = Widgets::instance()->render('top');
	$bottom         = Widgets::instance()->render('bottom');
	$content_top    = Widgets::instance()->render('content_top', 'html');
	$content_bottom = Widgets::instance()->render('content_top', 'html');
?>
<div class="container">
	<?php if ($messages): ?>
		<!-- ########## Messages start ########## -->
		<div class="row">
			<div id="messages" class="messages col-md-9 col-md-offset-1">
				<?php echo $messages ?>
			</div>
		</div>
		<!-- ########## Messages end ########## -->
	<?php endif; ?>

	<?php if ($top AND ! empty($top)): ?>
		<!-- ########## Top start ########## -->
		<div class="row">
			<div class="col-md-12">
				<?php echo $top; ?>
			</div>
		</div>
		<!-- ########## Top end ########## -->
	<?php endif;?>
	<div class="row">
		<?php if ($sidebar_left): ?>
			<!-- ########## Sidebar left start ########## -->
			<div class="col-md-3">
				<div id="left">
					<?php echo $sidebar_left; ?>
				</div>
			</div>
			<!-- ########## Sidebar left end ########## -->
		<?php endif; ?>
		<!-- ########## Content start ############# -->
		<div class="col-md-<?php echo $main_column?> page-container">
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
			<div id="content-body" class="<?php echo $tabs ? 'with-tabs' : 'without-tabs'?>">
				<?php echo $content; ?>
			</div>
			<?php if ($content_bottom AND ! empty($content_bottom)): ?>
				<?php echo $content_bottom; ?>
			<?php endif; ?>
		</div>
		<!-- ########## Content end ############### -->
		<?php if ($sidebar_right): ?>
			<!-- ########## Sidebar right start ########## -->
			<div class="col-md-3">
				<div id="right">
					<?php echo $sidebar_right; ?>
				</div>
			</div>
			<!-- ########## Sidebar right end ########## -->
		<?php endif; ?>
	</div>
	<?php if ($bottom AND ! empty($bottom)): ?>
		<!-- ########## Bottom start ########## -->
		<div class="row">
			<div class="col-md-12">
				<?php echo $bottom; ?>
			</div>
		</div>
		<!-- ########## Bottom end ########## -->
	<?php endif;?>
</div>