<div class="span3 footer-block">
    <?php if ($widget->show_title): ?>
        <h4><?php echo Text::plain($title); ?></h4>
    <?php endif; ?>
    <div class="footer-block-content">
	    <?php echo $content; ?>
    </div>
</div>