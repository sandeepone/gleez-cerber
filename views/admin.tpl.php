<?php defined('SYSPATH') OR die('No direct script access.'); ?>
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
				<h1 class="default-title"><?php echo $title;?></h1>
			</div>
		</header>
	</div>
<?php endif; ?>

<div class="container">
	<div class="row">
		<div class="span12 dashboard-wrapper">
			<div class="row">
				<div class="span9">
					<?php if ($tabs): ?>
					<div class="page-header<?php echo ($tabs ? ' with-tabs' : ''); ?>">
						<?php echo $tabs; ?>
					</div>
					<?php endif; ?>
					<div id="content"><?php echo $content; ?></div>
				</div>
				<div class="span3">
					<!-- ########## Sidebar right start ########## -->
                    <div id="right">
					    <?php echo $sidebar_right; ?>
                    </div>
					<!-- ########## Sidebar right end ########## -->
				</div>
			</div>
		</div>
	</div>
</div>