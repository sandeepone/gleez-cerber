<?php defined('SYSPATH') OR die('No direct script access.'); ?>

<div id="widget-<?php echo $widget->module; ?>-<?php echo $widget->name; ?> <?php echo (isset($id)) ? 'widget-'.$id : '' ?>" class="widget blockme widget-<?php echo $widget->name; ?> <?php echo ($widget->menu) ? 'widget-menu' : ''; ?>">

    <?php if ($widget->show_title): ?>
        <div class="widget-header">
            <h3><?php echo Text::plain($title); ?></h3>
        </div>
    <?php endif; ?>

    <div class="widget-content"><?php echo $content; ?></div>

</div>