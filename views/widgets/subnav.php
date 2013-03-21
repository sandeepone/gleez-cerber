<?php defined('SYSPATH') OR die('No direct script access.'); ?>

<div id="widget-<?php echo $widget->module; ?>-<?php echo $widget->name; ?> <?php echo (isset($id)) ? 'widget-'.$id : '' ?>" class="widget blockme widget-<?php echo $widget->name; ?>">
	<div class="widget-content">
		<?php echo $content; ?>
	</div>
</div>