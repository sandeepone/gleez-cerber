<?php defined('SYSPATH') OR die('No direct script access.'); ?>

<div class="row">
	<div class="span12">
		<div class="row">
			<div class="span8 offset2">
				<!-- ########## Messages start ########## -->
				<div id="messages" class="messages span8">
					<?php echo $messages ?>
				</div>
				<!-- ########## Messages end ########## -->
			</div>
		</div>

		<div class="row">
			<!-- ########## Subnavbar start ########## -->
			<div class="span12" id="subnavbar-region">
				<?php echo Widgets::instance()->render('subnavbar', 'html'); ?>
			</div>
			<!-- ########## Subnavbar end ########## -->
		</div>

		<div class="row">
			<div class="span12">
				<div id="content">
					<?php echo $content; ?>
				</div>
			</div>
		</div>
	</div>
</div>