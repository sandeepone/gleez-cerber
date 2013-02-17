<?php defined("SYSPATH") OR die("No direct script access."); ?>

<?php echo Slider::instance()->render(); ?>
<!-- Start Info -->
<div class="infotextwrap">
  <div class="infotext">
    <h2><span><?php echo $template->site_name ?></span> &mdash; <?php echo $template->site_slogan ?></h2>
  </div>
</div>
<!-- End Info -->
<div class="container">
	<?php echo Tribloka::render(); ?>
</div>