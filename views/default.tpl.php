<?php defined('SYSPATH') OR die('No direct script access.');
	if ($is_front OR ! $sidebar_right)
	{
		$main_column = 12;
	}
?>
<?php if ($messages): ?>
	<!-- ########## Messages start ########## -->
	<div id="messages" class="messages span9 offset1">
		<?php echo $messages ?>
	</div>
	<!-- ########## Messages end ########## -->
<?php endif; ?>
<?php if ($title): ?>
	<div class="subnavbar">
		<header class="container">
			<div class="page-header-top">
				<h1><?php echo $title;?></h1>
			</div>
		</header>
	</div>
<?php endif; ?>

<div class="container main">
	<div class="row-fluid">
		<div class="span12">
			<div class="row-fluid">
				<div class="span<?php echo $main_column?>">
					<?php if ($tabs): ?>
						<div id="tabs-actions">
							<div id="tabs"><?php echo $tabs; ?></div>
						</div>
					<?php endif;?>
					<div id="content" class="<?php echo $tabs ? 'with-tabs' : 'without-tabs'?>">
						<?php echo $content; ?>
					</div>
				</div>
				<?php if ( ! $is_front AND $sidebar_right): ?>
					<div class="span3">
						<!-- ########## Sidebar right start ########## -->
						<div id="right">
							<?php echo $sidebar_right; ?>
						</div>
						<!-- ########## Sidebar right end ########## -->
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>