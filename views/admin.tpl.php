<?php if ($messages): ?>
	<!-- ########## Messages start ########## -->
	<div id="messages" class="messages span8 offset2">
		<?php echo $messages ?>
	</div>
	<!-- ########## Messages end ########## -->
<?php endif; ?>

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
	<div id="row-content" class="span<?php echo $main_column?>">
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
